<?php
/**
 * @var StaticContent $model
 */
$themeUrl = Yii::app()->theme->baseUrl;
$lang = Yii::app()->language;
$title_field = $lang == 'tc' ? 'title_tc' : 'title_en';
$sub_title_field = $lang == 'tc' ? 'sub_title_tc' : 'sub_title_en';
$content_field = $lang == 'tc' ? 'content_tc' : 'content_en';
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/jquery.nicescroll.min.js', CClientScript::POS_BEGIN);
?>
<div class="idea_inner_cont about_page">
    <div class="container-fluid">
        <div class="row">
            <div class="cont_right col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-6 col-lg-push-6">
            </div>
            <div
                class="cont_left col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-2 col-lg-offset-2 col-md-pull-6 col-lg-pull-6">
                <div class="cont_title col-sm-12"><?= $model->$title_field ?></div>
                <h4><?= $model->$sub_title_field ?></h4>
                <div class="content">
                    <?= $model->$content_field ?>
                </div>
                <div class="cont_scroll text-center">
                    <span class="scroll_icon"></span>
                    <p>SCROLL</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.content').find('p').scroll(function() {
        var $scrollTop = $(this).scrollTop();
        var $viewH = $(this).height();
        var $scrollHeight = $(this).get(0).scrollHeight;
        if ($scrollHeight - $scrollTop - $viewH <= 0) {
            $('.cont_scroll').hide();
        } else {
            $('.cont_scroll').show();
        }
    });
    if (!navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)) {
        $('.about_page .content').niceScroll({
            cursorcolor: 'transparent',
            background: 'transparent',
            cursorwidth: '8px',
            cursorborder: '0'
        });
    }
</script>
