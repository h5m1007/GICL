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
// Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/webuploader.min.js', CClientScript::POS_BEGIN);
// Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/upload.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/idea_profileinformation.js', CClientScript::POS_BEGIN);
?>
	<div class="idea_profileinformation">
        <div class="wrap">
            <div class="img visible-lg visible-md"><img src="<?= $themeUrl ?>/images/banner_img_c.jpg" /></div>
            <div class="top_banner col-xs-12 col-sm-12 hidden-lg"></div>
            <div class="main_content">
                
                <div id="submit_update_a">
                    <div class="clearfix">
                        <p class="document visible-lg"><?= Yii::t('web', 'SUBMIT DOCUMENT') ?></p>
                        <p class="no visible-lg"><?= Yii::t('web', 'Application No') ?>. <?php echo $loan->apply_no;?></p>
                        <p class="document hidden-lg"><?= Yii::t('web', 'SUBMIT DOCUMENT') ?></p>
                        <p class="no hidden-lg"><?= Yii::t('web', 'Application No') ?>. <?php echo $loan->apply_no;?></p>
                    </div>
                    <p class="title1"><?= Yii::t('web', 'please submit the following documents is order to support you application.') ?></p>
                    <p class="title1"><?= Yii::t('web', 'If there is any enquiry,please contact:{tel}.', array(
                            '{tel}' => $tel->value_en
                        )) ?></p>
                    <div class="submit_update_a_content">
                        <div class="file_content">
                            <div id="wrapper">
                                <div id="container">
                                    <div id="uploader" class="uploader1" ref="HKIDCardCopy">
                                        <div class="upload_title">
                                            <h3><?= Yii::t('web', 'Photocopy of HKID') ?></h3>
                                            <span class="upload_icon"></span>
                                        </div>
                                        <div class="queueList">
                                            <div id="dndArea" class="placeholder">
                                                <div id="filePicker"></div>
                                            </div>
                                        </div>
                                        <div class="statusBar" style="display:none;">
                                            <div class="btns">
                                                <div id="filePicker2">+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="file_content">
                            <div id="wrapper">
                                <div id="container">
                                    <div id="uploader" class="uploader4" ref="proofOfIncome">
                                        <div class="upload_title">
                                            <h3 style="height:90px;"><?= Yii::t('web', 'Proof of income of the past 3 months. ( e.g. payroll slip / MPF contribution statement / autopay record)') ?></h3>
                                            <span class="upload_icon"></span>
                                        </div>
                                        <div class="queueList">
                                            <div id="dndArea" class="placeholder">
                                                <div id="filePicker"></div>
                                            </div>
                                        </div>
                                        <div class="statusBar" style="display:none;">
                                            <div class="btns">
                                                <div id="filePicker2">+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="file_content">
                            <div id="wrapper">
                                <div id="container">
                                    <div id="uploader" class="uploader2" ref="proofOfAddress">
                                        <div class="upload_title">
                                            <h3><?= Yii::t('web', 'Proof of address from the past 3 months') ?></h3>
                                            <span class="upload_icon"></span>
                                        </div>
                                        <div class="queueList">
                                            <div id="dndArea" class="placeholder">
                                                <div id="filePicker"></div>
                                            </div>
                                        </div>
                                        <div class="statusBar" style="display:none;">
                                            <div class="btns">
                                                <div id="filePicker2">+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="file_content">
                            <div id="wrapper">
                                <div id="container">
                                    <div id="uploader" class="uploader3" ref="proofOfAccount">
                                        <div class="upload_title">
                                            <h3 style="height:90px;"><?= Yii::t('web', 'Bank statement of the past 3 months (with your name and account number)') ?></h3>
                                            <span class="upload_icon"></span>
                                        </div>
                                        <div class="queueList">
                                            <div id="dndArea" class="placeholder">
                                                <div id="filePicker"></div>
                                            </div>
                                        </div>
                                        <div class="statusBar" style="display:none;">
                                            <div class="btns">
                                                <div id="filePicker2">+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <div class="btns submit inactive">
                                <div class="uploadBtn"><?= Yii::t('web', 'Start Upload') ?></div>
                            </div>
                            <a href='<?php echo Yii::app()->request->baseUrl;?>/member/profile'><div class="cancel"><?= Yii::t('web', 'CANCEL') ?></div></a>

                        </div>

                    </div>
                </div> 
                
            </div>
        </div>
    </div>

<script src="<?php echo $themeUrl;?>/scripts/webuploader.min.js"></script>
<script src="<?php echo $themeUrl;?>/scripts/upload.js"></script>
<script>
    var langs = {
        upload_label: '<?= Yii::t('web', 'Drag your files here <span>or click to browse</span>') ?>'
    };
    $(function () {
        $('#submit_update_a').css('display', 'inline-block', langs);
        startDragNDrop('uploader1', 'HKIDCardCopy', langs);
        startDragNDrop('uploader2', 'proofOfAddress', langs);
        startDragNDrop('uploader3', 'proofOfAccount', langs);
        startDragNDrop('uploader4', 'proofOfIncome', langs);

        // $('.submit_update_a_content').niceScroll({
        //     cursorcolor: 'transparent',
        //     background: 'transparent',
        //     cursorwidth: '8px',
        //     cursorborder: '0'
        // });
    });
</script>
    