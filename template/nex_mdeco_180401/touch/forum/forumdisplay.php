<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<!-- header start -->
<script type="text/javascript">
$(function(){     
    var cubuk_seviye = $(document).scrollTop(); 
var header_yuksekligi = $('.nex_bbstopnav_viewthread').outerHeight();
    $(window).scroll(function() {  
var kaydirma_cubugu = $(document).scrollTop();  
if (kaydirma_cubugu > header_yuksekligi){$('.nex_bbstopnav_viewthread').addClass('nex_header_top');}   
        else {$('.nex_bbstopnav_viewthread').removeClass('nex_header_top');}  
        if (kaydirma_cubugu > cubuk_seviye){$('.nex_bbstopnav_viewthread').removeClass('nex_header_topx');}   
        else {$('.nex_bbstopnav_viewthread').addClass('nex_header_topx');} 
        cubuk_seviye = $(document).scrollTop();   
     });  
});  
</script>
<!-- header end -->
<!--{if $_G[forum][banner] && !$subforumonly}-->
<div class="nex_bbsbox" style="background:url($_G[forum][banner]) center no-repeat; background-size:cover;">
    <b></b>
    <div class="nex_bbstopnav_displaylist">
        <div class="y nex_postbbsbtn"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]"></a></div>
        <a href="forum.php?forumlist=1" class="z nexback"></a>
    </div>
    <div class="nex_bkjsbg">
        <div class="nex_bbsiners">
            <div class="nex_bbslist_icon">
                <!--{if $_G[forum][icon]}-->
                <!--{eval require_once libfile('function/group');}-->
                <img src="data/attachment/common/$_G[forum][icon]" alt="$_G[forum][name]" />
                <!--{else}-->
                <img src="$_G[style][styleimgdir]/bbs/forum_icon.jpg" alt="$_G[forum][name]" />
                <!--{/if}-->
            </div>	
            <div class="nex_bbslist_infos">
                <h3>$_G['forum'][name]</h3>
                <p>
                    <span>{lang index_today}: $_G[forum][todayposts]</span>
                    <span>{lang index_threads}: $_G[forum][threads]</span>
                    <!--{if $_G[forum][rank]}-->
                    <span>{lang rank}: $_G[forum][rank]</span>
                    <!--{/if}-->
                </p>
                <a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum" id="a_favorite" class="nex_sc" onclick="showWindow(this.id, this.href, 'get', 0);">
                <span id="number_favorite_num">$_G[forum][favtimes]</span>
                <span id="number_favorite" {if !$_G[forum][favtimes]} {/if}>关注</span>
                </a>
                <!--{if $_G['page'] == 1 && $_G['forum']['rules']}-->
                <div class="nex_bkintroed">
                    <div id="forum_rules_{$_G[fid]}" style="$collapse['forum_rules'];">
                        <div class="nex_guize">$_G['forum'][rules]</div>
                    </div>
                </div>
                <!--{else}-->
                <div class="nex_guize">您还未设置本版块规则说明文字，如需设置，请登陆后台论坛栏目，在该板块设置下方填写本版块规则。</div>
                <!--{/if}-->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--{else}-->
