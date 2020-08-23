<?php
if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}

$nextupian = DB::result(DB::query("SELECT attachment FROM ".DB::table('forum_threadimage')." WHERE tid = '$thread[tid]' "));
$biaoid_7 = substr($thread[tid], -1); 
$nex_threadlistspic = DB::fetch_all("SELECT * FROM ".DB::table('forum_attachment_'.$biaoid_7.'')." WHERE tid = '$thread[tid]' AND isimage = '1' ORDER BY `aid` ASC LIMIT 6");
?>