<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$__FORMHASH = FORMHASH;$return = <<<EOF

<div class="nex_slider_interbox">
<div class="nex_slider_interbox_top"><i></i>申请免费量房/设计</div>
    <h5>10秒登记,免费获取量房服务与装修设计方案</h5>
    <div class="nex_plugin_measure">
      <input type="text" name="nex_chenghu" id="nex_chenghu" class="nex_plugin_Name" placeholder="请填写您的称呼">
    </div>
    <div class="nex_plugin_measure">
      <input type="text" name="nex_handphone" id="nex_handphone" class="nex_plugin_Numbers" placeholder="请填写您的手机号">
    </div>
    <div class="nex_plugin_aera">
        {$formarr['nex_plugin_quyu']}
    </div>
    <div class="nex_plugin_xiaoqu"><input type="text" name="nex_mansionname" id="nex_mansionname" class="nex_mansion_name" placeholder="请填写小区名称"></div>
    <div class="clear"></div>
    <input type="submit" class="nex_plugin_tijiao_buttons" id="nex_plugin_tijiao" value="立即申请">
    <div class="nex_adv_plugin">
        <ul>
            <li>
                <img src="{$_G['style']['styleimgdir']}/plugin/apply1.png" />
                <p>免费设计</p>
            </li>
            <li>
                <img src="{$_G['style']['styleimgdir']}/plugin/apply2.png" />
                <p>免费量房</p>
            </li>
            <li>
                <img src="{$_G['style']['styleimgdir']}/plugin/apply3.png" />
                <p>售后无忧</p>
            </li>
            <li>
                <img src="{$_G['style']['styleimgdir']}/plugin/apply4.png" />
                <p>多种方案</p>
            </li>
            <div class="clear"></div>
        </ul>
    </div>
</div>
<script>
var init= jQuery(function(){
jQuery("#nex_plugin_tijiao").on("click", function() {
var chenghu=jQuery("#nex_chenghu").val(),
handphone=jQuery("#nex_handphone").val(),
quyu=jQuery("#nex_plugin_quyu").val(),
mansionname=jQuery("#nex_mansionname").val(),
myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
if(chenghu==''){
_showDialog('请输入您的称呼');
return false;
}else if(!/^[a-zA-Z\u4e00-\u9fa5]+$/gi.test(chenghu)){
_showDialog('称呼只允许输入中文或英文');
return false;
}
if(handphone==''){
_showDialog('请输入您的手机号');
return false;
}else if(!myreg.test(handphone)){
_showDialog('请输入正确的手机号');
return false;
}
if(mansionname==''){
_showDialog('请输入小区名称');
return false;
}else if(!/^[a-zA-Z\u4e00-\u9fa5]+$/gi.test(mansionname)){
_showDialog('小区名称只允许输入中文或英文');
return false;
}
jQuery.get('{$_G['siteurl']}plugin.php?id=nex_decos_180401:api', {
 formhash:"{$__FORMHASH}",ac:"add",type:"1",chenghu:encodeURI(chenghu),handphone:handphone,quyu:quyu,mansionname:mansionname
},function (data){
if(data.err){
_showDialog(data.msg);
return false;
}else{
showDialog('{$this->setvar['success']}', 'right', '', '',true,'','','','','',2);
setTimeout(function() {window.location.reload();}, 2000);
}
}, "json");
});
});
function _showDialog(dlog){
showDialog(dlog, 'alert', '', '',true);
}
init();
</script>

EOF;
?><?php
$returns = <<<EOF
<select class="{$cname}" id="{$seid}" name="{$seid}">{$opt}</select>
EOF;
?><?php
$__FORMHASH = FORMHASH;$returna = <<<EOF

