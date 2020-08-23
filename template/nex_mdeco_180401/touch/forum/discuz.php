<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if $_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1}-->
	<!--{eval dheader('Location:portal.php?mod=index');exit;}-->
<!--{/if}-->
<!--{template common/header}-->
<div id="st-container" class="st-container">
	<div class="st-pusher">
		
		<!--{template common/headernav}-->
	

<script type="text/javascript">
	function getvisitclienthref() {
		var visitclienthref = '';
		if(ios) {
			visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
		} else if(andriod) {
			visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
		}
		return visitclienthref;
	}
</script>

<!--{if $_GET['visitclient']}-->

<header class="header">
    <div class="nav">
		<span>{lang warmtip}</span>
    </div>
</header>

<div class="cl">
	<div class="clew_con">
		<h2 class="tit">{lang zsltmobileclient}</h2>
		<p>{lang visitbbsanytime}<input class="redirect button" id="visitclientid" type="button" value="{lang clicktodownload}" href="" /></p>
		<h2 class="tit">{lang iphoneandriodmobile}</h2>
		<p>{lang visitwapmobile}<input class="redirect button" type="button" value="{lang clicktovisitwapmobile}" href="$_GET[visitclient]" /></p>
	</div>
</div>
<script type="text/javascript">
	var visitclienthref = getvisitclienthref();
	if(visitclienthref) {
		$('#visitclientid').attr('href', visitclienthref);
	} else {
		window.location.href = '$_GET[visitclient]';
	}
</script>

<!--{else}-->

<!-- header start -->
<!--{if $showvisitclient}-->

<div class="visitclienttip vm" style="display:block;">
	<a href="javascript:;" id="visitclientid" class="btn_download">{lang downloadnow}</a>	
	<p>
		{lang downloadzslttoshareview}
	</p>
</div>
<script type="text/javascript">
	var visitclienthref = getvisitclienthref();
	if(visitclienthref) {
		$('#visitclientid').attr('href', visitclienthref);
		$('.visitclienttip').css('display', 'block');
	}
</script>

<!--{/if}-->

<!-- header end -->
<!--{hook/index_top_mobile}-->
<div class="nex_total_all">
	<ul>
    	<li>
        	<h5>$todayposts</h5>
            <p>{lang index_today}</p>
        </li>
        <li>
        	<h5>$postdata[0]</h5>
            <p>{lang index_yesterday}</p>
        </li>
        <li>
        	<h5>$posts</h5>
            <p>{lang index_posts}</p>
        </li>
        <li class="nex_tjlast">
        	<h5>$_G['cache']['userstats']['totalmembers']</h5>
            <p>{lang index_members}</p>
        </li>
        <div class="clear"></div>
    </ul>
    <!--{if $_G['uid']}-->
    <div class="nex_dz_termh">
    	<div class="nex_dz_termh_iner">
        	<a class="nex_my_posts" href="forum.php?mod=guide&view=my">{lang my_posts}</a>
    		<!--{if !empty($_G['setting']['search']['forum']['status'])}-->
            <a class="nex_reply_posts" href="forum.php?mod=guide&view=new">{lang show_newthreads}</a>
            <!--{/if}-->
        </div>
    </div>
    <!--{/if}-->
    
</div>
<!--{if empty($gid) && $announcements}-->
<div class="nex_discuz_annocements">
    <div class="nex_discuz_annol"></div>
    <div class="nex_discuz_annor">
        <ul>$announcements</ul>
    </div>
    <script type="text/javascript">
	jQuery(".nex_discuz_annor").slide({ mainCell:"ul", effect:"topLoop", vis:1, opp:true, autoPlay:true, delayTime:600 });
	</script>
</div>
<!--{/if}-->

