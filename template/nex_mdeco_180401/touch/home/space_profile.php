<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if $_GET['mycenter'] && !$_G['uid']}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
<!--{/if}-->
<!--{template common/header}-->
<!--{eval include 'template/nex_mdeco_180401/touch/php/multiops.php'}-->
<!--{if $_G['uid'] == $space['uid']}-->
<div class="nex_u_center_Top">
    <div class="nex_bbstopnav_viewthread" style="border-bottom:0; background:none;position:relative;">
        <a href="javascript:history.back()" class="z nexback"></a>
        <span class="category">
            个人资料
        </span>
        <div class="y nex_postbbsbtn nex_personal_setting"><a href="home.php?mod=spacecp&ac=profile"></a></div>
    </div>
    <div class="nex_user_followers">
        <i></i>
        <em>{$nex_user_follows}</em>
    </div>
    <div class="nex_user_moditory">
    	<h5>$space[username]<span>$space[group][grouptitle]</span></h5>
        <div class="nex_uc_infos">
        	<!--{if $nex_uc_province == '' && $nex_uc_adds == ''}-->
            <span>火星网友</span>
            <!--{else}-->
            <span>{$nex_uc_province}{$nex_uc_adds}</span>
            <!--{/if}-->
            <!--{if $nex_uc_occu == ''}-->
            <span>未知职业</span>
            <!--{else}-->
            <span>{$nex_uc_occu}</span>
            <!--{/if}-->
        </div>
        <div class="nex_user_Avatarcenter"><img src="<!--{avatar($space[uid], big, true)}-->" /></div>
    </div>
</div>    

<div class="nex_myinfo_list">
    <ul>
        <li class="nex_myinfo_list_scores">总积分：<span>$space[credits]</span></li>
        <em></em>
        <li class="nex_myinfo_list_money">金钱财富：<span>$nex_user_coins</span></li>
        <div class="clear"></div>
    </ul>
</div>
 <!--{if $nex_self_intros == ''}-->
<div class="nex_user_intros"><p>这个人很懒，什么也没有留下</p></div>
<!--{else}-->
<div class="nex_user_intros"><p>{$nex_self_intros}</p></div>
<!--{/if}-->   

<div class="nex_user_Spot">
    <ul>
    	<li class="nex_zhuti"><a href="home.php?mod=space&uid={$_G[uid]}&do=thread&view=me"><i></i><span>{lang mythread}</span></a></li>
        <li class="nex_shoucang"><a href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=thread"><i></i><span>{lang myfavorite}</span></a></li>
        <li class="nex_xiaoxi"><a href="home.php?mod=space&do=pm"><i></i><span>{lang mypm}</span></a></li>
        <!--{if $space[self]}-->
		<li class="nex_user_MyFriends"><a href="home.php?mod=space&do=friend&mobile=2"><i></i><span>我的好友</span></a></li>
        <!--{/if}-->
        <div class="clear"></div>
    </ul>
