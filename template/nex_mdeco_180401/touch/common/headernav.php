<?php echo 'Copyright@Neoconex星点互联';exit;?>
<nav class="st-menu st-effect-3" id="menu-3">
            <div class="nex_nav_dlbox">
            <!--{if $_G['uid']}-->
            <div class="nex_nav_dlboxsti">
                <a href="home.php?mod=space&uid={$_G[uid]}&do=profile&mycenter=1">
                    <div class="nex_nav_tx">
                        <!--{avatar($_G[uid],big)}-->
                        <!--{if $_G[member][newpm]}-->
                        <em><b>{$_G[member][newpm]}</b></em>
                        <!--{elseif $_G[member][newprompt]}-->
                        <em><b>{$_G[member][newprompt]}</b></em>
                        <!--{/if}-->
                    </div>
                    <div class="nex_nav_name">$_G[group][grouptitle]：{$_G[member][username]}</div>
                    <div class="nex_nav_infos">
                        <!--{eval include 'template/nex_mdeco_180401/touch/php/nex_users.php'}-->
                        <div class="nexmemberinfos">
                            <ul>
                                <li class="nexmemberinfosones">
                                    <p>
                                        <!--{if $nex_gender == '1'}-->
                                        <em>男</em>
                                        <!--{/if}-->
                                        <!--{if $nex_gender == '2'}-->
                                        <em>女</em>
                                        <!--{/if}-->
                                        <!--{if $nex_gender == '0'}-->
                                        <em>保密</em>
                                        <!--{/if}-->
                                    </p>
                                    <div class="nexmemberinfoterms">性别</div>
                                </li>
                                <li class="nexmemberinfosthrees">
                                    <!--{if $nex_xiaoqu == ''}-->
                                    <p>未填写</p>
                                    <!--{else}-->
                                    <p>{$nex_xiaoqu}</p>
                                    <!--{/if}-->
                                    <div class="nexmemberinfoterms">小区名称</div>
                                </li>
                                <li class="nexmemberinfostwos">
                                    <!--{if $nex_decorstatus == ''}-->
                                    <p>未填写</p>
                                    <!--{else}-->
                                    <p>{$nex_decorstatus}</p>
                                    <!--{/if}-->
                                    <div class="nexmemberinfoterms">装修状态</div>
                                </li>
                                
                                <div class="clear"></div>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="clear"></div>
                </a>
            </div>
            <!--{elseif !$_G[connectguest]}-->
            <div class="nex_nav_dlboxstd">
                <div class="nex_nav_userbns">
                    <a class="nex_nav_dl" href="member.php?mod=logging&action=login">登录</a>
                    <a class="nex_nav_zc" href="member.php?mod={$_G[setting][regname]}">注册</a>
                    <div class="clear"></div>
                </div>
                <div class="nex_nav_user"><img src="$_G['style'][styleimgdir]/headertop/default_avator.png" /></div>
                <div class="nex_nav_welcome">亲爱的游客，您好</div>
                <div class="clear"></div>
            </div>
            <!--{/if}-->
            </div>
            <div class="nex_navbox">
                <ul>
                    <li class="nex_navicon1"><a href="portal.php?mod=index&yccsrj=2">手机门户</a></li>
                    <li class="nex_navicon2"><a href="forum.php?forumlist=1&mobile=2">论坛板块</a></li>
                    <li class="nex_navicon3"><a href="forum.php?mod=guide&view=newthread&mobile=2">社区话题</a></li>
                    <li class="nex_navicon4"><a href="forum.php?mod=forumdisplay&fid=2&mobile=2">装修案例</a></li>
                    <li class="nex_navicon5"><a href="forum.php?mod=forumdisplay&fid=2&mobile=2">设计师</a></li>
                    <li class="nex_navicon6"><a href="forum.php?mod=forumdisplay&fid=60&mobile=2">装修效果图</a></li>
                    <li class="nex_navicon7"><a href="portal.php?mod=list&catid=4">装修资讯</a></li>
                   
                    <li class="nex_navicon10"><a href="about.php?mod=index&mobile=2">关于我们</a></li>
                </ul>
            </div>
        </nav>
                
                
<div class="nex_navbar">
    <div class="nextoplogo"><img src="$_G['style'][styleimgdir]/logo.png" /></div>
    <div class="nex_navtelnum"><a href="tel:13995402314">联系电话</a></div>
    <div class="nex_navsearch"><a href="search.php?mod=forum&mobile=2"></a></div>
    <div class="nex_navright">
        <div id="st-trigger-effects" class="nex_navtop_column"><button class="nex_subnavs" data-effect="st-effect-3"></button></div>
    </div>
    <div class="clear"></div>
</div>
<script src="$_G['style'][styleimgdir]/js/define.js"></script>
<script src="$_G['style'][styleimgdir]/js/effect.js"></script>
