$(document).ready(function() {
    $('#header').load('common/header.html', function() {
        var ddBasic = [{
            text: "Global Club",
            value: 1,
        }, {
            text: "Global Club",
            value: 2,
        }, {
            text: "Global Club",
            value: 3,
        }, {
            text: "Global Club",
            value: 4,
        }];

        var log_reg_info = [{
            text: "Profile Information",
            value: 1,
        }, {
            text: "Approval Status",
            value: 2,
        }, {
            text: "Payment Schedule",
            value: 3,
        }, {
            text: "Logout",
            value: 4,
        }];

        $('#global_club').ddslick({
            data: ddBasic,
            background: "#84B616",
            color: '#ffffff',
            width: 176,
            selectText: "Global Club",
            onSelected: function(data) {
                console.log(data);
            }
        });

        $('#log_reg').ddslick({
            data: log_reg_info,
            background: "#84B616",
            color: '#fff',
            width: 176,
            selectText: "Mr Chan",
            onSelected: function(data) {
                if (data.selectedData.value == 4) {
                    $('#log_reg').hide();
                    $('.log_on').show();
                }
            }
        });
        $('.log_on').hide();

        var dddrop_down = [{
            text: "Service",
            value: 1,
        }, {
            text: "Contact Us",
            value: 2,
        }];
        $('#drop_down').ddslick({
            data: dddrop_down,
            width: 100,
            background: "transparent",
            selectText: "About GICL",

        });


        $(window).scroll(function() {
            if (!navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)) {
                if ($(document).scrollTop() > 180) {
                    $('.headerContent').addClass('mini');
                } else {
                    $('.headerContent').removeClass('mini');
                }
            }
        });

        $('.nav_menu').click(function() {
            if ($(document).scrollTop() > 180) {
                $('.headerContent').toggleClass('mini');
            }
        });

        var url = document.URL;
        var urlvalues = url.split("a=");
        var urlvalue = (urlvalues[1] && urlvalues[1] !== null && urlvalues[1] !== '') ? urlvalues[1] : '1';
        $('.a' + urlvalue).addClass('current');

        $('li.message > img,li.message > span').on('click', function() {
            $('.message_drop_down').toggle();

        });
        var flag = true;
        $(".header_bottom .main_nav_bar li.a2 a").click(function() {
            if (flag) {
                $(this).nextAll('ul').show();
                flag = false;
            } else {
                $(this).nextAll('ul').hide();
                flag = true;
            }
        });
        $(".header_bottom .main_nav_bar li.a2 ul li").hover(function() {
            $(this).css('background-color', '#85b428');
            $(".header_bottom .main_nav_bar li.a2 .tooltip-arrow").css('border-bottom-color', '#85b428');
        }, function() {
            $(this).css('background-color', '#fff');
            $(".header_bottom .main_nav_bar li.a2 .tooltip-arrow").css('border-bottom-color', '#fff');
        });
    });

    $('#footer').load('common/footer.html', function() {
        $('.to_top').click(function() {
            $('html,body').animate({
                scrollTop: '0px'
            });
        });
    });
});