<div class="nex_bkjsbg_none">
    <b></b>
    <div class="nex_bbstopnav_displaylist">
        <div class="y nex_postbbsbtn"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]"></a></div>
        <a href="forum.php?forumlist=1" class="z nexback"></a>
    </div>
    <div class="nex_bkjsbg">
        <div class="nex_bbsiners">
            <div class="nex_bbslist_icon">
                <!--{if $_G[forum][icon]}-->
                <!--{eval require_once libfile('function/group');}-->
                <img src="data/attachment/common/$_G[forum][icon]" alt="$_G[forum][name]" />
                <!--{else}-->
                <img src="$_G[style][styleimgdir]/bbs/forum_icon.jpg" alt="$_G[forum][name]" />
                <!--{/if}-->
            </div>	
            <div class="nex_bbslist_infos">
                <h3>$_G['forum'][name]</h3>
                <p>
                    <span>{lang index_today}: $_G[forum][todayposts]</span>
                    <span>{lang index_threads}: $_G[forum][threads]</span>
                    <!--{if $_G[forum][rank]}-->
                    <span>{lang rank}: $_G[forum][rank]</span>
                    <!--{/if}-->
                </p>
                <a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum" id="a_favorite" class="nex_sc" onclick="showWindow(this.id, this.href, 'get', 0);">
                <span id="number_favorite_num">$_G[forum][favtimes]</span>
                <span id="number_favorite" {if !$_G[forum][favtimes]} {/if}>关注</span>
                </a>
                <!--{if $_G['page'] == 1 && $_G['forum']['rules']}-->
                    <div class="nex_bkintroed">
                        <div id="forum_rules_{$_G[fid]}" style="$collapse['forum_rules'];">
                            <div class="nex_guize">$_G['forum'][rules]</div>
                        </div>
                    </div>
                    <!--{else}-->
                <div class="nex_guize">您还未设置本版块规则说明文字，如需设置，请登陆后台论坛栏目，在该板块设置下方填写本版块规则。</div>
                <!--{/if}-->
                
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--{/if}-->
<div class="nex_bbs_top_select">
    <ul>
        <li>
            <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter={if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="{if $_GET['filter'] == ''}on{/if}">全部</a>
        </li>
        <li>
            <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=lastpost&orderby=lastpost$forumdisplayadd[lastpost]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="{if $_GET['filter'] == 'lastpost'}on{/if}">{lang latest}</a>
        </li>
        <li>
            <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=heat&orderby=heats$forumdisplayadd[heat]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="{if $_GET['filter'] == 'heat'}on{/if}">{lang order_heats}</a>
        </li>
        <li>
            <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=digest&digest=1$forumdisplayadd[digest]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="{if $_GET['filter'] == 'digest'}on{/if}">{lang digest_posts}</a>
        </li>
        <div class="clear"></div>
    </ul>
</div>
<!--{if $subexists && $_G['page'] == 1}-->
<div class="nex_sub_bk">
	<h5>子版块</h5>
	<ul>
        <!--{loop $sublist $sub}-->
        <li>
            <div class="nex_sublisticons">
            	<div class="nex_sub_list_Icon">
                <!--{if $sub[icon]}-->
                    <a href="forum.php?mod=forumdisplay&fid={$sub[fid]}">$sub[icon]</a>
                <!--{else}-->
                	<a href="forum.php?mod=forumdisplay&fid={$sub[fid]}">
                    	<img src="{IMGDIR}/forum{if $sub[folder]}_new{/if}.gif" alt="$sub[name]" />
                    </a>
                <!--{/if}-->
                </div>
                <div class="nex_sub_list_Names"><a href="forum.php?mod=forumdisplay&fid={$sub[fid]}">{$sub['name']}</a></div>
                <div class="clear"></div>
            </div>
        </li>
        <!--{/loop}-->
        <div class="clear"></div>
    </ul>
</div>
<!--{/if}-->
<!--{eval include 'template/nex_mdeco_180401/touch/php/top.php'}-->
<div class="nex_Putintops">
	<ul>
	<!--{loop $nex_putin_tops $key $nex_get_putins}-->
		<li><a href="forum.php?mod=viewthread&tid=$nex_get_putins[tid]&extra=$extra"><em>置顶帖</em>{$nex_get_putins[subject]}</a></li>
	<!--{/loop}-->
	</ul>
</div>
<!--{hook/forumdisplay_top_mobile}-->
<!-- main threadlist start -->
<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0}-->
<div class="nex_sortTypes">
    <ul>
        <!--{hook/forumdisplay_threadtype_inner}-->
        <li id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang forum_viewall}</a></li>
        <!--{if $_G['forum']['threadtypes']}-->
            <!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
                <!--{if $_GET['typeid'] == $id}-->
                <li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
                <!--{else}-->
                <li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
                <!--{/if}-->
            <!--{/loop}-->
        <!--{/if}-->
    
        <!--{if $_G['forum']['threadsorts']}-->
            <!--{if $_G['forum']['threadtypes']}--><li><span class="pipe">|</span></li><!--{/if}-->
            <!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
                <!--{if $_GET['sortid'] == $id}-->
                <li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['typeid']}&filter=typeid&typeid=$_GET['typeid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
                <!--{else}-->
                <li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
                <!--{/if}-->
            <!--{/loop}-->
        <!--{/if}-->
        <!--{hook/forumdisplay_filter_extra}-->
    </ul>
</div>
<div class="clear"></div>
<script type="text/javascript">showTypes('thread_types');</script>
<!--{/if}-->
<!--{if !$subforumonly}-->
<!--{if $quicksearchlist && !$_GET['archiveid']}-->
<!--{template forum/search_sortoption}-->
<!--{/if}-->
<!--{eval include 'template/nex_mdeco_180401/touch/php/picstylejustice.php'}-->
<!--{if $picstyle == '1'}-->
<div class="threadlist nex_threadlistpics">
    <ul class="nexwaterfall">
        <!--{if $_G['forum_threadcount']}-->
            <!--{loop $_G['forum_threadlist'] $key $thread}-->
            <!--{eval include 'template/nex_mdeco_180401/touch/php/picstyle.php'}-->
                <!--{if !$_G['setting']['mobile']['mobiledisplayorder3'] && $thread['displayorder'] > 0}-->
                    {eval continue;}
                <!--{/if}-->
                <!--{if $thread['displayorder'] > 0 && !$displayorder_thread}-->
                    {eval $displayorder_thread = 1;}
                <!--{/if}-->
                <!--{if $thread['moved']}-->
                    <!--{eval $thread[tid]=$thread[closed];}-->
                <!--{/if}-->
                <li class="nexwateritems">
                    <a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra" $thread[highlight] >	
                        <!--{hook/forumdisplay_thread_mobile $key}-->
                        <div class="nex_waterfallpic">
                        <!--{eval include 'template/nex_mdeco_180401/touch/php/picstyle.php'}-->
                        <!--{if $nextupian}-->
                            <img src="data/attachment/forum/$nextupian" style="width:100%;">
                        <!--{/if}-->
                        <!--{eval include 'template/nex_mdeco_180401/touch/php/forum.php'}-->
                        <em>{$nextotlepivs}张</em>
                        </div>
                        <h5 class="threadSubject">
                            
                            <span  $thread[highlight]>{$thread[subject]}</span>
                        </h5>
                        
                     </a>
                </li>
            <!--{/loop}-->
        <!--{else}-->
        <li>{lang forum_nothreads}</li>
        <!--{/if}-->
    </ul>
</div>
<!--{else}-->
<!--{if empty($_G['forum']['sortmode'])}-->
<div class="threadlist nex_threadlisttxt">
	<ul>
	<!--{if $_G['forum_threadcount']}-->
		<!--{loop $_G['forum_threadlist'] $key $thread}-->
        	<!--{eval include 'template/nex_mdeco_180401/touch/php/forum.php'}-->
			<!--{if !$_G['setting']['mobile']['mobiledisplayorder3'] && $thread['displayorder'] > 0}-->
				{eval continue;}
			<!--{/if}-->
			<!--{if $thread['displayorder'] > 0 && !$displayorder_thread}-->
				{eval $displayorder_thread = 1;}
			<!--{/if}-->
			<!--{if $thread['moved']}-->
				<!--{eval $thread[tid]=$thread[closed];}-->
			<!--{/if}-->
            <li>
                <div class="threadListTit">
                    <a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra">
                    	<div class="nex_bbs_threadtops">
                        	<div class="nex_bbs_avators"><!--{avatar($thread[authorid],big)}--></div>
                            <div class="nex_bbs_authorinfos">
                            	<div class="nex_bbs_infomation">
                                    <div class="nex_bbs_info_tops">
                                        <div class="nex_user_Names">$thread[author]</div>
                                        <div class="nex_Scores"><i></i><span>{$nex_scores}</span></div>
                                        <div class="nex_vt_lvnid_list"><i>{$nex_levels}</i><span>{$usergroupID[grouptitle]}</span></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="nex_bbs_info_btms">
                                        <!--{if $nex_bbs_province == '' && $nex_bbs_adds == ''}-->
                                        <span>火星网友</span>
                                        <!--{else}-->
                                        <span>{$nex_bbs_province}{$nex_bbs_adds}</span>
                                        <!--{/if}-->
                                        <em></em>
                                        <!--{if $nex_kidstatus == ''}-->
                                        <span>未知</span>
                                        <!--{else}-->
                                        <span>{$nex_kidstatus}</span>
                                        <!--{/if}-->
                                    </div>
                            	</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="nex_bbs_threadmids">
                        	<h3 class="threadSubject threadSubject_gds">
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
                                <div class="clear"></div>
                            </h3>
                            <div class="nex_threadscontents"><!--{echo cutstr($summary_echo,60)}--></div>
                        </div>
                        <div class="nex_bbs_threadbtms">
                        	<div class="nex_pics_Paixu">
                            	<!--{eval include 'template/nex_mdeco_180401/touch/php/nexpictys.php'}-->
                                <!--{loop $nex_threadlistspic $nex_threadsinpivs}-->
                                <!--{eval include 'template/nex_mdeco_180401/touch/php/nexpictys.php'}-->
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
                        <div class="nex_Guiderolls_terms">
                            <span class="views icon"><em><!--{if $thread['isgroup'] != 1}-->$thread[views]<!--{else}-->{$groupnames[$thread[tid]][views]}<!--{/if}--></em>阅读</span>
                            <span class="replies icon"><em>{$thread[replies]}</em>回复</span>
                            <span class="zans icon"><em>{$thread[recommends]}</em>点赞</span>
                            <span class="dates icon"><em><!--{echo date("m/d",{$nex_bbs_date})}--></em>发布</span>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        
                    </a>
                </div>
            </li>
		<!--{/loop}-->
		<div class="nex_bbs_pagetops">亲！本页已经到底了~</div>
	<!--{else}-->
		<li class="noData">
        	<div class="nex_noDate_piv"><img src="./template/nex_mdeco_180401/neoconex/bbs/noDate.png" /></div>	
            {lang forum_nothreads}
        </li>
	<!--{/if}-->
	</ul>
</div>
<!--{else}-->
<!--{subtemplate forum/forumdisplay_sort}-->
<style type="text/css">
.nex_bbs_top_select{ display:none;}
</style>
<!--{/if}-->
<!--{/if}-->
$multipage
<!--{/if}-->
<!-- main threadlist end -->
<!--{hook/forumdisplay_bottom_mobile}-->
<div class="pullrefresh" style="display:none;"></div>
<!--{template common/footer}-->
