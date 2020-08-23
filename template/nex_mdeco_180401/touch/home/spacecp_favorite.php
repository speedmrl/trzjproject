<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->

<!--{if $_GET['op'] == 'delete'}-->
<div class="nex_Tip">
	<div class="nex_bbstopnav_viewthread">
        <a href="javascript:history.back()" class="z nexback"></a>
		<span class="category">
			删除收藏
		</span>
    </div>
	<div class="nex_Tip_bd">
        <form id="favoriteform_{$favid}" name="favoriteform_{$favid}" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=favorite&op=delete&favid=$favid&type=$_GET[type]&mobile=2">
            <input type="hidden" name="referer" value="{eval echo dreferer();}" />
            <input type="hidden" name="deletesubmit" value="true" />
            <input type="hidden" name="formhash" value="{FORMHASH}" />
        <div class="nex_Tip_box">{lang delete_favorite_message}</div>
        <div class="nex_confirmed"><input type="submit" name="deletesubmitbtn" value="{lang determine}" class="formdialog nex_confirmedbtn nex_confirmedbtn_single"></div>
	</form>
    </div>
</div>    
    
<!--{else}-->
<div class="nex_Tip">
	<div class="nav nex_bbstopnav" style="border-bottom:0;">
        <a href="javascript:history.back()" class="z nexback"></a>
		<span class="nex_category">
			收藏主题
		</span>
    </div>
	<form method="post" autocomplete="off" id="favoriteform_{$id}" name="favoriteform_{$id}" action="home.php?mod=spacecp&ac=favorite&type=$type&id=$id&spaceuid=$spaceuid&mobile=2" >
		<input type="hidden" name="favoritesubmit" value="true" />
		<input type="hidden" name="referer" value="{eval echo dreferer();}" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
	<div class="nex_Tip_box">
        <p><!--{if $_GET[type] == 'forum'}-->{lang favorite_forum_confirm}<!--{elseif $_GET[type] == 'thread'}--> {lang favorite_thread_confirm}<!--{/if}--><div class="nex_fav_title">{$title}</div></p>
        <p>{lang favorite_description}:</p>
        <textarea id="general_{$id}" name="description" rows="1" class="nex_txt_input txt mtn" ><!--{if $description}-->$description<!--{else}-->{lang favorite_description_default}<!--{/if}--></textarea>
	</div>
	<div class="nex_confirmed"><input type="submit" name="favoritesubmit_btn" id="favoritesubmit_btn"  value="{lang determine}" class="nex_confirmedbtn formdialog"><a class="nex_canceled" href="javascript:;" onclick="javascript:history.back();">{lang cancel}</a><div class="clear"></div></div>
	</form>
    </div>
<!--{/if}-->
</div>
<!--{template common/footer}-->
