<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{eval $threadsort = $threadsorts = null;}-->
<!--{template common/header}-->
<div class="nex_threadinertools">
	<ul>
    	<li class="nex_threadinertools_home"><a href="portal.php?mod=index&mobile=2"></a></li>
        <li class="nex_threadinertools_back"><a href="javascript:;" onclick="history.go(-1);"></a></li>
        <li class="nex_threadinertools_scrolltop"><a href="javascript:;" title="{lang scrolltop}" class="scrolltop bottom"></a></li>
    </ul>
</div>
<!-- header start -->
<div class="nex_bbstopnav_viewthread">
    <div class="y nex_fatiez"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]"></a></div>
    <a href="<!--{if $_GET[fromguid] == 'hot'}-->forum.php?mod=guide&view=hot&page=$_GET[page]<!--{else}-->forum.php?mod=forumdisplay&fid=$_G[fid]&<!--{eval echo rawurldecode($_GET[extra]);}--><!--{/if}-->" class="z nexback"></a>
    <span class="category">
        <!--{if $subexists && $_G['page'] == 1}-->
        <span class="display name vm" href="#subname_list">
            <h2 class="tit"><!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}--></h2>
        </span>
        <!--{else}-->
        <!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}-->
        <!--{/if}-->
    </span>
</div>
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
<!--{hook/viewthread_top_mobile}-->
<div class="container">
<!-- main postlist start -->
<div class="postlist">
	<!--{eval $postcount = 0;}-->
	<!--{loop $postlist $post}-->
	<!--{eval $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);}-->
	<!--{if $post[first]}-->
	<div class="nex_viewthreadTop">
		<h3>
        	<!--{if $_G['forum_thread']['typeid'] && $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}-->
				[{$_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}]
            <!--{/if}-->
            <!--{if $threadsorts && $_G['forum_thread']['sortid']}-->
                [{$_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']]}]
			<!--{/if}-->
			$_G[forum_thread][subject]
            <!--{if $_G['forum_thread'][displayorder] == -2}--> <span>({lang moderating})</span>
            <!--{elseif $_G['forum_thread'][displayorder] == -3}--> <span>({lang have_ignored})</span>
            <!--{elseif $_G['forum_thread'][displayorder] == -4}--> <span>({lang draft})</span>
			<!--{/if}-->
            <!-- manage start -->
            <!--{if $post[first]}-->
                <em><a href="#moption_$post[pid]" class="nex_Managing_btn popup blue">{lang manage}</a></em>
                <div id="moption_$post[pid]" popup="true" class="manage" style="display:none;">
                    <!--{if !$_G['forum_thread']['special']}-->
                    <input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]<!--{if $_G[forum_thread][sortid]}--><!--{if $post[first]}-->&sortid={$_G[forum_thread][sortid]}<!--{/if}--><!--{/if}-->{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
                    <!--{/if}-->
                    <input type="button" value="{lang delete}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&operation=delete&optgroup=3&from={$_G[tid]}">
                    <input type="button" value="{lang close}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&from={$_G[tid]}&optgroup=4">
                    <input type="button" value="{lang admin_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
                    <input type="button" value="{lang topicadmin_warn_add}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
                </div>
            <!--{else}-->
                <em><a href="#moption_$post[pid]" class="popup blue">{lang manage}</a></em>
                <div id="moption_$post[pid]" popup="true" class="manage" style="display:none;">
                    <input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
                    <!--{if $_G['group']['allowdelpost']}--><input type="button" value="{lang modmenu_deletepost}" class="dialog button" href="forum.php?mod=topicadmin&action=delpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
                    <!--{if $_G['group']['allowbanpost']}--><input type="button" value="{lang modmenu_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
                    <!--{if $_G['group']['allowwarnpost']}--><input type="button" value="{lang modmenu_warn}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
                </div>
            <!--{/if}-->
            <!-- manage end -->
		</h3>
        <div class="nex_nex_viewthread_td">
        	<!--{eval include 'template/nex_mdeco_180401/touch/php/upid.php'}-->
        	<div class="nex_nex_viewthread_td_from"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]">$nex_bbname<i></i></a></div>
            <div class="nex_nex_viewthread_td_rd">
            	<em class="nex_nod_views">$_G[forum_thread][views]</em>
                <em class="nex_nod_replys">$_G[forum_thread][allreplies]</em>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
		<div class="nex_vt_postUser">
			<div class="nex_bbs_avatar"><a href="home.php?mod=space&uid=$_G[forum_thread][authorid]"><img src="<!--{if !$post['authorid'] || $post['anonymous']}--><!--{avatar(0, big, true)}--><!--{else}--><!--{avatar($post[authorid], big, true)}--><!--{/if}-->" /></a></div>
            <div class="nex_bbs_infosd">
            	<!--{eval include 'template/nex_mdeco_180401/touch/php/forum.php'}-->
            	<a class="nex_vt_admin" href="home.php?mod=space&uid=$_G[forum_thread][authorid]">
                	<em>$_G[forum_thread][author]</em>
                    <div class="nex_vt_lvnid"><i>$nex_levels</i><span>$usergroupID[grouptitle]</span></div>
                    <div class="clear"></div>
                </a>
				<span class="nex_va_date">$post[dateline]</span> 
            </div>
			<div class="nex_bbs_rpts">
                <!--{if !IS_ROBOT && !$_GET['authorid'] && !$_G['forum_thread']['archiveid']}-->
                <a href="forum.php?mod=viewthread&tid=$_G[tid]&page=$page&authorid=$_G[forum_thread][authorid]" rel="nofollow" class="blue nex_lookonly">{lang viewonlyauthorid}</a>
                <!--{elseif !$_G['forum_thread']['archiveid']}-->
                <a href="forum.php?mod=viewthread&tid=$_G[tid]&page=$page" rel="nofollow" class="blue nex_lookonly" style="font-size:12px;font-weight:normal;margin-left:10px;">{lang thread_show_all}</a>
                <!--{/if}-->
                
            </div>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
	</div>
    <!--{/if}-->
	<!--{hook/viewthread_posttop_mobile $postcount}-->
       <div class="nex_vtpostbox plc cl display pi" href="#replybtn_$post[pid]" id="pid$post[pid]">
			<!--{if !$post[first]}-->
			<div class="nex_vt_postListTit">
				<span class="nex_bbs_avatar nex_bbs_avatarbig"><img src="<!--{if !$post['authorid'] || $post['anonymous']}--><!--{avatar(0, big, true)}--><!--{else}--><!--{avatar($post[authorid], big, true)}--><!--{/if}-->" /></span>
				<h4>
					<em class="y nex_vt_louceng">
						<!--{if isset($post[isstick])}-->
							<img src ="{IMGDIR}/settop.png" title="{lang replystick}" class="vm" /> {lang from} {$post[number]}{$postnostick}
						<!--{elseif $post[number] == -1}-->
							{lang recommend_post}
						<!--{else}-->
							<!--{if !empty($postno[$post[number]])}-->$postno[$post[number]]<!--{else}-->{$post[number]}{$postno[0]}<!--{/if}-->
						<!--{/if}-->
					</em>

					<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
					<a href="home.php?mod=space&uid=$post[authorid]" class="nex_hfzz">$post[author]</a>
					<!--{else}-->
						<!--{if !$post['authorid']}-->
						<a href="javascript:;">{lang guest} <em>$post[useip]{if $post[port]}:$post[port]{/if}</em></a>
						<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous']}-->
						<!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$post[authorid]" target="_blank">{lang anonymous}</a><!--{else}-->{lang anonymous}<!--{/if}-->
						<!--{else}-->
						$post[author] <em>{lang member_deleted}</em>
						<!--{/if}-->
					<!--{/if}-->
				</h4>
				<div class="nex_vt_postUser">
				<!--{if $_G['forum']['ismoderator']}-->
					<!-- manage start -->
					<!--{if $post[first]}-->
						<em><a href="#moption_$post[pid]" class="nex_vt_modifications y">{lang manage}</a></em>
						<div id="moption_$post[pid]" popup="true" class="manage" style="display:none;">
							<!--{if !$_G['forum_thread']['special']}-->
							<input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]<!--{if $_G[forum_thread][sortid]}--><!--{if $post[first]}-->&sortid={$_G[forum_thread][sortid]}<!--{/if}--><!--{/if}-->{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
							<!--{/if}-->
							<input type="button" value="{lang delete}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&operation=delete&optgroup=3&from={$_G[tid]}">
							<input type="button" value="{lang close}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&from={$_G[tid]}&optgroup=4">
							<input type="button" value="{lang admin_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
							<input type="button" value="{lang topicadmin_warn_add}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
						</div>
					<!--{else}-->
						<em><a href="#moption_$post[pid]" class="popup nex_vt_modifications y">{lang manage}</a></em>
						<div id="moption_$post[pid]" popup="true" class="manage" style="display:none;">
							<input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
							<!--{if $_G['group']['allowdelpost']}--><input type="button" value="{lang modmenu_deletepost}" class="dialog button" href="forum.php?mod=topicadmin&action=delpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
							<!--{if $_G['group']['allowbanpost']}--><input type="button" value="{lang modmenu_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
							<!--{if $_G['group']['allowwarnpost']}--><input type="button" value="{lang modmenu_warn}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
						</div>
					<!--{/if}-->
					<!-- manage end -->
					<!--{/if}-->
					$post[dateline]
				</div>
			</div>
			<!--{/if}-->
			<div class="nex_vtpostbox nex_vtpostbox_bt">
				<!--{if $post['warned']}-->
                   <span class="grey quote">{lang warn_get}</span>
                    <!--{/if}-->
                    <!--{if !$post['first'] && !empty($post[subject])}-->
                        <h2><strong>$post[subject]</strong></h2>
                    <!--{/if}-->
                    <!--{if $_G['adminid'] != 1 && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || $post['status'] == -1 || $post['memberstatus'])}-->
                        <div class="grey quote">{lang message_banned}</div>
                    <!--{elseif $_G['adminid'] != 1 && $post['status'] & 1}-->
                        <div class="grey quote">{lang message_single_banned}</div>
                    <!--{elseif $needhiddenreply}-->
                        <div class="grey quote">{lang message_ishidden_hiddenreplies}</div>
                    <!--{elseif $post['first'] && $_G['forum_threadpay']}-->
						<!--{template forum/viewthread_pay}-->
					<!--{else}-->

                    	<!--{if $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5))}-->
                           <div class="grey quote">{lang admin_message_banned}</div>
                        <!--{elseif $post['status'] & 1}-->
                            <div class="grey quote">{lang admin_message_single_banned}</div>
                        <!--{/if}-->

                        <!--{if $post['first'] && $threadsort && $threadsortshow}-->
                        	<!--{if $threadsortshow['optionlist'] && !($post['status'] & 1) && !$_G['forum_threadpay']}-->
                                <!--{if $threadsortshow['optionlist'] == 'expire'}-->
                                    {lang has_expired}
                                <!--{else}-->
                                    <div class="box_ex2 viewsort">
                                        <h4>$_G[forum][threadsorts][types][$_G[forum_thread][sortid]]</h4>
                                    <!--{loop $threadsortshow['optionlist'] $option}-->
                                        <!--{if $option['type'] != 'info'}-->
                                            $option[title]: <!--{if $option['value']}-->$option[value] $option[unit]<!--{else}--><span class="grey">--</span><!--{/if}--><br />
                                        <!--{/if}-->
                                    <!--{/loop}-->
                                    </div>
                                <!--{/if}-->
                            <!--{/if}-->
                        <!--{/if}-->
                        <!--{if $post['first']}-->
                        <!--{if $threadsortshow['typetemplate']}-->
                            $threadsortshow[typetemplate]
                            <div class="clear"></div>
                            <span class="nex_reply_contant">
                            $post[message]
                            </span>
                        <!--{elseif $threadsortshow['optionlist']}-->
                            <div class="typeoption">
                                <!--{if $threadsortshow['optionlist'] == 'expire'}-->
                                    {lang has_expired}
                                <!--{else}-->
                                        <h3>$_G[forum][threadsorts][types][$_G[forum_thread][sortid]]</h3>
                                            <!--{loop $threadsortshow['optionlist'] $option}-->
                                                <!--{if $option['type'] != 'info'}-->
                                                    <li class="n_sort">
                                                        <span>$option[title]:</span>
                                                        <span><!--{if $option['value'] !== ''}-->$option[value] $option[unit]<!--{else}-->-<!--{/if}--></span>
                                                    </li>
                                                <!--{/if}-->
                                            <!--{/loop}-->
                                <!--{/if}-->
                            </div>
                            <div class="clear"></div>
                            <span class="nex_reply_contant">
                            $post[message]
                            </span>
                       <!--{elseif !$_G[forum_thread][special]}-->
                            <span class="nex_reply_contant">
                            $post[message]
                            </span>
                        <!--{elseif $_G[forum_thread][special] == 1}-->
                           <span class="nex_reply_contant"> <!--{template forum/viewthread_poll}--></span>
                        <!--{elseif $_G[forum_thread][special] == 2}-->
                            <span class="nex_reply_contant"><!--{template forum/viewthread_trade}--></span>
                        <!--{elseif $_G[forum_thread][special] == 3}-->
                            <span class="nex_reply_contant"><!--{template forum/viewthread_reward}--></span>
                        <!--{elseif $_G[forum_thread][special] == 4}-->
                            <span class="nex_reply_contant"><!--{template forum/viewthread_activity}--></span>
                        <!--{elseif $_G[forum_thread][special] == 5}-->
                            <span class="nex_reply_contant"><!--{template forum/viewthread_debate}--></span>
                        <!--{elseif $threadplughtml}-->
                            <span class="nex_reply_contant">
                            $threadplughtml
                            $post[message]
                            </span>
                        <!--{else}-->
                            <span class="nex_reply_contant">
                            $post[message]
                            </span>
                        <!--{/if}-->
                    <!--{else}-->
                            <span class="nex_reply_contant">
                            $post[message]
                            </span>
                    <!--{/if}-->
                <!--{/if}-->
                
                <!--{if $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
                <span class="nex_reply_contant">
                <!--{if $post['attachment']}-->
                   <div class="grey quote">
                   {lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em>
                   </div>
                <!--{elseif $post['imagelist'] || $post['attachlist']}-->
                   <!--{if $post['imagelist']}-->
                    <!--{if count($post['imagelist']) == 1}-->
                    <ul class="img_one">{echo showattach($post, 1)}</ul>
                    <!--{else}-->
                    <ul class="img_list cl vm">{echo showattach($post, 1)}</ul>
                    <!--{/if}-->
                    <!--{/if}-->
                    <!--{if $post['attachlist']}-->
                    <ul>{echo showattach($post)}</ul>
                    <!--{/if}-->
                <!--{/if}-->
                </span>
                <!--{/if}-->					
                <!--{if $post[first]}-->
                <div class="nex_sharebox">
                	<ul>
                        <li class="nex_ft_ico">
                            <a id="recommend_add" class="replyadd_a nex_dianzan" href="forum.php?mod=misc&action=recommend&do=add&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate({$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_add').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][addtext]'" title="{lang maketoponce}">
                                <i></i>
                                <p>点赞</p>
                                <span id="recommendv_add"{if !$_G['forum_thread']['recommend_add']} style="display:none"{/if}><em>$_G[forum_thread][recommend_add]</em></span>
                            </a>
                        </li>
                        <li class="nex_ft_ico">
                            <a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]" class="nex_favs favbtn blue" <!--{if $_G[forum][ismoderator]}-->style="margin-right:10px;"<!--{/if}-->>
                                <i></i>
                                <p>{lang favorite}</p>
                            </a>
                        </li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <!--{/if}-->
                <div class="clear"></div>
			</div>
			
			<!--{if $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
			<!--{if $post['attachment']}-->
              
            <!--{elseif $post['imagelist'] || $post['attachlist']}-->
               
			<!--{/if}-->
			<!--{/if}-->
			<!--{if $_G[uid] && $allowpostreply && !$post[first]}-->
			<div id="replybtn_$post[pid]" class="replybtn" display="true" style="display:none;position:absolute;right:0px;top:5px;">
				<input type="button" class="redirect button" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&repquote=$post[pid]&extra=$_GET[extra]&page=$page" value="{lang reply}">
			</div>
			<!--{/if}-->
            <!--signature start-->
            <!--{if $post['signature'] && ($_G['setting']['bannedmessages'] & 4 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)))}-->
                <div class="sign">{lang member_signature_banned}</div>
            <!--{elseif $post['signature'] && !$post['anonymous'] && $showsignatures}-->
                <div class="sign"><div style="max-height:{$_G['setting']['maxsigrows']}px;maxHeightIE:{$_G['setting']['maxsigrows']}px;overflow:hidden;">$post[signature]</div><span></span></div>
            <!--{elseif !$post['anonymous'] && $showsignatures && $_G['setting']['globalsightml']}-->
                <div class="sign">$_G['setting']['globalsightml']</div>
            <!--{/if}-->
            <!--signature end-->
            
	</div>
    
	 <!--{if $post['first']}-->
	<div class="nex_vt_posttitles" id="nex_quickreplies">
    	回复评论<em>$_G[forum_thread][allreplies]</em>
    </div>
	<!--{/if}-->
   <!--{hook/viewthread_postbottom_mobile $postcount}-->
   <!--{eval $postcount++;}-->
   <!--{/loop}-->
   <!--{if $_G[forum_thread][replies]<=0}-->
	<div class="nex_vt_nonfirst">
		<P>暂无评论，赶紧抢沙发吧</P>
	</div>
	<!--{/if}-->
   $multipage
	<!--{subtemplate forum/forumdisplay_fastpost}-->  

</div>
<!-- main postlist end -->

<!--{hook/viewthread_bottom_mobile}-->

<script type="text/javascript">
	$('.favbtn').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=favbtn&inajax=1',
			data:{'favoritesubmit':'true', 'formhash':'{FORMHASH}'},
			dataType:'xml',
		})
		.success(function(s) {
			popup.open(s.lastChild.firstChild.nodeValue);
			evalscript(s.lastChild.firstChild.nodeValue);
		})
		.error(function() {
			window.location.href = obj.attr('href');
			popup.close();
		}); 
		return false;
	});
</script>

<!--{template common/footer}-->

