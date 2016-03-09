$(function() {
    $('.edit').click(function() {
        $(this).css('display', 'none');
        $('.edit_content').css('display', 'none');
        $('.edit_content2').css('display', 'block');
        $('input').each(function() {
            $(this).val(111);
        })

    });
    $('.payment_first').click(function() {
        var html = $(this).next().html();
        $(this).parents('.payment_content').css('display', 'none');
        $('.payment_show').html(html);
    });

    $('#submit_document_popup').popup({
        scrolllock: true,
        onclose: function() {
            alert('success!');
        }
    });

    $('#sign_contract_popup').popup({
        scrolllock: true,
        onclose: function() {
            alert('success!');
        }
    });

    $('.sign_contract').click(function() {
        $('.contentContaier').css('display', 'none');
        $('#sign_contract').css('display', 'block');
    });

    $('.sign_contract_content').niceScroll({
        cursorcolor: 'transparent',
        background: 'transparent',
        cursorwidth: '8px',
        cursorborder: '0'
    });


    $('.tutorial_content').niceScroll({
        cursorcolor: 'transparent',
        background: 'transparent',
        cursorwidth: '8px',
        cursorborder: '0'
    });

    $('.tutorial_content').scroll(function() {
        if ($('.tutorial_content').scrollTop() > 150) {
            $('.start_now').css({
                'background-color': '#84B616'
            });
            $('.start_now').click(function() {
                $(this).parents('.section').fadeOut(function() {
                    $(this).next('.section').fadeIn();
                });
            });
        } else {
            $('.start_now').css({
                'background-color': '#C6DA9E'
            });
        }
    });

    $('.to_back').click(function() {
        $('#sign_contract').fadeOut(function() {
            $('.contentContaier').fadeIn();
        });
    });



    $('.agreement1 .protocol input[type=checkbox]').click(function() {
        if ($(this).prop('checked')) {
            $('.agreement1 .verification').css({
                'background-color': '#85b429'
            });

        } else {
            $('.agreement1 .verification').css({
                'background-color': 'rgb(198, 218, 158)'
            });
        }
    });


    $('.agreement1 .verification').click(function() {
        if ($('.agreement1 .protocol input[type=checkbox]').prop('checked')) {
            $('.agreement1 .agreement').fadeOut();
            $('.agreement1 .send_code').fadeIn();
        }
    });

    $('.agreement2 .protocol input[type=checkbox]').click(function() {
        if ($(this).prop('checked')) {
            $('.agreement2 .verification').css({
                'background-color': '#85b429'
            });

        } else {
            $('.agreement2 .verification').css({
                'background-color': 'rgb(198, 218, 158)'
            });
        }
    });


    $('.agreement2 .verification').click(function() {
        if ($('.agreement2 .protocol input[type=checkbox]').prop('checked')) {
            $('.agreement2 .agreement').fadeOut();
            $('.agreement2 .send_code').fadeIn();
        }
    });


    $('.in_text1').on('input propertychange', function() {
        var $btn_next = $(this).parents('.pwContainer').next('.button').find('.btn_next');
        if ($(this).val() == '') {
            $btn_next.css({
                'background-color': '#C6DA9E'
            });
        } else {
            $btn_next.css({
                'background-color': '#85b429'
            });
        }
    });


    $('.in_text2').on('input propertychange', function() {
        var $btn_next = $(this).parents('.pwContainer').next('.button').find('.btn_next');
        if ($(this).val() == '') {
            $btn_next.css({
                'background-color': '#C6DA9E'
            });
        } else {
            $btn_next.css({
                'background-color': '#85b429'
            });
        }
    });

    $('.btn_next').click(function() {
        var $input_text = $(this).parents('.button').prev('.pwContainer').find('input[type=text]');
        if ($input_text.val() != '' && $input_text.val() != null) {
            $(this).parents('.section').fadeOut(function() {
                $(this).next('.section').fadeIn();
            });
        }
    });


    $('.btn_back').click(function() {
        $(this).parents('.section').fadeOut(function() {
            $(this).prev('.section').fadeIn();
        });
    });


    $('.nav-tabs li[ref="status"]').on('click', function() {
        setTimeout(function() {
            var $scrollHeight = $('.status_contentContainer .container').get(0).scrollHeight;
            var $viewH = $('.status_contentContainer .container').height();
            if ($scrollHeight - $viewH <= 0) {
                $('.scroll').hide();
            } else {
                $('.scroll').show();
            }
        }, 100);
    });


    $('.status_contentContainer .container').scroll(function() {
        var $scrollTop = $(this).scrollTop();
        var $viewH = $(this).height();
        var $scrollHeight = $(this).get(0).scrollHeight;
        if ($scrollHeight - $scrollTop - $viewH <= 0) {
            $('.scroll').hide();
        } else {
            $('.scroll').show();
        }
    });

    $('.main_content').niceScroll({
        cursorcolor: 'transparent',
        background: 'transparent',
        cursorwidth: '8px',
        cursorborder: '0'
    });

});
