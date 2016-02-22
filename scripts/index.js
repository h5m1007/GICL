$(function(){
	var ddData_loan =[
          		{ text: '1 year', value: 1,},
          		{ text: '2 years', value: 2,},
          		{ text: '3 years', value: 3,},
          		{ text: '4 years', value: 4,},
          		{ text: '5 years', value: 5,},
          		{ text: '6 years', value: 6,},
	];
	$('#tenor').ddslick({
		data: ddData_loan,
		width: '120px',
		color: '#3c4248',
		background: 'white',
		selectText: '3 years',
	});
	// $('.scroll').click(function(){				
	// 	$('.section').each(function(){
	// 		var display = $(this).css('display');
	// 		if(display == 'block'){				
	// 			$(this).slideUp(); 
	// 			$(this).next().slideDown();
	// 			console.log($(this).next('.section').length);
	// 			if($(this).next('.section').length === 0){
	// 				$('.scroll').css({'display':'none'});
	// 			}
	// 			return false;
	// 		}
	// 	})		
	// });

	$('#loan_amount').ionRangeSlider({
          		min: 5000,
          		max: 100000,
          		step: 1000,
          		prefix: '$',
          		prettify_separator: ',',
    });

	var myVideo = $('#video1');
	$('.btn_play').on('click',function(){
		// console.log(11);
		// if (myVideo.paused) 
		// 	myVideo.play(); 
		// else 
		// 	myVideo.pause();
		// if(myVideo.paused){
		// 	console.log(11);
		// 	myVideo.play();
		// } else{
		// 	console.log(22);
		// 	myVideo.pause();
		// }
	});

	

	$('.section4 .box1 .desc_video').find('li').click(function(){
		$('.section4 .boxContainer .box1 .desc_video li').removeClass('current');
		$(this).addClass('current');
	});


});