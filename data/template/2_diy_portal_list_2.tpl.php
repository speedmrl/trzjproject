<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_2');
block_get('110,111,124,112,113,114,115,116,117,118,119,120,123,121,122');?><?php include template('common/header'); ?><link rel="stylesheet" type="text/css" href="./template/nex_deco_180401/neoconex/about/main.css">
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em><?php } ?>
<?php echo $cat['catname'];?>
</div>
</div>
<div class="nexabtbd">
    <div class="nex_ab_top">
        <ul>
            <li class="cur">公司介绍</li>
            <li>发展大事记</li>
            <li>公司招聘</li>
            <li>企业新闻</li>
            <li class="nex_lastlistli">联系我们</li>
            <div class="clear"></div>
        </ul>
    </div>
<script type="text/javascript">
jQuery(function() { 
var elm = jQuery('.nex_ab_top'); 
var startPos = jQuery(elm).offset().top; 
jQuery.event.add(window, "scroll", function() { 
var p = jQuery(window).scrollTop(); 
jQuery(elm).css('position',((p) > startPos) ? 'fixed' : 'static'); 
jQuery(elm).css('top',((p) > startPos) ? '45px' : ''); 
jQuery(elm).css('z-index',((p) > startPos) ? '2' : '');
}); 
}); 
</script>
    <div class="nex_ab_main">
        <div class="nex_ab_bottom">
            <ul>
                <li style="display:block;">
                    <div class="nex_topbards"></div>
                    <div class="nex_aboutusbx">
                    	<div class="nex_about_title">
                            <h1>公司介绍</h1>
                        </div>
                        <div class="nex_ab_line_txt">
                        	<!--[diy=nex_ab_line_txt]--><div id="nex_ab_line_txt" class="area"><div id="framec3JFzH" class="frame move-span cl frame-1"><div id="framec3JFzH_left" class="column frame-1-c"><div id="framec3JFzH_left_temp" class="move-span temp"></div><?php block_display('110');?></div></div></div><!--[/diy]-->
                        	
                        </div>
                        <div class="nex_about_title">
                            <h1>我们的团队</h1>
                        </div>
                        <div class="nex_ab_line_txt">
                        	<!--[diy=nex_ab_line_txt4]--><div id="nex_ab_line_txt4" class="area"><div id="frameAt09Z3" class="frame move-span cl frame-1"><div id="frameAt09Z3_left" class="column frame-1-c"><div id="frameAt09Z3_left_temp" class="move-span temp"></div><?php block_display('111');?></div></div></div><!--[/diy]-->
                        	
                        </div>
                        <div class="nex_pivgfhd">
                        	<!--[diy=nex_pivgfhd]--><div id="nex_pivgfhd" class="area"><div id="framed3RwcG" class="frame move-span cl frame-1"><div id="framed3RwcG_left" class="column frame-1-c"><div id="framed3RwcG_left_temp" class="move-span temp"></div><?php block_display('124');?></div></div></div><!--[/diy]-->
                        	
                            <div class="clear"></div>
                        </div>
                        <div class="nex_about_title">
                            <h1>服务宗旨</h1>
                        </div>
                        <div class="nex_ab_line_txt">
                        	<!--[diy=nex_ab_line_txt1]--><div id="nex_ab_line_txt1" class="area"><div id="framenI8ij8" class="frame move-span cl frame-1"><div id="framenI8ij8_left" class="column frame-1-c"><div id="framenI8ij8_left_temp" class="move-span temp"></div><?php block_display('112');?></div></div></div><!--[/diy]-->
                        	
                        </div>
                        <div class="nex_ab_line_txt">
                        	<!--[diy=nex_ab_line_txt2]--><div id="nex_ab_line_txt2" class="area"><div id="framedx66E5" class="frame move-span cl frame-1"><div id="framedx66E5_left" class="column frame-1-c"><div id="framedx66E5_left_temp" class="move-span temp"></div><?php block_display('113');?></div></div></div><!--[/diy]-->
                        	
                        </div>
                        <div class="nex_ab_line_txt">
                        	<!--[diy=nex_ab_line_txt3]--><div id="nex_ab_line_txt3" class="area"><div id="frameyFBhum" class="frame move-span cl frame-1"><div id="frameyFBhum_left" class="column frame-1-c"><div id="frameyFBhum_left_temp" class="move-span temp"></div><?php block_display('114');?></div></div></div><!--[/diy]-->
                        	
                        </div>
                        
                    </div>
                    
                </li>
                <li>
                    <div class="nex_topbards nex_topbards1"></div>
                   	<div class="nex_aboutusbx">
                    	
                    	<div class="nex_develops">
                            <dl>
                                <!--[diy=nex_develops]--><div id="nex_develops" class="area"><div id="frameIPj02z" class="frame move-span cl frame-1"><div id="frameIPj02z_left" class="column frame-1-c"><div id="frameIPj02z_left_temp" class="move-span temp"></div><?php block_display('115');?></div></div></div><!--[/diy]-->
                                

                            </dl>
                        </div>
                    </div>
                    
                </li>
                <!--招聘-->
                <li>
                	<div class="nex_topbards nex_topbards2"></div>
                    <div class="nex_aboutusbx">
                    	
                        <!--[diy=nex_jobtab]--><div id="nex_jobtab" class="area"><div id="framevOC4s4" class="frame move-span cl frame-1"><div id="framevOC4s4_left" class="column frame-1-c"><div id="framevOC4s4_left_temp" class="move-span temp"></div><?php block_display('116');?></div></div></div><!--[/diy]-->
                        
                        <div class="nex_jobtab">
                        	<dl>
                            	<dd class="nex_cur">技术部门</dd>
                                <dd>销售部门</dd>
                                <dd>财务部门</dd>
                                <dd>其他岗位</dd>
                                <div class="clear"></div>
                            </dl>
                        </div>
                        <div class="nex_jobcontant">
                        	<dl>
                            	<dd style="display:block;">
                                	<!--[diy=nex_jobcontant]--><div id="nex_jobcontant" class="area"><div id="frameFyWP3m" class="frame move-span cl frame-1"><div id="frameFyWP3m_left" class="column frame-1-c"><div id="frameFyWP3m_left_temp" class="move-span temp"></div><?php block_display('117');?></div></div></div><!--[/diy]-->
                                	
                                </dd>
                                <dd>
                                	<!--[diy=nex_jobcontant1]--><div id="nex_jobcontant1" class="area"><div id="framebd4dfd" class="frame move-span cl frame-1"><div id="framebd4dfd_left" class="column frame-1-c"><div id="framebd4dfd_left_temp" class="move-span temp"></div><?php block_display('118');?></div></div></div><!--[/diy]-->
                                	
                                </dd>
                                <dd>
                                	<!--[diy=nex_jobcontant2]--><div id="nex_jobcontant2" class="area"><div id="frameo1C7C9" class="frame move-span cl frame-1"><div id="frameo1C7C9_left" class="column frame-1-c"><div id="frameo1C7C9_left_temp" class="move-span temp"></div><?php block_display('119');?></div></div></div><!--[/diy]-->
                                	
                                </dd>
                                <dd>
                                	<!--[diy=nex_jobcontant3]--><div id="nex_jobcontant3" class="area"><div id="framee06340" class="frame move-span cl frame-1"><div id="framee06340_left" class="column frame-1-c"><div id="framee06340_left_temp" class="move-span temp"></div><?php block_display('120');?></div></div></div><!--[/diy]-->
                                </dd>
                            </dl>
                        </div>
                        <script type="text/javascript">
