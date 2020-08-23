<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_5');
block_get('95,89,90,91,92,93,94,96,97,98,99,100,101,102,103,104,105,106');?><?php include template('common/header'); ?><link rel="stylesheet" type="text/css" href="./template/nex_deco_180401/neoconex/qna/main.css">
<div class="nex_wenda_decor">
<div class="w1180">
    	<div id="pt" class="bm cl">
            <div class="z">
                <a href="#" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
                <a href="#"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em>
                <?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="#"><?php echo $value['catname'];?></a><em>&rsaquo;</em><?php } ?>
                <?php echo $cat['catname'];?>
            </div>
        </div>
        <div class="nex_wenda_decorbox_ads"><!--[diy=nex_wenda_decorbox_ads]--><div id="nex_wenda_decorbox_ads" class="area"><div id="frameqPlPY1" class="frame move-span cl frame-1"><div id="frameqPlPY1_left" class="column frame-1-c"><div id="frameqPlPY1_left_temp" class="move-span temp"></div><?php block_display('95');?></div></div></div><!--[/diy]--></div>
        <div class="nex_wenda_decorbox">
        	<div class="nex_wenda_decorboxl">
            	<ul>
                	<li>
                    	<!--[diy=nex_wenda1]--><div id="nex_wenda1" class="area"><div id="frameiP743p" class="frame move-span cl frame-1"><div id="frameiP743p_left" class="column frame-1-c"><div id="frameiP743p_left_temp" class="move-span temp"></div><?php block_display('89');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <li>
                    	<!--[diy=nex_wenda2]--><div id="nex_wenda2" class="area"><div id="framesV0R49" class="frame move-span cl frame-1"><div id="framesV0R49_left" class="column frame-1-c"><div id="framesV0R49_left_temp" class="move-span temp"></div><?php block_display('90');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <li>
                    	<!--[diy=nex_wenda3]--><div id="nex_wenda3" class="area"><div id="frames3BF7I" class="frame move-span cl frame-1"><div id="frames3BF7I_left" class="column frame-1-c"><div id="frames3BF7I_left_temp" class="move-span temp"></div><?php block_display('91');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <li>
                    	<!--[diy=nex_wenda4]--><div id="nex_wenda4" class="area"><div id="frameZSrb2w" class="frame move-span cl frame-1"><div id="frameZSrb2w_left" class="column frame-1-c"><div id="frameZSrb2w_left_temp" class="move-span temp"></div><?php block_display('92');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <li>
                    	<!--[diy=nex_wenda5]--><div id="nex_wenda5" class="area"><div id="framemOOL4V" class="frame move-span cl frame-1"><div id="framemOOL4V_left" class="column frame-1-c"><div id="framemOOL4V_left_temp" class="move-span temp"></div><?php block_display('93');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <li>
                    	<!--[diy=nex_wenda6]--><div id="nex_wenda6" class="area"><div id="frameB00v40" class="frame move-span cl frame-1"><div id="frameB00v40_left" class="column frame-1-c"><div id="frameB00v40_left_temp" class="move-span temp"></div><?php block_display('94');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                </ul>
            </div>
            <div class="nex_wenda_decorboxm">
            	<div class="nex_wenda_decorboxm_top">
                	<div class="nex_wdtoppiv">
                    	<!--[diy=nex_wdtoppiv]--><div id="nex_wdtoppiv" class="area"><div id="frameZI95OR" class="frame move-span cl frame-1"><div id="frameZI95OR_left" class="column frame-1-c"><div id="frameZI95OR_left_temp" class="move-span temp"></div><?php block_display('96');?></div></div></div><!--[/diy]-->
                    	
                    </div>
                    <div class="nex_wdtopinfo">
                    	<ul>
                        	<!--[diy=nex_wdtopinfo]--><div id="nex_wdtopinfo" class="area"><div id="framedJT3Ye" class="frame move-span cl frame-1"><div id="framedJT3Ye_left" class="column frame-1-c"><div id="framedJT3Ye_left_temp" class="move-span temp"></div><?php block_display('97');?></div></div></div><!--[/diy]-->
                        	
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="nex_wdcommontopx"><span>大家都在问</span></div>
                <div class="nex_popwd">
                	<ul>
                    	<!--[diy=nex_popwd]--><div id="nex_popwd" class="area"><div id="frameoP4hO4" class="frame move-span cl frame-1"><div id="frameoP4hO4_left" class="column frame-1-c"><div id="frameoP4hO4_left_temp" class="move-span temp"></div><?php block_display('98');?></div></div></div><!--[/diy]-->
                    	
                    </ul>
                </div>    
                <div class="nex_wdcommontopx"><span>新增问题</span></div>
                <div class="nex_wdnewadd">
                	<ul>
                    	<!--[diy=nex_wdnewadd]--><div id="nex_wdnewadd" class="area"><div id="framecNUd80" class="frame move-span cl frame-1"><div id="framecNUd80_left" class="column frame-1-c"><div id="framecNUd80_left_temp" class="move-span temp"></div><?php block_display('99');?></div></div></div><!--[/diy]-->
                    	
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="nex_wdmidads"><!--[diy=nex_wdmidads1]--><div id="nex_wdmidads1" class="area"><div id="framepLI9Ez" class="frame move-span cl frame-1"><div id="framepLI9Ez_left" class="column frame-1-c"><div id="framepLI9Ez_left_temp" class="move-span temp"></div><?php block_display('100');?></div></div></div><!--[/diy]--></div>
                <div class="nex_wdcommontopx"><span>等你来回答</span></div>
                <div class="nex_wdwaiting">
                	<ul>
                    	<!--[diy=nex_wdwaiting]--><div id="nex_wdwaiting" class="area"><div id="framen5i5Kf" class="frame move-span cl frame-1"><div id="framen5i5Kf_left" class="column frame-1-c"><div id="framen5i5Kf_left_temp" class="move-span temp"></div><?php block_display('101');?></div></div></div><!--[/diy]-->
                    	
                        <div class="clear"></div>
                    </ul>
                </div>
                
                
            </div>
            <div class="nex_wenda_decorboxr">
            	<div class="nex_selectedstyle"><!--[diy=nex_selectedstyle]--><div id="nex_selectedstyle" class="area"><div id="frameWV6VvJ" class="frame move-span cl frame-1"><div id="frameWV6VvJ_left" class="column frame-1-c"><div id="frameWV6VvJ_left_temp" class="move-span temp"></div><?php block_display('102');?></div></div></div><!--[/diy]--></div>
                <div class="nex_wdbknum">
                	<!--[diy=nex_wdbknum]--><div id="nex_wdbknum" class="area"><div id="framecw5pj5" class="frame move-span cl frame-1"><div id="framecw5pj5_left" class="column frame-1-c"><div id="framecw5pj5_left_temp" class="move-span temp"></div><?php block_display('103');?></div></div></div><!--[/diy]-->
                	
                </div>
                <div class="nex_wdbknum">
                	<div class="nex_wdbknumtops">热门问题</div>
                    <div class="nex_commonwdlist">
                    	<ul>
                        	<!--[diy=nex_commonwdlist]--><div id="nex_commonwdlist" class="area"><div id="framen6N6iG" class="frame move-span cl frame-1"><div id="framen6N6iG_left" class="column frame-1-c"><div id="framen6N6iG_left_temp" class="move-span temp"></div><?php block_display('104');?></div></div></div><!--[/diy]-->
                                
                        </ul>
                    </div>
                </div>
                <div class="nex_edads"><!--[diy=nex_edads]--><div id="nex_edads" class="area"><div id="framegV968X" class="frame move-span cl frame-1"><div id="framegV968X_left" class="column frame-1-c"><div id="framegV968X_left_temp" class="move-span temp"></div><?php block_display('105');?></div></div></div><!--[/diy]--></div>
                <div class="nex_edads"><!--[diy=nex_edads1]--><div id="nex_edads1" class="area"><div id="framekFJ8eX" class="frame move-span cl frame-1"><div id="framekFJ8eX_left" class="column frame-1-c"><div id="framekFJ8eX_left_temp" class="move-span temp"></div><?php block_display('106');?></div></div></div><!--[/diy]--></div>
                
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div><?php include template('common/footer'); ?>                                      
                                        