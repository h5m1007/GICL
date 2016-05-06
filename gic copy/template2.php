<?php
/**
 * Template - About Us
 * @var HomeController $this
 * @var Page $model
 */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->getBaseUrl() . '/css/idea_inner_productdetail.css');

$lang = Yii::app()->language;
$title_field = $lang == 'tc' ? 'title_tc' : 'title_en';
$sub_title_field = $lang == 'tc' ? 'sub_title_tc' : 'sub_title_en';
$content_field = $lang == 'tc' ? 'content_tc' : 'content_en';
$content2_field = $lang == 'tc' ? 'content2_tc' : 'content2_en';

$loanRate = LoanRate::model()->findByPk(1);

$months = array();
for ($i = $loanRate->min_tenor; $i <= $loanRate->max_tenor; $i++) {
    if ($i % 6 == 0) {
        $months[] = array(
            'text' => $i . ' ' . Yii::t('web', 'months'),
            'value' => $i,
        );
    }
}

$this->pageTitle = 'GICL - ' . $model->$title_field;
?>
<div id="idea_inner_productdetail">
    <div class="wrap">
        <img src="<?= Yii::app()->baseUrl . $model->image ?>" class="visible-lg" width="50%">
        <div class="main_content clearfix">
            <div class="mobile_banner col-xs-12 col-sm-12"></div>
            <!-- productdetail_left -->
            <div class="productdetail_left col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <div class="text_description">
                    <p class="title1"><?= $model->$title_field ?></p>
                    <P class="title2"><?= $model->$sub_title_field ?></P>
                    <div class="content">
                        <div class="contentContainer">
                            <?= $model->$content_field ?>
                            <div class="productdetail_right">
                                <form class="hidden-lg">
                                    <div class="loan">
                                        <div class="loan_mask"></div>
                                        <div class="loan_content clearfix">
                                            <p class="loan_content_title"><?= Yii::t('web', 'Loan Calculator') ?></p>
                                            <div class="loan_content_left left">
                                                <p class="borrow"><?= Yii::t('web', 'I want to borrow') ?></p>
                                                <div class="loan_amount">
                                                    <span class="irs_bg_left"></span>
                                                    <input type="number" id="mobile_loan_amount" name="mobile_loan_amount" />
                                                    <span class="irs_bg_right"></span>
                                                </div>
                                            </div>
                                            <div class="loan_tenor right">
                                                <p class="over"><?= Yii::t('web', 'over') ?></p>
                                                <div id="mobile_tenor"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information">
                                        <div class="information_mask"></div>
                                        <div class="information_content">
                                            <div class="amount">
                                                $<span
                                                    id='mobile_month_payment'></span> <?= Yii::t('web', 'Monthly repayment') ?>
                                                *<br>
                                                *<?= Yii::t('web', 'Calculated at {rate}% interest monthly', array(
                                                    '{rate}' => $loanRate->rate
                                                )) ?>
                                            </div>
                                            <div class="apply">
                                                <a href="<?= Yii::app()->createUrl('/website/home/apply') ?>"><?= Yii::t('web', 'APPLY NOW') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?= $model->$content2_field ?>
                        </div>
                    </div>
                </div>
                <div class="scroll">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/images/scroll_arrows_green.png">
                    <p>SCROLL</p>
                </div>
            </div>
            <!-- productdetail_right -->
            <div class="productdetail_right col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <form class="visible-lg">
                    <div class="loan">
                        <div class="loan_mask"></div>
                        <div class="loan_content clearfix">
                            <p class="loan_content_title"><?= Yii::t('web', 'Loan Calculator') ?></p>
                            <div class="loan_content_left left">
                                <p class="borrow"><?= Yii::t('web', 'I want to borrow') ?></p>
                                <div class="loan_amount">
                                    <span class="irs_bg_left"></span>
                                    <input type="number" id="loan_amount" name="loan_amount"/>
                                    <span class="irs_bg_right"></span>
                                </div>
                            </div>
                            <div class="loan_tenor right">
                                <p class="over"><?= Yii::t('web', 'over') ?></p>
                                <div id="tenor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="information">
                        <div class="information_mask"></div>
                        <div class="information_content">
                            <div class="amount">
                                $<span id='month_payment'></span> <?= Yii::t('web', 'Monthly repayment') ?>*<br>
                                *<?= Yii::t('web', 'Calculated at {rate}% interest monthly', array(
                                    '{rate}' => $loanRate->rate
                                )) ?>
                            </div>
                            <div class="apply">
                                <a href="<?= Yii::app()->createUrl('/website/home/apply') ?>"><?= Yii::t('web', 'APPLY NOW') ?></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var rate = <?= $loanRate->rate / 100 ?>;
    $(function () {
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

        $.fn.focusTextToEnd = function(){
            this.focus();
            var $thisVal = this.val();
            this.val('').val($thisVal);
            return this;
        }

        $('#mobile_loan_amount').ionRangeSlider({
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
            }
        });

        function changeSlide(value){
            var slider = $("#loan_amount").data("ionRangeSlider");
            if(value <= 400000 & value >= 10000){
                slider.update({
                    from:value
                });
            }
        };

        var ddData_loan = <?= json_encode($months) ?>;
        $('#tenor').ddslick({
            data: ddData_loan,
            width: '95%',
            color: '#3c4248',
            background: 'white',
            onSelected: calcMonthPayment
        });
        $('#mobile_tenor').ddslick({
            data: ddData_loan,
            width: '100%',
            color: '#3c4248',
            background: 'white',
            onSelected: calcMonthPayment
        });
        $(".contentContainer").scroll(function() {
            var viewH = $(this).height(), //可见高度
                contentH = $(this).get(0).scrollHeight, //内容高度
                scrollTop = $(this).scrollTop(); //滚动高度
            if (contentH - viewH - scrollTop <= 0) {
                $('.scroll').hide();
            } else {
                $('.scroll').show();
            }
        });
        calcMonthPayment();
        calcMobileMonthPayment();

        $('.contentContainer').niceScroll({
            cursorcolor: 'transparent',
            background: 'transparent',
            cursorwidth: '8px',
            cursorborder: '0'
        });
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
        $('#month_payment').text(monthPayment);
    }
    function calcMobileMonthPayment() {
        var amount = parseFloat($('#mobile_loan_amount').val());
        var tenor = parseInt($('#mobile_tenor').data('ddslick').selectedData.value);
        var monthPayment = ((amount * rate * tenor + amount ) / tenor).toFixed(2).toLocaleString();
        $('#mobile_month_payment').text(monthPayment);
    }
</script>
