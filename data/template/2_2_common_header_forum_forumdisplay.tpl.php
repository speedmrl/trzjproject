<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./template/nex_deco_180401/common/header.htm', './template/default/common/header_common.htm', 1598111428, '2', './data/template/2_2_common_header_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'common/header_forum_forumdisplay')
|| checktplrefresh('./template/nex_deco_180401/common/header.htm', './template/default/common/header_qmenu.htm', 1598111428, '2', './data/template/2_2_common_header_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'common/header_forum_forumdisplay')
|| checktplrefresh('./template/nex_deco_180401/common/header.htm', './template/nex_deco_180401/common/pubsearchform.htm', 1598111428, '2', './data/template/2_2_common_header_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'common/header_forum_forumdisplay')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2017 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_forum_forumdisplay.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
     <script type="text/javascript" src='<?php echo $_G['style']['styleimgdir'];?>/js/jquery-1.8.3.min.js'></script>
 <script type="text/javascript">
        var jq=jQuery.noConflict();
     </script>
     <script src="<?php echo $_G['style']['styleimgdir'];?>/js/nexactions.min.js" type="text/javascript"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo $_G['style']['styleimgdir'];?>/js/animate.min.css">
     <script>
     var wow = new WOW({boxClass: 'nexactions',});wow.init();
     </script>
     <script src="<?php echo $_G['style']['styleimgdir'];?>/js/jquery.pagnation.js" type="text/javascript"></script>
 <script type="text/javascript" src='<?php echo $_G['style']['styleimgdir'];?>/js/jquery.SuperSlide.2.1.1.js'></script>
     <script type="text/javascript">
 jQuery(function(){
  jQuery('#nexGoToTop').click(function(){jQuery('html,body').animate({scrollTop:jQuery('#nextopsxx').offset().top}, 600);});})
</script>
     <script language="javascript" type="text/javascript">
function killErrors() {
return true;
}
window.onerror = killErrors;
</script>
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { include template('common/header_diynav'); } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
</div>
<?php } if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut">
<span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span>
您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！
<a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a>

</div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
<?php } if(!IS_ROBOT) { if($_G['uid']) { ?>
<ul id="myprompt_menu" class="p_pop" style="display: none;">
<li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news<?php if(empty($_G['member']['newpm'])) { ?>_0<?php } ?>"></em>消息</a></li>

<li><a href="home.php?mod=follow&amp;do=follower"><em class="prompt_follower<?php if(empty($_G['member']['newprompt_num']['follower'])) { ?>_0<?php } ?>"></em>新听众<?php if($_G['member']['newprompt_num']['follower']) { ?>(<?php echo $_G['member']['newprompt_num']['follower'];?>)<?php } ?></a></li>

<?php if($_G['member']['newprompt'] && $_G['member']['newprompt_num']['follow']) { ?>
<li><a href="home.php?mod=follow"><em class="prompt_concern"></em>我关注的(<?php echo $_G['member']['newprompt_num']['follow'];?>)</a></li>
<?php } if($_G['member']['newprompt']) { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { ?><li><a href="home.php?mod=space&amp;do=notice&amp;view=<?php echo $key;?>"><em class="notice_<?php echo $key;?>"></em><?php echo lang('template', 'notice_'.$key); ?>(<span class="rq"><?php echo $val;?></span>)</a></li>
<?php } } if(empty($_G['cookie']['ignore_notice'])) { ?>
<li class="ignore_noticeli"><a href="javascript:;" onClick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="暂不提醒"><em class="ignore_notice"></em></a></li>
<?php } ?>
</ul>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onClick="extstyle('')" title="默认"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onClick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } ?>
            <?php if($_G['uid']) { ?>
<ul id="myitem_menu" class="p_pop" style="display: none;">
<li><a href="forum.php?mod=guide&amp;view=my">帖子</a></li>
<li><a href="home.php?mod=space&amp;do=favorite&amp;view=me">收藏</a></li>
<li><a href="home.php?mod=space&amp;do=friend">好友</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['global_myitem_extra'])) echo $_G['setting']['pluginhooks']['global_myitem_extra'];?>
</ul>
<?php } ?><div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_top'])) echo $_G['setting']['pluginhooks']['global_qmenu_top'];?>
<?php if($_G['uid']) { ?>
<ul class="cl nav"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航
</div>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } if($_G['setting']['showfjump']) { ?><div id="fjump_menu" class="btda"></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_bottom'])) echo $_G['setting']['pluginhooks']['global_qmenu_bottom'];?>
</div><?php } ?><?php echo adshow("headerbanner/wp a_h");?><div id="hd">
        	<div id="nextopsxx"></div>
            <div class="nex_common_top">
            	<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
            	<div class="w1180">
                	<div class="nex_common_top_L">
                    	您好，欢迎来到<em>银川城市人家</em>
                        <?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
                    </div>
                    <div class="nex_common_top_R">
                    	<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?>
                    	<div class="nex_commoniterms">
                        	<ul>
                            	<li><a href="#" target="_blank">我要合作</a></li>
                        		<li><a href="#" target="_blank"><em>我要装修</em></a></li>
                        		<li><a href="#" target="_blank">联系电话<span>0951-3853009</span></a></li>
                                <li class="nex_wbtop_nav_box">
                                	<div class="nex_webnav">网站导航<i></i></div>
                                    <div class="nex_wbtop_nav">
                                    	<div class="nex_wbtop_nav_inter">
                                        	<div class="nex_wbtop_nav_img"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/top_nav_icon1.png"></div>
                                            <h5>装修服务</h5>
                                            <p><a href="#" target="_blank">0元设计免费抢</a></p>
                                            <p><a href="#" target="_blank">免费装修报价</a></p>
                                            <p><a href="#" target="_blank">免费验房</a></p>
                                            <p><a href="#" target="_blank">装修保</a></p>
                                            <p><a href="#" target="_blank">装修贷</a></p>
                                        </div>
                                        <div class="nex_wbtop_nav_inter">
                                        	<div class="nex_wbtop_nav_img"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/top_nav_icon2.png"></div>
                                            <h5>装修案例</h5>
                                            <p><a href="#" target="_blank">效果图库</a></p>
                                            <p><a href="#" target="_blank"> 设计师</a></p>
                                        </div>
                                        <div class="nex_wbtop_nav_inter">
                                        	<div class="nex_wbtop_nav_img"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/top_nav_icon3.png"></div>
                                            <h5>装修公司</h5>
                                            <p><a href="#" target="_blank">装修公司</a></p>
                                            <p><a href="#" target="_blank">优惠活动</a></p>
                                            <p><a href="#" target="_blank">在建工地</a></p>
                                            <p><a href="#" target="_blank">热门新闻</a></p>
                                        </div>
                                        <div class="nex_wbtop_nav_inter">
                                        	<div class="nex_wbtop_nav_img"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/top_nav_icon4.png"></div>
                                            <h5>装修攻略</h5>
                                            <p><a href="#" target="_blank">装修学堂</a></p>
                                            <p><a href="#" target="_blank">装修日记</a></p>
                                            <p><a href="#" target="_blank">装修流程</a></p>
                                            <p><a href="#" target="_blank">装修问答</a></p>
                                        </div>
                                        <div class="nex_wbtop_nav_inter" style="border-right:0;">
                                        	<div class="nex_wbtop_nav_img"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/top_nav_icon5.png"></div>
                                            <h5>更多精彩</h5>
                                            <p><a href="#" target="_blank">业主咨询</a></p>
                                            <p><a href="#" target="_blank">客户合作</a></p>
                                            <p><a href="#" target="_blank">关于我们</a></p>
                                            <p><a href="#" target="_blank">联系我们</a></p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <script type="text/javascript">
