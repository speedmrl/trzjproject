<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<!-- header start -->
<div class="nex_uc_mylisttop">
	<i style="background:url(template/nex_mdeco_180401/neoconex/ucenter/mythread_bg.jpg) center no-repeat; background-size:cover;"></i>
	<div class="nex_uc_mylisttopinter">
    	<a href="javascript:history.back()" class="nex_uc_mylisttop_back"></a>
		<span class="nex_uc_mylisttop_txt">{lang mythread}</span>
    </div>
</div>
<div class="nex_My_Collections">
	<ul>
		<li><a <!--{if $_GET['type'] == 'thread'}-->class="cur"<!--{/if}--> href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=thread">{lang favthread}<em></em></a></li>
		<li><a <!--{if $_GET['type'] == 'forum'}-->class="cur"<!--{/if}--> href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=forum">{lang favforum}<em></em></a></li>
        <div class="clear"></div>
	</ul>
</div>
<!-- main collectlist start -->
<!--{if $_GET['type'] == 'forum'}-->
<div class="nex_My_CollectionBBS">
	<ul>
		<!--{if $list}-->
			<!--{loop $list $k $value}-->
			<li>
				<a class="nex_Favtitles" href="$value[url]">$value[title]</a>
				<p class="nex_MY_ptxt"><a class="y" id="a_delete_$k" href="home.php?mod=spacecp&ac=favorite&op=delete&favid=$k" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a> <em class="nex_scicon">收藏于:</em><!--{date($value[dateline], 'u')}--></p>
			</li>
			<!--{/loop}-->
		<!--{else}-->
			<li class="noData">{lang no_favorite_yet}</li>
		<!--{/if}-->

	</ul>
</div>
<!--{else}-->
<div class="nex_My_CollectionList">
	<ul>
		<!--{if $list}-->
			<!--{loop $list $k $value}-->
			<li>
				<a class="nex_Favtitles" href="$value[url]">$value[title]</a>
				<p class="nex_MY_ptxt"><a class="y" id="a_delete_$k" href="home.php?mod=spacecp&ac=favorite&op=delete&favid=$k" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a><em class="nex_scicon">收藏于:</em> <!--{date($value[dateline], 'u')}--></p>
			</li>
			<!--{/loop}-->
		<!--{else}-->
			<li class="noData">{lang no_favorite_yet}</li>
		<!--{/if}-->
	</ul>
</div>
<!--{/if}-->
<script type="text/javascript">
$('.nex_My_CollectionList ul').each(function(){
  
  $(this).children(':last').addClass('nex_My_CollectionList_lasts')

})
</script>
<!-- main collectlist end -->
$multi
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