<!-- main forumlist start -->
<div class="wp wm nexbbsbd" id="wp">
	<div class="nex_Discuz_forumBOx">
        <!--{if empty($gid) && !empty($forum_favlist)}-->
            <!--{eval $forumscount = count($forum_favlist);}-->
            <!--{eval $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;}-->
            <!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->
            <div class="bm bmw fl" style="margin-bottom:10px;">
            	<div class="subforumshow nex_subforumshow" href="#sub_forum_$cat[fid]">
                	
                    <h2>{lang forum_myfav}</h2>
                    <div class="clear"></div>
                </div>
                <div class="nex_bankuailist">
                   <ul>
                        <!--{eval $favorderid = 0;}-->
                        <!--{loop $forum_favlist $key $favorite}-->
                        <!--{if $favforumlist[$favorite[id]]}-->
                        <!--{eval $forum=$favforumlist[$favorite[id]];}-->
                            <!--{if $forumcolumns>1}-->
                                <!--{if $favorderid && ($favorderid % $forumcolumns == 0)}-->
                                <!--{/if}-->
                                <!--{else}-->
                                <li>
                                    <div class="nex_bk_icon" {if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
                                        
                                        <!--{if $forum[icon]}-->
                                            $forum[icon]
                                        <!--{else}-->
                                            <img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" />
                                        <!--{/if}-->
                                    </div>
                                    <div class="nex_bkinfos_bbs">
                                        <a href="forum.php?mod=forumdisplay&fid={$forum['fid']}">
                                            <h3>
                                                <i>$forum[name]</i>
                                            </h3>
                                            <!--{if $forum[description]}--><p>$forum[description]</p><!--{/if}-->
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                            <!--{/if}-->
                        <!--{/if}-->
                        <!--{/loop}-->
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        <!--{/if}-->
        
        
        <!--{loop $catlist $key $cat}-->
        <div class="bm bmw fl" style="margin-bottom:10px;">
            <div class="subforumshow nex_subforumshow" href="#sub_forum_$cat[fid]">
                <span class="o y">
                    <img src="$_G['style'][styleimgdir]/bbs/collapsed_<!--{if !$_G[setting][mobile][mobileforumview]}-->yes<!--{else}-->no<!--{/if}-->.png?t">
                </span>
                <h2>$cat[name]</h2>
                <div class="clear"></div>
            </div>
            <div class="nex_BankuaiNames">
                <div id="sub_forum_$cat[fid]" class="nex_bankuailist">
                    <ul>
                        <!--{loop $cat[forums] $forumid}-->
                        <!--{eval $forum=$forumlist[$forumid];}-->
                        <li>
                            <div class="nex_bk_icon">
                                <!--{if $forum[icon]}-->
                                    $forum[icon]
                                <!--{else}-->
                                    <img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" />
                                <!--{/if}-->
                                <!--{if $forum[todayposts] > 0}-->
                                <em class="num"><span>$forum[todayposts]</span></em>
                                <!--{/if}-->
                            </div>
                            <div class="nex_bkinfos_bbs" >
                                <a href="forum.php?mod=forumdisplay&fid={$forum['fid']}">
                                    <h3>
                                        <i>{$forum[name]}</i>
                                        
                                    </h3>
                                    <p>$forum[description]</p>
                                </a>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <!--{/loop}-->
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <!--{/loop}-->
    </div>
</div>
<!-- main forumlist end -->
<!--{hook/index_middle_mobile}-->
<script type="text/javascript">
	(function() {
		<!--{if !$_G[setting][mobile][mobileforumview]}-->
			$('.sub_forum').css('display', 'block');
		<!--{else}-->
			$('.sub_forum').css('display', 'none');
		<!--{/if}-->
		$('.subforumshow').on('click', function() {
			var obj = $(this);
			var subobj = $(obj.attr('href'));
			if(subobj.css('display') == 'none') {
				subobj.css('display', 'block');
				obj.find('img').attr('src', 'template/nex_mdeco_180401/neoconex/bbs/collapsed_yes.png');
			} else {
				subobj.css('display', 'none');
				obj.find('img').attr('src', 'template/nex_mdeco_180401/neoconex/bbs/collapsed_no.png');
			}
		});
	 })();
</script>
<!--{/if}-->
<div class="nex_fastPOST"><a href="forum.php?mod=misc&action=nav"></a></div>
<!--{template common/footer}-->
</div>
</div>