<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if $do == 'feed'}-->
	<!--{template common/header}-->
	<div id="pt" class="bm cl">
		<div class="z">
			<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
			<a href="home.php?mod=follow">{lang follow}</a>
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
		<!--{else}-->
		<div class="appl">
			<div class="tbn">
				<h2 class="mt bbda">{lang follow}</h2>
				<ul>
					<li$actives[follow]><a href="home.php?mod=follow&view=follow">{lang follow_following}</a></li>
					<li$actives[special]><a href="home.php?mod=follow&view=special">{lang follow_special_following}</a></li>
					<li$actives[other]><a href="home.php?mod=follow&view=other">{lang follow_hall}</a></li>
					<!--{hook/follow_nav_extra}-->
				</ul>
			</div>
		</div>
		<!--{/if}-->
		<div class="mn">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<!--{else}-->
	<!--{if $_G[setting][homepagestyle]}-->
		<!--{subtemplate home/space_header}-->
		<div id="ct" class="ct2 wp cl">
			<div class="mn">
				<div class="bm">
					<div class="bm_h">
						<h1 class="mt">{lang follow}</h1>
					</div>
				<div class="bm_c">
	<!--{else}-->
		<!--{template common/header}-->
		<div id="pt" class="bm cl">
			<div class="z">
				<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em>&rsaquo;</em>
				<a href="home.php?mod=follow&uid=$space[uid]&do=view&from=space">{lang follow}</a>
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
<!--{/if}-->

		<!--{hook/follow_top}-->

		<!--{if in_array($do, array('feed', 'view'))}-->
			<!--{if helper_access::check_module('follow') && ( $do == 'feed' || ( $do == 'view' && $viewself))}-->
				<div id="flw_header" class="mbw bbs cl">
					<!--{if $do == 'feed'}-->
					<div class="my_flw_stats y">
						<ul>
							<li><span class="xg1">{lang follow}</span><a href="home.php?mod=space&uid=$uid"><strong class="xi2">$space['feeds']</strong></a></li>
							<li><span class="xg1">{lang follow_add}</span><a href="home.php?mod=follow&do=following&uid=$uid"><strong class="xi2">$space['following']</strong></a></li>
							<li><span class="xg1">{lang follow_follower}</span><a href="home.php?mod=follow&do=follower&uid=$uid"><strong class="xi2">$space['follower']</strong></a></li>
						</ul>
					</div>
					<!--{/if}-->

					<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
					<script type="text/javascript" src="{$_G[setting][jspath]}forum_moderate.js?{VERHASH}"></script>
					<script type="text/javascript">
						var postminchars = parseInt('$_G['setting']['minpostsize']');
						var postmaxchars = parseInt('$_G['setting']['maxpostsize']');
						var disablepostctrl = parseInt('{$_G['group']['disablepostctrl']}');
					</script>
					<!--{eval $dmfid = $_G['setting']['followforumid'] && !empty($defaultforum) ? $_G['setting']['followforumid'] : 0;}-->
					<form method="post" autocomplete="off" id="fastpostform" class="nex_BC_Tops" action="home.php?mod=spacecp&ac=follow&op=newthread&topicsubmit=yes&infloat=yes&handlekey=fastnewpost&inajax=1" onsubmit="return fastpostvalidate(this);" style="float: left;">
						<div id="fastpostreturn" style="margin:-5px 0 5px"></div>
						<div id="flw_post_subject" class="nex_flw_post_subject" style="display:none;">
							<span id="flw_checklen" class="y"><span id="checklen" class="xg1">80</span></span>
							<input type="text" id="subject" name="subject" onkeyup="strLenCalc(this, 'checklen', 80);" tabindex="11" />
						</div>

						<div id="flw_post_extra" class="mtn cl">
							<div{if $_G[setting][fastsmilies]} class="hasfsl"{/if} id="fastposteditor">
								<div class="tedt nex_Gr_tedt">
									<div class="area">
										<textarea rows="5" cols="80" name="message" id="fastpostmessage" onKeyDown="seditor_ctlent(event, '$(\'fastpostsubmit\').click()');" tabindex="12" class="pt xs2"></textarea>
									</div>
									<div id="flw_bar" class="bar">
										<!--{eval $seditor = array('fastpost', array('smilies', 'at'), 0, '<span id="spanButtonPlaceholder">{lang upload}</span>');}-->
										<!--{subtemplate common/seditor}-->
									</div>
								</div>
							</div>
							<script type="text/javascript">
							var editorid = '';
							var ATTACHNUM = {'imageused':0,'imageunused':0,'attachused':0,'attachunused':0}, ATTACHUNUSEDAID = new Array(), IMGUNUSEDAID = new Array();
							</script>

							<div class="upfl{if empty($_GET[from]) && $_G[setting][fastsmilies]} hasfsl{/if}">
								<div id="attachlist" class="fieldset flash cl"><span style="font-size:0"></span></div>
								<!--{if empty($_G['setting']['pluginhooks']['follow_upload_extend'])}-->
									<!--{subtemplate common/upload}-->
									<script type="text/javascript">
										var upload = new SWFUpload({
											// Backend Settings
											upload_url: "{$_G[siteurl]}misc.php?mod=swfupload&action=swfupload&operation=upload&fid={$dmfid}",
											post_params: {"uid" : "$_G[uid]", "hash":"$swfconfig[hash]"},

											// File Upload Settings
											file_size_limit : "$swfconfig[max]",	// 100MB
											file_types : "$swfconfig[attachexts][ext]",
											file_types_description : "$swfconfig[attachexts][depict]",
											file_upload_limit : $swfconfig['limit'],
											file_queue_limit : 0,
											// Event Handler Settings (all my handlers are in the Handler.js file)
											swfupload_preload_handler : preLoad,
											swfupload_load_failed_handler : loadFailed,
											file_dialog_start_handler : fileDialogStart,
											file_queued_handler : fileQueued,
											file_queue_error_handler : fileQueueError,
											file_dialog_complete_handler : fileDialogComplete,
											upload_start_handler : uploadStart,
											upload_progress_handler : uploadProgress,
											upload_error_handler : uploadError,
											upload_success_handler : uploadSuccess,
											upload_complete_handler : uploadComplete,
											// Button Settings
											button_image_url : "{IMGDIR}/flw_post_attach.png",
											button_placeholder_id : "spanButtonPlaceholder",
											button_width: 18,
											button_height: 25,
											button_cursor:SWFUpload.CURSOR.HAND,
											button_window_mode: "transparent",
											custom_settings : {
												progressTarget : "attachlist",
												uploadSource: 'forum',
												uploadType: 'attach',
												<!--{if $swfconfig['maxsizeperday']}-->
												maxSizePerDay: $swfconfig['maxsizeperday'],
												<!--{/if}-->
												<!--{if $swfconfig['maxattachnum']}-->
												maxAttachNum: $swfconfig['maxattachnum'],
												<!--{/if}-->
												uploadFrom: 'fastpost'
											},

											// Debug Settings
											debug: false
										});
									</script>
								<!--{else}-->
									<!--{hook/follow_upload_extend}-->
								<!--{/if}-->
								<script type="text/javascript">
									var fid = <!--{if $_G['setting']['followforumid']}-->$_G['setting']['followforumid']<!--{else}-->0<!--{/if}-->;
									var resulttype = 'follow';
									var attachBtn = $('flw_bar').getElementsByTagName('object')[0];
									var flwbarBtn = $('flw_bar').getElementsByTagName('a');
									if(BROWSER.ie && BROWSER.ie < 7 && attachBtn) {
										attachBtn.style.left = flwbarBtn ? flwbarBtn.length * 25 : 0;
									}

								</script>
							</div>

							<!--{if $secqaacheck || $seccodecheck}-->
								<!--{block sectpl}--><sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div><!--{/block}-->
								<div class="mtm sec"><!--{subtemplate common/seccheck}--></div>
							<!--{/if}-->

							<input type="hidden" name="formhash" value="{FORMHASH}" />
							<input type="hidden" name="usesig" value="$usesigcheck" />
							<input type="hidden" name="adddynamic" value="1" />
							<input type="hidden" name="addfeed" value="1" />
							<input type="hidden" name="topicsubmit" value="true" />
							<input type="hidden" name="referer" value="{echo dreferer()}" />

							<div class="cl">
								<div class="z ptm" id="forumlistdev" style="display: none;">
									<select name="defaultforum" id="fid" class="ps z nex_Gr_forumlist" onchange="modifyformurl(this.value);">
										<option value="0">{lang follow_other_forum}</option>
									</select>
									<select name="forumlist" id="forumlist" class="ps z nex_Gr_forumlist" onchange="addforumlist(this);" style="display: none;">
										<option value="0">{lang follow_select_forum}</option>
										$forumlist
									</select>

									<div class="ftid nex_Gr_ftid">
										<span class="ftid" id="threadclass"></span>
									</div>
								</div>
								<div class="y">
									<p class="ptm pnpost">
										<label><input type="checkbox" name="syncbbs" id="syncbbs" value="1" onclick="showSyncInfo(this.checked)" />{lang follow_sync_forum}</label>&nbsp;
										<button {if $_G['uid']}type="submit" {else}type="button" onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes')" {/if}name="topicsubmit_btn" id="fastpostsubmit" value="topicsubmitbtn" tabindex="13" class="pn pnc nex_Gr_fastpostsubmit">{lang follow_new_thread}</button>
									</p>
								</div>
							</div>
						</div>
					</form>

					<script type="text/javascript">
					var nofollowfeed = <!--{if !empty($list['feed'])}-->0<!--{else}-->1<!--{/if}-->;
					var userdatakey = cookiepre+'fastpost{$_G[uid]}';
					function showSyncInfo(flag) {
						display('flw_post_subject');
						display('forumlistdev');
						var sObj = $('subject');
						sObj.value = '';
						strLenCalc(sObj, 'checklen', 80);
					}
					function fastpostvalidateextra() {
						var sObj = $('subject');
						if(!$('syncbbs').checked) {
							$('subject').value = '  ';
						}
						return true;
					}
					function backupContent() {
						var obj = $('fastpostform');
						if(!obj) return;
						var data = subject = message = '';
						saveUserdata(userdatakey, data);
						for(var i = 0; i < obj.elements.length; i++) {
							var el = obj.elements[i];
							if(el.name != '' && el.tagName == 'SELECT') {
								var elvalue = el.value;
								if(trim(elvalue)) {
									data += el.name + String.fromCharCode(9) + el.tagName + String.fromCharCode(9) + el.type + String.fromCharCode(9) + elvalue + String.fromCharCode(9, 9);
									if(el.tagName == 'SELECT' && el.name == 'defaultforum') {
										var values = {};
										for(var j = 0; j < el.options.length; j++) {
											var option = el.options[j];
											var ov = parseInt(option.value);
											if(typeof values[option.value] == 'undefined' && !isNaN(ov) && option.innerText != '' && option.innerText != 'undefined') {
												data += el.name + String.fromCharCode(9) + option.tagName + String.fromCharCode(9) + option.value + String.fromCharCode(9) + option.text + String.fromCharCode(9, 9);
												values[option.value] = option.value;
											}
										}
									}
								}
							}
						}
						saveUserdata(userdatakey, data);
					}
					function addforumlist(listObj) {
						var fid = listObj.value;
						if(fid) {
							var dforum = $('fid');
							//判断是否已经在列表中
							var haveoption = false;
							for(var i = 0; i < dforum.options.length; i++) {
								if(dforum.options[i].value == fid) {
									dforum.selectedIndex = i;
									haveoption = true;
									break;
								}
							}
							if(!haveoption) {
								var option = listObj.options[listObj.selectedIndex];
								var oOption = document.createElement("OPTION");
								oOption.text = trim(option.text);
								oOption.value = option.value;
								dforum.options.add(oOption);
								dforum.selectedIndex = dforum.options.length-1;
							}

							modifyformurl(fid);
						}
						dforum.style.display = '';
						listObj.style.display = 'none';
					}
					function modifyformurl(mfid) {
						if(parseInt(mfid)) {
							backupContent();
							//noteX 修改表单中的两个固定地址
							$('fastpostform').action = 'home.php?mod=spacecp&ac=follow&op=newthread&topicsubmit=yes&infloat=yes&handlekey=fastnewpost&inajax=1&fid='+mfid;
							if(upload) {
								fid = mfid;
								var uploadurl = '{$_G[siteroot]}misc.php?mod=swfupload&action=swfupload&operation=upload&fid='+mfid;
								upload.setUploadURL(uploadurl);
							}
							getthreadclass();
						} else {
							var flist = $('forumlist');
							var dforum = $('fid');
							dforum.style.display = 'none';
							flist.style.display = '';
						}

					}

					function resumeContent() {
						var data = loadUserdata(userdatakey);
						if(in_array((data = trim(data)), ['', 'null', 'false', null, false])) {
							modifyformurl();
							return false;
						}
						var data = data.split(/\x09\x09/);
						var formObj = $('fastpostform');
						var sValue = 0;
						for(var i = 0; i < formObj.elements.length; i++) {
							var el = formObj.elements[i];
							if(el.name != '' && el.tagName == 'SELECT') {
								for(var j = 0; j < data.length; j++) {
									var ele = data[j].split(/\x09/);
									if(ele[0] == el.name) {
										elvalue = !isUndefined(ele[3]) ? ele[3] : '';
										if(ele[1] == 'SELECT') {
											//添加选项
											var values = {0:0<!--{if $_G['setting']['followforumid']}-->,$_G['setting']['followforumid']:$_G['setting']['followforumid']<!--{/if}-->};
											for(var oi = 0; oi < data.length; oi++) {
												var oObj = data[oi].split(/\x09/);
												if(oObj[0] == el.name && oObj[1] == 'OPTION' && typeof values[oObj[2]] == 'undefined') {
													var oOption = document.createElement("OPTION");
													el.options.add(oOption);
													oOption.text = oObj[3];
													values[oObj[2]] = oOption.value = oObj[2];
													if(elvalue == oObj[2]) {
														el.selectedIndex = el.options.length-1;
														modifyformurl(elvalue);
													}
												}
											}
											if(el.options.length < 2) {
												modifyformurl(0);
											}

										}
										break
									}
								}
							}
						}
					}
					function succeedhandle_fastnewpost(url, msg, values) {
						if(nofollowfeed) {
							window.location.reload();
						} else {
							if(parseInt(values.feedid)) {
								getNewFollowFeed(values.tid, values.fid, values.pid, values.feedid);
							} else {
								showDialog(msg, 'notice', null, null, 0, null, null, null, null, 3);
							}
							showCreditPrompt();
							//清空上次的输入
							var sObj = $('subject');
							$('attachlist').innerHTML = $('fastpostmessage').value = sObj.value = '';
							strLenCalc(sObj, 'checklen', 80);
							if(values.sechash) {
								updatesecqaa(values.sechash);
								updateseccode(values.sechash);
								$('seccodeverify_'+values.sechash).value='';
							}
							//var msg = '您的主题已发布，<a href="'+url+'" class="xi2">点击这里查看主题</a>'
							//showDialog(msg, 'notice', null, null, 0, null, null, null, null, 3);
						}

					}
					function getNewFollowFeed(tid, fid, pid, feedid) {
						var x = new Ajax();
						x.get('forum.php?mod=ajax&action=getpostfeed&inajax=1&tid='+tid+'&fid='+fid+'&pid='+pid+'&feedid='+feedid, function(s){
							newli = document.createElement("li");
							newli.innerHTML = s;
							var listObj = $('followlist');

							listObj.insertBefore(newli, listObj.firstChild);
						});
					}

					resumeContent();

					function cleartitle(obj) {
						if($('flw_post_subject').style.display== 'none') {
							var sObj = $('subject');
							sObj.value = '';
							strLenCalc(sObj, 'checklen', 80);
							obj.innerHTML = '{lang follow_add_title}';
						} else {
							obj.innerHTML = '{lang follow_auto_title}';
						}
					}
					</script>

			</div>
			<!--{/if}-->

			<!--{if in_array($do, array('feed', 'view'))}-->
				<!--{if $do == 'feed' && $_G[setting][homestyle]}-->
				<ul class="mbw tb cl">
					<li$actives[follow]><a href="home.php?mod=follow&view=follow">{lang follow_following}</a></li>
					<li$actives[special]><a href="home.php?mod=follow&view=special">{lang follow_special_following}</a></li>
					<li$actives[other]><a href="home.php?mod=follow&view=other">{lang follow_hall}</a></li>
					<!--{hook/follow_nav_extra}-->
				</ul>
				<!--{/if}-->
				<!--{if !empty($list['feed'])}-->
					<div class="flw_feed nex_Gr_flw_feed">
						<ul id="followlist">
							<!--{subtemplate home/follow_feed_li}-->
						</ul>

						<!--{if count($list['feed']) > 19 && ($archiver || $primary)}-->
						<div id="loadingfeed" class="flw_more"><a href="javascript:;" onclick="loadmore();return false;" class="xi2">{lang follow_more} &raquo;</a></div>
						<!--{else}-->
						<div id="loadingfeed"></div>
						<!--{/if}-->
						<iframe id="downloadframe" name="downloadframe" width="0" height="0" marginwidth="0" frameborder="0" src="about:blank"></iframe>
						<script type="text/javascript">
							function succeedhandle_attachpay(url, msg, values) {
								hideWindow('attachpay');
								window.location.href = url;
								//$('downloadframe').src = url;
							}
						</script>
					</div>
				<!--{else}-->
					<div class="emp">
						<h2 class="mbw xg1 xs2 hm"><!--{if $viewself}-->{lang follow_following_null}<!--{else}-->{lang follow_no_content}<!--{/if}--></h2>
						<!--{if $do == 'feed' && $view == 'special'}-->
						<div class="mtw hm xg1">
							{lang follow_add_special_tip}<a href="home.php?mod=follow&do=following&uid=$uid" class="xi2">{lang follow_add_special_following}</a>
						</div>
						<!--{/if}-->

						<!--{if !empty($recommend) && $showrecommend && $view != 'special'}-->
						<!--{eval $showrecommend = false;}-->
						<div class="flw_user_list mbm">
							<h3 class="xi2 xs2 mbw ptm pbm bbda">{lang follow_recommend}</h3>
							<ul class="ml mls cl">
							<!--{loop $recommend $ruid $rusername}-->
								<li>
									<a href="home.php?mod=space&uid=$ruid" class="avt" c="1" shref="home.php?mod=space&uid=$ruid"><!--{avatar($ruid,small)}--></a>
									<p><a href="home.php?mod=space&uid=$ruid" style="text-decoration: none !important;">$rusername</a></p>
									<!--{if helper_access::check_module('follow')}-->
									<span><a id="a_followmod_{$ruid}" href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$ruid&from=block" onclick="ajaxget(this.href);doane(event);" style="text-decoration: none !important;">{lang follow_add}</a></span>
									<!--{/if}-->
								</li>
							<!--{/loop}-->
							</ul>
						</div>
						<!--{/if}-->
					</div>
				<!--{/if}-->
				<!--{if count($list['feed']) > 19 && ($archiver || $primary)}-->
					<script type="text/javascript">
						var scrollY = 0;
						var page = 2;
						var feedInfo = {scrollY: 0, archiver: $archiver, primary: $primary, query: true, scrollNum:1};
						var loadingfeed = $('loadingfeed');

						function loadmore() {
							var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
							var sHeight = document.documentElement.scrollHeight;
							if(currentScroll >= scrollY && currentScroll > (sHeight/5-5) && (feedInfo.primary ||feedInfo.archiver) && feedInfo.query) {
								/*
								if(feedInfo.scrollNum) {
									loadingfeed.className="flw_loading hm vm";
									loadingfeed.innerHTML = "<img src=\"{IMGDIR}/loading.gif\" class=\"vm\" /> {lang follow_loading}";
								}
								*/
								feedInfo.query = false;
								var archiver = 0;
								if(feedInfo.primary) {
									archiver = 0;
								} else if(feedInfo.archiver) {
									archiver = 1;
								}
								var url = 'home.php?mod=spacecp&ac=follow&op=getfeed&archiver='+archiver+'&page='+page+'&inajax=1'<!--{if $do == 'feed'}-->+'&viewtype=$view'<!--{elseif $do == 'view'}-->+'&uid=$uid&banavatar=1'<!--{/if}-->;
								var x = new Ajax();
								x.get(url, function(s) {
									if(trim(s) == 'false') {
										if(!archiver) {
											feedInfo.primary = false;
											loadmore();
											page = 1;
										} else {
											feedInfo.archiver = false;
											page = 1;
										}
									} else {
										$('followlist').innerHTML = $('followlist').innerHTML + s;
									}
									if(!feedInfo.primary && !feedInfo.archiver) {
										loadingfeed.className = "";
										loadingfeed.innerHTML = "";
									}
									feedInfo.query = true;
								});
								page++;
								if(feedInfo.scrollNum) {
									feedInfo.scrollNum--;
								} else if(!feedInfo.scrollNum) {
									window.onscroll = null;
								}

							}
							scrollY = currentScroll;
						}

						window.onload = function() {
							scrollY =  document.documentElement.scrollTop || document.body.scrollTop;
							window.onscroll = loadmore;
						}
					</script>
				<!--{/if}-->
			<!--{/if}-->

			<script type="text/javascript">
				var boxflag = {};
				var parentReplyId = '';
				function quickreply(fid, tid, feedid) {
					$('relaybox_'+feedid).style.display = 'none';
					var replyboxid = 'replybox_'+feedid;
					if(parentReplyId && parentReplyId != feedid) {
						var oldbox = $('replybox_'+parentReplyId);
						oldbox.innerHTML = '';
						oldbox.style.display = 'none';
					}
					if($(replyboxid).style.display == '' && boxflag[replyboxid]) {
						$(replyboxid).style.display = 'none';
					} else {
						boxflag[replyboxid] = true;
						ajaxget('forum.php?mod=ajax&action=quickreply&tid='+tid+'&fid='+fid+'&handlekey=qreply_'+feedid+'&feedid='+feedid, replyboxid);
						$(replyboxid).style.display = '';
					}
					parentReplyId = feedid;
				}
				function quickrelay(feedid, tid) {
					$('replybox_'+feedid).style.display = 'none';
					var replyboxid = 'relaybox_'+feedid;
					if($(replyboxid).style.display == '') {
						$(replyboxid).style.display = 'none';
					} else {
						ajaxget('home.php?mod=spacecp&ac=follow&op=relay&feedid='+feedid+'&tid='+tid+'&handlekey=qrelay_'+feedid, replyboxid);
						$(replyboxid).style.display = '';
					}
				}
			</script>

			<!--{elseif in_array($do, array('following', 'follower'))}-->
				<!--{if $list}-->
					<ul class="flw_ulist">
					<!--{loop $list $fuid $fuser}-->
						<li class="cl<!--{if in_array($fuser['uid'], $newfollower_list)}--> unread<!--{/if}-->">
						<!--{if $do=='following'}-->
							<a href="home.php?mod=space&uid=$fuser['followuid']" title="$fuser['fusername']" id="edit_avt" class="flw_avt" shref="home.php?mod=space&uid=$fuser['followuid']"><!--{avatar($fuser['followuid'],small)}--></a>
							<!--{if $viewself}-->
								<a id="a_followmod_{$fuser['followuid']}" href="home.php?mod=spacecp&ac=follow&op=del&fuid=$fuser['followuid']" onclick="ajaxget(this.href);doane(event);" class="flw_btn_unfo">{lang follow_del}</a>
							<!--{elseif $fuser[followuid] != $_G[uid]}-->
								<!--{if $fuser['mutual']}-->
									<!--{if $fuser['mutual'] > 0}--><span class="z flw_status_2">{lang follow_follower_mutual}</span><!--{else}--><span class="z flw_status_1">{lang did_not_follow_to_me}</span><!--{/if}--><a id="a_followmod_{$fuser['followuid']}" href="home.php?mod=spacecp&ac=follow&op=del&fuid=$fuser['followuid']"  onclick="ajaxget(this.href);doane(event);" class="flw_btn_unfo">{lang follow_del}</a>
								<!--{elseif helper_access::check_module('follow')}-->
									<a id="a_followmod_{$fuser['followuid']}" href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$fuser['followuid']" onclick="ajaxget(this.href);doane(event);" class="flw_btn_fo">{lang follow_add}</a>
								<!--{/if}-->
							<!--{/if}-->
							<h6 class="pbn xs2"><a href="home.php?mod=space&uid=$fuser['followuid']" title="$fuser['fusername']" class="xi2" c="1" shref="home.php?mod=space&uid=$fuser['followuid']">$fuser['fusername']</a>&nbsp;<span id="followbkame_{$fuser['followuid']}" class="xg1 xs1 xw0"><!--{if $fuser['bkname']}-->$fuser[bkname]<!--{/if}--></span></h6>
							<!--{if !empty($fuser['recentnote'])}--><p><span class="xg1">{lang follow_recent_note}: </span>$fuser[recentnote]</p><!--{/if}-->
							<p class="ptm xg1">
								<!--{if $memberprofile[$fuid]['resideprovince'] || $memberprofile[$fuid]['residecity']}-->{lang comefrom}: $memberprofile[$fuid]['resideprovince'] $memberprofile[$fuid]['residecity'] &nbsp;<!--{/if}-->
								{lang follow_follower}: <a href="home.php?mod=follow&do=follower&uid=$fuser['followuid']"><strong class="xi2" id="followernum_$fuser['followuid']">$memberinfo[$fuid]['follower']</strong></a>{lang person} &nbsp;
								{lang follow_add}: <a href="home.php?mod=follow&do=following&uid=$fuser['followuid']"><strong class="xi2">$memberinfo[$fuid]['following']</strong></a>{lang person} &nbsp;
								<!--{if $viewself && $fuser[followuid] != $_G[uid]}-->
								<span class="pipe">|</span>
								<a href="home.php?mod=spacecp&ac=follow&op=bkname&fuid=$fuser['followuid']&handlekey=followbkame_$fuser['followuid']" id="fbkname_$fuser['followuid']" onclick="showWindow('followbkame_{$fuser['followuid']}', this.href, 'get', 0);"><!--{if $fuser['bkname']}-->{lang follow_mod_bkname}<!--{else}-->{lang follow_add_bkname}<!--{/if}--></a>
								<!--{if helper_access::check_module('follow')}-->
								<span class="pipe">|</span>
								<a id="a_specialfollow_{$fuser['followuid']}" href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&special={if $fuser['status'] == 1}2{else}1{/if}&fuid=$fuser['followuid']" onclick="ajaxget(this.href);doane(event);"><!--{if $fuser['status'] == 1}-->{lang follow_del_special_following}<!--{else}-->{lang follow_add_special_following}<!--{/if}--></a>
								<!--{/if}-->
								<!--{/if}-->
							</p>
						<!--{else}-->
							<a href="home.php?mod=space&uid=$fuser['uid']" title="$fuser['username']" id="edit_avt" class="flw_avt" c="1" shref="home.php?mod=space&uid=$fuser['uid']"><!--{avatar($fuser['uid'],small)}--></a>
							<!--{if $fuser[uid] != $_G[uid]}-->
								<!--{if $fuser['mutual']}-->
									<!--{if $fuser['mutual'] > 0}--><span class="z flw_status_2">{lang follow_follower_mutual}</span><!--{else}--><span class="z flw_status_1">{lang did_not_follow_to_me}</span><!--{/if}--><a id="a_followmod_{$fuser['uid']}" href="home.php?mod=spacecp&ac=follow&op=del&fuid=$fuser['uid']"  onclick="ajaxget(this.href);doane(event);" class="flw_btn_unfo">{lang follow_del}</a>
								<!--{elseif helper_access::check_module('follow')}-->
									<a id="a_followmod_{$fuser['uid']}" href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$fuser['uid']" onclick="ajaxget(this.href);doane(event);" class="flw_btn_fo">{lang follow_add}</a>
								<!--{/if}-->
							<!--{/if}-->
							<h6 class="pbn xs2"><a href="home.php?mod=space&uid=$fuser['uid']" title="$fuser['username']" class="xi2" c="1" shref="home.php?mod=space&uid=$fuser['uid']">$fuser['username']</a></h6>
							<p><span class="xg1">{lang follow_recent_note}: </span>$fuser[recentnote]</p>
							<p class="ptm xg1">
								<!--{if $memberprofile[$fuid]['resideprovince'] || $memberprofile[$fuid]['residecity']}-->{lang comefrom}: $memberprofile[$fuid]['resideprovince'] $memberprofile[$fuid]['residecity'] &nbsp;<!--{/if}-->
								{lang follow_follower}: <a href="home.php?mod=follow&do=follower&uid=$fuser['uid']"><strong class="xi2" id="followernum_$fuser['uid']">$memberinfo[$fuid]['follower']</strong></a>{lang person} &nbsp;
								{lang follow_add}: <a href="home.php?mod=follow&do=following&uid=$fuser['uid']"><strong class="xi2">$memberinfo[$fuid]['following']</strong></a>{lang person}
							</p>
						<!--{/if}-->
						</li>
					<!--{/loop}-->
					</ul>
					<!--{if !empty($multi)}--><div>$multi</div><!--{/if}-->
					<br/>
				<!--{else}-->
					<div id="nofollowmsg">
						<div class="flw_thread">
							<ul>
								<li>
									<div class="emp">
										<h2 class="xg1 xs2 hm">
											<!--{if $viewself}-->
												<!--{if $do=='following'}-->
													{lang follow_you_following_none}<a href="home.php?mod=follow&view=other" class="xi2">{lang follow_hall}</a>{lang follow_fetch_interested_user}
												<!--{else}-->
													{lang follow_you_follower_none1}<a href="home.php?mod=follow" class="xi2">{lang follow_add_feed}</a>{lang follow_you_follower_none2}
												<!--{/if}-->
											<!--{else}-->
												<!--{if $do=='following'}-->
													{lang follow_user_following_none}
												<!--{else}-->
													{lang follow_user_follower_none}
												<!--{/if}-->

											<!--{/if}-->
										</h2>
									</div>
								</li>
							</ul>
						</div>
					</div>
				<!--{/if}-->
			<!--{/if}-->

		<!--{if !$_G[setting][homepagestyle]}--><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><!--{/if}-->

		<!--{if $do != 'feed'}-->
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

