<?php echo 'Copyright@Neoconex星点互联';exit;?>
<div id="post_new"></div>

<div class="clear"></div>
<div class="nex_fr_fixbtm">
	<a class="nex_c_t_r_btn Click_to_reply" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$_G[forum_firstpid]&page=$page">我要评论...</a>
	
    <div class="nex_btm_items nex_vt_replies">
        <span><!--{if $thread[replies]>0}--><em><i>{$thread[replies]}</i></em><!--{/if}--></span>
    </div>
			
    <a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]" class="nex_btm_items nex_vt_fav">
        <span><!--{if $_G['forum_thread']['favtimes']>0}--><em><i>{$_G['forum_thread']['favtimes']}</i></em><!--{/if}--></span>
    </a>
			
    <!--{if ($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']}-->
    <!--{if !empty($_G['setting']['recommendthread']['addtext'])}-->
    
        <a class="nex_btm_items nex_vt_like" id="recommend_add" href="forum.php?mod=misc&action=recommend&do=add&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate({$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_add').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][addtext]'">
        <span><!--{if $_G[forum_thread][recommend_add]>0}--><em><i>$_G[forum_thread][recommend_add]</i></em><!--{/if}--></span>
        </a>					
    
    <!--{/if}-->
    <!--{/if}-->
	<a class="nex_btm_items nex_vt_share" onclick="toolShare()"></a></div>
    <div class="sharebg"></div>
    <!-- JiaThis Button BEGIN -->
    <div class="toolShare tsharearea">
        <div class="nex_sharebtns">
            <a class="jiathis_button_qzone" onclick="jiathis_mh5.sendTo('qzone');">
            	<em></em>
            	<i>QQ空间</i>
            </a>
            <a class="jiathis_button_tsina" onclick="jiathis_mh5.sendTo('tsina');">
            	<em></em>
            	<i>新浪微博</i>
            </a>
            <a class="jiathis_button_tqq" onclick="jiathis_mh5.sendTo('tqq');">
            	<em></em>
            	<i>腾讯微博</i>
            </a>
            <a class="jiathis_button_cqq" onclick="jiathis_mh5.sendTo('cqq');">
            	<em></em>
            	<i>QQ好友</i>
            </a>
            <a class="jiathis_button_tieba" onclick="jiathis_mh5.sendTo('tieba');">
            	<em></em>
            	<i>百度贴吧</i>
            </a>
            <a class="jiathis_button_copy" onclick="jiathis_mh5.sendTo('copy');">
            	<em></em>
            	<i>复制链接</i>
            </a>
            <div class="clear"></div>
        </div>
    	<!-- JiaThis Button BEGIN -->
        <div class="nex_closeshare"><a class="share_btn_cancel">取消</a></div>
        <script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_m.js" charset="utf-8"></script>
        <!-- JiaThis Button END -->
    </div>
    
    <script type="text/javascript">
		function toolShare(){
			$(".toolShare").addClass("nex_shareactive");	
				if($(".sharebg").length>0){
					$(".sharebg").addClass("sharebg-active");
				}else{
					$("body").append('<div class="sharebg"></div>');
					$(".sharebg").addClass("sharebg-active");
				}
				$(".sharebg-active,.share_btn_cancel").click(function(){
				$(".tsharearea").removeClass("nex_shareactive");	
				setTimeout(function(){
				$(".sharebg-active").removeClass("sharebg-active");	
				$(".sharebg").remove();	
				},300);
			})
		}	
    </script>
</div>

<script type="text/javascript">
	(function() {
		var form = $('#fastpostform');
		<!--{if !$_G[uid] || $_G[uid] && !$allowpostreply}-->
		$('#fastpostmessage').on('focus', function() {
			<!--{if !$_G[uid]}-->
				popup.open('{lang nologin_tip}', 'confirm', 'member.php?mod=logging&action=login');
			<!--{else}-->
				popup.open('{lang nopostreply}', 'alert');
			<!--{/if}-->
			this.blur();
		});
		<!--{else}-->
		$('#fastpostmessage').on('focus', function() {
			var obj = $(this);
			if(obj.attr('color') == 'gray') {
				obj.attr('value', '');
				obj.removeClass('grey');
				obj.attr('color', 'black');
				$('#fastpostsubmitline').css('display', 'block');
			}
		})
		.on('blur', function() {
			var obj = $(this);
			if(obj.attr('value') == '') {
				obj.addClass('grey');
				obj.attr('value', '{lang send_reply_fast_tip}');
				obj.attr('color', 'gray');
			}
		});
		<!--{/if}-->
		$('#fastpostsubmit').on('click', function() {
			var msgobj = $('#fastpostmessage');
			if(msgobj.val() == '{lang send_reply_fast_tip}') {
				msgobj.attr('value', '');
			}
			$.ajax({
				type:'POST',
				url:form.attr('action') + '&handlekey=fastpost&loc=1&inajax=1',
				data:form.serialize(),
				dataType:'xml'
			})
			.success(function(s) {
				evalscript(s.lastChild.firstChild.nodeValue);
				window.location.reload();
			})
			.error(function() {
				window.location.href = obj.attr('href');
				popup.close();
			});
			return false;
		});

		$('#replyid').on('click', function() {
			$(document).scrollTop($(document).height());
			$('#fastpostmessage')[0].focus();
		});

	})();

	function succeedhandle_fastpost(locationhref, message, param) {
		var pid = param['pid'];
		var tid = param['tid'];
		if(pid) {
			$.ajax({
				type:'POST',
				url:'forum.php?mod=viewthread&tid=' + tid + '&viewpid=' + pid + '&mobile=2',
				dataType:'xml'
			})
			.success(function(s) {
				$('#post_new').append(s.lastChild.firstChild.nodeValue);
			})
			.error(function() {
				window.location.href = 'forum.php?mod=viewthread&tid=' + tid;
				popup.close();
			});
		} else {
			if(!message) {
				message = '{lang postreplyneedmod}';
			}
			popup.open(message, 'alert');
		}
		$('#fastpostmessage').attr('value', '');
		if(param['sechash']) {
			$('.seccodeimg').click();
		}
	}

	function errorhandle_fastpost(message, param) {
		popup.open(message, 'alert');
	}
</script>
<script type="text/javascript">
$(".nex_vt_replies").toggle(function(){
		$("html,body").animate({scrollTop:$("#nex_quickreplies").offset().top},500);},
	function(){
		$("html,body").animate({scrollTop:0},500);}
);

</script>
