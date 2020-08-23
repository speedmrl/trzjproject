<?php

if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}

$nex_fidnum = DB::result(DB::query("SELECT fid FROM ".DB::table('forum_thread')." WHERE tid = '$_G[tid]'"));
$nex_bbname = DB::result(DB::query("SELECT name FROM ".DB::table('forum_forum')." WHERE fid = '$nex_fidnum'"));

?>