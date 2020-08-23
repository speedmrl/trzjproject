<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
	<div class="nex_bbstopnav_viewthread">
		<div class="nex_shares"><a onclick="toolShare()"></a></div>
        <span class="category">文章详情</span>
        <a href="javascript:history.back()" class="nexback"></a>
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
	<!--{eval include 'template/nex_mdeco_180401/touch/php/nex_list_cons.php'}-->
	<div class="nex_pd_content">
        <!--{if $nex_artical_attchcover == ''}-->
        <div class="nex_pd_txt_bg" style=" background:url($_G['style'][styleimgdir]/portal/uncover.jpg) center no-repeat;background-size:cover;">
        	<i></i>
            
            <div class="nex_artical_txtcounts">本文约有<!--{echo intval($nex_articalzishu);}-->个字</div>
        	<div class="nex_pd_txt_bxt">
            	<a href="home.php?mod=space&uid=$article[uid]">
                	<img src="uc_server/avatar.php?uid=$article[uid]&size=big">
                    <span>$article[username]</span>
                    <b>查看作者资料</b>
                    <div class="clear"></div>
                </a>
                <em>$nex_artical_clicks</em>
            </div>
        </div>
        <!--{else}-->
    	<div class="nex_pd_txt_bg" style="background:url(data/attachment/portal/$nex_artical_attchs) center no-repeat; background-size:cover;">
        	<i></i>
            <div class="nex_artical_txtcounts">本文约有<!--{echo intval($nex_articalzishu);}-->个字</div>
        	<div class="nex_pd_txt_bxt">
            	<a href="home.php?mod=space&uid=$article[uid]">
                	<img src="uc_server/avatar.php?uid=$article[uid]&size=big">
                    <span>$article[username]</span>
                    <b>查看作者资料</b>
                    <div class="clear"></div>
                </a>
                <em>$nex_artical_clicks</em>
            </div>
        </div>
        <!--{/if}-->
        <div class="nex_artical_Tops">
        	<div class="nex_mntitles">$article[title]</div>
            <div class="nex_mneditsninfos">
                $article[dateline]<span>|</span>
                
                {lang view_views}: <em id="_viewnum"><!--{if $article[viewnum] > 0}-->$article[viewnum]<!--{else}-->0<!--{/if}--></em><span>|</span>
                {lang view_comments}: <!--{if $article[commentnum] > 0}--><a href="$common_url" title="{lang view_all_comments}"><em id="_commentnum">$article[commentnum]</em></a><!--{else}-->0<!--{/if}-->
                <!--{if $article[author]}--><span>|</span>{lang view_author_original}: $article[author]<!--{/if}-->
                <!--{if $article[from]}--><span>|</span>{lang from}: <!--{if $article[fromurl]}--><a href="$article[fromurl]">$article[from]</a><!--{else}-->$article[from]<!--{/if}--><!--{/if}-->
                <!--{hook/view_article_subtitle}-->
            </div>
        </div>
        <div class="nex_mnsummarys">
            <!--{if $article[summary] && empty($cat[notshowarticlesummay])}--><em>{lang article_description}</em> $article[summary]<!--{hook/view_article_summary}--><!--{/if}-->
        </div>
		<div class="nex_pdcontent">
			<div class="nex_mncontent">
				$content[content]
				<!--{if $multi}--><div class="ptw pbw cl">$multi</div><!--{/if}-->
				<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>
				<!--{if !empty($contents)}-->
				<!--{/if}-->
			</div>
            <div id="click_div">
                <!--{template home/space_click}-->
            </div>
            
			<!--{if !empty($aimgs[$content[pid]])}-->
				<script type="text/javascript" reload="1">aimgcount[{$content[pid]}] = [<!--{echo implode(',', $aimgs[$content[pid]]);}-->];attachimgshow($content[pid]);</script>
			<!--{/if}-->

			<!--{if !empty($_G['setting']['pluginhooks']['view_share_method'])}-->
				<div class="tshare cl">
					<strong>{lang viewthread_share_to}:</strong>
					<!--{hook/view_share_method}-->
				</div>
			<!--{/if}-->
			
			<!--{if $article['preaid'] || $article['nextaid']}-->
			<div class="nex_relatedarts">
				<div class="nex_relateds"><!--{if $article['prearticle']}--><em>{lang pre_article}</em><a href="{$article['prearticle']['url']}">{$article['prearticle']['title']}</a><!--{/if}--></div>
				<div class="nex_relateds"><!--{if $article['nextarticle']}--><em>{lang next_article}</em><a href="{$article['nextarticle']['url']}">{$article['nextarticle']['title']}</a><!--{/if}--></div>
			</div>
			<!--{/if}-->
		</div>
		<!--{ad/article/mbm hm/2}--><!--{ad/article/mbm hm/3}-->
		<!--{if $article['related']}-->
		<div id="related_article">
			<h3>{lang view_related}</h3>
			<div class="nex_relatedbox">
				<ul class="xl xl2 cl" id="raid_div">
				<!--{loop $article['related'] $raid $rvalue}-->
                	<!--{if $rvalue[pic] == ''}-->
                	<li>
                    	<a href="{$rvalue[uri]}">
                        	<div class="nex_related_art_pic"><img src="$_G['style'][styleimgdir]/portal/nopic.jpg"></div>
                            <div class="nex_related_art_info">
                            	<h5>{$rvalue[title]}</h5>
                                <p><span>$rvalue[username]</span><em><!--{echo date("Y/m/d",{$rvalue[dateline]})}--></em></p>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </li>
                    <!--{else}-->
					<li>
                    	<a href="{$rvalue[uri]}">
                        	<div class="nex_related_art_pic"><img src="data/attachment/$rvalue[pic]" /></div>
                            <div class="nex_related_art_info">
                            	<h5>{$rvalue[title]}</h5>
                                <p><span>$rvalue[username]</span><em><!--{echo date("Y/m/d",{$rvalue[dateline]})}--></em></p>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </li>
                    <!--{/if}-->
				<!--{/loop}-->
				</ul>
			</div>
		</div>
		<!--{/if}-->
		<!--{if $article['allowcomment']==1}-->
			<!--{eval $data = &$article}-->
			<!--{subtemplate portal/portal_comment}-->
		<!--{/if}-->
	</div>

