$(function() {
    var ddData_loan = [
        { text: '6 Month', value: 1, },
        { text: '12 Month', value: 2, },
        { text: '18 Month', value: 3, },
        { text: '24 Month', value: 4, },
        { text: '30 Month', value: 5, },
        { text: '36 Month', value: 6, },
    ];

    $('#tenor').ddslick({
        data: ddData_loan,
        width: '120px',
        color: '#3c4248',
        background: 'white',
        //selectText: '3 years',
    });

    $('#loan_amount').ionRangeSlider({
        min: 10000,
        max: 400000,
        step: 1000,
        prefix: '$',
        prettify_separator: ',',
    });

    var myVideo = $('#video1');

    $('.section4 .box1 .desc_video').find('li').click(function() {
        $('.section4 .boxContainer .box1 .desc_video li').removeClass('current');
        $(this).addClass('current');
    });

    $(".sectionContainer").scroll(function() {
        var viewH = $(this).height(), //可见高度  
            contentH = $(this).get(0).scrollHeight, //内容高度  
            scrollTop = $(this).scrollTop(); //滚动高度  
        if (contentH - viewH - scrollTop <= 167) {
            $('.scroll').hide();
        } else {
            $('.scroll').show();
        }
    });

});
