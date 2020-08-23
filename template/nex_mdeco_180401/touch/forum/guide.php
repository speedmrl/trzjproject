<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<!-- header start -->
<!--{template common/header}-->
<div id="st-container" class="st-container">
	<div class="st-pusher">
		<div class="nex_Guider_BD">
            <!--{template common/headernav}-->
            <!-- header end -->
            <div class="nex_Guide_mian">
                <div class="nex_Guidetop_select">
                    <ul>
                      <li $currentview['newthread']><a href="forum.php?mod=guide&view=newthread">最新<em></em></a></li>
                        <li $currentview['hot']><a href="forum.php?mod=guide&view=hot">热门<em></em></a></li>
                        <li $currentview['digest']><a href="forum.php?mod=guide&view=digest">精华<em></em></a></li>
                        <li $currentview['new']><a href="forum.php?mod=guide&view=new">回复<em></em></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="nex_Guideads"><a href="#"><img src="$_G['style'][styleimgdir]/bbs/guide_ads.jpg" /></a></div>
            </div>
            
            <!-- main threadlist start -->
            <div class="nex_threadlisttxt nex_Guide_rolling">
                <!--{loop $data $key $list}-->
                    <!--{subtemplate forum/guide_list_row}-->
                <!--{/loop}-->
            </div>
            <!-- main threadlist end -->
            
            $multipage
            
            <div class="pullrefresh" style="display:none;"></div>
            <a href="javascript:;" title="{lang scrolltop}" class="scrolltop bottom"></a>
        </div>
    </div>
</div>
<!--{template common/footer}-->
