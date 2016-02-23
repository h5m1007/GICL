$(function() {
    var ddData_loan = [
        { text: '1 year', value: 1, },
        { text: '2 years', value: 2, },
        { text: '3 years', value: 3, },
        { text: '4 years', value: 4, },
        { text: '5 years', value: 5, },
        { text: '6 years', value: 6, },
    ];

    $('#tenor').ddslick({
        data: ddData_loan,
        width: '120px',
        color: '#3c4248',
        background: 'white',
        selectText: '3 years',
    });

    $('#loan_amount').ionRangeSlider({
        min: 5000,
        max: 100000,
        step: 1000,
        prefix: '$',
        prettify_separator: ',',
    });

    var myVideo = $('#video1');
    $('.btn_play').on('click', function() {

    });

    $('.section4 .box1 .desc_video').find('li').click(function() {
        $('.section4 .boxContainer .box1 .desc_video li').removeClass('current');
        $(this).addClass('current');
    });

    $("#video3").jPlayer({
        ready: function() {
            $(this).jPlayer("setMedia", {
                m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
                ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
                webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
                poster: "images/mobile_video3.png"
            });
        },
        swfPath: "images/jquery.jplayer.swf",
        supplied: "webmv, ogv, m4v",
        size: {
            width: "140px",
            height: "105px"
        }
    });
    $("#video4").jPlayer({
        ready: function() {
            $(this).jPlayer("setMedia", {
                m4v: "http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v",
                ogv: "http://www.jplayer.org/video/ogv/Incredibles_Teaser.ogv",
                webmv: "http://www.jplayer.org/video/webm/Incredibles_Teaser.webm",
                poster: "images/mobile_video4.png"
            });
        },
        swfPath: "images/jquery.jplayer.swf",
        supplied: "webmv, ogv, m4v",
        size: {
            width: "140px",
            height: "105px"
        }
    });

    var flag = true;
    $("#video3").click(function(){
    	if(flag){
    		$(this).jPlayer("play");
    		flag = false;
    	}
    	else{
    		$(this).jPlayer("stop");
    		flag = true;
    	}
    });
    $("#video4").click(function(){
    	if(flag){
    		$(this).jPlayer("play");
    		flag = false;
    	}
    	else{
    		$(this).jPlayer("stop");
    		flag = true;
    	}
    });

});
