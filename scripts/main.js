$(document).ready(function () {
    //view
    $('#description > main > nav > ul > li').on('click',function () {
        let lang = $(this).data('language');
        $('#description > main > nav > ul > li').removeClass('active');
        $(this).addClass('active');
        $('#description > main > div > div').addClass('-dis-n');
        $('#description > main > div > div.'+lang).removeClass('-dis-n');
    });
    $('.information').on('click',function () {
        $('#description').toggleClass('top-100');

        if($('#description').hasClass('top-100')){
            $('body').removeClass('-ovf-h');
        }else{
            $('body').addClass('-ovf-h');
        }

    });
    //class User
    function User(code='no code',number=1,roll=true,operator=false,started=false,position=0,step=0,winner=false) {
        this.code = code;
        this.number = number;
        this.roll = roll;
        this.operator = operator;
        this.started = started;
        this.position = position;
        this.step = step;
        this.winner = winner;
    }
    //set 100 houses
    for (let i = 1; i <= 10; i++) {
        for (let j = 1; j <= 10; j++){
            $('#board').append('<div class="-pos-r sqr b-gray -t-al-c"><span>' + (10 * i - 10 + j) + '</span><span class="pawn -pos-a -top-0 -left-0 -w-11 h-100d"></span></div>');
        }
    }
    //objects
    let roll_die = {first_die:null,second_die:null};
    let user = new User(1,1,true);
    let computer = new User(2,2,false);

    //roll
    function roll_dice() {
        roll_single_die("first_die");
        roll_single_die("second_die");
    }
    function roll_single_die(id){
        elem = $("#" + id + " > span");
        current = elem.text();
        next = Math.floor(Math.random() * 7);
        do{
            next = Math.floor(Math.random() * 7)
        } while(next + "" == current);
        roll_die[id] = next;
        elem.text(roll_die[id]);
    }
    //check prime number
    function prime(num) {
        let number = Number(num);
        let res = 1;
        if(number===1){
            return false;
        }
        for (let i = 2; i <= number - 1; i++) {
            if (number % i === 0) {
                res++;
                if (res > 1) return false;
                break;
            }
        }
        return true;
    }
    function move(obj){
        $('.player_'+obj.code).removeClass('player_'+obj.code);
        $('#board > div:nth-child('+obj.position+') > .pawn').addClass('player_'+obj.code);
        $('#start_player_'+obj.code).removeClass('filled').addClass('empty').find('span').text(obj.position);
    }
    function roll_empty(a){
        roll_die.first_die = roll_die.second_die = null;
        if(a===1){
            $('#first_die.dice > span').text('?');
            $('#second_die.dice > span').text('?');
        }
    }
    function go_to_house(obj){
        obj.position = 0;
        $('#start_player_'+obj.code+' > span').text('');
        $('#start_player_'+obj.code).removeClass('empty').addClass('filled').find('span').text('');
        $('.player_'+obj.code).removeClass('player_'+obj.code);
    }
    //find winner
    function findWinner() {
        if(user.winner===true){
            user.roll = false;
            user.operator = false;
            computer.roll = false;
            computer.operator = false;
            computer.started = false;
            $('#msg').removeClass('no_winner').addClass('winner_msg_1');
            $('#msg > i').addClass('-dis-n');
            $('#msg > span').removeClass('-dis-n').text('blue win!');
            $('#start_player_1').removeClass('empty').addClass('filled');
        }
        if(computer.winner===true){
            computer.roll = false;
            computer.operator = false;
            user.roll = false;
            user.operator = false;
            user.started = false;
            $('#msg').removeClass('no_winner').addClass('winner_msg_2');
            $('#msg > i').addClass('-dis-n');
            $('#msg > span').removeClass('-dis-n').text('red win!');
            $('#start_player_2').removeClass('empty').addClass('filled');
        }
    }

    //user roll
    $('#roll').on('click',function () {
        if(user.roll === true && user.operator === false){
             roll_dice();

            if(user.started === false){
                user.started = true;
                $('#msg > span').addClass('-dis-n');
                $('#msg > i').removeClass('-dis-n');
            }
            $('#roll').addClass('-dis-n');
            $('.operator').removeClass('-dis-n');
            user.roll = false;
            user.operator = true;
        }
    });

    $('.operator').on('click',function () {
        if(user.roll === false && user.operator === true){
            //calculate result and user.position
            let result = 0;
            if($(this).is("#sum")){
                result = roll_die.first_die + roll_die.second_die;
            }
            else if($(this).is("#subtract")){
                result = roll_die.first_die - roll_die.second_die;
            }
            else if($(this).is("#multiply")){
                result = roll_die.first_die * roll_die.second_die;
            }
            else if($(this).is("#divide")){
                result = roll_die.first_die / roll_die.second_die;
                if(roll_die.second_die === 0)result=1000;
            }
            result = Number(Math.floor(result));
            user.position = result + user.position;
            if(user.position===100)user.winner=true;
            //move conditions
            if(result === 1000 || user.position <= 0 || user.position >= 101 || prime(user.position)){
                go_to_house(user);
                roll_empty(1);
            }
            else if(user.position === computer.position){
                move(user);
                go_to_house(computer);
                roll_empty(1);
			}
			else if((user.position > 0 || user.position < 101) && !prime(user.position)){
                move(user);
                roll_empty(1);
			}

			//view toggling

            $('#roll').removeClass('-dis-n');
            $('.operator').addClass('-dis-n');
            $('#msg > i').toggleClass('-fnt-icon-left -fnt-icon-right');
            //change setting for opponent move
            user.roll = false;
            user.operator = false;
            user.step++;
            computer.roll = true;
            computer.operator = false;
            findWinner();
            setTimeout(computer_move,1000);
		}
    });
    //computer move
    function computer_move() {
        //raw objects
        let comResult = {
            sum:null,
            sub:null,
            multi:null,
            div:null,
        };
        let comPos = {
            sum:null,
            sub:null,
            multi:null,
            div:null,
        };
        //computer roll
        if(computer.roll === true && computer.operator === false){
            if(computer.started === false){
                computer.started = true;
            }
            roll_dice();

            computer.roll = false;
            computer.operator = true;
        }
        if(computer.roll === false && computer.operator === true){

            if(roll_die.second_die===0){
                comResult.sum = roll_die.first_die;
                comPos.sum = comResult.sum+computer.position;
                comPos.sum = (comPos.sum <= 0 || comPos.sum >= 101 || prime(comPos.sum))? null : comPos.sum;
                comResult.sub = roll_die.first_die;
                comPos.sub = comResult.sub+computer.position;
                comPos.sub = (comPos.sub <= 0 || comPos.sub >= 101 || prime(comPos.sub))? null : comPos.sub;
                comResult.multi = 0;
                comPos.multi = computer.position;
                comPos.multi = (comPos.multi <= 0 || comPos.multi >= 101 || prime(comPos.multi))? null : comPos.multi;


                if(computer.position < user.position){
                    for (let i in comPos){
                        if(comPos[i] === user.position && comPos[i] !== 0 ){
                            computer.position = comPos[i];
                            move(computer);
                            go_to_house(user);
                        }
                        else if(comPos.sum===null && comPos.sub=== null && comPos.multi=== null && comPos.div===null){
                            go_to_house(computer);
                        }
                        else if(comPos[i] !== user.position){
                            computer.position = Math.max(comPos.sum,comPos.sub,comPos.multi,comPos.div);
                            move(computer);
                        }
                        break;
                    }
                }
                else if(computer.position > user.position || computer.position === 0){
                    if(comPos.sum===null && comPos.sub=== null && comPos.multi=== null && comPos.div===null){
                        go_to_house(computer);
                    }else{
                        computer.position = Math.max(comPos.sum,comPos.sub,comPos.multi,comPos.div);
                        move(computer);
                    }
                }
            }
            else if(roll_die.second_die > 0){
                comResult.sum = Number(Math.floor(roll_die.first_die + roll_die.second_die));
                comPos.sum = comResult.sum + computer.position;
                comPos.sum = (comPos.sum <= 0 || comPos.sum >= 101 || prime(comPos.sum))? null : comPos.sum;
                comResult.sub = Number(Math.floor(roll_die.first_die - roll_die.second_die));
                comPos.sub = comResult.sub + computer.position;
                comPos.sub = (comPos.sub <= 0 || comPos.sub >= 101 || prime(comPos.sub))? null : comPos.sub;
                comResult.multi = Number(Math.floor(roll_die.first_die * roll_die.second_die));
                comPos.multi =  comResult.multi + computer.position;
                comPos.multi = (comPos.multi <= 0 || comPos.multi >= 101 || prime(comPos.multi))? null : comPos.multi;
                comResult.div = Number(Math.floor(roll_die.first_die / roll_die.second_die));
                comPos.div = comResult.div + computer.position;
                comPos.div = (comPos.div <= 0 || comPos.div >= 101 || prime(comPos.div))? null : comPos.div;


                if(computer.position < user.position){
                    for (let i in comPos){
                        if(comPos[i] === user.position && comPos[i] !== 0 ){
                            computer.position = comPos[i];
                            move(computer);
                            go_to_house(user);
                        }
                        else if(comPos.sum===null && comPos.sub=== null && comPos.multi=== null && comPos.div===null){
                            go_to_house(computer);
                        }
                        else if(comPos[i] !== user.position){
                            computer.position = Math.max(comPos.sum,comPos.sub,comPos.multi,comPos.div);
                            move(computer);
                        }
                        break;
                    }
                }
                else if(computer.position > user.position || computer.position === 0){
                    if(comPos.sum===null && comPos.sub=== null && comPos.multi=== null && comPos.div===null){
                        go_to_house(computer);
                    }else{
                        computer.position = Math.max(comPos.sum,comPos.sub,comPos.multi,comPos.div);
                        move(computer);
                    }
                }
            }
        }
        if(computer.position===100)computer.winner=true;
        $('#msg > i').toggleClass('-fnt-icon-left -fnt-icon-right');
        computer.roll = false;
        computer.operator = false;
        computer.step++;
        user.roll = true;
        user.operator = false;
        findWinner();
    }

});