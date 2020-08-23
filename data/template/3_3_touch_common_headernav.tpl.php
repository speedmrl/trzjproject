<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<nav class="st-menu st-effect-3" id="menu-3">
            <div class="nex_nav_dlbox">
            <?php if($_G['uid']) { ?>
            <div class="nex_nav_dlboxsti">
                <a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1">
                    <div class="nex_nav_tx">
                        <?php echo avatar($_G[uid],big);?>                        <?php if($_G['member']['newpm']) { ?>
                        <em><b><?php echo $_G['member']['newpm'];?></b></em>
                        <?php } elseif($_G['member']['newprompt']) { ?>
                        <em><b><?php echo $_G['member']['newprompt'];?></b></em>
                        <?php } ?>
                    </div>
                    <div class="nex_nav_name"><?php echo $_G['group']['grouptitle'];?>：<?php echo $_G['member']['username'];?></div>
                    <div class="nex_nav_infos">
                        <?php include 'template/nex_mdeco_180401/touch/php/nex_users.php'?>                        <div class="nexmemberinfos">
                            <ul>
                                <li class="nexmemberinfosones">
                                    <p>
                                        <?php if($nex_gender == '1') { ?>
                                        <em>男</em>
                                        <?php } ?>
                                        <?php if($nex_gender == '2') { ?>
                                        <em>女</em>
                                        <?php } ?>
                                        <?php if($nex_gender == '0') { ?>
                                        <em>保密</em>
                                        <?php } ?>
                                    </p>
                                    <div class="nexmemberinfoterms">性别</div>
                                </li>
                                <li class="nexmemberinfosthrees">
                                    <?php if($nex_xiaoqu == '') { ?>
                                    <p>未填写</p>
                                    <?php } else { ?>
                                    <p><?php echo $nex_xiaoqu;?></p>
                                    <?php } ?>
                                    <div class="nexmemberinfoterms">小区名称</div>
                                </li>
                                <li class="nexmemberinfostwos">
                                    <?php if($nex_decorstatus == '') { ?>
                                    <p>未填写</p>
                                    <?php } else { ?>
                                    <p><?php echo $nex_decorstatus;?></p>
                                    <?php } ?>
                                    <div class="nexmemberinfoterms">装修状态</div>
                                </li>
                                
                                <div class="clear"></div>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="clear"></div>
                </a>
            </div>
            <?php } elseif(!$_G['connectguest']) { ?>
            <div class="nex_nav_dlboxstd">
                <div class="nex_nav_userbns">
                    <a class="nex_nav_dl" href="member.php?mod=logging&amp;action=login">登录</a>
                    <a class="nex_nav_zc" href="member.php?mod=<?php echo $_G['setting']['regname'];?>">注册</a>
                    <div class="clear"></div>
                </div>
                <div class="nex_nav_user"><img src="<?php echo $_G['style']['styleimgdir'];?>/headertop/default_avator.png" /></div>
                <div class="nex_nav_welcome">亲爱的游客，您好</div>
                <div class="clear"></div>
            </div>
            <?php } ?>
            </div>
            <div class="nex_navbox">
                <ul>
                    <li class="nex_navicon1"><a href="portal.php?mod=index&amp;yccsrj=2">手机门户</a></li>
                    <li class="nex_navicon2"><a href="forum.php?forumlist=1&amp;mobile=2">论坛板块</a></li>
                    <li class="nex_navicon3"><a href="forum.php?mod=guide&amp;view=newthread&amp;mobile=2">社区话题</a></li>
                    <li class="nex_navicon4"><a href="forum.php?mod=forumdisplay&amp;fid=2&amp;mobile=2">装修案例</a></li>
                    <li class="nex_navicon5"><a href="forum.php?mod=forumdisplay&amp;fid=2&amp;mobile=2">设计师</a></li>
                    <li class="nex_navicon6"><a href="forum.php?mod=forumdisplay&amp;fid=60&amp;mobile=2">装修效果图</a></li>
                    <li class="nex_navicon7"><a href="portal.php?mod=list&amp;catid=4">装修资讯</a></li>
                   
                    <li class="nex_navicon10"><a href="about.php?mod=index&amp;mobile=2">关于我们</a></li>
                </ul>
            </div>
        </nav>
                
                
<div class="nex_navbar">
    <div class="nextoplogo"><img src="<?php echo $_G['style']['styleimgdir'];?>/logo.png" /></div>
    <div class="nex_navtelnum"><a href="tel:13995402314">联系电话</a></div>
    <div class="nex_navsearch"><a href="search.php?mod=forum&amp;mobile=2"></a></div>
    <div class="nex_navright">
        <div id="st-trigger-effects" class="nex_navtop_column"><button class="nex_subnavs" data-effect="st-effect-3"></button></div>
    </div>
    <div class="clear"></div>
</div>
<script src="<?php echo $_G['style']['styleimgdir'];?>/js/define.js" type="text/javascript"></script>
<script src="<?php echo $_G['style']['styleimgdir'];?>/js/effect.js" type="text/javascript"></script>
