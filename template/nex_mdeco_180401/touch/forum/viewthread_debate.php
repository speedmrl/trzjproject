<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if $debate[umpire]}-->
	<!--{if $debate['umpirepoint']}-->
	<div>
		<p>
			<!--{if $debate[winner]}-->
			<!--{if $debate[winner] == 1}-->
			<label><strong>{lang debate_square}</strong>{lang debate_winner}</label>
			<!--{elseif $debate[winner] == 2}-->
			<label><strong>{lang debate_opponent}</strong>{lang debate_winner}</label>
			<!--{else}-->
			<label><strong>{lang debate_draw}</strong></label>
			<!--{/if}-->
			<!--{/if}-->
			<em>{lang debate_comment_dateline}: $debate[endtime]</em>
		</p>
		<!--{if $debate[umpirepoint]}--><p><strong>{lang debate_umpirepoint}</strong>: $debate[umpirepoint]</p><!--{/if}-->
		<!--{if $debate[bestdebater]}--><p><strong>{lang debate_bestdebater}</strong>: $debate[bestdebater]</p><!--{/if}-->
	</div>
	<!--{/if}-->
<!--{/if}-->

<div class="mbn nex_debatebox">
	<!--{if !$_G['forum_thread']['is_archived']}-->
	<div class="nex_debatetops">
    	<div class="nex_debatetl">
        	正方<em>已有$debate[affirmvotes]人支持</em>
        </div>
        <div class="nex_debatetr">
        	反方<em>已有($debate[negavotes])人支持</em>
        </div>
        <div class="clear"></div>
    </div>
	<div class="nex_debateboxed">
    	<div class="nex_d_aff">
        	<h5><!--{if !$_G['forum_thread']['is_archived']}-->
			<a href="forum.php?mod=misc&action=debatevote&tid=$_G[tid]&stand=1" id="affirmbutton" >{lang debate_support}<em>($debate[affirmvotes])</em></a><!--{/if}--></h5>
            <div class="nex_gd_guandian">[正方]$debate[affirmpoint]</div>
            <div class="nex_d_btmzfang">
            	<div class="nex_d_dfrt nex_d_dfrt_zf">
                	{lang debater}:$debate[affirmdebaters] 
                </div>
                <div class="nex_d_tyuyu nex_d_tyuyu_zf"><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&stand=1{if $_GET[from]}&from=$_GET[from]{/if}" onclick="showWindow('reply', this.href)">参与</a> </div>
                <div class="clear"></div>
                <div class="nex_d_bianshou">
                	<ul>
                    	<!--{loop $debate[affirmavatars] $user}-->
                        <li>
                            <a href="home.php?mod=space&uid=$user[authorid]">
                                $user[avatar]
                            </a>
                        </li>
                        <!--{/if}-->
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>    
        </div>
        <div class="nex_d_mm">
        	<div class="nex_barfdr"><em style="height: {echo $debate[affirmvoteswidth]}%;"></em></div>
        	<div class="nex_d_vsd">VS</div>
            <div class="nex_barfdrt"><em style="height: {echo $debate[negavoteswidth]}%;"></em></div>
            <div class="clear"></div>
        </div>
        <div class="nex_d_neg">
        	<h5><!--{if !$_G['forum_thread']['is_archived']}-->
			<a href="forum.php?mod=misc&action=debatevote&tid=$_G[tid]&stand=1" id="affirmbutton" >{lang debate_support}<em>($debate[negavotes])</em></a><!--{/if}--></h5>
            <div class="nex_gd_guandian">[反方]$debate[negapoint]</div>
            <div class="nex_d_btmfdf">
            	<div class="nex_d_dfrt">
                	{lang debater}:$debate[negadebaters] 
                </div>
                <div class="nex_d_tyuyu"><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&stand=2{if $_GET[from]}&from=$_GET[from]{/if}" onclick="showWindow('reply', this.href)">参与</a></div>
                <div class="clear"></div>
                <div class="nex_d_bianshou">
                	<ul>
                    	<!--{loop $debate[negaavatars] $user}-->
                        <li>
                            <a href="home.php?mod=space&uid=$user[authorid]">
                                $user[avatar]
                            </a>
                        </li>
                        <!--{/if}-->
                        <div class="clear"></div>
                    </ul>
                </div>
            </div> 
        </div>
        <div class="clear"></div>
    </div>
    <!--{/if}-->
</div>

<div>
<!--{if $debate[endtime]}-->
	<div class="nex_d_endings">{lang endtime}: $debate[endtime] <!--{if $debate[umpire]}--><em>{lang debate_umpire}: $debate[umpire]</em><!--{/if}--></div>
<!--{/if}-->

<!--{if $debate[umpire] && $_G['username'] && $debate[umpire] == $_G['member']['username']}-->
	<p class="mtn nex_endingbtns">
	<!--{if $debate[remaintime] && !$debate[umpirepoint]}-->
	 <a href="forum.php?mod=misc&action=debateumpire&tid=$_G[tid]&pid=$post[pid]{if $_GET[from]}&from=$_GET[from]{/if}" >{lang debate_umpire_end}</a>
	<!--{elseif TIMESTAMP - $debate['dbendtime'] < 3600}-->
	 <a href="forum.php?mod=misc&action=debateumpire&tid=$_G[tid]&pid=$post[pid]{if $_GET[from]}&from=$_GET[from]{/if}" >{lang debate_umpirepoint_edit}</a>
	<!--{/if}-->
	</p>
<!--{/if}-->
<div class="nex_d_biaotis">辩论话题</div>
<div id="postmessage_$post[pid]" class="postmessage">$post[message]</div>




</div>