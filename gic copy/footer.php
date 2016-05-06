<?php
/**
 * @var string $lang
 * @var Menu[] $links
 */
$value_field = $lang == 'tc' ? 'value_tc' : 'value_en';
$title_field = $lang == 'tc' ? 'title_tc' : 'title_en';
$piece_src = $themeUrl . ($lang == 'tc' ? '/images/piece_tc.jpg' : '/images/piece.jpg');
$info = SiteInfo::getInfo($lang);
?>
<div class="footerContent">
    <div class="upperPart">
        <div class="wrap visible-lg">
            <div id="back_to_top">
                <span class="to_top"><?= Yii::t('web', 'Back to Top'); ?></span>
            </div>
            <div class="main_upperPart clearfix">
                <div class="main_upperPart_left left">
                    <div class="section_top clearfix">
                        <div class="section1 left">
                            <div class="title"><?= Yii::t('web', 'Contact us'); ?></div>
                            <div class="telephone"><span><?= $info['tel']; ?></span></div>
                            <div class="map">
                                <img src="<?= $themeUrl ?>/images/buttom_icon_map.png">
                                <p><?= $info['address'] ?></p>
                            </div>
                        </div>
                        <?php foreach ($links as $key => $link): ?>
                            <?php if ($key == 2) break ?>
                            <div class="section<?= $key + 2 ?> left">
                                <div class="title"><?= $link->$title_field ?></div>
                                <?php foreach ($link->childMenus as $child): ?>
                                    <p>
                                        <a href="<?= $child->getUrl($lang) ?>"<?= $child->new_window ? ' target="_blank"' : '' ?>>
                                            <?= $child->$title_field ?>
                                        </a>
                                    </p>
                                <?php endforeach ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="section-bottom clearfix">
                        <div class="upperPart_icon left">
                            <div class="title"><?= Yii::t('web', 'Find us on'); ?></div>
                            <div class="icon">
                                <a href="<?= $info['facebook'] ?>" target="_blank"><img src="<?= $themeUrl ?>/images/icon_facebook.png"></a>
                                <a href="<?= $info['youtube'] ?>" target="_blank"><img src="<?= $themeUrl ?>/images/icon_youtube.png"></a>
                            </div>
                        </div>
                        <?php foreach ($links as $key => $link): ?>
                            <?php if ($key < 2) continue ?>
                            <?php if ($key == 5) break ?>
                            <div class="section<?= $key ?> left">
                                <div class="title"><?= $link->$title_field ?></div>
                                <?php foreach ($link->childMenus as $child): ?>
                                    <p>
                                        <a href="<?= $child->getUrl($lang) ?>"<?= $child->new_window ? ' target="_blank"' : '' ?>>
                                            <?= $child->$title_field ?>
                                        </a>
                                    </p>
                                <?php endforeach ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="main_upperPart_right right">
                    <img src=<?= $piece_src; ?>>
                    <img class="qrCode" src="<?= $themeUrl ?>/images/qrCode.png">
                    <span class="bottom_btn appDownload"></span>
                    <span class="bottom_btn googlePlay"></span>
                </div>
            </div>
        </div>
        <div class="upperPart_icon hidden-lg">
            <div class="title"><?= Yii::t('web', 'Find us on'); ?></div>
            <div class="icon">
                <a href="<?= $info['facebook'] ?>" target="_blank"><img src="<?= $themeUrl ?>/images/icon_facebook.png"></a>
                <a href="<?= $info['youtube'] ?>" target="_blank"><img src="<?= $themeUrl ?>/images/icon_youtube.png"></a>
            </div>
        </div>
    </div>
    <div class="lowerPart">
        <div class="wrap">
            <div class="main_lowerPart visible-lg">
                <img src="<?= $themeUrl ?>/images/buttom_logo_a.png">
                <img src="<?= $themeUrl ?>/images/buttom_logo_e.png">
                <img src="<?= $themeUrl ?>/images/buttom_logo_c.png">
                <img src="<?= $themeUrl ?>/images/buttom_logo_b.png">
                <img src="<?= $themeUrl ?>/images/buttom_logo_d.png">
                <img src="<?= $themeUrl ?>/images/buttom_logo_f.png">
                <img src="<?= $themeUrl ?>/images/buttom_logo_g.gif" width="8%">
            </div>
            <div class="lowerPart_bottom">
                <p><?= Yii::t('web', 'Copyright 2015 &copy; Global International Credit Limited . All Rights Reserved'); ?></p>
                <p><?= Yii::t('web', 'Money Lenders Licence No. 0061 / 2015'); ?></p>
            </div>
        </div>
    </div>
</div>
