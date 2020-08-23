<?php

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
$nex_decos_log= DB::table("nex_decos_log");
$sql = <<<EOF
DROP TABLE IF EXISTS `$nex_decos_log`;
EOF;
runquery($sql);
$finish = true;
?>