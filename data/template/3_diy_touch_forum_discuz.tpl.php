<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');?>
<?php if($_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1) { dheader('Location:portal.php?mod=index');exit;?><?php } include template('common/header'); ?><div id="st-container" class="st-container">
<div class="st-pusher"><?php include template('common/headernav'); ?><script type="text/javascript">
function getvisitclienthref() {
var visitclienthref = '';
if(ios) {
visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
} else if(andriod) {
visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
}
return visitclienthref;
}
</script>

<?php if($_GET['visitclient']) { ?>

<header class="header">
    <div class="nav">
<span>温馨提示</span>
    </div>
</header>

<div class="cl">
<div class="clew_con">
<h2 class="tit">掌上论坛手机客户端</h2>
<p>随时随地上论坛<input class="redirect button" id="visitclientid" type="button" value="点击下载" href="" /></p>
<h2 class="tit">iPhone,Andriod等智能手机</h2>
<p>直接登录手机版，阅读体验更佳<input class="redirect button" type="button" value="访问手机版" href="<?php echo $_GET['visitclient'];?>" /></p>
</div>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
} else {
window.location.href = '<?php echo $_GET['visitclient'];?>';
}
</script>

<?php } else { ?>

<!-- header start -->
<?php if($showvisitclient) { ?>

<div class="visitclienttip vm" style="display:block;">
<a href="javascript:;" id="visitclientid" class="btn_download">立即下载</a>	
<p>
下载新版掌上论坛客户端，尊享多项看帖特权!
</p>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
$('.visitclienttip').css('display', 'block');
}
</script>

<?php } ?>

<!-- header end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_top_mobile'])) echo $_G['setting']['pluginhooks']['index_top_mobile'];?>
<div class="nex_total_all">
<ul>
    	<li>
        	<h5><?php echo $todayposts;?></h5>
            <p>今日</p>
        </li>
        <li>
        	<h5><?php echo $postdata['0'];?></h5>
            <p>昨日</p>
        </li>
        <li>
        	<h5><?php echo $posts;?></h5>
            <p>帖子</p>
        </li>
        <li class="nex_tjlast">
        	<h5><?php echo $_G['cache']['userstats']['totalmembers'];?></h5>
            <p>会员</p>
        </li>
        <div class="clear"></div>
    </ul>
    <?php if($_G['uid']) { ?>
    <div class="nex_dz_termh">
    	<div class="nex_dz_termh_iner">
        	<a class="nex_my_posts" href="forum.php?mod=guide&amp;view=my">我的帖子</a>
    		<?php if(!empty($_G['setting']['search']['forum']['status'])) { ?>
            <a class="nex_reply_posts" href="forum.php?mod=guide&amp;view=new">最新回复</a>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
    
</div>
<?php if(empty($gid) && $announcements) { ?>
<div class="nex_discuz_annocements">
    <div class="nex_discuz_annol"></div>
    <div class="nex_discuz_annor">
        <ul><?php echo $announcements;?></ul>
    </div>
    <script type="text/javascript">
jQuery(".nex_discuz_annor").slide({ mainCell:"ul", effect:"topLoop", vis:1, opp:true, autoPlay:true, delayTime:600 });
</script>
</div>
<?php } ?>

<!-- main forumlist start -->
<div class="wp wm nexbbsbd" id="wp">
<div class="nex_Discuz_forumBOx">
        <?php if(empty($gid) && !empty($forum_favlist)) { ?>
            <?php $forumscount = count($forum_favlist);?>            <?php $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;?>            <?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?>            <div class="bm bmw fl" style="margin-bottom:10px;">
            	<div class="subforumshow nex_subforumshow" href="#sub_forum_<?php echo $cat['fid'];?>">
                	
                    <h2>我收藏的版块</h2>
                    <div class="clear"></div>
                </div>
                <div class="nex_bankuailist">
                   <ul>
                        <?php $favorderid = 0;?>                        <?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { ?>                        <?php if($favforumlist[$favorite['id']]) { ?>
                        <?php $forum=$favforumlist[$favorite[id]];?>                            <?php if($forumcolumns>1) { ?>
                                <?php if($favorderid && ($favorderid % $forumcolumns == 0)) { ?>
                                <?php } ?>
                                <?php } else { ?>
                                <li>
                                    <div class="nex_bk_icon" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                                        
                                        <?php if($forum['icon']) { ?>
                                            <?php echo $forum['icon'];?>
                                        <?php } else { ?>
                                            <img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" />
                                        <?php } ?>
                                    </div>
                                    <div class="nex_bkinfos_bbs">
                                        <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>">
                                            <h3>
                                                <i><?php echo $forum['name'];?></i>
                                            </h3>
                                            <?php if($forum['description']) { ?><p><?php echo $forum['description'];?></p><?php } ?>
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        <?php } ?>
        
        
        <?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?>        <div class="bm bmw fl" style="margin-bottom:10px;">
            <div class="subforumshow nex_subforumshow" href="#sub_forum_<?php echo $cat['fid'];?>">
                <span class="o y">
                    <img src="<?php echo $_G['style']['styleimgdir'];?>/bbs/collapsed_<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>yes<?php } else { ?>no<?php } ?>.png?t">
                </span>
                <h2><?php echo $cat['name'];?></h2>
                <div class="clear"></div>
            </div>
            <div class="nex_BankuaiNames">
                <div id="sub_forum_<?php echo $cat['fid'];?>" class="nex_bankuailist">
                    <ul>
                        <?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { ?>                        <?php $forum=$forumlist[$forumid];?>                        <li>
                            <div class="nex_bk_icon">
                                <?php if($forum['icon']) { ?>
                                    <?php echo $forum['icon'];?>
                                <?php } else { ?>
                                    <img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" />
                                <?php } ?>
                                <?php if($forum['todayposts'] > 0) { ?>
                                <em class="num"><span><?php echo $forum['todayposts'];?></span></em>
                                <?php } ?>
                            </div>
                            <div class="nex_bkinfos_bbs" >
                                <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>">
                                    <h3>
                                        <i><?php echo $forum['name'];?></i>
                                        
                                    </h3>
                                    <p><?php echo $forum['description'];?></p>
                                </a>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <?php } ?>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- main forumlist end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?>
<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.sub_forum').css('display', 'block');
<?php } else { ?>
$('.sub_forum').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
obj.find('img').attr('src', 'template/nex_mdeco_180401/neoconex/bbs/collapsed_yes.png');
} else {
subobj.css('display', 'none');
obj.find('img').attr('src', 'template/nex_mdeco_180401/neoconex/bbs/collapsed_no.png');
}
});
 })();
</script>
<?php } ?>
<div class="nex_fastPOST"><a href="forum.php?mod=misc&amp;action=nav"></a></div><?php include template('common/footer'); ?></div>
</div>