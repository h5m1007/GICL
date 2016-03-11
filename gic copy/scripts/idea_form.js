var loanOpts = {
    trigger: 'blur change',
    fields: {
        purpose_input: {
            validators: {
                notEmpty: {
                    message: 'purpose value is empty!'
                }
            }
        },
        amount_input: {
            validators: {
                notEmpty: {
                    message: 'amount value is empty!'
                },
                numeric: {},
                between: {
                    min: 0,
                    max: 0,
                    message: 'please select loan product type'
                }
            }
        },
        tenor_input: {
            validators: {
                notEmpty: {
                    message: 'tenor value is empty!'
                }
            }
        },
        property_input: {
            validators: {
                numeric: {}
            }
        },
        mortgage_input: {
            validators: {
                numeric: {}
            }
        },
        sign_checkout: {
            validators: {
                notEmpty: {
                    message: 'sign must be checkouted!'
                }
            }
        }
    }
};

var memberOpts = {
    trigger: 'blur change',
    fields: {
        fstName_input: {
            validators: {
                notEmpty: {
                    message: 'first name is empty!'
                }
            }
        },
        gender_select: {
            validators: {
                notEmpty: {
                    message: 'gender is empty!'
                }
            }
        },
        hkid_input: {
            validators: {
                notEmpty: {
                    message: 'ID Number is empty!'
                },
                regexp: {
                    regexp: /^[A-Za-z]\d{6}\(\d\)$/
                },
                callback: {
                    callback: function (value, validator, $field) {
                        return chkHkid(value);
                    }
                }
            }
        },
        date_input: {
            validators: {
                callback: function () {
                    return true;
                }
            }
        },
        mobile_input: {
            validators: {
                notEmpty: {},
                regexp: {
                    regexp: /^\d{8}$/,
                    message: 'Mobile is invalid.'
                }
            }
        },
        level_select: {
            validators: {
                notEmpty: {
                    message: 'education level is empty!'
                }
            }
        },
        tel_input: {
            validators: {
                notEmpty: {
                    message: 'home tel is empty!'
                },
                regexp: {
                    regexp: /^\d{8}$/,
                    message: 'Tel is invalid.'
                }
            }
        },
        depend_select: {
            validators: {
                notEmpty: {
                    message: 'NO of Dependents is empty!'
                }
            }
        },
        address_input: {
            validators: {
                notEmpty: {
                    message: 'address must be input complete!'
                }
            }
        }
    }
};

var jobOpts = {
    trigger: 'blur change',
    fields: {
        cpy_name: {
            validators: {
                notEmpty: {
                    message: 'company name is empty!'
                }
            }
        },
        self_employ: {
            validators: {
                notEmpty: {
                    message: 'answer is empty!'
                }
            }
        },
        year_service: {
            validators: {
                notEmpty: {
                    message: 'years is empty!'
                }
            }
        },
        cpy_tel: {
            validators: {
                notEmpty: {
                    message: 'company tel is empty!'
                },
                regexp: {
                    regexp: /^\d{8}$/,
                    message: 'Tel is invalid.'
                }
            }
        },
        industry: {
            validators: {
                notEmpty: {
                    message: 'Industry is empty!'
                }
            }
        },
        position: {
            validators: {
                notEmpty: {
                    message: 'position is empty!'
                }
            }
        },
        month_income: {
            validators: {
                notEmpty: {
                    message: 'month income is empty!'
                },
                numeric: {}
            }
        },
        salary_way: {
            validators: {
                notEmpty: {
                    message: 'salary method is empty!'
                }
            }
        },
        cpy_address: {
            validators: {
                notEmpty: {
                    message: 'comepany address is empty!'
                }
            }
        },
        cpy_address_area: {
            validators: {
                notEmpty: {
                    message: 'comepany address area is empty!'
                }
            }
        }
    }
};

