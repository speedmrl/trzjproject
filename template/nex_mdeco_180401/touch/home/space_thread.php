<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<!-- header start -->
<div class="nex_uc_mylisttop">
	<i style="background:url(<!--{avatar($space[uid], big, true)}-->) center no-repeat; background-size:cover;"></i>
	<div class="nex_uc_mylisttopinter">
    	<a href="javascript:history.back()" class="nex_uc_mylisttop_back"></a>
		<span class="nex_uc_mylisttop_txt">{lang mythread}</span>
    </div>
</div>
<!-- header end -->
<!-- main threadlist start -->
<div class="nex_MY_threadlist nex_UC_mylists">
	<ul>
	<!--{if $list}-->
		<!--{loop $list $nexmythread}-->
			<li>
            	<a href="forum.php?mod=viewthread&tid=$nexmythread[tid]&extra=$extra">
                	<!--{eval include 'template/nex_mdeco_180401/touch/php/nex_digests.php'}-->
            		<!--{if $nex_attachs == '0'}-->
                    <div class="nex_UC_mylists_title">
                    	<!--{if $nexmythread['special'] == 1}-->
                            <em class="nex_thread_poll">{lang thread_poll}</em>
                        <!--{elseif $nexmythread['special'] == 2}-->
                            <em class="nex_thread_trade">{lang thread_trade}</em>
                        <!--{elseif $nexmythread['special'] == 3}-->
                            <em class="nex_thread_reward">{lang thread_reward}</em>
                        <!--{elseif $nexmythread['special'] == 4}-->
                            <em class="nex_nex_thread_activity">{lang thread_activity}</em>
                        <!--{elseif $nexmythread['special'] == 5}-->
                            <em class="nex_thread_debate">{lang thread_debate}</em>
                        <!--{elseif $nexmythread['digest'] > 0}-->
                            <em class="threadAttrjh">精华</em>
                        <!--{/if}-->
                        <span  $nexmythread[highlight]>{$nexmythread[subject]}</span>
                        <div class="clear"></div>
                    </div>
                    <div class="nex_mythreadsums">{$nex_mythreadsummary_echo}</div>
                    <div class="nex_mythread_btms">
                    	<div class="nex_mythread_btmsl">
                        	<span>{$nex_mythreadfrom}</span>
                            <em><!--{echo date("Y/m/d",{$nex_mythreaddate})}--></em>
                        </div>
                        <div class="nex_mythread_btmsr">
                        	<span class="nex_mythread_btmsrview"><em>{$nexmythread[views]}</em>浏览</span>
                            <span class="nex_mythread_btmsrreply"><em>{$nexmythread[replies]}</em>回复</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--{else}-->
                    <div class="nex_UC_mylists_title">
                    	<!--{if $nexmythread['special'] == 1}-->
                            <em class="nex_thread_poll">{lang thread_poll}</em>
                        <!--{elseif $nexmythread['special'] == 2}-->
                            <em class="nex_thread_trade">{lang thread_trade}</em>
                        <!--{elseif $nexmythread['special'] == 3}-->
                            <em class="nex_thread_reward">{lang thread_reward}</em>
                        <!--{elseif $nexmythread['special'] == 4}-->
                            <em class="nex_thread_activity">{lang thread_activity}</em>
                        <!--{elseif $nexmythread['special'] == 5}-->
                            <em class="nex_thread_debate">{lang thread_debate}</em>
                        <!--{elseif $nexmythread['digest'] > 0}-->
                            <em class="threadAttrjh">精华</em>
                        <!--{/if}-->
                        <em class="nex_mythread_picfrom">{$nex_mythreadfrom}</em>
                        <span  $nexmythread[highlight]>{$nexmythread[subject]}</span>
                        <div class="clear"></div>
                    </div>
                    <div class="nex_mythreadsums">{$nex_mythreadsummary_echo}</div>
                    <div class="nex_mythread_picview">
                        <div class="nex_pics_pl">
                            <!--{eval include 'template/nex_mdeco_180401/touch/php/nex_digests.php'}-->
                            <!--{loop $nex_threadlistspic $nex_threadsinpivs}-->
                            <!--{eval include 'template/nex_mdeco_180401/touch/php/nex_piv_styles.php'}-->
                            <!--{if $attrss == '1'}-->
                            <div class="nex_attachpic_one" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                            <!--{/if}-->
                            <!--{if $attrss == '2'}-->
                            <div class="nex_attachpic_two" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                            <!--{/if}-->
                            <!--{if $attrss == '3'}-->
                            <div class="nex_attachpic_three" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                            <!--{/if}-->
                            <!--{if $attrss == '4'}-->
                            <div class="nex_attachpic_four" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                            <!--{/if}-->
                            <!--{if $attrss == '5'}-->
                            <div class="nex_attachpic_five" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                            <!--{/if}-->
                            <!--{if $attrss == '6'}-->
                            <div class="nex_attachpic_six" style="background:url(data/attachment/forum/$nex_threadsinpivs[attachment]) center no-repeat; background-size:cover;"></div>
                            <!--{/if}-->
                            <!--{/loop}-->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="nex_mythread_btms">
                    	<div class="nex_mythread_btmsl">
                            <em><!--{echo date("Y/m/d",{$nex_mythreaddate})}--></em>
                        </div>
                        <div class="nex_mythread_btmsr">
                        	<span class="nex_mythread_btmsrview"><em>{$nexmythread[views]}</em>浏览</span>
                            <span class="nex_mythread_btmsrreply"><em>{$nexmythread[replies]}</em>回复</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--{/if}-->
                </a>
        	</li>
		<!--{/loop}-->
	<!--{else}-->
		<li>{lang no_related_posts}</li>
	<!--{/if}-->
	</ul>
	$multi
</div>
<!-- main threadlist end -->
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
