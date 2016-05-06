<script type="text/javascript">
var loanOpts = {
	    trigger: 'blur change',
	    fields: {
	        purpose_input: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in purpose value') ?>'
	                }
	            }
	        },
	        amount_input: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in amount value') ?>'
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
	                    message: '<?= Yii::t('web', 'Please fill in intenor value') ?>'
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
	                    message: '<?= Yii::t('web', 'Please fill in sign') ?>'
	                }
	            }
	        }
	    }
	};

	var memberOpts = {
	        trigger: 'blur change',
	        fields: {
	            language_select: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in language value') ?>'
	                    }
	                }
	            },
	            fstName_input: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in firstname') ?>'
	                    }
	                }
	            },
	            surName_input: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in surname') ?>'
	                    }
	                }
	            },
	            gender_select: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in gender') ?>'
	                    }
	                }
	            },
	            idNum_input: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in ID Number') ?>'
	                    },
	                    regexp: {
	                        regexp: /^[A-Za-z]\d{6}$/
	                    }
	                }
	            },
	            idChk_input: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in ID Number') ?>'
	                    }
	                }
	            },
	            date_input: {
	                validators: {
	                	notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in date') ?>'
	                    },
	                    callback: {
	                        callback: function () {
	                            return false;
	                        }
	                    }
	                }
	            },
	            mobile_input: {
	                validators: {
	                    notEmpty: {
	                    	message: '<?= Yii::t('web', 'Please fill in Mobile') ?>'
	                    },
	                    regexp: {
	                        regexp: /^\d{8}$/,
	                        message: '<?= Yii::t('web', 'Please enter valid Mobile') ?>'
	                    }
	                }
	            },
	            tel_input: {
	                 validators: {
	                     regexp: {
	                         regexp: /^(\d{8})?$/,
	                         message: '<?= Yii::t('web', 'Please enter valid Tel') ?>'
	                     }
	                 }
	             },
	            level_select: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in education level') ?>'
	                    }
	                }
	            },
	            depend_select: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in NO of Dependents') ?>'
	                    }
	                }
	            },
	            address_input: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in address') ?>'
	                    },
	                    stringLength: {
	                        max: 100,
	                        message: 'The address must be less than 100 characters! '
	                    }
	                }
	            },
	            address_select: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in address area') ?>'
	                    }
	                }
	            },
	            owner_select: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in ownership') ?>'
	                    }
	                }
	            },
	            mortgage_input: {
	                validators: {
	                    notEmpty: {
	                        message: '<?= Yii::t('web', 'Please fill in mortgage') ?>'
	                    },
	                    numeric: {}
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
	                    message: '<?= Yii::t('web', 'Please fill in company name') ?>'
	                }
	            }
	        },
	        self_employ: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in answer') ?>'
	                }
	            }
	        },
	        year_service: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in years of server') ?>'
	                },
	                between: {
	                    min: 0,
	                    max: 99.99,
	                    message: '<?= Yii::t('web', 'Please enter valid years of server') ?>'
	                },
	                regexp: {
	                    regexp: /^\d+(\.\d{1,2})?$/,
	                    message: '<?= Yii::t('web', 'Please enter valid years of server') ?>'
	                }

	            }
	        },
	        cpy_tel: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in company phone') ?>'
	                },
	                regexp: {
	                    regexp: /^\d{8}$/,
	                    message: '<?= Yii::t('web', 'Please enter valid company phone') ?>'
	                }
	            }
	        },
	        industry: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in Industry') ?>'
	                }
	            }
	        },
	        position: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in position') ?>'
	                }
	            }
	        },
	        month_income: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in monthly income') ?>'
	                },
	                numeric: {}
	            }
	        },
	        salary_way: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in salary method') ?>'
	                }
	            }
	        },
	        cpy_address: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in comepany address') ?>'
	                },
                    stringLength: {
                        max: 100,
                        message: 'The address must be less than 100 characters! '
                    }
	            }
	        },
	        cpy_address_area: {
	            validators: {
	                notEmpty: {
	                    message: '<?= Yii::t('web', 'Please fill in comepany address area') ?>'
	                },
                    stringLength: {
                        max: 100,
                        message: 'The address must be less than 100 characters! '
                    }
	            }
	        }
	    }
	};

</script>


<?php
/**
 * @var array $dict
 * @var float $rate
 * @var Loan $loan_model
 * @var HomeController $this
 */
$themeUrl = Yii::app()->theme->getBaseUrl();
Yii::app()->clientScript->registerCssFile($themeUrl . '/css/bootstrap-datetimepicker.min.css');
Yii::app()->clientScript->registerCssFile($themeUrl . '/css/bootstrap-select.min.css');
Yii::app()->clientScript->registerCssFile($themeUrl . '/css/idea_form.css');
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/idea_form.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/bootstrapValidator.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/bootstrap-datetimepicker.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/bootstrap-select.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/jquery.nicescroll.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/angular.min.js', CClientScript::POS_BEGIN);

