<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


global $_G;
loadcache('plugin');
if(!empty($_G['cache']['plugin']['nex_decos_180401'])) {
	require_once DISCUZ_ROOT.'./source/plugin/nex_decos_180401/deco_class.php';
	$t=new deco_class_from();
	for($i=0;$i<=1;$i++){
		$form[$i]=$t->form_output($i);
	}
}