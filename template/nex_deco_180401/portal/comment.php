<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="$_G[setting][navs][1][filename]">$_G[setting][navs][1][navname]</a> <em>&rsaquo;</em>
		{lang comment_view}
	</div>
</div>

<style type="text/css">
.nex_comment_tedt{ width:100%; border:1px solid; border-color:#eee;}
.vw .h{ border-bottom:0;}
.nex_hightlight{ color:#FF5353;}
</style>
<div id="ct" class="wp cl">
	<div class="mn">
		<div class="bm vw" id="comment">
        <div id="comment_ul"> 
			<div class="h hm">
				<h1 class="ph"><a href="$url">$csubject[title]</a></h1>
				<p>{lang comment} ($csubject[commentnum])<!--{if $csubject['allowcomment'] == 1}--><span class="pipe">|</span><a href="javascript:;" onclick="location.href=location.href.replace(/(\#.*)/, '')+'#message';$('message').focus();return false;" class="nex_hightlight">{lang post_comment}</a><!--{/if}--></p>
			</div>
			<div class="bm_c">

			<!--{if $pricount}-->
				<p class="mbn mtn y">{lang hide_portal_comment}</p>
			<!--{/if}-->
			<!--{if $csubject['allowcomment'] == 1}-->
				<form id="cform" name="cform" class="cl" action="portal.php?mod=portalcp&ac=comment" method="post" autocomplete="off">
					<div class="tedt nex_comment_tedt">
						<div class="area">
							<textarea name="message" cols="60" rows="3" class="pt" id="message"></textarea>
						</div>
					</div>
					<!--{if $secqaacheck || $seccodecheck}-->
						<!--{block sectpl}--><sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div><!--{/block}-->
						<div class="mtm z"><!--{subtemplate common/seccheck}--></div>
					<!--{/if}-->

					<!--{if $idtype == 'topicid' }-->
						<input type="hidden" name="topicid" value="$id">
					<!--{else}-->
						<input type="hidden" name="aid" value="$id">
					<!--{/if}-->
					<input type="hidden" name="formhash" value="{FORMHASH}">
					
                    
                    
                    <p class="ptn y"><button type="submit" name="commentsubmit" value="true" class="pn"><strong>{lang comment}</strong></button></p>
				</form>
			   <script type="text/javascript">
                jQuery(function(){
                    jQuery(".tedt .pt").focus(function(){
                          jQuery(this).addClass("bgchange");
                    }).blur(function(){
                          jQuery(this).removeClass("bgchange");
                    });
                })
                </script> 
			<!--{/if}-->
<style type="text/css">
.nex_all_comments{ margin-bottom:15px;}
.nex_all_portrait{ float:left; width:28px; height:28px;}
.nex_all_portrait img{ width:28px; height:28px;}
.nexcommentnewlists{ margin-top:20px;}
.nex_portal_listtop{ float:left; width:1095px; margin-left:15px;height:28px; line-height:28px;}
.nex_portallists_tops{ float:left;height:28px; line-height:28px;}
.nex_portallists_tops a{ font-size:12px; color:#434343;}
.nex_portallists_tops a:hover{ color:#FF5353;}
.nex_portallists_tops span{ color:#999; font-size:12px; margin-left:10px;}
.nex_editse{ float:right;height:28px; line-height:28px;}
.nex_editse a{ font-size:12px; color:#999; margin-left:5px;}
.nex_editse a:hover{ color:#FF5353;}
.nex_commont_cons{ font-size:14px; color:#4c4c4c;}
.nex_commont_cons .quote{ font-size:12px; color:#999; margin:20px 0;}
</style>
    <ul class="cl nexcommentnewlists">
    <!--{loop $commentlist $comment}--> 
    <!--{template portal/comment_li_new}--> 
    <!--{/loop}-->
    </ul>
    <div class="pgs cl mtm mbm">$multi</div>
            
			</div>
		</div>
        </div>
	</div>
</div>

<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<!--{template common/footer}-->