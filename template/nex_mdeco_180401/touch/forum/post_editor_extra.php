<?php echo 'Copyright@Neoconex星点互联';exit;?>
<div class="pbt cl">
	<!--{if $sortid}-->
		<input type="hidden" name="sortid" value="$sortid" />
	<!--{/if}-->
	<!--{if $isfirstpost && !empty($_G['forum'][threadtypes][types])}-->
		<div class="ftid">
			<!--{if $_G['forum']['ismoderator'] || empty($_G['forum']['threadtypes']['moderators'][$thread[typeid]])}-->
			<select name="typeid" id="typeid" width="80">
			<option value="0">{lang select_thread_catgory}</option>
			<!--{loop $_G['forum'][threadtypes][types] $typeid $name}-->
				<!--{if empty($_G['forum']['threadtypes']['moderators'][$typeid]) || $_G['forum']['ismoderator']}-->
				<option value="$typeid"{if $thread['typeid'] == $typeid || $_GET['typeid'] == $typeid} selected="selected"{/if}><!--{echo strip_tags($name);}--></option>
				<!--{/if}-->
			<!--{/loop}-->
			</select>
			<!--{else}-->
			[<!--{echo strip_tags($_G['forum']['threadtypes']['types'][$thread[typeid]]);}-->]
			<!--{/if}-->
		</div>
	<!--{/if}-->
	<div class="z">
		<!--{if $_GET[action] == 'reply' && !empty($_GET['addtrade']) || $_GET[action] == 'edit' && $thread['special'] == 2 && !$postinfo['first']}-->
			<input name="subject" type="hidden" value="" />
		<!--{else}-->
			<!--{if $_GET[action] != 'reply'}-->
				<span><input type="text" name="subject" id="subject" class="px nex_intels_Inputs" value="$postinfo[subject]" {if $_GET[action] == 'newthread'}onblur="if($('tags')){relatekw('-1','-1'{if $_G['group']['allowposttag']},function(){extraCheck(4)}{/if});doane();}"{/if} onkeyup="strLenCalc(this, 'checklen', 80);" style="width: 25em" tabindex="1" /></span>
			<!--{else}-->
				<span id="subjecthide" class="z">RE: $thread[subject] [<a href="javascript:;" onclick="display('subjecthide');display('subjectbox');$('subject').value='RE: {echo dhtmlspecialchars(str_replace('\'', '\\\'', $thread[subject]))}';display('subjectchk');strLenCalc($('subject'), 'checklen', 80);return false;">{lang modify}</a>]</span>
				<span id="subjectbox" style="display:none"><input type="text" name="subject" id="subject" class="px" value="" onkeyup="strLenCalc(this, 'checklen', 80);" style="width: 25em" /></span>
			<!--{/if}-->			
			<span class="nex_sort_desc" id="subjectchk"{if $_GET[action] == 'reply'} style="display:none"{/if}>{lang comment_message1} <strong id="checklen">80</strong> {lang comment_message2}</span>
			<script type="text/javascript">strLenCalc($('subject'), 'checklen', 80)</script>
		<!--{/if}-->
		<!--{if $_GET[action] == 'newthread' && $modnewthreads}--> <span class="xg1 xw0">({lang approve})</span><!--{/if}-->
		<!--{if $_GET[action] == 'reply' && $modnewreplies}--> <span class="xg1 xw0">({lang approve})</span><!--{/if}-->
		<!--{if $_GET[action] == 'edit' && $isfirstpost && $thread['displayorder'] == -4}--> <span class="xg1 xw0">({lang draft})</span><!--{/if}-->
	</div>
</div>
<!--{if !$isfirstpost && $thread[special] == 5 && empty($firststand) && $_GET[action] != 'edit'}-->
	<div class="pbt cl">
		<div class="ftid">
			<select name="stand" id="stand">
				<option value="">{lang debate_viewpoint}</option>
				<option value="0">{lang debate_neutral}</option>
				<option value="1"{if $stand == 1} selected="selected"{/if}>{lang debate_square}</option>
				<option value="2"{if $stand == 2} selected="selected"{/if}>{lang debate_opponent}</option>
			</select>
		</div>
	</div>
<!--{/if}-->

<div id="attachnotice_attach" class="tbms mbm xl" style="display:none">
	{lang you_have} <span id="unusednum_attach"></span> {lang attach_unused} &nbsp; <a href="javascript:;" class="xi2" onclick="attachoption('attach', 2);" />{lang attach_view}</a><span class="pipe">|</span><a href="javascript:;" class="xi2" onclick="attachoption('attach', 1)">{lang attach_use}</a><span class="pipe">|</span><a href="javascript:;" class="xi2" onclick="attachoption('attach', 0)">{lang attach_delete}</a>
	<div id="unusedlist_attach" style="display:none"></div>
</div>
<div id="attachnotice_img" class="tbms mbm xl" style="display:none">
	{lang you_have} <span id="unusednum_img"></span> {lang img_unused} &nbsp; <a href="javascript:;" class="xi2" onclick="attachoption('img', 2);" />{lang attach_view}</a><span class="pipe">|</span><a href="javascript:;" class="xi2" onclick="attachoption('img', 1)">{lang attach_use}</a><span class="pipe">|</span><a href="javascript:;" class="xi2" onclick="attachoption('img', 0)">{lang attach_delete}</a>
	<div id="unusedlist_img" style="display:none"></div>
</div>

<!--{if $showthreadsorts}-->
	<div class="exfm cl">
		<!--{template forum/post_sortoption}-->
	</div>
<!--{elseif $adveditor}-->
	<!--{if $special == 1}--><!--{template forum/post_poll}-->
	<!--{elseif $special == 2 && ($_GET[action] != 'edit' || ($_GET[action] == 'edit' && ($thread['authorid'] == $_G['uid'] && $_G['group']['allowposttrade'] || $_G['group']['allowedittrade'])))}--><p class="xg1">{lang post_message1}</p><!--{template forum/post_trade}-->
	<!--{elseif $special == 3}--><!--{template forum/post_reward}-->
	<!--{elseif $special == 4}--><!--{template forum/post_activity}-->
	<!--{elseif $special == 5}--><!--{template forum/post_debate}-->
	<!--{elseif $specialextra}--><div class="specialpost s_clear">$threadplughtml</div>
	<!--{/if}-->
<!--{/if}-->

<!--{if $_GET[action] == 'reply' && $quotemessage}-->
	<div class="pbt cl">$quotemessage</div>
<!--{/if}-->