jQuery(".nex_wbtop_nav_box").hover(
function(){
jQuery(this).children(".nex_wbtop_nav").show();
},
function(){
jQuery(this).children(".nex_wbtop_nav").hide();
})
</script>
                                </li>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    <?php include template('common/header_userstatus'); ?>                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        	<div class="nexheader">
                <div class="w1180">
                    <div class="nexlogo"><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?>http://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></div>
                    
                    <div class="nexsearch">
                    <?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="designshow" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<div class="nex_scbar">
            	<div class="nex_scbar_type_td"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></div>
<div class="nex_scbartxt"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech /></div>
<div class="nex_scbar_btn"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"></button></div>
                <div class="clear"></div>
        </div>        
</form>
</div>
<div class="scbar_hot_td">
        <?php if($_G['setting']['srchhotkeywords']) { ?>
            <?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { ?>                <?php if($val=trim($val)) { ?>
                    <?php $valenc=rawurlencode($val);?>                    <?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF

                        
EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

                            <a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" class="xi2" sc="1">{$val}</a>
                        
EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

                            <a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">{$val}</a>
                        
EOF;
 } 
$srchhotkeywords[] .= <<<EOF

                    
EOF;
?>
                <?php } ?>
            <?php } ?>
            <?php echo implode('', $srchhotkeywords);; ?>        <?php } ?>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?>                    </div>
                    
                    <div class="nexDL_part">
