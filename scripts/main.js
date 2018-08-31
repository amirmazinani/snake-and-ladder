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
    //class User
    function User(name='no name',number=1,roll=true,operator=false,started=false,position=0,step=0,winner=false) {
        this.name = name;
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




    let roll_die = {first_die:null,second_die:null};
    let user = new User(1,1,true);
    let computer = new User(2,2,false);

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
            let result = 0;
            if($(this).is("#sum")){
                result = roll_die.first_die + roll_die.second_die;
            }else if($(this).is("#subtract")){
                result = roll_die.first_die - roll_die.second_die;
            }else if($(this).is("#multiply")){
                result = roll_die.first_die * roll_die.second_die;
            }else if($(this).is("#divide")){
                result = roll_die.first_die / roll_die.second_die;
                if(roll_die.second_die === 0)result=1000;
            }

            result = Number(Math.floor(result));
            user.position = result + user.position;
            if(user.position===100)user.winner=true;

            if(result === 1000 || user.position <= 0 || user.position >= 101 || prime(user.position)){
                user.position = 0;
                $('#start_player_1').removeClass('empty').addClass('filled').find('span').text('');
                roll_die.first_die = roll_die.second_die = null;
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
                $('.player_1').removeClass('player_1');
            }else if(user.position === computer.position){
                computer.position = 0;
                $('#start_player_2 > span').text('');
                $('#start_player_2').removeClass('empty').addClass('filled').find('span').text('');
                $('.player_2').removeClass('player_2');
                roll_die.first_die = roll_die.second_die = null;
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
                $('.player_1').removeClass('player_1');
                $('#board > div:nth-child('+user.position+') > .pawn').addClass('player_1');
                $('#start_player_1').removeClass('filled').addClass('empty').find('span').text(user.position);
			}else if((user.position > 0 || user.position < 101) && !prime(user.position)){
                $('.player_1').removeClass('player_1');
                $('#board > div:nth-child('+user.position+') > .pawn').addClass('player_1');
                $('#start_player_1').removeClass('filled').addClass('empty').find('span').text(user.position);
                roll_die.first_die = roll_die.second_die = null;
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
			}

            $('#roll').removeClass('-dis-n');
            $('.operator').addClass('-dis-n');
            $('#msg > i').toggleClass('-fnt-icon-left -fnt-icon-right');

            user.roll = false;
            user.operator = false;
            user.step++;
            computer.roll = true;
            computer.operator = false;
            console.table(user);
            findWinner();
            setTimeout(computer_move,1000);
		}
    });
    //-----------------------computer move
    function computer_move() {
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
            }
            else if(roll_die.second_die!==0){
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
            }
            if(computer.position < user.position){
                for (let i in comPos){
                    if(comPos[i] === user.position && comPos[i] !== 0 ){
                        computer.position = comPos[i];
                        $('.player_2').removeClass('player_2');
                        $('#board > div:nth-child('+computer.position+') > .pawn').addClass('player_2');
                        $('#start_player_2').removeClass('filled').addClass('empty').find('span').text(computer.position);
                        user.position = 0;
                        $('#start_player_1 > span').text('');
                        $('#start_player_1').removeClass('empty').addClass('filled').find('span').text('');
                        $('.player_1').removeClass('player_1');
                    }
                }
                computer.position = Math.max(comPos.sum,comPos.sub,comPos.multi,comPos.div);
                $('.player_2').removeClass('player_2');
                $('#board > div:nth-child('+computer.position+') > .pawn').addClass('player_2');
                $('#start_player_2').removeClass('filled').addClass('empty').find('span').text(computer.position);
                if(comPos.sum===comPos.sub===comPos.multi===comPos.div===null){
                    console.log('1');
                    computer.position = 0;
                    $('#start_player_2').removeClass('empty').addClass('filled').find('span').text('');
                    $('.player_2').removeClass('player_2');
                }
            }else if(computer.position > user.position || computer.position === 0){
                computer.position = Math.max(comPos.sum,comPos.sub,comPos.multi,comPos.div);
                $('.player_2').removeClass('player_2');
                $('#board > div:nth-child('+computer.position+') > .pawn').addClass('player_2');
                $('#start_player_2').removeClass('filled').addClass('empty').find('span').text(computer.position);
                if(comPos.sum===comPos.sub===comPos.multi===comPos.div===null){
                    console.log('2');
                    computer.position = 0;
                    $('#start_player_2').removeClass('empty').addClass('filled').find('span').text('');
                    $('.player_2').removeClass('player_2');
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
        console.table(comPos);
        console.table(computer);
    }

});