<div id="nex_sideJmm" class="nex_sideJmm">
    <div class="nex_sJmm-big-cont">
        <div class="nex_fttools">
            <div class="nex_pic_person"></div>
            <div class="nex_ld_area">
                <h5>已有<em>{$offercount}</em>位业主成功获取装修预算清单</h5>
                <div class="nex_ld_area_top">
                	{$formarr['nex_cityaera']}{$formarr['nex_decostyles']}{$formarr['nex_huxing']}{$formarr['nex_zxyusuan']}
                    <div class="clear"></div>
                </div>
                <div class="nex_ld_area_btm">
                    <div class="nex_ld_typein_box"><input class="nex_ld_typein_nameinput" id="nex_ld_typein_nameinputs" placeholder="您的名字" ></div>
                    <div class="nex_ld_typein_box"><input class="nex_ld_typein_building" id="nex_ld_typein_buildings" placeholder="小区名称"></div>
                    <div class="nex_ld_typein_box"><input class="nex_ld_typein_mianji" id="nex_ld_typein_mianjis" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="建筑面积"><em>平米</em></div>
                    <div class="nex_ld_typein_box"><input class="nex_ld_typein_cellphone" id="nex_ld_typein_cellphones" placeholder="手机号码"></div>
                </div>
            </div>
            <input type="submit" class="nex_tijiao_buttons" id="nex_plugin_tijiaoa" value="立即获取报价">
            <div class="clear"></div>
        </div>
        
    </div>
    <a class="nex_sJmm-btn-box" onClick="doAct(this);"></a>
</div>
<script type="text/javascript">
var init= jQuery(function(){
jQuery("#nex_plugin_tijiaoa").on("click", function() {
var nex_ld_typein_nameinputs=jQuery("#nex_ld_typein_nameinputs").val(),
nex_ld_typein_cellphones=jQuery("#nex_ld_typein_cellphones").val(),
nex_ld_typein_building=jQuery("#nex_ld_typein_buildings").val(),
nex_ld_typein_mianjis=jQuery("#nex_ld_typein_mianjis").val(),
nex_cityaera=jQuery("#nex_cityaera").val(),
nex_decostyles=jQuery("#nex_decostyles").val(),
nex_huxing=jQuery("#nex_huxing").val(),
nex_zxyusuan=jQuery("#nex_zxyusuan").val(),
myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
if(nex_ld_typein_nameinputs==''){
_showDialog('请输入您的名字');
return false;
}else if(!/^[a-zA-Z\u4e00-\u9fa5]+$/gi.test(nex_ld_typein_nameinputs)){
_showDialog('名字只允许输入中文或英文');
return false;
}
if(nex_ld_typein_cellphones==''){
_showDialog('请输入您的手机号');
return false;
}else if(!myreg.test(nex_ld_typein_cellphones)){
_showDialog('请输入正确的手机号');
return false;
}
if(nex_ld_typein_building==''){
_showDialog('请输入小区名称');
return false;
}else if(!/^[a-zA-Z\u4e00-\u9fa5]+$/gi.test(nex_ld_typein_building)){
_showDialog('小区名称只允许输入中文或英文');
return false;
}
if(nex_ld_typein_mianjis==''){
_showDialog('请输入建筑面积');
return false;
}

jQuery.get('{$_G['siteurl']}plugin.php?id=nex_decos_180401:api', {
 formhash:"{$__FORMHASH}",ac:"add",type:"2",nameinputs:nex_ld_typein_nameinputs,cellphones:nex_ld_typein_cellphones,building:nex_ld_typein_building,mianjis:nex_ld_typein_mianjis,cityaera:nex_cityaera,decostyles:nex_decostyles,huxing:nex_huxing,zxyusuan:nex_zxyusuan
},function (data){
if(data.err){
_showDialog(data.msg);
return false;
}else{
showDialog('{$this->setvar['success']}', 'right', '', '',true,'','','','','',2);
setTimeout(function() {window.location.reload();}, 2000);
}
}, "json");
});
});
function _showDialog(dlog){
showDialog(dlog, 'alert', '', '',true);
}
init();
function doAct(s){
    var t = document.getElementById('nex_sideJmm'),
    c = s.className;
    if(c != null && c.indexOf(' ') > -1){
        s.className = c.replace(' ', '');
        t.className = t.className.replace(' nex_sideJmmClose', '');
    }else{
        s.className = c + ' ';
        t.className = t.className + ' nex_sideJmmClose';
    }
}

</script>

EOF;
?>