<?php echo 'Copyright@Neoconex星点互联';exit;?>
{eval
	$_G['home_tpl_titles'] = array($blog['subject'], '{lang blog}');
	$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&uid=$space[uid]&do=$do&view=me\">{lang they_blog}</a>";
	$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&uid=$space[uid]&do=blog&id=$blog[blogid]\">{lang view_blog}</a>";
	$friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');
}


<!--{if $_G[setting][homepagestyle]}-->
	<!--{subtemplate home/space_header}-->
	<div id="ct" class="ct2 wp cl">
		<div class="mn">
			<div class="bm">
				<div class="bm_h">
					<!--{if $space[self]}--><span class="xi2 y"> <a href="home.php?mod=spacecp&ac=blog" class="addnew">{lang post_new_blog}</a></span><!--{/if}-->
					<h1 class="mt">{lang blog}</h1>
				</div>
			<div class="bm_c">
<!--{else}-->
	<!--{template common/header}-->
	<div id="pt" class="bm cl">
		<div class="z">
			<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
			<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em>&rsaquo;</em>
			<a href="home.php?mod=space&uid=$space[uid]&do=blog&view=me">{lang blog}</a>
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

					<div class="vw mbm">
						<div class="h pbm nex_Blog_C_Tops">
							<h1 class="ph" {if $blog[magiccolor]} style="color: {$_G[colorarray][$blog[magiccolor]]}"{/if}>
								$blog[subject]
								<!--{if $blog[status] == 1}-->
									<span class="xi1">({lang pending})</span>
								<!--{/if}-->
							</h1>
							<p class="xg2 nex_blog_Tags">
								<!--{if $blog['friend']}-->
								<span class="y">{$friendsname[$blog[friend]]}</span>
								<!--{/if}-->
								<!--{if $blog[hot]}--><span class="hot nex_Hot_Pingfen">{lang hot} <em>$blog[hot]</em></span><!--{/if}-->
								<!--{if $blog['friend']}-->
								<span class="y"><a href="home.php?mod=space&uid=$space[uid]&do=$do&view=me&friend=$blog[friend]" class="xg1">{$friendsname[$value[friend]]}</a></span>
								<!--{/if}-->
								<!--{if $blog[viewnum]}--><span class="xg1">{lang have_read_blog}</span><!--{/if}-->
								<span class="xg1"><!--{date($blog[dateline])}--></span>
		
							<!--{if $classarr[classname]}--><span class="pipe">|</span><span class="xg1">{lang personal_category}:<a href="home.php?mod=space&uid=$blog[uid]&do=blog&classid=$blog[classid]&view=me">{$classarr[classname]}</a></span><!--{/if}-->
							<!--{if $blog[catname]}--><span class="pipe">|</span><span class="xg1">{lang system_cat}:<a href="home.php?mod=space&do=blog&view=all&catid=$blog[catid]">$blog[catname]</a></span><!--{/if}-->
							<!--{if $blog[tag]}-->
								<span class="pipe">|</span>
								<span class="ptg xg1">
									<!--{eval $tagi = 0;}-->
									<!--{loop $blog[tag] $var}-->
										<!--{if $tagi}-->, <!--{/if}--><a href="misc.php?mod=tag&id=$var[0]" target="_blank">$var[1]</a>
										<!--{eval $tagi++;}-->
									<!--{/loop}-->
								</span>
							<!--{/if}-->
		
							</p>
							<!--{hook/space_blog_title}-->
						</div>
		
						<div id="blog_article" class="d cl">
							<!--{ad/blog/a_b}-->
							$blog[message]
						</div>
						<!--{if $blog[friend] != 3 && !$blog[noreply]}-->
						<div id="click_div">
							<!--{template home/space_click}-->
						</div>
						<!--{/if}-->
		
						<!--{if !empty($_G['setting']['pluginhooks']['space_blog_share_method'])}-->
							<div class="tshare cl">
								<strong>{lang viewthread_share_to}:</strong>
								<!--{hook/space_blog_share_method}-->
							</div>
						<!--{/if}-->
		
						<div class="o cl nex_Blog_C_Tools">
							<a href="home.php?mod=spacecp&ac=favorite&type=blog&id=$blog[blogid]&spaceuid=$blog[uid]&handlekey=favoritebloghk_{$blog[blogid]}" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr ofav nex_Blog_C_ofav">{lang favorite}</a>
							<!--{if helper_access::check_module('share')}--><a href="home.php?mod=spacecp&ac=share&type=blog&id=$blog[blogid]&handlekey=sharebloghk_{$blog[blogid]}" id="a_share" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr nex_Blog_C_oshr">{lang share}</a><!--{/if}-->
							<a href="misc.php?mod=invite&action=blog&id=$blog[blogid]" id="a_invite" onclick="showWindow('invite', this.href, 'get', 0);" class="oshr oivt nex_Blog_C_invite">{lang invite}</a>
							<!--{if ($_G[uid] == $blog[uid]) && $_G[setting][magicstatus] && ($_G[setting][magics][call] || $_G[setting][magics][updateline] || $_G[setting][magics][downdateline] || $_G[setting][magics][hot] || $_G[setting][magics][highlight])}-->
								<a href="javascript:;" id="usemagic" onmouseover="showMenu(this.id);">{lang use_magic_tools}</a>
								<span class="pipe">|</span>
								<ul id="usemagic_menu" class="p_pop mgcmn" style="display:none;">
									<!--{if $_G[setting][magics][call]}-->
									<li><a href="home.php?mod=magic&mid=call&idtype=blogid&id=$blog[blogid]" id="a_magic_call" onclick="showWindow('magics', this.href, 'get', 0);"><img src="{STATICURL}image/magic/call.small.gif" alt="call" class="vm" /> {$_G[setting][magics][call]}</a></li>
									<!--{/if}-->
									<!--{if $_G[setting][magics][updateline]}-->
									<li><a href="home.php?mod=magic&mid=updateline&idtype=blogid&id=$blog[blogid]" id="a_magic_updateline" onclick="showWindow('magics', this.href, 'get', 0);"><img src="{STATICURL}image/magic/updateline.small.gif" alt="updateline" class="vm" /> {$_G[setting][magics][updateline]}</a></li>
									<!--{/if}-->
									<!--{if $_G[setting][magics][downdateline]}-->
									<li><a href="home.php?mod=magic&mid=downdateline&idtype=blogid&id=$blog[blogid]" id="a_magic_downdateline" onclick="showWindow('magics', this.href, 'get', 0);"><img src="{STATICURL}image/magic/downdateline.small.gif" alt="downdateline" class="vm" /> {$_G[setting][magics][downdateline]}</a></li>
									<!--{/if}-->
									<!--{if $_G[setting][magics][hot]}-->
									<li><a href="home.php?mod=magic&mid=hot&idtype=blogid&id=$blog[blogid]" id="a_magic_hot" onclick="showWindow('magics', this.href, 'get', 0);"><img src="{STATICURL}image/magic/hot.small.gif" alt="hot" class="vm" /> {$_G[setting][magics][hot]}</a></li>
									<!--{/if}-->
									<!--{if $_G[setting][magics][highlight]}-->
									<li><a href="home.php?mod=magic&mid=highlight&idtype=blogid&id=$blog[blogid]" id="a_magic_highlight" onclick="showWindow('magics', this.href, 'get', 0);"><img src="{STATICURL}image/magic/highlight.small.gif" alt="hot" class="vm" /> {$_G[setting][magics][highlight]}</a></li>
									<!--{/if}-->
								</ul>
							<!--{/if}-->
		
							<!--{hook/space_blog_op_extra}-->
							<!--{if $_G[uid] == $blog[uid] || checkperm('manageblog')}-->
							<a href="home.php?mod=spacecp&ac=blog&blogid=$blog[blogid]&op=edit">{lang edit}</a><span class="pipe">|</span>
							<a href="home.php?mod=spacecp&ac=blog&blogid=$blog[blogid]&op=delete&handlekey=delbloghk_{$blog[blogid]}" id="blog_delete_$blog[blogid]" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a><span class="pipe">|</span>
							<!--{/if}-->
		
							<!--{if checkperm('manageblog')}-->
							IP: $blog[postip]{if $blog[port]}:$blog[port]{/if}<span class="pipe">|</span>
							<a href="home.php?mod=spacecp&ac=blog&blogid=$blog[blogid]&op=edithot&handlekey=bloghothk_{$blog[blogid]}" id="blog_hot_$blog[blogid]" onclick="showWindow(this.id, this.href, 'get', 0);">{lang hot}</a><span class="pipe">|</span>
							<!--{/if}-->
							<!--{if helper_access::check_module('portal')}-->
								<!--{if !$blog['friend'] && !$blog['pushedaid'] && (getstatus($_G['member']['allowadmincp'], 2) || $_G['group']['allowmanagearticle'])}-->
								<a href="portal.php?mod=portalcp&ac=article&from_idtype=blogid&from_id=$blog[blogid]">{lang article_push}</a><span class="pipe">|</span>
								<!--{/if}-->
			
								<!--{if $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 5) || getstatus($_G['member']['allowadmincp'], 6)}-->
									<a href="portal.php?mod=portalcp&ac=portalblock&op=recommend&idtype=blogid&id=$blog[blogid]" onclick="showWindow('recommend', this.href, 'get', 0)">{lang blockdata_recommend}</a><span class="pipe">|</span>
								<!--{/if}-->
							<!--{/if}-->
							<!--{if $_G['uid'] != $blog['uid']}-->
							<a href="javascript:;" onclick="showWindow('miscreport$blog[blogid]', 'misc.php?mod=report&rtype=blog&uid=$blog[uid]&rid=$blog[blogid]', 'get', -1);return false;">{lang report}</a>
							<!--{/if}-->
						</div>
		
					</div>

					<div class="ct_vw cl">
						<div class="ct_vw_sd">
							<!--{if $otherlist}-->
							<div class="mbm cl nex_Blog_Comments_Titlts2">
								<h2 class="mbm ptn pbn bbs"><span class="xs1 xw0 y"><a href="home.php?mod=space&uid=$blog[uid]&do=blog&view=me">{lang all}</a></span>{lang author_newest_blog}</h2>
								<ul class="xl xl1 cl">
									<!--{loop $otherlist $value}-->
									<li><a href="home.php?mod=space&uid=$value[uid]&do=blog&id=$value[blogid]" target="_blank">$value[subject]</a></li>
									<!--{/loop}-->
								</ul>
							</div>
							<!--{/if}-->
							<!--{if $newlist}-->
							<div class="mbm cl nex_Blog_Comments_Titlts2">
								<h2 class="mbm ptn pbn bbs">
                                	{lang popular_blog_review}
                                </h2>
								<ul class="xl xl1 cl">
									<!--{loop $newlist $value}-->
									<li><span class="xl1_elp">&bull; <a href="home.php?mod=space&uid=$value[uid]&do=blog&id=$value[blogid]" target="_blank">$value[subject]</a></span></li>
									<!--{/loop}-->
								</ul>
							</div>
							<!--{/if}-->
						</div>
			
						<div class="ct_vw_mn">
							<div id="div_main_content" class="mbm">
								<h5 class="ptn pbn bbs" id="nex_Blog_Comments">
									<!--{if !empty($list)}-->
									<a href="home.php?mod=space&uid=$blog[uid]&do=$do&id=$id#quickcommentform_{$id}" onclick="if($('comment_message')){$('comment_message').focus();return false;}" class="y xi2 xw0">{lang publish_comment}</a>
									<!--{/if}-->
									<em>{lang comment}</em> <span id="comment_replynum">($blog[replynum] {lang blog_replay})</span>
								</h5>
								<!--{if $cid}-->
								<div class="i">
									{lang current_blog_replay}<a href="home.php?mod=space&uid=$blog[uid]&do=blog&id=$blog[blogid]">{lang click_view_all}</a>
								</div>
								<!--{/if}-->
								<div id="comment_ul" class="xld xlda">
								<!--{loop $list $k $value}-->
									<!--{template home/space_comment_li}-->
								<!--{/loop}-->
								</div>
							</div>
							<!--{if $multi}--><div class="pgs cl mbm">$multi</div><!--{/if}-->
			
						<!--{if !$blog[noreply] && helper_access::check_module('blog')}-->
						<form id="quickcommentform_{$id}" action="home.php?mod=spacecp&ac=comment" method="post" autocomplete="off" onsubmit="ajaxpost('quickcommentform_{$id}', 'return_qcblog_$id');doane(event);">
							<p>
								<span id="comment_face" title="{lang insert_emoticons}" onclick="showFace(this.id, 'comment_message');return false;" class="cur1"><img src="{IMGDIR}/facelist.gif" alt="facelist" class="vm" /></span>
								<!--{hook/space_blog_face_extra}-->
								<!--{if $_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])}-->
									<a id="a_magic_doodle" href="home.php?mod=magic&mid=doodle&showid=comment_doodle&target=comment_message" onclick="showWindow(this.id, this.href, 'get', 0)"><img src="{STATICURL}image/magic/doodle.small.gif" alt="doodle" class="vm" /> {$_G[setting][magics][doodle]}</a>
								<!--{/if}-->
							</p>
							<div class="tedt mtn mbn">
								<div class="area">
									<!--{if $_G['uid'] || $_G['group']['allowcomment']}-->
										<textarea id="comment_message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');" name="message" rows="3" class="pt"></textarea>
									<!--{else}-->
										<div class="pt hm">{lang login_to_comment} <a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)" class="xi2">{lang login}</a> | <a href="member.php?mod={$_G[setting][regname]}" class="xi2">$_G['setting']['reglinkname']</a></div>
									<!--{/if}-->
								</div>
							</div>
							<!--{if $secqaacheck || $seccodecheck}-->
								<!--{block sectpl}--><sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div><!--{/block}-->
								<div class="mtm mbm sec"><!--{subtemplate common/seccheck}--></div>
							<!--{/if}-->
							<p class="pns">
								<input type="hidden" name="referer" value="home.php?mod=space&uid=$blog[uid]&do=$do&id=$id" />
								<input type="hidden" name="id" value="$id" />
								<input type="hidden" name="idtype" value="blogid" />
								<input type="hidden" name="handlekey" value="qcblog_{$id}" />
								<input type="hidden" name="commentsubmit" value="true" />
								<input type="hidden" name="quickcomment" value="true" />
								<button type="submit" name="commentsubmit_btn"value="true" id="commentsubmit_btn" class="pn"{if !$_G[uid]&&!$_G['group']['allowcomment']} onclick="showWindow(this.id, this.form.action);return false;"{/if}><strong>{lang comment}</strong></button>
								<span id="return_qcblog_{$id}"></span>
							</p>
							<input type="hidden" name="formhash" value="{FORMHASH}" />
						</form>
						<script type="text/javascript">
							function succeedhandle_qcblog_$id(url, msg, values) {
								if(values['cid']) {
									comment_add(values['cid']);
								} else {
									$('return_qcblog_{$id}').innerHTML = msg;
								}
								<!--{if $sechash}-->
									<!--{if $secqaacheck}-->
									updatesecqaa('$sechash');
									<!--{/if}-->
									<!--{if $seccodecheck}-->
									updateseccode('$sechash');
									<!--{/if}-->
								<!--{/if}-->
							}
						</script>
						<!--{/if}-->
			
						<script type="text/javascript">
						function addFriendCall(){
							var el = $('friendinput');
							if(!el || el.value == "")	return;
							var s = '<input type="checkbox" name="fusername[]" class="pc" value="'+el.value+'" id="'+el.value+'" checked="checked">';
							s += '<label for="'+el.value+'">'+el.value+'</label>';
							s += '<br />';
							$('friendscall').innerHTML += s;
							el.value = '';
						}
						resizeImg('div_main_content','450');
			
						var elems = selector('dd[class~=magicflicker]');
						for(var i=0; i<elems.length; i++){
							magicColor(elems[i]);
						}
						</script>
			
						</div>
					</div>
		
					<!--{if !$_G[setting][homepagestyle]}--><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><!--{/if}-->


					</div>
				</div>
			<!--{if $_G[setting][homepagestyle]}-->
			</div>
			<div class="sd">
				<!--{subtemplate home/space_userabout}-->
			<!--{/if}-->
		</div>
	</div>

<!--{if !$_G[setting][homepagestyle]}-->
	<div class="wp mtn">
		<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
	</div>
<!--{/if}-->

<!--{if $_G['relatedlinks']}-->
	<script type="text/javascript">
		var relatedlink = [];
		<!--{loop $_G['relatedlinks'] $key $link}-->
		relatedlink[$key] = {'sname':'$link[name]', 'surl':'$link[url]'};
		<!--{/loop}-->
		relatedlinks('blog_article');
	</script>
<!--{/if}-->

<!--{if !empty($_G['cookie']['clearUserdata']) && $_G['cookie']['clearUserdata'] == 'home'}-->
	<script type="text/javascript">saveUserdata('home', '')</script>
<!--{/if}-->

<!--{template common/footer}-->
