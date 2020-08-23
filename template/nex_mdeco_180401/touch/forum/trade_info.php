<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<!-- header start -->
<div class="nex_bbstopnav_viewthread" style="border-bottom:0;">
        <a href="javascript:history.back()" class="z nexback"></a>
		<span class="category">
			商品详情
		</span>
    </div>
<!-- header end -->
<div class="spvimg nex_coM_spxqpic">
    <!--{if $trade['displayorder'] > 0}--><em class="hot">{lang post_trade_sticklist}</em><!--{/if}-->
    <!--{if $trade['thumb']}-->
        <a href="javascript:;"><img src="$trade[thumb]" onclick="zoom(this, '$trade[attachurl]')" width="{if $trade[width] > 300}300{else}$trade[width]{/if}" _width="300" _height="300" alt="$trade[subject]" /></a>
    <!--{else}-->
        <img src="{IMGDIR}/nophoto.gif" alt="$trade[subject]" />
    <!--{/if}-->
    <!--{if !$_G['forum_thread']['is_archived']}-->
        <!--{if (($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] < $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && $post['authorid'] == $_G['uid'])) && !$post['first'] || $_G['forum']['ismoderator'] && $_G['group']['allowdelpost']}-->
            <p class="ptm pbm">
                <!--{if $_G['forum']['ismoderator'] && $_G['group']['allowdelpost']}--><span class="y"><a href="javascript:;" onclick="modaction('delpost', $_GET[pid])">{lang delete}</a>&nbsp;&nbsp;<!--{/if}--><!--{if $_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || ($_G['uid'] == $_G['thread']['authorid'] && $_G['forum_thread']['closed'] == 0))}--><a onclick="showWindow('setcover_$trade[aid]',this.href)" href="forum.php?mod=ajax&action=setthreadcover&aid=$trade[aid]&fid=$_G[fid]">{lang set_cover}</a>&nbsp;&nbsp;<!--{/if}--></span>
                <a class="editp xi1 xw1" style="padding-left: 20px; " href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">{lang edit_trade}</a>
            </p>
        <!--{/if}-->
    <!--{/if}-->
</div>
<div class="nex_coM_one">
	<h1 class="nex_coM_names">$trade[subject]</h1>
    <div class="nex_coM_Innerprice">
		<!--{if $trade[price] > 0}-->
        <i>￥</i><em>$trade[price]</em>&nbsp;&nbsp;
        <!--{/if}-->
        <!--{if $_G['setting']['creditstransextra'][5] != -1 && $trade[credit]}-->
        <!--{if $trade[price] > 0}-->{lang trade_additional} <!--{/if}--><em>$trade[credit]</em>&nbsp;{$_G[setting][extcredits][$_G['setting']['creditstransextra'][5]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][5]][title]}
        <!--{/if}-->	
	</div>
    <div class="nex_coM_Innerolds">
        <!--{if $trade[price] && $trade['costprice'] > 0 || $_G['setting']['creditstransextra'][5] != -1 && $trade[credit] && $trade['costcredit'] > 0}-->
            {lang trade_costprice}:
                <!--{if $trade['costprice'] > 0}-->
                    <del>$trade[costprice] {lang payment_unit}</del>
                <!--{/if}-->
                <!--{if $_G['setting']['creditstransextra'][5] != -1 && $trade['costcredit'] > 0}-->
                    <del><!--{if $trade[costprice] > 0}-->{lang trade_additional} <!--{/if}-->$trade[costcredit] {$_G[setting][extcredits][$_G['setting']['creditstransextra'][5]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][5]][title]}</del>
                <!--{/if}-->
        <!--{/if}-->
    </div>
    <div class="nex_coM_Nums">
    	<span>
        	{lang post_trade_number}:$trade[amount]
        </span>
        <span style="text-align:center;">{lang post_trade_buynumber}:$trade[totalitems]</span>
        <span style="text-align:right;">
        	{lang trade_type_viewthread}:
            <!--{if $trade['quality'] == 1}-->{lang trade_new}<!--{/if}-->
            <!--{if $trade['quality'] == 2}-->{lang trade_old}<!--{/if}-->
        </span>
        <div class="clear"></div>
    </div>
    
