$(function() {
    $('#loan_amount').ionRangeSlider({
        min: 5000,
        max: 100000,
        step: 1000,
        prefix: '$',
        from: 20000,
        prettify_separator: ',',
    });
    $('#mobile_loan_amount').ionRangeSlider({
        min: 5000,
        max: 100000,
        step: 1000,
        prefix: '$',
        from: 20000,
        prettify_separator: ',',
    });
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
    $('#mobile_tenor').ddslick({
        data: ddData_loan,
        width: '120px',
        color: '#3c4248',
        background: 'white',
        selectText: '3 years',
    });

    $(".contentContainer").scroll(function() {
        var viewH = $(this).height(), //可见高度  
            contentH = $(this).get(0).scrollHeight, //内容高度  
            scrollTop = $(this).scrollTop(); //滚动高度  
        if (contentH - viewH - scrollTop <= 0) {
            $('.scroll').hide();
        } else {
            $('.scroll').show();
        }
    });

})
