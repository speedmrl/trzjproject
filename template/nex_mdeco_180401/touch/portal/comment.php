<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<style id="diy_style" type="text/css"></style>

<div id="ct" class="wp cl">
	<div class="mn">
		<div id="comment">
        <div id="comment_ul"> 
			<div class="h hm">
				<h1 class="ph"><a href="$url">$csubject[title]</a></h1>
				<p>{lang comment} ($csubject[commentnum])<!--{if $csubject['allowcomment'] == 1}--><span class="pipe">|</span><a href="javascript:;" onclick="location.href=location.href.replace(/(\#.*)/, '')+'#message';$('message').focus();return false;" class="xi2 xw1">{lang post_comment}</a><!--{/if}--></p>
			</div>
			<div class="bm_c">

			<!--{if $pricount}-->
				<p class="mbn mtn y">{lang hide_portal_comment}</p>
			<!--{/if}-->
			<!--{if $csubject['allowcomment'] == 1}-->
				<form id="cform" name="cform" class="cl" action="portal.php?mod=portalcp&ac=comment" method="post" autocomplete="off">
					<div class="tedt">
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
            
    <ul class="cl">
    <!--{loop $commentlist $comment}--> 
    <!--{template portal/comment_li}--> 
    <!--{/loop}-->
    </ul>
    <div class="pgs cl mtm mbm">$multi</div>
            
			</div>
		</div>
        </div>
	</div>
</div>


<!--{template common/footer}-->