<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if $value[msgfromid] != $_G['uid']}-->
<div class="nex_ltdate"><!--{date($value[dateline], 'u')}--></div>
<div class="friend_msg cl nex_dialogx">
	<div class="nex_dialog_avatorx z"><img style="height:32px;width:32px;" src="<!--{avatar($value[msgfromid], big, true)}-->" /></div>
	<div class="nex_dialog_green z">
		<i></i>
		$value[message]
	</div>
    <div class="clear"></div>
    
</div>
<!--{else}-->
<div class="nex_ltdate"><!--{date($value[dateline], 'u')}--></div>
<div class="self_msg cl nex_dialog">
	<div class="nex_dialog_avator y"><img style="height:32px;width:32px;" src="<!--{avatar($value[msgfromid], big, true)}-->" /></div>
	<div class="nex_dialog_white y">
    	<i></i>		
		$value[message]
	</div>
    <div class="clear"></div>
    
</div>
<!--{/if}-->
