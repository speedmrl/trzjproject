<?php

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}


	loadcache('plugin');
	$var = $_G['cache']['plugin']['nex_decos_180401'];
	$type=2;
	require_once DISCUZ_ROOT.'./source/plugin/nex_decos_180401/inc_admincp.php';