<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('view_3');
0
|| checktplrefresh('data/diy/./template/nex_deco_180401//portal/view_3.htm', './template/nex_deco_180401/portal/portal_comment.htm', 1598130614, 'diy', './data/template/2_diy_portal_view_3.tpl.php', 'data/diy/./template/nex_deco_180401/', 'portal/view_3')
|| checktplrefresh('data/diy/./template/nex_deco_180401//portal/view_3.htm', './template/default/common/seccheck.htm', 1598130614, 'diy', './data/template/2_diy_portal_view_3.tpl.php', 'data/diy/./template/nex_deco_180401/', 'portal/view_3')
;
block_get('88,83,84,85,86,87');?><?php include template('common/header'); ?><script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(<?php echo $_G['setting']['zoomstatus'];?>), imagemaxwidth = '<?php echo $_G['setting']['imagemaxwidth'];?>', aimgcount = new Array();</script>
<style type="text/css">
.wp, #wp{ width:100%;}
.nex_decorpd_ads{ width:1180px; margin-bottom:20px;}
.nex_decorpd_ads img{ width:1180px;}
.ct2 .mn {border-right:0; float:left; width:852px;}
.ct2 .sd{ overflow:visible; width:300px;}
.nex_neirong_c{width:830px; padding:15px; background:#fff; border:1px solid #eee;}
.nexzxcontents{width:1180px!important; margin:10px auto;}
.nex_acticletop{}
.nex_acticletop h4{ min-height: 38px; line-height: 38px; font-size: 26px; color: #333; font-weight: 400; overflow: hidden;}
.nex_Leftdate{ height:20px; line-height:20px; font-size:14px; color:#999; margin:10px 0;}
.nexzxcontentsums{ padding:15px; background:#f8f8f8; margin-bottom:20px;}
.nexzxcontentsums p{ height: 60px;line-height: 30px; font-size: 12px; color: #999; overflow: hidden;}
/*相关阅读*/
#related_article .bm_c{ padding:0;}
.nex_xgydbox_pd{ margin:20px 0; padding:10px 15px 0 15px; border:1px solid #eee; background:#fff; width:830px;}
.nex_xgydbox_pd h3{ height: 40px; line-height: 40px; border-bottom: 1px solid #eee; margin-bottom: 15px; font-size: 20px; color: #4c4c4c;font-weight: 500; letter-spacing: 1px;}
.nex_threadslists{}
.nex_threadslists li{ margin-bottom:15px; padding-bottom:15px; border-bottom:1px dashed #eee;}
.nex_threadslists li:last-child{ margin-bottom:0; padding-bottom:0; border-bottom:0;}
.nex_toppicfd{ width:160px; height:120px; overflow:hidden; float:left;}
.nex_toppicfd img{ width:160px; height:120px;-webkit-transition:all 0.3s linear;-moz-transition:all 0.3s linear;-o-transition:all 0.3s linear;-ms-transition:all 0.3s linear;transition:all 0.3s linear;}
.nex_threadslists li:hover img{transform: scale(1.1); -moz-transform: scale(1.1); -webkit-transform: scale(1.1); -o-transform: scale(1.1); -ms-transform: scale(1.1); }
.nex_rpingsums{ max-height:50px; line-height:25px; overflow:hidden; font-size:14px; color:#999; margin-bottom:10px;}
.nex_rpingfdf{ float:right; width:650px;}
.nex_rpingfdf h5{ height:25px; line-height:25px; overflow:hidden; margin-bottom:10px;}
.nex_rpingfdf h5 a{ font-size:18px; color:#434343; font-weight:400;}
.nex_rpingfdf h5 a:hover{color:#FF5353}

.nex_rfgtr{ height: 30px;}
.nex_frzuoze{ float:left; font-size: 12px; color: #999; height: 30px; line-height: 30px;padding-left:20px; background:url(./template/nex_deco_180401/neoconex/portal_list_view/admin.png) left center no-repeat;}
.nex_daterf{ float:right;font-size: 12px; color: #999; height: 30px; line-height: 33px; padding-left:20px;background:url(./template/nex_deco_180401/neoconex/portal_list_view/date1.png) left center no-repeat;}




/*作者栏*/
.nex_fabuxinxi{ width:268px; padding:15px; background:#fff url(./template/nex_deco_180401/neoconex/portal_list_view/user_bg.jpg) top center no-repeat;; border:1px solid #eee; margin-bottom:20px; position:relative;}
.nex_fabuxinxi i{ display:block; width:12px; height:20px; background:url(./template/nex_deco_180401/neoconex/portal_list_view/b-trangle.png) center no-repeat; position:absolute; top:88px; left:-12px;}

.bm{ border:0; margin-bottom:0;}
.nex_fbxxtop{}
.nex_fbxxtop a{ display:block; padding-top:10px; }
.nex_tx{width:80px; height:80px; margin:0 auto; padding: 5px; background: #fff; border-radius:100%;}
.nex_tx img{width:80px; height:80px; border-radius:100%;}
.nex_zzm{ text-align:center; height:20px; line-height:20px; margin:10px 0; font-size:16px; color:#333; font-weight:500;}
.nex_fbxxtop a span{ display:block; width:80px; height:20px; margin:0 auto 15px auto; line-height:20px; text-align:center; font-size:12px; color:#fff; border-radius:24px;  background: #FF5353;}
.nex_zztouxian{ display:block; margin:10px auto 15px auto; text-align:center;height:23px; line-height:23px; background:#FF5353; font-size:12px; color:#fff; border-radius:24px; max-width:80px; overflow:hidden;}
.nex_fbxxtop a em{ text-align:center; height:20px; line-height:20px; font-size:12px; color:#333; display:block; margin-bottom:15px;}

.nexfabuxinxi_addnCars{ text-align:center; overflow:hidden; margin-bottom:10px;}
.nexfabuxinxi_addnCars ul{}
.nexfabuxinxi_addnCars ul li { display:inline-block;height:14px; line-height:14px; font-size:12px; color:#999; max-width: 120px;overflow:hidden;text-overflow:ellipsis; white-space:nowrap; }
.nexfabuxinxi_addnCars ul em{ display:inline-block; height:10px; width:1px; margin:3px 5px 0 5px; background:#bbb;}
.nexfabuzinzi_intros{ line-height:22px; font-size:12px; color:#999; max-height:110px; overflow:hidden; min-height:22px; margin-bottom:10px; background:#f6f6f6; padding:10px;}


.nex_fbxxbottom{ padding-top:10px;}
.nex_fbxxbottom span{ text-align:center; font-size:12px; color:#999;  float: left;  width: 33%; display:block;line-height: 24px;}
.nex_fbxxbottom span.nex_sss{ margin-right:-1px;}
.nex_fbxxbottom span.nex_views{ border-left:1px solid #eee; border-right:1px solid #eee; width: 34%;}
.nex_fbxxbottom span.nex_replies{margin-left:-1px;}
.nex_fbxxbottom span.nex_replies a{}
.nex_fbxxbottom span em{ display: block; font-size: 20px; color: #333;  font-weight: 300;}
.nex_xgydbox{ padding:15px; background:#fff; width:268px; border:1px solid #eee; margin-bottom:15px; }

/*上一篇下一篇*/
.nex_updowns{}
.nex_updowns h5{font-size:16px; color:#999; font-weight:400;height:30px; line-height:30px;}
.nex_updowns h5.nexupdowns_up{}
.nex_updowns h5.nexupdowns_down{ margin-top:5px;}
.nex_updowns a{ display:block; height:30px; line-height:30px; font-size:14px; color:#666; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; }
.nex_updowns a:hover{ color:#FF5353}

</style>


<?php if(!empty($_G['setting']['pluginhooks']['view_article_top'])) echo $_G['setting']['pluginhooks']['view_article_top'];?><?php echo adshow("text/wp a_t");?><div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div id="pt" class="bm cl">
<div class="w1180">
        <div class="z">
            <a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
            <a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em>
            <?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?>                <a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em>
            <?php } ?>
            <a href="<?php echo getportalcategoryurl($cat['catid']); ?>"><?php echo $cat['catname'];?></a> <em>&rsaquo;</em>
            查看内容
        </div>
    </div>
</div>
<div id="ct" class="ct2 wp cl nexzxcontents">
    <div class="nex_decorpd_ads"><!--[diy=nexzxcontents]--><div id="nexzxcontents" class="area"><div id="frameDDAaXp" class="frame move-span cl frame-1"><div id="frameDDAaXp_left" class="column frame-1-c"><div id="frameDDAaXp_left_temp" class="move-span temp"></div><?php block_display('88');?></div></div></div><!--[/diy]--></a></div>
    	<div class="mn">
        	<div class="nex_neirong_c">
                <div class="nex_acticletop">
                    <h4><?php echo $article['title'];?> <?php if($article['status'] == 1) { ?>(待审核)<?php } elseif($article['status'] == 2) { ?>(已忽略)<?php } ?></h4>
                    <div class="nex_Leftdate"><?php echo $article['dateline'];?></div>
                </div>
                <div class="nexmanagerart">
                    <span class="nex_edit"><?php if($article['author']) { ?>原作者: <?php echo $article['author'];?><?php } ?>
                            <?php if($article['from']) { ?>来自: <?php if($article['fromurl']) { ?><a href="<?php echo $article['fromurl'];?>" target="_blank"><?php echo $article['from'];?></a><?php } else { ?><?php echo $article['from'];?><?php } } ?>
                            <?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
                            <a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $article['aid'];?>">编辑</a>
                         </span>
                         <span class="nex_delete">
                            <?php if($article['status']>0 && ($_G['group']['allowmanagearticle'] || $categoryperm[$value['catid']]['allowmanage'])) { ?>
                            <a href="portal.php?mod=portalcp&amp;ac=article&amp;op=verify&amp;aid=<?php echo $article['aid'];?>" id="article_verify_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">审核</a>
                                <?php } else { ?>
                                    <a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $article['aid'];?>" id="article_delete_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a>
                                <?php } ?>
                            <?php } ?>
                            <?php if(!empty($_G['setting']['pluginhooks']['view_article_subtitle'])) echo $_G['setting']['pluginhooks']['view_article_subtitle'];?>
                         </span>
                         <span class="nex_shoucang"><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=article&amp;id=<?php echo $article['aid'];?>&amp;handlekey=favoritearticlehk_<?php echo $article['aid'];?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);">收藏</a></span>
                        <?php if(helper_access::check_module('share')) { ?>
                        <span class="nex_fenxianga"><a href="home.php?mod=spacecp&amp;ac=share&amp;type=article&amp;id=<?php echo $article['aid'];?>&amp;handlekey=sharearticlehk_<?php echo $article['aid'];?>" id="a_share" onclick="showWindow(this.id, this.href, 'get', 0);">分享</a></span>
                        <?php } ?>
                        <span class="nex_yaoqing"><a href="misc.php?mod=invite&amp;action=article&amp;id=<?php echo $article['aid'];?>" id="a_invite" onclick="showWindow('invite', this.href, 'get', 0);">邀请</a></span>
                        <?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
                        <span class="nex_adds"><a id="related_article" href="portal.php?mod=portalcp&amp;ac=related&amp;aid=<?php echo $article['aid'];?>&amp;catid=<?php echo $article['catid'];?>&amp;update=1" onclick="showWindow(this.id, this.href, 'get', 0);return false;">添加相关文章</a></span>
                        
                        <?php } ?>
                        <?php if($article['status']==0 && ($_G['group']['allowdiy']  || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 5) || getstatus($_G['member']['allowadmincp'], 6))) { ?>
                        <span class="nex_pushed"><a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=recommend&amp;idtype=aid&amp;id=<?php echo $article['aid'];?>" onclick="showWindow('recommend', this.href, 'get', 0)">模块推送</a></span>
                        <?php } ?>
                </div>
                <?php if($article['summary'] && empty($cat['notshowarticlesummay'])) { ?>
                <div class="nexzxcontentsums">
                    <p><?php echo $article['summary'];?></p>
                </div>
                <?php if(!empty($_G['setting']['pluginhooks']['view_article_summary'])) echo $_G['setting']['pluginhooks']['view_article_summary'];?>
                <?php } ?>
                <div class="bm vw">
                  <div class="d"> 
                    <table cellpadding="0" cellspacing="0" class="vwtb">
                      <tr>
                        <td id="article_content"><?php echo adshow("article/a_af/1");?> 
                          <?php if($content['title']) { ?>
                          
                          <div class="vm_pagetitle xw1"><?php echo $content['title'];?></div>
                          
                          <?php } ?> 
                          <?php echo $content['content'];?> </td>
                      </tr>
                    </table>
                    <?php if(!empty($_G['setting']['pluginhooks']['view_article_content'])) echo $_G['setting']['pluginhooks']['view_article_content'];?> 
                    <?php if($multi) { ?>
                    <div class="ptw pbw cl"><?php echo $multi;?></div>
                    <?php } ?>
                    
                    <div class="o cl ptm pbm"> 
                      <?php if(!empty($_G['setting']['pluginhooks']['view_article_op_extra'])) echo $_G['setting']['pluginhooks']['view_article_op_extra'];?> 
                    <script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
                    <div id="click_div"> 
                      <?php include template('home/space_click'); ?> 
                    </div>
                    
                    <?php if(!empty($contents)) { ?>
                    <div id="inner_nav" class="ptn xs1">
                      <h3>本文导航</h3>
                      <ul class="xl xl2 cl">
                        <?php if(is_array($contents)) foreach($contents as $key => $value) { ?> 
                        <?php $curpage = $key+1;?> 
                        <?php $inner_view_url = helper_page::mpurl($viewurl, 'page=', $curpage);?>                        <li>&bull; <a href="<?php echo $inner_view_url;?>"<?php if($key === $start) { ?> class="xi1"<?php } ?>>第 <?php echo $curpage;?> 页 <?php echo $value['title'];?></a></li>
                        <?php } ?>
                      </ul>
                    </div>
                    <?php } ?> 
                    
                    <!--[diy=diycontentclickbottom]--><div id="diycontentclickbottom" class="area"></div><!--[/diy]--> 
                    
                  </div>
                  <?php if(!empty($aimgs[$content['pid']])) { ?> 
                  <script type="text/javascript" reload="1">aimgcount[<?php echo $content['pid'];?>] = [<?php echo implode(',', $aimgs[$content['pid']]);; ?>];attachimgshow(<?php echo $content['pid'];?>);</script> 
                  <?php } ?> 
                  
                  <?php if(!empty($_G['setting']['pluginhooks']['view_share_method'])) { ?>
                  <div class="tshare cl"> <strong>!viewthread_share_to!:</strong> 
                    <?php if(!empty($_G['setting']['pluginhooks']['view_share_method'])) echo $_G['setting']['pluginhooks']['view_share_method'];?> 
                  </div>
                  <?php } ?> 
                  
                </div>
                <?php echo adshow("article/mbm hm/2");?><?php echo adshow("article/mbm hm/3");?> 
                <?php if($article['allowcomment']==1) { ?> 
                <?php $data = &$article?> 
                <div id="comment" class="bm">
  <div class="nex_artcomment"> 
    <em class="y">该文章已有<span><?php echo $data['commentnum'];?></span>人参与评论</em>
    <h3>请发表评论</h3>
    
  </div>
  <div id="comment_ul"> 
    
    <?php if(!empty($pricount)) { ?>
    <p class="mtn mbn y">提示：本页有 <?php echo $pricount;?> 个评论因未通过审核而被隐藏</p>
    <?php } ?> 
    
    <?php if(!$data['htmlmade']) { ?>
    
    
    
    <form id="cform" name="cform" action="<?php echo $form_url;?>" method="post" autocomplete="off">
        <div class="tedt" id="tedt">
            <div class="area">
                <textarea name="message" rows="3" class="pt" id="message"  <?php if(!$_G['uid']) { ?> placeholder="立即登录发表您的看法吧^0^"<?php } ?> onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></textarea>
            </div>
        </div>
        <div class="nexpostreplys">
        <?php if($secqaacheck || $seccodecheck) { ?>
            <?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
            <div class="mtm z"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
        <?php } ?>
        <?php if(!empty($topicid) ) { ?>
            <input type="hidden" name="referer" value="<?php echo $topicurl;?>#comment" />
            <input type="hidden" name="topicid" value="<?php echo $topicid;?>">
        <?php } else { ?>
            <input type="hidden" name="portal_referer" value="<?php echo $viewurl;?>#comment">
            <input type="hidden" name="referer" value="<?php echo $viewurl;?>#comment" />
            <input type="hidden" name="id" value="<?php echo $data['id'];?>" />
            <input type="hidden" name="idtype" value="<?php echo $data['idtype'];?>" />
            <input type="hidden" name="aid" value="<?php echo $aid;?>">
        <?php } ?>
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
        <input type="hidden" name="replysubmit" value="true">
        <input type="hidden" name="commentsubmit" value="true" />
        <p class="pt10 cl y"><button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="pn y">评论</button></p>
        </div>
    </form>
    <script type="text/javascript">
    jQuery(function(){
    jQuery("#tedt .pt").focus(function(){
          jQuery(this).addClass("bgchange");
    }).blur(function(){
          jQuery(this).removeClass("bgchange");
    });
    });
    </script> 
<div class="clear"></div>
    <h3>全部评论</h3>
    <?php } ?> 
    <ul>
    <?php if(is_array($commentlist)) foreach($commentlist as $comment) { ?> 
    <?php include template('portal/comment_li'); ?> 
    <?php if(!empty($aimgs[$comment['cid']])) { ?> 
    <script type="text/javascript" reload="1">aimgcount[<?php echo $comment['cid'];?>] = [<?php echo implode(',', $aimgs[$comment['cid']]);; ?>];attachimgshow(<?php echo $comment['cid'];?>);</script> 
    <?php } ?> 
    <?php } ?>
    </ul>
    <p class="ptn cl" style=" text-align:center">
        <?php if($data['commentnum']) { ?><a href="<?php echo $common_url;?>" class="xi2">查看全部评论>></a><?php } ?>
      </p>
  </div>
</div>
 
                <?php } ?>     
                </div>
            </div>
            <?php if($article['related']) { ?>
            <!--相关文章阅读-->
            <div class="nex_xgydbox_pd">
                <h3>相关阅读</h3>
                <div id="related_article" class="bm">
                    <ul class="nex_threadslists" id="raid_div">
                      <?php if(is_array($article['related'])) foreach($article['related'] as $raid => $rvalue) { ?>                      <li>
                        <div class="nex_toppicfd">
                        	<?php if($rvalue['pic']) { ?>
                            <a href="<?php echo $rvalue['uri'];?>" target="_blank"><img src="data/attachment/<?php echo $rvalue['pic'];?>"/></a>
                            <?php } else { ?><a href="<?php echo $article_url;?>" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/portal_list_view/nopic.jpg" /></a><?php } ?>
                        </div>
                        <div class="nex_rpingfdf">
                            <h5><a href="<?php echo $rvalue['uri'];?>"><?php echo $rvalue['title'];?></a></h5>
                            <div class="nex_rpingsums"><?php echo $rvalue['summary'];?></div>
                            <div class="nex_rfgtr">
                            	<div class="nex_frzuoze"><?php echo $rvalue['username'];?></div>
                                <div class="nex_daterf"><?php echo date("Y-m-d",$rvalue['dateline']); ?></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                      </li>
                      <?php } ?>
                      <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    	<div class="sd pph">
            <div class="nex_fabuxinxi">
            	<i></i>
                <div class="nex_fbxxtop">
                    <a href="home.php?mod=space&amp;uid=<?php echo $article['uid'];?>" target="_blank">
                        <div class="nex_tx"><?php echo avatar($article[uid],big);?></div>
                        <div class="nex_zzm"><?php echo $article['username'];?></div>
                        <div class="nexfabuxinxi_addnCars">
                            <ul>
                                <?php include 'template/nex_deco_180401/php/nex_portal.php'?>                                <?php if($nex_province == '' && $nex_adds == '') { ?>
                                <li>未知城市</li>
                                <?php } else { ?>
                                <li><?php echo $nex_province;?><?php echo $nex_adds;?></li>
                                <?php } ?>
                                <em></em>
                                <?php if($nex_occu == '') { ?>
                                <li>职业未填写</li>
                                <?php } else { ?>
                                <li><?php echo $nex_occu;?></li>
                                <?php } ?>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div>
                <div class="nexfabuzinzi_intros">
                    <?php if($nex_intros == '') { ?>
                    这个人很懒，什么也没留下...
                    <?php } else { ?>
                    <?php echo $nex_intros;?>
                    <?php } ?>
                </div>
                <div class="nex_fbxxbottom">
                <?php include 'template/nex_deco_180401/php/nex_portal.php'?>                    <span class="nex_sss">粉丝<em><?php echo $nexusersfollows['follower'];?></em></span>
                    
                    <span class="nex_views">阅读<em><?php if($article['viewnum'] > 0) { ?><?php echo $article['viewnum'];?><?php } else { ?>0<?php } ?></em></span>
                    <span class="nex_replies">回复<?php if($article['commentnum'] > 0) { ?><a href="<?php echo $common_url;?>" title="查看全部评论"><em><?php echo $article['commentnum'];?></em></a><?php } else { ?><em>0</em><?php } ?></span>
                    <div class="clear"></div>
                </div>
                
            </div>
            <!--上一篇下一篇-->
            <?php if($article['preaid'] || $article['nextaid']) { ?>
            <div class="nex_xgydbox">
                <div class="nex_updowns">
                	<h5 class="nexupdowns_up">上一篇：</h5>
                    <?php if($article['prearticle']) { ?><a href="<?php echo $article['prearticle']['url'];?>"><?php echo $article['prearticle']['title'];?></a><?php } ?>
                    <h5 class="nexupdowns_down">下一篇：</h5>
                    <?php if($article['nextarticle']) { ?><a href="<?php echo $article['nextarticle']['url'];?>"><?php echo $article['nextarticle']['title'];?></a><?php } ?>
                    <div class="clear"></div>
                </div>
            </div>
            <?php } ?>
            <!--推荐资讯-->
            <div class="nex_side_boxs">
                <div class="nex_side_bx_top">推荐资讯<a href="#" target="_blank">...</a><div class="clear"></div></div>
                <div class="nex_tuijian">
                    <div class="nex_focusBox">
                        <!--[diy=nex_focusBox]--><div id="nex_focusBox" class="area"><div id="framek0B6tP" class="frame move-span cl frame-1"><div id="framek0B6tP_left" class="column frame-1-c"><div id="framek0B6tP_left_temp" class="move-span temp"></div><?php block_display('83');?></div></div></div><!--[/diy]-->
                        
                        <ul class="hd">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                
                    <script type="text/javascript">
                        jQuery(".nex_focusBox").slide({ mainCell:".bd",effect:"left", autoPlay:true, delayTime:300});
                    </script>
                </div>
            </div>
            <!--家装百科-->
            <div class="nex_side_boxs">
                <div class="nex_side_bx_top">家装百科<a href="#" target="_blank">...</a><div class="clear"></div></div>
                <div class="nex_readings">
                    <ul>
                        <!--[diy=nex_readings]--><div id="nex_readings" class="area"><div id="framea1adDv" class="frame move-span cl frame-1"><div id="framea1adDv_left" class="column frame-1-c"><div id="framea1adDv_left_temp" class="move-span temp"></div><?php block_display('84');?></div></div></div><!--[/diy]-->
                        
                    </ul>
                </div>
            </div>
            <!--热门阅读-->
            <div class="nex_side_boxs">
                <div class="nex_side_bx_top">热门阅读<a href="#" target="_blank">...</a><div class="clear"></div></div>
                <div class="nex_pivlists">
                    <ul>
                        <!--[diy=nex_pivlists]--><div id="nex_pivlists" class="area"><div id="frameL1ZdKf" class="frame move-span cl frame-1"><div id="frameL1ZdKf_left" class="column frame-1-c"><div id="frameL1ZdKf_left_temp" class="move-span temp"></div><?php block_display('85');?></div></div></div><!--[/diy]-->
                    </ul>
                </div>
                <script type="text/javascript">
                    jQuery(".nex_pivlists ul li").each(function(s){
                        jQuery(this).hover(function(){
                            jQuery(this).addClass("on").siblings().removeClass("on");
                            })
                        })
                </script>
            </div>
            
            <!--装修攻略-->
            <div class="nex_side_boxs">
                <div class="nex_side_bx_top">装修攻略<a href="#" target="_blank">...</a><div class="clear"></div></div>
                <div class="nex_selcases">
                    <ul>
                        <!--[diy=nex_selcases]--><div id="nex_selcases" class="area"><div id="framep43w3W" class="frame move-span cl frame-1"><div id="framep43w3W_left" class="column frame-1-c"><div id="framep43w3W_left_temp" class="move-span temp"></div><?php block_display('86');?></div></div></div><!--[/diy]-->
                        <div class="clear"></div>
                    </ul>
                </div>
                
            </div>
            <!--广告位-->
            <div class="nex_portal_ads">
                <!--[diy=nex_portal_ads]--><div id="nex_portal_ads" class="area"><div id="frameyhP1A9" class="frame move-span cl frame-1"><div id="frameyhP1A9_left" class="column frame-1-c"><div id="frameyhP1A9_left_temp" class="move-span temp"></div><?php block_display('87');?></div></div></div><!--[/diy]-->
                    
            </div>
            
        </div>
    	<div class="clear"></div>

</div>

<?php if($_G['relatedlinks']) { ?>
<script type="text/javascript">
var relatedlink = [];<?php if(is_array($_G['relatedlinks'])) foreach($_G['relatedlinks'] as $key => $link) { ?>relatedlink[<?php echo $key;?>] = {'sname':'<?php echo $link['name'];?>', 'surl':'<?php echo $link['url'];?>'};
<?php } ?>
relatedlinks('article_content');
</script>
<?php } ?>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<input type="hidden" id="portalview" value="1"><?php include template('common/footer'); ?>