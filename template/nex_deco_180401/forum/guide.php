<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<style type="text/css">
.nex_guide_top{ height:30px; line-height:30px; margin-bottom:10px; border-bottom:1px solid #eee; padding-bottom:10px;}
.nex_guide_top h1{ float:left; font-size:18px!important; color:#666; font-weight:400;height:30px; line-height:30px;}
.nex_guide_top a{ display:block; width:80px;height:30px; line-height:30px; background:#6ABF4B;font-size:12px; color:#fff; text-align:center; float:right;}
</style>
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a><!--{if helper_access::check_module('guide')}--><em>&raquo;</em><a href="forum.php?mod=guide&view=index">{lang guide}</a><!--{/if}-->$navigation
	</div>
</div>
<div class="boardnav">
	<div id="ct" class="wp cl{if $_G['forum']['allowside']} ct2{/if}"{if $leftside} style="margin-left:{$_G['leftsidewidth_mwidth']}px"{/if}>
		<div class="mn">
			<div class="nex_guide">
				<div class="nex_guide_top">
					
					<h1 class="xs2">
						$lang['guide_'.$view]
					</h1>
                    <a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">发新帖</a>
                    <div class="clear"></div>
				</div>
				
			</div>
			
			<ul id="thread_types" class="ttp bm cl">
				<li $currentview['hot']><a href="forum.php?mod=guide&view=hot">{lang guide_hot}</a></li>
				<li $currentview['digest']><a href="forum.php?mod=guide&view=digest">{lang guide_digest}</a></li>
				<li $currentview['new']><a href="forum.php?mod=guide&view=new">{lang guide_new}</a></li>
				<li $currentview['newthread']><a href="forum.php?mod=guide&view=newthread">{lang guide_newthread}</a></li>
				<li $currentview['sofa']><a href="forum.php?mod=guide&view=sofa">{lang guide_sofa}</a></li>
				<li $currentview['my']><a id="filter_special" href="forum.php?mod=guide&view=my" onmouseover="showMenu(this.id)">{lang guide_my}</a></li>
				<!--{hook/guide_nav_extra}-->
			</ul>
			<!--{hook/guide_top}-->
			<!--{if $view == 'index'}-->
				<!--{loop $data $key $list}-->
				<div class="bm bmw">
					<div class="bm_h">
						<a href="forum.php?mod=guide&view=$key" class="y xi2">{lang more} &raquo;</a>
						<h2>
							<!--{if $key == 'hot'}-->{lang guide_hot}<!--{elseif $key == 'digest'}-->{lang guide_digest}<!--{elseif $key == 'newthread'}-->{lang guide_newthread}<!--{elseif $key == 'new'}-->{lang guide_new}<!--{elseif $key == 'my'}-->{lang guide_my}<!--{/if}-->
						</h2>
					</div>
					 <div class="bm_c">
					 	<div class="xl xl2 cl">
					 		<!--{if $list['threadcount']}-->
					 			<!--{eval $i=0;}-->
					 			<!--{loop $list['threadlist'] $thread}-->
					 			<!--{eval $i++;$newtd=$i%2;}-->
					 			<li{if !$newtd} class="xl2_r"{/if}>
						 			<em>
							 			<!--{if $key == 'hot'}--><span class="xi1">$thread['heats']{lang guide_attend}</span><!--{/if}-->
							 			<!--{if $key == 'new'}-->$thread['lastpost']<!--{/if}-->
						 			</em>
						 			
						 			<i>&middot; <a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra"$thread[highlight] target="_blank">$thread[subject]</a></i>&nbsp;<span class="xg1"><a href="forum.php?mod=forumdisplay&fid=$thread[fid]" target="_blank">$list['forumnames'][$thread[fid]]['name']</a></span>
					 			</li>
					 			<!--{/loop}-->
					 		<!--{else}-->
					 				<p class="emp">{lang guide_nothreads}</p>
					 		<!--{/if}-->
					 	</div>
					</div>
				</div>
				<!--{/loop}-->
			<!--{else}-->
				<!--{loop $data $key $list}-->
				<div id="threadlist" class="tl bm bmw"{if $_G['uid']} style="position: relative;"{/if}>
					<div class="th">
						<table cellspacing="0" cellpadding="0">
							<tr>
								<th colspan="2">
									{lang title}
									<!--{if $view == 'my'}-->
									&nbsp;&nbsp;&nbsp;
										<a href="forum.php?mod=guide&view=my&type=thread" $orderactives[thread]>{lang forum_threads}</a><span class="pipe">|</span>
										<a href="forum.php?mod=guide&view=my&type=reply" $orderactives[reply]>{lang reply}</a><span class="pipe">|</span>
										<a href="forum.php?mod=guide&view=my&type=postcomment" $orderactives[postcomment]>{lang comments}</a><span class="pipe">|</span>
										<!--{if $viewtype != 'postcomment'}-->
											<a href="#" onclick="var displayvalue = $('searchbody').style.display == 'none' ? '' : 'none';$('searchbody').style.display=displayvalue; return false;">{lang screening}</a>
										<!--{/if}-->
									<!--{/if}-->
								</th>
								<td class="by">{lang forum_group}</td>
								<td class="by">{lang author}</td>
								<td class="num">{lang replies}</td>
								<td class="by">{lang lastpost}</td>
							</tr>
							<!--{if $view == 'my'}-->
							<tbody class="bw0_all" id="searchbody"{if !$searchbody} style="display: none"{/if}>
								<tr>
								<th colspan="6">&nbsp;
									<form method="get" action="forum.php">
										<input type="hidden" name="mod" value="guide">
										<input type="hidden" name="view" value="my">
										<input type="hidden" name="type" value="$viewtype">
									<!--{if $viewtype != 'postcomment'}-->
											{lang status}:
											<select name="filter" id="filter">
												<option value="">{lang all}</option>
											<!--{loop $filter_array $fkey $name}-->
												<option value="$fkey" {if $fkey == $_GET[filter]}selected{/if}>$name</option>
											<!--{/loop}-->
											</select>
											{lang guide_forum_select}:
											<select name="fid" id="forumlist">
											<option value="0">{lang all}</option>
												$forumlist
											</select>
									<!--{/if}-->
									<!--{if $viewtype == 'thread'}-->
									&nbsp; {lang keyword}: <input type="text" id="searchmypost" class="px vm" name="searchkey" size="20" value="$searchkey" >
									<!--{/if}--><button class="pn vm"><em>{lang search}</em></button>
									</form>
								</th>
							</tr>
							</tbody>
							<!--{/if}-->
						</table>
					</div>
					<div class="bm_c">
						<div id="forumnew" style="display:none"></div>
							<table cellspacing="0" cellpadding="0">
							<!--{subtemplate forum/guide_list_row}-->
							</table>
					</div>
				</div>
				<!--{/loop}-->
				<div class="bm bw0 pgs cl">
					$multipage
					<span class="pgb y"><a href="forum.php?mod=guide">{lang guide_index}</a></span>
				</div>
			<!--{/if}-->
			<!--{hook/guide_bottom}-->
		</div>
	</div>
</div>
<!--{if !IS_ROBOT}-->
	<div id="filter_special_menu" class="p_pop" style="display:none">
		<ul>
			<li><a href="home.php?mod=space&do=poll&view=me" target="_blank">{lang thread_poll}</a></li>
			<li><a href="home.php?mod=space&do=trade&view=me" target="_blank">{lang thread_trade}</a></li>
			<li><a href="home.php?mod=space&do=reward&view=me" target="_blank">{lang thread_reward}</a></li>
			<li><a href="home.php?mod=space&do=activity&view=me" target="_blank">{lang thread_activity}</a></li>
		</ul>
	</div>
<!--{/if}-->
<!--{template common/footer}-->

