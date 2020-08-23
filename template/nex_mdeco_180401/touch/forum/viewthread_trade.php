<?php echo 'Copyright@Neoconex星点互联';exit;?>
<div class="nex_commocial">
	<div class="nex_com_tops">
    	<div class="nex_com_tl">
            <!--{if !$post['message'] && (($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && $post['authorid'] == $_G['uid']))}-->
            <!--{else}-->
             $post[message]
            <!--{/if}-->
        </div>
        <div class="nex_com_tr">
        	<!--{if count($trades) > 1 || ($_G['uid'] == $_G['forum_thread']['authorid'] || $_G['group']['allowedittrade'])}-->
                {lang post_trade_totalnumber}: $tradenum
        <!--{/if}-->
        </div>
        <div class="clear"></div>
    </div>
    <div class="nex_com_listedf">
    <!--{if $tradenum}-->
        <!--{if $trades}-->
    	<ul>
        	<!--{loop $trades $key $trade}-->
            <li id="trade$trade[pid]" class="nex_coM_box">
            	<a href="forum.php?mod=viewthread&do=tradeinfo&tid=$_G[tid]&pid=$trade[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}">
            	<div class="nex_coM_pic">
                	<div class="nex_coM_Picins">
                        <!--{if $trade['thumb']}-->
                            <img src="$trade[thumb]" width="{if $trade[width] > 90}90{else}$trade[width]{/if}" _width="140" _height="180" alt="$trade[subject]" />
                        <!--{else}-->
                            <img src="{IMGDIR}/nophotosmall.gif" width="140" height="180" alt="$trade[subject]" />
                        <!--{/if}-->
                        <span>
                            剩余
                            <!--{if $trade[closed]}-->
                                <em>{lang trade_timeout}</em>
                            <!--{elseif $trade[expiration] > 0}-->
                                {$trade[expiration]}{lang days}{$trade[expirationhour]}{lang trade_hour}
                            <!--{elseif $trade[expiration] == -1}-->
                                <em>{lang trade_timeout}</em>
                            <!--{else}-->
                                &nbsp;
                            <!--{/if}-->
                        </span>
                    </div>
                </div>
                <div class="nex_coM_Ifosd">
                	<h4>$trade[subject]</h4>
                    <div class="nex_coM_itemsd">
                        <!--{if $trade['quality'] == 1}--><span>{lang trade_new}</span><!--{/if}-->
                        <!--{if $trade['quality'] == 2}--><span>{lang trade_old}</span><!--{/if}-->
                        {lang trade_type_buy}
                    </div>
                    <div class="nex_coM_itemsb">
                    	<p>
                    	<!--{if $trade[price] > 0}-->
                            <i>￥</i><em>$trade[price]</em>
                        <!--{/if}-->
                        <!--{if $_G['setting']['creditstransextra'][5] != -1 && $trade[credit]}-->
                            <!--{if $trade['price'] > 0}-->&nbsp;&nbsp;{lang trade_additional} <!--{/if}--><em>$trade[credit]</em>&nbsp;{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][5]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][5]][title]}
                        <!--{/if}-->
                        </p>
                        <p class="xg1">
                            <!--{if $trade['costprice'] > 0}-->
                                原价：<del>$trade[costprice] {lang payment_unit}</del>
                            <!--{/if}-->
                            <!--{if $_G['setting']['creditstransextra'][5] != -1 && $trade['costcredit'] > 0}-->
                                <del><!--{if $trade['costprice'] > 0}-->{lang trade_additional} <!--{/if}-->$trade[costcredit] {$_G[setting][extcredits][$_G['setting']['creditstransextra'][5]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][5]][title]}</del>
                            <!--{/if}-->
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
                </a>
               
            </li>
            <!--{/loop}-->
        <!--{/if}-->
        </ul>
        <div id="postmessage_$post[pid]">$post[counterdesc]</div>
    <!--{else}-->
        <div class="locked">{lang trade_nogoods}</div>
    <!--{/if}-->
    </div>
    
</div>