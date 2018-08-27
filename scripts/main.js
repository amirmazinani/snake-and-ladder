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
        elem.text(next);
    }

    //set 100 houses
    for (var i = 1; i <= 10; i++) {
		for (var j = 1; j <= 10; j++){
			$('#board').append('<div class="-pos-r sqr b-gray -t-al-c"><span>' + (10 * i - 10 + j) + '</span><span class="pawn -pos-a -top-0 -left-0 -w-11 h-100d"></span></div>');
		} 
	}




	let user1 = {'name' : 1,'roll' : true,'operator' : false,'started':false};
	let user2 = {'name' : 2,'roll' : false,'operator' : false,'started':false};

    function prime(num) {
        var number = Number(num);
        var res = 1;
        if(number===1){
            return false;
        }
        for (var i = 2; i <= number - 1; i++) {
            if (number % i == 0) {
                res++;
                if (res > 1) return false;
                break;
            }
        }
        return true;
    }

    $('#roll').on('click',function () {
        if(user1.name === 1 && user1.roll === true && user1.operator === false){
            roll_dice();
            if(user1.started === false){
                user1.started = true;
                $('#msg > span').addClass('-dis-n');
                $('#msg > i').removeClass('-dis-n');
            }
            $('#roll').addClass('-dis-n');
            $('.operator').removeClass('-dis-n');
            user1.roll = false;
            user1.operator = true;
        }
        if(user2.name === 2 && user2.roll === true && user2.operator === false){
            roll_dice();
            if(user2.started === false){
                user2.started = true;
                $('#msg > span').addClass('-dis-n');
                $('#msg > i').removeClass('-dis-n');
            }
            $('#roll').addClass('-dis-n');
            $('.operator').removeClass('-dis-n');
            user2.roll = false;
            user2.operator = true;
        }
    });

    $('.operator').on('click',function () {
        if(user1.name === 1 && user1.roll === false && user1.operator === true){
            let first_die = Number($('#first_die.dice > span').text());
            let second_die = Number($('#second_die.dice > span').text());
            // let player1_pos = Number($('#start_player_1 > span').text());
            // let player2_pos = Number($('#start_player_2 > span').text());
            let player1_pos = ($('.player_1').length > 0) ? $('.player_1').closest('div').index()+1 : 0;
            let player2_pos = ($('.player_2').length > 0) ? $('.player_2').closest('div').index()+1 : 0;
            let result = 0;


            if($(this).is("#sum")){
                result = first_die + second_die;
            }else if($(this).is("#subtract")){
                result = first_die - second_die;
            }else if($(this).is("#multiply")){
                result = first_die * second_die;
            }else if($(this).is("#divide")){
                result = first_die / second_die;
                if(second_die === 0)result=1000;
            }

            result = Number(Math.floor(result));
            player1_pos = result + player1_pos;

            if(result === 1000 || player1_pos <= 0 || player1_pos >= 101 || prime(player1_pos)){
                $('#start_player_1').removeClass('empty').addClass('filled').find('span').text('');
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
                $('.player_1').removeClass('player_1');
            }else if(player1_pos === player2_pos){
                $('#start_player_2 > span').text('');
                $('#start_player_2').removeClass('empty').addClass('filled').find('span').text('');
                $('.player_2').removeClass('player_2');
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
                $('.player_1').removeClass('player_1');
                $('#board > div:nth-child('+player1_pos+') > .pawn').addClass('player_1');
                $('#start_player_1').removeClass('filled').addClass('empty').find('span').text(player1_pos);
			}else if((player1_pos > 0 || player1_pos < 101) && !prime(player1_pos)){
                $('.player_1').removeClass('player_1');
                $('#board > div:nth-child('+player1_pos+') > .pawn').addClass('player_1');
                $('#start_player_1').removeClass('filled').addClass('empty').find('span').text(player1_pos);
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
			}

            $('#roll').removeClass('-dis-n');
            $('.operator').addClass('-dis-n');
            $('#msg > i').toggleClass('-fnt-icon-left -fnt-icon-right');

            user1.roll = false;
            user1.operator = false;
            user2.roll = true;
            user2.operator = false;
		}

        if(user2.name === 2 && user2.roll === false && user2.operator === true){
            let first_die = Number($('#first_die.dice > span').text());
            let second_die = Number($('#second_die.dice > span').text());
            // let player1_pos = Number($('#start_player_1 > span').text());
            // let player2_pos = Number($('#start_player_2 > span').text());
            let player1_pos = ($('.player_1').length > 0) ? $('.player_1').closest('div').index()+1 : 0;
            let player2_pos = ($('.player_2').length > 0) ? $('.player_2').closest('div').index()+1 : 0;
            let result = 0;

            if($(this).is("#sum")){
                result = first_die + second_die;
            }else if($(this).is("#subtract")){
                result = first_die - second_die;
            }else if($(this).is("#multiply")){
                result = first_die * second_die;
            }else if($(this).is("#divide")){
                result = first_die / second_die;
                if(second_die === 0)result=1000;
            }

            result = Number(Math.floor(result));
            player2_pos = result + player2_pos;

            if(result === 1000 || player2_pos <= 0 || player2_pos >= 101 || prime(player2_pos)){
                $('#start_player_2').removeClass('empty').addClass('filled').find('span').text('');
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
                $('.player_2').removeClass('player_2');
            }else if(player2_pos === player1_pos){
                $('#start_player_1 > span').text('');
                $('#start_player_1').removeClass('empty').addClass('filled').find('span').text('');
                $('.player_1').removeClass('player_1');
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
                $('.player_2').removeClass('player_2');
                $('#board > div:nth-child('+player2_pos+') > .pawn').addClass('player_2');
                $('#start_player_2').removeClass('filled').addClass('empty').find('span').text(player2_pos);
            }else if((player2_pos > 0 || player2_pos < 101) && !prime(player2_pos)){
                $('.player_2').removeClass('player_2');
                $('#board > div:nth-child('+player2_pos+') > .pawn').addClass('player_2');
                $('#start_player_2').removeClass('filled').addClass('empty').find('span').text(player2_pos);
                $('#first_die.dice > span').text('?');
                $('#second_die.dice > span').text('?');
            }

            $('#roll').removeClass('-dis-n');
            $('.operator').addClass('-dis-n');
            $('#msg > i').toggleClass('-fnt-icon-left -fnt-icon-right');

            user2.roll = false;
            user2.operator = false;
            user1.roll = true;
            user1.operator = false;
        }

        //find winner
        let winner = $('#board > div:nth-child(100) > .pawn');
        if(winner.hasClass('player_1')){
            user1.roll = false;
            user1.operator = false;
            user2.roll = false;
            user2.operator = false;
            user2.started = false;
            $('#msg').removeClass('no_winner').addClass('winner_msg_1');
            $('#msg > i').addClass('-dis-n');
            $('#msg > span').removeClass('-dis-n').text('blue win!');
            $('#start_player_1').removeClass('empty').addClass('filled');
        }
        if(winner.hasClass('player_2')){
            user1.roll = false;
            user1.operator = false;
            user2.roll = false;
            user2.operator = false;
            user2.started = false;
            $('#msg').removeClass('no_winner').addClass('winner_msg_2');
            $('#msg > i').addClass('-dis-n');
            $('#msg > span').removeClass('-dis-n').text('red win!');
            $('#start_player_2').removeClass('empty').addClass('filled');
        }
    });


});