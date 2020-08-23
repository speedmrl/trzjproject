<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
	</div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
    
    <div class="nexfooter">
    	<div class="nexfttop">
        	<div class="w1180">
            	
                <div class="nexfttop_mid">
                	<ul>
                    	<li>
                        	<h5>关于我们</h5>
                            <p><a href="#" target="_blank">公司简介</a></p>
                            <p><a href="#" target="_blank">媒体报道</a></p>
                            <p><a href="#" target="_blank">联系我们</a></p>
                            <p><a href="#" target="_blank">诚聘英才</a></p>
                        </li>
                        <li>
                        	<h5>装修服务</h5>
                            <p><a href="#" target="_blank">免费装修保障金</a></p>
                            <p><a href="#" target="_blank">免费精准报价</a></p>
                            <p><a href="#" target="_blank">免费3套设计方案</a></p>
                            <p><a href="#" target="_blank">在线智能报价</a></p>
                        </li>
                        <li>
                        	<h5>核心业务</h5>
                            <p><a href="#" target="_blank">装修攻略</a></p>
                            <p><a href="#" target="_blank">案例展示</a></p>
                            <p><a href="#" target="_blank">装修效果图</a></p>
                            <p><a href="#" target="_blank">设计师</a></p>
                        </li>
                        <li>
                        	<h5>帮助中心</h5>
                            <p><a href="#" target="_blank">网站帮助</a></p>
                            <p><a href="#" target="_blank">本地商家</a></p>
                            <p><a href="#" target="_blank">商务合作</a></p>
                            <p><a href="#" target="_blank">免责声明</a></p>
                            <p><a href="#" target="_blank">意见反馈</a></p>
                            
                        </li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="nexftcontect">
                	<div class="nexftcontect_top">银川城市人家装饰有限公司</div>
                    <h4><em>咨询电话:</em>0951-3853009</h4>
                   
                    <h5>服务时间：工作日9：00-18：00</h5>
                    <div class="nexftcontectadd">宁夏银川市兴庆区民族南街与宝湖东路交叉口 </div>
                    <div class="nexftcontectemail">邮箱：<?php echo $_G['setting']['adminemail'];?></div>
                </div>
                <div class="nexftcoders">
                	<ul>
                    	<li>
                        	<p>官方微信&rarr;</p>
                            <div class="nexftcodebox">
                            	<em class="nexftline1"></em>
                                <em class="nexftline2"></em>
                                <em class="nexftline3"></em>
                                <em class="nexftline4"></em>
                                <em class="nexftline5"></em>
                                <em class="nexftline6"></em>
                                <em class="nexftline7"></em>
                                <em class="nexftline8"></em>
                                <img src="<?php echo $_G['style']['styleimgdir'];?>/footer/ftcode.png" />
                            </div>
                        </li>
                        <li>
                        	<p>手机触屏版&rarr;</p>
                            <div class="nexftcodebox">
                            	<em class="nexftline1"></em>
                                <em class="nexftline2"></em>
                                <em class="nexftline3"></em>
                                <em class="nexftline4"></em>
                                <em class="nexftline5"></em>
                                <em class="nexftline6"></em>
                                <em class="nexftline7"></em>
                                <em class="nexftline8"></em>
                                <img src="<?php echo $_G['style']['styleimgdir'];?>/footer/ftcode1.png" />
                            </div>
                        </li>
                        
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>	
        </div>
        <div class="nexftbottom">
        	<div class="w1180">
            	<div class="nexftboml">
                	<p>Powered by <a href="http://www.discuz.net" target="_blank">Discuz!</a> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank">Licensed</a><?php } ?>&copy; 2001-2013 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a>银川城市人家装饰有限公司<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?><?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?></p>
                    <p>
<a href="#" target="_blank">增值电信业务经营许可证 宁ICP备14000308号-5</a>
                        <?php if($_G['setting']['icp']) { ?><a href="http://www.miitbeian.gov.cn/" target="_blank">( <?php echo $_G['setting']['icp'];?> )</a><?php } ?>
                        <a href="#" target="_blank">宁ICP备14000308号-5</a>               
                    </p>
                </div>
                <div class="nexftbomr">
                	<a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/footer/gongshang.gif" /></a>
                    <a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/footer/cert.png" /></a>
                    <a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/footer/kxlogo.gif" /></a>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                
            </div>
        </div>
    </div>
    
<div id="ft" style="margin:0;padding:0; height:0;"><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div>
<?php } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop" style="display:none;">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { } ?>
<span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" id="scrolltopa" ><b>返回顶部</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a>
<?php } ?>
</span>
<?php } ?>
</div>


<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } output();?></body>
</html>
