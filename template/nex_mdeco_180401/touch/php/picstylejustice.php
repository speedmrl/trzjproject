<?php
if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}

$picstyle = DB::result(DB::query("SELECT picstyle FROM ".DB::table('forum_forumfield')." WHERE fid = '$_G[fid]'"));
?>