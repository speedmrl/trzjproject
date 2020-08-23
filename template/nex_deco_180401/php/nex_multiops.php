<?php
if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}


$nex_Mythreads_conts = DB::result(DB::query("SELECT message FROM ".DB::table('forum_post')." WHERE tid = '$thread[tid]'")); $summary_echo = preg_replace ("/\[[a-z][^\]]*\]|\[\/[a-z]+\]/i",'',preg_replace("/\[attach\]\d+\[\/attach\]/i",'',$nex_Mythreads_conts));
$nex_authorid = DB::result(DB::query("SELECT authorid FROM ".DB::table('forum_post')." WHERE tid = '$thread[tid]'")); $nex_gender = DB::result(DB::query("SELECT gender FROM ".DB::table('common_member_profile')." WHERE uid = '$nex_authorid[uid]'"));
$nex_province = DB::result(DB::query("SELECT resideprovince FROM ".DB::table('common_member_profile')." WHERE uid = '$space[uid]'"));
$nex_adds = DB::result(DB::query("SELECT residecity FROM ".DB::table('common_member_profile')." WHERE uid = '$space[uid]'"));
$nex_occu = DB::result(DB::query("SELECT occupation FROM ".DB::table('common_member_profile')." WHERE uid = '$space[uid]'"));

?>