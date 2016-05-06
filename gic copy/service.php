<?php
/**
 * @var HomeController $this
 * @var StaticContent $model
 */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->getBaseUrl() . '/css/idea_inner_Service.css');

$lang = Yii::app()->language;
$title_field = $lang == 'tc' ? 'title_tc' : 'title_en';
$sub_title_field = $lang == 'tc' ? 'sub_title_tc' : 'sub_title_en';
$content_field = $lang == 'tc' ? 'content_tc' : 'content_en';

$loanRate = LoanRate::model()->findByPk(1);
?>
<div class="idea_inner_cont service_page">
    <div class="mobile_poster hidden-lg"></div>
    <div class="container">
        <div class="cont_title col-sm-12"><?= strtoupper($model->$title_field) ?></div>
        <div class="row">
            <div class="cont_left col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h4><?= $model->$sub_title_field ?></h4>
                <?= $model->$content_field ?>
            </div>
            <div class="cont_right col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1">
                <h5><strong><?= Yii::t('web', 'Maxium Loan for Specific Parties') ?></strong></h5>
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul>
                            <li>
                                <a href="##"><img
                                        src="<?= Yii::app()->getBaseUrl(true) ?>/images/representative_doctors.png"
                                        alt=""><?= Yii::t('web', 'Doctors') ?></a>
                            </li>
                            <li>
                                <a href="##"><img
                                        src="<?= Yii::app()->getBaseUrl(true) ?>/images/representative_solicitors.png"
                                        alt=""><?= Yii::t('web', 'Solicitors') ?></a>
                            </li>
                            <li>
                                <a href="##"><img
                                        src="<?= Yii::app()->getBaseUrl(true) ?>/images/representative_teachers.png"
                                        alt=""><?= Yii::t('web', 'Teachers') ?></a>
                            </li>
                            <li>
                                <a href="##"><img
                                        src="<?= Yii::app()->getBaseUrl(true) ?>/images/representative_bank_staff.png"
                                        alt=""><?= Yii::t('web', 'Bank Staff') ?></a>
                            </li>
                        </ul>
                        <div class="loan_cont_bottom">
                            <p>up to HK$<strong><?= number_format($loanRate->max_amount) ?></strong></p>
                            <p><?= $loanRate->min_tenor ?> to <?= $loanRate->max_tenor ?> months</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