</div>
<div class="nex_coM_one nex_coM_two">
    <div class="nex_coM_Maijia">
        <ul>
            <li>
                <span>{lang trade_remaindays}:</span>
                <!--{if $trade[closed]}-->
                <em>{lang trade_timeout}</em>
                <!--{elseif $trade[expiration] > 0}-->
                    {$trade[expiration]} {lang days} {$trade[expirationhour]} {lang trade_hour}
                <!--{elseif $trade[expiration] == 0}-->
                    {$trade[expirationhour]} {lang trade_hour}
                <!--{elseif $trade[expiration] == -1}-->
                    <em>{lang trade_timeout}</em>
                <!--{else}-->
                    &nbsp;
                <!--{/if}-->
            </li>
            <li>
            	<span>{lang trade_transport}:</span>
            	<!--{if $trade['transport'] == 0}-->{lang post_trade_transport_offline}<!--{/if}-->
				<!--{if $trade['transport'] == 1}-->{lang post_trade_transport_seller}<!--{/if}-->
				<!--{if $trade['transport'] == 2 || $trade['transport'] == 4}-->
					<!--{if $trade['transport'] == 4}-->{lang post_trade_transport_physical}<!--{/if}-->
					<!--{if !empty($trade['ordinaryfee']) || !empty($trade['expressfee']) || !empty($trade['emsfee'])}-->
						<!--{if !empty($trade['ordinaryfee'])}-->{lang post_trade_transport_mail} $trade[ordinaryfee] {lang payment_unit}<!--{/if}-->
						<!--{if !empty($trade['expressfee'])}--> {lang post_trade_transport_express} $trade[expressfee] {lang payment_unit}<!--{/if}-->
						<!--{if !empty($trade['emsfee'])}--> EMS $trade[emsfee] {lang payment_unit}<!--{/if}-->
					<!--{elseif $trade['transport'] == 2}-->
						{lang post_trade_transport_none}
					<!--{/if}-->
				<!--{/if}-->
				<!--{if $trade['transport'] == 3}-->{lang post_trade_transport_virtual}<!--{/if}-->
            </li>
            <li><span><!--{if $trade[locus]}-->{lang trade_locus}:<!--{/if}--></span>$trade[locus]</li>
        </ul>
    </div>
</div>
<div class="nex_coM_one nex_coM_three">
	<h5>卖家信息</h5>
    <ul>
    	<li>
        	<div class="icn avt nex_sellavs">
                <a href="home.php?mod=space&uid=$trade[sellerid]">
                    <div class="nex_inMtx"><!--{avatar($trade[sellerid],small)}--></div>
                    <em>$trade[seller]</em>
                    <!--{if $_G['setting']['verify']['enabled']}-->
                        <!--{loop $_G['setting']['verify'] $vid $verify}-->
                            <!--{if $verify['available'] && $post['verify'.$vid] == 1}-->
                                <a href="home.php?mod=spacecp&ac=profile&op=verify&vid=$vid" target="_blank"><!--{if $verify[icon]}--><img src="$verify[icon]" class="vm" alt="$verify[title]" title="$verify[title]" /><!--{else}-->$verify[title]<!--{/if}--></a>&nbsp;
                            <!--{/if}-->
                        <!--{/loop}-->
                    <!--{/if}-->
                    <!--{if $online}--><img class="vm" title="{lang on_line}" alt="online" src="$_G['style'][styleimgdir]/bbs/ol.png"><!--{/if}-->
                </a>
            </div>
            <div class="nex_coM_contactseller">
            	<a href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$post[authorid]&touid=$post[authorid]&pmid=0&daterange=2" onclick="showWindow('sendpm', this.href)" style="font-weight: 200"><img src="{IMGDIR}/pmto.gif" style="vertical-align:middle" />{lang send_pm}</a>&nbsp;
				<!--{if $post['qq']}-->&nbsp;<a href="http://wpa.qq.com/msgrd?V=3&Uin=$post[qq]&Site=$_G['setting']['bbname']&Menu=yes&from=discuz" target="_blank" title="QQ"><img src="{IMGDIR}/qq.gif" alt="QQ" style="vertical-align:middle" /></a><!--{/if}-->
				<!--{if $post['icq']}-->&nbsp;<a href="http://wwp.icq.com/scripts/search.dll?to=$post[icq]" target="_blank" title="ICQ"><img src="{IMGDIR}/icq.gif" alt="ICQ" style="vertical-align:middle" /></a><!--{/if}-->
				<!--{if $post['yahoo']}-->&nbsp;<a href="http://edit.yahoo.com/config/send_webmesg?.target=$post[yahoo]&.src=pg" target="_blank" title="Yahoo"><img src="{IMGDIR}/yahoo.gif" alt="Yahoo!" style="vertical-align:middle" /></a><!--{/if}-->
				<!--{if $post['taobao']}-->&nbsp;<a href="javascript:;" onclick="window.open('http://amos.im.alisoft.com/msg.aw?v=2&uid='+encodeURIComponent('$post[taobaoas]')+'&site=cntaobao&s=2&charset=utf-8')" title="{lang taobao}"><img src="{IMGDIR}/taobao.gif" alt="{lang taobao}" style="vertical-align:middle" /></a><!--{/if}-->
            </div>
            <div class="clear"></div>
            
        </li>
        <li>
        	<span>{lang trade_seller_real_name}<!--{if $post[realname]}-->$post[realname]<!--{/if}--></span><br>
            <span>{lang eccredit_sellerinfo}<a href="home.php?mod=space&uid=$post[authorid]&do=trade&view=eccredit#sellcredit">$post[buyercredit]&nbsp;<img src="{STATICURL}image/traderank/buyer/$post[buyerrank].gif" border="0" style="vertical-align: middle"></a></span>
			<span>{lang eccredit_buyerinfo}<a href="home.php?mod=space&uid=$post[authorid]&do=trade&view=eccredit#buyercredit">$post[sellercredit]&nbsp;<img src="{STATICURL}image/traderank/seller/$post[sellerrank].gif" border="0" style="vertical-align: middle"></a></span>
        </li>
    </ul>
