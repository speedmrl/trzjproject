<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<div class="nex_bbstopnav_viewthread">
    <a href="<!--{if $_GET[action] == 'newthread'}-->forum.php?mod=forumdisplay&fid=$_G[fid]&page=$_GET[page]<!--{else}-->forum.php?mod=redirect&goto=findpost&ptid=$_G[tid]&pid=$pid<!--{/if}-->" class="z nexback"></a>
	<span class="category">
		<!--{if $_GET[action] == 'edit'}-->{lang edit}<!--{else}-->{lang send_threads}<!--{/if}-->
	</span>
</div>

<style>
body{ background:#fff!important;}
</style>
<!--{if $special != 2 && $special != 4 && !($isfirstpost && $sortid)}-->
<!--{eval $adveditor = $isfirstpost && $special && ($_GET['action'] == 'newthread' || $_GET['action'] == 'reply' && !empty($_GET['addtrade']) || $_GET['action'] == 'edit' );}-->

<form method="post" id="postform" 
			{if $_GET[action] == 'newthread'}action="forum.php?mod=post&action={if $special != 2}newthread{else}newtrade{/if}&fid=$_G[fid]&extra=$extra&topicsubmit=yes&mobile=2"
			{elseif $_GET[action] == 'reply'}action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$extra&replysubmit=yes&mobile=2"
			{elseif $_GET[action] == 'edit'}action="forum.php?mod=post&action=edit&extra=$extra&editsubmit=yes&mobile=2" $enctype
			{/if}>
<input type="hidden" name="formhash" id="formhash" value="{FORMHASH}" />
<input type="hidden" name="posttime" id="posttime" value="{TIMESTAMP}" />
<!--{if !empty($_GET['modthreadkey'])}--><input type="hidden" name="modthreadkey" id="modthreadkey" value="$_GET['modthreadkey']" /><!--{/if}-->
<!--{if $_GET[action] == 'reply'}-->
	<input type="hidden" name="noticeauthor" value="$noticeauthor" />
	<input type="hidden" name="noticetrimstr" value="$noticetrimstr" />
	<input type="hidden" name="noticeauthormsg" value="$noticeauthormsg" />
	<!--{if $reppid}-->
		<input type="hidden" name="reppid" value="$reppid" />
	<!--{/if}-->
	<!--{if $_GET[reppost]}-->
		<input type="hidden" name="reppost" value="$_GET[reppost]" />
	<!--{elseif $_GET[repquote]}-->
		<input type="hidden" name="reppost" value="$_GET[repquote]" />
	<!--{/if}-->
<!--{/if}-->
<!--{if $_GET[action] == 'edit'}-->
	<input type="hidden" name="fid" id="fid" value="$_G[fid]" />
	<input type="hidden" name="tid" value="$_G[tid]" />
	<input type="hidden" name="pid" value="$pid" />
	<input type="hidden" name="page" value="$_GET[page]" />
<!--{/if}-->

<!--{if $special}-->
	<input type="hidden" name="special" value="$special" />
<!--{/if}-->
<!--{if $specialextra}-->
	<input type="hidden" name="specialextra" value="$specialextra" />
<!--{/if}-->
<div class="post_from">
    <ul class="cl">
        <li>
        <!--{if $_GET['action'] != 'reply'}-->
        <input type="text" tabindex="1" class="inp" id="needsubject" size="30" autocomplete="off" value="$postinfo[subject]" name="subject" placeholder="{lang thread_subject}" fwin="login">
        <!--{else}-->
            RE: $thread['subject']
            <!--{if $quotemessage}-->$quotemessage<!--{/if}-->
        <!--{/if}-->
        </li>
        <!--{if $isfirstpost && !empty($_G['forum'][threadtypes][types])}-->
        <li>
            <div class="login_select">
                <span class="login-btn-inner nex_sort_TYPES">
                    <span class="login-btn-text">
                        <span class="span_question">选择主题分类</span>
                    </span>
                    <span class="icon-arrow">&nbsp;</span>
                </span>
                <select id="typeid" name="typeid" class="sel_list">
                    <option value="0" selected="selected">{lang select_thread_catgory}</option>
                    <!--{loop $_G['forum'][threadtypes][types] $typeid $name}-->
                    <!--{if empty($_G['forum']['threadtypes']['moderators'][$typeid]) || $_G['forum']['ismoderator']}-->
                    <option value="$typeid"{if $thread['typeid'] == $typeid || $_GET['typeid'] == $typeid} selected="selected"{/if}><!--{echo strip_tags($name);}--></option>
                    <!--{/if}-->
                    <!--{/loop}-->
                </select>
            </div>				
        </li>
        <!--{/if}-->
        <!--{if $_GET[action] == 'edit' && $isorigauthor && ($isfirstpost && $thread['replies'] < 1 || !$isfirstpost) && !$rushreply && $_G['setting']['editperdel']}-->
        <li>
            <input type="checkbox" name="delete" id="delete" class="inp" value="1" title="{lang post_delpost}{if $thread[special] == 3}{lang reward_price_back}{/if}"> {lang delete_check}
        </li>
        <!--{/if}-->
        <li>
        <textarea class="textarea nex_Message_Box" id="needmessage" tabindex="3" autocomplete="off" id="{$editorid}_textarea" name="$editor[textarea]" cols="80" rows="2" placeholder="{lang thread_content}" fwin="reply">$postinfo[message]</textarea>
        </li>
        <li class="nex_emoji">
            <!--{template forum/emojis}-->
        </li>
        <script src="$_G['style'][styleimgdir]/js/emoji.js"></script>
        
        
    </ul>
    <li style="padding:0px;">
        <a class="nex_emoji_Btn" href="javascript:;"></a>
        
        <a href="javascript:;" class="nex_ohers_Page" >
            <input type="file" name="Filedata" id="filedata" style="width:35px;height:35px;font-size:30px;opacity:0;"/>
        </a>
        <div class="clear"></div>
    </li>
    <ul id="imglist" class="post_imglist cl bl_line">
    </ul>
    <!--{if $_GET[action] != 'edit' && ($secqaacheck || $seccodecheck)}-->
    <!--{subtemplate common/seccheck}-->
    <!--{/if}-->
    <!--{hook/post_bottom_mobile}-->
</div>
	
<script type="text/javascript">
	(function() {
		$(document).on('change', '.sel_list', function() {
			var obj = $(this);
			$('.span_question').text(obj.find('option:selected').text());
		});
	 })();
</script>
<script type="text/javascript">
$(".nex_emoji_Btn").toggle(function(){
	$(".nex_emoji").show();
	$(".textarea")[0].focus();},
	function(){
	$(".nex_emoji").hide();
	$(".textarea")[0].focus();
});
</script>
<button id="postsubmit" class="btn_pn <!--{if $_GET[action] == 'edit'}-->btn_pn_blue" disable="false"<!--{else}-->btn_pn_grey" disable="true"<!--{/if}-->><span><!--{if $_GET[action] == 'newthread'}-->{lang send_thread}<!--{elseif $_GET[action] == 'reply'}-->{lang join_thread}<!--{elseif $_GET[action] == 'edit'}-->{lang edit_save}<!--{/if}--></span></button>
</form>

<script type="text/javascript">
	(function() {
		var needsubject = needmessage = false;

		<!--{if $_GET[action] == 'reply'}-->
			needsubject = true;
		<!--{elseif $_GET[action] == 'edit'}-->
			needsubject = needmessage = true;
		<!--{/if}-->

		<!--{if $_GET[action] == 'newthread' || ($_GET[action] == 'edit' && $isfirstpost)}-->
		$('#needsubject').on('keyup input', function() {
			var obj = $(this);
			if(obj.val()) {
				needsubject = true;
				if(needmessage == true) {
					$('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
					$('.btn_pn').attr('disable', 'false');
				}
			} else {
				needsubject = false;
				$('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
				$('.btn_pn').attr('disable', 'true');
			}
		});
		<!--{/if}-->
		$('#needmessage').on('keyup input', function() {
			var obj = $(this);
			if(obj.val()) {
				needmessage = true;
				if(needsubject == true) {
					$('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
					$('.btn_pn').attr('disable', 'false');
				}
			} else {
				needmessage = false;
				$('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
				$('.btn_pn').attr('disable', 'true');
			}
		});

		$('#needmessage').on('scroll', function() {
			var obj = $(this);
			if(obj.scrollTop() > 0) {
				obj.attr('rows', parseInt(obj.attr('rows'))+2);
			}
		}).scrollTop($(document).height());
	 })();
</script>


<!--{else}-->


<script src="$_G['style'][styleimgdir]/js/common.js" type="text/javascript"></script>
<script type="text/javascript">
	var allowpostattach = parseInt('{$_G['group']['allowpostattach']}');
	var allowpostimg = parseInt('$allowpostimg');
	var pid = parseInt('$pid');
	var tid = parseInt('$_G[tid]');
	var extensions = '{$_G['group']['attachextensions']}';
	var imgexts = '$imgexts';
	var postminchars = parseInt('$_G['setting']['minpostsize']');
	var postmaxchars = parseInt('$_G['setting']['maxpostsize']');
	var disablepostctrl = parseInt('{$_G['group']['disablepostctrl']}');
	var seccodecheck = parseInt('<!--{if $seccodecheck}-->1<!--{else}-->0<!--{/if}-->');
	var secqaacheck = parseInt('<!--{if $secqaacheck}-->1<!--{else}-->0<!--{/if}-->');
	var typerequired = parseInt('{$_G[forum][threadtypes][required]}');
	var sortrequired = parseInt('{$_G[forum][threadsorts][required]}');
	var special = parseInt('$special');
	var isfirstpost = <!--{if $isfirstpost}-->1<!--{else}-->0<!--{/if}-->;
	var allowposttrade = parseInt('{$_G['group']['allowposttrade']}');
	var allowpostreward = parseInt('{$_G['group']['allowpostreward']}');
	var allowpostactivity = parseInt('{$_G['group']['allowpostactivity']}');
	var sortid = parseInt('$sortid');
	var special = parseInt('$special');
	var fid = $_G['fid'];
	var postaction = '{$_GET['action']}';
	var ispicstyleforum = <!--{if $_G['forum']['picstyle']}-->1<!--{else}-->0<!--{/if}-->;
</script>

<!--{if $_GET[action] == 'edit'}--><!--{eval $editor[value] = $postinfo[message];}--><!--{else}--><!--{eval $editor[value] = $message;}--><!--{/if}-->

<script type="text/javascript" src="{$_G['setting']['jspath']}forum_post.js?{VERHASH}"></script>
<!--{if $isfirstpost && $sortid}-->
	<script type="text/javascript">
		var forum_optionlist = <!--{if $forum_optionlist}-->'$forum_optionlist'<!--{else}-->''<!--{/if}-->;
	</script>
	<script type="text/javascript" src="{$_G['setting']['jspath']}threadsort.js?{VERHASH}"></script>
<!--{/if}-->

<form method="post" id="postform" 
			{if $_GET[action] == 'newthread'}action="forum.php?mod=post&action={if $special != 2}newthread{else}newtrade{/if}&fid=$_G[fid]&extra=$extra&topicsubmit=yes&mobile=2"
			{elseif $_GET[action] == 'reply'}action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$extra&replysubmit=yes&mobile=2"
			{elseif $_GET[action] == 'edit'}action="forum.php?mod=post&action=edit&extra=$extra&editsubmit=yes&mobile=2" $enctype
			{/if}>
			<input type="hidden" name="formhash" id="formhash" value="{FORMHASH}" />
			<input type="hidden" name="posttime" id="posttime" value="{TIMESTAMP}" />
			<!--{if !empty($_GET['modthreadkey'])}--><input type="hidden" name="modthreadkey" id="modthreadkey" value="$_GET['modthreadkey']" /><!--{/if}-->
			<!--{if $_GET[action] == 'reply'}-->
				<input type="hidden" name="noticeauthor" value="$noticeauthor" />
				<input type="hidden" name="noticetrimstr" value="$noticetrimstr" />
				<input type="hidden" name="noticeauthormsg" value="$noticeauthormsg" />
				<!--{if $reppid}-->
					<input type="hidden" name="reppid" value="$reppid" />
				<!--{/if}-->
				<!--{if $_GET[reppost]}-->
					<input type="hidden" name="reppost" value="$_GET[reppost]" />
				<!--{elseif $_GET[repquote]}-->
					<input type="hidden" name="reppost" value="$_GET[repquote]" />
				<!--{/if}-->
			<!--{/if}-->
			<!--{if $_GET[action] == 'edit'}-->
				<input type="hidden" name="fid" id="fid" value="$_G[fid]" />
				<input type="hidden" name="tid" value="$_G[tid]" />
				<input type="hidden" name="pid" value="$pid" />
				<input type="hidden" name="page" value="$_GET[page]" />
			<!--{/if}-->
			
			<!--{if $special}-->
				<input type="hidden" name="special" value="$special" />
			<!--{/if}-->
			<!--{if $specialextra}-->
				<input type="hidden" name="specialextra" value="$specialextra" />
			<!--{/if}-->

			<!-- main postbox start -->
			<div class="nex_Sortlist_box">
				<div class="nex_post_from">
					<ul class="cl">
			
						<div class="clear"></div>
						<!--{template forum/post_editor_extra}-->
						<div class="clear"></div>
						<li class="bl_none area">
						<textarea class="pt" id="needmessage" class="nex_Message_Box" tabindex="3" autocomplete="off" id="{$editorid}_textarea" name="$editor[textarea]" cols="80" rows="2"  placeholder="{lang thread_content}" fwin="reply">$postinfo[message]</textarea>
						</li>

					</ul>
					<ul id="imglist" class="post_imglist cl">
					</ul>
					<!--{if $_GET[action] != 'edit' && ($secqaacheck || $seccodecheck)}-->
					<!--{subtemplate common/seccheck}-->
					<!--{/if}-->
					<!--{hook/post_bottom_mobile}-->
					<button id="postsubmit" class="btn_pn <!--{if $_GET[action] == 'edit'}-->btn_pn_blue" disable="false"<!--{else}-->btn_pn_grey" disable="true"<!--{/if}-->><span><!--{if $_GET[action] == 'newthread'}-->{lang send_thread}<!--{elseif $_GET[action] == 'reply'}-->{lang join_thread}<!--{elseif $_GET[action] == 'edit'}-->{lang edit_save}<!--{/if}--></span></button>
		<input type="hidden" name="{if $_GET[action] == 'newthread'}topicsubmit{elseif $_GET[action] == 'reply'}replysubmit{elseif $_GET[action] == 'edit'}editsubmit{/if}" value="yes">

				</div>
			</div>
			<!-- main postbox start -->
</form>



<!--{/if}-->



<script type="text/javascript" src="{STATICURL}js/mobile/ajaxfileupload.js?{VERHASH}"></script>
<script type="text/javascript" src="{STATICURL}js/mobile/buildfileupload.js?{VERHASH}"></script>
<script type="text/javascript">
	var imgexts = typeof imgexts == 'undefined' ? 'jpg, jpeg, gif, png' : imgexts;
	var STATUSMSG = {
		'-1' : '{lang uploadstatusmsgnag1}',
		'0' : '{lang uploadstatusmsg0}',
		'1' : '{lang uploadstatusmsg1}',
		'2' : '{lang uploadstatusmsg2}',
		'3' : '{lang uploadstatusmsg3}',
		'4' : '{lang uploadstatusmsg4}',
		'5' : '{lang uploadstatusmsg5}',
		'6' : '{lang uploadstatusmsg6}',
		'7' : '{lang uploadstatusmsg7}(' + imgexts + ')',
		'8' : '{lang uploadstatusmsg8}',
		'9' : '{lang uploadstatusmsg9}',
		'10' : '{lang uploadstatusmsg10}',
		'11' : '{lang uploadstatusmsg11}'
	};
	var form = $('#postform');
	$(document).on('change', '#filedata', function() {
			popup.open('<img src="' + IMGDIR + '/imageloading.gif">');

			uploadsuccess = function(data) {
				if(data == '') {
					popup.open('{lang uploadpicfailed}', 'alert');
				}
				var dataarr = data.split('|');
				if(dataarr[0] == 'DISCUZUPLOAD' && dataarr[2] == 0) {
					popup.close();
					$('#imglist').append('<li><span aid="'+dataarr[3]+'" class="del"><a href="javascript:;"><img src="{STATICURL}image/mobile/images/icon_del.png"></a></span><span class="p_img"><a href="javascript:;"><img style="height:54px;width:54px;" id="aimg_'+dataarr[3]+'" title="'+dataarr[6]+'" src="{$_G[setting][attachurl]}forum/'+dataarr[5]+'" /></a></span><input type="hidden" name="attachnew['+dataarr[3]+'][description]" /></li>');
				} else {
					var sizelimit = '';
					if(dataarr[7] == 'ban') {
						sizelimit = '{lang uploadpicatttypeban}';
					} else if(dataarr[7] == 'perday') {
						sizelimit = '{lang donotcross}'+Math.ceil(dataarr[8]/1024)+'K)';
					} else if(dataarr[7] > 0) {
						sizelimit = '{lang donotcross}'+Math.ceil(dataarr[7]/1024)+'K)';
					}
					popup.open(STATUSMSG[dataarr[2]] + sizelimit, 'alert');
				}
			};

			if(typeof FileReader != 'undefined' && this.files[0]) {//note 支持html5上传新特性
				
				$.buildfileupload({
					uploadurl:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
					files:this.files,
					uploadformdata:{uid:"$_G[uid]", hash:"<!--{eval echo md5(substr(md5($_G[config][security][authkey]), 8).$_G[uid])}-->"},
					uploadinputname:'Filedata',
					maxfilesize:"$swfconfig[max]",
					success:uploadsuccess,
					error:function() {
						popup.open('{lang uploadpicfailed}', 'alert');
					}
				});

			} else {

				$.ajaxfileupload({
					url:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
					data:{uid:"$_G[uid]", hash:"<!--{eval echo md5(substr(md5($_G[config][security][authkey]), 8).$_G[uid])}-->"},
					dataType:'text',
					fileElementId:'filedata',
					success:uploadsuccess,
					error: function() {
						popup.open('{lang uploadpicfailed}', 'alert');
					}
				});

			}
	});

	<!--{if 0 && $_G['setting']['mobile']['geoposition']}-->
	geo.getcurrentposition();
	<!--{/if}-->
	$('#postsubmit').on('click', function() {
		var obj = $(this);
		if(obj.attr('disable') == 'true') {
			return false;
		}

		obj.attr('disable', 'true').removeClass('nex_btn_blue').addClass('nex_btn_grey');
		popup.open('<img src="' + IMGDIR + '/imageloading.gif">');

		var postlocation = '';
		if(geo.errmsg === '' && geo.loc) {
			postlocation = geo.longitude + '|' + geo.latitude + '|' + geo.loc;
		}

		$.ajax({
			type:'POST',
			url:form.attr('action') + '&geoloc=' + postlocation + '&handlekey='+form.attr('id')+'&inajax=1',
			data:form.serialize(),
			dataType:'xml'
		})
		.success(function(s) {
			popup.open(s.lastChild.firstChild.nodeValue);
		})
		.error(function() {
			popup.open('{lang networkerror}', 'alert');
		});
		return false;
	});

	$(document).on('click', '.del', function() {
		var obj = $(this);
		$.ajax({
			type:'GET',
			url:'forum.php?mod=ajax&action=deleteattach&inajax=yes&aids[]=' + obj.attr('aid'),
		})
		.success(function(s) {
			obj.parent().remove();
		})
		.error(function() {
			popup.open('{lang networkerror}', 'alert');
		});
		return false;
	});

</script>
<!--{template common/footer}-->
