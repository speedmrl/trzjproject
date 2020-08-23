<?php echo 'Copyright@Neoconex星点互联';exit;?>
<div id="postmessage_$post[pid]" class="postmessage">$post[message]</div>

<div class="bt pd2">
<form id="poll" name="poll" method="post" autocomplete="off" action="forum.php?mod=misc&action=votepoll&fid=$_G[fid]&tid=$_G[tid]&pollsubmit=yes{if $_GET[from]}&from=$_GET[from]{/if}&quickforward=yes&mobile=2" >
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<div class="nex_polltitlers">
		<i></i><!--{if $multiple}--><strong>{lang poll_multiple}{lang thread_poll}</strong><!--{if $maxchoices}--><em> ( {lang poll_more_than} )</em><!--{/if}--><!--{else}--><strong>{lang poll_single}{lang thread_poll}</strong><!--{/if}-->
	</div>
	<div class="nex_pollcount">
    	<!--{if $visiblepoll && $_G['group']['allowvote']}-->{lang poll_after_result}<!--{/if}-->{lang poll_voterscount}
    </div>
	<!--{if $_G[forum_thread][remaintime]}-->
	<div class="nex_polldowncounts">
		{lang poll_count_down}:
		<span class="xg1">
		<!--{if $_G[forum_thread][remaintime][0]}-->$_G[forum_thread][remaintime][0] {lang days}<!--{/if}-->
		<!--{if $_G[forum_thread][remaintime][1]}-->$_G[forum_thread][remaintime][1] {lang poll_hour}<!--{/if}-->
		$_G[forum_thread][remaintime][2] {lang poll_minute}
		</span>
	</div>
	<!--{elseif $expiration && $expirations < TIMESTAMP}-->
	<div class="nex_pollends"><strong>{lang poll_end}</strong></div>
	<!--{/if}-->

	<div class="nex_pollcontentslist">
        <!--{loop $polloptions $key $option}-->
            <div class="nex_pollclists">
            <!--{if $_G['group']['allowvote']}-->
                <input type="$optiontype" id="option_$key" name="pollanswers[]" value="$option[polloptionid]" {if $_G['forum_thread']['is_archived']}disabled="disabled"{/if}  />
            <!--{/if}-->
            <label for="option_$key">$key.$option[polloption]</label>
            <!--{if !$visiblepoll}-->
            	<span class="nex_pollbars">
                	<em style="width: $option[percent]%; background-color:#$option[color]"></em>
                    <div class="clear"></div>
                </span>
                <i>
                	$option[percent]% <em style="color:#$option[color]">($option[votes])</em>
                </i>
                <div class="clear"></div>
            <!--{/if}-->
            </div>
        <!--{/loop}-->
        <!--{if $_G['group']['allowvote'] && !$_G['forum_thread']['is_archived']}-->
            <input type="submit" name="pollsubmit" class="nex_pollbtn" id="pollsubmit" value="{lang submit}" />
            <!--{if $overt}-->
                <span class="xg2">({lang poll_msg_overt})</span>
            <!--{/if}-->
        <!--{elseif !$allwvoteusergroup}-->
            <!--{if !$_G['uid']}-->
            <span class="xi1">{lang poll_msg_allwvote_user}</span>
            <!--{else}-->
            <span class="xi1">{lang poll_msg_allwvoteusergroup}</span>
            <!--{/if}-->
        <!--{elseif !$allowvotepolled}-->
            <span class="xi1">{lang poll_msg_allowvotepolled}</span>
        <!--{elseif !$allowvotethread}-->
            <span class="xi1">{lang poll_msg_allowvotethread}</span>
        <!--{/if}-->
	</div>
</form>
</div>
