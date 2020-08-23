<?php
if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}

$nex_province = DB::result(DB::query("SELECT resideprovince FROM ".DB::table('common_member_profile')." WHERE uid = '$article[uid]'"));
$nex_adds = DB::result(DB::query("SELECT residecity FROM ".DB::table('common_member_profile')." WHERE uid = '$article[uid]'"));
$nex_occu = DB::result(DB::query("SELECT occupation FROM ".DB::table('common_member_profile')." WHERE uid = '$article[uid]'"));
$nex_intros = DB::result(DB::query("SELECT bio FROM ".DB::table('common_member_profile')." WHERE uid = '$article[uid]'"));
$nexusersfollows = DB::result(DB::query("SELECT follower FROM ".DB::table('common_member_count')." WHERE uid = '$article[uid]'"));
$relatedsarts = DB::fetch_all("SELECT * FROM ".DB::table('portal_article_title')." WHERE uid= '$article[uid]' ORDER BY `dateline` DESC LIMIT 5");


?>