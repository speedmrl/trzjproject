<?php echo 'Copyright@Neoconex星点互联';exit;?>
	<div class="nex_rewards">
    	<div class="nex_rewardstxt">{lang thread_reward}<i>$rewardprice</i><span>{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][title]} {if $_G['forum_thread']['price'] > 0}</span></div>
        <div class="nex_rewardunsoluted">
        	<span class="xi1">尚{lang unresolved},快来回答吧</span>{elseif $_G['forum_thread']['price'] < 0}<span class="xg1">{lang resolved},大家来学习学习</span>{/if}
        </div>
        <div class="clear"></div>
    
        <!--{if $_G['forum_thread']['price'] > 0 && !$_G['forum_thread']['is_archived']}-->
			<p class="pns mtw nex_answerbtns"><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$_G[forum_firstpid]&page=$page"><span>{lang reward_answer}</span></a></p>
		<!--{/if}-->
        <script type="text/javascript">
		$(".nex_vt_replies").toggle(function(){
				$("html,body").animate({scrollTop:$("#nex_quickreplies").offset().top},500);},
			function(){
				$("html,body").animate({scrollTop:0},500);}
		);
		$(".Click_to_reply").click(function(){
			$(".nex_fr_reply").slideDown("fast");
			//$(".textarea")[0].focus();
			return false;
		});
		$(".nex_fr_reply form").bind("click",function(){
			$(".nex_fr_reply").css("display","block");
			event.stopPropagation();
		});
		$(".nex_fr_reply").bind("click",function(){
			$(this).slideUp("fast");
		});
		</script>
    </div>
	<div id="postmessage_$post[pid]" class="postmessage nex_rewardsneirong">
    	<h5>问题描述</h5>
        <div class="nex_rewardinters">$post[message]</div>
    </div>
	

<!--{if $post['attachment']}-->
	<div class="warning">{lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em></div>
<!--{elseif $post['imagelist'] || $post['attachlist']}-->
    <!--{if $post['imagelist']}-->
         {echo showattach($post, 1)}
    <!--{/if}-->
    <!--{if $post['attachlist']}-->
         {echo showattach($post)}
    <!--{/if}-->
<!--{/if}-->
<!--{eval $post['attachment'] = $post['imagelist'] = $post['attachlist'] = '';}-->

<!--{if $bestpost}-->
	<div class="rwdbst nex_bestans">
		<h3 class="psth nex_bestanstitle">{lang reward_bestanswer}</h3>
		<div class="pstl nex_bestangt">
			<div class="psta nex_besttx">$bestpost[avatar]</div>
			<div class="psti nex_bestyu">
				<a href="home.php?mod=space&uid=$bestpost[authorid]" class="nex_bestanszz">$bestpost[author]</a>
                <span>$post[dateline]</span>
                <a class="nex_enterfulls" href="javascript:;" onclick="window.open('forum.php?mod=redirect&goto=findpost&ptid=$bestpost[tid]&pid=$bestpost[pid]')">{lang view_full_content}</a>
				
			</div>
            <div class="clear"></div>
            <div class="mtn nex_bestmng">$bestpost[message]</div>
		</div>
	</div>
<!--{/if}-->