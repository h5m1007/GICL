<?php
/**
 * @var MemberController $this
 * @var array $dict
 * @var Member $member
 */
$themeUrl = Yii::app()->theme->baseUrl;
Yii::app()->clientScript->registerCssFile($themeUrl . '/css/webuploader.css');
Yii::app()->clientScript->registerCssFile($themeUrl . '/css/upload.css');
Yii::app()->clientScript->registerCssFile($themeUrl . '/css/2.00_idea_profileinformation.css');
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/jquery.nicescroll.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/webuploader.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/upload.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/idea_profileinformation.js', CClientScript::POS_BEGIN);
?>
<div class="idea_profileinformation">
    <div class="wrap">
        <div class="img visible-lg visible-md"><img src="<?= $themeUrl ?>/images/banner_img_c.jpg"/></div>
        <div class="top_banner col-xs-12 col-sm-12 hidden-lg"></div>
        <div class="main_content">
   
            <div id="sign_contract">
                <div class="section tutorial">
                    <div>
                        <p class="welcome visible-lg"><?= Yii::t('web', 'WELCOME,{username}', array('{username}' => Yii::app()->user->name)) ?></p>
                        <p class="user visible-lg"><?= Yii::t('web', 'Member Since {date}', array('{date}' => date('F , Y', strtotime($member_model->create_time)))) ?></p>
                    </div>
                    <p class="sign_contract"><?= Yii::t('web', 'SIGN CONTRACT') ?></p>
                    <p class="no"><?= Yii::t('web', 'Application No') ?>.<?php echo $loan_model->apply_no;?></p>
                    <p class="title1"><?= Yii::t('web', 'Confirmation of Important Loan Terms') ?></p>
                    <div class="tutorial_content">
                        <p class="agreement">Tutorial Process</p>
                        <P class="notes">IMPORTANT NOTES:</P>
                        <p>1.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer
                            took a
                            galley of type and scrambled it to make a type specimen book. It has survived
                            not only
                            five
                            centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing
                            Lorem
                            Ipsum
                            passages, and more recently with desktop publishing software like Aldus
                            PageMaker
                            including
                            versions of Lorem Ipsum.</p>
                        <p>2.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer
                            took a
                            galley of type and scrambled it to make a type specimen book. It has survived
                            not only
                            five
                            centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing
                            Lorem
                            Ipsum
                            passages, and more recently with desktop publishing software like Aldus
                            PageMaker
                            including
                            versions of Lorem Ipsum.</p>
                        <p>3.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer
                            took a
                            galley of type and scrambled it to make a type specimen book. It has survived
                            not only
                            five
                            centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing
                            Lorem
                            Ipsum
                            passages, and more recently with desktop publishing software like Aldus
                            PageMaker
                            including
                            versions of Lorem Ipsum.</p>
                        <p>4.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer
                            took a
                            galley of type and scrambled it to make a type specimen book. It has survived
                            not only
                            five
                            centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing
                            Lorem
                            Ipsum
                            passages, and more recently with desktop publishing software like Aldus
                            PageMaker
                            including
                            versions of Lorem Ipsum.</p>
                    </div>
                    <div class="button clearfix">
                        <div class="start_now right"><?= Yii::t('web', 'START NOW') ?></div>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/profile?tab=status"><div class="to_back left"><?= Yii::t('web', 'BACK') ?></div></a>
                    </div>
                </div>
                <div class="section section1 agreement1">
                    <div class="clearfix">
                        <p class="sign_contract"><?= Yii::t('web', 'SIGN CONTRACT') ?></p>
                        <p class="no"><?= Yii::t('web', 'Application No') ?>.<?php echo $loan_model->apply_no;?></p>
                    </div>
                    <div class="sign_contract_step">
                        <ul class="clearfix">
                            <li class="active clearfix">
                                <div class="left">
                                    <p class="sequence">1</p>
                                    <p class="p1 current"><?= Yii::t('web', 'Loan Agreement') ?></p>
                                </div>
                                <div class="arrows current left"></div>
                            </li>
                            <li class="clearfix">
                                <div class="left">
                                    <p class="sequence">2</p>
                                    <p class="p1"><?= Yii::t('web', 'Memorandum') ?></p>
                                </div>
                                <div class="arrows left"></div>
                            </li>
                            <li class="clearfix">
                                <div class="left">
                                    <p class="sequence">3</p>
                                    <p class="p1"><?= Yii::t('web', 'Confirmation') ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="clearfix">
                        <p class="conditions left"><?= Yii::t('web', 'Loan Agreement') ?></p>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/downloadContract/id/<?php echo $loan_model->id; ?>"target="_blank">
                       		<p class="download right"><?= Yii::t('web', 'Download') ?></p>
                        </a>
                    </div>
                    <div class="sign_contract_content">
                       <!-- contract -->
                       <?php echo $contract1;?>
                    </div>
                    <a href='<?php echo Yii::app()->request->baseUrl; ?>/member/loanSchedule/loan_id/<?php echo $loan_model->id;?>' target='_black'><div class="schedule"><?= Yii::t('web', 'Loan Amortization Schedule') ?></div></a>
                    <div class="agreement">
                        <div class="verification" onClick="sendMessage()"><?= Yii::t('web', 'SEND VERIFICATION CODES') ?></div>
                    </div>
                    <div class="send_code">
                        <div class="pwContainer">
                            <p><?= Yii::t('web', 'Please input the password you received at your mobile phone to the sign contract.') ?></p>
                            <div class="input">
                                <input type="text" class="in_text1"/>
                                <input id="btnSendCode" class="btnSendCode" type="button" value="RESEND SMS"
                                       onClick="sendMessage()"/>
                            </div>
                        </div>
                        <div class="button clearfix">
                            <div class="btn_back left"><?= Yii::t('web', 'BACK') ?></div>
                            <div class="btn_next right" ><?= Yii::t('web', 'NEXT') ?></div>
                            <input type='hidden' name='contract1' value='contract1'>
                        </div>
                    </div>
                </div>
                <div class="section section2 agreement2">
                    <div class="clearfix">
                        <p class="sign_contract"><?= Yii::t('web', 'SIGN CONTRACT') ?></p>
                        <p class="no"><?= Yii::t('web', 'Application No') ?>.<?php echo $loan_model->apply_no;?></p>
                    </div>
                    <div class="sign_contract_step">
                        <ul class="clearfix">
                            <li class="active clearfix">
                                <div class="left">
                                    <p class="sequence">1</p>
                                    <p class="p1 current"><?= Yii::t('web', 'Loan Agreement') ?></p>
                                </div>
                                <div class="arrows left"></div>
                            </li>
                            <li class="active clearfix">
                                <div class="left">
                                    <p class="sequence">2</p>
                                    <p class="p1 current"><?= Yii::t('web', 'Memorandum') ?></p>
                                </div>
                                <div class="arrows current left"></div>
                            </li>
                            <li class="clearfix">
                                <div class="left">
                                    <p class="sequence">3</p>
                                    <p class="p1"><?= Yii::t('web', 'Confirmation') ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="clearfix">
                        <p class="conditions left"><?= Yii::t('web', 'Memorandum') ?></p>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/downloadContract/contract/contract2/id/<?php echo $loan_model->id; ?>"target="_blank">
	                       	<p class="download right"><?= Yii::t('web', 'Download') ?></p>
	                    </a>
                    </div>
                    <div class="sign_contract_content">
                       <!-- contract2 -->
                       <?php echo $contract2;?>
                    </div>
                    <a href='<?php echo Yii::app()->request->baseUrl; ?>/member/loanSchedule/loan_id/<?php echo $loan_model->id;?>' target='_black'><div class="schedule"><?= Yii::t('web', 'Loan Amortization Schedule') ?></div></a>
                    <div class="agreement">
                        <div class="protocol clearfix"><span class="left"><input
                                    type="checkbox"/></span><span
                                class="left"><?= Yii::t('web', 'I have read and agree to the memorandum') ?></span></div>
                        <div class="verification" onClick="sendMessage2()"><?= Yii::t('web', 'SEND VERIFICATION CODES') ?></div>
                    </div>
                    <div class="send_code">
                        <div class="pwContainer">
                            <p><?= Yii::t('web', 'Please input the password you received at your mobile phone to the sign contract.') ?></p>
                            <div class="input">
                                <input type="text" class="in_text2"/>
                                <input id="btnSendCode2" class="btnSendCode" type="button"
                                       value="<?= Yii::t('web', 'RESEND SMS') ?>"
                                       onClick="sendMessage2()"/>
                            </div>
                        </div>
                        <div class="button clearfix">
                            <div class="btn_back left"><?= Yii::t('web', 'BACK') ?></div>
                            <div class="btn_next right"><?= Yii::t('web', 'NEXT') ?></div>
                            <input type='hidden' name='contract2' value='contract2'>
                        </div>
                    </div>
                </div>
                <div class="section section3">
                    <div class="clearfix">
                        <p class="sign_contract"><?= Yii::t('web', 'SIGN CONTRACT') ?></p>
                        <p class="no"><?= Yii::t('web', 'Application No') ?>.<?php echo $loan_model->apply_no;?></p>
                    </div>
                    <div class="sign_contract_step">
                        <ul class="clearfix">
                            <li class="active clearfix">
                                <div class="left">
                                    <p class="sequence">1</p>
                                    <p class="p1 current"><?= Yii::t('web', 'Loan Agreement') ?></p>
                                </div>
                                <div class="arrows left"></div>
                            </li>
                            <li class="active clearfix">
                                <div class="left">
                                    <p class="sequence">2</p>
                                    <p class="p1 current"><?= Yii::t('web', 'Memorandum') ?></p>
                                </div>
                                <div class="arrows left"></div>
                            </li>
                            <li class="active clearfix">
                                <div class="left">
                                    <p class="sequence">3</p>
                                    <p class="p1 current"><?= Yii::t('web', 'Confirmation') ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <p class="succeed1"><?= Yii::t('web', 'CONGRATULATIONS') ?>,</p>
                    <p class="succeed2"><?= Yii::t('web', 'YOUR CONTRACT IS SIGNED') ?></p>
                    <p class="desc1"><?= Yii::t('web', 'We will send you an SMS once the confirmation is done and the fund is ready to be transferred to your account, please pay attention to your SMS.') ?></p>
                    <p class="desc2"><?= Yii::t('web', 'Thank you.') ?></p>
                    <div class="divider"></div>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/profile?tab=status"><div class="to_main"><?= Yii::t('web', 'BACK TO MAIN') ?></div></a>
                </div>
               
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
    	$('#sign_contract').css('display', 'block');
        var tabTarget = '#<?= Yii::app()->request->getParam('tab', 'information') ?>';
        $('.nav_tabs a[href=' + tabTarget + ']').tab('show');
    });
    var InterValObj; //timer变量，控制时间
    var count = 60; //间隔函数，1秒执行
    var curCount; //当前剩余秒数
    var code = ""; //验证码
    var codeLength = 6; //验证码长度
    function sendMessage() {
        curCount = count;
        var sms = sms;
        var dealType; //验证方式
        var uid = $("#uid").val(); //用户uid
        if ($("#phone").attr("checked") == true) {
            dealType = "phone";
        } else {
            dealType = "email";
        }
        //产生验证码
        for (var i = 0; i < codeLength; i++) {
            code += parseInt(Math.random() * 9).toString();
        }
        //设置button效果，开始计时
        $(".btnSendCode").attr("disabled", "true");
        $(".btnSendCode").val(+curCount + " " + "<?= Yii::t('web', 'RESEND SMS') ?>");
        InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
        //向后台发送处理数据
        $.ajax({
            type: "POST", //用POST方式传输
            dataType: "json", //数据格式:JSON
            url: '<?php echo Yii::app()->request->baseUrl;?>/member/sendPassword', //目标地址  
            data: "type=contract1&loan_id=<?php echo $loan_model->id; ?>",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            },
            success: function (msg) {
                if(msg['code']==0){
                    alert(msg['message']);
                }
            }
        });
    }

    function sendMessage2() {
        curCount = count;
        var dealType; //验证方式
        var uid = $("#uid").val(); //用户uid
        if ($("#phone").attr("checked") == true) {
            dealType = "phone";
        } else {
            dealType = "email";
        }
        //产生验证码
        for (var i = 0; i < codeLength; i++) {
            code += parseInt(Math.random() * 9).toString();
        }
        //设置button效果，开始计时
        $(".btnSendCode").attr("disabled", "true");
        $(".btnSendCode").val(+curCount + " " + "RESEND SMS");
        InterValObj = window.setInterval(SetRemainTime2, 1000); //启动计时器，1秒执行一次
        //向后台发送处理数据
        $.ajax({
            type: "POST", //用POST方式传输
            dataType: "json", //数据格式:JSON
            url: '<?php echo Yii::app()->request->baseUrl;?>/member/sendPassword', //目标地址
            data: "type=contract2&loan_id=<?php echo $loan_model->id; ?>",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            },
            success: function (msg) {
            	if(msg['code']==0){
                    alert(msg['message']);
                }
            }
        });
    }
    //timer处理函数
    function SetRemainTime() {
        if (curCount == 0) {
            window.clearInterval(InterValObj); //停止计时器
            $("#btnSendCode").removeAttr("disabled"); //启用按钮
            $("#btnSendCode").val("<?= Yii::t('web', 'RESEND SMS') ?>");
            code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效
        } else {
            curCount--;
            $("#btnSendCode").val(+curCount + " " + "<?= Yii::t('web', 'RESEND SMS') ?>");
        }
    }
    function SetRemainTime2() {
        if (curCount == 0) {
            window.clearInterval(InterValObj); //停止计时器
            $("#btnSendCode2").removeAttr("disabled"); //启用按钮
            $("#btnSendCode2").val("<?= Yii::t('web', 'RESEND SMS') ?>");
            code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效
        } else {
            curCount--;
            $("#btnSendCode2").val(+curCount + " " + "<?= Yii::t('web', 'RESEND SMS') ?>");
        }
    }
    $('.btn_next').click(function () {
        var obj = $(this);
    	var $input_text = $(this).parents('.button').prev('.pwContainer').find('input[type=text]');
    	var contract = $(this).next('input[type=hidden]').val();
        var password = $input_text.val();
        var url = '<?= Yii::app()->createUrl('/website/member/ajaxCheckPassword') ?>';
        var data = {password:password,contract:contract,loan_id:<?php echo $loan_model->id;?>};
        $.post(url, data, function (msg) {
           if (msg['code']==1) {
               obj.parents('.section').fadeOut(function () {
                	$(this).next('.section').fadeIn();
               });
           } else {
               alert(msg['message']);
           }
        },'json');
    });

</script>
