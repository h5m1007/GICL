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
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/idea_profileinformation.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/jquery.ddslick.min.js', CClientScript::POS_BEGIN);
?>
<div class="idea_profileinformation">
    <div class="wrap">
        <div class="img visible-lg visible-md"><img src="<?= $themeUrl ?>/images/banner_img_c.jpg"/></div>
        <div class="top_banner col-xs-12 col-sm-12 hidden-lg"></div>
        <div class="main_content">
            <div class="contentContaier">
                <div class="padding">
                    <p class="welcome"><?= Yii::t('web', 'WELCOME,{username}', array('{username}' => Yii::app()->user->name)) ?></p>
                    <p class="user"><?= Yii::t('web', 'Member Since {date}', array('{date}' => date('F , Y', strtotime($member->create_time)))) ?></p>
                </div>
                <div class="nav_tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs padding" role="tablist">
                        <li role="presentation" ref="information" class="active">
                            <a href="#information"
                               aria-controls="home" role="tab"
                               data-toggle="tab">Profile information</a></li>
                        <li role="presentation" ref="status">
                            <a href="#status" aria-controls="profile" role="tab" data-toggle="tab">Approval Status</a>
                        </li>
                        <li role="presentation" ref="payment">
                            <a href="#payment" aria-controls="messages" role="tab" data-toggle="tab">Payment
                                Schedule</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="information">
                            <div class="first padding clearfix">
                                <span class="about_frofile">About Profile</span>
                                <span class="edit right">EDIT</span>
                            </div>
                            <div class="edit_content">
                                <div class="email">
                                    <p class="title">Email</p>
                                    <p><?= $member->email ?></p>
                                </div>
                                <div class="pw">
                                    <p class="title">Password</p>
                                    <p class="password"><?php
                                    for ($i=0 ;$i<$member->pw_length;$i++)
									 	echo '*';
                                     ?></p>
                                </div>
                                <div class="last padding">
                                    <p class="title">Residential Address</p>
                                    <p><?= $member->addr_floor ?></p>
                                    <p><?= $member->addr_area ?></p>
                                </div>
                                <div class="phone">
                                    <p class="title">phone</p>
                                    <p><?= $member->mobile ?></p>
                                </div>
                            </div>
                            <div class="edit_content2">
                                <form id="form-profile" enctype="multipart/form-data" method="post">
                                    <div class="email">
                                        <p class="title">Email</p>
                                        <p><?= $member->email ?></p>
                                    </div>
                                    <div class="input_pw clearfix">
                                        <p class="title">Password</p>
                                        <input type="password" name="password"/>
                                        <p class="title">Re-type Password</p>
                                        <input type="password" name="password_repeat"/>
                                    </div>
                                    <div class="residential_address">
                                        <p class="title">Residential Address</p>
                                        <input name="addr_floor" value="<?= $member->addr_floor ?>"/>
                                        <div id="addr_area"></div>
                                    </div>
                                    <div id="addr_proof_box" class="proof_address">
                                        <p class="title">Proof Address</p>
                                        <input type="text" name="addr_proof_filename"/>
                                    </div>
                                    <input type="file" name="fileImage" class="hidden"/>
                                    <div class="phone">
                                        <p class="title">Phone</p>
                                        <input type="text" name="mobile" value="<?= $member->mobile ?>"/>
                                    </div>
                                    <button type="button" class="button up_date" onclick="updateProfile();">UP DATE
                                    </button>
                                    <button type="button" class="button cancel" onclick="cancelProfile();">CANCEL
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!--                        application                      -->

                        <div role="tabpanel" class="tab-pane" id="status">
                            <div class="status_contentContainer">
                                <div class="container">
                                    <?php if ($member->loans): ?>
                                        <?php foreach ($member->loans as $loan): ?>
                                            <?php if ($loan->status != '' && $loan->status != 'filling' && $loan->status !='repaying'): ?>
                                                <div class="application application_first">
                                                    <div class="application_record clearfix">
                                                        <span class="left">Application:<?= $loan->apply_no; ?></span>
                                                        <span
                                                            class="right">Date:<?= date('d M Y', strtotime($loan->create_time)); ?></span>
                                                    </div>
                                                    <ul class="status_content clearfix">
                                                        <li class="left">
                                                            <ul class="description clearfix">
                                                                <li>Loan Amount</li>
                                                                <li>Tenor</li>
                                                                <li>Status</li>
                                                            </ul>
                                                            <ul class="clearfix">
                                                                <li>$<?= number_format($loan->amount) ?></li>
                                                                <li><?= $loan->tenor ?> MONTHS</li>
                                                                <li><?= ucfirst(str_replace('_', ' ', $loan->status)); ?></li>
                                                            </ul>
                                                        </li>
                                                        <?php if ($loan->status == 'pending' || $loan->status == 'wait_approve'): ?>
                                                            <li class="application_edit left">
                                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/uploadFileView/id/<?php echo $loan->id; ?>"><span
                                                                        class="submit_document">Submit Document</span></a>
                                                            </li>
                                                        <?php endif ?>
                                                        <?php if ($loan->status == 'approved'): ?>
                                                            <li class="application_edit left">
                                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/downloadContract/id/<?php echo $loan->id; ?>"
                                                                   target="_blank">
                                                                    <span
                                                                        class="download_contract">Download Contract</span>
                                                                </a>
                                                            </li>
                                                        <?php endif ?>
                                                        <?php if ($loan->status == 'fappr_ok'): ?>
                                                            <li class="application_edit left">
                                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/member/signContract/id/<?php echo $loan->id; ?>">
                                                                    <span class="sign_contract">Sign Contract</span>
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
                                <?php if($loan->status == 'repaying'):?>
                                    <div>
                                        <div class="payment payment_first" data-id="<?= $loan->id ?>">
                                            <div class="payment_record clearfix">
                                                <span class="left">Application: <?= $loan->apply_no ?></span>
                                                <span
                                                    class="right">Due Date: <?= date('d M Y', strtotime($loan->create_time)) ?></span>
                                            </div>
                                            <ul class="status_content clearfix">
                                                <li>
                                                    <ul class="description clearfix">
                                                        <li>Loan Type</li>
                                                        <li>Loan Amount</li>
                                                        <li>Loan Effective date</li>
                                                    </ul>
                                                    <ul class="clearfix">
                                                        <li><?= $loan->type ?></li>
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
    });

    function updateProfile() {
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

    function addFile() {
        $('input[name=fileImage]').trigger('click');
    }
</script>