</div>
<div class="nex_coM_one nex_coM_three">
	<h5>商品详情</h5>
    <div class="c pbm nex_coM_txtsd">
        $post[message]
        <!--{if $post['attachment']}-->
			<div class="notice postattach">{lang attachment}: <em>{lang attach_nopermission}</em></div>
		<!--{elseif $post['imagelist'] || $post['attachlist']}-->
			<div class="pattl">
				<!--{if $post['imagelist']}-->
					 <!--{echo showattach($post, 1)}-->
				<!--{/if}-->
				<!--{if $post['attachlist']}-->
					 <!--{echo showattach($post)}-->
				<!--{/if}-->
			</div>
		<!--{/if}-->
    </div>
		
</div>
<div class="nex_coM_one nex_coM_three">
	<h2>{lang trade_seller_other_goods}</h2>
    <div class="nex_coM_Ralte">
    	<ul>
        	<!--{loop $usertrades $usertrade}-->
            <li>
            	<div class="nex_coM_Rpics">
                	<a href="forum.php?mod=viewthread&tid=$usertrade[tid]&do=tradeinfo&pid=$usertrade[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}" class="tn">
                        <!--{if $usertrade['displayorder'] > 0}--><em class="hot">{lang post_trade_sticklist}</em><!--{/if}-->
                        <!--{if $usertrade['aid']}--><img src="{echo getforumimg($usertrade[aid])}" width="140" alt="$usertrade[subject]" /><!--{else}--><img src="{IMGDIR}/nophoto.gif" width="130" alt="$usertrade[subject]" /><!--{/if}-->
                    </a>
                </div>
                <div class="nex_coM_Rinfos">
                	<h6><a href="forum.php?mod=viewthread&tid=$usertrade[tid]&do=tradeinfo&pid=$usertrade[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}">$usertrade[subject]</a></h6>
                    <div class="nex_coM_itemsd">
                        <!--{if $trade['quality'] == 1}--><span>{lang trade_new}</span><!--{/if}-->
                        <!--{if $trade['quality'] == 2}--><span>{lang trade_old}</span><!--{/if}-->
                        {lang trade_type_buy}
                    </div>
                    <div class="nex_coM_itemsb">
                    	<p>
                    	<!--{if $trade[price] > 0}-->
                            <i>￥</i><em>$trade[price]</em>
                        <!--{/if}-->
                        <!--{if $_G['setting']['creditstransextra'][5] != -1 && $trade[credit]}-->
                            <!--{if $trade['price'] > 0}-->&nbsp;&nbsp;{lang trade_additional} <!--{/if}--><em>$trade[credit]</em>&nbsp;{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][5]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][5]][title]}
                        <!--{/if}-->
                        </p>
                        <p class="xg1">
                            <!--{if $trade['costprice'] > 0}-->
                                原价：<del>$trade[costprice] {lang payment_unit}</del>
                            <!--{/if}-->
                            <!--{if $_G['setting']['creditstransextra'][5] != -1 && $trade['costcredit'] > 0}-->
                                <del><!--{if $trade['costprice'] > 0}-->{lang trade_additional} <!--{/if}-->$trade[costcredit] {$_G[setting][extcredits][$_G['setting']['creditstransextra'][5]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][5]][title]}</del>
                            <!--{/if}-->
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
            </li>
            <!--{/loop}-->
        </ul>
        
    </div>
    
</div>

<!--{template common/footer}-->