<!-- JiaThis Button BEGIN -->
    <div class="toolShare tsharearea">
        <div class="nex_sharebtns">
            <a class="jiathis_button_qzone" onclick="jiathis_mh5.sendTo('qzone');">
            	<em></em>
            	<i>QQ空间</i>
            </a>
            <a class="jiathis_button_tsina" onclick="jiathis_mh5.sendTo('tsina');">
            	<em></em>
            	<i>新浪微博</i>
            </a>
            <a class="jiathis_button_tqq" onclick="jiathis_mh5.sendTo('tqq');">
            	<em></em>
            	<i>腾讯微博</i>
            </a>
            
            <div class="clear"></div>
        </div>
    	<!-- JiaThis Button BEGIN -->
        <div class="nex_closeshare"><a class="share_btn_cancel">取消</a></div>
        <script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_m.js" charset="utf-8"></script>
        <!-- JiaThis Button END -->
        </div>
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
<!--{if $_G['relatedlinks']}-->
	<script type="text/javascript">
		var relatedlink = [];
		<!--{loop $_G['relatedlinks'] $key $link}-->
		relatedlink[$key] = {'sname':'$link[name]', 'surl':'$link[url]'};
		<!--{/loop}-->
		relatedlinks('article_content');
	</script>
<!--{/if}-->

<input type="hidden" id="portalview" value="1">

<!--{template touch/common/footer}-->








<!--星点互联版权所有-->