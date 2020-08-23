<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_3');
block_get('64,58,59,60,61,62,63');?><?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><?php echo adshow("text/wp a_t");?><div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div class="nex_liststyle">
    <div class="nex_liststylebd">
        <h4><?php echo $cat['catname'];?></h4>
        <div class="nex_tools">
            <?php if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?>
            <a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>">发布文章</a>
            <?php } ?>
        </div>
    </div>
</div>
<div id="ct" class="ct2 wp cl nex_zxbox">
<div class="mn">
    	
<div class="nex_mn_left">
        	
            <!--[diy=listloopbottom]--><div id="listloopbottom" class="area"></div><!--[/diy]-->
            <div class="clear"></div>
            <div class="nex_artice">
                <ul>
                    <?php if(is_array($list['list'])) foreach($list['list'] as $value) { ?>                    <?php $highlight = article_title_style($value);?>                    <?php $article_url = fetch_article_url($value);?>                    <li>
                        <?php if($value['pic']) { ?>
                        <div class="nex_artice_txt"> 
                            <a href="<?php echo $article_url;?>" target="_blank"><?php if($value['catname'] && $cat['subs']) { ?><em><?php echo $value['catname'];?></em><?php } ?><?php echo $value['title'];?></a><div class="clear"></div>
                        </div>
                        <div class="nex_articel">
                            <a href="<?php echo $article_url;?>" target="_blank"><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" width="250" height="150"/></a>
                        </div>
                        <div class="nex_articer">
                        	<div class="nex_art_author">
                                <img src="uc_server/avatar.php?uid=<?php echo $value['uid'];?>&amp;size=large">
                                <span><?php echo $value['username'];?></span>
                                <em><?php echo $value['dateline'];?></em>
                                <div class="clear"></div>
                            </div>
                            <div class="nex_articersummary"><?php echo $value['summary'];?>&hellip;&hellip;</div>
                            <div class="nex_atcertop">
                            	<div class="nex_atcertop_left">
                                	<dl>
                                    	<dd class="nex_atcerviews">
                                        	<em></em>
                                            <p><?php $query = DB::query("SELECT t1.viewnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $nex_ = DB::fetch($query);echo $nex_['viewnum'];?></p>
                                        </dd>
                                        <dd class="nex_atcerreplies">
                                        	<em></em>
                                            <p><?php $query = DB::query("SELECT t1.commentnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $nex_ = DB::fetch($query);echo $nex_['commentnum'];?></p>
                                        </dd>
                                        <div class="clear"></div>
                                    </dl>
                                </div>
                                <div class="nex_atcertop_right"><a href="<?php echo $article_url;?>" target="_blank">查看详情</a></div>
                                <div class="clear"></div>
                            
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        
                        <?php } else { ?>
                    	<div class="nex_articer_tl">
                        	<div class="nex_articer_tl_decor"></div>
                            <div class="nex_articenopic_txt"> 
                                <a href="<?php echo $article_url;?>" target="_blank"><span>无图</span><?php if($value['catname'] && $cat['subs']) { ?><em><?php echo $value['catname'];?></em><?php } ?><?php echo $value['title'];?></a><div class="clear"></div>
                            </div>
                            <div class="nex_articersummary_n"><?php echo $value['summary'];?>&hellip;&hellip;</div>
                            <div class="nex_articern_btm">
                            	<div class="nex_articern_btml">
                                    <img src="uc_server/avatar.php?uid=<?php echo $value['uid'];?>&amp;size=large">
                                    <span><?php echo $value['username'];?></span>
                                    <div class="clear"></div>
                                </div>
                                <div class="nex_articern_btmr">
                                	<dl>
                                    	<dd>阅读：<?php $query = DB::query("SELECT t1.viewnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $nex_ = DB::fetch($query);echo $nex_['viewnum'];?></dd>
                                        <dd>回复：<?php $query = DB::query("SELECT t1.commentnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $nex_ = DB::fetch($query);echo $nex_['commentnum'];?></dd>
                                        <dd>时间：<?php echo $value['dateline'];?></dd>
                                        <div class="clear"></div>
                                    </dl>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    	<?php } ?>
                    </li>
                    	
                    <?php } ?>
                </ul>
            </div>
            <div class="clear"></div>
            <?php echo adshow("articlelist/mbm hm/3");?><?php echo adshow("articlelist/mbm hm/4");?>            <?php if($list['multi']) { ?><div class="pgs cl" id="nex_page"><?php echo $list['multi'];?></div><?php } ?>
    
            <!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
        </div>
</div>
<div class="sd pph">
<!--为什么选择我们-->
        <div class="nex_focus_on"><!--[diy=nex_focus_on]--><div id="nex_focus_on" class="area"><div id="frameGvOOiv" class="frame move-span cl frame-1"><div id="frameGvOOiv_left" class="column frame-1-c"><div id="frameGvOOiv_left_temp" class="move-span temp"></div><?php block_display('64');?></div></div></div><!--[/diy]--></div>
        <div class="nex_side_bxs">
        	<!--[diy=nex_side_bxs]--><div id="nex_side_bxs" class="area"><div id="framePIl4Hg" class="frame move-span cl frame-1"><div id="framePIl4Hg_left" class="column frame-1-c"><div id="framePIl4Hg_left_temp" class="move-span temp"></div><?php block_display('58');?></div></div></div><!--[/diy]-->
        </div>
        <!--下级分类-->	
        <?php if($cat['subs']) { ?>
        <div class="nex_side_boxs">
        	<div class="nex_side_bx_top">下级分类</div>
            <div class="nex_nextnav">
                <ul>
                <?php $i = 1;?>                <?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?>                <?php if($i != 1) { } ?><li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" ><?php echo $value['catname'];?></a></li><?php $i--;?>                <?php } ?>
                <div class="clear"></div>
                </ul>
            </div>
        </div>
        <?php } ?>
        
        
        <!--推荐资讯-->
        <div class="nex_side_boxs">
        	<div class="nex_side_bx_top">推荐资讯<a href="#" target="_blank">...</a><div class="clear"></div></div>
        	<div class="nex_tuijian">
            	<div class="nex_focusBox">
                	<!--[diy=nex_focusBox]--><div id="nex_focusBox" class="area"><div id="framevVXLdC" class="frame move-span cl frame-1"><div id="framevVXLdC_left" class="column frame-1-c"><div id="framevVXLdC_left_temp" class="move-span temp"></div><?php block_display('59');?></div></div></div><!--[/diy]-->
                	
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
                	<!--[diy=nex_readings]--><div id="nex_readings" class="area"><div id="frameur89T7" class="frame move-span cl frame-1"><div id="frameur89T7_left" class="column frame-1-c"><div id="frameur89T7_left_temp" class="move-span temp"></div><?php block_display('60');?></div></div></div><!--[/diy]-->
                	
                </ul>
            </div>
        </div>
        <!--热门阅读-->
        <div class="nex_side_boxs">
        	<div class="nex_side_bx_top">热门阅读<a href="#" target="_blank">...</a><div class="clear"></div></div>
        	<div class="nex_pivlists">
            	<ul>
                	<!--[diy=nex_pivlists]--><div id="nex_pivlists" class="area"><div id="framebt1Gtl" class="frame move-span cl frame-1"><div id="framebt1Gtl_left" class="column frame-1-c"><div id="framebt1Gtl_left_temp" class="move-span temp"></div><?php block_display('61');?></div></div></div><!--[/diy]-->
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
                	<!--[diy=nex_selcases]--><div id="nex_selcases" class="area"><div id="framecCgH0j" class="frame move-span cl frame-1"><div id="framecCgH0j_left" class="column frame-1-c"><div id="framecCgH0j_left_temp" class="move-span temp"></div><?php block_display('62');?></div></div></div><!--[/diy]-->
                	<div class="clear"></div>
                </ul>
            </div>
            
        </div>
        <!--广告位-->
        <div class="nex_portal_ads">
        	<!--[diy=nex_portal_ads]--><div id="nex_portal_ads" class="area"><div id="frameV9ohqL" class="frame move-span cl frame-1"><div id="frameV9ohqL_left" class="column frame-1-c"><div id="frameV9ohqL_left_temp" class="move-span temp"></div><?php block_display('63');?></div></div></div><!--[/diy]-->
        	  	
        </div>
</div>
</div>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>