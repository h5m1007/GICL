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
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/jquery.form.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/bootstrapValidator.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/idea_profileinformation.js', CClientScript::POS_BEGIN);
?>
<div class="idea_profileinformation">
    <div class="wrap">
        <div class="img visible-lg visible-md"><img src="<?= $themeUrl ?>/images/banner_img_c.jpg"/></div>
        <div class="top_banner col-xs-12 col-sm-12 hidden-lg"></div>
        <div class="main_content">
            <div class="contentContaier">
                <div class="padding">
                    <p class="welcome"><?= Yii::t('web', 'WELCOME, {username}', array('{username}' => Yii::app()->user->name)) ?></p>
                    <p class="user"><?= Yii::t('web', 'Member Since {date}', array('{date}' => date('F , Y', strtotime($member->create_time)))) ?></p>
                </div>
                <div class="nav_tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs padding" role="tablist">
                        <li role="presentation" ref="information" class="active">
                            <a href="#information"
                               aria-controls="home" role="tab"
                               data-toggle="tab"><?= Yii::t('web', 'Profile information') ?></a></li>
                        <li role="presentation" ref="status">
                            <a href="#status" aria-controls="profile" role="tab"
                               data-toggle="tab"><?= Yii::t('web', 'Approval Status') ?></a>
                        </li>
                        <li role="presentation" ref="payment">
                            <a href="#payment" aria-controls="messages" role="tab"
                               data-toggle="tab"><?= Yii::t('web', 'Payment Schedule') ?></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="information">
                            <div class="first padding clearfix">
                                <span class="about_frofile"><?= Yii::t('web', 'About Profile') ?></span>
                                <span class="edit right"><?= Yii::t('web', 'EDIT') ?></span>
                            </div>
                            <div class="edit_content">
                                <div class="email">
                                    <p class="title"><?= Yii::t('web', 'Email') ?></p>
                                    <p><?= $member->email ?></p>
                                </div>
                                <div class="pw">
                                    <p class="title"><?= Yii::t('web', 'Password') ?></p>
                                    <p class="password"><?= str_repeat('*', $member->pw_length) ?></p>
                                </div>
                                <div class="last padding">
                                    <p class="title"><?= Yii::t('web', 'Residential Address') ?></p>
                                    <p><?= trim($member->addressProfile,','); ?></p>
                                    <p><?= trim($member->addr_building,','); ?></p>
                                    <p><?= $member->addr_area ?></p>
                                </div>
                                <div class="phone">
                                    <p class="title"><?= Yii::t('web', 'Mobile') ?></p>
                                    <p><?= $member->mobile ?></p>
                                </div>
                            </div>
                            <div class="edit_content2">
                                <form id="form-profile" enctype="multipart/form-data" method="post">
                                    <div class="email">
                                        <p class="title"><?= Yii::t('web', 'Email') ?></p>
                                        <p><?= $member->email ?></p>
                                    </div>
                                    <div class="input_pw clearfix">
                                        <p class="title"><?= Yii::t('web', 'Password') ?></p>
                                        <input type="password" name="password" />
                                        <span id='pass_error' style='display:none;'><font color='red'><?= Yii::t('web', 'Your password must be at least 6 characters in length') ?></font></span>
                                        <p class="title"><?= Yii::t('web', 'Re-type Password') ?></p>
                                        <input type="password" name="password_repeat"/>
                                    </div>
                                    <div class="residential_address">
                                        <p class="title"><?= Yii::t('web', 'Residential Address') ?></p>
                                        <p class="title" style="font-weight: normal;"><?= Yii::t('web', 'Room/Floor/Building') ?></p>
                                        <input name="address" value="<?= trim($member->addressProfile,','); ?>"/>
                                        <span id='address_error' style='display:none;'><font color='red'><?= Yii::t('web', 'Please fill in Room/Floor/Building') ?></font></span>
                                        <p class="title" style="font-weight: normal;"><?= Yii::t('web', 'Street/Estate') ?></p>
                                        <input name="addr_building" value="<?= trim($member->addr_building,','); ?>"/>
                                        <span id='addr_building_error' style='display:none;'><font color='red'><?= Yii::t('web', 'Please fill in Street/Estate') ?></font></span>
                                        <select name="addr_area" class="choose_country">
                                            <option value="">Please select</option>
                                            <?php foreach ($dict['data']->data->district as $dist): ?>
                                                <option
                                                    value="<?= $dist->code ?>"<?= $member->addr_area == $dist->code ? ' selected' : '' ?>>
                                                    <?= $dist->name ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div id="addr_proof_box" class="proof_address">
                                        <p class="title"><?= Yii::t('web', 'Proof Address') ?></p>
                                        <input type="text" name="addr_proof_filename"/>
                                    </div>
                                    <input type="file" name="fileImage" class="hidden"/>
                                    <div class="phone">
                                        <p class="title"><?= Yii::t('web', 'Mobile') ?></p>
                                        <input type="text" name="mobile" value="<?= $member->mobile ?>"/>
                                        <span id='mobile_error' style='display:none;'><font color='red'><?= Yii::t('web', 'Mobile is invalid.') ?></font></span>
                                    </div>
                                    <button type="button" class="button up_date" onclick="updateProfile();"><?= Yii::t('web', 'UPDATE') ?>
                                    </button>
                                    <button type="button" class="button cancel" onclick="cancelProfile();"><?= Yii::t('web', 'CANCEL') ?>
                                    </button>
                                </form>
                            </div>
                            <script>
                                
                            </script>
                        </div>

                        <!--                        application                      -->

                        <div role="tabpanel" class="tab-pane" id="status">
                            <div class="status_contentContainer">
                                <div class="container">
                                    <?php if ($member->loans): ?>
                                        <?php foreach ($member->loans as $loan): ?>
                                            <?php if ($loan->status != '' && $loan->status != 'applying' && $loan->status !='repaying' && $loan->status !='complete'): ?>
                                                <div class="application application_first">
                                                    <div class="application_record clearfix">
                                                        <span class="left"><?= Yii::t('web', 'Application No') ?>:<?= $loan->apply_no; ?></span>
                                                        <span
                                                            class="right"><?= Yii::t('web', 'Date') ?>:<?= date('d M Y', strtotime($loan->create_time)); ?></span>
                                                    </div>
                                                    <ul class="status_content clearfix">
                                                        <li class="left">
                                                            <ul class="description clearfix">
                                                                <li><?= Yii::t('web', 'Loan Amount') ?></li>
                                                                <li><?= Yii::t('web', 'Tenor') ?></li>
                                                                <li><?= Yii::t('web', 'Status') ?></li>
                                                            </ul>
                                                            <ul class="clearfix">
                                                                <li>$<?= number_format($loan->amount) ?></li>
                                                                <li><?= $loan->tenor ?> <?= Yii::t('web', 'MONTHS') ?></li>
                                                                <li><?= Loan::showLoanStatus($loan->status); ?></li>
                                                            </ul>
                                                        </li>
                                                        <?php if ($loan->status == 'pending' || $loan->status == 'wait_approve'): ?>
                                                            <li class="application_edit left">
                                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/uploadFileView/id/<?php echo $loan->id; ?>"><span
                                                                        class="submit_document"><?= Yii::t('web', 'Submit Document') ?></span></a>
                                                            </li>
                                                        <?php endif ?>
                                                        <?php if ($loan->status == 'approved'): ?>
                                                            <li class="application_edit left">
                                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/downloadContract/id/<?php echo $loan->id; ?>"
                                                                   target="_blank">
                                                                    <span
                                                                        class="download_contract"><?= Yii::t('web', 'Download Contract') ?></span>
                                                                </a>
                                                            </li>
                                                        <?php endif ?>
                                                        <?php if ($loan->status == 'fappr_ok'): ?>
                                                            <li class="application_edit left">
                                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/signContract/id/<?php echo $loan->id; ?>">
                                                                    <span class="sign_contract"><?= Yii::t('web', 'Sign Contract') ?></span>
                                                                </a>
                                                            </li>
                                                        <?php endif ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div><p><?= Yii::t('web', 'No Data.') ?></p></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="scroll visible-lg">
                                <img src="<?= $themeUrl ?>/images/scroll_arrows_green.png">
                                <p>SCROLL</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="payment">
                            <div class="payment_content">
                                <?php foreach ($member->loans as $loan): ?>
                                <?php if($loan->status == 'repaying' || $loan->status == 'complete'):?>
                                    <div>
                                        <div class="payment payment_first" data-id="<?= $loan->id ?>">
                                            <div class="payment_record clearfix">
                                                <span class="left"><?= Yii::t('web', 'Application') ?>: <?= $loan->apply_no ?></span>
                                                <span
                                                    class="right"><?= Yii::t('web', 'Due Date') ?>: <?= date('d M Y', strtotime($loan->create_time)) ?></span>
                                            </div>
                                            <ul class="status_content clearfix">
                                                <li>
                                                    <ul class="description clearfix">
                                                        <li><?= Yii::t('web', 'Loan Type') ?></li>
                                                        <li><?= Yii::t('web', 'Loan Amount') ?></li>
                                                        <li><?= Yii::t('web', 'Loan Effective date') ?></li>
                                                    </ul>
                                                    <ul class="clearfix">
                                                        <li><?= $loan->getLoanTypeName($loan->type); ?></li>
                                                        <li>$<?= number_format($loan->amount) ?></li>
                                                        <li><?= $loan->loanDate ?></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endif;?>
                                <?php endforeach ?>
                            </div>
                            <div class="payment_show"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        var tabTarget = '#<?= Yii::app()->request->getParam('tab', 'information') ?>';
        $('.nav_tabs a[href=' + tabTarget + ']').tab('show');

        $('.payment_first').click(function () {
            var id = $(this).data('id');
            showPayment(id);
        });

        $('#addr_proof_box').click(function () {
            addFile();
        });

        $('input[name=fileImage]').change(function () {
            $('input[name=addr_proof_filename]').val($(this).val());
        });

        $("#form-profile input[name=password]").change(function(){
        	if($(this).val().length<6 && $(this).val().length>0){
                $('#pass_error').show();
            }else{
                $('#pass_error').hide();
            }
        });
        $("#form-profile input[name=mobile]").change(function(){
        	var re = /^\d{8}$/;
        	var str = $(this).val();
        	if(str.match(re)){
            	$('#mobile_error').hide();
        	}else{
            	$('#mobile_error').show();
        	}
        });
        $("#form-profile input[name=address]").change(function(){
        	if($(this).val()==''){
                $('#address_error').show();
            }else{
                $('#address_error').hide();
            }
        });
        $("#form-profile input[name=addr_building]").change(function(){
        	if($(this).val()==''){
                $('#addr_building_error').show();
            }else{
                $('#addr_building_error').hide();
            }
        });
        $('#information').niceScroll({
            cursorcolor: 'transparent',
            background: 'transparent',
            cursorwidth: '8px',
            cursorborder: '0'
        });

        $('.status_contentContainer').niceScroll({
            cursorcolor: 'transparent',
            background: 'transparent',
            cursorwidth: '8px',
            cursorborder: '0'
        });
    });

    function updateProfile() {
    	var pass_length = $("#form-profile input[name=password]").val().length;
        var mobile = $("#form-profile input[name=mobile]").val();
        var address = $("#form-profile input[name=address]").val();
        var addr_building = $("#form-profile input[name=addr_building]").val();
        var re = /^\d{8}$/;
        if(pass_length < 6 && pass_length>0){
        	$('#pass_error').show();
        }else{
        	$('#pass_error').hide();
        	if(mobile.match(re)){
        		$('#mobile_error').hide();
        		if(address != ''){
        			$('#address_error').hide();
        			if(addr_building!=''){
        				$('#addr_building_error').hide();
        				var url = '<?= Yii::app()->createUrl('/website/member/ajaxUpdateProfile') ?>';
                        $('#form-profile').ajaxSubmit({
                            url: url,
                            success: function (data) {
                                if (data == 'fail') {
                                    alert('update fail.');
                                } else {
                                    $(".edit_content").html(data);
                                    $("#form-profile input[name=password]").val('');
                                    $("#form-profile input[name=password_repeat]").val('');
                                    $("#form-profile input[name=addr_proof_filename]").val('');
                                    $("#form-profile input[name=fileImage]").val(null);
                                    $('.edit_content').show();
                                    $('.edit_content2').hide();
                                    $('.edit').show();
                                }
                            },
                            dataType: "html"
                        });
        			}else{
        				$('#addr_building_error').show();
        			}
        			
        		}else{
        			$('#address_error').show();
        		}
            	
        	}else{
        		$('#mobile_error').show();
        	}
        }
        
    }

    function cancelProfile() {
        $('.edit_content').show();
        $('.edit_content2').hide();
        $('.edit').show();
    }

    function showPayment(id) {
        var url = '<?= Yii::app()->createUrl('/website/member/ajaxPayment') ?>';
        $.get(url, {id: id}, function (data) {
            $('.payment_content').hide();
            $('.payment_show').html(data);
        }, 'html');
    }

    $('ul.nav-tabs li:last-child').bind('click',function(){
        $('.payment_content').show();
        $('.payment_show').html('');
    })

    function addFile() {
        $('input[name=fileImage]').trigger('click');
    }
</script>
