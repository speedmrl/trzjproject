<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('107,185,186,108,188,109,190,191,192,193,194,195,196,197,198,199,200');?><?php include template('common/header'); if(file_exists('source/plugin/nex_decos_180401/inc.php') && $_G['cache']['plugin']['nex_decos_180401']) { require_once("source/plugin/nex_decos_180401/inc.php");?><?php } ?>
<div id="st-container" class="st-container">
<div class="st-pusher"><?php include template('common/headernav'); ?>        
        <!--slider-->
        <div id="nex_index_focus" class="nex_index_focus">
        	
            <div class="hd">
                <ul></ul>
            </div>
<!--门户图片幻灯-->
            <?php block_display('107');?>        </div>
        
        <!--板块-->
        
        <script type="text/javascript">
            TouchSlide({ 
                slideCell:"#nex_index_focus",
                titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                mainCell:".bd ul", 
                effect:"left", 
                autoPlay:true,//自动播放
                autoPage:true, //自动分页
                switchLoad:"_src" //切换加载，真实图片路径为"_src" 
            });
        </script>
        <!--fenlei-->
        <div class="nex_commonport">
       	  <div class="nex_sliderTOps">
  	<!--门户动态通告切换-->
            	
            </div>
            <script type="text/javascript">
jQuery(".nex_sliderTOps").slide({ mainCell:"ul", effect:"topLoop", vis:1,autoPlay:true, delayTime:1200,interTime:3500,easing:"easeInCubic"});
</script>
            <div class="nex_iconsorts">
            	<ul>
<!--门户静态自定义链接-->
                <?php block_display('185');?>                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <!--申请量房-->
        <div class="nex_applybox">
        	<div class="nex_applyboxTOP">
            	<i class="pre"></i>
                <span><em>10</em>秒免费申请量房服务</span>
                <i class="nex"></i>
            </div>
            
            <div class="nex_applyboxSUMMIT">
            <!--免费量房申请插件开始-->
            	<?php echo $form['0'];?>
            	
            <!--免费量房申请插件结束-->
            </div>
        </div>
        <!--ads广告位-->
        <div class="nex_indexAds">
<!--门户广告位1--><?php block_display('186');?></div>
        <!--装修报价-->
        <div class="nex_offerbox">
        	<div class="nex_offerboxTOP">
            	<i class="pre"></i>
                <span><em>限时抢</em>免费装修设计方案</span>
                <i class="nex"></i>
                <div class="clear"></div>
            </div>
            <!--装修报价申请开始-->
            <?php echo $form['1'];?>
            
            <!--装修报价申请结束-->
        </div>
        <!--精选装修案例-->
        <div class="nex_normalport">
        	<div class="nex_normalportTOP">
            	<span>装修案例展示</span>
                <a href="#">更多+</a>
                <div class="clear"></div>
            </div>
        	<div class="nex_casesort">
            	<ul>
<!--门户装修案例展示-->
                <?php block_display('108');?>                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <!--ads广告位-->
        <div class="nex_indexAds">
<!--门户广告位2-->
                <?php block_display('188');?></div>
        <!--设计师展示-->
        <div class="nex_normalport">
        	<div class="nex_normalportTOP">
            	<span>设计师展示</span>
                <a href="#">更多+</a>
                <div class="clear"></div>
            </div>
            <div class="nex_designerbox">
            	<ul>
                	<!--门户设计师展示-->
                <?php block_display('109');?>                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <!--ads广告位-->
        <div class="nex_indexAds">
<!--门户广告位3-->
        <?php block_display('190');?></div>
        <!--装修效果图-->
        <div class="nex_normalport">
        	<div class="nex_normalportTOP">
            	<span>装修效果图</span>
                <a href="#">更多+</a>
                <div class="clear"></div>
            </div>
            <div class="nex_showpic">
<!--门户装修效果图--><?php block_display('191');?>                <div class="clear"></div>
            </div>
            <div class="nex_showsorts">
            	<ul>
<!--门户局部装修效果图--><?php block_display('192');?>                	
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <!--学装修问答模块-->
        <div class="nex_normalport">
        	<div class="nex_normalportTOP">
            	<span>学装修问答</span>
                <a href="#">更多+</a>
                <div class="clear"></div>
            </div>
            <div class="nex_zxglport">
            	<ul>
                	<li class="ons">文章精选</li>
                    <li>装修问答</li>
                    <li>装修日记</li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="nex_zxcontsd">
            	<ul>
                	<li style="display:block;">
                    	<div class="nex_glTop">
                        	<dl>
<!--门户学装修问答自定义连接--><?php block_display('193');?>                            	
                                <div class="clear"></div>
                            </dl>
                        </div>
                        <div class="nex_glBtm">
                        	<dl>
<!--门户学装修资讯文章--><?php block_display('194');?>                            	
                            </dl>
                        </div>
                    </li>
                    <li>
                    	<div class="nex_glBtsm">
                        	<dl>
                            	<!--门户学装修装修问答--><?php block_display('195');?>                            </dl>
                        </div>
                    </li>
                    <li>
                    	<div class="nex_glBtsm">
                        	<dl>
                            	<!--门户学装修装修日记--><?php block_display('196');?>                            </dl>
                        </div>
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
jQuery(".nex_zxglport ul li").each(function(s){
jQuery(this).click(function(){
jQuery(this).addClass("ons").siblings().removeClass("ons");
jQuery(".nex_zxcontsd ul li").eq(s).show().siblings().hide();
})
})
</script>
        </div>
        <!--ads广告位-->
        <div class="nex_indexAds">
<!--门户广告位4--><?php block_display('197');?></div>
        <!--装修攻略-->
        <div class="nex_normalport">
        	<div class="nex_normalportTOP">
            	<span>精选装修攻略</span>
                <a href="#">更多+</a>
                <div class="clear"></div>
            </div>
            <div class="nex_zxInfo">
            	<ul>
                	<!--门户精选装修攻略--><?php block_display('198');?>                </ul>
            </div>
        </div>
        <!--关于我们-->
        <div class="nex_normalport">
<!--门户关于我们介绍--><?php block_display('199');?>        	
        </div>
        <!--在线客服-->
        <div class="nex_normalport">
        	<div class="nex_onlineservl"></div>
            <div class="nex_onlineservr">
<!--门户客服模块--><?php block_display('200');?>            	
            </div>
            <div class="clear"></div>
        </div>
        
        <?php include template('common/footer'); ?></div>	
</div>

<div class="pullrefresh" style="display:none;"></div>

