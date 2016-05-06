<?php
/**
 * @var Faq[] $faqs
 * @var HomeController $this
 */
$themeUrl = Yii::app()->theme->getBaseUrl();
Yii::app()->clientScript->registerCssFile($themeUrl . '/css/idea_inner_FAQ.css');
Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/jquery.nicescroll.min.js', CClientScript::POS_BEGIN);

$lang = Yii::app()->language;
$question_field = $lang == 'tc' ? 'question_tc' : 'question_en';
$answer_field = $lang == 'tc' ? 'answer_tc' : 'answer_en';
$i = 1;
?>
<div class="idea_inner_cont faq_page">
    <div class="container-fluid">
        <div class="row">
            <div class="cont_left col-xs-12 col-sm-12 col-md-5 col-lg-5">
            </div>
            <div class="cont_right col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <div class="panel-group" id="accordion">
                    <div class="cont_title"><?= Yii::t('web', 'FAQS') ?></div>
                    <?php foreach ($faqs as $faq): ?>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel_title">
                                    <a href="#collapse<?= $i ?>" data-toggle="collapse" data-parent="#accordion">
                                        <p>Q<?= $i ?></p>
                                        <p><?= $faq->$question_field ?></p>
                                        <span class="arrow_icon"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse<?= $i ?>" class="panel-collapse collapse<?= $i == 1 ? ' in' : '' ?>"
                                 aria-expanded="<?= $i == 1 ? 'true' : 'false' ?>">
                                <div class="panel-body">
                                    <?= $faq->$answer_field ?>
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </div>
                <div class="scroll">
                    <img src="<?= Yii::app()->getBaseUrl(true) ?>/images/scroll_arrows_green.png">
                    <p>SCROLL</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.in').prev().find('p')
        .css('color', '#2995b1').next()
        .addClass('active');

    for (var i = 1; i < 8; i++) {
        $("#collapse" + i).on('show.bs.collapse', function () {
            $(this).prev().find('p').css('color', '#2995b1').next().addClass('active');
        }).on('hide.bs.collapse', function () {
            $(this).prev().find('p').css('color', '#838383').next().removeClass('active');
        });
    }

    $('.panel-group').niceScroll({
        cursorcolor: 'transparent',
        background: 'transparent',
        cursorwidth: '8px',
        cursorborder: '0'
    });

    $(".cont_right").find(".panel-group").scroll(function () {
        var viewH = $(this).height(), //可见高度
            contentH = $(this).get(0).scrollHeight, //内容高度
            scrollTop = $(this).scrollTop(); //滚动高度
        if (contentH - viewH - scrollTop <= 0) {
            $('.scroll').hide();
        } else {
            $('.scroll').show();
        }
    });
</script>
