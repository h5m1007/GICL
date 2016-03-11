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
                        <p class="document left visible-lg">SUBMIT DOCUMENT</p>
                        <p class="no right visible-lg">Application <?php echo $loan->apply_no;?></p>
                        <p class="document">SUBMIT DOCUMENT</p>
                        <p class="no">Application <?php echo $loan->apply_no;?></p>
                    </div>
                    <p class="title1">please submit the following documents is order to support you application.</p>
                    <p class="title1">If there is any enquiry,please contact:<?php echo $tel->value_en;?>.</p>
                    <div class="submit_update_a_content">
                        <div class="file_content">
                            <div id="wrapper">
                                <div id="container">
                                    <div id="uploader" class="uploader1" ref="HKIDCardCopy">
                                        <div class="upload_title">
                                            <h3>Hong Kong Identity Card Copy</h3>
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
                                            <h3>Proof Of Address</h3>
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
                                            <h3>Proof Of Bank Account</h3>
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
                                            <h3>Proof Of Income Issued During The Past Months</h3>
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
                                <div class="uploadBtn">Start Upload</div>
                            </div>
                            <a href='<?php echo Yii::app()->request->baseUrl;?>/member/profile'><div class="cancel">CANCEL</div></a>
                        </div>
                    </div>
                </div> 
                
            </div>
        </div>
    </div>
    

<script src="<?php echo $themeUrl;?>/scripts/webuploader.min.js"></script>
<script src="<?php echo $themeUrl;?>/scripts/upload.js"></script>
<script>
$(function(){
	$('#submit_update_a').css('display', 'block');
    startDragNDrop('uploader1', 'HKIDCardCopy');
    startDragNDrop('uploader2', 'proofOfAddress');
    startDragNDrop('uploader3', 'proofOfAccount');
    startDragNDrop('uploader4', 'proofOfIncome');
});
</script>
    