jq(".nex_jobtab dl dd").each(function(s){
jq(this).click(function(){
jq(this).addClass("nex_cur").siblings().removeClass("nex_cur");
jq(".nex_jobcontant dl dd").eq(s).show().siblings().hide();
})
})
</script>
                        
                    </div>
                </li>
                <!--企业新闻-->
                <li>
                	<div class="nex_topbards nex_topbards3"></div>
                    <div class="nex_aboutusbx">
                    	<div class="nex_corpnews">
                        	<dl>
                            	<!--[diy=nex_corpnews]--><div id="nex_corpnews" class="area"><div id="framek6gg1F" class="frame move-span cl frame-1"><div id="framek6gg1F_left" class="column frame-1-c"><div id="framek6gg1F_left_temp" class="move-span temp"></div><?php block_display('123');?></div></div></div><!--[/diy]-->
                            	
                            </dl>
                        </div>
                        
                    </div>
                </li>
                <!--联系我们-->
                <li>
                	<div class="nex_topbards nex_topbards4"></div>
                    <div class="nex_aboutusbx">
                    	
                        <div class="nex_abcontact">
                        	<div class="nex_abtop_csfd"></div>
                            <div class="nex_contactslists">
                            	<div class="nex_maps">
                                	<!--[diy=nex_maps]--><div id="nex_maps" class="area"><div id="frameb3MY3w" class="frame move-span cl frame-1"><div id="frameb3MY3w_left" class="column frame-1-c"><div id="frameb3MY3w_left_temp" class="move-span temp"></div><?php block_display('121');?></div></div></div><!--[/diy]-->
                                	
                                </div>
                                <div class="nex_colits">
                                	<!--[diy=nex_colits]--><div id="nex_colits" class="area"><div id="frameNsjArJ" class="frame move-span cl frame-1"><div id="frameNsjArJ_left" class="column frame-1-c"><div id="frameNsjArJ_left_temp" class="move-span temp"></div><?php block_display('122');?></div></div></div><!--[/diy]-->
                                	
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <script type="text/javascript">
        jQuery(function(){
            jQuery(".nex_ab_top li").each(function(a){
                jQuery(this).click(function(){
                    jQuery(this).addClass("cur").siblings().removeClass("cur");
                    jQuery(".nex_ab_bottom li").eq(a).show().siblings().hide();
                    })
                })
            })
    </script>
</div><?php include template('common/footer'); ?>                                      
                                        