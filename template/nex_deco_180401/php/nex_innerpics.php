<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
$thread_id = substr($thread[tid], -1); $nex_localpic = DB::fetch_all("SELECT * FROM ".DB::table('forum_attachment_'.$thread_id.'')." WHERE tid = '$thread[tid]' AND isimage = '1' ORDER BY `aid` ASC LIMIT 5");

?>