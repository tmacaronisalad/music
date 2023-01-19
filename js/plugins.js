var timer = "30";
$.countdownHandler = {
	timer: function(obj) {
		setInterval(function() {
		  --timer;
		  	if(timer >= 0) { 
		  		 obj.html(timer);
		  		timer = timer; 
	  		} else if(timer === -1) {
	  			obj.html('Times Up!');
	  			obj.css({'font-size' : '200px'});
	  		} else { }
		}, 1000);
	}
}
$(document).ready(function(){

	$('.btn_start').click(function(e) {
		e.preventDefault();
		var audio = new Audio('http://localhost/countdown/mp3/countdown.mp3');

		$('.h1_title').css({'display' : 'none'});
		$('.main-entry').css({'display' : 'none'});
		$('.timer').css({'display' : 'block'});

		$.countdownHandler.timer($('h2.countdown'));
		audio.play();
	});

	// $('.main-result').click(function(e) {
	// 	e.preventDefault();
	// 	var audio = new Audio('http://localhost/countdown/mp3/celebration.mp3');

	// 	$('.celebration1').css({'display' : 'block'});
	// 	$('.celebration2').css({'display' : 'block'});

	// 	audio.play();
	// })

	$('body').on('keydown',function(e) {
		if(e.key == 'Enter') {
			if($(this).hasClass('sampol_sampol')) {
				if($('button.next').hasClass('disabled')) {
				    $('.main_boxes section .content').removeClass('hidden');
				    $('button.next').removeClass('disabled');
				} else {
					window.location.href = $('button.next').data('href');
				}
			} else if($(this).hasClass('film_score')) {
				if($('button.next').hasClass('disabled1')) {
					$('.main1_img1').addClass('hidden');
					$('.main1_img2').removeClass('hidden');
					$('button.next').removeClass('disabled1').addClass('disabled2');
				} else if($('button.next').hasClass('disabled2')) {
					$('.main2_img1').addClass('hidden');
					$('.main2_img2').removeClass('hidden');
					$('button.next').removeClass('disabled2').addClass('disabled3');
				} else if($('button.next').hasClass('disabled3')) {
					$('.content').removeClass('hidden');
					$('button.next').removeClass('disabled3').addClass('disabled');
				} else {
					window.location.href = $('button.next').data('href');
				}
			} else if($(this).hasClass('alin_ang_naiba')) {
				if($('button.next').hasClass('disabled')) {
					$('.main_boxes section').addClass('hidden');
					$('.main_boxes section.answer').removeClass('hidden');
					$('.content_answer').removeClass('hidden');
					$('button.next').removeClass('disabled');
				} else {
					window.location.href = $('button.next').data('href');
				}
			} else if($(this).hasClass('isang_kanta_lang')) {
				if($('button.next').hasClass('disabled')) {
					$('.img_data').css({'filter' : 'unset'});
					$('.content').removeClass('hidden');
					$('button.next').removeClass('disabled');
				} else {
					window.location.href = $('button.next').data('href');
				}
			}
		}
	});

	$('.img_data').click(function(e) {
		e.preventDefault();

		$(this).css({'filter' : 'unset'});
	});

	new WOW().init();
});
