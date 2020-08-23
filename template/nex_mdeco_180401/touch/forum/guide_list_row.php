<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if $list['threadcount']}-->
<ul>
	
	<!--{loop $list['threadlist'] $key $thread}-->
    <!--{eval include 'template/nex_mdeco_180401/touch/php/forum.php'}-->
		<li>
        	<div class="nex_guidelist">
            	<a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra">
                	<div class="nex_Guide_avator"><!--{avatar($thread[authorid],big)}--></div>
                    <div class="nex_Guide_others">
                    	<div class="nex_Guide_ot">
                        	<div class="nex_Guide_userName">$thread[author]</div>
                            <div class="nex_Guide_userLevel"><i>{$nex_levels}</i><span>{$usergroupID[grouptitle]}</span></div>
                            <div class="nex_Guide_from">{$list['forumnames'][$thread[fid]]['name']}</div>
                            <div class="clear"></div>
                        </div>
                        <div class="nex_Guide_ob">
                        	<!--{eval include 'template/nex_mdeco_180401/touch/php/forum.php'}-->
                            <!--{if $nex_bbs_province == '' && $nex_bbs_adds == ''}-->
                            <span>火星网友</span>
                            <!--{else}-->
                            <span>{$nex_bbs_province}{$nex_bbs_adds}</span>
                            <!--{/if}-->
                            <em></em>
                            <!--{if $nex_kidstatus == ''}-->
                            <span>未填写</span>
                            <!--{else}-->
                            <span>{$nex_kidstatus}</span>
                            <!--{/if}-->
                        </div>
                        <div class="nex_Guide_op">
                        	<h5>
                                <!--{if $thread['special'] == 1}-->
                                    <em class="threadType nex_thread_poll">{lang thread_poll}</em>
                                <!--{elseif $thread['special'] == 2}-->
                                    <em class="threadType nex_thread_trade">{lang thread_trade}</em>
                                <!--{elseif $thread['special'] == 3}-->
                                    <em class="threadType nex_thread_reward">{lang thread_reward}</em>
                                <!--{elseif $thread['special'] == 4}-->
                                    <em class="threadType nex_nex_thread_activity">{lang thread_activity}</em>
                                <!--{elseif $thread['special'] == 5}-->
                                    <em class="threadType nex_thread_debate">{lang thread_debate}</em>
                                
                                <!--{elseif $thread['digest'] > 0}-->
                                    <em class="threadAttrjh">精华</em>
                                <!--{/if}-->
                                <span  $thread[highlight]>{$thread[subject]}</span>
                            </h5>
                        </div>
                        <div class="nex_Guide_oy">
                        	<div class="nex_Guide_picscrolls">
                            	<!--{eval include 'template/nex_mdeco_180401/touch/php/nexpictys.php'}-->
                                <!--{loop $nex_threadlistspic $nex_threadsinpivs}-->
                                <!--{eval include 'template/nex_mdeco_180401/touch/php/nexpictys.php'}-->
                                <!--{if $attrss == '1'}-->
                                <div class="nex_Guide_attachpic_one" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                                <!--{/if}-->
                                <!--{if $attrss == '2'}-->
                                <div class="nex_Guide_attachpic_two" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                                <!--{/if}-->
                                <!--{if $attrss == '3'}-->
                                <div class="nex_Guide_attachpic_three" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                                <!--{/if}-->
                                <!--{if $attrss == '4'}-->
                                <div class="nex_Guide_attachpic_four" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                                <!--{/if}-->
                                <!--{if $attrss == '5'}-->
                                <div class="nex_Guide_attachpic_five" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                                <!--{/if}-->
                                
                                <!--{/loop}-->
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="nex_Guide_os">
                        	<span><!--{echo date("Y-m-d",{$nex_bbs_date})}--></span>
                            <span><i>{$thread[replies]}</i>回复</span>
                            <span><i>{$thread[recommends]}</i>点赞</span>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </a>
            </div>
        </li>
	<!--{/loop}-->
    <div class="nex_bbs_pagetops">亲！本页已经到底了~</div>
</ul>
<!--{else}-->
<p class="noData">{lang guide_nothreads}</p>
<!--{/if}-->


