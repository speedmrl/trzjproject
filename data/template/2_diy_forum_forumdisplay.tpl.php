<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forumdisplay');
0
|| checktplrefresh('./template/nex_deco_180401/forum/forumdisplay.htm', './template/default/forum/forumdisplay_leftside.htm', 1598111428, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'forum/forumdisplay')
|| checktplrefresh('./template/nex_deco_180401/forum/forumdisplay.htm', './template/default/forum/search_sortoption.htm', 1598111428, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'forum/forumdisplay')
|| checktplrefresh('./template/nex_deco_180401/forum/forumdisplay.htm', './template/default/common/seccheck.htm', 1598111428, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'forum/forumdisplay')
|| checktplrefresh('./template/nex_deco_180401/forum/forumdisplay.htm', './template/nex_deco_180401/forum/recommend.htm', 1598111428, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'forum/forumdisplay')
|| checktplrefresh('./template/nex_deco_180401/forum/forumdisplay.htm', './template/nex_deco_180401/forum/forumdisplay_list.htm', 1598111428, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'forum/forumdisplay')
|| checktplrefresh('./template/nex_deco_180401/forum/forumdisplay.htm', './template/nex_deco_180401/forum/forumdisplay_sort.htm', 1598111428, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', './template/nex_deco_180401', 'forum/forumdisplay')
;?><?php include template('common/header'); if($_G['forum']['ismoderator']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>
<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?>
</div>
</div><?php echo adshow("text/wp a_t");?><div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div class="boardnav">
<div id="ct" class="wp cl<?php if($_G['forum']['allowside']) { ?> ct2<?php } ?>"<?php if($leftside) { ?> style="margin-left:<?php echo $_G['leftsidewidth_mwidth'];?>px"<?php } ?>>
<?php if($leftside) { ?>
<div id="sd_bdl" class="bdl" onmouseover="showMenu({'ctrlid':this.id, 'pos':'dz'});" style="width:<?php echo $_G['setting']['leftsidewidth'];?>px;margin-left:-<?php echo $_G['leftsidewidth_mwidth'];?>px">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_leftside_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_leftside_top'];?>
<!--[diy=diyleftsidetop]--><div id="diyleftsidetop" class="area"></div><!--[/diy]-->

<div class="tbn" id="forumleftside"><?php if($leftside['favorites']) { ?>
<h2 class="mbn"><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">收藏的版块</a></h2>
<dl id="lf_fav" class="bdl_fav mbm"><?php if(is_array($leftside['favorites'])) foreach($leftside['favorites'] as $favfid => $fdata) { ?><dd>
<?php if(!empty($_G['cache']['forums'][$favfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])) { ?>
<a href="http://<?php echo $_G['cache']['forums'][$favfid]['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?>" title="<?php echo $fdata['0'];?>"><?php echo $fdata['0'];?></a>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $favfid;?>"><?php echo $fdata['0'];?></a>
<?php } ?>

</dd>
<?php } ?>
</dl>
<?php } else { ?>
<h2 class="bdl_h">版块导航</h2>
<?php } if(is_array($leftside['forums'])) foreach($leftside['forums'] as $upfid => $gdata) { ?><dl class="<?php if($fgroupid == $upfid || $_G['setting']['leftsideopen']) { ?>a<?php } ?>" id="lf_<?php echo $upfid;?>">
<dt><a href="javascript:;" hidefocus="true" onclick="leftside('lf_<?php echo $upfid;?>')" title="<?php echo $gdata['name'];?>"><?php echo $gdata['name'];?></a></dt><?php if(is_array($gdata['sub'])) foreach($gdata['sub'] as $subfid => $name) { ?><dd<?php if($_G['fid'] == $subfid || $_G['forum']['fup'] == $subfid) { ?> class="bdl_a"<?php } ?>>
<?php if(!empty($_G['cache']['forums'][$subfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])) { ?>
<a href="http://<?php echo $_G['cache']['forums'][$subfid]['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?>" title="<?php echo $name;?>"><?php echo $name;?></a>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $subfid;?>" title="<?php echo $name;?>"><?php echo $name;?></a>
<?php } ?>
</dd>
<?php } ?>
</dl>
<?php } ?></div>

<!--[diy=diyleftsidebottom]--><div id="diyleftsidebottom" class="area"></div><!--[/diy]-->
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_leftside_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_leftside_bottom'];?>
</div>
<?php } ?>
        <?php if($quicksearchlist && !$_GET['archiveid']) { ?>
        <div class="nex_bghs nex_bghs1 nex_bghs2">
        	
        </div>
        <script type="text/javascript">
var forum_optionlist = <?php if($forum_optionlist) { ?>'<?php echo $forum_optionlist;?>'<?php } else { ?>''<?php } ?>;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>threadsort.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php if(is_array($quicksearchlist)) foreach($quicksearchlist as $optionid => $option) { $formsearch = '';?>        <?php if(getstatus($option['search'], 1)) { ?>
        <?php
$__VERHASH = VERHASH;$formsearch = <<<EOF

            <div style="
EOF;
 if($option['type'] == 'checkbox') { 
$formsearch .= <<<EOF
clear:left;padding-bottom: 5px;
EOF;
 } else { 
$formsearch .= <<<EOF
float: left;width: 48%;height: 30px; overflow: hidden;
EOF;
 } 
$formsearch .= <<<EOF
">
                <span style="padding-right: 1em;">{$option['title']}:</span>
                
EOF;
 if(in_array($option['type'], array('radio', 'checkbox', 'select', 'range'))) { 
$formsearch .= <<<EOF

                    <span id="select_{$option['identifier']}">
                    
EOF;
 if($option['type'] == 'select') { 
$formsearch .= <<<EOF

                        
EOF;
 if($_GET['searchoption'][$optionid]['value']) { 
$formsearch .= <<<EOF

                            <script type="text/javascript">
                                changeselectthreadsort('{$_GET['searchoption'][$optionid]['value']}', {$optionid}, 'search');
                            </script>
                        
EOF;
 } else { 
$formsearch .= <<<EOF

                            <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" onchange="changeselectthreadsort(this.value, '{$optionid}', 'search');" class="ps vm">
                                <option value="0">请选择</option>
                            
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                                
EOF;
 if(!$value['foptionid']) { 
$formsearch .= <<<EOF

                                <option value="{$id}">{$value['content']} 
EOF;
 if($value['level'] != 1) { 
$formsearch .= <<<EOF
&raquo;
EOF;
 } 
$formsearch .= <<<EOF
</option>
                                
EOF;
 } 
$formsearch .= <<<EOF

                            
EOF;
 } 
$formsearch .= <<<EOF

                            </select>
<input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                        
EOF;
 } 
$formsearch .= <<<EOF

                    
EOF;
 } elseif($option['type'] != 'checkbox') { 
$formsearch .= <<<EOF

                        <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" class="ps vm">
                            <option value="0">请选择</option>
                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <option value="{$id}" 
EOF;
 if($_GET['searchoption'][$optionid]['value'] == $id) { 
$formsearch .= <<<EOF
selected="selected"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</option>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        </select>
                        <input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <label><input type="checkbox" class="pc" name="searchoption[{$optionid}][value][{$id}]" value="{$id}" 
EOF;
 if(is_array($_GET['searchoption'][$optionid]) && $_GET['searchoption'][$optionid]['value'][$id]) { 
$formsearch .= <<<EOF
checked="checked"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</label>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        <input type="hidden" name="searchoption[{$optionid}][type]" value="checkbox">
                    
EOF;
 } 
$formsearch .= <<<EOF

                    </span>
                
EOF;
 } else { 
$formsearch .= <<<EOF

                    
EOF;
 if($option['type'] == 'calendar') { 
$formsearch .= <<<EOF

                        <script src="{$_G['setting']['jspath']}calendar.js?{$__VERHASH}" type="text/javascript"></script>
                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" onclick="showcalendar(event, this, false)" />
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" />
                    
EOF;
 } 
$formsearch .= <<<EOF

                
EOF;
 } 
$formsearch .= <<<EOF

            </div>
            
EOF;
?>
<?php } ?>
    <?php $formsearch_html .= $formsearch;?><?php $fontsearch = '';$showoption = array();$tmpcount = 0;?><?php if(getstatus($option['search'], 2)) { ?>
    <?php
$fontsearch = <<<EOF

<tr>
<th width="8%">{$option['title']}:</th>
            <td>
                <ul class="cl">
                    <li
EOF;
 if($_GET[''.$option['identifier']] == 'all') { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1{$filterurladd}&amp;{$option['identifier']}=all{$sorturladdarray[$option['identifier']]}" class="xi2">不限</a></li>

EOF;
 if($option['type'] == 'select') { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if($value['foptionid'] == 0) { 
$fontsearch .= <<<EOF

<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } } if(!($_GET[''.$option['identifier']] == 'all' || !isset($_GET[''.$option['identifier']]))) { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if((preg_match('/^'.$value['foptionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['foptionid'].'$/i', $_GET[''.$option['identifier']])) && ($showoption[$value['count']][$id] = $value)) { } } if(ksort($showoption)) { } if(is_array($showoption)) foreach($showoption as $optioncount => $values) { if($tmpcount != $optioncount && ($tmpcount = $optioncount)) { 
$fontsearch .= <<<EOF

</ul><ul class="subtsm cl">
EOF;
 if(is_array($values)) foreach($values as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } 
$fontsearch .= <<<EOF

</ul><ul>

EOF;
 } } } } else { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if($_GET[''.$option['identifier']] && !strcmp($id, $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value}</a></li>

EOF;
 } } 
$fontsearch .= <<<EOF

                </ul>
            </td>
</tr>

EOF;
?>
     <?php } ?>
     <?php $fontsearch_html .= $fontsearch;?><?php } if($formsearch_html || $fontsearch_html) { ?>
<div>
<?php if($fontsearch_html) { ?>
    <div class="ptn pbn mbm bbs">
    <table id="fontsearch" class="tsm cl">
         <?php echo $fontsearch_html;?>
    </table>
    </div>
<?php } if($formsearch_html) { ?>
    <form method="post" autocomplete="off" name="searhsort" id="searhsort" class="bbs bm_c pns mfm cl" action="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $_GET['sortid'];?>">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <div class="ptm cl"><?php echo $formsearch_html;?>
        <button type="submit" class="pn pnc" name="searchsortsubmit"><em>搜索</em></button></div>
    </form>
<?php } ?>
</div>
<?php } ?>        <?php } else { ?>
            <!--版块介绍-->
            <?php if($_G['forum']['banner'] && !$subforumonly) { ?>
            <div class="nex_bkjsbg">
                <div class="nex_bkjsbg_top">
                    <div class="nex_bkjsbg_topimg"><img class="nex_bktu" src="<?php echo $_G['forum']['banner'];?>" alt="<?php echo $_G['forum']['name'];?>" /></div>
                    <b></b>
                    <div class="nex_bkjsbg_topfav"><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=forum&amp;id=<?php echo $_G['fid'];?>&amp;handlekey=favoriteforum" id="a_favorite" class="nex_sc" title="收藏本版" onclick="showWindow(this.id, this.href, 'get', 0);"><i class="xi1" id="number_favorite" <?php if(!$_G['forum']['favtimes']) { ?> style="display:none;"<?php } ?>><span class="number_favorite_num"><?php echo $_G['forum']['favtimes'];?></span></i></a></div>
                </div>
                <div class="nex_bkjsbg_btm">
                    <div class="nex_bkjsbg_btmtop">
                        <div class="nex_bkicons">
                            <?php if($_G['forum']['icon']) { ?>
                            <?php require_once libfile('function/group');?>                            <img src="data/attachment/common/<?php echo $_G['forum']['icon'];?>" alt="<?php echo $_G['forum']['name'];?>" />
                            <?php } else { ?>
                            <img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/forum_icon.png" alt="<?php echo $_G['forum']['name'];?>" />
                            <?php } ?>
                        </div>
                        <div class="nex_bkinterls">
                            <div class="nex_bkinterls_top">
                                <div class="nex_bkinterls_ls"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>"><?php echo $_G['forum']['name'];?></a></div>
                                <div class="nex_bkinterls_ms">排名: <em title="上次排名:<?php echo $_G['forum']['oldrank'];?>"><?php echo $_G['forum']['rank'];?></em><?php if($_G['forum']['rank'] <= $_G['forum']['oldrank']) { ?><span class="nex_ico_increase"></span><?php } else { ?><span class="nex_ico_fall"></span><?php } ?></span></div>
                                <div class="nex_bkinterls_ts">
                                <?php if($_G['forum']['ismoderator']) { ?>
                                <?php if($_G['forum']['recyclebin']) { ?>
                                    <a href="<?php if($_G['adminid'] == 1) { ?>admin.php?mod=forum&action=recyclebin&frames=yes<?php } elseif($_G['forum']['ismoderator']) { ?>forum.php?mod=modcp&action=recyclebin&fid=<?php echo $_G['fid'];?><?php } ?>" class="nex_fa_bins" target="_blank">回收站</a>
                                <?php } ?>
                                <?php if($_G['forum']['ismoderator'] && !$_GET['archiveid']) { ?>
                                <?php if($_G['forum']['status'] != 3) { ?>
                                    <a class="nex_langcps" href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>">管理面板</a>
                                <?php } else { ?>
                                    <a class="nex_langcps" href="forum.php?mod=group&amp;action=manage&amp;fid=<?php echo $_G['fid'];?>">管理面板</a>
                                <?php } ?>
                                <?php } ?>	
                                <?php } ?>
                                </div>
                                <div class="nex_bkinterls_rs">
                                    <?php if($moderatedby) { ?><div class="nex_banzhu">版主: <?php echo $moderatedby;?></div><?php } ?>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="nex_bkinterls_btm">
                                <div class="nex_bkjs_status">
                                    <ul>
                                        <li class="nex_todayposts"><em>今日发帖</em><?php echo $_G['forum']['todayposts'];?></li>
                                        <li class="nex_totalposts"><em>本版主题</em><?php echo $_G['forum']['threads'];?></li>
                                        <div class="clear"></div>
                                    </ul>
                                </div>
                                
                                <div class="nex_bkjs_postout">
                                    <a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial'"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="发新帖">发表新帖</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <?php if($_G['page'] == 1 && $_G['forum']['rules']) { ?>
                    <div id="forum_rules_<?php echo $_G['fid'];?>" style="<?php echo $collapse['forum_rules'];?>;">
                        <div class="nex_guize"><?php echo $_G['forum']['rules'];?></div>
                    </div>
                    <?php } else { ?>
                    <div class="nex_guize">您还未设置本版块规则说明文字，如需设置，请登陆后台论坛栏目，在该板块设置下方填写本版块规则。</div>
                    <?php } ?>
                </div>
            </div>
            <?php } else { ?>
            <div class="nex_bkjsbg_none">
                <div class="nex_nonebgpart_top">
                    <div class="nex_nonebkicons">
                        <?php if($_G['forum']['icon']) { ?>
                        <?php require_once libfile('function/group');?>                        <img src="data/attachment/common/<?php echo $_G['forum']['icon'];?>" alt="<?php echo $_G['forum']['name'];?>" />
                        <?php } else { ?>
                        <img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/forum_icon.png" alt="<?php echo $_G['forum']['name'];?>" />
                        <?php } ?>
                    </div>
                    <div class="nex_nonebginterls">
                        <div class="nex_nonebginterls_top">
                            <div class="nex_nonebginterls_top_ls"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>"><?php echo $_G['forum']['name'];?></a></div>
                            <div class="nex_nonebginterls_top_ms">排名: <em title="上次排名:<?php echo $_G['forum']['oldrank'];?>"><?php echo $_G['forum']['rank'];?></em><?php if($_G['forum']['rank'] <= $_G['forum']['oldrank']) { ?><span class="nex_ico_increase"></span><?php } else { ?><span class="nex_ico_fall"></span><?php } ?></span></div>
                            <div class="nex_nonebginterls_top_ks">
                            <?php if($_G['forum']['ismoderator']) { ?>
                            <?php if($_G['forum']['recyclebin']) { ?>
                                <a href="<?php if($_G['adminid'] == 1) { ?>admin.php?mod=forum&action=recyclebin&frames=yes<?php } elseif($_G['forum']['ismoderator']) { ?>forum.php?mod=modcp&action=recyclebin&fid=<?php echo $_G['fid'];?><?php } ?>" class="nex_fa_bin" target="_blank">回收站</a>
                            <?php } ?>
                            <?php if($_G['forum']['ismoderator'] && !$_GET['archiveid']) { ?>
                            <?php if($_G['forum']['status'] != 3) { ?>
                                <a class="nex_langcp" href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>">管理面板</a>
                            <?php } else { ?>
                                <a class="nex_langcp" href="forum.php?mod=group&amp;action=manage&amp;fid=<?php echo $_G['fid'];?>">管理面板</a>
                            <?php } ?>
                            <?php } ?>	
                            <?php } ?>
                            </div>
                            <div class="nex_nonebginterls_top_rs">
                                <?php if($moderatedby) { ?><div class="nex_nonebanzhu">版主: <?php echo $moderatedby;?></div><?php } ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="nex_nonebginterls_btm">
                            <div class="nex_nonebginterls_btml">
                                <ul>
                                    <li class="nex_todayposts"><em>今日发帖</em><?php echo $_G['forum']['todayposts'];?></li>
                                    <li class="nex_totalposts"><em>本版主题</em><?php echo $_G['forum']['threads'];?></li>
                                    <li class="nex_favbtn"><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=forum&amp;id=<?php echo $_G['fid'];?>&amp;handlekey=favoriteforum" id="a_favorite" class="nex_sc" title="收藏本版" onclick="showWindow(this.id, this.href, 'get', 0);">收藏本版<i class="xi1" id="number_favorite" <?php if(!$_G['forum']['favtimes']) { ?> style="display:none;"<?php } ?>><span class="number_favorite_num"><?php echo $_G['forum']['favtimes'];?></span></i></a></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                            <div class="nex_nonebginterls_btmr"><a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial'"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="发新帖">发表新帖</a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="nex_nonebgpart_btm">
                    <?php if($_G['page'] == 1 && $_G['forum']['rules']) { ?>
                    <div id="forum_rules_<?php echo $_G['fid'];?>" style="<?php echo $collapse['forum_rules'];?>;">
                        <div class="nex_noneguize"><em>板块规则</em><?php echo $_G['forum']['rules'];?></div>
                    </div>
                    <?php } else { ?>
                    <div class="nex_noneguize"><em>板块规则</em>您还未设置本版块规则说明文字，如需设置，请登陆后台论坛栏目，在该板块设置下方填写本版块规则。</div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <div class="clear"></div>
            
            <div class="nex_bkfocusbox">
            	<div class="nex_bkfocusbox_top">
                	<span>2018家居装修设计效果图</span>
                    <a href="#" target="_blank">...</a>
                    <div class="clear"></div>
                </div>
            	<div class="nex_bkfocusbox_btm">
                	<ul>
                    	<!--[diy=nex_bkfocusbox_btm]--><div id="nex_bkfocusbox_btm" class="area"></div><!--[/diy]-->
                    	
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        <?php } ?>
        
        <?php if($livethread) { ?>
        <div id="livethread" class="tl bm bmw cl" style="padding:10px 15px;">
            <div class="livethreadtitle vm">
                <span class="replynumber xg1">回复 <span id="livereplies" class="xi1"><?php echo $livethread['replies'];?></span></span>
                <a href="forum.php?mod=viewthread&amp;tid=<?php echo $livethread['tid'];?>" target="_blank"><?php echo $livethread['subject'];?></a> <img src="<?php echo IMGDIR;?>/livethreadtitle.png" />
            </div>
            <div class="livethreadcon"><?php echo $livemessage;?></div>
            <div id="livereplycontentout">
                <div id="livereplycontent">
                </div>
            </div>
            <div id="liverefresh">有新的发言了，点击刷新</div>
            <div id="livefastreply">
                <form id="livereplypostform" method="post" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $livethread['tid'];?>&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=livereplypost&amp;inajax=1" onsubmit="return livereplypostvalidate(this)">
                    <div id="livefastcomment">
                        <textarea id="livereplymessage" name="message" style="color:gray;<?php if(!$liveallowpostreply) { ?>display:none;<?php } ?>">#在这里快速回复#</textarea>
                        <?php if(!$liveallowpostreply) { ?>
                            <div>
                                <?php if(!$_G['uid']) { ?>
                                    您需要登录后才可以回帖 <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">登录</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a>
                                <?php } else { ?>
                                    您现在无权发帖。<a href="javascript:;" onclick="ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));" class="xi2">点击查看原因</a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div id="livepostsubmit" style="display:none;">
                    <?php if($secqaacheck || $seccodecheck) { ?>
                        <?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
                        <div class="mtm sec" style="text-align:right;"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
                    <?php } ?>
                    <p class="ptm pnpost" style="margin-bottom:10px;">
                    <button type="submit" name="replysubmit" class="pn pnc vm" style="float:right;" value="replysubmit" id="livereplysubmit">
                        发表
                    </button>
                    </p>
                    </div>
                    <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
                    <input type="hidden" name="subject" value="  ">
                </form>
            </div>
            <span id="livereplypostreturn"></span>
        </div>
<script type="text/javascript">
            var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
            var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
            var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
            var replycontentlist = new Array();
            var addreplylist = new Array();
            var timeoutid = timeid = movescrollid = waitescrollid = null;
            var replycontentnum = 0;
            getnewlivepostlist(1);
            timeid = setInterval(getnewlivepostlist, 5000);
            $('livereplycontent').style.position = 'absolute';
            $('livereplycontent').style.width = ($('livereplycontentout').clientWidth - 50) + 'px';
            $('livereplymessage').onfocus = function() {
                if(this.style.color == 'gray') {
                    this.value = '';
                    this.style.color = 'black';
                    $('livepostsubmit').style.display = 'block';
                    this.style.height = '56px';
                    $('livefastcomment').style.height = '57px';
                }
            };
            $('livereplymessage').onblur = function() {
                if(this.value == '') {
                    this.style.color = 'gray';
                    this.value = '#在这里快速回复#';
                }
            };

            $('liverefresh').onclick = function() {
                $('livereplycontent').style.position = 'absolute';
                getnewlivepostlist();
                this.style.display = 'none';
            };

            $('livereplycontentout').onmouseover = function(e) {

                if($('livereplycontent').style.position == 'absolute' && $('livereplycontent').clientHeight > 215) {
                    $('livereplycontent').style.position = 'static';
                    this.scrollTop = this.scrollHeight;
                }

                if(this.scrollTop + this.clientHeight != this.scrollHeight) {
                    clearInterval(timeid);
                    clearTimeout(timeoutid);
                    clearInterval(movescrollid);
                    timeid = timeoutid = movescrollid = null;

                    if(waitescrollid == null) {
                        waitescrollid = setTimeout(function() {
                            $('liverefresh').style.display = 'block';
                        }, 60000 * 10);
                    }
                } else {
                    clearTimeout(waitescrollid);
                    waitescrollid = null;
                }
            };

            $('livereplycontentout').onmouseout = function(e) {
                if(this.scrollTop + this.clientHeight == this.scrollHeight) {
                    $('livereplycontent').style.position = 'absolute';
                    clearInterval(timeid);
                    timeid = setInterval(getnewlivepostlist, 10000);
                }
            };

            function getnewlivepostlist(first) {
                var x = new Ajax('JSON');
                x.getJSON('forum.php?mod=misc&action=livelastpost&fid=<?php echo $livethread['fid'];?>', function(s, x) {
                    var count = s.data.count;
                    $('livereplies').innerHTML = count;
                    var newpostlist = s.data.list;
                    for(i in newpostlist) {
                        var postid = i;
                        var postcontent = '';
                        postcontent += newpostlist[i].authorid ? '<dt><a href="home.php?mod=space&amp;uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].avatar + '</a></dt>' : '<dt></dt>';
                        postcontent += newpostlist[i].authorid ? '<dd><a href="home.php?mod=space&amp;uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].author + '</a></dd>' : '<dd>' + newpostlist[i].author + '</dd>';
                        postcontent += '<dd>' + htmlspecialchars(newpostlist[i].message) + '</dd>';
                        postcontent += '<dd class="dateline">' + newpostlist[i].dateline + '</dd>';
                        if(replycontentlist[postid]) {
                            $('livereply_' + postid).innerHTML = postcontent;
                            continue;
                        }
                        addreplylist[postid] = '<dl id="livereply_' + postid + '">' + postcontent + '</dl>';
                    }
                    if(first) {
                        for(i in addreplylist) {
                            replycontentlist[i] = addreplylist[i];
                            replycontentnum++;
                            var div = document.createElement('div');
                            div.innerHTML = addreplylist[i];
                            $('livereplycontent').appendChild(div);
                            delete addreplylist[i];
                        }
                    } else {
                        livecontentfacemove();
                    }
                });
            }

            function livecontentfacemove() {
                //note 从队列中取出数据
                var reply = '';
                for(i in addreplylist) {
                    reply = replycontentlist[i] = addreplylist[i];
                    replycontentnum++;
                    delete addreplylist[i];
                    break;
                }
                if(reply) {
                    var div = document.createElement('div');
                    div.innerHTML = reply;
                    var oldclientHeight = $('livereplycontent').clientHeight;
                    $('livereplycontent').appendChild(div);
                    $('livereplycontentout').style.overflowY = 'hidden';
                    $('livereplycontent').style.bottom = oldclientHeight - $('livereplycontent').clientHeight + 'px';

                    if(replycontentnum > 20) {
                        $('livereplycontent').removeChild($('livereplycontent').firstChild);
                        for(i in replycontentlist) {
                            delete replycontentlist[i];
                            break;
                        }
                        replycontentnum--;
                    }

                    if(!movescrollid) {
                        movescrollid = setInterval(function() {
                            if(parseInt($('livereplycontent').style.bottom) < 0) {
                                $('livereplycontent').style.bottom =
                                    ((parseInt($('livereplycontent').style.bottom) + 5) > 0 ? 0 : (parseInt($('livereplycontent').style.bottom) + 5)) + 'px';
                            } else {
                                $('livereplycontentout').style.overflowY = 'auto';
                                clearInterval(movescrollid);
                                movescrollid = null;
                                timeoutid = setTimeout(livecontentfacemove, 1000);
                            }
                        }, 100);
                    }
                }
            }

            function livereplypostvalidate(theform) {
                var s;
                if(theform.message.value == '' || $('livereplymessage').style.color == 'gray') {
                    s = '抱歉，您尚未输入内容';
                }
                if(!disablepostctrl && ((postminchars != 0 && mb_strlen(theform.message.value) < postminchars) || (postmaxchars != 0 && mb_strlen(theform.message.value) > postmaxchars))) {
                    s = '您的帖子长度不符合要求。\n\n当前长度: ' + mb_strlen(theform.message.value) + ' 字节\n系统限制: ' + postminchars + ' 到 ' + postmaxchars + ' 字节';
                }
                if(s) {
                    showError(s);
                    doane();
                    $('livereplysubmit').disabled = false;
                    return false;
                }
                $('livereplysubmit').disabled = true;
                theform.message.value = theform.message.value.replace(/([^>=\]"'\/]|^)((((https?|ftp):\/\/)|www\.)([\w\-]+\.)*[\w\-\u4e00-\u9fa5]+\.([\.a-zA-Z0-9]+|\u4E2D\u56FD|\u7F51\u7EDC|\u516C\u53F8)((\?|\/|:)+[\w\.\/=\?%\-&~`@':+!]*)+\.(jpg|gif|png|bmp))/ig, '$1[img]$2[/img]');
                theform.message.value = parseurl(theform.message.value);
                ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));
                return false;
            }

            function succeedhandle_livereplypost(url, msg, param) {
                $('livereplymessage').value = '';
                $('livereplycontent').style.position = 'absolute';
                if(param['sechash']) {
                    updatesecqaa(param['sechash']);
                    updateseccode(param['sechash']);
                }
                getnewlivepostlist();
            }
        </script>
    	<?php } ?>

<div class="mn">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_forumaction'])) echo $_G['setting']['pluginhooks']['forumdisplay_forumaction'];?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_modlink'])) echo $_G['setting']['pluginhooks']['forumdisplay_modlink'];?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_top'];?>

<?php if($subexists && $_G['page'] == 1) { include template('forum/forumdisplay_subforum'); } ?>

<div class="drag">
<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
</div>

<?php if(!empty($_G['forum']['recommendlist'])) { ?>
<div class="bm bmw">
<div class="bm_h cl">
<h2>推荐主题</h2>
</div>
<div class="bm_c cl"><div class="z nex_bbtj">本版推荐主题</div>
<?php if($_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']) { ?>
<div class="z nex_fdtp">
<div class="bd">
<ul><?php if(is_array($_G['forum']['recommendlist']['images'])) foreach($_G['forum']['recommendlist']['images'] as $k => $imginfo) { ?><li>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $imginfo['tid'];?>" title="<?php echo $imginfo['subject'];?>" target="_blank"><img src="<?php echo $imginfo['filename'];?>"/></a>
</li>
<?php } ?>
</ul>
</div>
<div class="hd">
<ul class="cl nex_tir"></ul>
</div>
<script type="text/javascript">jQuery(".nex_fdtp").slide({titCell:".nex_tir",mainCell:".bd ul",autoPage:true,effect:"fold",autoPlay:true}); </script>
</div>
<ul class="z cl xe1 mbm nex_fdtl <?php if(!$_G['forum']['allowside']) { ?>k<?php } ?>">
<?php } else { ?>
<ul class="z cl xe2 mbm nex_fdtl <?php if(!$_G['forum']['allowside']) { ?>k<?php } ?>">
<?php } unset($_G['forum']['recommendlist']['images']);?><?php if(is_array($_G['forum']['recommendlist'])) foreach($_G['forum']['recommendlist'] as $rtid => $recommend) { ?><li class="nex_bgimg"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $rtid;?>" <?php echo $recommend['subjectstyles'];?> target="_blank"><?php echo $recommend['subject'];?></a></li>
<?php } ?>
</ul>



</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_middle'])) echo $_G['setting']['pluginhooks']['forumdisplay_middle'];?>

<?php if(!$subforumonly) { if($recommendgroups && !$_G['forum']['allowside']) { ?>
<div class="bm bmw fl<?php if($_G['forum']['forumcolumns']) { ?> flg<?php } ?>">
<div class="bm_h cl">
<span class="o"><img id="recommendgroups_<?php echo $_G['forum']['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $collapseimg['recommendgroups'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('recommendgroups_<?php echo $_G['forum']['fid'];?>');" /></span>
<h2>推荐<?php echo $_G['setting']['navs']['3']['navname'];?></h2>
</div>
<div class="bm_c" id="recommendgroups_<?php echo $_G['forum']['fid'];?>" style="<?php echo $collapse['recommendgroups'];?>">
<table cellspacing="0" cellpadding="0" class="fl_tb"><?php if(is_array($recommendgroups)) foreach($recommendgroups as $key => $group) { if($_G['forum']['forumcolumns']) { if($key && ($key % $_G['forum']['forumcolumns'] == 0)) { ?>
</tr>
<?php if($key < $_G['forum']['forumcolumns']) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g">
<div class="fl_icn_g">
<a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" target="_blank"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" width="32" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" target="_blank"><?php echo $group['name'];?></a><span class="xg1 xw0"> (<?php echo $group['membernum'];?> 人)</span>
<dd><em>主题: <?php echo $group['threads'];?></em></dd>
<dd>
<?php if(is_array($group['lastpost'])) { if($_G['forum']['forumcolumns'] < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($group['lastpost']['subject'], 30); ?></a> <cite><?php echo $group['lastpost']['dateline'];?> <?php if($group['lastpost']['author']) { ?><a href="home.php?mod=space&amp;username=<?php echo $group['lastpost']['encode_author'];?>"><?php echo $group['lastpost']['author'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo $group['lastpost']['dateline'];?></a>
<?php } ?>				<?php } else { ?>
从未
<?php } ?>
</dd>
</dl>
</td>
<?php } else { ?>
<tr <?php if($key != 0) { ?>class="fl_row"<?php } ?>>
<td class="fl_icn">
<a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" target="_blank"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" width="32" /></a>
</td>
<td>
<h2><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" target="_blank"><?php echo $group['name'];?></a><span class="xg1 xw0"> (<?php echo $group['membernum'];?> 人)</span></h2>
<p><?php echo cutstr($group['description'], 100); ?></p>
</td>
<td class="fl_i">
<span class="xi2"><?php echo $group['threads'];?> 主题</span>
</td>
<td class="fl_by">
<div>
<?php if(is_array($group['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($group['lastpost']['subject'], 30); ?></a> <cite><?php echo $group['lastpost']['dateline'];?> <?php if($group['lastpost']['author']) { ?><a href="home.php?mod=space&amp;username=<?php echo $group['lastpost']['encode_author'];?>"><?php echo $group['lastpost']['author'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
从未
<?php } ?>
</div>
</td>
</tr>
<?php } } ?>
</table>
</div>
</div>
<?php } if($threadmodcount) { ?><div class="bm"><div class="ntc_l hm xi2"><strong><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me&amp;type=thread&amp;from=&amp;filter=aduit">您有 <?php echo $threadmodcount;?> 个主题正等待审核中，点击查看</a></strong></div></div><?php } ?>



<div id="pgt" class="bm bw0 pgs cl">

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_top'];?>
</div>
<?php if(($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0) { ?>
<ul id="thread_types" class="ttp bm cl">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadtype_inner'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadtype_inner'];?>
<li id="ttp_all" <?php if(!$_GET['typeid'] && !$_GET['sortid']) { ?>class="xw1 a"<?php } ?>><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_G['forum']['threadsorts']['defaultshow']) { ?>&amp;filter=sortall&amp;sortall=1<?php } if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部</a></li>
<?php if($_G['forum']['threadtypes']) { if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $id => $name) { if($_GET['typeid'] == $id) { ?>
<li class="xw1 a"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['sortid']) { ?>&amp;filter=sortid&amp;sortid=<?php echo $_GET['sortid'];?><?php } if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php if($_G['forum']['threadtypes']['icons'][$id] && $_G['forum']['threadtypes']['prefix'] == 2) { ?><img class="vm" src="<?php echo $_G['forum']['threadtypes']['icons'][$id];?>" alt="" /> <?php } ?><?php echo $name;?><?php if($showthreadclasscount['typeid'][$id]) { ?><span class="xg1 num"><?php echo $showthreadclasscount['typeid'][$id];?></span><?php } ?></a></li>
<?php } else { ?>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=typeid&amp;typeid=<?php echo $id;?><?php echo $forumdisplayadd['typeid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php if($_G['forum']['threadtypes']['icons'][$id] && $_G['forum']['threadtypes']['prefix'] == 2) { ?><img class="vm" src="<?php echo $_G['forum']['threadtypes']['icons'][$id];?>" alt="" /> <?php } ?><?php echo $name;?><?php if($showthreadclasscount['typeid'][$id]) { ?><span class="xg1 num"><?php echo $showthreadclasscount['typeid'][$id];?></span><?php } ?></a></li>
<?php } } } if($_G['forum']['threadsorts']) { if($_G['forum']['threadtypes']) { ?><li><span class="pipe">|</span></li><?php } if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $name) { if($_GET['sortid'] == $id) { ?>
<li class="xw1 a"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['typeid']) { ?>&amp;filter=typeid&amp;typeid=<?php echo $_GET['typeid'];?><?php } if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php echo $name;?><?php if($showthreadclasscount['sortid'][$id]) { ?><span class="xg1 num"><?php echo $showthreadclasscount['sortid'][$id];?></span><?php } ?></a></li>
<?php } else { ?>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $id;?><?php echo $forumdisplayadd['sortid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php echo $name;?><?php if($showthreadclasscount['sortid'][$id]) { ?><span class="xg1 num"><?php echo $showthreadclasscount['sortid'][$id];?></span><?php } ?></a></li>
<?php } } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_filter_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_filter_extra'];?>
</ul>
<script type="text/javascript">showTypes('thread_types');</script>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadtype_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadtype_extra'];?>
<?php if(empty($_G['forum']['sortmode'])) { ?><div id="threadlist" class="tl bm bmw"<?php if($_G['uid']) { ?> style="position: relative; "<?php } ?>>

<div class="th">
<table cellspacing="0" cellpadding="0">
<tr>
<th colspan="<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>3<?php } else { ?>2<?php } ?>">
<?php if(CURMODULE != 'guide') { ?>
<div class="nex_biaotou">
<span id="atarget" <?php if($_G['cookie']['atarget'] > 0) { ?>onclick="setatarget(-1)" class="y atarget_1"<?php } else { ?>onclick="setatarget(1)" class="y"<?php } ?> title="在新窗口中打开帖子">新窗</span>
<?php if($_GET['specialtype'] == 'reward') { ?>
<a id="filter_reward" href="javascript:;" class="showmenu xi2<?php if($_GET['rewardtype']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)"><?php if($_GET['rewardtype'] == '') { ?>全部悬赏<?php } elseif($_GET['rewardtype'] == '1') { ?>进行中<?php } elseif($_GET['rewardtype'] == '2') { ?>已解决<?php } ?></a>
<?php } ?>
<div class="nex_zhuti"><a id="filter_special" href="javascript:;" class="showmenu xi2<?php if($_GET['specialtype']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)"><?php if($_GET['specialtype'] == 'poll') { ?>投票<?php } elseif($_GET['specialtype'] == 'trade') { ?>商品<?php } elseif($_GET['specialtype'] == 'reward') { ?>悬赏<?php } elseif($_GET['specialtype'] == 'activity') { ?>活动<?php } elseif($_GET['specialtype'] == 'debate') { ?>辩论<?php } else { ?>全部主题<?php } ?></a>		
                        </div>
                        <div class="nex_paixu">
                        <a id="filter_orderby" href="javascript:;" class="showmenu " onclick="showMenu(this.id)" initialized="true">排序方式</a>
                        </div>		
                        
<div class="nex_gengduo">
<a id="filter_dateline" href="javascript:;" class="showmenu xi2<?php if($_GET['dateline']) { ?> xw1<?php } ?>" onclick="showMenu(this.id)">更多</a>
                        </div>
<?php if(empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && (!$_G['setting']['forumseparator'] || !$separatepos) && !$_GET['filter']) { ?>
<a href="javascript:;" onclick="checkForumnew_btn('<?php echo $_G['fid'];?>')" title="查看更新" class="forumrefresh" style="display:none;"></a>
<?php } if($_GET['filter'] == 'hot') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<span><?php echo $ctime;?></span>
<img src="<?php echo IMGDIR;?>/date_magnify.png" class="cur1" alt="" id="hottime" value="<?php echo $ctime;?>" fid="<?php echo $_G['fid'];?>" onclick="showcalendar(event, this, false, false, false, false, function(){viewhot(this);});" align="absmiddle" />
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_filter_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_filter_extra'];?>
                        <div class="y nex_space">
                        	<span id="clearstickthread" style="display: none;">
                                <a href="javascript:;" onclick="clearStickThread()" class="nex_showdisplays" title="显示置顶">显示置顶</a>
                            </span>
                            <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=lastpost&amp;orderby=lastpost<?php echo $forumdisplayadd['lastpost'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'lastpost') { ?> xw1<?php } ?>">最新</a>&nbsp;&nbsp;
                            <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=heat&amp;orderby=heats<?php echo $forumdisplayadd['heat'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'heat') { ?> xw1<?php } ?>">热门</a>&nbsp;&nbsp;
                            <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=hot" class="xi2<?php if($_GET['filter'] == 'hot') { ?> xw1<?php } ?>">热帖</a>&nbsp;&nbsp;
                            <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=digest&amp;digest=1<?php echo $forumdisplayadd['digest'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="xi2<?php if($_GET['filter'] == 'digest') { ?> xw1<?php } ?>">精华</a>&nbsp;&nbsp;
                            <?php if(empty($_G['forum']['picstyle'])) { ?>
                            <?php } else { ?>
                            <a<?php if(empty($_G['cookie']['forumdefstyle'])) { ?> href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;forumdefstyle=yes" class="nex_wfpower chked"<?php } else { ?> href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;forumdefstyle=no" class="nex_wfpower unchk"<?php } ?> title="图片模式浏览帖子">图片模式</a>
                            <?php } ?>
                        </div>
</div>
                    
<?php } else { ?>
标题
<?php } ?>
</th>
</tr>
</table>
</div>
<div class="bm_c">
<?php if(empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']) { ?>
<script type="text/javascript">var lasttime = <?php echo $_G['timestamp'];?>;var listcolspan= '<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>6<?php } else { ?>5<?php } ?>';</script>
<?php } ?>
<div id="forumnew" style="display:none"></div>
<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;infloat=yes&amp;nopost=yes">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="listextra" value="<?php echo $extra;?>" />
<table summary="forum_<?php echo $_G['fid'];?>" cellspacing="0" cellpadding="0" id="threadlisttableid">
                <?php if((!$simplestyle || !$_G['forum']['allowside'] && $page == 1) && !empty($announcement)) { ?>
<div class="nex_ancmtlist">
<?php if($_G['forum']['ismoderator'] && !$_GET['archiveid']) { } ?>
<div class="nex_announcement">公告: </div>
                            <div class="nex_amtcontent">
                            	<?php if(empty($announcement['type'])) { ?><a href="forum.php?mod=announcement&amp;id=<?php echo $announcement['id'];?>#<?php echo $announcement['id'];?>" target="_blank"><?php echo $announcement['subject'];?></a><?php } else { ?><a href="<?php echo $announcement['message'];?>" target="_blank"><?php echo $announcement['subject'];?></a><?php } ?>
                            </div>

<div class="nex_anmtauthor"><a href="home.php?mod=space&amp;uid=<?php echo $announcement['authorid'];?>" c="1"><?php echo $announcement['author'];?></a></div>
<div class="nex_anmtdate">	<em><?php echo $announcement['starttime'];?></em></div>
                            <div class="clear"></div>
</div>
<?php } ?>
                
<?php if(!$separatepos || !$_G['setting']['forumseparator']) { ?>
<tbody id="separatorline" class="emptb"><tr><td class="icn"></td><?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?><td class="o"></td><?php } ?><th></th><?php if(CURMODULE == 'guide') { ?><td class="by"></td><?php } ?><td class="by"></td><td class="num"></td><td class="by"></td></tr></tbody>
<?php } if($_G['forum_threadcount']) { if(empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']) { if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { if($_G['setting']['forumseparator'] == 1 && $separatepos == $key + 1) { ?>
<tbody id="separatorline">
<tr class="ts" style=" height: 30px; line-height: 30px;">
<td style="border-left: 1px solid #F3F3F3;">&nbsp;</td>
<?php if($_G['forum']['ismoderator'] && !$_GET['archiveid']) { ?><td>&nbsp;</td><?php } ?>
<th style="border-right: 1px solid #F3F3F3;"><?php if(empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && !$_GET['filter']) { ?><a href="javascript:;" onclick="checkForumnew_btn('<?php echo $_G['fid'];?>')" title="查看更新" class="forumrefresh">版块主题</a><?php } else { ?>&nbsp;<?php } ?></th>
</tr>
</tbody>
<script type="text/javascript">hideStickThread();</script>
<?php } if($separatepos <= $key + 1) { ?><?php echo adshow("threadlist");?><?php } ?>
<tbody id="<?php echo $thread['id'];?>">
<tr>
<td class="icn">
                                        <div class="forumava <?php if($thread['folder'] == 'lock' || $thread['special'] || $thread['displayorder']) { ?>s_lnoavatar<?php } ?>"> 
                                            <a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" c="1">
                                            <?php echo avatar($thread[authorid],middle);?> 
                                                
                                            </a>
                                      	</div>
                                        
                                    </td>
<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>
<td class="o nex_forumlist_managecheck">
<?php if($thread['fid'] == $_G['fid']) { if($thread['displayorder'] <= 3 || $_G['adminid'] == 1) { ?>
<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="<?php echo $thread['tid'];?>" />
<?php } else { ?>
<input type="checkbox" disabled="disabled" />
<?php } } else { ?>
<input type="checkbox" disabled="disabled" />
<?php } ?>
</td>
<?php } ?>
<th class="<?php echo $thread['folder'];?> forumtit">
<?php if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<a href="javascript:void(0);" onclick="hideStickThread('<?php echo $thread['tid'];?>')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread'][$key];?>
<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<?php echo $thread['typehtml'];?> <?php echo $thread['sorthtml'];?>
<?php if($thread['moved']) { ?>
移动:<?php $thread[tid]=$thread[closed];?><?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>"<?php echo $thread['highlight'];?><?php if($thread['isgroup'] == 1 || $thread['forumstick']) { ?> target="_blank"<?php } else { ?> onclick="atarget(this)"<?php } ?> class="s xst"><?php echo $thread['subject'];?></a>
<?php if($thread['icon'] >= 0) { ?>
<img src="<?php echo STATICURL;?>image/stamp/<?php echo $_G['cache']['stamps'][$thread['icon']]['url'];?>" alt="<?php echo $_G['cache']['stamps'][$thread['icon']]['text'];?>" align="absmiddle" />
<?php } if($thread['rushreply']) { ?>
<img src="<?php echo IMGDIR;?>/rushreply_s.png" alt="抢楼" align="absmiddle" />
<?php if($rushinfo[$thread['tid']]) { ?>
<span id="rushtimer_<?php echo $thread['tid'];?>"> 【还有 <span id="rushtimer_body_<?php echo $thread['tid'];?>"></span> <script language="javascript">settimer(<?php echo $rushinfo[$thread['tid']]['timer'];?>, 'rushtimer_body_<?php echo $thread['tid'];?>');</script><?php if($rushinfo[$thread['tid']]['timertype'] == 'start') { ?> 开始 <?php } else { ?> 结束 <?php } ?> 】</span>
<?php } } if($stemplate && $sortid) { ?><?php echo $stemplate[$sortid][$thread['tid']];?><?php } if($thread['readperm']) { ?> - [阅读权限 <span class="xw1"><?php echo $thread['readperm'];?></span>]<?php } if($thread['price'] > 0) { if($thread['special'] == '3') { ?>
- <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=1" title="只看进行中的"><span class="xi1">[悬赏 <span class="xw1"><?php echo $thread['price'];?></span> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>]</span></a>
<?php } else { ?>
- [售价 <span class="xw1"><?php echo $thread['price'];?></span> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>]
<?php } } elseif($thread['special'] == '3' && $thread['price'] < 0) { ?>
- <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=2" title="只看已解决的" style="margin-right:5px;">[已解决]</a>
<?php } if($thread['attachment'] == 2) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<?php } elseif($thread['attachment'] == 1) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/common.gif" alt="attachment" title="附件" align="absmiddle" />
<?php } if($thread['mobile']) { ?>
<img src="<?php echo IMGDIR;?>/mobile-attach-<?php echo $thread['mobile'];?>.png" alt="手机发帖" align="absmiddle" />
<?php } if($thread['digest'] > 0 && $filter != 'digest') { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/digest_<?php echo $thread['digest'];?>.png" align="absmiddle" alt="digest" title="精华 <?php echo $thread['digest'];?>" />
<?php } if($thread['displayorder'] == 0) { if($thread['recommendicon'] && $filter != 'recommend') { ?>
<img src="<?php echo IMGDIR;?>/recommend_<?php echo $thread['recommendicon'];?>.gif" align="absmiddle" alt="recommend" title="评价指数 <?php echo $thread['recommends'];?>" />
<?php } if($thread['heatlevel']) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/hot_<?php echo $thread['heatlevel'];?>.gif" align="absmiddle" alt="heatlevel" title="热度: <?php echo $thread['heats'];?>" />
<?php } if($thread['rate'] > 0) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/agree.gif" align="absmiddle" alt="agree" title="帖子被加分" />
<?php } elseif($thread['rate'] < 0) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/disagree.gif" align="absmiddle" alt="disagree" title="帖子被减分" />
<?php } } if($thread['replycredit'] > 0) { ?>
- <span class="xi1">[回帖奖励 <strong> <?php echo $thread['replycredit'];?></strong> ]</span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread_subject'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread_subject'][$key];?>
                                        
                                         <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['icontid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>" title="<?php if($thread['displayorder'] == 1) { ?>本版置顶主题 - <?php } if($thread['displayorder'] == 2) { ?>分类置顶主题 - <?php } if($thread['displayorder'] == 3) { ?>全局置顶主题 - <?php } if($thread['displayorder'] == 4) { ?>多版置顶主题 - <?php } if($thread['folder'] == 'lock') { ?>关闭的主题 - <?php } if($thread['special'] == 1) { ?>投票 - <?php } if($thread['special'] == 2) { ?>商品 - <?php } if($thread['special'] == 3) { ?>悬赏 - <?php } if($thread['special'] == 4) { ?>活动 - <?php } if($thread['special'] == 5) { ?>辩论 - <?php } if($thread['folder'] == "new") { ?>有新回复 - <?php } ?>
新窗口打开" target="_blank">
<?php if($thread['folder'] == 'lock') { ?>
<img src="<?php echo IMGDIR;?>/folder_lock.gif" />
<?php } elseif($thread['special'] == 1) { ?>
<img src="<?php echo IMGDIR;?>/pollsmall.gif" alt="投票" />
<?php } elseif($thread['special'] == 2) { ?>
<img src="<?php echo IMGDIR;?>/tradesmall.gif" alt="商品" />
<?php } elseif($thread['special'] == 3) { ?>
<img src="<?php echo IMGDIR;?>/rewardsmall.gif" alt="悬赏" />
<?php } elseif($thread['special'] == 4) { ?>
<img src="<?php echo IMGDIR;?>/activitysmall.gif" alt="活动" />
<?php } elseif($thread['special'] == 5) { ?>
<img src="<?php echo IMGDIR;?>/debatesmall.gif" alt="辩论" />
<?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<i class="nex_forumlist_icon_adj"><img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/pin_<?php echo $thread['displayorder'];?>.png" alt="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" /></i>
<?php } else { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/forumlist/folder_<?php echo $thread['folder'];?>.png" />
<?php } ?>
</a>
                                        
<?php if($thread['multipage']) { ?>
<span class="tps"><?php echo $thread['multipage'];?></span>
<?php } if($thread['weeknew']) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost" class="xi1">New</a>
<?php } if(!$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { if($thread['related_group'] == 0 && $thread['closed'] > 1) { $thread[tid]=$thread[closed];?><?php } if($groupnames[$thread['tid']]) { ?>
<span class="fromg xg1"> [来自: <a href="forum.php?mod=group&amp;fid=<?php echo $groupnames[$thread['tid']]['fid'];?>" target="_blank" class="xg1"><?php echo $groupnames[$thread['tid']]['name'];?></a>]</span>
<?php } } ?>
                                        <div class="nex_forum_authors">
                                        	<a class="nex_threads_author" href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" c="1"><i>by</i><?php echo $thread['author'];?></a>
                                            <?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_author'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_author'][$key];?>
                                       		<div class="nex_threads_lastreply">
                                                最后发表:
                                                <?php if($thread['lastposter']) { ?><a href="<?php if($thread['digest'] != -2) { ?>home.php?mod=space&username=<?php echo $thread['lastposterenc'];?><?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?>&page=<?php echo max(1, $thread['pages']);; } ?>"><?php echo $thread['lastposter'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?>
                                                <i class="nex_atsign">@</i>
                                                <?php echo $thread['lastpost'];?>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="nex_threads_summary">
                                        <?php include 'template/nex_deco_180401/php/nex_multiops.php'?>                                            <?php echo cutstr($summary_echo,100); ?>                                        </div>
                                        
                                        <div class="nex_forumlist_pics">
                                        <?php include 'template/nex_deco_180401/php/nex_innerpics.php'?><?php if(is_array($nex_localpic)) foreach($nex_localpic as $nex_pic) { ?>                                        	<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" target="_blank">
                                            	<img src="data/attachment/forum/<?php echo $nex_pic['attachment'];?>">
                                            </a>
                                            <?php } ?>
                                            <div class="clear"></div>
                                        </div>

                                          
                                        <div class="foruminfo"> 
                                        <i class="z">
                                        	<span class="nex_view"><?php if($thread['isgroup'] != 1) { ?><?php echo $thread['views'];?><?php } else { ?><?php echo $groupnames[$thread['tid']]['views'];?><?php } ?></span>
                                            <span class="nex_reply"><?php echo $thread['allreplies'];?></span>
</i>
                                        
                                        <i class="y">
                                            
                                            <span class="nex_ftdate"><?php echo $thread['dateline'];?></span>
                                        </i>
                                        
                                        <?php if(!$_G['setting']['forumdisplaythreadpreview'] && !($thread['readperm'] && $thread['readperm'] > $_G['group']['readaccess'] && !$_G['forum']['ismoderator'] && $thread['authorid'] != $_G['uid'])) { ?>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('<?php echo $thread['tid'];?>', '<?php echo $thread['id'];?>');">预览</a> 
<?php } ?>
                                        </div>
                                        
</th>
<?php if(CURMODULE == 'guide') { ?>
<td class="by"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $thread['fid'];?>" target="_blank"><?php echo $forumnames[$thread['fid']]['name'];?></a></td>
<?php } ?>
<td class="by">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_author'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_author'][$key];?>

</td>
<td class="num"></td>
<td class="by">
</td>
</tr>
</tbody>
<?php } ?>
</table><!-- end of table "forum_G[fid]" branch 1/3 -->
<?php } else { ?>
</table><!-- end of table "forum_G[fid]" branch 2/3 -->
<ul id="waterfall" class="ml waterfall cl">
                        <style type="text/css">
                        .nex_bkfocusbox{ display:none;}
                        </style><?php if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { if($_G['hiddenexists'] && $thread['hidden']) { continue;?><?php } if(!$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { if($thread['related_group'] == 0 && $thread['closed'] > 1) { $thread[tid]=$thread[closed];?><?php } } $waterfallwidth = $_G[setting][forumpicstyle][thumbwidth] + 24;?><li style="width:<?php echo $waterfallwidth;?>px">
                            	<div class="nex_waterfallbox">
                                    <?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>
                                        <div style="position:absolute;margin:1px;padding:2px;background:#FFF">
                                        <?php if($thread['fid'] == $_G['fid']) { ?>
                                            <?php if($thread['displayorder'] <= 3 || $_G['adminid'] == 1) { ?>
                                                <input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="<?php echo $thread['tid'];?>" />
                                            <?php } else { ?>
                                                <input type="checkbox" disabled="disabled" />
                                            <?php } ?>
                                        <?php } else { ?>
                                            <input type="checkbox" disabled="disabled" />
                                        <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <div class="c cl">
                                    	<div class="nex_waterfall_hidden">
                                        	<a class="nex_whbtn1" href="#" target="_blank">免费获取报价</a>
                                            <a class="nex_whbtn2" href="#" target="_blank">免费户型设计</a>
                                            <div class="clear"></div>
                                        </div>
                                        <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>" <?php if($thread['isgroup'] == 1 || $thread['forumstick'] || CURMODULE == 'guide') { ?> target="_blank"<?php } else { ?> onclick="atarget(this)"<?php } ?> title="<?php echo $thread['subject'];?>" class="z">
                                            <?php if($thread['cover']) { ?>
                                                <img src="<?php echo $thread['coverpath'];?>" alt="<?php echo $thread['subject'];?>" width="<?php echo $_G['setting']['forumpicstyle']['thumbwidth'];?>" />
                                            <?php } else { ?>
                                                <span class="nopic" style="width:<?php echo $_G['setting']['forumpicstyle']['thumbwidth'];?>px; height:<?php echo $_G['setting']['forumpicstyle']['thumbwidth'];?>px;"></span>
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="nex_WaterIners">
                                        <h3 class="xw0">
                                            <?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread'][$key];?>
                                            <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>"<?php echo $thread['highlight'];?><?php if($thread['isgroup'] == 1 || $thread['forumstick']) { ?> target="_blank"<?php } else { ?> onclick="atarget(this)"<?php } ?> title="<?php echo $thread['subject'];?>"><?php echo $thread['subject'];?></a>
                                        </h3>
                                        
                                    </div>
                                </div>
</li>
<?php } ?>
</ul>
                        
<div id="tmppic" style="display: none;"></div>
<script src="<?php echo $_G['setting']['jspath'];?>redef.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" reload="0">
var wf = {};

_attachEvent(window, "load", function () {
if($("waterfall")) {
wf = waterfall();
}

<?php if($page < $_G['page_next'] && !$subforumonly) { ?>
var page = <?php echo $page;?> + 1,
maxpage = Math.min(<?php echo $page;?> + 10,<?php echo $maxpage;?> + 1),
stopload = 0,
scrolltimer = null,
tmpelems = [],
tmpimgs = [],
markloaded = [],
imgsloaded = 0,
loadready = 0,
showready = 1,
nxtpgurl = 'forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&filter=<?php echo $filter;?>&orderby=<?php echo $_GET['orderby'];?><?php echo $forumdisplayadd['page'];?>&page=',
wfloading = "<img src=\"<?php echo IMGDIR;?>/loading.gif\" alt=\"\" width=\"16\" height=\"16\" class=\"vm\" /> 加载中...",
pgbtn = $("pgbtn").getElementsByTagName("a")[0];

function loadmore() {
var url = nxtpgurl + page + '&t=' + parseInt((+new Date()/1000)/(Math.random()*1000));
var x = new Ajax("HTML");
x.get(url, function (s) {
s = s.replace(/\n|\r/g, "");
if(s.indexOf("id=\"pgbtn\"") == -1) {
$("pgbtn").style.display = "none";
stopload++;
window.onscroll = null;
}

s = s.substring(s.indexOf("<ul id=\"waterfall\""), s.indexOf("<div id=\"tmppic\""));
s = s.replace("id=\"waterfall\"", "");
$("tmppic").innerHTML = s;
loadready = 1;
});
}

window.onscroll = function () {
if(scrolltimer == null) {
scrolltimer = setTimeout(function () {
try {
if(page < maxpage && stopload < 2 && showready && ((document.documentElement.scrollTop || document.body.scrollTop) + document.documentElement.clientHeight + 500) >= document.documentElement.scrollHeight) {
pgbtn.innerHTML = wfloading;
loadready = 0;
showready = 0;
loadmore();
tmpelems = $("tmppic").getElementsByTagName("li");
var waitingtimer = setInterval(function () {
stopload >= 2 && clearInterval(waitingtimer);
if(loadready && stopload < 2) {
if(!tmpelems.length) {
page++;
pgbtn.href = nxtpgurl + Math.min(page, <?php echo $maxpage;?>);
pgbtn.innerHTML = "下一页 &raquo;";
showready = 1;
clearInterval(waitingtimer);
}
for(var i = 0, j = tmpelems.length; i < j; i++) {
if(tmpelems[i]) {
tmpimgs = tmpelems[i].getElementsByTagName("img");
imgsloaded = 0;
for(var m = 0, n = tmpimgs.length; m < n; m++) {
tmpimgs[m].onerror = function () {
this.style.display = "none";
};
markloaded[m] = tmpimgs[m].complete ? 1 : 0;
imgsloaded += markloaded[m];
}
if(imgsloaded == tmpimgs.length) {
$("waterfall").appendChild(tmpelems[i]);
wf = waterfall({
"index": wf.index,
"totalwidth": wf.totalwidth,
"totalheight": wf.totalheight,
"columnsheight": wf.columnsheight
});
}
}
}
}
}, 40);
}
} catch(e) {}
scrolltimer = null;
}, 320);
}
};
<?php } ?>

});

</script>

<?php } } else { ?>
<tbody class="bw0_all"><tr><th colspan="<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>6<?php } else { ?>5<?php } ?>"><p class="emp">本版块或指定的范围内尚无主题</p></th></tr></tbody>
</table><!-- end of table "forum_G[fid]" branch 3/3 -->
<?php } if($_G['forum']['ismoderator'] && $_G['forum_threadcount']) { include template('forum/topicadmin_modlayer'); } ?>
</form>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadlist_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadlist_bottom'];?>
</div>

<?php if(!IS_ROBOT) { ?>
<div id="filter_special_menu" class="p_pop" style="display:none" change="location.href='forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&filter='+$('filter_special').value">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部主题</a></li>
<?php if($showpoll) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=poll<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">投票</a></li><?php } if($showtrade) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=trade<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">商品</a></li><?php } if($showreward) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">悬赏</a></li><?php } if($showactivity) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=activity<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">活动</a></li><?php } if($showdebate) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=debate<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">辩论</a></li><?php } ?>
</ul>
</div>
<div id="filter_reward_menu" class="p_pop" style="display:none" change="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype='+$('filter_reward').value">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部悬赏</a></li>
<?php if($showpoll) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=1">进行中</a></li><?php } if($showtrade) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=2">已解决</a></li><?php } ?>
</ul>
</div>
<div id="filter_dateline_menu" class="p_pop" style="display:none">
<ul class="pop_moremenu">
<li>排序: 
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=author&amp;orderby=dateline<?php echo $forumdisplayadd['author'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['orderby'] == 'dateline') { ?>class="xw1"<?php } ?>>发帖时间</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=replies<?php echo $forumdisplayadd['reply'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['orderby'] == 'replies') { ?>class="xw1"<?php } ?>>回复/查看</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=views<?php echo $forumdisplayadd['view'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['orderby'] == 'views') { ?>class="xw1"<?php } ?>>查看</a>
</li>
<li>时间: 
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if(!$_GET['dateline']) { ?>class="xw1"<?php } ?>>全部时间</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=86400<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '86400') { ?>class="xw1"<?php } ?>>一天</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=172800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '172800') { ?>class="xw1"<?php } ?>>两天</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=604800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '604800') { ?>class="xw1"<?php } ?>>一周</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=2592000<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '2592000') { ?>class="xw1"<?php } ?>>一个月</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=7948800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" <?php if($_GET['dateline'] == '7948800') { ?>class="xw1"<?php } ?>>三个月</a>
</li>
</ul>
</div>
<?php if(!$_G['setting']['closeforumorderby']) { ?>
<div id="filter_orderby_menu" class="p_pop" style="display:none">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">默认排序</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=author&amp;orderby=dateline<?php echo $forumdisplayadd['author'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">发帖时间</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=replies<?php echo $forumdisplayadd['reply'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">回复/查看</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=views<?php echo $forumdisplayadd['view'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">查看</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=lastpost&amp;orderby=lastpost<?php echo $forumdisplayadd['lastpost'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">最后发表</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=heat&amp;orderby=heats<?php echo $forumdisplayadd['heat'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">热门</a></li>
<ul>
</div>
<?php } } if($multipage && $filter != 'hot') { if(!($_G['forum']['picstyle'] && !$_G['cookie']['forumdefstyle'])) { ?>
    <div class="pgbtn">
    	<a class="bm_h" href="javascript:;" rel="<?php echo $multipage_more;?>" curpage="<?php echo $page;?>" id="autopbn" totalpage="<?php echo $maxpage;?>" picstyle="<?php echo $_G['forum']['picstyle'];?>" forumdefstyle="<?php echo $_G['cookie']['forumdefstyle'];?>">
        	<em></em>
        	<div class="nex_ajax_pn"><span>下一页</span><i></i></div>
        </a>
    </div>
<script src="<?php echo $_G['setting']['jspath'];?>autoloadpage.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } else { ?>
<div id="pgbtn" class="pgbtn">
       		<div class="nex_wf_ajax_pn">
        		<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=<?php echo $filter;?>&amp;orderby=<?php echo $_GET['orderby'];?><?php echo $forumdisplayadd['page'];?>&amp;<?php echo $multipage_archive;?>&amp;page=<?php echo $nextpage;?>" hidefocus="true">下一页</a>
            </div>
        </div>
<?php } } ?>
<div class="bm bw0 pgs cl">
<span id="fd_page_bottom"><?php echo $multipage;?></span>
<span <?php if($_G['setting']['visitedforums']) { ?>id="visitedforumstmp" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'21'})"<?php } ?> class="pgb y"><a href="forum.php">返&nbsp;回</a></span>
<?php if(!$_GET['archiveid']) { ?><a href="javascript:;" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="发新帖"></a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'];?>
</div>
<?php } else { ?><div id="threadlist" class="bm bmw"<?php if($_G['uid']) { ?> style="position: relative;"<?php } ?>>

<?php echo $sorttemplate['header'];?>
<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;infloat=yes&amp;nopost=yes">
<?php echo $sorttemplate['body'];?>
<?php if($_G['forum']['ismoderator'] && $_G['forum_threadcount']) { include template('forum/topicadmin_modlayer'); } ?>
</form>
<?php echo $sorttemplate['footer'];?>
</div>

<div class="bm bw0 pgs cl">
<?php echo $multipage;?>
<span <?php if($_G['setting']['visitedforums']) { ?>id="visitedforumstmp" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'21'})"<?php } ?> class="pgb y"><a href="forum.php">返&nbsp;回</a></span>
<?php if(!$_GET['archiveid']) { ?><a href="javascript:;" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle'])) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="发新帖"><img src="<?php echo IMGDIR;?>/pn_post.png" alt="发新帖" /></a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'];?>
</div><?php } } ?>
<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
<?php if($fastpost) { include template('forum/forumdisplay_fastpost'); } ?>

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_bottom'];?>
<!--[diy=diyforumdisplaybottom]--><div id="diyforumdisplaybottom" class="area"></div><!--[/diy]-->
            
</div>

<?php if($_G['forum']['allowside']) { ?>
<div class="sd">
        	<!--我们的优势-->
            <div class="nex_forumadvance">
            	<div class="nex_forumadvance_top">
                	<div class="nex_advanceinter">
                    	
                        <!--[diy=nex_advanceinter]--><div id="nex_advanceinter" class="area"></div><!--[/diy]-->
                    </div>
                </div>
                <div class="nex_forumadvance_btm">
                	<ul>
                    	<!--[diy=nex_forumadvance_btm]--><div id="nex_forumadvance_btm" class="area"></div><!--[/diy]-->
                    	
                    </ul>
                </div>
            </div>
            <?php if(file_exists('source/plugin/nex_decos_180401/inc.php')) { ?>
            <?php require_once("source/plugin/nex_decos_180401/inc.php");?>            <div class="nex_vt_formpost">
                <!--申请表单提交开始-->
                <?php echo $form['0'];?>
                <!--申请表单提交结束-->
            </div>
            <?php } else { ?>
            <?php } ?>
        	<!--本版精华-->
            <div class="nex_sdbox">
                <div class="nex_sdbox_top"><span>本版精华</span><a href="#" target="_blank">...</a><div class="clear"></div></div>
                <div class="nex_localcream">
                	<ul>
                    	<!--[diy=nex_localcream]--><div id="nex_localcream" class="area"></div><!--[/diy]-->
                    	
                    </ul>
                </div>
            </div>
            <!--热门问答-->
            <div class="nex_sdbox">
                <div class="nex_sdbox_top"><span>热门问答</span><a href="#" target="_blank">...</a><div class="clear"></div></div>
                <div class="nex_wendarank">
                	<ul>
                    	<!--[diy=nex_wendarank]--><div id="nex_wendarank" class="area"></div><!--[/diy]-->
                    	
                    </ul>
                </div>
            </div>
            <!--广告位-->
            <div class="nex_forumads"><!--[diy=nex_forumads]--><div id="nex_forumads" class="area"></div><!--[/diy]--></div>
            
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_side_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_side_top'];?>

<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_side_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_side_bottom'];?>
</div>
<?php } ?>
</div>
</div>
<?php if($_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])) { ?>
<ul class="p_pop" id="newspecial_menu" style="display: none">
<?php if(!$_G['forum']['allowspecialonly']) { ?><li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>">发表帖子</a></li><?php } if($_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $threadsorts) { if($_G['forum']['threadsorts']['show'][$id]) { ?>
<li class="popupmenu_option"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;extra=<?php echo $extra;?>&amp;sortid=<?php echo $id;?>"><?php echo $threadsorts;?></a></li>
<?php } } } if($_G['group']['allowpostpoll']) { ?><li class="poll"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1">发起投票</a></li><?php } if($_G['group']['allowpostreward']) { ?><li class="reward"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3">发布悬赏</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li class="debate"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5">发起辩论</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li class="activity"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=4">发起活动</a></li><?php } if($_G['group']['allowposttrade']) { ?><li class="trade"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=2">出售商品</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li class="popupmenu_option"<?php if($_G['setting']['threadplugins'][$tpid]['icon']) { ?> style="background-image:url(source/plugin/<?php echo $tpid;?>/<?php echo $_G['setting']['threadplugins'][$tpid]['icon'];?>)"<?php } ?>><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } ?>
</ul>
<?php } if($_G['setting']['visitedforums'] && $_G['forum']['status'] != 3) { ?>
<div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
<table cellspacing="0" cellpadding="0">
<tr>
<td id="v_forums">
<h3 class="mbn pbn bbda xg1">浏览过的版块</h3>
<ul class="xl xl1">
<?php echo $_G['setting']['visitedforums'];?>
</ul>
</td>
</tr>
</table>
</div>
<?php } if($_G['setting']['threadmaxpages'] > 1 && $page && !$subforumonly) { ?>
<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <?php if($page > 1) { ?>1<?php } else { ?>0<?php } ?>, <?php if($page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']) { ?>1<?php } else { ?>0<?php } ?>, 'forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&filter=<?php echo $filter;?>&orderby=<?php echo $_GET['orderby'];?><?php echo $forumdisplayadd['page'];?>&<?php echo $multipage_archive;?>', <?php echo $page;?>);}</script>
<?php } if(empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && empty($_GET['filter']) ) { ?>
<script type="text/javascript">checkForumnew_handle = setTimeout(function () {checkForumnew(<?php echo $_G['fid'];?>, lasttime);}, checkForumtimeout);</script>
<?php } ?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<?php if(empty($_G['setting']['disfixednv_forumdisplay']) ) { ?><script>fixed_top_nv();</script><?php } include template('common/footer'); ?>