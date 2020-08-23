<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<!--{if $_GET[mod] == 'misc'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}common.js?{VERHASH}"></script>
<!--{else}-->
<script src="$_G[siteurl]{STATICURL}js/mobile/jquery.min.js?{VERHASH}"></script>
<script src="$_G[siteurl]{STATICURL}js/mobile/common.js?{VERHASH}" charset="{CHARSET}"></script>
<!--{/if}-->

<!-- header start -->
<div class="fastnavheader">
	<a href="forum.php?forumlist=1&mobile=2">返回</a>
	<h1>选择您要发帖的板块</h1>
    <div class="clear"></div>
</div>
<!-- header end -->
<div class="nex_hide_forumBK" style="display:none;">
	<ul id="fs_group">$grouplist</ul>
	<ul id="fs_forum_common">$commonlist</ul>
	<!--{loop $forumlist $forumid $forum}-->
		<ul id="fs_forum_$forumid">$forum</ul>
	<!--{/loop}-->
	<!--{loop $subforumlist $forumid $forum}-->
		<ul id="fs_subforum_$forumid">$forum</ul>
	<!--{/loop}-->
</div>
<div class="nex_post_BOXes">
	<div class="nex_hide_NaV">$_G['setting']['bbname']<span id="pbnv"></span> <a id="enterbtn" class="xg1" href="javascript:;" onclick="locationforums(currentblock, currentfid)">[{lang nav_forum}]</a></div>

	<ul class="nex_post_BOX_lft cl">
		<li id="block_group"></li>
		<li id="block_forum"></li>
		<li id="block_subforum"></li>
	</ul>
	<p class="cl">
		<!--{if $_G['group']['allowpost'] || !$_G['uid']}-->
			<!--{if $special === null}-->
				<button id="postbtn" class="nex_btn nex_post_Blue" onclick="hideWindow('nav');showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=' + selectfid)" disabled="disabled"><span>{lang send_posts}</span></button>
			<!--{else}-->
				<button id="postbtn" class="nex_btn nex_post_Gray" onclick="hideWindow('nav');window.location.href='forum.php?mod=post&action=newthread&fid=' + selectfid + '&special=$special'" disabled="disabled"><span>$actiontitle</span></button>
			<!--{/if}-->
		<!--{/if}-->
		
	</p>
</div>

<script type="text/javascript" reload="1">
var s = '<!--{if $commonfids}--><p><a id="commonforum" href="javascript:;" onclick="switchforums(this, 1, \'common\')" class="pbsb lightlink">{lang nav_forum_frequently}</a></p><!--{/if}-->';
var lis = $('fs_group').getElementsByTagName('LI');
for(i = 0;i < lis.length;i++) {
	var gid = lis[i].getAttribute('fid');
	if($('fs_forum_' + gid)) {
		s += '<p><a href="javascript:;" ondblclick="locationforums(1, ' + gid + ')" onclick="switchforums(this, 1, ' + gid + ')" class="pbsb">' + lis[i].innerHTML + '</a></p>';
	}

}
$('block_group').innerHTML = s;
var lastswitchobj = null;
var selectfid = 0;
var switchforum = switchsubforum = '';

switchforums($('commonforum'), 1, 'common');

function switchforums(obj, block, fid) {
	if(lastswitchobj != obj) {
		if(lastswitchobj) {
			lastswitchobj.parentNode.className = '';
		}
		obj.parentNode.className = 'Add_class';
	}
	var s = '';
	if(fid != 'common') {
		$('enterbtn').className = 'xi2';
		currentblock = block;
		currentfid = fid;
	} else {
		$('enterbtn').className = 'xg1';
	}
	if(block == 1) {
		var lis = $('fs_forum_' + fid).getElementsByTagName('LI');
		for(i = 0;i < lis.length;i++) {
			fid = lis[i].getAttribute('fid');
			if(fid != '') {
				s += '<p><a href="javascript:;" ondblclick="locationforums(2, ' + fid + '\)" onclick="switchforums(this, 2, ' + fid + ')"' + ($('fs_subforum_' + fid) ?  ' class="pbsb"' : '') + '>' + lis[i].innerHTML + '</a></p>';
			}
		}
		$('block_forum').innerHTML = s;
		$('block_subforum').innerHTML = '';
		switchforum = switchsubforum = '';
		selectfid = 0;
		$('postbtn').setAttribute("disabled", "disabled");
		$('postbtn').className = 'nex_btn nex_post_Gray';
	} else if(block == 2) {
		selectfid = fid;
		if($('fs_subforum_' + fid)) {
			var lis = $('fs_subforum_' + fid).getElementsByTagName('LI');
			for(i = 0;i < lis.length;i++) {
				fid = lis[i].getAttribute('fid');
				s += '<p><a href="javascript:;" ondblclick="locationforums(3, ' + fid + ')" onclick="switchforums(this, 3, ' + fid + ')">' + lis[i].innerHTML + '</a></p>';
			}
			$('block_subforum').innerHTML = s;
		} else {
			$('block_subforum').innerHTML = '';
		}
		switchforum = obj.innerHTML;
		switchsubforum = '';
		$('postbtn').removeAttribute("disabled");
		$('postbtn').className = 'nex_btn nex_post_Blue';
	} else {
		selectfid = fid;
		switchsubforum = obj.innerHTML;
		$('postbtn').removeAttribute("disabled");
		$('postbtn').className = 'nex_btn nex_post_Blue';
	}
	lastswitchobj = obj;
	$('pbnv').innerHTML = switchforum ? '&nbsp;&gt;&nbsp;' + switchforum + (switchsubforum ? '&nbsp;&gt;&nbsp;' + switchsubforum : '') : '';
}

function locationforums(block, fid) {
	location.href = block == 1 ? 'forum.php?gid=' + fid : 'forum.php?mod=forumdisplay&fid=' + fid;
}

</script>
<!--{template common/footer}-->