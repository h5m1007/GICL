<?php
/**
 * @var HomeController $this
 * @var StaticContent $model
 */
$lang = Yii::app()->language;
$title_field = $lang == 'tc' ? 'title_tc' : 'title_en';
$content_field = $lang == 'tc' ? 'content_tc' : 'content_en';
$this->pageTitle = 'GICL - ' . $model->$title_field;
?>
<div class="idea_inner_cont">
    <div class="container">
        <div class="cont_title col-sm-12"><?= strtoupper($model->$title_field) ?></div>
        <?= $model->$content_field ?>
    </div>
</div>