<!--{if $showguide && $do == 'feed'}-->
<style type="text/css">
	.widthauto #nv_menu { width: 95%; }
	.widthauto #nv_menu div { position: absolute;left: 50%;margin-left: -472px;width:944px; }
</style>
<div id="nv_menu" style="display:none;">
	<div>
		<img src="{IMGDIR}/flw_guide.png" alt="" />
		<button class="pn pnc" style="margin: -50px 0 20px 430px;" onclick="hideMenu()"><span>{lang follow_i_know}</span></button>
	</div>
</div>
<script type="text/javascript">
	showMenu({'ctrlid':'nv','pos':'13','cover':'1'});
</script>
<!--{/if}-->

<script type="text/javascript" reload="1">
	function succeedhandle_followmod(url, msg, values) {
		var numObj = $('followernum_'+values['fuid']);
		if(numObj) {followernum = parseInt(numObj.innerHTML);}
		if(values['type'] == 'add') {
			if(values['from'] == 'head') {
				if($('followflag')) $('followflag').style.display = '';
				if($('unfollowflag')) $('unfollowflag').style.display = 'none';
				if($('fbkname_'+values['fuid'])) $('fbkname_'+values['fuid']).style.display = '';
			} else if($('a_followmod_'+values['fuid'])) {

				$('a_followmod_'+values['fuid']).innerHTML = '{lang follow_del}';
				if(values['from'] != 'block') {
					$('a_followmod_'+values['fuid']).className = 'flw_btn_unfo';
				}
				$('a_followmod_'+values['fuid']).href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid']+(values['from'] == 'block' ? '&from=block' : '');

			}
			if(numObj) {
				numObj.innerHTML = followernum + 1;
			}

		} else if(values['type'] == 'del') {
			if(values['from'] == 'head') {
				if($('followflag')) $('followflag').style.display = 'none';
				if($('unfollowflag')) $('unfollowflag').style.display = '';
				if($('followbkame_'+values['fuid'])) $('followbkame_'+values['fuid']).innerHTML = '';
				if($('fbkname_'+values['fuid'])) {
					$('fbkname_'+values['fuid']).innerHTML = '[{lang follow_add_bkname}]';
					$('fbkname_'+values['fuid']).style.display = 'none';
				}
			} else if($('a_followmod_'+values['fuid']))  {
				$('a_followmod_'+values['fuid']).innerHTML = '{lang follow_add}';
				if(values['from'] != 'block') {
					$('a_followmod_'+values['fuid']).className = 'flw_btn_fo';
				}
				$('a_followmod_'+values['fuid']).href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid='+values['fuid']+(values['from'] == 'block' ? '&from=block' : '');
			}
			if(numObj) {
				numObj.innerHTML = followernum - 1;
			}
		} else if(values['type'] == 'special') {
			if(values['from'] == 'head') {
				var specialObj = $('specialflag_'+values['fuid']);
				if(values['special'] == 1) {
					specialObj.className = 'flw_specialfo';
					specialObj.innerHTML = '{lang follow_add_special_following}';
				} else {
					specialObj.className = 'flw_specialunfo';
					specialObj.innerHTML = '{lang follow_del_special_following}';
				}
				specialObj.title = specialObj.innerHTML;
				specialObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&special='+values['special']+'&fuid='+values['fuid']+'&from=head';
			} else {
				$('a_specialfollow_'+values['fuid']).innerHTML = values['special'] == 1 ? '{lang follow_add_special_following}' : '{lang follow_del_special_following}';
				$('a_specialfollow_'+values['fuid']).href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&special='+values['special']+'&fuid='+values['fuid'];
			}
		}
	}
	function changefeed(tid, pid, flag, obj) {
		var x = new Ajax();
		var o = obj.parentNode;
		for(var i = 0; i < 4; i++) {
			if(o.id.indexOf('original_content_') == -1) {
				o = o.parentNode;
			} else {
				break;
			}
		}
		x.get('forum.php?mod=ajax&action=getpostfeed&inajax=1&tid='+tid+'&pid='+pid+'&type=changefeed&flag='+flag, function(s){
			o.innerHTML = s;
		});
	}
	function vieworiginal(clickobj, id) {
		var obj = $(id);
		if(obj.style.display == 'none') {
			obj.style.display =  '';
			clickobj.innerHTML = '- {lang pack_up}';
		} else {
			obj.style.display =  'none';
			clickobj.innerHTML = '+ {lang follow_open_feed}';
		}
	}
</script>

<!--{template common/footer}-->
