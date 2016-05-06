<?php
/**
 * @var CController $this
 */
$lang = Yii::app()->language;
$themeUrl = Yii::app()->theme->baseUrl;
$sql = "SELECT * FROM menu WHERE pid=0 AND cat=:cat AND is_delete=0 AND status=1 ORDER BY sequence_no ASC";
$links = Menu::model()->with(array('childMenus' => array(
    'on' => 'childMenus.status=1'
)))->findAll(array(
    'condition' => 't.cat=:cat and t.status=1 and t.is_delete=0 and t.pid=0',
    'order' => 't.sequence_no ASC,t.id ASC',
    'params' => array(':cat' => Menu::CAT_SUB),
));
$menus = Menu::model()->with(array('childMenus' => array(
    'on' => 'childMenus.status=1'
)))->findAll(array(
    'condition' => 't.cat=:cat and t.status=1 and t.is_delete=0 and t.pid=0',
    'order' => 't.sequence_no ASC,t.id ASC',
    'params' => array(':cat' => Menu::CAT_MENU),
));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="<?= $themeUrl ?>/css/bootstrap.min.css" rel="Stylesheet" type="text/css"/>
    <link href="<?= $themeUrl ?>/css/ion.rangeSlider.css" rel="Stylesheet" type="text/css"/>
    <link href="<?= $themeUrl ?>/css/ion.rangeSlider.skinFlat.css" rel="Stylesheet" type="text/css"/>
    <link href="<?= $themeUrl ?>/css/font.css" rel="Stylesheet" type="text/css"/>
    <link href="<?= $themeUrl ?>/css/common.css" rel="Stylesheet" type="text/css"/>
    <title><?= CHtml::encode($this->pageTitle) ?></title>
    <script src="<?= $themeUrl ?>/scripts/jquery-1.11.0.min.js"></script>
    <script src="<?= $themeUrl ?>/scripts/bootstrap.min.js"></script>
    <script src="<?= $themeUrl ?>/scripts/jquery.ddslick.min.js"></script>
    <script src="<?= $themeUrl ?>/scripts/ion.rangeSlider.min.js"></script>
    <script src="<?= $themeUrl ?>/scripts/jquery.popupoverlay.js"></script>
    <script>
        $(function () {
            // header
            var ddBasic = [{
                text: "<?= Yii::t('web', 'Global Club') ?>",
                value: 1
            }, {
                text: "<?= Yii::t('web', 'Global Club') ?>",
                value: 2
            }, {
                text: "<?= Yii::t('web', 'Global Club') ?>",
                value: 3
            }, {
                text: "<?= Yii::t('web', 'Global Club') ?>",
                value: 4
            }];
            $('#global_club').ddslick({
                data: ddBasic,
                background: "#84B616",
                color: '#ffffff',
                width: 176,
                selectText: "<?= Yii::t('web', 'Global Club') ?>",
                onSelected: function (data) {
                    console.log(data);
                }
            });

            var dddrop_down = [{
                text: "Service",
                value: 1
            }, {
                text: "Contact Us",
                value: 2
            }];
            $('#drop_down').ddslick({
                data: dddrop_down,
                width: 100,
                background: "transparent",
                selectText: "About GICL",

            });

            $('li.message > img,li.message > span').on('click', function () {
                $('.message_drop_down').toggle();
            });

            $('.to_top').click(function () {
                $('html,body').animate({
                    scrollTop: '0px'
                });
            });
            var currentUrl = location.href;
            $('.main_nav_bar a').each(function () {
                var href = this.href;
                if (href == currentUrl) {
                    $(this).parent().addClass('current');
                }
            });

            $.extend({
                /** 
                 * 数字千分位格式化 
                 * @public 
                 * @param mixed mVal 数值 
                 * @param int iAccuracy 小数位精度(默认为2) 
                 * @return string 
                 */  
                formatMoney:function(mVal, iAccuracy){  
                    var fTmp = 0.00;//临时变量  
                    var iFra = 0;//小数部分  
                    var iInt = 0;//整数部分  
                    var aBuf = new Array(); //输出缓存  
                    var bPositive = true; //保存正负值标记(true:正数)  
                    /** 
                     * 输出定长字符串，不够补0 
                     * <li>闭包函数</li> 
                     * @param int iVal 值 
                     * @param int iLen 输出的长度 
                     */  
                    function funZero(iVal, iLen){  
                        var sTmp = iVal.toString();  
                        var sBuf = new Array();  
                        for(var i=0,iLoop=iLen-sTmp.length; i<iLoop; i++)  
                            sBuf.push('0');  
                        sBuf.push(sTmp);  
                        return sBuf.join('');  
                    };  

                    if (typeof(iAccuracy) === 'undefined')  
                        iAccuracy = 2;  
                    bPositive = (mVal >= 0);//取出正负号  
                    fTmp = (isNaN(fTmp = parseFloat(mVal))) ? 0 : Math.abs(fTmp);//强制转换为绝对值数浮点  
                    //所有内容用正数规则处理  
                    iInt = parseInt(fTmp); //分离整数部分  
                    iFra = parseInt((fTmp - iInt) * Math.pow(10,iAccuracy) + 0.5); //分离小数部分(四舍五入)  

                    do{  
                        aBuf.unshift(funZero(iInt % 1000, 3));  
                    }while((iInt = parseInt(iInt/1000)));  
                    aBuf[0] = parseInt(aBuf[0]).toString();//最高段区去掉前导0  
                    return ((bPositive)?'':'-') + aBuf.join(',') +'.'+ ((0 === iFra)?'00':funZero(iFra, iAccuracy));  
                },  
                /** 
                 * 将千分位格式的数字字符串转换为浮点数 
                 * @public 
                 * @param string sVal 数值字符串 
                 * @return float 
                 */  
                unformatMoney:function(sVal){  
                    var fTmp = parseFloat(sVal.replace(/,/g, ''));  
                    return (isNaN(fTmp) ? 0 : fTmp);  
                },  
            });

            $(".main_upperPart_right .bottom_btn").click(function(){
                $(".qrCode").popup("show");
            });
        });
    </script>
</head>

<body>
<!--header start-->
<div id="header">
    <?= $this->renderPartial('//layouts/header', array(
        'lang' => $lang,
        'themeUrl' => $themeUrl,
        'menus' => $menus,
        'links' => $links,
    )) ?>
</div>
<?= $content ?>
<!--footer start-->
<div id="footer">
    <?= $this->renderPartial('//layouts/footer', array(
        'lang' => $lang,
        'themeUrl' => $themeUrl,
        'links' => $links,
    )) ?>
</div>
</body>
</html>
