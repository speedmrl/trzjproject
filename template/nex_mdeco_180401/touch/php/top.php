<?php

if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}
$nex_putin_tops= DB::fetch_all("SELECT * FROM ".DB::table('forum_thread')." WHERE fid = '$_G[fid]' AND displayorder > 0 ORDER BY `dateline` DESC");
           
?>