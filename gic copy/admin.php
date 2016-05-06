<?php
/**
 * @var HomeController $this
 * @var Banner $banner
 * @var Video[] $videos
 * @var LoanRate $loanRate
 */
$themeUrl = Yii::app()->theme->baseUrl;
$lang = Yii::app()->language;
//Yii::app()->clientScript->registerScriptFile($themeUrl . '/scripts/index.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerCssFile($themeUrl . '/fancyBox/jquery.fancybox.css');
Yii::app()->clientScript->registerScriptFile($themeUrl . '/fancyBox/jquery.fancybox.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile($themeUrl . '/fancyBox/helpers/jquery.fancybox-media.js', CClientScript::POS_BEGIN);
$image_field = $lang == 'tc' ? 'image_tc' : 'image_en';
$video_field = $lang == 'tc' ? 'video_tc' : 'video_en';

$months = array();
for ($i = $loanRate->min_tenor; $i <= $loanRate->max_tenor; $i++) {
    if ($i % 6 == 0) {
        $months[] = array(
            'text' => $i . ' ' . Yii::t('web', 'months'),
            'value' => $i,
        );
    }
}

?>
<div class="mainContentContainer">
    <?php if ($banner): ?>
        <img class="mainBanner visible-lg"
             src="<?= Yii::getPathOfAlias('root') . '/upload/images/banner/' . $banner->$image_field ?>"/>
    <?php else: ?>
        <img class="mainBanner visible-lg" src="<?= $themeUrl ?>/images/banner_img_a.jpg"/>
    <?php endif ?>
    <div class="sectionContainer">
        <div class="main_content">
            <div class="section section1">
                <img src="<?= $themeUrl ?>/images/index_airpin.png" alt="airpin">
                <p class="msg1"><?= Yii::t('web', 'PERSONAL LOAN') ?></p>
                <p class="msg2"></p>
                <form>
                    <div class="loan">
                        <div class="loan_mask"></div>
                        <div class="loan_content clearfix">
                            <span class="visible-lg"><?= Yii::t('web', 'I want to borrow') ?></span>
                            <div class="loan_amount">
                                <span class="hidden-lg"><?= Yii::t('web', 'I want to borrow') ?></span>
                                <span class="irs_bg_left"></span>
                                <input type="number" id="loan_amount" name="loan_amount"/>
                                <span class="irs_bg_right"></span>
                            </div>
                            <div class="loan_tenor right">
                                <span><?= Yii::t('web', 'over') ?></span>
                                <div id="tenor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="information">
                        <div class="information_mask"></div>
                        <div class="information_content">
                            <ul class="clearfix">
                                <li>
                                    <div class="amount">$<span id='monthly_repayment'></span>
                                        <?= Yii::t('web', 'Monthly repayment') ?>*
                                    </div>
                                    <div>*<?= Yii::t('web', 'Calculated at {rate}% interest monthly', array(
                                            '{rate}' => $loanRate->rate
                                        )) ?></div>
                                </li>
                                <li>
                                    <a href="<?= Yii::app()->createUrl('/home/apply') ?>" class="apply">
                                        <?= Yii::t('web', 'APPLY NOW') ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
                <div class="movie">
                    <div class="movie_top clearfix">
                        <div class="play_movie left">
                            <a class="video_box" href="<?= $videos[0]->$video_field ?>"><span
                                    class="movie_text"><?= Yii::t('web', 'PLAY MOVIE') ?></span></a>
                        </div>
                        <?php foreach ($videos as $key => $video): ?>
                            <?php if ($key > 1) break ?>
                            <div class="video<?= $key + 1 ?> left">
                                <div id="video<?= $key + 1 ?>" height="34">
                                    <a class="video_box" href="<?= $video->$video_field ?>">
                                        <!-- <img width="180px" height="140px"
                                             src="http://img.youtube.com/vi/<?= $video->getVideoId($lang) ?>/default.jpg"/> -->
                                         <?php $image = $lang=='en'?'image_en':'image_tc';?>
                                         <img 
                                         src="<?php echo Yii::app()->request->baseUrl.'/upload/images/video/'.$video->$image;?>"/>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="section section2">
                <div class="titleContainer">
                    <div class="title1"><?= Yii::t('web', 'FEATURE OF AirPin') ?></div>
                    <div class="title2"></div>
                </div>
                <div class="boxContainer">
                    <div class="box box1">
                        <div class="icon"></div>
                        <div class="desc"><?= Yii::t('web', 'A QUICK &amp; TRANSPARENT PROCESS') ?></div>
                    </div>
                    <div class="box box2 flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <div class="icon"></div>
                                <div class="desc"><?= Yii::t('web', 'Fast approvals') ?></div>
                                <div class="details"><?= Yii::t('web', 'Full online application, no more sifting through paperwork.') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box3 flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <div class="icon"></div>
                                <div class="desc"><?= Yii::t('web', 'NO EXTRA CHARGE') ?></div>
                                <div class="details"><?= Yii::t('web', 'Anytime advanced repayment without any extra charges.') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box4 flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <div class="icon"></div>
                                <div class="desc"><?= Yii::t('web', 'LIGHT RATES') ?></div>
                                <div class="details"><?= Yii::t('web', 'We look beyond your credit score to charge some of the lowest rates around.') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section3">
                <div class="titleContainer">
                    <div class="title1"><?= Yii::t('web', 'APPLICATION') ?></div>
                    <div class="title2"><?= Yii::t('web', 'A QUICK &amp;<br/>TRANSPARENT PROCESS') ?></div>
                </div>
                <div class="boxContainer">
                    <div class="box box1">
                        <div class="title1 hidden-lg"><?= Yii::t('web', 'CALCULATE YOU LOAN REPAYMENT') ?></div>
                        <div class="title1 visible-lg"><?= Yii::t('web', 'Calculate') ?></div>
                        <div class="title2 visible-lg"><?= Yii::t('web', 'LOAN<br/>REPAYMENT') ?></div>
                        <div class="desc"><?= Yii::t('web', 'Use our loan calculator to plan your loan and repayment.') ?></div>
                    </div>
                    <div class="box box2">
                        <span class="triangle"></span>
                        <div class="title1 hidden-lg"><?= Yii::t('web', 'APPLY WITH US') ?></div>
                        <div class="title2 visible-lg"><?= Yii::t('web', 'Register') ?></div>
                        <div class="desc"><?= Yii::t('web', 'Simple, Convenient, takes less than 2 minutes.') ?></div>
                    </div>
                    <div class="box box3">
                        <span class="triangle"></span>
                        <div class="title1 hidden-lg"><?= Yii::t('web', 'FUND AS SOON AS TODAY') ?></div>
                        <div class="title1 visible-lg"><?= Yii::t('web', 'Funds') ?></div>
                        <div class="title2 visible-lg"><?= Yii::t('web', 'AS SOON AS TODAY') ?></div>
                        <div class="desc"><?= Yii::t('web', 'Instant accessment results.') ?></div>
                    </div>
                </div>
            </div>
            <!-- <div class="section section4">
                <div class="boxContainer">
                    <div class="box box1">
                        <div class="title1"><?= Yii::t('web', 'Service Videos') ?></div>
                        <div class="title2"><?= Yii::t('web', '2015 GIGL x Smart Mortage') ?></div>
                        <div class="desc_video">
                            <ul class="clearfix">
                                <?php foreach ($videos as $key => $video): ?>
                                    <li<?= $key == 0 ? ' class="current"' : '' ?>
                                        data-target="video_container_<?= $key ?>">
                                        <div>0<?= $key + 1 ?></div>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                            <div class="video_content">
                                <?php foreach ($videos as $key => $video): ?>
                                    <div id="video_container_<?= $key ?>" class="video_container"
                                         style="overflow: hidden;<?= $key == 0 ? '' : 'display:none;' ?>">
                                        <iframe width="100%" height="270"
                                                src="https://www.youtube.com/embed/<?= $video->getVideoId($lang) ?>?rel=0&amp;controls=0&amp;showinfo=0"
                                                frameborder="0" allowfullscreen></iframe>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="box box2 visible-lg">
                        <div class="title1"><?= Yii::t('web', 'Benefits that<br/>meets your needs') ?>
                        </div>
                        <div class="desc_content clearfix">
                            <div class="desc desc_1 left">
                                <h4><?= Yii::t('web', 'Credit Building') ?></h4>
                                <p><?= Yii::t('web', 'On-time payments are reported to major credit bureaus to help you build or improve your credit score.') ?></p>
                            </div>
                            <div class="desc desc_2 left">
                                <h4><?= Yii::t('web', 'Apply at Ease') ?></h4>
                                <p><?= Yii::t('web', 'What you see is what you get, we don\'t charge you any hidden fees to borrow money.') ?></p>
                            </div>
                            <div class="desc desc_3">
                                <h4><?= Yii::t('web', 'Real Customer service') ?></h4>
                                <p><?= Yii::t('web', 'Have a question? We\'re here 7 days a week to give you answers.') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="scroll">
        <img src="<?= $themeUrl ?>/images/scroll_arrows_white.png">
        <p><?= Yii::t('web', 'SCROLL') ?></p>
    </div>
</div>
<script>
    var rate = <?= $loanRate->rate / 100 ?>;
    function resize() {
        setTimeout(function () {
            $('.mainContentContainer .sectionContainer').css({
                'height': ($('.mainBanner').height() + 100) + 'px'
            });
        }, 100);
    }

    $(function () {
        resize();
        $(window).resize(function () {
            resize();
        });
        if (!navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)) {
            $(".sectionContainer").bind('scroll', function () {
                var contentHeight = $('.sectionContainer .main_content').position().top;
                var section2Pos = $('.sectionContainer .section2').position().top;
                if (contentHeight < -200) {
                    $('.section2 .boxContainer').addClass('animate');
                }
                if (contentHeight < -950) {
                    $('.section3 .boxContainer').addClass('animate');
                }
                if (contentHeight < -1800) {
                    $('.section4 .boxContainer').addClass('animate');
                }
            });
        }
        var ddData_loan = <?= json_encode($months) ?>;
        $('#tenor').ddslick({
            data: ddData_loan,
            width: '80%',
            color: '#3c4248',
            background: 'white',
            onSelected: calcMonthPayment
        });
        $('.scroll').click(function () {
            $('.section').each(function () {
                var display = $(this).css('display');
                if (display == 'block') {
                    $(this).slideUp();
                    $(this).next().slideDown();
                    console.log($(this).next('.section').length);
                    if ($(this).next('.section').length === 0) {
                        $('.scroll').css({'display': 'none'});
                    }
                    return false;
                }
            })
        });

        $.fn.focusTextToEnd = function(){
            this.focus();
            var $thisVal = this.val();
            this.val('').val($thisVal);
            return this;
        }

        $('#loan_amount').ionRangeSlider({
            min: <?= $loanRate->min_amount ?>,
            max: <?= $loanRate->max_amount ?>,
            step: 1000,
            prefix: '$',
            prettify_separator: ',',
            onStart:function(data){
                console.log('onStart');
            },
            onChange: function(data){
                var value = data.from;
                var amount = parseFloat($('#loan_amount').val());
                var tenor = parseInt($('#tenor').data('ddslick').selectedData.value);
                console.log($('#tenor').data('ddslick').selectedData.value)
                var monthPayment = $.formatMoney(((amount * rate * tenor + amount) / tenor).toFixed(2)).toLocaleString();
                $('#monthly_repayment').text(monthPayment);
                $('.irs-single').html('<input class="irs-input" type="text" value="$'+value+'"/ >');            
                console.log('onChange');
            },
            onFinish: function(data){
                console.log('onFinish');
                var value = data.from;
                $('.irs-single').html('<input class="irs-input" type="text" value="$'+value+'"/ >');            
                // $('.irs-input').focus();
                $('.irs-input').focusTextToEnd();
                $('.irs-input').focusout(function(){

                    var newValue = $(this).val().replace(/\$/g, '').replace(/\,/g, '');
                    var newNumber;
                    try{
                        newNumber = parseInt(newValue);
                    }catch(err){}

                    if(newNumber != 'NaN' ){
                        
                        changeSlide(newNumber);
                    }
                });
            },
            onUpdate: function(data){
                console.log("Month data already update!");
                calcMonthPayment(data.from) ;
            }
        });

        function changeSlide(value){
            var slider = $("#loan_amount").data("ionRangeSlider");
            if(value <= 400000 & value >= 10000){
                slider.update({
                    from:value
                });
            }
        }

        var slider = $('#loan_amount').data("ionRangeSlider");

        $('#amount_input').change(function(){
            var amount_val = $('#amount_input').val();
            slider.update({
                from: amount_val
            });
        });

        $('.section4 .box1 .desc_video').find('li').click(function () {
            $('.section4 .boxContainer .box1 .desc_video li').removeClass('current');
            $(this).addClass('current');
            var target = $(this).data('target');
            $('.video_container').hide();
            $('#' + target).show();
        });

        $(".sectionContainer").scroll(function () {
            var viewH = $(this).height(), //可见高度
                contentH = $(this).get(0).scrollHeight, //内容高度
                scrollTop = $(this).scrollTop(); //滚动高度
            if (contentH - viewH - scrollTop <= 167) {
                $('.scroll').hide();
            } else {
                $('.scroll').show();
            }
        });

        $('.video_box').fancybox({
            padding: 0,
            closeBtn: false,
            openEffect: 'none',
            closeEffect: 'none',
            helpers: {
                media: {}
            }
        });
        calcMonthPayment();
    });

    function calcMonthPayment(inputAmount) {
        var amount = 10000;
        if(typeof inputAmount == "object" && isNaN(inputAmount)){
            amount  = parseFloat($('#loan_amount').val());
        }else if(!isNaN(inputAmount)){
            amount = inputAmount;
        }
        var tenor = parseInt($('#tenor').data('ddslick').selectedData.value);
        var monthPayment = $.formatMoney(((amount * rate * tenor + amount) / tenor).toFixed(2)).toLocaleString();
        $('#monthly_repayment').text(monthPayment);
    }
</script>