<?php
/**
 *
 * @var HomeController $this
 */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->getBaseUrl() . '/css/idea_inner_productdetail.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->getBaseUrl() . '/scripts/idea_inner_productdetail.js',CClientScript::POS_BEGIN);
?>
<div id="idea_inner_productdetail">
    <div class="wrap">
        <img src="<?= Yii::app()->theme->baseUrl ?>/images/productdetail_bg.png" class="visible-lg">
        <div class="main_content clearfix">
            <div class="mobile_banner col-xs-12 col-sm-12 hidden-lg"></div>
            <!-- productdetail_left -->
            <div class="productdetail_left col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <div class="text_description">
                    <p class="title1">PERSONAL LOANS FROM GICL</p>
                    <P class="title2">Designed individuals who require
                        <br/>cash for personal use,</P>
                    <div class="content">
                        <div class="contentContainer">
                            <p class="text_description_content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <div class="productdetail_right">
                                <form class="hidden-lg">
                                    <div class="loan">
                                        <div class="loan_mask"></div>
                                        <div class="loan_content clearfix">
                                            <p class="loan_content_title">Loan Calculator</p>
                                            <div class="loan_content_left left">
                                                <p class="borrow">I want to borrow</p>
                                                <div class="loan_amount">
                                                    <span class="irs_bg_left"></span>
                                                    <input type="text" id="mobile_loan_amount" name="mobile_loan_amount" />
                                                    <span class="irs_bg_right"></span>
                                                </div>
                                            </div>
                                            <div class="loan_tenor right">
                                                <p class="over">over</p>
                                                <div id="mobile_tenor"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information">
                                        <div class="information_mask"></div>
                                        <div class="information_content">
                                            <ul class="clearfix">
                                                <li>
                                                    <div class="rate">4.5%</div>
                                                    <div>Representative APR</div>
                                                </li>
                                                <li>
                                                    <div class="amount">$152-164</div>
                                                    <div>Monthly repayment</div>
                                                </li>
                                            </ul>
                                            <div class="apply"><a href="">APPLY NOW</a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="title3">Documents require for loan applications:</p>
                            <div class="title3_text">
                                <span></span><p class="title3_text1">A copy of Hong Kong Idetity Card</p>
                                <span></span><p class="title3_text2">Proof of income issued during the part 3 months</p>
                                <span></span><p class="title3_text3">Proof of address</p>
                                <span></span><p class="title3_text4">Proof of bank account</p>
                            </div>
                            <div class="hotline">
                                <p class="">Application Hotline: 3575 1018</p>
                                <p class="">Whatsapp:9174 1899</p>
                            </div>
                            <p class="text_description_content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                            <p class="loan_content_title">Loan Calculator</p>
                            <div class="loan_content_left left">
                                <p class="borrow">I want to borrow</p>
                                <div class="loan_amount">
                                    <span class="irs_bg_left"></span>
                                    <input type="text" id="loan_amount" name="loan_amount" />
                                    <span class="irs_bg_right"></span>
                                </div>
                            </div>
                            <div class="loan_tenor right">
                                <p class="over">over</p>
                                <div id="tenor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="information">
                        <div class="information_mask"></div>
                        <div class="information_content">
                            <ul class="clearfix">
                                <li>
                                    <div class="rate">4.5%</div>
                                    <div>Representative APR</div>
                                </li>
                                <li>
                                    <div class="amount">$152-164</div>
                                    <div>Monthly repayment</div>
                                </li>
                            </ul>
                            <div class="apply"><a href="idea_form.html?a=5">APPLY NOW</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    activeHeader('a3');
</script>
