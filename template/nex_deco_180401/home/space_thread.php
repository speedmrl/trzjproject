<?php echo 'Copyright@Neoconex星点互联';exit;?>
{eval
	$filter = array( 'common' => '{lang have_posted}', 'save' => '{lang draft}', 'close' => '{lang closed}', 'aduit' => '{lang pending}', 'ignored' => '{lang ignored}', 'recyclebin' => '{lang recyclebin}');
	$_G[home_tpl_spacemenus][] = "<a href=\"home.php?mod=space&uid=$space[uid]&do=thread&view=me\">{lang they_thread}</a>";
}

<!--{if $diymode}-->
	<!--{if $_G[setting][homepagestyle]}-->
		<!--{subtemplate home/space_header}-->
		<div id="ct" class="ct2 wp cl">
			<div class="mn">
				<div class="bm">
					<div class="bm_h">
						<!--{if $space[self]}--><span class="xi2 y"><a href="forum.php?mod=misc&action=nav" onclick="showWindow('nav', this.href, 'get', 0)" class="addnew">{lang posted}</a></span><!--{/if}-->
						<h1 class="mt">
							<!--{if $_GET[type] == 'reply'}-->
							<span class="xs1 xw0"><a href="home.php?mod=space&do=thread&view=me&type=thread&uid=$space[uid]&from=space">{lang topic}</a><span class="pipe">|</span></span>{lang reply}
							<!--{else}-->
							{lang topic}<span class="xs1 xw0"><span class="pipe">|</span><a href="home.php?mod=space&do=thread&view=me&type=reply&uid=$space[uid]&from=space">{lang reply}</a></span>
							<!--{/if}-->
						</h1>
					</div>
				<div class="bm_c">
	<!--{else}-->
		<!--{template common/header}-->
		<div id="pt" class="bm cl">
			<div class="z">
				<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]&do=blog&view=me">{lang thread}</a>
			</div>
		</div>
		<style id="diy_style" type="text/css"></style>
		<div class="wp">
			<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
		</div>
		<!--{template home/space_menu}-->
		<div id="ct" class="ct1 wp cl">
			<div class="mn">
				<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
				<div class="bm bw0">
					<div class="bm_c">
	<!--{/if}-->
<!--{else}-->
	<!--{template common/header}-->
	<div id="pt" class="bm cl">
		<div class="z">
			<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
			<!--{if $_G[setting][homestyle]}--><a href="home.php">$_G[setting][navs][4][navname]</a> <em>&rsaquo;</em> <!--{/if}-->
			<a href="home.php?mod=space&do=blog">{lang thread}</a>
		</div>
	</div>
	<style id="diy_style" type="text/css"></style>
	<div class="wp">
		<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
	</div>
	<div id="ct" class="ct2_a wp cl">
	<!--{if $_G[setting][homestyle]}-->
		<div class="appl">
			<!--{subtemplate common/userabout}-->
		</div>
		<div class="mn pbw">
			<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
			<div class="bm bw0">
				<ul class="tb cl">
					<li$actives[we]><a href="home.php?mod=space&do=thread&view=we">{lang friend_post}</a></li>
					<li$actives[me]><a href="home.php?mod=space&do=thread&view=me">{lang my_post}</a></li>
				</ul>
			</div>
	<!--{else}-->
		<div class="appl">
			<div class="tbn">
				<h2 class="mt bbda">{lang thread}</h2>
				<ul>
					<li$actives[we]><a href="home.php?mod=space&do=thread&view=we">{lang friend_post}</a></li>
					<li$actives[me]><a href="home.php?mod=space&do=thread&view=me">{lang my_post}</a></li>
				</ul>
			</div>
		</div>
		<div class="mn pbw">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
	<!--{/if}-->
