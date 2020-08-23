<?php
if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}


$nex_self_intros = DB::result(DB::query("SELECT bio FROM ".DB::table('common_member_profile')." WHERE uid = '$space[uid]'"));
$nex_uc_province = DB::result(DB::query("SELECT resideprovince FROM ".DB::table('common_member_profile')." WHERE uid = '$space[uid]'"));
$nex_uc_adds = DB::result(DB::query("SELECT residecity FROM ".DB::table('common_member_profile')." WHERE uid = '$space[uid]'"));
$nex_uc_occu = DB::result(DB::query("SELECT occupation FROM ".DB::table('common_member_profile')." WHERE uid = '$space[uid]'"));
$nex_user_follows = DB::result(DB::query("SELECT follower FROM ".DB::table('common_member_count')." WHERE uid = '$space[uid]'"));
$nex_user_coins = DB::result(DB::query("SELECT extcredits2 FROM ".DB::table('common_member_count')." WHERE uid = '$space[uid]'"));

?>