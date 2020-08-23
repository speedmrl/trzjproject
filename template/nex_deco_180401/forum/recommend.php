<?php echo 'Copyright@Neoconex星点互联';exit;?>
<div class="z nex_bbtj">本版{lang forum_recommend}</div>
<!--{if $_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']}-->
<div class="z nex_fdtp">
	<div class="bd">
		<ul>
			<!--{loop $_G['forum']['recommendlist']['images'] $k $imginfo}-->
			<li>
				<a href="forum.php?mod=viewthread&tid=$imginfo[tid]" title="$imginfo[subject]" target="_blank"><img src="$imginfo[filename]"/></a>
			</li>
			<!--{/loop}-->
		</ul>
	</div>
	<div class="hd">
		<ul class="cl nex_tir"></ul>
	</div>
<script type="text/javascript">jQuery(".nex_fdtp").slide({titCell:".nex_tir",mainCell:".bd ul",autoPage:true,effect:"fold",autoPlay:true}); </script>
</div>
<ul class="z cl xe1 mbm nex_fdtl <!--{if !$_G['forum']['allowside']}-->k<!--{/if}-->">
<!--{else}-->
<ul class="z cl xe2 mbm nex_fdtl <!--{if !$_G['forum']['allowside']}-->k<!--{/if}-->">
<!--{/if}-->
<!--{eval unset($_G['forum']['recommendlist']['images']);}-->
<!--{loop $_G['forum']['recommendlist'] $rtid $recommend}-->
	<li class="nex_bgimg"><a href="forum.php?mod=viewthread&tid=$rtid" $recommend[subjectstyles] target="_blank">$recommend[subject]</a></li>
<!--{/loop}-->
</ul>



