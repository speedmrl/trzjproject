<?php
if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}

$nexformid_7 = substr($thread[tid], -1); 
$nex_formatpic = DB::fetch_all("SELECT * FROM ".DB::table('forum_attachment_'.$nexformid_7.'')." WHERE tid = '$thread[tid]' AND isimage = '1' ORDER BY `aid` ASC LIMIT 1");
$nex_attachs = DB::result(DB::query("SELECT attachment FROM ".DB::table('forum_post')." WHERE tid = '$thread[tid]'"));
$nex_authorpick = DB::result(DB::query("SELECT authorid FROM ".DB::table('forum_thread')." WHERE tid = '$thread[tid]'")); $nex_provincepick = DB::result(DB::query("SELECT resideprovince FROM ".DB::table('common_member_profile')." WHERE uid = '$nex_authorpick'")); $nex_forum_showadd = DB::result(DB::query("SELECT residecity FROM ".DB::table('common_member_profile')." WHERE uid = '$nex_authorpick'")); $nex_forum_kidstatus = DB::result(DB::query("SELECT affectivestatus FROM ".DB::table('common_member_profile')." WHERE uid = '$nex_authorpick'"));
?>