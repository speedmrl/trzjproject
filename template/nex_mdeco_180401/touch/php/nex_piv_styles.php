<?php

if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}


$nex_attnums = substr($nex_threadsinpivs[tid], -1);$attrss = DB::result(DB::query("SELECT count(*) FROM ".DB::table('forum_attachment_'.$nex_attnums.'')." WHERE tid = '$nex_threadsinpivs[tid]' AND isimage = '1'"));		

?>