</div>
<div class="nex_user_Profile">
    <div class="pbm mbm bbda cl">
        <ul class="pf_l cl pbm mbm">
            <!--{if $_G['setting']['allowspacedomain'] && $_G['setting']['domain']['root']['home'] && checkperm('domainlength') && !empty($space['domain'])}-->
            <!--{eval $spaceurl = 'http://'.$space['domain'].'.'.$_G['setting']['domain']['root']['home'];}-->
            <li><em>{lang second_domain}</em>$spaceurl</li>
            <!--{/if}-->
            <!--{if $_G[setting][homepagestyle]}-->
            <li><em>{lang space_visits}</em>$space[views]</li>
            <!--{/if}-->
            <!--{if in_array($_G[adminid], array(1, 2))}-->
            <li><em>Email</em>$space[email]</li>
            <!--{/if}-->
            <li><em>{lang email_status}</em><!--{if $space[emailstatus] > 0}-->{lang profile_verified}<!--{else}-->{lang profile_no_verified}<!--{/if}--></li>
            <li><em>{lang video_certification}</em><!--{if $space[videophotostatus] > 0}-->{lang profile_certified} <!--{if $showvideophoto}-->&nbsp;&nbsp;({lang view_certification_photos})<!--{/if}--><!--{else}-->{lang profile_no_certified}<!--{/if}--></li>
        </ul>
    
    
        <!--{if CURMODULE == 'space'}-->
            <!--{hook/space_profile_baseinfo_middle}-->
        <!--{elseif CURMODULE == 'follow'}-->
            <!--{hook/follow_profile_baseinfo_middle}-->
        <!--{/if}-->
        <ul class="pf_l cl">
            <!--{loop $profiles $value}-->
            <li><em>$value[title]</em>$value[value]</li>
            <!--{/loop}-->
        </ul>
    </div>
    <div class="pbm mbm bbda cl">
        <ul>
            <!--{if $space[adminid]}--><li><em class="xg1">{lang management_team}&nbsp;&nbsp;</em><span style="color:{$space[admingroup][color]}">{$space[admingroup][grouptitle]}</span> {$space[admingroup][icon]}</li><!--{/if}-->
            <li><em class="xg1">{lang usergroup}&nbsp;&nbsp;</em><span style="color:{$space[group][color]}"{if $upgradecredit !== false} class="xi2" onmouseover="showTip(this)" tip="{lang credits} $space[credits], {lang thread_groupupgrade} $upgradecredit {lang credits}"{/if}>{$space[group][grouptitle]}</span> {$space[group][icon]} <!--{if !empty($space['groupexpiry'])}-->&nbsp;{lang group_useful_life}&nbsp;<!--{date($space[groupexpiry], 'Y-m-d H:i')}--><!--{/if}--></li>
            <!--{if $space[extgroupids]}--><li><em class="xg1">{lang group_expiry_type_ext}&nbsp;&nbsp;</em>$space[extgroupids]</li><!--{/if}-->
        </ul>
        <ul id="pbbs" class="pf_l">
            <!--{if $space[oltime]}--><li><em>{lang online_time}</em>$space[oltime] {lang hours}</li><!--{/if}-->
            <li><em>{lang regdate}</em>$space[regdate]</li>
            <li><em>{lang last_visit}</em>$space[lastvisit]</li>
            <!--{if $_G[uid] == $space[uid] || $_G[group][allowviewip]}-->
            <li><em>{lang register_ip}</em>$space[regip] - $space[regip_loc]</li>
            <li><em>{lang last_visit_ip}</em>$space[lastip]:$space[port] - $space[lastip_loc]</li>
            <!--{/if}-->
            <!--{if $space[lastactivity]}--><li><em>{lang last_activity_time}</em>$space[lastactivity]</li><!--{/if}-->
            <!--{if $space[lastpost]}--><li><em>{lang last_post_time}</em>$space[lastpost]</li><!--{/if}-->
            <!--{if $space[lastsendmail]}--><li><em>{lang last_send_email}</em>$space[lastsendmail]</li><!--{/if}-->
            <li><em>{lang time_offset}</em>
                <!--{eval $timeoffset = array({lang timezone});}-->
                $timeoffset[$space[timeoffset]]
            </li>
        </ul>
        <div class="nex_user_quits"><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout_mobile}</a></div>

        </div>
        <!--{if CURMODULE == 'space'}-->
        <!--{hook/space_profile_extrainfo}-->
        <!--{elseif CURMODULE == 'follow'}-->
        <!--{hook/follow_profile_extrainfo}-->
        <!--{/if}-->
       
    </div>

<!--{else}-->
<div class="nex_u_center_Top">
    <div class="nex_bbstopnav_viewthread" style="border-bottom:0; background:none;position:relative;">
        <a href="javascript:history.back()" class="z nexback"></a>
        <span class="category">
            Ta的资料
        </span>
    </div>
    <div class="nex_user_followers">
        <i></i>
        <em>{$nex_user_follows}</em>
    </div>
    <div class="nex_user_moditory">
    	<h5>$space[username]<span>$space[group][grouptitle]</span></h5>
        <div class="nex_uc_infos">
        	<!--{if $nex_uc_province == '' && $nex_uc_adds == ''}-->
            <span>火星网友</span>
            <!--{else}-->
            <span>{$nex_uc_province}{$nex_uc_adds}</span>
            <!--{/if}-->
            <!--{if $nex_uc_occu == ''}-->
            <span>未知职业</span>
            <!--{else}-->
            <span>{$nex_uc_occu}</span>
            <!--{/if}-->
        </div>
        <div class="nex_user_Avatarcenter"><img src="<!--{avatar($space[uid], big, true)}-->" /></div>
    </div>
</div>    


<div class="nex_myinfo_list">
    <ul>
        <li class="nex_myinfo_list_scores">总积分：<span>$space[credits]</span></li>
        <em></em>
        <li class="nex_myinfo_list_money">金钱财富：<span>$nex_user_coins</span></li>
        <div class="clear"></div>
    </ul>
</div>
 <!--{if $nex_self_intros == ''}-->
<div class="nex_user_intros"><p>这个人很懒，什么也没有留下</p></div>
<!--{else}-->
<div class="nex_user_intros"><p>{$nex_self_intros}</p></div>
<!--{/if}-->   
<div class="nex_user_Spot">
    <ul>
    	<li class="nex_zhuti"><a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&from=space"><i></i><span>Ta的主题</span></a></li>
        <div class="clear"></div>
    </ul>
</div>

