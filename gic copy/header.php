<?php
function getRelativeTime($date) {
	$diff = time() - strtotime($date);
	if ($diff<60)
		return $diff . " second"  . " ago";
	$diff = round($diff/60);
	if ($diff<60)
		return $diff . " minute"  . " ago";
	$diff = round($diff/60);
	if ($diff<24)
		return $diff . " hour"  . " ago";
	$diff = round($diff/24);
	if ($diff<7)
		return $diff . " day"  . " ago";
	$diff = round($diff/7);
	if ($diff<4)
		return $diff . " week"  . " ago";
	return "on " . date("F j, Y", strtotime($date));
}


/**
 * @var string $lang
 * @var Menu[] $menus
 * @var Menu[] $links
 */
$title_field = $lang == 'tc' ? 'title_tc' : 'title_en';
$member_messages = array();
if(!Yii::app()->user->isGuest){
	$uid = Yii::app()->user->id;
	//get member
	
	//get member message
	$sql = "select * from member_message_ref where is_delete=0 and status=1 and is_read=0 and member_id=$uid;";
	$member_messages = Yii::app()->db->createCommand($sql)->queryAll();
}
$others = Menu::model()->with(array('childMenus' => array(
    'on' => 'childMenus.status=1'
)))->findAll(array(
    'condition' => 't.cat=:cat and t.status=1 and t.is_delete=0 and t.pid=11',
    'order' => 't.sequence_no ASC,t.id ASC',
    'params' => array(':cat' => Menu::CAT_SUB),
));

?>
<div class="headerContent">
    <div class="wrap clearfix visible-md visible-lg">
        <div class="header_top clearfix">
            <div class="headerContent_left left">
                <ul class="nav_bar clearfix">
                    <li>
                        <div class="nav_menu"><?= Yii::t('web', 'MENU') ?></div>
                    </li>
                    <li><span onclick="changeLang('<?= $lang == 'tc' ? 'sc' : 'tc' ?>')"
                              class="nav_bar_language_bg"><?= strtoupper($lang) ?></span>
                    </li>
                    <?php if (!Yii::app()->user->isGuest): ?>
                        <li class="message">
                            <img src="<?= $themeUrl ?>/images/Nav_bar/nav_bar_icon_message.png"
                                 class="nav_bar_icon_message" onclick='updateInboxStatus()'/>
                            <span><?php echo count($member_messages);?></span>
                            <div class="message_drop_down">
                                <div class="arrow"></div>
                                <p class="title"><?= Yii::t('web', 'Notifications') ?></p>
                                <ul class="message_content">
                                <?php foreach ($member_messages as $message):?>
                                    <li class="minu">
                                        <p class="title1"><?php echo $message['message'];?></p>
                                        <p><?php echo getRelativeTime($message['send_datetime']);?></p>
                                    </li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
            <div class="right clearfix">
                <div class="headerContent_middle left">
                    <a href="<?= Yii::app()->homeUrl ?>">
                        <img src="<?= $themeUrl ?>/images/Logo.png">
                    </a>
                </div>
                <div class="headerContent_right right clearfix visible-lg">
                    <div id="global_club" class="global_club left"></div>
                    <?php if (Yii::app()->user->isGuest): ?>
                        <div class="log_on right">
                            <a href="<?= Yii::app()->createUrl('/website/member/login', array('#' => 'reg')) ?>"><span><?= Yii::t('web', 'Register') ?></span></a>
                            <span>/</span>
                            <a href="<?= Yii::app()->createUrl('/website/member/login', array('#' => 'log')) ?>"><span><?= Yii::t('web', 'Login') ?></span></a>
                        </div>
                    <?php else: ?>
                        <div id="log_reg">
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <ul class="main_nav_bar">
                <?php foreach ($menus as $menu): ?>
                    <?php if ($menu->childMenus): ?>
                        <li class="a2">
                            <a href="javascript:void(0);"><?= $menu->$title_field ?><span class="caret"></span></a>
                            <div class="tooltip-arrow"></div>
                            <ul>
                                <?php foreach ($menu->childMenus as $child): ?>
                                    <li>
                                        <a href="<?= $child->getUrl($lang) ?>"<?= $child->new_window ? ' target="_blank"' : '' ?>><?= $child->$title_field ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?= $menu->getUrl($lang) ?>"<?= $menu->new_window ? ' target="_blank"' : '' ?>><?= $menu->$title_field ?></a>
                        </li>
                    <?php endif ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top mobile_navbar wrap clearfix hidden-md hidden-lg"
         role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="mobile_navbar">
                <span class="sr-only">change btn icon</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="header_logo">
                <a href="<?= Yii::app()->homeUrl ?>">
                    <img width="100%" src="<?= $themeUrl ?>/images/mobile_headerLogo.png">
                </a>
            </div>
            <ul class="nav_bar">
                <?php if (!Yii::app()->user->isGuest): ?>
                    <li class="message">
                        <img src="<?= $themeUrl ?>/images/Nav_bar/nav_bar_icon_message.png"
                             class="nav_bar_icon_message" onclick='updateInboxStatus()'/>
                        <span><?php echo count($member_messages);?></span>
                        <div class="message_drop_down">
                            <div class="arrow"></div>
                            <p class="title"><?= Yii::t('web', 'Notifications') ?></p>
                            <ul class="message_content">
                                <?php foreach ($member_messages as $message):?>
                                    <li class="minu">
                                        <p class="title1"><?php echo $message['message'];?></p>
                                        <p><?php echo getRelativeTime($message['send_datetime']);?></p>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="message">
                        <a href="<?= Yii::app()->createUrl('/website/member/login') ?>">
                            <img src="<?= $themeUrl ?>/images/Nav_bar/mobile_header_lock.png" class="nav_bar_icon_message"/>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="mobile_navbar">
            <div class="navbar_collapse_logo">
                <a href="<?= Yii::app()->homeUrl ?>">
                    <img width="100%" src="<?= $themeUrl ?>/images/mobile_headerLogo.png">
                </a>
            </div>
            <ul class="nav navbar-nav main_nav_bar">
            	<?php if(!Yii::app()->user->isGuest):?>
                	<li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
	                       aria-expanded="false"><?= Yii::app()->user->name;?> <span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                    	<li><a href="<?= Yii::app()->createUrl('/website/member/profile'); ?>"><span>Personal Profile</span></a></li>
	                    	<li><a href="<?= Yii::app()->createAbsoluteUrl('/website/member/profile', array('tab' => 'status')); ?>"><span>Approval Status</span></a></li>
	                    	<li><a href="<?= Yii::app()->createAbsoluteUrl('/website/member/profile', array('tab' => 'payment')); ?>"><span>Payment Schedule</span></a></li>
	                    	<li><a href="<?= Yii::app()->createAbsoluteUrl('/website/member/logout'); ?>"><span>Logout</span></a></li>
	                    </ul>
	                </li>
                <?php endif;?>
            	
                 <?php foreach ($menus as $menu): ?>
                    <?php if ($menu->childMenus): ?>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><?= $menu->$title_field ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php foreach ($menu->childMenus as $child): ?>
                                    <li>
                                        <a href="<?= $child->getUrl($lang) ?>"<?= $child->new_window ? ' target="_blank"' : '' ?>><?= $child->$title_field ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?= $menu->getUrl($lang) ?>"<?= $menu->new_window ? ' target="_blank"' : '' ?>><?= $menu->$title_field ?></a>
                        </li>
                    <?php endif ?>
                <?php endforeach ?>
                
                <li class="dropdown">
                    <a href="###" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:changeLang('tc');">中文</a></li>
                        <li><a href="javascript:changeLang('en');">English</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><?= Yii::t('web', 'Others') ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($others as $other): ?>
                            <li><a href="<?= $other->getUrl($lang) ?>"><?= $other->$title_field ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                
                <?php if (Yii::app()->user->isGuest): ?>
                    <li>
                        <a href="<?= Yii::app()->createUrl('/website/member/login') ?>"><span>Login/Register</span></a>
                    </li>
                <?php endif ?>
                
            </ul>
        </div>
    </nav>
