<?php

if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}


$nex_attachs = DB::result(DB::query("SELECT attachment FROM ".DB::table('forum_post')." WHERE tid = '$nexmythread[tid]'"));
$nex_mythread_sums = DB::result(DB::query("SELECT message FROM ".DB::table('forum_post')." WHERE tid = '$nexmythread[tid]' AND first = '1' "));
$nex_mythreadsummary_echo = preg_replace ("/\[[a-z][^\]]*\]|\[\/[a-z]+\]/i",'',preg_replace("/\[attach\]\d+\[\/attach\]/i",'',$nex_mythread_sums));
$nex_mythreadfrom = DB::result(DB::query("SELECT name FROM ".DB::table('forum_forum')." WHERE fid = '$nexmythread[fid]'"));
$nex_mythreaddate = DB::result(DB::query("SELECT dateline FROM ".DB::table('forum_thread')." WHERE tid = '$nexmythread[tid]'"));
$nex_attnums = substr($nexmythread[tid], -1); 
$nex_threadlistspic = DB::fetch_all("SELECT * FROM ".DB::table('forum_attachment_'.$nex_attnums.'')." WHERE tid = '$nexmythread[tid]' AND isimage = '1' ORDER BY `aid` ASC LIMIT 6");
?>