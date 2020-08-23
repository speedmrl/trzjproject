<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<!-- header start -->
<div class="nex_mypm_top" style="border-bottom:0;">
    <a href="javascript:history.back()" class="z nexback"></a>
    <span class="category">
        我的好友
    </span>
    <div class="y nex_postbbsbtn"><a href="forum.php?mod=misc&action=nav"></a></div>
</div>
<!-- header end -->

<div class="nex_friendslisT">
  <div class="nex_IOlistbox">
  <span class="nex_user_tt">{lang friend_list}</span>
			<!--{if $space[self]}-->
                <!--{if $list}-->
                    <div id="friend_ul">
                        <ul class="buddy cl">
                        <!--{loop $list $key $value}-->
                            <li id="friend_{$value[uid]}_li">
                                <div class="nex_user_fr_axo">
                                    <a href="home.php?mod=space&uid=$value[uid]&do=profile&mobile=2" c="1">
                                        <!--{if $ols[$value[uid]]}--><em class="gol" title="{date($ols[$value[uid]], 'H:i')}">{lang online}</em><!--{/if}-->
                                        <!--{avatar($value[uid],small)}-->
                                    </a>
                                </div>
                                <div class="nex_user_fr_axr">
                                    <h4>
                                        <a href="home.php?mod=space&uid=$value[uid]"{eval g_color($value[groupid]);}>$value[username]</a>
                                        <!--{eval g_icon($value[groupid]);}-->
                                        <!--{if $value['videostatus']}-->
                                            <img src="{IMGDIR}/videophoto.gif" alt="videophoto" class="vm" />
                                        <!--{/if}-->
                                        <!--{if $space[self]}-->
                                            <span id="friend_note_$value[uid]" class="note xw0" title="$value[note]">$value[note]</span>
                                        <!--{/if}-->
                                    </h4>
                                    <p class="maxh">$value[recentnote]</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                        <!--{/loop}-->
                        </ul>
                    </div>
                    <!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
                    
                <!--{else}-->
                        <div class="emp">{lang no_friend_list}</div>
                <!--{/if}-->
                <script type="text/javascript">
                    function succeedhandle_followmod(url, msg, values) {
                        var fObj = $(values['from']+values['fuid']);
                        if(values['type'] == 'add') {
                            fObj.innerHTML = '{lang follow_del}';
                            fObj.className = 'flw_btn_unfo';
                            fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid']+'&from='+values['from'];
                        } else if(values['type'] == 'del') {
                            fObj.innerHTML = '{lang follow_add}TA';
                            fObj.className = 'flw_btn_fo';
                            fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid='+values['fuid']+'&from='+values['from'];
                        }
                    }
                </script>

    <!--{else}-->
        <div class="emp">{lang no_friend_list}</div>
    <!--{/if}-->

	</div>
</div>
<!--{template common/footer}-->
