<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="nexlogin">    <?php include 'template/nex_deco_180401/php/nex_users.php'?>    <?php if($_G['uid']) { ?>
    <div class="nexallmember">
        <div id="nexmemberinfo">
            <a class="nexvwmy" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间">
                <?php echo avatar($_G[uid],small);?>                <span><?php echo $_G['member']['username'];?></span>
                <i></i>
                <div class="clear"></div>
            </a>
        </div>
        <div id="nexmembercontent">
            <i class="memberindication"></i>
            <div class="nex_membercontop">
                <?php if(check_diy_perm($topic)) { ?><?php echo $diynav;?><?php } ?>
                <div class="nex_user_followers">
                    <i></i>
                    <em><?php echo $nex_user_follows;?></em>
                </div>
                <div class="nex_user_moditory">
                    <h5><?php echo $_G['username'];?><span><?php echo $_G['group']['grouptitle'];?></span></h5>
                    <div class="nex_uc_infos">
                        <?php if($nex_uc_province == '' && $nex_uc_adds == '') { ?>
                        <span>火星网友</span>
                        <?php } else { ?>
                        <span><?php echo $nex_uc_province;?><?php echo $nex_uc_adds;?></span>
                        <?php } ?>
                        <?php if($nex_uc_occu == '') { ?>
                        <span>未知职业</span>
                        <?php } else { ?>
                        <span><?php echo $nex_uc_occu;?></span>
                        <?php } ?>
                    </div>
                    <div class="nex_user_Avatarcenter"><a href="home.php?mod=spacecp&amp;ac=avatar" title="个人设置" target="_blank"><img src="<?php echo avatar($_G[uid], big, true);?>" /></a></div>
                </div>
            </div>
            <div class="nex_myinfo_list">
                <ul>
                    <li class="nex_myinfo_list_scores">积分：<span><?php echo $_G['member']['credits'];?> </span></li>
                    <em></em>
                    <li class="nex_myinfo_list_money">财富：<span><?php echo $nex_user_coins;?></span></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="nex_memberconbtm">
                <ul>
                    <li class="nexnewinfo">
                        <a href="home.php?mod=space&amp;do=pm&amp;filter=newpm" target="_blank">
                            <span class="nex_icon1">
                                <?php if($_G['member']['newpm']) { ?>
                                <em><b><?php echo $_G['member']['newpm'];?></b></em>
                                <?php } elseif($_G['member']['newprompt']) { ?>
                                <em><b><?php echo $_G['member']['newprompt'];?></b></em>
                                <?php } ?>
                            </span>
                            <p>消息</p>
                        </a>
                    </li>
                    <li class="nexatme">
                        <a href="home.php?mod=space&amp;do=notice" target="_blank">
                            <span class="nex_icon2">
                                <?php if($_G['member']['newprompt']) { ?><em><b><?php echo $_G['member']['newprompt'];?></b></em><?php } ?>
                            </span>
                            <p>通知</p>
                        </a>
                    </li>
                    <li class="nexmypost">
                        <a href="forum.php?mod=guide&amp;view=my" target="_blank">
                            <span class="nex_icon3"></span>
                            <p>帖子</p>
                        </a>								
                    </li>
                    <li class="nexhuifume">
                        <a class="" href="home.php?mod=space&amp;do=notice&amp;type=post&amp;isread=<?php echo $_G['uid'];?>" target="_blank">
                            <span class="nex_icon4"></span>
                            <p>回复</p>
                        </a>							
                    </li>
                    <li class="nexmycollection">
                        <a href="home.php?mod=space&amp;do=favorite&amp;view=me" target="_blank">
                            <span class="nex_icon5"></span>
                            <p>收藏</p>
                        </a>
                    </li>
                    <li class="nexfriend">
                        <a href="home.php?mod=space&amp;do=friend" target="_blank">
                            <span class="nex_icon6"></span>
                            <p>好友</p>
                        </a>
                    </li>
                    <?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
                    <li class="nexfriend">
                        <a class="nexguanli" href="admin.php" target="_blank">
                            <span class="nex_icon7"></span>
                            <p>管理</p>
                        </a>
                    </li>
                    <?php } ?>
                    <li class="nexfriend">
                        <a class="nexquit" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">
                            <span class="nex_icon8"></span>
                            <p>退出</p>
                        </a>
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="nexmem_M_btms">
                <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
            
        </div>
<script type="text/javascript">
        jq("#nexmemberinfo").hover(
            function(){
                jq(this).siblings("#nexmembercontent").show();
                },
            function(){
                jq(this).siblings("#nexmembercontent").hide();
                })
        jq("#nexmembercontent").hover(
            function(){
                jq(this).show();
                jq(this).siblings("#nexmemberinfo").addClass("nex_curs");
                },
            function(){
                jq(this).hide();
                jq(this).siblings("#nexmemberinfo").removeClass("nex_curs");
                })
    </script>
<ul>
     <?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
        <li><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></li>
        <li><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">激活</a></li>
        <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
    	<?php } elseif(!$_G['connectguest']) { ?>
    	 <div class="nexmain_dls">
         	<div class="nexDL_before">
            	<div class="nexDL_unknown"><img src="<?php echo $_G['style']['styleimgdir'];?>/usermenu/default_avator.png" /></div>
                <div class="nexDL_Bod"><span>我的账户</span></div>
                <div class="clear"></div>
                <i></i>
            </div>
            <div class="nexbd_mains">
            	<em></em>
                <div class="nexbd_mls">
                	<h5>亲爱的游客,欢迎您</h5>
                    <p>更多精彩请登录</p>
                </div>
                <div class="nexbd_mrs">
                    <p>已有账号,请</p>
                    <div class="nexdl_x nexdl_y"><a href="member.php?mod=logging&amp;action=login">立即登录</a></div>
                    <p>如尚未注册？</p>
                    <div class="nexdl_x"><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>">加入我们</a></div>
                    <p>第三方账号快捷登陆</p>
                    <div class="nexdl_others">
                    	<a href="#">
                        	<img src="<?php echo $_G['style']['styleimgdir'];?>/usermenu/tencent.png" />
                            <span>QQ</span>
                        </a>
                        <a href="#">
                        	<img src="<?php echo $_G['style']['styleimgdir'];?>/usermenu/wechat.png" />
                            <span>微信</span>
                        </a>
                        <a href="#">
                        	<img src="<?php echo $_G['style']['styleimgdir'];?>/usermenu/sina.png" />
                            <span>微博</span>
                        </a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <script type="text/javascript">
                jq(".nexDL_before").hover(
                    function(){
                        jq(this).siblings(".nexbd_mains").show();
                        },
                    function(){
                        jq(this).siblings(".nexbd_mains").hide();
                        })
                jq(".nexbd_mains").hover(
                    function(){
                        jq(this).show();
                        jq(this).siblings(".nexDL_before").addClass("nexuppers");
                        },
                    function(){
                        jq(this).hide();
                        jq(this).siblings(".nexDL_before").removeClass("nexuppers");
                        })
            </script>
        </div>	
     	<?php } else { ?>
        <div id="um">
        	<dl>
                <dd class="vwmy qq"><?php echo $_G['member']['username'];?></dd>
                <dd><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?></dd>
                <dd><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></dd>
                <dd><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">积分: 0</a></dd>
                <dd>用户组: <?php echo $_G['group']['grouptitle'];?></li>
            </dl>
        </div>
        <?php } ?>
    </ul>
</div>