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
        width: '100%',
        color: '#3c4248',
        background: 'white',
        selectText: '3 years',
    });

    $('#loan_amount').ionRangeSlider({
        min: 5000,
        max: 100000,
        step: 5000,
        prefix: '$',
        prettify_separator: ',',
    });

    $('.section4 .box1 .desc_video').find('li').click(function() {
        $('.section4 .boxContainer .box1 .desc_video li').removeClass('current');
        $(this).addClass('current');
    });

});
