<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<style type="text/css">
.nexfooter{ margin-top:0;}
.nexsidetls{display:none;}
.wp, #wp{ width:100%;}
.nex_dl_aeras{ width:100%; background:#f6f6f6!important;}
.ptm{ width:100%;padding-top:1px!important;}
.nex_dlzc_txt{ padding:0px;height:50px; margin-bottom:10px;overflow:hidden; width:100%; position:relative;  font-size:18px; color:#434343; font-weight:400; text-align:center;}
.nex_dlzc_txt em{ display:block;margin:10px auto; float:none; padding:0px;height:50px; line-height:50px; overflow:hidden;  font-size:18px; color:#434343; font-weight:400; text-align:center;}
.nex_dlzc_txt a{ width:20px; height:20px; position:absolute; top:20px; right:20px;}
.nex_Mainbod{width: 1180px; margin:80px auto; }

.nex_zhucekuangbox{ width: 1180px;height:600px; overflow:visible; -webkit-box-shadow: 0 8px 30px rgba(0,0,0,.09); box-shadow: 0 8px 30px rgba(0,0,0,.09);}
.nex_denglu_bgs{ width:463px; height:600px;position:relative; background:url(template/nex_deco_180401/neoconex/dl/dl_bg.jpg) no-repeat; float:right;}
.nex_dl_btms{ height:20px; line-height:20px; position:absolute; bottom:20px; left:30px;}
.nex_dl_btms span{ font-size:14px; color:#fff; margin-right:5px;}
.nex_dl_btms a{ font-size:14px; color:#fff; text-decoration:underline; margin-right:10px;}

.nex_denglu_side{ float:left; width:617px;height:500px; overflow:hidden; padding:50px;background: rgba(255,255,255,1); position:relative;}
.nex_denglu_box{}

.rfm .p_tip{ width:185px;line-height:35px; }
.rfm th{ line-height:35px; width:90px; }
.rfm th, .rfm td{line-height:35px;}
.rfm .p_tip th{ font-size:16px; color:#999;}
.rfm th{ font-size:14px; color:#666; font-weight:400;}
.rfm th, .rfm td{ padding:5px;}
select{ width:330px!important; height:36px; border-color:#ddd;}
.rfm .px {width:320px!important; height: 30px; border: 1px solid #ddd;}
.rfm .vm{ margin-top:5px;}
.rfm .p_chk{line-height:35px;}
.rfm{ width:530px; border-bottom:0;}
.p_right{ background-position:10px 19px;}
.rfm .pnc{display: inline-block; border-color:#FF5353!important;border:0; width: 218px;  text-align: center;  height: 35px;  line-height: 35px;  color: #fff;  font-size: 14px;background-color:#FF5353; background: #FF5353!important; margin-top: 5px; }
.rfm .pn{display: inline-block; border-color:#ff4400;border:0; width: 330px;  text-align: center;  height: 35px;  line-height: 35px;  color: #fff;  font-size: 14px; background:#FF5353; margin-top: 5px;}
</style>
<!--{eval $loginhash = 'L'.random(4);}-->
<!--{if empty($_GET['infloat'])}-->
<div id="ct" class="ptm wp w cl nex_dl_aeras">
    <div class="nex_Mainbod">
        <div class="mn nex_zhucekuangbox" id="main_message">
            <div class="nex_denglu_bgs">
                <div class="nex_dl_btms">
                    <span>新用户？请</span>
                    <a href="member.php?mod={$_G[setting][regname]}">$_G['setting']['reglinkname']</a>
                    <span>忘记密码？</span>
                    <a href="javascript:;" onclick="display('layer_login_$loginhash');display('layer_lostpw_$loginhash');" title="{lang getpassword}">{lang getpassword}</a>
                </div>
            </div>
            <div class="bmx nex_denglu_side">
            	
                <!--{hook/logging_side_top}-->
            <div>
            <div class="clear"></div>
           
    <!--{/if}-->
    
    <div class="nex_denglu_box" id="main_messaqge_$loginhash"{if $auth} style="width: auto"{/if}>
        <div id="layer_login_$loginhash">
            <h3 class="flb nex_dlzc_txt">
                <em id="returnmessage_$loginhash">
                    <!--{if !empty($_GET['infloat'])}--><!--{if !empty($_GET['guestmessage'])}-->{lang login_guestmessage}<!--{elseif $auth}-->{lang profile_renew}<!--{else}-->{lang login_member}<!--{/if}--><!--{/if}-->
                </em>
                <span><!--{if !empty($_GET['infloat']) && !isset($_GET['frommessage'])}--><a href="javascript:;" class="flbc" onclick="hideWindow('$_GET[handlekey]', 0, 1);" title="{lang close}">{lang close}</a><!--{/if}--></span>
            </h3>
            <!--{hook/logging_top}-->
            <form method="post" autocomplete="off" name="login" id="loginform_$loginhash" class="cl" onsubmit="{if $this->setting['pwdsafety']}pwmd5('password3_$loginhash');{/if}pwdclear = 1;ajaxpost('loginform_$loginhash', 'returnmessage_$loginhash', 'returnmessage_$loginhash', 'onerror');return false;" action="member.php?mod=logging&action=login&loginsubmit=yes{if !empty($_GET['handlekey'])}&handlekey=$_GET[handlekey]{/if}{if isset($_GET['frommessage'])}&frommessage{/if}&loginhash=$loginhash">
                <div class="c cl">
                    <input type="hidden" name="formhash" value="{FORMHASH}" />
                    <input type="hidden" name="referer" value="{echo dreferer()}" />
                    <!--{if $auth}-->
                        <input type="hidden" name="auth" value="$auth" />
                    <!--{/if}-->
                    
                    <!--{if $invite}-->
                    <div class="rfm">
                        <table>
                            <tr>
                                <th>{lang register_from}</th>
                                <td><a href="home.php?mod=space&uid=$invite[uid]" target="_blank">$invite[username]</a></td>
                            </tr>
                        </table>
                    </div>
                    <!--{/if}-->
    
                    <!--{if !$auth}-->
                    <div class="rfm">
                        <table>
                            <tr>
                                <th>
                                    <!--{if $this->setting['autoidselect']}--><label for="username_$loginhash">{lang login_id}:</label><!--{else}-->
                                        <span class="login_slct">
                                            <select name="loginfield" style="float: left;" width="45" id="loginfield_$loginhash">
                                                <option value="username">{lang username}</option>
                                                <!--{if getglobal('setting/uidlogin')}-->
                                                <option value="uid">{lang uid}</option>
                                                <!--{/if}-->
                                                <option value="email">{lang email}</option>
                                            </select>
                                        </span>
                                    <!--{/if}-->
                                </th>
                                <td><input type="text" name="username" id="username_$loginhash" autocomplete="off" size="30" class="px p_fre" tabindex="1" value="$username" /></td>
                                
                            </tr>
                        </table>
                    </div>
                    <div class="rfm">
                        <table>
                            <tr>
                                <th><label for="password3_$loginhash">{lang login_password}:</label></th>
                                <td><input type="password" id="password3_$loginhash" name="password" onfocus="clearpwd()" size="30" class="px p_fre" tabindex="1" /></td>
                                
                            </tr>
                        </table>
                    </div>
                    <!--{/if}-->
    
                    <!--{if empty($_GET['auth']) || $questionexist}-->
                    <div class="rfm">
                        <table>
                            <tr>
                                <th>{lang security_q}:</th>
                                <td><select id="loginquestionid_$loginhash" width="213" name="questionid"{if !$questionexist} onchange="if($('loginquestionid_$loginhash').value > 0) {$('loginanswer_row_$loginhash').style.display='';} else {$('loginanswer_row_$loginhash').style.display='none';}"<!--{/if}-->>
                                    <option value="0"><!--{if $questionexist}-->{lang security_question_0}<!--{else}-->{lang security_question}<!--{/if}--></option>
                                    <option value="1">{lang security_question_1}</option>
                                    <option value="2">{lang security_question_2}</option>
                                    <option value="3">{lang security_question_3}</option>
                                    <option value="4">{lang security_question_4}</option>
                                    <option value="5">{lang security_question_5}</option>
                                    <option value="6">{lang security_question_6}</option>
                                    <option value="7">{lang security_question_7}</option>
                                </select></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rfm" id="loginanswer_row_$loginhash" {if !$questionexist} style="display:none"{/if}>
                        <table>
                            <tr>
                                <th>{lang security_a}:</th>
                                <td><input type="text" name="answer" id="loginanswer_$loginhash" autocomplete="off" size="30" class="px p_fre" tabindex="1" /></td>
                            </tr>
                        </table>
                    </div>
                    <!--{/if}-->
    
                    <!--{if $seccodecheck}-->
                        <!--{block sectpl}--><div class="rfm"><table><tr><th><sec>: </th><td><sec><br /><sec></td></tr></table></div><!--{/block}-->
                        <!--{subtemplate common/seccheck}-->
                    <!--{/if}-->
    
                    <!--{hook/logging_input}-->
    
                    <div class="rfm {if !empty($_GET['infloat'])} bw0{/if}">
                        <table>
                            <tr>
                                <th></th>
                                <td><label for="cookietime_$loginhash"><input type="checkbox" class="pc" name="cookietime" id="cookietime_$loginhash" tabindex="1" value="2592000" $cookietimecheck />{lang login_permanent}</label></td>
                            </tr>
                        </table>
                    </div>
    
                    <div class="rfm mbw bw0">
                        <table width="100%">
                            <tr>
                                <th>&nbsp;</th>
                                <td>
                                    <button class="pn pnc" type="submit" name="loginsubmit" value="true" tabindex="1">立即登录</button>
                                </td>
                                <td>
                                    <!--{if $this->setting['sitemessage'][login] && empty($_GET['infloat'])}--><a href="javascript:;" id="custominfo_login_$loginhash" class="y">&nbsp;<img src="{IMGDIR}/info_small.gif" alt="{lang faq}" class="vm" /></a><!--{/if}-->
                                    
                                </td>
                            </tr>
                        </table>
                    </div>
    
                    <!--{if !empty($_G['setting']['pluginhooks']['logging_method'])}-->
                        <div class="rfm bw0 {if empty($_GET['infloat'])} mbw{/if}">
                            <hr class="l" />
                            <table>
                                <tr>
                                    <th>{lang login_method}:</th>
                                    <td><!--{hook/logging_method}--></td>
                                </tr>
                            </table>
                        </div>
                    <!--{/if}-->
                </div>
            </form>
        </div>
        <!--{if $_G['setting']['pwdsafety']}-->
            <script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
        <!--{/if}-->
        <div id="layer_lostpw_$loginhash" style="display: none;">
            <h3 class="flb nex_dlzc_txt">
                <em id="returnmessage3_$loginhash">{lang getpassword}</em>
                <span><!--{if !empty($_GET['infloat']) && !isset($_GET['frommessage'])}--><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="{lang close}">{lang close}</a><!--{/if}--></span>
            </h3>
            <form method="post" autocomplete="off" id="lostpwform_$loginhash" class="cl" onsubmit="ajaxpost('lostpwform_$loginhash', 'returnmessage3_$loginhash', 'returnmessage3_$loginhash', 'onerror');return false;" action="member.php?mod=lostpasswd&lostpwsubmit=yes&infloat=yes">
                <div class="c cl">
                    <input type="hidden" name="formhash" value="{FORMHASH}" />
                    <input type="hidden" name="handlekey" value="lostpwform" />
                    <div class="rfm">
                        <table>
                            <tr>
                                <th><span class="rq">*</span><label for="lostpw_email">{lang email}:</label></th>
                                <td><input type="text" name="email" id="lostpw_email" size="30" value=""  tabindex="1" class="px p_fre" /></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rfm">
                        <table>
                            <tr>
                                <th><label for="lostpw_username">{lang username}:</label></th>
                                <td><input type="text" name="username" id="lostpw_username" size="30" value=""  tabindex="1" class="px p_fre" /></td>
                            </tr>
                        </table>
                    </div>
    
                    <div class="rfm mbw bw0">
                        <table>
                            <tr>
                                <th></th>
                                <td><button class="pn pnc" type="submit" name="lostpwsubmit" value="true" tabindex="100"><span>{lang submit}</span></button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div id="layer_message_$loginhash"{if empty($_GET['infloat'])} class="f_c blr nfl"{/if} style="display: none;">
        <h3 class="flb" id="layer_header_$loginhash">
            <!--{if !empty($_GET['infloat']) && !isset($_GET['frommessage'])}-->
            <em>{lang login_member}</em>
            <span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="{lang close}">{lang close}</a></span>
            <!--{/if}-->
        </h3>
        <div class="c"><div class="alert_right">
            <div id="messageleft_$loginhash"></div>
            <p class="alert_btnleft" id="messageright_$loginhash"></p>
        </div>
    </div>
    
    <script type="text/javascript" reload="1">
    <!--{if !isset($_GET['viewlostpw'])}-->
        var pwdclear = 0;
        function initinput_login() {
            document.body.focus();
            <!--{if !$auth}-->
                if($('loginform_$loginhash')) {
                    $('loginform_$loginhash').username.focus();
                }
                <!--{if !$this->setting['autoidselect']}-->
                    simulateSelect('loginfield_$loginhash');
                <!--{/if}-->
            <!--{elseif $seccodecheck && !(empty($_GET['auth']) || $questionexist)}-->
                if($('loginform_$loginhash')) {
                    safescript('seccodefocus', function() {$('loginform_$loginhash').seccodeverify.focus()}, 500, 10);
                }			
            <!--{/if}-->
        }
        initinput_login();
        <!--{if $this->setting['sitemessage']['login']}-->
        showPrompt('custominfo_login_$loginhash', 'mouseover', '<!--{echo trim($this->setting['sitemessage'][login][array_rand($this->setting['sitemessage'][login])])}-->', $this->setting['sitemessage'][time]);
        <!--{/if}-->
    
        function clearpwd() {
            if(pwdclear) {
                $('password3_$loginhash').value = '';
            }
            pwdclear = 0;
        }
    <!--{else}-->
        display('layer_login_$loginhash');
        display('layer_lostpw_$loginhash');
        $('lostpw_email').focus();
    <!--{/if}-->
    </script>
    
    <!--{eval updatesession();}-->
    <!--{if empty($_GET['infloat'])}-->
        </div></div></div></div>
        
    </div>
</div>
<!--{/if}-->
<!--{template common/footer}-->