$loanType = $loan_model->type ? $loan_model->type : Yii::app()->request->getParam('loanType');
$dateAge = date('Y-m-d', strtotime('-18year'));
?>
<div id="ng-app" ng-app="gicl">
    <div id="idea_form">
        <div class="wrap" ng-controller="apply">
            <!-- <div class="img visible-lg"><img src="<?= $themeUrl ?>/images/banner_imng_g.jpg"></div> -->
            <div class="top_banner col-xs-12 col-sm-12 hidden-lg">
                <h1><?= Yii::t('web', 'PERSONAL LOANS') ?></h1>
            </div>
            <div class="idea_form_content clearfix">
                <div class="cont_top hidden-lg col-xs-12 col-sm-12">
                    <div class="title"><?= Yii::t('web', 'Overview') ?></div>
                    <p><?= Yii::t('web', 'GICL offer a maximum loan of up to HK$300,000. For professionals such as doctors, solicitors,engineers, teachers, bank staff, etc, the maximum loan amount is up to HK$500,000.') ?></p>
                    <p>Read More</p>
                </div>
                <div class="content_left left col-md-4 col-lg-5 visible-lg">
                    <p class="title1 spacing"><?= Yii::t('web', 'PERSONAL LOANS') ?></p>
                    <P class="title2 spacing"><?= Yii::t('web', 'Overview') ?></P>
                    <p class="text_description_content spacing"><?= Yii::t('web', 'GICL offer a maximum loan of up to HK$300,000. For professionals such as doctors, solicitors, engineers, teachers, bank staff, etc., the maximum loan amount is up to HK$500,000.') ?></p>
                    <p class="read_more spacing"><?= Yii::t('web', 'Read More') ?></p>
                </div>
                <div class="content_right content_right_1 left col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="top">
                        <ul class="clearfix">
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">1</p>
                                    <p class="active p1"><?= Yii::t('web', 'Pick the') ?></p>
                                    <p class="active p2"><?= Yii::t('web', 'LOAN TYPE') ?></p>
                                </div>
                                <div class="active arrows left">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="step left">
                                    <p class="sequence">2</p>
                                    <p class="p1"><?= Yii::t('web', 'Tell Us') ?></p>
                                    <p class="p2"><?= Yii::t('web', 'ABOUT YOURSELF') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="step left">
                                    <p class="sequence">3</p>
                                    <p class="p1"><?= Yii::t('web', 'Tell us about') ?></p>
                                    <p class="p2"><?= Yii::t('web', 'YOUR JOB') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="step">
                                    <p class="sequence">4</p>
                                    <p class="p2"><?= Yii::t('web', 'SUBMIT') ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="divider"></div>

                    <!--                    Loan                     -->

                    <div class="bottom">
                        <div class="loan_type">
                            <p><?= Yii::t('web', 'Loan Type') ?></p>
                            <ul class="clearfix">
                                <?php foreach ($dict['data']['loanGroups'] as $loan): ?>
                                    <li>
                                        <img class="loan_type_bg" src="<?= $loan['image'] ?>" data-loan_type="<?= $loan['loanTypeCode'] ?>"
                                             ng-click="loanType='<?= $loan['loanType'] ?>';
                                            Loan.type='<?= $loan['loanTypeCode'] ?>';
                                            amountMin=<?= $loan['loanAmountMin'] ?>;
                                            amountMax=<?= $loan['loanAmountMax'] ?>;
                                            tenorMin=<?= $loan['tenorMin'] ?>;
                                            tenorMax=<?= $loan['tenorMax'] ?>;
                                            Loan.amount_type='<?= $loan['loanAmountCode'] ?>';
                                            selectLoan();"
                                             ng-class="Loan.type=='<?= $loan['loanTypeCode'] ?>'?'':'grayscale'"/>
                                        <p><?= $loan['loanType'] ?></p>
                                        <div class="tips">
                                            <div class="symbol"></div>
                                            <p><?= Yii::t('web', 'Loan Amount') ?>:</p>
                                            <p class="money">HK$<?= number_format($loan['loanAmountMin']) ?> -
                                                HK$<?= number_format($loan['loanAmountMax']) ?></p>
                                            <p><?= Yii::t('web', 'Tenor') ?>: <?= $loan['tenor'] ?> <?= Yii::t('web', 'months') ?></p>
                                        </div>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <input name="loan_type_input" type="hidden" ng-value="Loan.type" id='type_input'/>
                        <div class="loan">
                            <form class="cont_right_1_form">
                                <p class="title"></p>
                                <div class="form-group">
                                    <label class="title1"
                                           for="purpose_input"><?= Yii::t('web', 'Loan Purpose') ?></label>
                                    <select id="purpose_input" class="form-control show-tick" name="purpose_input"
                                            ng-model="Loan.purpose" ng-change="pick('purpose_input',Loan.purpose)">
                                        <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                        <option ng-repeat="e in dict.loanPurposes"
                                                ng-value="e.code">{{ e.name }}</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="title1" for="amount_input"><?= Yii::t('web', 'Loan Amount') ?></label>
                                    <input type="text" id="amount_input" class="form-control" name="amount_input"
                                           ng-change="calcPayment()" ng-model="Loan.amount"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label class="title1" for="tenor_input"><?= Yii::t('web', 'Tenor') ?></label>
                                    <select id="tenor_input" class="form-control show-tick" name="tenor_input"
                                            ng-model="Loan.tenor"
                                            ng-change="pick('tenor_input',Loan.tenor);calcPayment()">
                                        <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                        <option ng-repeat="e in makeList(tenorMin,tenorMax)"
                                                ng-value="e">{{ e }} <?= Yii::t('web', 'months') ?></option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="title1"
                                           for="property_input"><?= Yii::t('web', 'Property Value') ?></label>
                                    <input type="text" id="property_input" class="form-control" name="property_input"
                                           ng-model="Loan.property"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="title1"
                                           for="mortgage_input"><?= Yii::t('web', 'Mortgage Outstanding') ?></label>
                                    <input type="text" id="mortgage_input" class="form-control" name="mortgage_input"
                                           ng-model="Loan.mortgage"/>
                                </div>
                                <div class="form-group sign">
                                    <input type="checkbox" name="sign_checkout" ng-model="Loan.receive"/>
                                    <p><?= Yii::t('web','I agree to receive news and updates from GICL. By clicking "Apply" you confirm that you have read and accepted our Important Notice and Personal Data Privacy Notice.') ?></p>
                                </div>
                                <div class="btn-group btn_group">
                                    <button type="submit" class="btn next left"><?= Yii::t('web', 'NEXT') ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="content_right content_right_2 left col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="top">
                        <ul class="clearfix">
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">1</p>
                                    <p class="p1"><?= Yii::t('web', 'Pick the') ?></p>
                                    <p class="p2"><?= Yii::t('web', 'LOAN TYPE') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">2</p>
                                    <p class="active p1"><?= Yii::t('web', 'Tell Us') ?></p>
                                    <p class="active p2"><?= Yii::t('web', 'ABOUT YOURSELF') ?></p>
                                </div>
                                <div class="active arrows left">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="step left">
                                    <p class="sequence">3</p>
                                    <p class="p1"><?= Yii::t('web', 'Tell us about') ?></p>
                                    <p class="p2"><?= Yii::t('web', 'YOUR JOB') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="step">
                                    <p class="sequence">4</p>
                                    <p class="p1"></p>
                                    <p class="p2"><?= Yii::t('web', 'SUBMIT') ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="divider"></div>

                    <!--                MemberInfo                 -->

                    <div class="bottom">
                        <form class="cont_right_2_form">
                            <p class="title"><?= Yii::t('web', 'Personal Information') ?></p>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="title1" for="language_input"><?= Yii::t('web', 'Preferred Language') ?></label>
                                <select id="language_input" class="form-control show-tick" name="language_select"
                                        ng-model="MemberInfo.pre_language"
                                        ng-change="pick('language_select',MemberInfo.pre_language)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option value="en">ENGLISH</option>
                                    <option value="tc">繁體</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-6" style="padding-left: 0;">
                                <div class="form-group col-md-8 col-lg-8">
                                    <label class="title1" for="fstName_input"><?= Yii::t('web', 'First Name') ?></label>
                                    <input type="text" id="fstName_input" class="form-control" name="fstName_input"
                                           ng-model="MemberInfo.firstname"/>
                                </div>
                                <div class="form-group col-md-4 col-lg-4">
                                    <label class="title1" for="surName_input"><?= Yii::t('web', 'Surname') ?></label>
                                    <input type="text" id="surName_input" class="form-control" name="surName_input"
                                           ng-model="MemberInfo.surname"/>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="gender_input"><?= Yii::t('web', 'Gender') ?></label>
                                <select id="gender_input" class="form-control show-tick" name="gender_select"
                                        ng-model="MemberInfo.gender"
                                        ng-change="pick('gender_select',MemberInfo.gender)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option value="female"><?= Yii::t('web', 'FEMALE') ?></option>
                                    <option value="male"><?= Yii::t('web', 'MALE') ?></option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-6" style="padding-left: 0;">
                                <div class="form-group col-md-9 col-lg-9 hidden-md hidden-lg">
                                    <label class="title1" for="idNum_input"><?= Yii::t('web', 'HK ID Number*') ?></label>
                                    <input type="text" id="idNum_input" class="form-control"
                                           ng-change="MemberInfo.hkid=MemberInfo.idNum + '(' + MemberInfo.idChk + ')';"
                                           ng-model="MemberInfo.idNum"
                                           style="width:82%;display:inline-block;"/>
                                    (<input type="text" class="form-control " name="idChk_input" maxlength="1"
                                            ng-change="MemberInfo.hkid=MemberInfo.idNum + '(' + MemberInfo.idChk + ')';"
                                            ng-model="MemberInfo.idChk"
                                            style="width:12%;display:inline-block;margin:0 2px;"/>)
                                </div>
                                <div class="form-group col-md-9 col-lg-9 visible-md visible-lg">
                                    <label class="title1" for="idNum_input"><?= Yii::t('web', 'HK ID Number*') ?></label>
                                    <input type="text" id="idNum_input" class="form-control" name="idNum_input"
                                           ng-change="MemberInfo.hkid=MemberInfo.idNum + '(' + MemberInfo.idChk + ')';"
                                           ng-model="MemberInfo.idNum"/>
                                </div>
                                <div class="form-group col-md-3 col-lg-3 visible-md visible-lg">
                                    <label class="title1" for="">&nbsp;</label>
                                    <input type="text" class="form-control" name="idChk_input" id="idChk_input"
                                           ng-change="MemberInfo.hkid=MemberInfo.idNum + '(' + MemberInfo.idChk + ')';"
                                           ng-model="MemberInfo.idChk"/>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="date_input"><?= Yii::t('web', 'Date Of Birth') ?></label>
                                <span class="date_tips">yyyy/mm/dd</span>
                                <input type="text" name="date_input" ng-model="MemberInfo.birthday" id="date_input"
                                       class="form-control form_datetime">
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="mobile_input"><?= Yii::t('web', 'Mobile') ?></label>
                                <input type="text" id="mobile_input" class="form-control" name="mobile_input"
                                       ng-model="MemberInfo.mobile"/>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="level_select"><?= Yii::t('web', 'Education Level') ?></label>
                                <select id="level_select" class="form-control show-tick" name="level_select"
                                        ng-model="MemberInfo.education_level"
                                        ng-change="pick('level_select',MemberInfo.education_level)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option ng-repeat="e in dict.edu_Levels"
                                            ng-value="e.code">{{ e.name }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="tel_input"><?= Yii::t('web', 'Home Phone') ?></label>
                                <input type="text" id="tel_input" class="form-control" name="tel_input"
                                       ng-model="MemberInfo.home_tel"/>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="depend_select"><?= Yii::t('web', 'NO of Dependents') ?></label>
                                <select id="depend_select" class="form-control show-tick" name="depend_select"
                                        ng-model="MemberInfo.number_denpdents"
                                        ng-change="pick('depend_select',MemberInfo.number_denpdents)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option ng-repeat="e in dict.dependent_nums"
                                            ng-value="e.code">{{ e.name }}</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <label class="title1" style="margin-bottom:10px;"><?= Yii::t('web', 'Residential Address') ?></label>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="title1" style="font-size:15px;font-weight:normal;" for="address_input"><?= Yii::t('web', 'Room/Floor/Building') ?></label>
                                <input type="text" id="address_input" class="form-control" name="address_input"
                                       onkeyup="value=value.replace(/[^\w\.\,\\ \/]/ig,'')" style="ime-mode:disabled;" ng-model="MemberInfo.addr_room"/>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="title1" style="font-size:15px;font-weight:normal;" for="address_input"><?= Yii::t('web', 'Street/Estate') ?></label>
                                <input type="text" id="address_building_input" class="form-control" name="address_input"
                                       onkeyup="value=value.replace(/[^\w\.\,\\ \/]/ig,'')" style="ime-mode:disabled;" ng-model="MemberInfo.addr_building"/>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <select class="form-control show-tick" name="address_select" id='address_select'
                                        ng-model="MemberInfo.addr_area"
                                        ng-change="pick('address_select',MemberInfo.addr_area)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option ng-repeat="e in dict.district"
                                            ng-value="e.code">{{ e.name }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="owner_select"><?= Yii::t('web', 'Ownership') ?></label>
                                <select id="owner_select" class="form-control show-tick" name="owner_select"
                                        ng-model="MemberInfo.ownership"
                                        ng-change="pick('owner_select',MemberInfo.ownership)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option ng-repeat="e in dict.residential_status"
                                            ng-value="e.code">{{ e.name }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="mortgage_input"><?= Yii::t('web', 'Monthly Mortgage / Rental amount') ?></label>
                                <input type="text" id="mortgage_input_2" class="form-control" name="mortgage_input"
                                       ng-model="MemberInfo.mortgage"/>
                            </div>
                            <div class="col-md-12 col-lg-12">
                            	<span><?= Yii::t('web', '*Global International Credit Limited only accept any Hong Kong permanent resident aged 18 or above.') ?></span>
                            </div>
                            <div class="btn-group btn_group">
                                <button type="submit" class="btn next left"><?= Yii::t('web', 'NEXT') ?></button>
                                <span class="btn previou left"><?= Yii::t('web', 'PREVIOUS') ?></span>
                            </div>
                        </form>
                    </div>
                </div>

                <!--            Job          -->

                <div class="content_right content_right_3 left col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="top">
                        <ul class="clearfix">
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">1</p>
                                    <p class="p1"><?= Yii::t('web', 'Pick the') ?></p>
                                    <p class="p2"><?= Yii::t('web', 'LOAN TYPE') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">2</p>
									<p class="p1"><?= Yii::t('web', 'Tell Us') ?></p>
									<p class="p2"><?= Yii::t('web', 'ABOUT YOURSELF') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">3</p>
                                    <p class="active p1"><?= Yii::t('web', 'Tell us about') ?></p>
                                    <p class="active p2"><?= Yii::t('web', 'YOUR JOB') ?></p>
                                </div>
                                <div class="active arrows left">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="step">
                                    <p class="sequence">4</p>
									<p class="p1"></p>
									<p class="p2"><?= Yii::t('web', 'SUBMIT') ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="bottom">
                        <form class="cont_right_3_form">
                            <p class="title"><?= Yii::t('web', 'Job Information') ?></p>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="title1" for="cpy_name"><?= Yii::t('web', 'Company Name') ?></label>
                                <input type="text" id="cpy_name" class="form-control" name="cpy_name"
                                       ng-model="Job.company_name"/>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="self_employ"><?= Yii::t('web', 'Self Employed?') ?></label>
                                <select id="self_employ" class="form-control show-tick" name="self_employ"
                                        ng-model="Job.self_employed" ng-change="pick('self_employ',Job.self_employed)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option ng-repeat="e in dict.selfEmploy"
                                            ng-value="e.code">{{ e.name }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="year_service"><?= Yii::t('web', 'Years of Services') ?></label>
                                <input type="text" id="year_service" class="form-control" name="year_service"
                                       ng-model="Job.year_services"/>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="cpy_tel"><?= Yii::t('web', 'Company Phone') ?></label>
                                <input type="text" id="cpy_tel" class="form-control" name="cpy_tel"
                                       ng-model="Job.company_tel"/>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="industry"><?= Yii::t('web', 'Industry') ?></label>
                                <select id="industry" class="form-control show-tick" name="industry"
                                        ng-model="Job.industry" ng-change="pick('industry',Job.industry)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option ng-repeat="e in dict.industrys"
                                            ng-value="e.code">{{ e.name }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="title1" for="position"><?= Yii::t('web', 'Position') ?></label>
                                <input type="text" id="position" class="form-control" name="position"
                                       ng-model="Job.position"/>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="month_income"><?= Yii::t('web', 'Monthly Income') ?></label>
                                <input type="text" id="month_income" class="form-control" name="month_income"
                                       ng-model="Job.monthly_income"/>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label class="title1" for="salary_way"><?= Yii::t('web', 'Method of getting paid') ?></label>
                                <select id="salary_way" class="form-control show-tick" name="salary_way"
                                        ng-model="Job.salary_method" ng-change="pick('salary_way',Job.salary_method)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option ng-repeat="e in dict.salary_method"
                                            ng-value="e.code">{{ e.name }}</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <label class="title1" style="margin-bottom:10px;"><?= Yii::t('web', 'Company Address') ?></label>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="title1" style="font-size:15px;font-weight:normal;" for="cpy_address"><?= Yii::t('web', 'Room/Floor/Building') ?></label>
                                <input type="text" id="cpy_address" class="form-control" name="cpy_address"
                                       onkeyup="value=value.replace(/[^\w\.\,\\ \/]/ig,'')" style="ime-mode:disabled;" ng-model="Job.addr_room"/>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="title1" style="font-size:15px;font-weight:normal;" for="cpy_address"><?= Yii::t('web', 'Street/Estate') ?></label>
                                <input type="text" id="cpy_address_building" class="form-control" name="cpy_address"
                                       onkeyup="value=value.replace(/[^\w\.\,\\ \/]/ig,'')" style="ime-mode:disabled;" ng-model="Job.addr_building"/>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <select id="cpy_address_area" class="form-control show-tick" name="cpy_address_area"
                                        ng-model="Job.addr_area" ng-change="pick('cpy_address_area',Job.addr_area)">
                                    <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                    <option ng-repeat="e in dict.district"
                                            ng-value="e.code">{{ e.name }}</option>
                                </select>
                            </div>
                            <div class="btn-group btn_group">
                                <button type="submit" class="btn next left"><?= Yii::t('web', 'NEXT') ?></button>
                                <span class="btn previou left"><?= Yii::t('web', 'PREVIOUS') ?></span>
                            </div>
                        </form>
                    </div>
                </div>


                <!--            Edit            -->


                <div class="content_right content_right_4 left col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="top">
                        <ul class="clearfix">
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">1</p>
                                    <p class="p1"><?= Yii::t('web', 'Pick the') ?></p>
                                    <p class="p2"><?= Yii::t('web', 'LOAN TYPE') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">2</p>
                                    <p class="p1"><?= Yii::t('web', 'Tell Us') ?></p>
                                    <p class="p2"><?= Yii::t('web', 'ABOUT YOURSELF') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="active clearfix">
                                <div class="step left">
                                    <p class="sequence">3</p>
                                    <p class="p1"><?= Yii::t('web', 'Tell us about') ?></p>
                                    <p class="p2"><?= Yii::t('web', 'YOUR JOB') ?></p>
                                </div>
                                <div class="arrows left">
                                </div>
                            </li>
                            <li class="active clearfix">
                                <div class="step">
                                    <p class="sequence">4</p>
									<p class="active p1"></p>
									<p class="active p2"><?= Yii::t('web', 'SUBMIT') ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="bottom">
                        <div class="bottom_content">
                            <div class="loan_information_content">
                                <div class="clearfix">
                                    <span class="title left"><?= Yii::t('web', 'Loan Information') ?></span>
                                    <span class="edit right"><?= Yii::t('web', 'EDIT') ?></span>
                                </div>
                                <form class="loan_information_content_1">
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1"><?= Yii::t('web', 'Loan Type') ?></label>
                                        <p class="form-control-static">{{ loanType }}</p>
                                         <input name="loan_type_input" type="hidden" ng-value="Loan.type"/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="purpose_input"><?= Yii::t('web', 'Loan Purpose') ?></label>
                                        <select id="purpose_input" class="form-control show-tick" name="purpose_input"
                                                ng-model="Loan.purpose" ng-change="pick('purpose_input',Loan.purpose)"
                                                disabled>
                                            <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                            <option ng-repeat="e in dict.loanPurposes"
                                                    ng-value="e.code">{{ e.name }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="amount_input"><?= Yii::t('web', 'Loan Amount') ?></label>
                                        <input type="text" id="amount_input" class="form-control" name="amount_input"
                                               ng-change="calcPayment()" ng-model="Loan.amount" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="tenor_input"><?= Yii::t('web', 'Tenor') ?></label>
                                        <select id="tenor_input" class="form-control show-tick" name="tenor_input"
                                                ng-model="Loan.tenor"
                                                ng-change="pick('tenor_input',Loan.tenor);calcPayment()"
                                                disabled>
                                            <option value=""><?= Yii::t('web', 'Select a Tenor') ?></option>
                                            <option ng-repeat="e in makeList(tenorMin,tenorMax)"
                                                    ng-value="e">{{ e }} <?= Yii::t('web', 'months') ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="property_input"><?= Yii::t('web', 'Property Value') ?></label>
                                        <input type="text" id="property_input" class="form-control"
                                               name="property_input"
                                               ng-model="Loan.property" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="mortgage_input"><?= Yii::t('web', 'Mortgage Outstanding') ?></label>
                                        <input type="text" id="mortgage_input" class="form-control"
                                               name="mortgage_input"
                                               ng-model="Loan.mortgage" disabled/>
                                    </div>
                                </form>
                            </div>
                            <div class="perferred_language_content">
                            	<div class="clearfix">
                                     <span class="title left"><?= Yii::t('web', 'Preferred Language') ?></span>
                                    <span class="edit right"><?= Yii::t('web', 'EDIT') ?></span>
                                </div>
                                <form class="perferred_language_content_1">
                                    <div class="form-group col-md-12 col-lg-12" style="padding: 0;">

                                        <select id="language_input" class="form-control left show-tick visible-lg"
                                                name="language_select" ng-model="MemberInfo.pre_language"
                                                ng-change="pick('language_select',MemberInfo.pre_language)" disabled>
                                            <option value=""><?= Yii::t('web', 'LANGUAGE') ?></option>
                                            <option value="en">ENGLISH</option>
                                            <option value="tc">繁體</option>
                                        </select>

                                        <select id="language_input" class="form-control left show-tick hidden-lg"
                                                name="language_select" ng-model="MemberInfo.pre_language"
                                                ng-change="pick('language_select',MemberInfo.pre_language)" disabled>
                                            <option value=""><?= Yii::t('web', 'LANGUAGE') ?></option>
                                            <option value="en">ENGLISH</option>
                                            <option value="tc">繁體</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="personal_information_content">
                                <div class="clearfix">
                                    <span class="title left"><?= Yii::t('web', 'Personal Information') ?></span>
                                    <span class="edit right"><?= Yii::t('web', 'EDIT') ?></span>
                                </div>
                                <form class="personal_information_content_1">
                                    <div class="form-group col-md-6 col-lg-6">
                                    	<label class="title1" for="fstName_input"><?= Yii::t('web', 'First Name') ?></label>
	                                    <input type="text" id="fstName_input" class="form-control" name="fstName_input"
	                                           ng-model="MemberInfo.firstname" disabled/>
	                                </div>
	                                <div class="form-group col-md-6 col-lg-6">
	                                    <label class="title1" for="surName_input"><?= Yii::t('web', 'Surname') ?></label>
	                                    <input type="text" id="surName_input" class="form-control" name="surName_input"
	                                           ng-model="MemberInfo.surname" disabled/>
	                                </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="gender_input"><?= Yii::t('web', 'Gender') ?></label>
                                        <select id="gender_input" class="form-control show-tick" name="gender_select"
                                                ng-model="MemberInfo.gender"
                                                ng-change="pick('gender_select',MemberInfo.gender)" disabled>
                                            <option value=""><?= Yii::t('web', 'GENDER') ?></option>
                                            <option value="female"><?= Yii::t('web', 'FEMALE') ?></option>
                                            <option value="male"><?= Yii::t('web', 'MALE') ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="idNum_input"><?= Yii::t('web', 'HK ID Number*') ?></label>
                                        <input type="text" id="hkid_input" class="form-control" name="hkid_input"
                                               ng-model="MemberInfo.hkid" disabled/>
                                    </div>
                                    <div class="form-group input-append date col-md-6 col-lg-6">
                                        <label class="title1" for="date_input"><?= Yii::t('web', 'Date Of Birth') ?></label>
                                        <input size="16" type="text" name="date_input" ng-model="MemberInfo.birthday"
                                               id="date_input"
                                               class="form-control form_datetime" disabled/>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="mobile_input"><?= Yii::t('web', 'Mobile') ?></label>
                                        <input type="text" id="mobile_input" class="form-control" name="mobile_input"
                                               ng-model="MemberInfo.mobile" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="level_select"><?= Yii::t('web', 'Education') ?></label>
                                        <select id="level_select" class="form-control show-tick" name="level_select"
                                                ng-model="MemberInfo.education_level"
                                                ng-change="pick('level_select',MemberInfo.education_level)" disabled>
                                            <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                            <option ng-repeat="e in dict.edu_Levels"
                                                    ng-value="e.code">{{ e.name }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="tel_input"><?= Yii::t('web', 'Home Phone') ?></label>
                                        <input type="text" id="tel_input" class="form-control" name="tel_input"
                                               ng-model="MemberInfo.home_tel" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="depend_select"><?= Yii::t('web', 'Number of Departments') ?></label>
                                        <select id="depend_select" class="form-control show-tick" name="depend_select"
                                                ng-model="MemberInfo.number_denpdents"
                                                ng-change="pick('depend_select',MemberInfo.number_denpdents)" disabled>
                                            <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                            <option ng-repeat="e in dict.dependent_nums"
                                                    ng-value="e.code">{{ e.name }}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
		                                <label class="title1" style="margin-bottom:10px;"><?= Yii::t('web', 'Residential Address') ?></label>
		                            </div>
                                    <div class="form-group col-md-12 col-lg-12">
		                                <label class="title1" style="font-size:15px;font-weight:normal;" for="address_input"><?= Yii::t('web', 'Room/Floor/Building') ?></label>
		                                <input type="text" id="address_input" class="form-control" name="address_input"
		                                       onkeyup="value=value.replace(/[^\w\.\,\\ \/]/ig,'')" style="ime-mode:disabled;" ng-model="MemberInfo.addr_room" disabled/>
		                            </div>
		                            <div class="form-group col-md-12 col-lg-12">
		                                <label class="title1" style="font-size:15px;font-weight:normal;" for="address_input"><?= Yii::t('web', 'Street/Estate') ?></label>
		                                <input type="text" id="address_building_input" class="form-control" name="address_input"
		                                       onkeyup="value=value.replace(/[^\w\.\,\\ \/]/ig,'')" style="ime-mode:disabled;" ng-model="MemberInfo.addr_building" disabled/>
		                            </div>
                                </form>
                            </div>
                            <div class="job_information_content">
                                <div class="clearfix">
                                    <span class="title left"><?= Yii::t('web', 'Job Information') ?></span>
                                    <span class="edit right"><?= Yii::t('web', 'EDIT') ?></span>
                                </div>
                                <form class="job_information_content_1">
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="cpy_name"><?= Yii::t('web', 'Company Name') ?></label>
                                        <input type="text" id="cpy_name" class="form-control" name="cpy_name"
                                               ng-model="Job.company_name" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="self_employ"><?= Yii::t('web', 'Self Employed?') ?></label>
                                        <select id="self_employ" class="form-control show-tick" name="self_employ"
                                                ng-model="Job.self_employed"
                                                ng-change="pick('self_employ',Job.self_employed)" disabled>
                                            <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                            <option ng-repeat="e in dict.selfEmploy"
                                                    ng-value="e.code">{{ e.name }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="year_service"><?= Yii::t('web', 'Years of Services') ?></label>
                                        <input type="text" id="year_service" class="form-control" name="year_service"
                                               ng-model="Job.year_services" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="cpy_tel"><?= Yii::t('web', 'Company Phone') ?></label>
                                        <input type="text" id="cpy_tel" class="form-control" name="cpy_tel"
                                               ng-model="Job.company_tel" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="industry"><?= Yii::t('web', 'Industry') ?></label>
                                        <select id="industry" class="form-control show-tick" name="industry"
                                                ng-model="Job.industry" ng-change="pick('industry',Job.industry)"
                                                disabled>
                                            <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                            <option ng-repeat="e in dict.industrys"
                                                    ng-value="e.code">{{ e.name }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="position"><?= Yii::t('web', 'Position') ?></label>
                                        <input type="text" id="position" class="form-control" name="position"
                                               ng-model="Job.position" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="month_income"><?= Yii::t('web', 'Monthly Income') ?></label>
                                        <input type="text" id="month_income" class="form-control" name="month_income"
                                               ng-model="Job.monthly_income" disabled/>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label class="title1" for="salary_way"><?= Yii::t('web', 'Method of getting paid') ?></label>
                                        <select id="salary_way" class="form-control show-tick" name="salary_way"
                                                ng-model="Job.salary_method"
                                                ng-change="pick('salary_way',Job.salary_method)" disabled>
                                            <option value=""><?= Yii::t('web', 'Please select') ?></option>
                                            <option ng-repeat="e in dict.salary_method"
                                                    ng-value="e.code">{{ e.name }}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
		                                <label class="title1" style="margin-bottom:10px;"><?= Yii::t('web', 'Company Address') ?></label>
		                            </div>
		                            <div class="form-group col-md-12 col-lg-12">
		                                <label class="title1" style="font-size:15px;font-weight:normal;" for="cpy_address"><?= Yii::t('web', 'Room/Floor/Building') ?></label>
		                                <input type="text" id="cpy_address" class="form-control" name="cpy_address"
		                                       onkeyup="value=value.replace(/[^\w\.\,\\ \/]/ig,'')" style="ime-mode:disabled;" ng-model="Job.addr_room" disabled/>
		                            </div>
		                            <div class="form-group col-md-12 col-lg-12">
		                                <label class="title1" style="font-size:15px;font-weight:normal;" for="cpy_address"><?= Yii::t('web', 'Street/Estate') ?></label>
		                                <input type="text" id="cpy_address_building" class="form-control" name="cpy_address"
		                                       onkeyup="value=value.replace(/[^\w\.\,\\ \/]/ig,'')" style="ime-mode:disabled;" ng-model="Job.addr_building" disabled/>
		                            </div>
                                </form>
                            </div>
                            <div class="btn-group btn_group">
                                <span class="btn next left" ng-click="submit()"><?= Yii::t('web', 'NEXT') ?></span>
                                <span class="btn previou left"><?= Yii::t('web', 'PREVIOUS') ?></span>
                            </div>
                            <div class="loading_model">
                            	<img src="<?= $themeUrl ?>/images/loading_model.gif" alt="" width="20%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_right content_right_5 left col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="top">
                        <div class="icon_succeed"><img src="<?= $themeUrl ?>/images/icon_succeed_1.png"></div>
                        <p class="succeed"><?= Yii::t('web', 'CONGRATULATIONS') ?>,</p>
                        <p class="succeed"><?= Yii::t('web', 'Your Application is approved') ?></p>
                        <p class="succeed_p1"><?= Yii::t('web', 'HK') ?>{{ Loan.amount | currency }} <?= Yii::t('web', 'with') ?> {{ Loan.tenor }} <?= Yii::t('web', 'tenor') ?>, <span id='interest_rate'>18</span>%
                            <?= Yii::t('web', 'interest monthly') ?>, <?= Yii::t('web', 'monthly payment of HK') ?><span id='monthly_payment'>{{ monthlyPayment | currency }}</span>.</p>
                        <p class="succeed_p2"><?= Yii::t('web', 'Please upload your documents, and we will contact you once we have verified your application documents.') ?></p>
                        <p><?= Yii::t('web', 'Remarks:') ?></p>
                        <p><?= Yii::t('web', 'Based on the information provided at the initial stage, the lender is qualified for loan subject to verification of credit reports. The final approval may vary according to assessment of last submission and the most recent credit records.') ?></p>
                    </div>
                    <div class="bottom hidden">
                        <p class="succeed_p3">Or you can skip this step and submit the document later</p>
                        <form>
                            <ul class="clearfix">
                                <li class="half left">
                                    <p class="title1">Hong Kong Identity Card Copy</p>
                                    <div class="position">
                                        <input type="text" placeholder="PLEASE ATTACHED FILE"/>
                                        <div class="card_copy"><img src="<?= $themeUrl ?>/images/icon_form_1.png"></div>
                                    </div>
                                </li>
                                <li class="half right">
                                    <p class="title1">Proof Of Address</p>
                                    <div class="position">
                                        <input type="text" placeholder="PLEASE ATTACHED FILE"/>
                                        <div class="card_copy"><img src="<?= $themeUrl ?>/images/icon_form_1.png"></div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="clearfix">
                                <li class="half left add_more_content">
                                    <div class="add_more">Add More</div>
                                </li>
                                <li class="half right add_more_content">
                                    <div class="add_more">Add More</div>
                                </li>
                            </ul>
                            <ul class="clearfix">
                                <li class="half left">
                                    <p class="title1">Proof Of address</p>
                                    <div class="position">
                                        <input type="text" placeholder="PLEASE ATTACHED FILE"/>
                                        <div class="card_copy"><img src="<?= $themeUrl ?>/images/icon_form_1.png"></div>
                                    </div>
                                </li>
                                <li class="half right">
                                    <p class="title1">Proof Of Income Issued During The Past Months</p>
                                    <div class="position">
                                        <input type="text" placeholder="PLEASE ATTACHED FILE"/>
                                        <div class="card_copy"><img src="<?= $themeUrl ?>/images/icon_form_1.png"></div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="clearfix">
                                <li class="half left add_more_content">
                                    <div class="add_more">Add More</div>
                                </li>
                                <li class="half right add_more_content">
                                    <div class="add_more">Add More</div>
                                </li>
                            </ul>
                        </form>
                        <div>
                            <div class="submit left" onclick='uploadFile()'><?= Yii::t('web', 'SUBMIT') ?></div>
                            <a href="<?= Yii::app()->homeUrl; ?>"><div class="submit left" ><?= Yii::t('web', 'SUBMIT LATER') ?></div></a>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="btn-group col-xs-12 col-sm-12">
                        <button class="btn btn-default submit left" onclick='uploadFile()'><?= Yii::t('web', 'SUBMIT') ?></button>
                        <a href="<?= Yii::app()->homeUrl; ?>"><button class="btn btn-default submit left" ><?= Yii::t('web', 'SUBMIT LATER') ?></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var loanType = '<?= $loanType ?>';
    var dict = <?= json_encode($dict) ?>;
    var gicl = angular.module('gicl', []);
    var flip = true;
    gicl.controller('apply', function ($scope, $timeout) {
        $scope.dict = dict['data'];
        $scope.rate = <?= $rate ?>;
        $scope.amountMin = 0;
        $scope.amountMax = 0;
        $scope.tenorMin = 0;
        $scope.tenorMax = 0;
        $scope.monthlyPayment = 0;
        $scope.Loan = {
            type: '<?php echo $loan_model->type;?>',
            purpose: '',
            amount: '<?php echo $loan_model->amount;?>',
            tenor: '',
            property: '<?php echo $loan_model->property;?>',
            mortgage: '<?php echo $loan_model->mortgage;?>',
			receive: <?= $loan_model->agree_receive_new == 1 ? 'true' : 'false' ?>
        };
        $scope.MemberInfo = {
            pre_language: '<?php echo $borrower_model->pre_language;?>',
            firstname: '<?php echo $borrower_model->firstname;?>',
            surname: '<?php echo $borrower_model->surname;?>',
            gender: '<?php echo $borrower_model->gender;?>',
            hkid: '<?php echo base64_decode($borrower_model->hkid);?>',
            idNum: '<?php echo substr(base64_decode($borrower_model->hkid),0,strlen(base64_decode($borrower_model->hkid))-1);?>',
            idChk: '<?php echo substr(base64_decode($borrower_model->hkid),strlen(base64_decode($borrower_model->hkid))-1,1);?>',
            birthday: '<?php echo str_replace("-","/",$borrower_model->birthday);?>',
            home_tel: '<?php echo $borrower_model->home_tel;?>',
            education_level: '',
            mobile: '<?php echo $borrower_model->mobile;?>',
            number_denpdents: '',
            addr_room: '<?php echo $borrower_model->addr_room;?>',
            addr_area: '',
            ownership: '',
            mortgage: '<?php echo $borrower_model->mortgage;?>',
            addr_building: '<?php echo $borrower_model->addr_building;?>',
        };
        $scope.Job = {
            company_name: '<?php echo $job_model->company_name;?>',
            self_employed: '',
            year_services: '<?php echo $job_model->year_services;?>',
            company_tel: '<?php echo $job_model->company_tel;?>',
            industry: '',
            position: '<?php echo $job_model->position;?>',
            monthly_income: '<?php echo $job_model->monthly_income;?>',
            salary_method: '',
            addr_room: '<?php echo $job_model->addr_room;?>',
            addr_area: '',
            addr_building: '<?php echo $job_model->addr_building;?>',
        };
        $scope.makeList = function (min, max) {
            var list = [];
            for (var i = min; i <= max; i++) {
                if (i % 6 == 0)
                    list.push(i);
            }
            return list;
        };
        $scope.calcPayment = function () {
            var rate = $scope.rate / 100;
            $scope.monthlyPayment = ((parseFloat($scope.Loan.amount) * rate * $scope.Loan.tenor + parseFloat($scope.Loan.amount)) / $scope.Loan.tenor).toFixed(2);
        };
        $scope.submit = function () {
            if(flip){
            	var url = '<?= Yii::app()->createUrl('/website/home/submit') ?>';
                $.post(url, {Loan: $scope.Loan, MemberInfo: $scope.MemberInfo, Job: $scope.Job}, function (data) {
                	if (data.code == '1') {
                    	//congratulation
                    	$(".loading_model").popup({
                    		opacity: .7,
                    		transition: 'all 0.3s'
                    	});
                    	$(".loading_model").popup('show');
                    	setTimeout(function(){
                    		var rate = 0;
                            var loan_amount = data.loan_amount;
                            var loan_tenor = data.loan_tenor;
                            var loan_id = data.loan_id;
                            //get apply result 
                            $.post('<?= Yii::app()->createUrl('/website/home/ajaxGetLoanResult') ?>',{loan_id:loan_id},function(result){
    						    if(result.code == '1'){
    							    rate = result.interest_rate;
    							    if(result.aip_result == 'reject'){
    							    	//alert($(".content_right_5 .top").html('<p class="succeed_p1">'));
    							    	$(".content_right_5 .top").html('<div class="icon_succeed"><img src="<?= $themeUrl ?>/images/icon_succeed_1.png"></div><p class="succeed_p1"><?= Yii::t('web','Thank you for your application. We have assessed your application and regret to inform you that it has not gained an immediate approval. For more information, please call 3575 1099 during office hours.');?></p>')
    							    	$(".submit").hide();
    							    }
    							    if(result.aip_result == 'timeout'){
    							    	$(".content_right_5 .top").html('<div class="icon_succeed"><img src="<?= $themeUrl ?>/images/icon_succeed_1.png"></div><p class="succeed"><?= Yii::t('web', 'Your application has been submitted.'); ?></p><p class="succeed_p1"><?= Yii::t('web','However, the credit report provided has not satisfied the criteria for an instant approval. Please provide the supplementary documents via e-mail or our mobile application at your earliest convenience so we can access your application. You can check the status of your application by logging into our system.');?></p>');
    							    }
    							    $('.content_right_4 .next').parents('.content_right').fadeOut(function () {
    					                $(this).next('.content_right').fadeIn();
    					            });
    					            //monthly payment
    					            var v = (1+(rate/12));
									var t = (-(loan_tenor/12)*12);
									var monthly_payment = (loan_amount*(rate/12))/(1-Math.pow(v,t));
    							    var flat_rate = (monthly_payment*loan_tenor-loan_amount)/loan_amount/loan_tenor*100;
    	                            $('#interest_rate').html(flat_rate.toFixed(2)); //flat rate 
    	                            $('#monthly_payment').html(monthly_payment.toFixed(2));
    	                    		
    					            $(".loading_model").popup("hide");
    						    }
    						},'json');
                            
                    	},30000);
                    } else {
                        alert(data.message);
                    }
                }, 'json');
            }
        };
		$scope.selectLoanFlag = true;
        $scope.selectLoan = function () {
            $('.cont_right_1_form').bootstrapValidator('updateOption', 'amount_input', 'between', 'min', $scope.amountMin);
            $('.cont_right_1_form').bootstrapValidator('updateOption', 'amount_input', 'between', 'max', $scope.amountMax);
            $('.cont_right_1_form').bootstrapValidator('updateOption', 'amount_input', 'between', 'message', '<?= Yii::t('web', 'Please enter a value between 10000 and 300000') ?>');
            $('.loan_information_content_1').bootstrapValidator('updateOption', 'amount_input', 'between', 'min', $scope.amountMin);
            $('.loan_information_content_1').bootstrapValidator('updateOption', 'amount_input', 'between', 'max', $scope.amountMax);
            $('.loan_information_content_1').bootstrapValidator('updateOption', 'amount_input', 'between', 'message', '<?= Yii::t('web', 'Please enter a value between 10000 and 300000') ?>');
            $timeout(function () {
                $('select[name=tenor_input]').selectpicker('refresh');
				if ($scope.selectLoanFlag) {
					$('select[name=tenor_input]').selectpicker('val', '<?= $loan_model->tenor ?>').trigger('change');
					$('select[name=tenor_input]').selectpicker('val', '<?= $loan_model->tenor ?>').trigger('change');
					$scope.selectLoanFlag = false;
				}
            }, 500);
		};
        $scope.pick = function (name, val) {
            $('select[name=' + name + ']').selectpicker('val', val);
        };
    });

    $(function () {
    	$(".cont_right_2_form .form_datetime").datetimepicker({
            format: 'yyyy/mm/dd',
            weekStart: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $(".personal_information_content_1 .form_datetime").datetimepicker({
            format: 'yyyy/mm/dd',
            weekStart: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            showMeridian: 1
        });
    	//idea_form.js
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


	    $('.edit').click(function () {
	        if (flip == true) {
				$(this).text('<?= Yii::t('web', 'SAVE') ?>').parent().next().find('[name],button').removeAttr('disabled').removeClass('disabled');
				$(this).prev().children('[name],button').removeAttr('disabled').removeClass('disabled');
				$(this).next().children('[name],button').removeAttr('disabled').removeClass('disabled');
				flip = false;
			} else {
				$(this).parent().parent().children('form').data('bootstrapValidator').validate();
				var flag = $(this).parent().parent().children('form').data('bootstrapValidator').isValid();
				if (flag) {
					$(this).text('<?= Yii::t('web', 'EDIT') ?>').parent().next().find('[name],button').attr('disabled', '');
					$(this).prev().children('[name],button').attr('disabled', '');
					$(this).next().children('[name],button').attr('disabled', '');
	                flip = true;
	            }
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
	    $('.cont_right_1_form').bootstrapValidator(loanOpts).on('success.form.bv', function (e) {
	        e.preventDefault();
	        $('.cont_right_1_form .next').removeAttr('disabled');
	        $(this).parents('.content_right').fadeOut(function () {
	            $(this).next('.content_right').fadeIn();
	        });
	        setTimeout(function () {
	            $('#idea_form .idea_form_content .content_right_2').addClass('animate');
	            $('body').scrollTop(0);
	        }, 100);
	        //ajax save loan infomation step 1
	        var url = '<?= Yii::app()->createUrl('/website/home/ajaxFillingLoan') ?>';
	        var data = {
        		type: $('#type_input').val(),
                purpose: $('#purpose_input').val(),
                amount: $('#amount_input').val(),
                tenor: $('#tenor_input').val(),
                property: $('#property_input').val(),
                mortgage: $('#mortgage_input').val(),
                receive: true,
	        };
	        $.post(url, data, function (data) {
	            if (data.code == 1) {
		            //alert(data.message);
	            }else{
	            	alert(data.message);
	            }
	        }, 'json');
	    });
	    $('.cont_right_2_form').bootstrapValidator(memberOpts).on('success.form.bv', function (e) {
	        e.preventDefault();
	        $('.cont_right_2_form .next').removeAttr('disabled');
	        $(this).parents('.content_right').fadeOut(function () {
	            $(this).next('.content_right').fadeIn();
	        });
	        setTimeout(function () {
	            $('#idea_form .idea_form_content .content_right_3').addClass('animate');
	            $('body').scrollTop(0);
	        }, 100);
	        //ajax filling member infomation step 2
	        var url = '<?= Yii::app()->createUrl('/website/home/ajaxFillingBorrowerInfomation') ?>';
	        var data = {
        		pre_language: $('#language_input').val(),
                firstname: $('#fstName_input').val(),
                surname: $('#surName_input').val(),
                gender: $('#gender_input').val(),
                hkid: $('#idNum_input').val()+$('#idChk_input').val(),
                birthday: $('#date_input').val(),
                home_tel: $('#tel_input').val(),
                education_level: $('#level_select').val(),
                mobile: $('#mobile_input').val(),
                number_denpdents: $('#depend_select').val(),
                addr_room: $('#address_input').val(),
                addr_area: $('#address_select').val(),
                addr_building: $('#address_building_input').val(),
                ownership: $('#owner_select').val(),
                mortgage: $('#mortgage_input_2').val()
	        };
	        $.post(url, data, function (data) {
	            if (data.code == 1) {
		            //alert(data.message);
	            }else{
	            	alert(data.message);
	            }
	        }, 'json');
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
	      //ajax filling member job infomation step 3
	        var url = '<?= Yii::app()->createUrl('/website/home/ajaxFillingMemberJob') ?>';
	        var data = {
        		company_name: $('#cpy_name').val(),
                self_employed: $('#self_employ').val(),
                year_services: $('#year_service').val(),
                company_tel: $('#cpy_tel').val(),
                industry: $('#industry').val(),
                position: $('#position').val(),
                monthly_income: $('#month_income').val(),
                salary_method: $('#salary_way').val(),
                addr_room: $('#cpy_address').val(),
                addr_area: $('#cpy_address_area').val(),
                addr_building: $('#cpy_address_building').val(),
	        };
	        $.post(url, data, function (data) {
	            if (data.code == 1) {
		            //alert(data.message);
	            }else{
	            	alert(data.message);
	            }
	        }, 'json');
	    });
		$('form').on('error.validator.bv', function(e, data) {
            data.element
                .data('bv.messages')
                .find('.help-block[data-bv-for="' + data.field + '"]').hide()
                .filter('[data-bv-validator="' + data.validator + '"]').show();
        });
	    $('.loan_information_content_1').bootstrapValidator(loanOpts);
	    $('.personal_information_content_1').bootstrapValidator(memberOpts);
	    $('.job_information_content_1').bootstrapValidator(jobOpts);
	    //perferred_language_content_1
	    $('.perferred_language_content_1').bootstrapValidator(memberOpts);

	    if (!navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)) {
		    $('.content_right').niceScroll({
		        cursorcolor: 'transparent',
		        background: 'transparent',
		        cursorwidth: '8px',
		        cursorborder: '0'
		    });
	    }
	    setTimeout(function () {
	        $('#idea_form .idea_form_content .content_left').addClass('start_animate');
	        $('#idea_form .idea_form_content .content_right_1').addClass('start_animate');
	    }, 200);


        $('#idea_form select').selectpicker({
            maxOptions: 1
        });
        $('.cont_right_2_form').bootstrapValidator('updateOption', 'date_input', 'callback', 'callback', chkBirthday);
        $('.cont_right_2_form').bootstrapValidator('updateOption', 'idChk_input', 'callback', 'callback', IdValidFrom2);
        $('.personal_information_content_1').bootstrapValidator('updateOption', 'date_input', 'callback', 'callback', chkBirthday);
        $('img[data-loan_type="' + loanType + '"]').trigger('click');
		$('select[name=purpose_input]').selectpicker('val', '<?= $loan_model->purpose ?>').trigger('change');
		$('select[name=level_select]').selectpicker('val', '<?= $borrower_model->education_level; ?>').trigger('change');
		$('select[name=address_select]').selectpicker('val', '<?= $borrower_model->addr_area; ?>').trigger('change');
		$('select[name=depend_select]').selectpicker('val', '<?php echo $borrower_model->number_denpdents;?>').trigger('change');
		$('select[name=owner_select]').selectpicker('val', '<?php echo $borrower_model->ownership;?>').trigger('change');
		$('select[name=cpy_address_area]').selectpicker('val', '<?php echo $job_model->addr_area;?>').trigger('change');
		$('select[name=industry]').selectpicker('val', '<?php echo $job_model->industry;?>').trigger('change');
		$('select[name=salary_way]').selectpicker('val', '<?php echo $job_model->salary_method;?>').trigger('change');
		$('select[name=self_employ]').selectpicker('val', '<?php echo $job_model->self_employed;?>').trigger('change');
		//trun ?string value? to value
		$('select[name=purpose_input]').selectpicker('val', '<?= $loan_model->purpose ?>').trigger('change');
		$('select[name=level_select]').selectpicker('val', '<?= $borrower_model->education_level; ?>').trigger('change');
		$('select[name=address_select]').selectpicker('val', '<?= $borrower_model->addr_area; ?>').trigger('change');
		$('select[name=depend_select]').selectpicker('val', '<?php echo $borrower_model->number_denpdents;?>').trigger('change');
		$('select[name=owner_select]').selectpicker('val', '<?php echo $borrower_model->ownership;?>').trigger('change');
		$('select[name=cpy_address_area]').selectpicker('val', '<?php echo $job_model->addr_area;?>').trigger('change');
		$('select[name=industry]').selectpicker('val', '<?php echo $job_model->industry;?>').trigger('change');
		$('select[name=salary_way]').selectpicker('val', '<?php echo $job_model->salary_method;?>').trigger('change');
		$('select[name=self_employ]').selectpicker('val', '<?php echo $job_model->self_employed;?>').trigger('change');

    });

    function chkBirthday(value) {
    	if (value == '') { return true;};
        var birthday = new Date(value).getTime();
        var age = new Date('<?= $dateAge ?>').getTime();
        return birthday <= age;
    }

    function uploadFile(){
    	location.href = '<?= Yii::app()->createAbsoluteUrl('/website/member/profile', array('tab' => 'status')) ?>';
    }
</script>