<div class="nex_ads_topslider">
                            <ul class="nex_top_adspis">
                                <li><a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/slider1.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/slider2.png"/></a></li>
                                <li><a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/slider3.png"/></a></li>
                            </ul>
                            <a class="prev" href="javascript:void(0)"></a>
                            <a class="next" href="javascript:void(0)"></a>
                        </div>
                        <script type="text/javascript">
                            jQuery(".nex_ads_topslider").slide({ mainCell:".nex_top_adspis",effect:"left", autoPlay:true, delayTime:300});
                        </script>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="nex_top_nav">
            	<div class="w1180">
                	<div class="nex_Nav_box">
                    <?php $mnid = getcurrentnav();?>                       <ul>
                        <?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { ?>                            <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } ?>
                        <?php } ?>
                       </ul>
                       <?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
                    	<script src="<?php echo $_G['style']['styleimgdir'];?>/js/nv.js" type="text/javascript"></script>
                    </div>
                    <div class="nex_user_box">
                    	
                    </div>
                    <div class="nex_nav_focus">
                    	<span></span>
                        <div class="nex_nav_focusinter">
                        	<p>送一扫</p>
                            <p>秒变装修达人</p>
                            <div class="nex_nav_focus_ewm"><img src="<?php echo $_G['style']['styleimgdir'];?>/top/ewm.png"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        	<script src="<?php echo $_G['style']['styleimgdir'];?>/js/nv.js" type="text/javascript"></script>
            <!--侧边工具栏-->
            <div class="nexsidetls">
                <div class="nexsidetools">
                    <ul>
                        <li class="nexsd_kf">
                            <div class="nexstout">
                                <img src="<?php echo $_G['style']['styleimgdir'];?>/sidetools/kf.png">
                                <span>联络客服</span>
                            </div>
                            <div class="nexsthds">
                                <div class="nexsthdstops">
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/sidetools/qq.png">
                                    <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_G['setting']['site_qq'];?>&amp;site=qq&amp;menu=yes" target="_blank">点击联系客服</a>
                                    <p>在线时间：9:00-18:00</p>
                                </div>
                                <div class="nexsthdcbtms">
                                    <h5>联系电话</h5>
                                    <p>09513853009</p>
                                    <h4>电子邮件</h4>
                                    <span><?php echo $_G['setting']['adminemail'];?></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="nexstout">
                                <a onClick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/sidetools/gd.png">
                                    <span>发布需求</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="nexstout">
                                <a href="mailto:<?php echo $_G['setting']['adminemail'];?>" target="_blank">
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/sidetools/design.png">
                                    <span>免费设计</span>
                                </a>
                            </div>
                        </li>
                        <li class="nexsd_app">
                        	<a href="#" target="_blank">
                                <div class="nexstout nexstout_app">
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/sidetools/caculate.png">
                                    <span>免费报价</span>
                                </div>
                            </a>
                        </li>
                        <li class="nexsd_wx">
                            <div class="nexstout nexstout_wx">
                                <img src="<?php echo $_G['style']['styleimgdir'];?>/sidetools/wx.png">
                                <span>关注微信</span>
                            </div>
                            <div class="nexsthds nexsthds_weixin">
                                <div class="nexstwxsd">
                                	<img src="<?php echo $_G['style']['styleimgdir'];?>/sidetools/code.png">
                                    <h5>微信扫一扫</h5>
                                    <p>访问星点微信号</p>
                                    <p>轻松装修不叫事</p>
                                    
                                </div>
                            </div>
                        </li>
                        <!--返回顶部-->
                        <li id="scrolltop">
                            <div class="nexstout nexstout_up">
                                <a id="nexGoToTop">
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/sidetools/up.png">
                                    <span>返回顶部</span>
                                </a>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
            <ul class="p_pop h_pop" id="plugin_menu" style="display: none">
            <?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?>                 <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
                 <li><?php echo $module['url'];?></li>
                 <?php } ?>
            <?php } ?>
            </ul>
            <?php } ?>
            <?php echo $_G['setting']['menunavs'];?>
            <div id="mu" class="cl">
            <?php if($_G['setting']['subnavs']) { ?>
                <?php if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { ?>                    <?php if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
                    <ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
                    <?php echo $subnav;?>
                    </ul>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            </div>
            <?php echo adshow("subnavbanner/a_mu");?>        </div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>

<div id="wp" class="wp">
