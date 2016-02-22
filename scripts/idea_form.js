$(function() {

    $('.previou').click(function() {
        $(this).parents('.content_right').fadeOut(function() {
            $(this).prev('.content_right').fadeIn();
        });
    });

    $('select').selectpicker({
        maxOptions: 1
    });

    $('[data-toggle=popover]').popover({
        placement:'bottom',
        html:true,
        content:function(){
            return $('.loan_detail_popup').html();
        }
    });
    // var ddData_loan_purpose = [{
    //     text: 'Marriage',
    //     value: 1,
    // }, {
    //     text: 'Education',
    //     value: 2,
    // }, {
    //     text: 'Travel',
    //     value: 3,
    // }, {
    //     text: 'Revenovation',
    //     value: 4,
    // }, {
    //     text: 'Tax',
    //     value: 5,
    // }, {
    //     text: 'Debt Consolidation',
    //     value: 6,
    // }, {
    //     text: 'Others',
    //     value: 7,
    // }];
    // $('#loan_purpose').ddslick({
    //     data: ddData_loan_purpose,
    //     selectText: 'PLEASE SELECT',
    // });



    // var ddData_tenor = [{
    //     text: '1 year',
    //     value: 1,
    // }, {
    //     text: '2 years',
    //     value: 2,
    // }, {
    //     text: '3 years',
    //     value: 3,
    // }, {
    //     text: '4 years',
    //     value: 4,
    // }, {
    //     text: '5 years',
    //     value: 5,
    // }, {
    //     text: '6 years',
    //     value: 6,
    // }, ];
    // $('#tenor').ddslick({
    //     data: ddData_tenor,
    //     selectText: '3 years',
    // });



    // var ddData_language = [{
    //     text: 'ENGLISH',
    //     value: '1',
    // }, {
    //     text: '繁體',
    //     value: '2',
    // }, ];
    // $('#language').ddslick({
    //     data: ddData_language,
    //     selectText: 'ENGLISH',
    // });


    // var ddData_gender = [{
    //     text: 'ENGLISH',
    //     value: '1',
    // }, {
    //     text: '繁體',
    //     value: '2',
    // }, ];
    // $('#gender').ddslick({
    //     data: ddData_gender,
    //     selectText: 'MALE',
    // });


    // var ddData_education = [{
    //     text: '1 year',
    //     value: 1,
    // }, {
    //     text: '2 years',
    //     value: 2,
    // }, {
    //     text: '3 years',
    //     value: 3,
    // }, {
    //     text: '4 years',
    //     value: 4,
    // }, {
    //     text: '5 years',
    //     value: 5,
    // }, {
    //     text: '6 years',
    //     value: 6,
    // }, ];
    // $('#education').ddslick({
    //     data: ddData_education,
    //     selectText: '3 years',
    // });


    // var ddData_dependents = [{
    //     text: '1',
    //     value: 1,
    // }, {
    //     text: '2',
    //     value: 2,
    // }, {
    //     text: '3',
    //     value: 3,
    // }, {
    //     text: '4',
    //     value: 4,
    // }, {
    //     text: '5',
    //     value: 5,
    // }, {
    //     text: '6',
    //     value: 6,
    // }, ];
    // $('#dependents').ddslick({
    //     data: ddData_dependents,
    //     selectText: '1',
    // });

    // var ddData_residential_address2 = [{
    //     text: '1',
    //     value: 1,
    // }, {
    //     text: '2',
    //     value: 2,
    // }, {
    //     text: '3',
    //     value: 3,
    // }, {
    //     text: '4',
    //     value: 4,
    // }, {
    //     text: '5',
    //     value: 5,
    // }, {
    //     text: '6',
    //     value: 6,
    // }, ];
    // $('#residential_address2').ddslick({
    //     data: ddData_residential_address2,
    //     selectText: '1',
    // });


    // var ddData_ownership = [{
    //     text: '1',
    //     value: 1,
    // }, {
    //     text: '2',
    //     value: 2,
    // }, {
    //     text: '3',
    //     value: 3,
    // }, ];
    // $('#ownership').ddslick({
    //     data: ddData_ownership,
    //     selectText: '1',
    // });



    // var ddData_self_employed = [{
    //     text: '1',
    //     value: 1,
    // }, {
    //     text: '2',
    //     value: 2,
    // }, {
    //     text: '3',
    //     value: 3,
    // }, ];
    // $('#self_employed').ddslick({
    //     data: ddData_self_employed,
    //     selectText: '1',
    // });


    // var ddData_company_tel = [{
    //     text: '12345678',
    //     value: 1,
    // }, {
    //     text: '12345678',
    //     value: 2,
    // }, {
    //     text: '12345678',
    //     value: 3,
    // }, ];
    // $('#company_tel').ddslick({
    //     data: ddData_company_tel,
    //     selectText: 'MEDIA',
    // });



    // var ddData_salary_method = [{
    //     text: '12345678',
    //     value: 1,
    // }, {
    //     text: '12345678',
    //     value: 2,
    // }, {
    //     text: '12345678',
    //     value: 3,
    // }, ];
    // $('#salary_method').ddslick({
    //     data: ddData_salary_method,
    //     selectText: 'BANK TRANSFER',
    // });


    // var ddData_comepany_address = [{
    //     text: '12345678',
    //     value: 1,
    // }, {
    //     text: '12345678',
    //     value: 2,
    // }, {
    //     text: '12345678',
    //     value: 3,
    // }, ];
    // $('#comepany_address').ddslick({
    //     data: ddData_comepany_address,
    //     selectText: 'HONG KONG',
    // });


    // var ddData_comepany_address = [{
    //     text: '12345678',
    //     value: 1,
    // }, {
    //     text: '12345678',
    //     value: 2,
    // }, {
    //     text: '12345678',
    //     value: 3,
    // }, ];
    // $('#loan_type').ddslick({
    //     data: ddData_comepany_address,
    //     selectText: 'PORPERTY OWNER LOAN',
    // });


    // var ddData_comepany_address = [{
    //     text: '12345678',
    //     value: 1,
    // }, {
    //     text: '12345678',
    //     value: 2,
    // }, {
    //     text: '12345678',
    //     value: 3,
    // }, ];
    // $('#information_content_2_loan_purposer').ddslick({
    //     data: ddData_comepany_address,
    //     selectText: 'TRAVEL',
    // });



    // var ddData_comepany_address = [{
    //     text: '12345678',
    //     value: 1,
    // }, {
    //     text: '12345678',
    //     value: 2,
    // }, {
    //     text: '12345678',
    //     value: 3,
    // }, ];
    // $('#information_content_2_tenor').ddslick({
    //     data: ddData_comepany_address,
    //     selectText: '3 YEARS',
    // });

    var flip = true;
    $('.edit').click(function() {
        if (flip == true) {
            $(this).text('SAVE').parent().next().find('[name],button').removeAttr('disabled').removeClass('disabled');
            $(this).prev().children('[name],button').removeAttr('disabled').removeClass('disabled');
            $(this).next().children('[name],button').removeAttr('disabled').removeClass('disabled');
            $('.content_right_4 .next').unbind('click');
            flip = false;
        } else {
            $(this).text('EDIT').parent().next().find('[name],button').attr('disabled', '');
            $(this).prev().children('[name],button').attr('disabled', '');
            $(this).next().children('[name],button').attr('disabled', '');
            $('.content_right_4 .next').bind('click', function() {
                $(this).parents('.content_right').fadeOut(function() {
                    $(this).next('.content_right').fadeIn();
                });
            });
            flip = true;
        }
    });

    $(".bottom_content").scroll(function() {
        var viewH = $(this).height(), //可见高度  
            contentH = $(this).get(0).scrollHeight, //内容高度  
            scrollTop = $(this).scrollTop(); //滚动高度  
        if (contentH - viewH - scrollTop <= 0) {
            $('.scroll').hide();
        } else {
            $('.scroll').show();
        }
    });

    $(".loan form .form-group").slice(3, 5).hide();
    for (var i = 1; i <= 3; i++) {
        $(".loan_type_bg" + i).click(function() {
            var name = $(this).attr('name');
            var flag = $(this).attr('flag');
            if (name == 'a') {
                if (flag == 'true') {
                    $(this).css('background', 'url("images/1.10_idea_formA_img_a_1.png") left top no-repeat');
                    $(".loan_type_bg2").css('background', 'url("images/1.10_idea_formA_img_b.png") left top no-repeat');
                    $(".loan_type_bg3").css('background', 'url("images/1.10_idea_formA_img_c_.png") left top no-repeat');
                    $(this).attr('flag', 'false');
                } else {
                    $(this).css('background', 'url("images/1.10_idea_formA_img_a.png") left top no-repeat');
                    $(this).attr('flag', 'true');
                }
                $(".loan form .form-group").slice(3, 5).hide();
            } else if (name == 'b') {
                if (flag == 'true') {
                    $(this).css('background', 'url("images/1.10_idea_formA_img_b_1.png") left top no-repeat');
                    $(".loan_type_bg1").css('background', 'url("images/1.10_idea_formA_img_a.png") left top no-repeat');
                    $(".loan_type_bg3").css('background', 'url("images/1.10_idea_formA_img_c_.png") left top no-repeat');
                    $(this).attr('flag', 'false');
                } else {
                    $(this).css('background', 'url("images/1.10_idea_formA_img_b.png") left top no-repeat');
                    $(this).attr('flag', 'true');
                }
                $(".loan form .form-group").slice(3, 5).hide();
            } else {
                if (flag == 'true') {
                    $(this).css('background', 'url("images/1.10_idea_formA_img_c_1.png") left top no-repeat');
                    $(".loan_type_bg1").css('background', 'url("images/1.10_idea_formA_img_a.png") left top no-repeat');
                    $(".loan_type_bg2").css('background', 'url("images/1.10_idea_formA_img_b.png") left top no-repeat');
                    $(".loan form .form-group").slice(3, 5).show();
                    $(this).attr('flag', 'false');
                } else {
                    $(this).css('background', 'url("images/1.10_idea_formA_img_c_.png") left top no-repeat');
                    $(".loan form .form-group").slice(3, 5).hide();
                    $(this).attr('flag', 'true');
                }
            }
        });
    }
    $('.cont_right_1_form').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            purpose_input: {
                message: '用户名验证失败',
                validators: {
                    notEmpty: {
                        message: 'purpose value is empty!'
                    }
                }
            },
            amount_input: {
                message: '用户名验证失败',
                validators: {
                    notEmpty: {
                        message: 'amount value is empty!'
                    }
                }
            },
            tenor_input: {
                message: '用户名验证失败',
                validators: {
                    notEmpty: {
                        message: 'tenor value is empty!'
                    }
                }
            },
            property_input: {
                message: '用户名验证失败',
                validators: {
                    notEmpty: {
                        message: 'property value is empty!'
                    }
                }
            },
            mortgage_input: {
                message: '用户名验证失败',
                validators: {
                    notEmpty: {
                        message: 'mortgage value is empty!'
                    }
                }
            },
            sign_checkout: {
                message: '用户名验证失败',
                validators: {
                    notEmpty: {
                        message: 'sign must be checkouted!'
                    }
                }
            }
        }
    }).on('success.form.bv', function(e) {
        e.preventDefault();        
        var target1 = $(this).find('[name]');
        var target2 = $('.loan_information_content_1 [name]');
        for (var i = 0; i < target2.length - 1; i++) {
            var target1_name = $(target1[i]).attr('name');
            var target2_name = $(target2[i + 1]).attr('name');
            if (target1_name == target2_name) {
                $(target2[i + 1]).val($(target1[i]).val());
            }
        }

        $('.cont_right_1_form .next').removeAttr('disabled');
        $(this).parents('.content_right').fadeOut(function() {
            $(this).next('.content_right').fadeIn();
        });
        setTimeout(function(){
            $('#idea_form .idea_form_content .content_right_2').addClass('animate');      
            $('body').scrollTop( 0 );  
        }, 100);
    });
    $('.cont_right_2_form').bootstrapValidator({
        message: 'This value is not valid',
        // fields: {
        //     language_select: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'language value is empty!'
        //             }
        //         }
        //     },
        //     fstName_input: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'first name is empty!'
        //             }
        //         }
        //     },
        //     gender_select: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'gender is empty!'
        //             }
        //         }
        //     },
        //     idNum_input: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'ID Number is empty!'
        //             }
        //         }
        //     },
        //     email_input: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'Email is empty!'
        //             }
        //         }
        //     },
        //     level_select: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'education level is empty!'
        //             }
        //         }
        //     },
        //     tel_input: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'home tel is empty!'
        //             }
        //         }
        //     },
        //     depend_select: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'NO of Dependents is empty!'
        //             }
        //         }
        //     },
        //     address_input: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'address must be input complete!'
        //             }
        //         }
        //     },
        //     owner_select: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'ownership is empty!'
        //             }
        //         }
        //     },
        //     mortgage_input: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'mortgage is empty!'
        //             }
        //         }
        //     }
        // }
    }).on('success.form.bv', function(e) {
        e.preventDefault();
        var target1 = $(this).find('[name]');
        var target2 = $('.personal_information_content [name]');
        for (var i = 1; i < target2.length + 1; i++) {
            var target1_name = $(target1[i]).attr('name');
            var target2_name = $(target2[i - 1]).attr('name');
            if (target1_name == target2_name) {
                $(target2[i - 1]).val($(target1[i]).val());
            }
        }

        $('.cont_right_2_form .next').removeAttr('disabled');
        
        $(this).parents('.content_right').fadeOut(function() {
            $(this).next('.content_right').fadeIn();
        });
        
        setTimeout(function(){
            $('#idea_form .idea_form_content .content_right_3').addClass('animate');        
            $('body').scrollTop( 0 );  
        }, 100);
    });
    $('.cont_right_3_form').bootstrapValidator({
        message: 'This value is not valid',
        // fields: {
        //     cpy_name: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'company name is empty!'
        //             }
        //         }
        //     },
        //     self_employ: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'answer is empty!'
        //             }
        //         }
        //     },
        //     year_service: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'years is empty!'
        //             }
        //         }
        //     },
        //     cpy_tel: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'company tel is empty!'
        //             }
        //         }
        //     },
        //     industry: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'Industry is empty!'
        //             }
        //         }
        //     },
        //     position: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'position is empty!'
        //             }
        //         }
        //     },
        //     month_income: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'month income is empty!'
        //             }
        //         }
        //     },
        //     salary_way: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'salary method is empty!'
        //             }
        //         }
        //     },
        //     cpy_address: {
        //         message: '用户名验证失败',
        //         validators: {
        //             notEmpty: {
        //                 message: 'comepany address is empty!'
        //             }
        //         }
        //     }
        // }
    }).on('success.form.bv', function(e) {
        e.preventDefault();
        
        var target1 = $(this).find('[name]');
        var target2 = $('.job_information_content [name]');
        for (var i = 0; i < target2.length; i++) {
            var target1_name = $(target1[i]).attr('name');
            var target2_name = $(target2[i]).attr('name');
            if (target1_name == target2_name) {
                $(target2[i]).val($(target1[i]).val());
            }
        }

        $('.cont_right_3_form .next').removeAttr('disabled');
        
        $(this).parents('.content_right').fadeOut(function() {
            $(this).next('.content_right').fadeIn();
        });
        setTimeout(function(){
            $('#idea_form .idea_form_content .content_right_4').addClass('animate');        
            $('body').scrollTop( 0 );  
        }, 100);
    });

    $(".form_datetime").datetimepicker({
        format: 'mm/dd/yyyy',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 3,
        forceParse: 0,
        showMeridian: 1
    });

    setTimeout(function(){
        $('#idea_form .idea_form_content .content_left').addClass('animate');        
        $('#idea_form .idea_form_content .content_right_1').addClass('animate');        
    }, 200);
});
