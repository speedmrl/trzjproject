<?php echo 'Copyright@Neoconex星点互联';exit;?>
<div id="comment">
  <div class="portal_tit cl nex_tyh"> 
    <em class="y">已有$data[commentnum]条评论</em>
    <span>请发表评论</span>
    <div class="clear"></div>
  </div>
  <div id="comment_ul"> 
    
    <!--{if !empty($pricount)}-->
    <p class="mtn mbn y">{lang hide_portal_comment}</p>
    <!--{/if}--> 
    <!--{if $article[commentnum]}-->
		<div class="nex_all_comments">
            <!--{loop $commentlist $comment}--> 
            <!--{template touch/portal/comment_li}--> 
            <!--{if !empty($aimgs[$comment[cid]])}--> 
            <script type="text/javascript" reload="1">aimgcount[{$comment[cid]}] = [<!--{echo implode(',', $aimgs[$comment[cid]]);}-->];attachimgshow($comment[cid]);</script> 
            <!--{/if}--> 
            <!--{/loop}-->
        </div>	
		<!--{else}-->
        <div class="nex_vt_nonfirst">
            <p>暂无评论，赶紧抢沙发吧</p>
        </div>
		<!--{/if}-->	
    
    <!--{if !$data[htmlmade]}-->
    
    <div class="nex_pd_comments">
        <form id="cform" name="cform" action="$form_url" method="post" autocomplete="off">
            <div class="tedt" id="tedt">
                <div class="area">
                    <textarea name="message" rows="3" class="pt" id="message"  {if !$_G['uid']} placeholder="立即登录发表您的看法吧^0^"{/if} onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></textarea>
                </div>
            </div>
            <div class="cl">
            <!--{if $secqaacheck || $seccodecheck}-->
                <!--{block sectpl}--><sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div><!--{/block}-->
                <div class="mtm z"><!--{subtemplate common/seccheck}--></div>
            <!--{/if}-->
            <!--{if !empty($topicid) }-->
                <input type="hidden" name="referer" value="$topicurl#comment" />
                <input type="hidden" name="topicid" value="$topicid">
            <!--{else}-->
                <input type="hidden" name="portal_referer" value="$viewurl#comment">
                <input type="hidden" name="referer" value="$viewurl#comment" />
                <input type="hidden" name="id" value="$data[id]" />
                <input type="hidden" name="idtype" value="$data[idtype]" />
                <input type="hidden" name="aid" value="$aid">
            <!--{/if}-->
            <input type="hidden" name="formhash" value="{FORMHASH}">
            <input type="hidden" name="replysubmit" value="true">
            <input type="hidden" name="commentsubmit" value="true" />
            <p class="nex_buttonspl"><button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="pn y">{lang comment}</button></p>
            </div>
        </form>
    </div>
        <script type="text/javascript">
    $(function(){
		$("#tedt .pt").focus(function(){
			  $(this).addClass("bgchange");
		}).blur(function(){
			  $(this).removeClass("bgchange");
		});
    });
    </script> 
	
    <!--{/if}--> 
    
  </div>
</div>
