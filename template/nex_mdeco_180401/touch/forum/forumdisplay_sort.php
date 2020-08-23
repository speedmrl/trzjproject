<?php echo 'Copyright@Neoconex星点互联';exit;?>
<div id="threadlist" class="nex_FenLei_List bm bmw"{if $_G['uid']} style="position: relative;"{/if}>
	<ul>
        <form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&action=moderate&fid=$_G[fid]&infloat=yes&nopost=yes">
            $sorttemplate['body']
            <!--{if $_G['forum']['ismoderator'] && $_G['forum_threadcount']}-->
                <!--{template forum/topicadmin_modlayer}-->
            <!--{/if}-->
        </form>
        <div class="clear"></div>
    </ul>
</div>
