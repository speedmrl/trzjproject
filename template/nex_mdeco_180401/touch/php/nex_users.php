<?php
if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}
$nex_intros = DB::result(DB::query("SELECT bio FROM ".DB::table('common_member_profile')." WHERE uid = '$space[uid]'"));
$nex_gender = DB::result(DB::query("SELECT gender FROM ".DB::table('common_member_profile')." WHERE uid = '$_G[uid]'"));
$nex_adds = DB::result(DB::query("SELECT residecity FROM ".DB::table('common_member_profile')." WHERE uid = '$_G[uid]'"));
$nex_occu = DB::result(DB::query("SELECT occupation FROM ".DB::table('common_member_profile')." WHERE uid = '$_G[uid]'"));
$nex_province = DB::result(DB::query("SELECT resideprovince FROM ".DB::table('common_member_profile')." WHERE uid = '$_G[uid]'"));
$nex_decorstatus = DB::result(DB::query("SELECT affectivestatus FROM ".DB::table('common_member_profile')." WHERE uid = '$_G[uid]'"));
$nex_xiaoqu = DB::result(DB::query("SELECT address FROM ".DB::table('common_member_profile')." WHERE uid = '$_G[uid]'"));
?>