</div>
<script>
    var log_reg_info = [{
        text: "Personal Profile",
        value: '<?= Yii::app()->createAbsoluteUrl('/website/member/profile') ?>'
    }, {
        text: "Approval Status",
        value: '<?= Yii::app()->createAbsoluteUrl('/website/member/profile', array('tab' => 'status')) ?>'
    }, {
        text: "Payment Schedule",
        value: '<?= Yii::app()->createAbsoluteUrl('/website/member/profile', array('tab' => 'payment')) ?>'
    }, {
        text: "Logout",
        value: '<?= Yii::app()->createAbsoluteUrl('/website/member/logout') ?>'
    }];
    $('#log_reg').ddslick({
        data: log_reg_info,
        background: "#84B616",
        color: '#fff',
        width: 176,
        selectText: '<?= Yii::app()->user->name ?>',
        onSelected: function (data) {
            location.href = data.selectedData.value;
        }
    });
    $(function () {
        $('button.navbar-toggle').click(function () {
            $('body').toggleClass('out');
            $('nav.navbar-fixed-top').toggleClass('out');
            if ($('body').hasClass('out')) {
                $(this).focus();
            } else {
                $(this).blur();
            }
        });
        var flag = true;
        $(".header_bottom .main_nav_bar li.a2 a").click(function() {
            if (flag) {
                $(this).nextAll('ul').show();
                flag = false;
            } else {
                $(this).nextAll('ul').hide();
                flag = true;
            }
        });
        $(".header_bottom .main_nav_bar li.a2 ul li").hover(function() {
            $(this).css('background-color', '#85b428');
            $(".header_bottom .main_nav_bar li.a2 .tooltip-arrow").css('border-bottom-color', '#85b428');
        }, function() {
            $(this).css('background-color', '#fff');
            $(".header_bottom .main_nav_bar li.a2 .tooltip-arrow").css('border-bottom-color', '#fff');
        });
    });

    $(document).click(function (e) {
        if (!$(e.target).closest('.navbar-collapse, button.navbar-toggle').length && $('body').hasClass('out')) {
            e.preventDefault();
            $('button.navbar-toggle').trigger('click');
        }
    }).keyup(function (e) {
        if (e.keyCode == 27 && $('body').hasClass('out')) {
            $('button.navbar-toggle').trigger('click');
        }
    });
    function changeLang(la) {
        var url = '<?= Yii::app()->createUrl('/website/home/ajaxLang') ?>';
        $.get(url, {lang: la}, function () {
            location.reload();
        });
    }

	//update inbox message status
	function updateInboxStatus(){
		 	var url = '<?= Yii::app()->createUrl('/website/home/ajaxUpateInboxStatus') ?>';
	        var data = {
	        };
	        $.post(url, data, function (data) {
	            if (data.code == 1) {
		            //
	            }else{
	            	alert(data.message);
	            }
	        }, 'json');
	}
    
</script>
