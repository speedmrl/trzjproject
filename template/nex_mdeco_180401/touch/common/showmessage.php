<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if $param['login']}-->
	<!--{if $_G['inajax']}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login&inajax=1&infloat=1');exit;}-->
	<!--{else}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
	<!--{/if}-->
<!--{/if}-->
<!--{template common/header}-->
<!--{if $_G['inajax']}-->
<div class="tip">
	<dt id="messagetext">
		<p>$show_message</p>
        <!--{if $_G['forcemobilemessage']}-->
        	<p >
            	<a href="{$_G['setting']['mobile']['pageurl']}" class="mtn">{lang continue}</a><br />
                <a href="javascript:history.back();">{lang goback}</a>
            </p>
        <!--{/if}-->
		<!--{if $url_forward && !$_GET['loc']}-->
			<!--<p><a class="grey" href="$url_forward">{lang message_forward_mobile}</a></p>-->
			<script type="text/javascript">
				setTimeout(function() {
					window.location.href = '$url_forward';
				}, '3000');
			</script>
		<!--{elseif $allowreturn}-->
			<p><input type="button" class="button" onclick="popup.close();" value="{lang close}"></p>
		<!--{/if}-->
	</dt>
</div>
<!--{else}-->

<!-- header start -->
<div class="nav nex_bbstopnav" style="border-bottom:0;">
        <a href="<!--{if $_GET[fromguid] == 'hot'}-->forum.php?mod=guide&view=hot&page=$_GET[page]<!--{else}-->forum.php?mod=forumdisplay&fid=$_G[fid]&<!--{eval echo rawurldecode($_GET[extra]);}--><!--{/if}-->" class="z nexback"></a>
		<span class="nex_category">
			<!--{if $subexists && $_G['page'] == 1}-->
			<span class="display name vm" href="#subname_list">
				<h2 class="tit"><!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}--></h2>
			</span>
			<!--{else}-->
            <span class="nex_category"><!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}--></span>
            <!--{/if}-->
		</span>
        
	
    </div>
<!-- header end -->
<!-- main jump start -->
<div class="jump_c">
	<div class="nex_common_message">$show_message</div>
    <!--{if $_G['forcemobilemessage']}-->
		<p>
            <a href="{$_G['setting']['mobile']['pageurl']}" class="mtn">{lang continue}</a><br />
            <a href="javascript:history.back();">{lang goback}</a>
        </p>
    <!--{/if}-->
	<!--{if $url_forward}-->
		<div class="nex_gray_btn"><a class="grey" href="$url_forward">{lang message_forward_mobile}</a></div>
	<!--{elseif $allowreturn}-->
		<div class="nex_gray_btn"><a class="grey" href="javascript:history.back();">{lang message_go_back}</a></div>
	<!--{/if}-->
</div>
<!-- main jump end -->

<!--{/if}-->
<!--{template common/footer}-->