$(function () {
    $('.previou').click(function () {
        $(this).parents('.content_right').fadeOut(function () {
            $(this).prev().fadeIn();
        });
    });

    $('[data-toggle=popover]').popover({
        placement: 'bottom',
        html: true,
        content: function () {
            return $('.loan_detail_popup').html();
        }
    });

    var flip = true;
    $('.edit').click(function () {
        if (flip == true) {
            $(this).text('SAVE').parent().next().find('[name],button').removeAttr('disabled').removeClass('disabled');
            $(this).prev().children('[name],button').removeAttr('disabled').removeClass('disabled');
            $(this).next().children('[name],button').removeAttr('disabled').removeClass('disabled');
            flip = false;
        } else {
            $(this).parent().parent().children('form').data('bootstrapValidator').validate();
            var flag = $(this).parent().parent().children('form').data('bootstrapValidator').isValid();
            if (flag) {
                $(this).text('EDIT').parent().next().find('[name],button').attr('disabled', '');
                $(this).prev().children('[name],button').attr('disabled', '');
                $(this).next().children('[name],button').attr('disabled', '');
                flip = true;
            }
        }
    });
    $('.content_right_4 .next').click(function () {
        if (flip) {
            $(this).parents('.content_right').fadeOut(function () {
                $(this).next('.content_right').fadeIn();
            });
        }
    });

    $(".bottom_content").scroll(function () {
        var viewH = $(this).height(), //可见高度  
            contentH = $(this).get(0).scrollHeight, //内容高度  
            scrollTop = $(this).scrollTop(); //滚动高度  
        if (contentH - viewH - scrollTop <= 0) {
            $('.scroll').hide();
        } else {
            $('.scroll').show();
        }
    });
    $('.cont_right_1_form').bootstrapValidator({
        trigger: 'blur change',
        fields: {
            purpose_input: {
                validators: {
                    notEmpty: {
                        message: 'purpose value is empty!'
                    }
                }
            },
            amount_input: {
                validators: {
                    notEmpty: {
                        message: 'amount value is empty!'
                    },
                    numeric: {},
                    between: {
                        min: 0,
                        max: 0,
                        message: 'please select loan product type'
                    }
                }
            },
            tenor_input: {
                validators: {
                    notEmpty: {
                        message: 'tenor value is empty!'
                    }
                }
            },
            property_input: {
                validators: {
                    numeric: {}
                }
            },
            mortgage_input: {
                validators: {
                    numeric: {}
                }
            },
            sign_checkout: {
                validators: {
                    notEmpty: {
                        message: 'sign must be checkouted!'
                    }
                }
            }
        }
    }).on('success.form.bv', function (e) {
        e.preventDefault();
        $('.cont_right_1_form .next').removeAttr('disabled');
        $(this).parents('.content_right').fadeOut(function () {
            $(this).next('.content_right').fadeIn();
        });
        setTimeout(function () {
            $('#idea_form .idea_form_content .content_right_2').addClass('animate');
            $('body').scrollTop(0);
        }, 100);
    });
    $('.cont_right_2_form').bootstrapValidator({
        trigger: 'blur change',
        fields: {
            language_select: {
                validators: {
                    notEmpty: {
                        message: 'language value is empty!'
                    }
                }
            },
            fstName_input: {
                validators: {
                    notEmpty: {
                        message: 'first name is empty!'
                    }
                }
            },
            gender_select: {
                validators: {
                    notEmpty: {
                        message: 'gender is empty!'
                    }
                }
            },
            idNum_input: {
                validators: {
                    notEmpty: {
                        message: 'ID Number is empty!'
                    },
                    regexp: {
                        regexp: /^[A-Za-z]\d{6}$/
                    }
                }
            },
            idChk_input: {
                validators: {
                    notEmpty: {
                        message: 'ID Number is empty!'
                    },
                    callback: function () {
                        return false;
                    }
                }
            },
            date_input: {
                validators: {
                    callback: {
                        callback: function () {
                            return false;
                        }
                    }
                }
            },
            mobile_input: {
                validators: {
                    notEmpty: {},
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Mobile is invalid.'
                    }
                }
            },
            level_select: {
                validators: {
                    notEmpty: {
                        message: 'education level is empty!'
                    }
                }
            },
            tel_input: {
                validators: {
                    notEmpty: {
                        message: 'home tel is empty!'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Tel is invalid.'
                    }
                }
            },
            depend_select: {
                validators: {
                    notEmpty: {
                        message: 'NO of Dependents is empty!'
                    }
                }
            },
            address_input: {
                validators: {
                    notEmpty: {
                        message: 'address must be input complete!'
                    }
                }
            },
            address_select: {
                validators: {
                    notEmpty: {
                        message: 'address area is empty!'
                    }
                }
            },
            owner_select: {
                validators: {
                    notEmpty: {
                        message: 'ownership is empty!'
                    }
                }
            },
            mortgage_input: {
                validators: {
                    notEmpty: {
                        message: 'mortgage is empty!'
                    },
                    numeric: {}
                }
            }
        }
    }).on('success.form.bv', function (e) {
        e.preventDefault();
        $('.cont_right_2_form .next').removeAttr('disabled');
        $(this).parents('.content_right').fadeOut(function () {
            $(this).next('.content_right').fadeIn();
        });
        setTimeout(function () {
            $('#idea_form .idea_form_content .content_right_3').addClass('animate');
            $('body').scrollTop(0);
        }, 100);
    });
    $('.cont_right_3_form').bootstrapValidator(jobOpts).on('success.form.bv', function (e) {
        e.preventDefault();
        $('.cont_right_3_form .next').removeAttr('disabled');
        $(this).parents('.content_right').fadeOut(function () {
            $(this).next('.content_right').fadeIn();
        });
        setTimeout(function () {
            $('#idea_form .idea_form_content .content_right_4').addClass('animate');
            $('body').scrollTop(0);
        }, 100);
    });

    $('.loan_information_content_1').bootstrapValidator(loanOpts);
    $('.personal_information_content_1').bootstrapValidator(memberOpts);
    $('.job_information_content_1').bootstrapValidator(jobOpts);

    $('.content_right').niceScroll({
        cursorcolor: 'transparent',
        background: 'transparent',
        cursorwidth: '8px',
        cursorborder: '0'
    });
    setTimeout(function () {
        $('#idea_form .idea_form_content .content_left').addClass('start_animate');
        $('#idea_form .idea_form_content .content_right_1').addClass('start_animate');
    }, 200);
});

function chkHkid(hkid) {
    var id = hkid.toLocaleUpperCase().replace('(', '').replace(')', '');
    var num = 324;
    num += (id[0].charCodeAt() - 55) * 8;
    for (var i = 1; i < 7; i++) {
        num += parseInt(id[i]) * (8 - i);
    }
    return id[7] == 11 - num % 11;
}