<div class="nex_user_Profile">
    <div class="pbm mbm bbda cl">
        <ul class="pf_l cl pbm mbm">
            <!--{if $_G['setting']['allowspacedomain'] && $_G['setting']['domain']['root']['home'] && checkperm('domainlength') && !empty($space['domain'])}-->
            <!--{eval $spaceurl = 'http://'.$space['domain'].'.'.$_G['setting']['domain']['root']['home'];}-->
            <li><em>{lang second_domain}</em><a href="$spaceurl" onclick="setCopy('$spaceurl', '{lang copy_space_address}');return false;">$spaceurl</a></li>
            <!--{/if}-->
            <!--{if $_G[setting][homepagestyle]}-->
            <li><em>{lang space_visits}</em>$space[views]</li>
            <!--{/if}-->
            <!--{if in_array($_G[adminid], array(1, 2))}-->
            <li><em>Email</em>$space[email]</li>
            <!--{/if}-->
            <li><em>{lang email_status}</em><!--{if $space[emailstatus] > 0}-->{lang profile_verified}<!--{else}-->{lang profile_no_verified}<!--{/if}--></li>
            <li><em>{lang video_certification}</em><!--{if $space[videophotostatus] > 0}-->{lang profile_certified} <!--{if $showvideophoto}-->&nbsp;&nbsp;(<a href="home.php?mod=space&uid=$space[uid]&do=videophoto" id="viewphoto" onclick="showWindow(this.id, this.href, 'get', 0)">{lang view_certification_photos}</a>)<!--{/if}--><!--{else}-->{lang profile_no_certified}<!--{/if}--></li>
        </ul>
    
    
        <!--{if CURMODULE == 'space'}-->
            <!--{hook/space_profile_baseinfo_middle}-->
        <!--{elseif CURMODULE == 'follow'}-->
            <!--{hook/follow_profile_baseinfo_middle}-->
        <!--{/if}-->
        <ul class="pf_l cl">
            <!--{loop $profiles $value}-->
            <li><em>$value[title]</em>$value[value]</li>
            <!--{/loop}-->
        </ul>
    </div>
    <div class="pbm mbm bbda cl">
        <ul>
            <!--{if $space[adminid]}--><li><em class="xg1">{lang management_team}&nbsp;&nbsp;</em><span style="color:{$space[admingroup][color]}">{$space[admingroup][grouptitle]}</span> {$space[admingroup][icon]}</li><!--{/if}-->
            <li><em class="xg1">{lang usergroup}&nbsp;&nbsp;</em><span style="color:{$space[group][color]}"{if $upgradecredit !== false} class="xi2" onmouseover="showTip(this)" tip="{lang credits} $space[credits], {lang thread_groupupgrade} $upgradecredit {lang credits}"{/if}>{$space[group][grouptitle]}</span> {$space[group][icon]} <!--{if !empty($space['groupexpiry'])}-->&nbsp;{lang group_useful_life}&nbsp;<!--{date($space[groupexpiry], 'Y-m-d H:i')}--><!--{/if}--></li>
            <!--{if $space[extgroupids]}--><li><em class="xg1">{lang group_expiry_type_ext}&nbsp;&nbsp;</em>$space[extgroupids]</li><!--{/if}-->
        </ul>
        <ul id="pbbs" class="pf_l">
            <!--{if $space[oltime]}--><li><em>{lang online_time}</em>$space[oltime] {lang hours}</li><!--{/if}-->
            <li><em>{lang regdate}</em>$space[regdate]</li>
            <li><em>{lang last_visit}</em>$space[lastvisit]</li>
            <!--{if $_G[uid] == $space[uid] || $_G[group][allowviewip]}-->
            <li><em>{lang register_ip}</em>$space[regip] - $space[regip_loc]</li>
            <li><em>{lang last_visit_ip}</em>$space[lastip]:$space[port] - $space[lastip_loc]</li>
            <!--{/if}-->
            <!--{if $space[lastactivity]}--><li><em>{lang last_activity_time}</em>$space[lastactivity]</li><!--{/if}-->
            <!--{if $space[lastpost]}--><li><em>{lang last_post_time}</em>$space[lastpost]</li><!--{/if}-->
            <!--{if $space[lastsendmail]}--><li><em>{lang last_send_email}</em>$space[lastsendmail]</li><!--{/if}-->
            <li><em>{lang time_offset}</em>
                <!--{eval $timeoffset = array({lang timezone});}-->
                $timeoffset[$space[timeoffset]]
            </li>
        </ul>

        </div>
        <!--{if CURMODULE == 'space'}-->
        <!--{hook/space_profile_extrainfo}-->
        <!--{elseif CURMODULE == 'follow'}-->
        <!--{hook/follow_profile_extrainfo}-->
        <!--{/if}-->
       
    </div>
<!--{/if}-->

<!--{eval $nofooter = true;}-->

<!--{template touch/common/footer}-->
