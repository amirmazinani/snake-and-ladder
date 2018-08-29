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

    //set 100 houses
    for (let i = 1; i <= 10; i++) {
		for (let j = 1; j <= 10; j++){
			$('#board').append('<div class="-pos-r sqr b-gray -t-al-c"><span>' + (10 * i - 10 + j) + '</span><span class="pawn -pos-a -top-0 -left-0 -w-11 h-100d"></span></div>');
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

    let roll_die = {first_die:null,second_die:null};
    let user = new User(1,1,true);
    let computer = new User(2,2,false);



    function prime(num) {
        let number = Number(num);
        let res = 1;
        if(number===1){
            return false;
        }
        for (let i = 2; i <= number - 1; i++) {
            if (number % i == 0) {
                res++;
                if (res > 1) return false;
                break;
            }
        }
        return true;
    }


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
        if(user.name === 1 && user.roll === false && user.operator === true){
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
                $('#start_player_1').removeClass('empty').addClass('filled').find('span').text('');
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
                $('.player_1').removeClass('player_1');
            }else if(user.position === computer.position){
                $('#start_player_2 > span').text('');
                $('#start_player_2').removeClass('empty').addClass('filled').find('span').text('');
                $('.player_2').removeClass('player_2');
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
                $('.player_1').removeClass('player_1');
                $('#board > div:nth-child('+user.position+') > .pawn').addClass('player_1');
                $('#start_player_1').removeClass('filled').addClass('empty').find('span').text(user.position);
			}else if((user.position > 0 || user.position < 101) && !prime(user.position)){
                $('.player_1').removeClass('player_1');
                $('#board > div:nth-child('+user.position+') > .pawn').addClass('player_1');
                $('#start_player_1').removeClass('filled').addClass('empty').find('span').text(user.position);
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
		}

        //find winner
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
            user.roll = false;
            user.operator = false;
            computer.roll = false;
            computer.operator = false;
            computer.started = false;
            $('#msg').removeClass('no_winner').addClass('winner_msg_2');
            $('#msg > i').addClass('-dis-n');
            $('#msg > span').removeClass('-dis-n').text('red win!');
            $('#start_player_2').removeClass('empty').addClass('filled');
        }
    });


});