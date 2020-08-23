<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
global $_G;
loadcache('plugin');
require_once DISCUZ_ROOT.'./source/plugin/nex_decos_180401/deco_class.php';
$api=new deco_class_api();
exit($api->adddecoinfo());