<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<!--{eval $list = array();}-->
<!--{eval $wheresql = category_get_wheresql($cat);}-->
<!--{eval $list = category_get_list($cat, $wheresql, $page);}-->
<div id="pt" class="bm cl">
<!--{ad/text/wp a_t}-->
	<div class="nex_bbstopnav_viewthread">
    	<a href="javascript:history.back()" class="nexback"></a>
        <span class="category">$cat[catname]</span>
        <!--{if $cat[subs]}-->
        <div class="y nex_shares nex_pd_sub_lists nex_pd_sub_listsed"><a class="nex_tool_Shares" onclick="toolShare()"></a></div>
        <!--{/if}-->
        <div class="clear"></div>
	</div>
    <script type="text/javascript">
		$(function(){     
			var cubuk_seviye = $(document).scrollTop(); 
		var header_yuksekligi = $('.nex_bbstopnav_viewthread').outerHeight();
			$(window).scroll(function() {  
		var kaydirma_cubugu = $(document).scrollTop();  
		if (kaydirma_cubugu > header_yuksekligi){$('.nex_bbstopnav_viewthread').addClass('nex_header_top');}   
				else {$('.nex_bbstopnav_viewthread').removeClass('nex_header_top');}  
				if (kaydirma_cubugu > cubuk_seviye){$('.nex_bbstopnav_viewthread').removeClass('nex_header_topx');}   
				else {$('.nex_bbstopnav_viewthread').addClass('nex_header_topx');} 
				cubuk_seviye = $(document).scrollTop();   
			 });  
		});  
		</script>
		
		<!--{ad/articlelist/mbm hm/1}--><!--{ad/articlelist/mbm hm/2}-->
			<div class="nex_artice">
                <ul>
                    <!--{loop $list['list'] $value}-->
                    <!--{eval $highlight = article_title_style($value);}-->
                    <!--{eval $article_url = fetch_article_url($value);}-->
                    <!--{if $value[pic]}-->
                    <li>
                    	<a href="$article_url">
                             <div class="nex_artice_pics">
                             	<!--{if $value[catname] && $cat[subs]}-->
                                    <div class="nex_articerfrom">$value[catname]</div>
                                <!--{/if}-->
                               <img src="$value[pic]" alt="$value[pic]" />
                               <div class="nex_article_interbox">
                               	 	
                                    <div class="nex_articername">$value[title]</div> 
                                    
                                    <div class="nex_zhuozhenm">
                                        <div class="nex_ar_touxiang"><img src="uc_server/avatar.php?uid=$value[uid]&size=big"></div>
                                        <div class="nex_zhuozhen_r_un">
                                            <span>$value[username]</span>
                                        </div>
                                        <div class="nex_fabushijian">$value[dateline]</div>
                                        <div class="nex_art_top_ydxq_un">
                                            <span class="nex_yuedushu">{eval $query = DB::query("SELECT t1.viewnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $nex_ = DB::fetch($query);echo $nex_['viewnum'];}</span>
                                        <span class="nex_huifushu">{eval $query = DB::query("SELECT t1.commentnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $nex_ = DB::fetch($query);echo $nex_['commentnum'];}</span>
                                        </div>
                                        <div class="clear"></div>
                                    </div> 
                                    
                               </div>
                            </div>
                        </a>
                        </li>
                    <!--{else}-->
                    <li class="nex_artical_unload">
                        <a href="$article_url">
                        	<div class="nex_artical_quota"></div>
                            <div class="nex_articername_unload">$value[title]<!--{if $value[status] == 1}-->({lang moderate_need})<!--{/if}--></div>    
                            <div class="nex_articersummaryx">$value[summary]&hellip;&hellip;</div>
                            
                            <div class="nex_articerinfo">
                                <div class="nex_zhuozhen_Left">
                                    <div class="nex_ar_touxiang">
                                        <img src="uc_server/avatar.php?uid=$value[uid]&size=big">
                                        
                                    </div>
                                    <div class="nex_zhuozhen_r">
                                        <span>$value[username]<span class="nex_articerforum">$value[catname]</span></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="nex_art_top_ydintels">
                                    <span class="nex_yuedushu">{eval $query = DB::query("SELECT t1.viewnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $nex_ = DB::fetch($query);echo $nex_['viewnum'];}</span>
                                <span class="nex_huifushu">{eval $query = DB::query("SELECT t1.commentnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $nex_ = DB::fetch($query);echo $nex_['commentnum'];}</span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </li>
                    <!--{/if}-->
                    <div class="clear"></div>
                	<!--{/loop}-->
                </ul>
        	</div>
		<!--{ad/articlelist/mbm hm/3}--><!--{ad/articlelist/mbm hm/4}-->
		<!--{if $list['multi']}--><div class="pgs cl">{$list['multi']}</div><!--{/if}-->


	<!-- JiaThis Button BEGIN -->
<div class="toolShare tsharearea">
	<h5>下级分类</h5>
    <div class="nex_sharebtns_AR">
       <!--{if $cat[subs]}-->
        <div class="nex_nextnav">
            <ul>
            <!--{eval $i = 1;}-->
            <!--{loop $cat[subs] $value}-->
            <!--{if $i != 1}--><!--{/if}--><li><a href="{$portalcategory[$value['catid']]['caturl']}" >$value[catname]</a></li><!--{eval $i--;}-->
            <!--{/loop}-->
            <div class="clear"></div>
            </ul>
        </div>
        <!--{/if}-->
    </div>

</div>
<div class="sharebg"></div>
<!-- JiaThis Button END -->
<script type="text/javascript">
function toolShare(){
$(".toolShare").addClass("nex_shareactive");	
if($(".sharebg").length>0){
$(".sharebg").addClass("sharebg-active");
}else{
$("body").append('<div class="sharebg"></div>');
$(".sharebg").addClass("sharebg-active");
}
$(".sharebg-active,.share_btn_cancel").click(function(){
$(".tsharearea").removeClass("nex_shareactive");	
setTimeout(function(){
$(".sharebg-active").removeClass("sharebg-active");	
$(".sharebg").remove();	
},300);
})
}	
</script>
</div>

<!--{template common/footer}-->










<!--星点互联版权所有-->