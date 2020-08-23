<?php

if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}


$nex_attnums = substr($thread[tid], -1); 
$nex_threadlistspic = DB::fetch_all("SELECT * FROM ".DB::table('forum_attachment_'.$nex_attnums.'')." WHERE tid = '$thread[tid]' AND isimage = '1' ORDER BY `aid` ASC LIMIT 6");
$attrss = DB::result(DB::query("SELECT count(*) FROM ".DB::table('forum_attachment_'.$nex_attnums.'')." WHERE tid = '$nex_threadsinpivs[tid]' AND isimage = '1'"));
?>