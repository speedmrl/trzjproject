<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<style type="text/css">
.nexfooter{ margin-top:0;}
.nexsidetls{display:none;}
#wp,.wp{ width:100%; background:#f6f6f6!important;}
.ptm{ width:100%; padding-top:1px!important;}
.nex_Mainbod{width: 1180px; margin:80px auto; }
.nex_zhucekuangbox{ width: 1180px;height:600px; overflow:visible; -webkit-box-shadow: 0 8px 30px rgba(0,0,0,.09); box-shadow: 0 8px 30px rgba(0,0,0,.09);}
.nex_zhuce_bgs{ width:463px; height:600px;position:relative; background:url(template/nex_deco_180401/neoconex/dl/re_bg.jpg) no-repeat; float:right;}
.nex_dl_btms{ height:20px; line-height:20px; position:absolute; bottom:20px; left:30px;}
.nex_dl_btms span{ font-size:14px; color:#fff; margin-right:5px;}
.nex_dl_btms a{ font-size:14px; color:#fff; text-decoration:underline; margin-right:10px;}

.nex_zctop_inner{ float:left; width:617px;height:520px; overflow:hidden; padding:30px 50px 50px 50px;background: rgba(255,255,255,1); position:relative;}

.tipcol{}
.rfm .p_tip{ width:190px;line-height:35px; }
.rfm th{ line-height:35px; width:90px;}
.rfm .p_tip th{ font-size:16px; color:#999;}
.rfm th, .rfm td{ padding:5px;}
.rfm th{ font-size:14px; color:#666; font-weight:400;}
.rfm .px {width:285px!important; height: 30px; border: 1px solid #ddd;}
.rfm .vm{ margin-top:5px;}
.rfm .p_chk{ height:35px;line-height:35px;  font-weight:400; font-size:12px;}
.rfm{ width:530px; border-bottom:0;}
.p_right{ background-position:10px 19px;}
.rfm .pnc{display: inline-block; border-color:#FF5353!important;border:0; width: 218px;  text-align: center;   height: 35px;  line-height: 35px;  color: #fff;  font-size: 14px;background:#FF5353;  margin-top: 5px;}
.rfm .pn{display: inline-block; border-color:#FF5353;border:0; width: 295px; margin-right:0; text-align: center;  height: 35px;  line-height: 35px;  color: #fff;  font-size: 14px;background:#FF5353;margin-top: 5px;}
.nex_submiting{display: inline-block; border-color:#FF5353;border:0; width: 295px;  margin-right:0; margin-left:105px; text-align: center;  height: 35px; line-height: 35px;  color: #fff;  font-size: 14px; background:#FF5353; margin-top: 5px;}
.nex_rgrulls{ padding: 0 0 20px 148px;}
.nex_rgrulls a{ font-size:12px; color:#FF5353; text-decoration:underline; margin-left:5px;}

.nex_dl_bottoms{ text-align:center; height:30px; line-height:30px; font-size:14px; color:#abb4c3; margin-top:40px;}
.nex_dl_bottoms a{font-size:14px; color:#abb4c3;}
.nex_dl_bottoms a:hover{ color:#FF5353;}

</style>
<script type="text/javascript">
	var strongpw = new Array();
	<!--{if $_G['setting']['strongpw']}-->
		<!--{loop $_G['setting']['strongpw'] $key $val}-->
		strongpw[$key] = $val;
		<!--{/loop}-->
	<!--{/if}-->
	var pwlength = <!--{if $_G['setting']['pwlength']}-->$_G['setting']['pwlength']<!--{else}-->0<!--{/if}-->;
</script>

<script type="text/javascript" src="{$this->setting[jspath]}register.js?{VERHASH}"></script>

<div id="ct" class="ptm wp cl">
    <div class="nex_zcbot" id="main_hnav">
        <div class="nex_Mainbod">
            <div class="nex_zhuce_bgs">
                <div class="nex_dl_btms">
                    <span>已有账号？请</span>
                    <a href="member.php?mod=logging&action=login">登陆</a>
                </div>
            </div>
            <div class="bmx nex_zctop_inner" id="main_message">
                    
                    <!--{hook/register_side_top}-->
                    <!--{if $this->showregisterform}-->
                    <form method="post" autocomplete="off" name="register" id="registerform" enctype="multipart/form-data" onsubmit="checksubmit();return false;" action="member.php?mod=$regname">
                        <div id="layer_reg">
                            <input type="hidden" name="regsubmit" value="yes" />
                            <input type="hidden" name="formhash" value="{FORMHASH}" />
                            <input type="hidden" name="referer" value="$dreferer" />
                            <input type="hidden" name="activationauth" value="{if $_GET[action] == 'activation'}$activationauth{/if}" />
                            <!--{if $_G['setting']['sendregisterurl']}-->
                                <input type="hidden" name="hash" value="$_GET[hash]" />
                            <!--{/if}-->
                            <div class="mtw">
                                <div id="reginfo_a">
                                    <!--{hook/register_top}-->
                                    <!--{if $sendurl}-->
                                        <div class="rfm">
                                            <table>
                                                <tr>
                                                    <th><span class="rq">*</span><label for="{$this->setting['reginput']['email']}">{lang email}:</label></th>
                                                    <td>
                                                        <input type="text" id="{$this->setting['reginput']['email']}" name="$this->setting['reginput']['email']" autocomplete="off" size="25" tabindex="1" class="px" required /><br /><em id="emailmore">&nbsp;</em>
                                                        <input type="hidden" name="handlekey" value="sendregister"/>
                                                    </td>
                                                    <td class="tipcol"><i id="tip_{$this->setting['reginput']['email']}" class="p_tip">{lang register_email_tips}</i><kbd id="chk_{$this->setting['reginput']['email']}" class="p_chk"></kbd></td>
                                                </tr>
                                            </table>
                                            <table>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <td class="tipwide">
                                                        {lang register_validate_email_tips}
                                                    </td>
                                                </tr>
                                            </table>
                                            <script type="text/javascript">
                                                function succeedhandle_sendregister(url, msg, values) {
                                                    showDialog(msg, 'notice');
                                                }
                                            </script>
                                        </div>
                                    <!--{else}-->
                                        <!--{if $invite}-->
                                            <!--{if $invite['uid']}-->
                                            <div class="rfm">
                                                <table>
                                                    <tr>
                                                        <th>{lang register_from}:</th>
                                                        <td><a href="home.php?mod=space&uid=$invite[uid]" target="_blank">$invite[username]</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--{else}-->
                                            <div class="rfm">
                                                <table>
                                                    <tr>
                                                        <th><label for="invitecode">{lang invite_code}:</label></th>
                                                        <td>$_GET[invitecode]<input type="hidden" id="invitecode" name="invitecode" value="$_GET[invitecode]" /></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--{eval $invitecode = 1;}-->
                                            <!--{/if}-->
                                        <!--{/if}-->
                
                                        <!--{if empty($invite) && $this->setting['regstatus'] == 2 && !$invitestatus}-->
                                        <div class="rfm">
                                            <table>
                                                <tr>
                                                    <th><span class="rq">*</span><label for="invitecode">{lang invite_code}:</label></th>
                                                    <td><input type="text" id="invitecode" name="invitecode" autocomplete="off" size="25" onblur="checkinvite()" tabindex="1" class="px" required /><!--{if $this->setting['inviteconfig']['buyinvitecode'] && $this->setting['inviteconfig']['invitecodeprice'] && ($this->setting[ec_tenpay_bargainor] || $this->setting[ec_tenpay_opentrans_chnid] || $this->setting[ec_account])}--><p><a href="misc.php?mod=buyinvitecode" target="_blank" class="xi2">{lang register_buyinvitecode}</a></p><!--{/if}--></td>
                                                    <td class="tipcol"><i id="tip_invitecode" class="p_tip"><!--{if $this->setting['inviteconfig']['invitecodeprompt']}-->$this->setting[inviteconfig][invitecodeprompt]<!--{/if}--></i><kbd id="chk_invitecode" class="p_chk"></kbd></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--{eval $invitecode = 1;}-->
                                        <!--{/if}-->
                
                                        <!--{if $_GET[action] != 'activation'}-->
                                            <div class="rfm">
                                                <table>
                                                    <tr>
                                                        <th><span class="rq">*</span><label for="{$this->setting['reginput']['username']}">{lang username}:</label></th>
                                                        <td><input type="text" id="{$this->setting['reginput']['username']}" name="" class="px" tabindex="1" value="{echo dhtmlspecialchars($_GET[defaultusername])}" autocomplete="off" size="25" maxlength="15" required /></td>
                                                        <td class="tipcol"><i id="tip_{$this->setting['reginput']['username']}" class="p_tip">{lang register_username_tips}</i><kbd id="chk_{$this->setting['reginput']['username']}" class="p_chk"></kbd></td>
                                                    </tr>
                                                </table>
                                            </div>
                
                                            <div class="rfm">
                                                <table>
                                                    <tr>
                                                        <th><span class="rq">*</span><label for="{$this->setting['reginput']['password']}">{lang password}:</label></th>
                                                        <td><input type="password" id="{$this->setting['reginput']['password']}" name="" size="25" tabindex="1" class="px" required /></td>
                                                        <td class="tipcol"><i id="tip_{$this->setting['reginput']['password']}" class="p_tip">{lang register_password_tips}<!--{if $_G['setting']['pwlength']}-->, {lang register_password_length_tips1} $_G['setting']['pwlength'] {lang register_password_length_tips2}<!--{/if}--></i><kbd id="chk_{$this->setting['reginput']['password']}" class="p_chk"></kbd></td>
                                                    </tr>
                                                </table>
                                            </div>
                
                                            <div class="rfm">
                                                <table>
                                                    <tr>
                                                        <th><span class="rq">*</span><label for="{$this->setting['reginput']['password2']}">{lang password_confirm}:</label></th>
                                                        <td><input type="password" id="{$this->setting['reginput']['password2']}" name="" size="25" tabindex="1" value="" class="px" required /></td>
                                                        <td class="tipcol"><i id="tip_{$this->setting['reginput']['password2']}" class="p_tip">{lang register_repassword_tips}</i><kbd id="chk_{$this->setting['reginput']['password2']}" class="p_chk"></kbd></td>
                                                    </tr>
                                                </table>
                                            </div>
                
                                            <div class="rfm">
                                                <table>
                                                    <tr>
                                                        <th><!--{if !$_G['setting']['forgeemail']}--><span class="rq">*</span><!--{/if}--><label for="{$this->setting['reginput']['email']}">{lang email}:</label></th>
                                                        <td><input type="text" id="{$this->setting['reginput']['email']}" name="" autocomplete="off" size="25" tabindex="1" class="px" value="$hash[0]" {if !$_G['setting']['forgeemail']}required{/if} /><br /><em id="emailmore">&nbsp;</em></td>
                                                        <td class="tipcol"><i id="tip_{$this->setting['reginput']['email']}" class="p_tip">{lang register_email_tips}</i><kbd id="chk_{$this->setting['reginput']['email']}" class="p_chk"></kbd></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        <!--{/if}-->
                
                                        <!--{if $_GET[action] == 'activation'}-->
                                        <div id="activation_user" class="rfm">
                                            <table>
                                                <tr>
                                                    <th>{lang username}:</th>
                                                    <td><strong>$username</strong></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--{/if}-->
                
                                        <!--{if $this->setting['regverify'] == 2}-->
                                        <div class="rfm">
                                            <table>
                                                <tr>
                                                    <th><span class="rq">*</span><label for="regmessage">{lang register_message}:</label></th>
                                                    <td><input id="regmessage" name="regmessage" class="px" autocomplete="off" size="25" tabindex="1" required /></td>
                                                    <td class="tipcol"><i id="tip_regmessage" class="p_tip">{lang register_message1}</i></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--{/if}-->
                
                                        <!--{if empty($invite) && $this->setting['regstatus'] == 3}-->
                                        <div class="rfm">
                                            <table>
                                                <tr>
                                                    <th><label for="invitecode">{lang invite_code}:</label></th>
                                                    <td><input type="text" name="invitecode" autocomplete="off" size="25" id="invitecode"{if $this->setting['regstatus'] == 2} onblur="checkinvite()"{/if} tabindex="1" class="px" /></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--{eval $invitecode = 1;}-->
                                        <!--{/if}-->
                
                                        <!--{loop $_G['cache']['fields_register'] $field}-->
                                            <!--{if $htmls[$field['fieldid']]}-->
                                            <div class="rfm">
                                                <table>
                                                    <tr>
                                                        <th><!--{if $field['required']}--><span class="rq">*</span><!--{/if}--><label for="$field['fieldid']">$field[title]:</label></th>
                                                        <td>$htmls[$field['fieldid']]</td>
                                                        <td class="tipcol"><i id="tip_$field['fieldid']" class="p_tip"><!--{if $field['description']}--><!--{echo dhtmlspecialchars($field[description])}--><!--{/if}--></i><kbd id="chk_$field['fieldid']" class="p_chk"></kbd></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--{/if}-->
                                        <!--{/loop}-->
                                    <!--{/if}-->
                                    <!--{hook/register_input}-->
                
                                    <!--{if $secqaacheck || $seccodecheck}-->
                                        <!--{block sectpl}--><div class="rfm"><table><tr><th><span class="rq">*</span><sec>: </th><td><sec><br /><sec></td></tr></table></div><!--{/block}-->
                                        <!--{subtemplate common/seccheck}-->
                                    <!--{/if}-->
                
                                </div>
                
                            </div>
                
                        </div>
                
                        <div id="layer_reginfo_b">
                            <div class="rfm mbw bw0">
                                 <!--{if $_GET[action] != 'activation'}--><!--{/if}-->
                                  <button class="pn pnc nex_submiting" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1"><!--{if $_GET[action] == 'activation'}-->{lang activation}<!--{else}-->{lang submit}<!--{/if}--></button>
                                <!--{if $this->setting['sitemessage'][register]}--><a href="javascript:;" id="custominfo_register" class="y"><img src="{IMGDIR}/info_small.gif" alt="{lang faq}" /></a><!--{/if}-->
                            </div>
                            <!--{if $bbrules}-->
                            <div class="nex_rgrulls">
                            <input type="checkbox" class="pc" name="agreebbrule" value="$bbrulehash" id="agreebbrule" checked="checked" /> <label for="agreebbrule">{lang agree}<a href="javascript:;" onclick="showBBRule()">{lang rulemessage}</a></label>
                            </div>
                            <!--{/if}-->
                            <!--{if !empty($_G['setting']['pluginhooks']['register_logging_method'])}-->
                                <div class="rfm bw0 {if empty($_GET['infloat'])} mbw{/if}">
                                    <hr class="l" />
                                    <table>
                                        <tr>
                                            <th>{lang login_method}:</th>
                                            <td><!--{hook/register_logging_method}--></td>
                                        </tr>
                                    </table>
                                </div>
                            <!--{/if}-->
                        </div>
                    </form>
                    <!--{/if}-->
                    <!--{hook/register_bottom}-->
                
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            
        </div>
    </div>
       	<p id="returnmessage4"></p>
       <div id="layer_regmessage"class="f_c blr nfl" style="display: none">
            <div class="c">
            	<div class="alert_right">
                    <div id="messageleft1"></div>
                    <p class="alert_btnleft" id="messageright1"></p>
                </div>
            </div>
        </div>
       <div id="layer_bbrule" style="display: none">
        <div class="c" style="width:700px;height:350px;overflow:auto">$bbrulestxt</div>
        <p class="fsb pns cl hm">
            <button class="pn pnc" onclick="$('agreebbrule').checked = true;hideMenu('fwin_dialog', 'dialog');{if $this->setting['sitemessage'][register] && ($bbrules && $bbrulesforce)}showRegprompt();{/if}"><span>{lang agree}</span></button>
            <button class="pn" onclick="location.href='$_G[siteurl]'"><span>{lang disagree}</span></button>
        </p>
        
        </div>
	   <script type="text/javascript">
        var ignoreEmail = <!--{if $_G['setting']['forgeemail']}-->true<!--{else}-->false<!--{/if}-->;
        <!--{if $bbrules && $bbrulesforce}-->
            showBBRule();
        <!--{/if}-->
        <!--{if $this->showregisterform}-->
            <!--{if $sendurl}-->
            addMailEvent($('{$this->setting['reginput']['email']}'));
            <!--{else}-->
            addFormEvent('registerform', <!--{if $_GET[action] != 'activation' && !($bbrules && $bbrulesforce) && !empty($invitecode)}-->1<!--{else}-->0<!--{/if}-->);
            <!--{/if}-->
            <!--{if $this->setting['sitemessage'][register]}-->
                function showRegprompt() {
                    showPrompt('custominfo_register', 'mouseover', '<!--{echo trim($this->setting['sitemessage'][register][array_rand($this->setting['sitemessage'][register])])}-->', $this->setting['sitemessage'][time]);
                }
                <!--{if !($bbrules && $bbrulesforce)}-->
                    showRegprompt();
                <!--{/if}-->
            <!--{/if}-->
            function showBBRule() {
                showDialog($('layer_bbrule').innerHTML, 'info', '<!--{echo addslashes($this->setting['bbname']);}--> {lang rulemessage}');
                $('fwin_dialog_close').style.display = 'none';
            }
        <!--{/if}-->
        </script>
       
</div>

<!--{eval updatesession();}-->
<!--{template common/footer}-->