<!--{/if}-->
		
		<!--{if !$diymode && $space[self]}-->
			<!--{if $_GET['view'] == 'me'}-->
			<p class="tbmu bw0">
				<!--{if $viewtype != 'postcomment'}-->
					<span class="y">
					<a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&type=$viewtype&from=$_GET[from]&filter=" {if !$_GET[filter]}class="a"{/if}>{lang all}</a>
					<!--{loop $filter $key $name}--><span class="pipe">|</span><a href="home.php?mod=space&do=thread&view=me&type=$viewtype&from=$_GET[from]&filter=$key" {if $key == $_GET[filter]}class="a"{/if}>$name</a><!--{/loop}--> &nbsp;
						<select name="forumlist" id="forumlist" class="ps vm" onchange="viewforumthread(this.value);" style="width: 120px; word-wrap: normal;">
							<option value="0">{lang follow_select_forum}</option>
							$forumlist
						</select>
					</span>
				<!--{/if}-->
				<a href="home.php?mod=space&do=thread&view=me&type=thread" $orderactives[thread]>{lang topic}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=thread&view=me&type=reply" $orderactives[reply]>{lang reply}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=thread&view=me&type=postcomment" $orderactives[postcomment]>{lang post_comment}</a>
				<!--{if $viewtype != 'reply' && $viewtype != 'postcomment'}-->&nbsp; <input type="text" id="searchmypost" class="px vm" size="15" /> <button class="pn vm" onclick="searchpostbyusername($('searchmypost').value, '$_G[username]');"><em>{lang search}</em></button><!--{/if}-->
			</p>
			<!--{elseif $_GET['view'] == 'all'}-->
			<p class="tbmu bw0">
				<a href="home.php?mod=space&do=thread&view=all&order=dateline" $orderactives[dateline]>{lang newest_thread}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=thread&view=all&order=hot" $orderactives[hot]>{lang top_thread}</a>
			</p>
			<!--{/if}-->
		<!--{/if}-->
		
		<!--{if $diymode && !$_G[setting][homepagestyle] }-->
			
            <p class="tbmu nex_Mythreads_Tuiys">
				<a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&from=space&type=thread" $orderactives[thread]>{lang topic}</a>
				<span class="pipe">|</span>
				<a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&from=space&type=reply" $orderactives[reply]>{lang reply}</a>
                <a onClick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">+快速发帖</a>
			</p>
            
		<!--{/if}-->
		
		<!--{if $userlist}-->
			<p class="tbmu bw0">
				{lang view_by_friend}
				<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
					<option value="">{lang all_friends}</option>
					<!--{loop $userlist $value}-->
					<option value="$value[fuid]"{$fuid_actives[$value[fuid]]}>$value[fusername]</option>
					<!--{/loop}-->
				</select>
			</p>
		<!--{/if}-->
		<div class="tl">
			<form method="post" autocomplete="off" name="delform" id="delform" action="home.php?mod=space&do=thread&view=all&order=dateline" onsubmit="showDialog('{lang del_select_thread_confirm}', 'confirm', '', '$(\'delform\').submit();'); return false;">
					<input type="hidden" name="formhash" value="{FORMHASH}" />
					<input type="hidden" name="delthread" value="true" />

					<table cellspacing="0" cellpadding="0">
						<!--注释
                        <tr class="th">
							<td class="icn">&nbsp;</td>
							<!--{if $_GET['view'] == 'all' && $pruneperm && !$_GET['archiveid']}-->
								<td class="o">&nbsp;</td>
							<!--{/if}-->
							<th><!--{if $viewtype == 'reply' || $viewtype == 'postcomment'}-->{lang post}<!--{else}-->{lang topic}<!--{/if}--></th>
							<td class="frm">{lang forum}<!--{if $actives[me] && $space['uid'] == $_G['uid']}-->/{lang group}<!--{/if}--></td>
							<!--{if $viewtype != 'postcomment'}-->
								<!--{if !$actives[me]}-->
								<td class="by">{lang author}</td>
								<!--{/if}-->
								<td class="num">{lang replies}</td>
								<!--{if $actives[me]}-->
								<td class="by"><cite>{lang last_post}</cite></td>
								<!--{/if}-->
							<!--{/if}-->
						</tr>
                        注释-->

					<!--{if $list}-->
                    	<div class="nex_Threads_List">
                            <ul>
                            <!--{loop $list $stid $thread}-->
                                <li>
                                	<div class="nex_Mythreads_pic">
                                    	<!--{eval include 'template/nex_deco_180401/php/nex_picstyle.php'}-->
                                        <!--{if $nex_attachs == '0'}-->
                                    	<div class="nex_Mythreadspicbx_emps">
                                        	<img src="$_G['style'][styleimgdir]/home/unloading.jpg" />
                                        </div>
                                        <!--{else}-->
                                        <!--{eval include 'template/nex_deco_180401/php/nex_picstyle.php'}-->
                                       	<div class="nex_Mythreadspicbx">
                                        	<!--{loop $nex_formatpic $nex_picpuin}-->
                                        	<a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra" target="_blank" style=" background:url(data/attachment/forum/$nex_picpuin[attachment]) center no-repeat; background-size:cover;">
                                            </a>
                                            <!--{/loop}-->
                                        </div>
                                        <!--{/if}-->
                                    </div>
                                    <div class="nex_MyThreads_box">
                                    	<h3 class="nex_My_threads_Title">
                                        	<a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra" target="_blank">
                                                <!--{if $thread['special'] == 1}-->
                                                    <span class="threadType">{lang thread_poll}</span>
                                                <!--{elseif $thread['special'] == 2}-->
                                                    <span class="threadType">{lang thread_trade}</span>
                                                <!--{elseif $thread['special'] == 3}-->
                                                    <span class="threadType">{lang thread_reward}</span>
                                                <!--{elseif $thread['special'] == 4}-->
                                                    <span class="threadType">{lang thread_activity}</span>
                                                <!--{elseif $thread['special'] == 5}-->
                                                    <span class="threadType">{lang thread_debate}</span>
                                                <!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
                                                    <span class="threadAttr">$_G[setting][threadsticky][3-$thread[displayorder]]</span>
                                                <!--{elseif $thread['digest'] > 0}-->
                                                    <span class="threadAttrjh">精华</span>
                                                <!--{/if}-->
                                                <em  $thread[highlight]>{$thread[subject]}</em>
                                            </a>
                                        </h3>
                                    	<!--{eval include 'template/nex_deco_180401/php/nex_multiops.php'}-->
                                        <div class="nex_threadscontents"><!--{echo cutstr($summary_echo,180)}--></div>
                                        <div class="nex_Mythreads_cent">
                                            <a href="home.php?mod=space&uid=$thread[authorid]">
                                                <div class="nex_Mythreads_avatar"><!--{avatar($thread[authorid],big)}--></div>
                                                <div class="nex_Mythreads_inFors">
                                                    <div class="nex_Mythreads_Names">$thread[author]</div>
                                                    <p>$thread[dateline]</p>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="nex_Mythread_Drts">
                                        	 <span class="views icon"><!--{if $thread['isgroup'] != 1}-->$thread[views]<!--{else}-->{$groupnames[$thread[tid]][views]}<!--{/if}--></span>
                                             <span class="replies icon">{$thread[replies]}</span>
                                             <span class="recommends icon">{$thread[recommends]}</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>	
                            <!--{/loop}-->
                            	<div class="clear"></div>
                            </ul>
                        </div>
					<!--{else}-->
						<tr>
							<td colspan="{if $viewtype != 'postcomment'}{if ($_GET['view'] == 'all' && $pruneperm && !$_GET['archiveid'])}6{else}5{/if}{else}3{/if}"><p class="emp">{lang no_related_posts}</p></td>
						</tr>
					<!--{/if}-->
					</table>

					<!--{if $_GET['view'] == 'all' && $pruneperm && !$_GET['archiveid'] && $list}-->
						<p class="mtm pns">
							<label for="chkall" onclick="checkall(this.form, 'moderate')"><input type="checkbox" name="chkall" id="chkall" class="pc vm" />{lang select_all}</label>
							<button type="submit" name="delsubmit" value="true" class="pn vm"><em>{lang del_select_thread}</em></button>
						</p>
					<!--{/if}-->
				</form>

				<!--{if $hiddennum}-->
					<p class="mtm">{lang hide_thread}</p>
				<!--{/if}-->
			</div>
			<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->		
		
		<script type="text/javascript">
		function fuidgoto(fuid) {
			window.location.href = 'home.php?mod=space&do=thread&view=we&fuid='+fuid;
		}
		function viewforumthread(fid) {
			window.location.href = '{$forumurl}&fid='+fid;
		}
		</script>
		
		<!--{if !$_G[setting][homepagestyle]}--><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><!--{/if}-->

		<!--{if $diymode}-->
					</div>
				</div>
			<!--{if $_G[setting][homepagestyle]}-->
			</div>
			<div class="sd">
				<!--{subtemplate home/space_userabout}-->
			<!--{/if}-->
		<!--{/if}-->
		</div>
	</div>

<!--{if !$_G[setting][homepagestyle]}-->
	<div class="wp mtn">
		<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
	</div>
<!--{/if}-->

<!--{template common/footer}-->