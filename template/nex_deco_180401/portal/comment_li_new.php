<?php echo 'Copyright@Neoconex星点互联';exit;?>

<li class="nex_Comments_lists">
    <div class="nex_Commontboxs">
    	<a name="comment_anchor_$comment[cid]"></a>
        <div id="comment_{$comment[cid]}_li" class="ptm pbm bbda cl nex_portnode">
            <div class="mbm nex_mbms nex_all_comments">
                <div class="portrait nex_all_portrait">
                	<a href="home.php?mod=space&uid=$comment[uid]" c="1"><!--{avatar($comment[uid],small)}--></a>
                </div>
                <div class="nex_portal_listtop">
                	<div class="nex_portallists_tops">
                    	<!--{if !empty($comment['uid'])}-->
                        <a href="home.php?mod=space&uid=$comment[uid]" class="username">$comment[username]</a>
                        <!--{else}-->
                            {lang guest}
                        <!--{/if}-->
                            <span class="xg1 xw0"><!--{date($comment[dateline])}--></span>
                        <!--{if $comment[status] == 1}--><b>({lang moderate_need})</b><!--{/if}-->
                    </div>
                    <div class="nex_editse">
                        <!--{if !isset($_G[makehtml])}--><a href="javascript:;" onclick="portal_comment_requote($comment[cid], '$article[aid]');">{lang quote}</a> <!--{/if}-->
                        <!--{if ($_G['group']['allowmanagearticle'] || $_G['uid'] == $comment['uid']) && $_G['groupid'] != 7 && !$article['idtype']}-->
                        <a href="portal.php?mod=portalcp&ac=comment&op=edit&cid=$comment[cid]" id="c_$comment[cid]_edit" onclick="showWindow(this.id, this.href, 'get', 0);">{lang edit}</a>
                        <a href="portal.php?mod=portalcp&ac=comment&op=delete&cid=$comment[cid]" id="c_$comment[cid]_delete" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a>
                        <!--{/if}-->
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="nex_commont_cons"><!--{if $_G[adminid] == 1 || $comment[uid] == $_G[uid] || $comment[status] != 1}-->$comment[message]<!--{else}--> {lang moderate_not_validate}<!--{/if}--></div>
        </div>
    </div>
</li>