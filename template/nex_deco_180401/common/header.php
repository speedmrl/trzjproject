<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{subtemplate common/header_common}-->
	<meta name="application-name" content="$_G['setting']['bbname']" />
	<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />
	<!--{if $_G['setting']['portalstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" /><!--{/if}-->
	<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />
	<!--{if $_G['setting']['groupstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" /><!--{/if}-->
	<!--{if helper_access::check_module('feed')}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" /><!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->
		<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />
	<!--{/if}-->
	<!--{if !empty($rsshead)}-->$rsshead<!--{/if}-->
	<!--{if widthauto()}-->
		<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_{STYLEID}_widthauto.css?{VERHASH}" />
		<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
	<!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'home' || $_G['basescript'] == 'userapp'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'portal'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
	<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_{STYLEID}_css_diy.css?{VERHASH}" />
	<!--{/if}-->
     <script type="text/javascript" src='$_G['style'][styleimgdir]/js/jquery-1.8.3.min.js'></script>
	 <script type="text/javascript">
        var jq=jQuery.noConflict();
     </script>
     <script src="$_G['style'][styleimgdir]/js/nexactions.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="$_G['style'][styleimgdir]/js/animate.min.css">
     <script>
     var wow = new WOW({boxClass: 'nexactions',});wow.init();
     </script>
     <script type="text/javascript" src="$_G['style'][styleimgdir]/js/jquery.pagnation.js"></script>
	 <script type="text/javascript" src='$_G['style'][styleimgdir]/js/jquery.SuperSlide.2.1.1.js'></script>
     <script type="text/javascript">
	 jQuery(function(){
	  jQuery('#nexGoToTop').click(function(){jQuery('html,body').animate({scrollTop:jQuery('#nextopsxx').offset().top}, 600);});})
	</script>
     <script language="javascript" type="text/javascript">
		function killErrors() {
			return true;
		}
		window.onerror = killErrors;
	</script>
</head>

<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}" onkeydown="if(event.keyCode==27) return false;">
	<div id="append_parent"></div><div id="ajaxwaitid"></div>
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<!--{template common/header_diy}-->
	<!--{/if}-->
	<!--{if check_diy_perm($topic)}-->
		<!--{template common/header_diynav}-->
	<!--{/if}-->
	<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}-->
		$diynav
	<!--{/if}-->
	<!--{if empty($topic) || $topic['useheader']}-->
		<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->
			<div class="xi1 bm bm_c">
			    {lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a>
			</div>
		<!--{/if}-->
		<!--{if $_G['setting']['shortcut'] && $_G['member'][credits] >= $_G['setting']['shortcut']}-->
			<div id="shortcut">
				<span><a href="javascript:;" id="shortcutcloseid" title="{lang close}">{lang close}</a></span>
				{lang shortcut_notice}
				<a href="javascript:;" id="shortcuttip">{lang shortcut_add}</a>

			</div>
			<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
		<!--{/if}-->
		
		
		<!--{if !IS_ROBOT}-->
			<!--{if $_G['uid']}-->
			<ul id="myprompt_menu" class="p_pop" style="display: none;">
				<li><a href="home.php?mod=space&do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news{if empty($_G[member][newpm])}_0{/if}"></em>{lang pm_center}</a></li>

					<li><a href="home.php?mod=follow&do=follower"><em class="prompt_follower{if empty($_G[member][newprompt_num][follower])}_0{/if}"></em><!--{lang notice_interactive_follower}-->{if $_G[member][newprompt_num][follower]}($_G[member][newprompt_num][follower]){/if}</a></li>

				<!--{if $_G[member][newprompt] && $_G[member][newprompt_num][follow]}-->
					<li><a href="home.php?mod=follow"><em class="prompt_concern"></em><!--{lang notice_interactive_follow}-->($_G[member][newprompt_num][follow])</a></li>
				<!--{/if}-->
				<!--{if $_G[member][newprompt]}-->
					<!--{loop $_G['member']['category_num'] $key $val}-->
						<li><a href="home.php?mod=space&do=notice&view=$key"><em class="notice_$key"></em><!--{echo lang('template', 'notice_'.$key)}-->(<span class="rq">$val</span>)</a></li>
					<!--{/loop}-->
				<!--{/if}-->
				<!--{if empty($_G['cookie']['ignore_notice'])}-->
				<li class="ignore_noticeli"><a href="javascript:;" onClick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="{lang temporarily_to_remind}"><em class="ignore_notice"></em></a></li>
				<!--{/if}-->
				</ul>
			<!--{/if}-->
			<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}-->
				<div id="sslct_menu" class="cl p_pop" style="display: none;">
					<!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onClick="extstyle('')" title="{lang default}"><i></i></span><!--{/if}-->
					<!--{loop $_G['style']['extstyle'] $extstyle}-->
						<span class="sslct_btn" onClick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:$extstyle[2]'></i></span>
					<!--{/loop}-->
				</div>
			<!--{/if}-->
            <!--{if $_G['uid']}-->
				<ul id="myitem_menu" class="p_pop" style="display: none;">
					<li><a href="forum.php?mod=guide&view=my">{lang mypost}</a></li>
					<li><a href="home.php?mod=space&do=favorite&view=me">{lang favorite}</a></li>
					<li><a href="home.php?mod=space&do=friend">{lang friends}</a></li>
					<!--{hook/global_myitem_extra}-->
				</ul>
			<!--{/if}-->
			<!--{subtemplate common/header_qmenu}-->
		<!--{/if}-->

		<!--{ad/headerbanner/wp a_h}-->
		<div id="hd">
        	<div id="nextopsxx"></div>
            <div class="nex_common_top">
            	<!--{hook/global_cpnav_top}-->
            	<div class="w1180">
                	<div class="nex_common_top_L">
                    	您好，欢迎来到<em>银川城市人家</em>
                        <!--{hook/global_cpnav_extra1}-->
                    </div>
                    <div class="nex_common_top_R">
                    	<!--{hook/global_cpnav_extra2}-->
                    	<div class="nex_commoniterms">
                        	<ul>
                            	<li><a href="#" target="_blank">我要合作</a></li>
                        		<li><a href="#" target="_blank"><em>我要装修</em></a></li>
                        		<li><a href="#" target="_blank">联系电话<span>0951-3853009</span></a></li>
                                <li class="nex_wbtop_nav_box">
                                	<div class="nex_webnav">网站导航<i></i></div>
                                    <div class="nex_wbtop_nav">
                                    	<div class="nex_wbtop_nav_inter">
                                        	<div class="nex_wbtop_nav_img"><img src="$_G['style'][styleimgdir]/top/top_nav_icon1.png"></div>
                                            <h5>装修服务</h5>
                                            <p><a href="#" target="_blank">0元设计免费抢</a></p>
                                            <p><a href="#" target="_blank">免费装修报价</a></p>
                                            <p><a href="#" target="_blank">免费验房</a></p>
                                            <p><a href="#" target="_blank">装修保</a></p>
                                            <p><a href="#" target="_blank">装修贷</a></p>
                                        </div>
                                        <div class="nex_wbtop_nav_inter">
                                        	<div class="nex_wbtop_nav_img"><img src="$_G['style'][styleimgdir]/top/top_nav_icon2.png"></div>
                                            <h5>装修案例</h5>
                                            <p><a href="#" target="_blank">效果图库</a></p>
                                            <p><a href="#" target="_blank"> 设计师</a></p>
                                        </div>
                                        <div class="nex_wbtop_nav_inter">
                                        	<div class="nex_wbtop_nav_img"><img src="$_G['style'][styleimgdir]/top/top_nav_icon3.png"></div>
                                            <h5>装修公司</h5>
                                            <p><a href="#" target="_blank">装修公司</a></p>
                                            <p><a href="#" target="_blank">优惠活动</a></p>
                                            <p><a href="#" target="_blank">在建工地</a></p>
                                            <p><a href="#" target="_blank">热门新闻</a></p>
                                        </div>
                                        <div class="nex_wbtop_nav_inter">
                                        	<div class="nex_wbtop_nav_img"><img src="$_G['style'][styleimgdir]/top/top_nav_icon4.png"></div>
                                            <h5>装修攻略</h5>
                                            <p><a href="#" target="_blank">装修学堂</a></p>
                                            <p><a href="#" target="_blank">装修日记</a></p>
                                            <p><a href="#" target="_blank">装修流程</a></p>
                                            <p><a href="#" target="_blank">装修问答</a></p>
                                        </div>
                                        <div class="nex_wbtop_nav_inter" style="border-right:0;">
                                        	<div class="nex_wbtop_nav_img"><img src="$_G['style'][styleimgdir]/top/top_nav_icon5.png"></div>
                                            <h5>更多精彩</h5>
                                            <p><a href="#" target="_blank">业主咨询</a></p>
                                            <p><a href="#" target="_blank">客户合作</a></p>
                                            <p><a href="#" target="_blank">关于我们</a></p>
                                            <p><a href="#" target="_blank">联系我们</a></p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <script type="text/javascript">
										jQuery(".nex_wbtop_nav_box").hover(
										function(){
											jQuery(this).children(".nex_wbtop_nav").show();
											},
										function(){
											jQuery(this).children(".nex_wbtop_nav").hide();
											})
									</script>
                                </li>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    	<!--{template common/header_userstatus}-->
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        	<div class="nexheader">
                <div class="w1180">
                    <div class="nexlogo"><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}--></div>
                    
                    <div class="nexsearch">
                    	<!--{subtemplate common/pubsearchform}-->
                    </div>
                    
                    <div class="nexDL_part">
						<div class="nex_ads_topslider">
                            <ul class="nex_top_adspis">
                                <li><a href="#" target="_blank"><img src="$_G['style'][styleimgdir]/top/slider1.png"></a></li>
                                <li><a href="#" target="_blank"><img src="$_G['style'][styleimgdir]/top/slider2.png"/></a></li>
                                <li><a href="#" target="_blank"><img src="$_G['style'][styleimgdir]/top/slider3.png"/></a></li>
                            </ul>
                            <a class="prev" href="javascript:void(0)"></a>
                            <a class="next" href="javascript:void(0)"></a>
                        </div>
                        <script type="text/javascript">
                            jQuery(".nex_ads_topslider").slide({ mainCell:".nex_top_adspis",effect:"left", autoPlay:true, delayTime:300});
                        </script>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="nex_top_nav">
            	<div class="w1180">
                	<div class="nex_Nav_box">
                    	<!--{eval $mnid = getcurrentnav();}-->
                       <ul>
                        <!--{loop $_G['setting']['navs'] $nav}-->
                            <!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}--><li {if $mnid == $nav[navid]}class="a" {/if}$nav[nav]></li><!--{/if}-->
                        <!--{/loop}-->
                       </ul>
                       <!--{hook/global_nav_extra}-->
                    	<script type="text/javascript" src="$_G['style'][styleimgdir]/js/nv.js"></script>
                    </div>
                    <div class="nex_user_box">
                    	
                    </div>
                    <div class="nex_nav_focus">
                    	<span></span>
                        <div class="nex_nav_focusinter">
                        	<p>送一扫</p>
                            <p>秒变装修达人</p>
                            <div class="nex_nav_focus_ewm"><img src="$_G['style'][styleimgdir]/top/ewm.png"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        	<script type="text/javascript" src="$_G['style'][styleimgdir]/js/nv.js"></script>
            <!--侧边工具栏-->
            <div class="nexsidetls">
                <div class="nexsidetools">
                    <ul>
                        <li class="nexsd_kf">
                            <div class="nexstout">
                                <img src="$_G['style'][styleimgdir]/sidetools/kf.png">
                                <span>联络客服</span>
                            </div>
                            <div class="nexsthds">
                                <div class="nexsthdstops">
                                    <img src="$_G['style'][styleimgdir]/sidetools/qq.png">
                                    <a href="http://wpa.qq.com/msgrd?v=3&uin=$_G['setting']['site_qq']&site=qq&amp;menu=yes" target="_blank">点击联系客服</a>
                                    <p>在线时间：9:00-18:00</p>
                                </div>
                                <div class="nexsthdcbtms">
                                    <h5>联系电话</h5>
                                    <p>09513853009</p>
                                    <h4>电子邮件</h4>
                                    <span>$_G['setting']['adminemail']</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="nexstout">
                                <a onClick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">
                                    <img src="$_G['style'][styleimgdir]/sidetools/gd.png">
                                    <span>发布需求</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="nexstout">
                                <a href="mailto:$_G['setting']['adminemail']" target="_blank">
                                    <img src="$_G['style'][styleimgdir]/sidetools/design.png">
                                    <span>免费设计</span>
                                </a>
                            </div>
                        </li>
                        <li class="nexsd_app">
                        	<a href="#" target="_blank">
                                <div class="nexstout nexstout_app">
                                    <img src="$_G['style'][styleimgdir]/sidetools/caculate.png">
                                    <span>免费报价</span>
                                </div>
                            </a>
                        </li>
                        <li class="nexsd_wx">
                            <div class="nexstout nexstout_wx">
                                <img src="$_G['style'][styleimgdir]/sidetools/wx.png">
                                <span>关注微信</span>
                            </div>
                            <div class="nexsthds nexsthds_weixin">
                                <div class="nexstwxsd">
                                	<img src="$_G['style'][styleimgdir]/sidetools/code.png">
                                    <h5>微信扫一扫</h5>
                                    <p>访问星点微信号</p>
                                    <p>轻松装修不叫事</p>
                                    
                                </div>
                            </div>
                        </li>
                        <!--返回顶部-->
                        <li id="scrolltop">
                            <div class="nexstout nexstout_up">
                                <a id="nexGoToTop">
                                    <img src="$_G['style'][styleimgdir]/sidetools/up.png">
                                    <span>返回顶部</span>
                                </a>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->
            <ul class="p_pop h_pop" id="plugin_menu" style="display: none">
            <!--{loop $_G['setting']['plugins']['jsmenu'] $module}-->
                 <!--{if !$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->
                 <li>$module[url]</li>
                 <!--{/if}-->
            <!--{/loop}-->
            </ul>
            <!--{/if}-->
            $_G[setting][menunavs]
            <div id="mu" class="cl">
            <!--{if $_G['setting']['subnavs']}-->
                <!--{loop $_G[setting][subnavs] $navid $subnav}-->
                    <!--{if $_G['setting']['navsubhover'] || $mnid == $navid}-->
                    <ul class="cl {if $mnid == $navid}current{/if}" id="snav_$navid" style="display:{if $mnid != $navid}none{/if}">
                    $subnav
                    </ul>
                    <!--{/if}-->
                <!--{/loop}-->
            <!--{/if}-->
            </div>
            <!--{ad/subnavbanner/a_mu}-->
        </div>

		<!--{hook/global_header}-->
	<!--{/if}-->

	<div id="wp" class="wp">
		