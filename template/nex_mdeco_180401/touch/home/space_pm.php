<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{eval $_G['home_tpl_titles'] = array('{lang pm}');}-->
<!--{template common/header}-->
<!--{if in_array($filter, array('privatepm')) || in_array($_GET[subop], array('view'))}-->

	<!--{if in_array($filter, array('privatepm'))}-->
	<div class="nex_mypm_top">
    	<div class="y nex_postbbsbtn"><a href="home.php?mod=spacecp&ac=pm"></a></div>
        <a href="javascript:history.back()" class="z nexback"></a>
		<span class="category">
			我的消息
		</span>
    </div>
	<!-- main pmlist start -->
	<div class="nex_PM pmbox">
		<ul>
			<!--{loop $list $key $value}-->
			<li>
			<div class="deam_avatar_img"><!--{if $value[new]}--><span class="nex_pm_num">$value[pmnum]</span><!--{/if}--><img style="height:32px;width:32px;" src="<!--{if $value[pmtype] == 2}-->{STATICURL}image/common/grouppm.png<!--{else}--><!--{avatar($value[touid] ? $value[touid] : ($value[lastauthorid] ? $value[lastauthorid] : $value[authorid]), small, true)}--><!--{/if}-->" /></div>
				<a href="{if $value[touid]}home.php?mod=space&do=pm&subop=view&touid=$value[touid]{else}home.php?mod=space&do=pm&subop=view&plid={$value['plid']}&type=1{/if}">
					<div class="nex_lines">
						<!--{if $value[touid]}-->
							<!--{if $value[msgfromid] == $_G[uid]}-->
								<span class="nex_pm_name"><em>{lang me}</em><span class="nex_pm_time"><!--{date($value[dateline], 'u')}--></span>{lang you_to} {$value[tousername]}{lang say}:</span>
							<!--{else}-->
								<span class="nex_pm_name"><em>{$value[tousername]}</em><span class="nex_pm_time"><!--{date($value[dateline], 'u')}--></span> {lang you_to}{lang me}{lang say}:</span>
							<!--{/if}-->
						<!--{elseif $value['pmtype'] == 2}-->
							<span class="nex_pm_name">{lang chatpm_author}:$value['firstauthor']</span>
						<!--{/if}-->
					</div>
					<div class="nex_lines grey nex_pm_content">
						<span class="nex_pmnr"><!--{if $value['pmtype'] == 2}-->[{lang chatpm}]<!--{if $value[subject]}-->$value[subject]<br><!--{/if}--><!--{/if}--><!--{if $value['pmtype'] == 2 && $value['lastauthor']}--><div style="padding:0 0 0 20px;">......<br>$value['lastauthor'] : $value[message]</div><!--{else}-->$value[message]<!--{/if}--></span>
					</div>
				</a>
			</li>
			<!--{/loop}-->
		</ul>
	</div>
	<!-- main pmlist end -->

	<!--{elseif in_array($_GET[subop], array('view'))}-->

	<!-- header start -->
	
    <div class="nex_mypm_top" style="border-bottom:0;">
        <a href="javascript:history.back()" class="z nexback"></a>
        <span class="category">
            查看消息
        </span>
    </div>
	
	<!-- header end -->
	<!-- main viewmsg_box start -->
	<div class="wp">
		<div class="msgbox nex_PM_box">
			<!--{if !$list}-->
				{lang no_corresponding_pm}
			<!--{else}-->
				<!--{loop $list $key $value}-->
					<!--{subtemplate home/space_pm_node}-->
				<!--{/loop}-->
				$multi
			<!--{/if}-->
		</div>
		<!--{if $list}-->
            <form id="pmform" class="pmform" name="pmform" method="post" action="home.php?mod=spacecp&ac=pm&op=send&pmid=$pmid&daterange=$daterange&pmsubmit=yes&mobile=2" >
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<!--{if !$touid}-->
			<input type="hidden" name="plid" value="$plid" />
			<!--{else}-->
			<input type="hidden" name="touid" value="$touid" />
			<!--{/if}-->
			<div class="reply"><input type="text" value="" class="nex_input_pm px" autocomplete="off" id="replymessage" name="message"></div>
			<div class="reply"><input type="button" name="pmsubmit" id="pmsubmit" class="formdialog nex_button2" value="{lang reply}" /></div>
            </form>

		<!--{/if}-->
	</div>
	<!-- main viewmsg_box end -->

	<!--{/if}-->

<!--{else}-->
	<div class="bm_c">
		{lang user_mobile_pm_error}
	</div>
<!--{/if}-->
<!--{eval $nofooter = false;}-->
