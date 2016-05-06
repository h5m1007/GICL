<?php
$themeUrl = Yii::app()->theme->getBaseUrl();
Yii::app()->clientScript->registerCssFile($themeUrl . '/css/idea_loginregister.css');
?>
<div class="idea_inner_cont log_reg_page">
    <div class="container-fluid">
        <div class="row">
            <div class="cont_left col-xs-12 col-sm-12 col-md-5 col-lg-5">
            </div>
            <div class="cont_right col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <!-- log_on popup -->
                <div class="log_reg_cont">
                    <div class="cont_title">
                        <?= Yii::t('web', 'Welcome') ?><br>
                    </div>
                    <p><?= Yii::t('web', 'If you wish to apply for a loan, please register an account.') ?></p>
                    <div class="cont_nav">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#log" data-toggle="tab">
                                    <?= Yii::t('web', 'Login') ?>
                                </a>
                            </li>
                            <li>
                                <a href="#reg" data-toggle="tab">
                                    <?= Yii::t('web', 'Register') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="cont_form">
                        <div class="tab-content" role="form" onsubmit="return false;">
                            <div id="log" class="form-group tab-pane fade in active">
                                <label for="log_email"><?= Yii::t('web', 'Registered Email') ?></label>
                                <input type="email" class="form-control" id="log_email">
                                <label for="log_psw"><?= Yii::t('web', 'Password') ?></label>
                                <input type="password" class="form-control" id="log_psw">
                                <a href="##" class="find_psw"><?= Yii::t('web', 'Forget Password') ?></a>
                                <div class="btn_group">
                                    <button id="b_log"
                                            class="btn btn_next btn-default"><?= Yii::t('web', 'LOGIN') ?></button>
                                    <button id='b_cancel_log'
                                            class="btn btn_back btn-default"><?= Yii::t('web', 'CANCEL') ?></button>
                                </div>
                            </div>
                            <div id="reg" class="form-group tab-pane fade">
                                <label for="log_name"><?= Yii::t('web', 'Login Name') ?></label>
                                <input type="text" class="form-control" id="reg_name">
                                <div><span id='name_error' style='display:none;'><font color='red'><?= Yii::t('web', 'Please fill in Name') ?></font></span></div>
                                <label for="reg_email"><?= Yii::t('web', 'Registered Email') ?></label>
                                <input type="email" class="form-control" id="reg_email">
                                <div><span id='email_error' style='display:none;'><font color='red'><?= Yii::t('web', 'Please enter valid Registered Email') ?></font></span></div>
                                <label for="reg_psw"><?= Yii::t('web', 'Password') ?></label>
                                <input type="password" class="form-control" id="reg_psw">
                                <span class="help-block" id='pass_error' style='display:none;'><font color='red'><?= Yii::t('web', 'Your password must be at least 6 characters in length') ?></font></span>
                                <label for="reg_re_psw"><?= Yii::t('web', 'Re-type Password') ?></label>
                                <input type="password" class="form-control" id="reg_re_psw">
                                <label class="agree">
                                    <?= Yii::t('web', 'I agree to receive news and updates from GIGL. By clicking "REGISTER" you confirm that you have read and accepted our Importance Notice and Personal Data Privacy Notice.') ?>
                                </label>
                                <label class="agree" style="padding-top: 0;"><input type="checkbox" id="reg_receive">
                                    <?= Yii::t('web', 'I do not want to receive news and updates from GICL.') ?></label>
                                <div class="btn_group">
                                    <button id="b_reg"
                                            class="btn btn_next btn-default"><?= Yii::t('web', 'REGISTER') ?></button>
                                    <button id='b_cancel_reg'
                                            class="btn btn_back btn-default"><?= Yii::t('web', 'CANCEL') ?></button>
                                </div>
                            </div>
                            <div class="reg_success hidden">
                                <p><?= Yii::t('web', 'Thank you for registering. Your account has been created, and a verification email has been sent to your registered email address. Please click on the verification link included in your email to activate your account.') ?></p>
                                <p><?= Yii::t('web', 'Important! Your account will not be activated until you verify your email address.') ?></p>
                                <div class="btn_group">
                                    <button class="btn btn_back btn-default" onclick="history.go(0)">
                                        <?= Yii::t('web', 'BACK TO MAIN') ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forget_pw">
                    <p class="title1"><?= Yii::t('web', 'FORGET PASSWORD') ?></p>
                    <p class="title2"><?= Yii::t('web', 'Can\'t log in? Forget your password?') ?></p>
                    <p class="title3"><?= Yii::t('web', 'Enter your email address below and we\'ll send you password reset instructions') ?></p>
                    <p class="title3 title4"><?= Yii::t('web', 'Enter your email address') ?></p>
                    <input type="text" id='forget_email'/>
                    <p id="forget-error" style="color: red;"></p>
                    <p id="forget-success" style="color: green;"></p>
                    <div class="btn_group">
                        <button class="btn btn_send" id='forget_password'><?= Yii::t('web', 'SEND') ?></button>
                        <button class="btn btn_back"><?= Yii::t('web', 'BACK') ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.idea_inner_cont .cont_right').niceScroll({
            cursorcolor: 'transparent',
            background: 'transparent',
            cursorwidth: '8px',
            cursorborder: '0'
        });
        $('.find_psw').click(function () {
            $('.log_reg_cont').fadeOut(function () {
                $('.forget_pw').fadeIn();
            });
        });
        $('.forget_pw .btn_back').click(function () {
            $('.forget_pw').fadeOut(function () {
                $('.log_reg_cont').fadeIn();
            });
        });

        $('#b_cancel_log').click(function () {
            $('#log_email').val('');
            $('#log_psw').val('');
        });
        $('#b_cancel_reg').click(function () {
            $('#reg_email').val('');
            $('#reg_psw').val('');
            $('#reg_re_psw').val('');
        });
        // login
        $('#b_log').click(function () {
            login();
            $('#b_log').unbind("click");
        });

        // register
        $('#b_reg').click(function () {
            register();
        });
        //forget password
        $('#forget_password').click(function () {
            forgetPassword();
        });

        //reg_pass
        $('#reg_psw').change(function(){
            if($(this).val().length<6){
                $('#pass_error').show();
            }else{
                $('#pass_error').hide();
            }
        });

      //reg_name
        $('#reg_name').change(function(){
            if($(this).val()==''){
                $('#name_error').show();
            }else{
                $('#name_error').hide();
            }
        });
      //reg_email
        $('#reg_email').change(function(){
        	var re = /([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/;
        	
            if(!$(this).val().match(re)){
                $('#email_error').show();
            }else{
                $('#email_error').hide();
            }
        });
		
        
    });

    function login() {
        var url = '<?= Yii::app()->createUrl('/website/member/ajaxLogin') ?>';
        var data = {
            email: $('#log_email').val(),
            password: $('#log_psw').val()
        };
        $.post(url, data, function (data) {
            if (data.code == 1) {
                location.href = '<?= Yii::app()->homeUrl ?>';
            } else {
            	$('#b_log').click(function () {
                    login();
                    $('#b_log').unbind("click");
                });
                alert(data.message);
            }
        }, 'json');
    }

    function register() {
    	var re = /([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/;
        var flag = true;
        if($('#reg_name').val() == ''){
        	$('#name_error').show();
        	flag = false;
        }
        if(!$('#reg_email').val().match(re)){
        	$('#email_error').show();
        	flag = false;
        }
        if($('#reg_psw').val().length>=6){
        	 $('#pass_error').hide();
        	 if(flag){
        		 var url = '<?= Yii::app()->createUrl('/website/member/ajaxRegister') ?>';
                 var data = {
                     name: $('#reg_name').val(),
                     email: $('#reg_email').val(),
                     password: $('#reg_psw').val(),
                     password_repeat: $('#reg_re_psw').val(),
                     not_receive: $('#reg_receive')[0].checked
                 };
                 $.post(url, data, function (data) {

                     if (data.code == 1) {
                         showMessage();
                     } else {
                         alert(data.message);
                     }
                 }, 'json');
        	 }
        	
        }else{
        	 $('#pass_error').show();
        }
    }

    function forgetPassword() {
        var url = '<?= Yii::app()->createUrl('/website/member/ajaxForgetPassword') ?>';
        var data = {
            email: $('#forget_email').val()
        };
        $.post(url, data, function (data) {
            if (data.code == 1) {
                $('#forget-error').text('');
                $('#forget-success').text('<?= Yii::t('web', 'Please check Email!') ?>');
            } else {
                $('#forget-success').text('');
                $('#forget-error').text(data.message);
            }
        }, 'json');
    }

    function showMessage() {
        $(".reg_success").removeClass("hidden").addClass("show").prev().hide();
        $(".cont_nav").hide();
        $(".cont_title").text("<?= Yii::t('web', 'THANK YOU FOR YOUR REGISTRATION') ?>");
    }
</script>