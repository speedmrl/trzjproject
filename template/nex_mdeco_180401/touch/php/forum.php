<?php

if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}
$nex_authorid = DB::result(DB::query("SELECT authorid FROM ".DB::table('forum_post')." WHERE tid = '$thread[tid]'")); 
$nex_gender = DB::result(DB::query("SELECT gender FROM ".DB::table('common_member_profile')." WHERE uid = '$nex_authorid[uid]'"));
$nex_authoridx = DB::result(DB::query("SELECT authorid FROM ".DB::table('forum_post')." WHERE tid = '$thread[tid]'")); 
$nex_scores = DB::result(DB::query("SELECT extcredits2 FROM ".DB::table('common_member_count')." WHERE uid = '$nex_authoridx[uid]'"));
$nex_tdsconts = DB::result(DB::query("SELECT message FROM ".DB::table('forum_post')." WHERE tid = '$thread[tid]' AND first = '1' ")); 
$summary_echo = preg_replace ("/\[[a-z][^\]]*\]|\[\/[a-z]+\]/i",'',preg_replace("/\[attach\]\d+\[\/attach\]/i",'',$nex_tdsconts));
$nex_getnumbefore = substr($thread[tid], -1);$nextotlepivs = DB::result(DB::query("SELECT count(*) FROM ".DB::table('forum_attachment_'.$nex_getnumbefore.'')." WHERE tid = '$thread[tid]' AND isimage = '1'"));
$nex_bbs_adds = DB::result(DB::query("SELECT residecity FROM ".DB::table('common_member_profile')." WHERE uid = '$nex_authoridx[uid]'"));
$nex_bbs_province = DB::result(DB::query("SELECT resideprovince FROM ".DB::table('common_member_profile')." WHERE uid = '$nex_authoridx[uid]'"));
$nex_kidstatus = DB::result(DB::query("SELECT affectivestatus FROM ".DB::table('common_member_profile')." WHERE uid = '$nex_authoridx[uid]'"));
$nex_scores = DB::result(DB::query("SELECT extcredits2 FROM ".DB::table('common_member_count')." WHERE uid = '$nex_authoridx[uid]'"));
$nex_grids = DB::result(DB::query("SELECT groupid FROM ".DB::table('common_member')." WHERE uid = '$nex_authoridx[uid]'"));
$nex_levels = DB::result(DB::query("SELECT stars FROM ".DB::table('common_usergroup')." WHERE groupid = '$nex_grids[groupid]'"));
$usergroupID = DB::fetch_first("SELECT t1.*, t2.* FROM ".DB::table('common_member')." t1 LEFT JOIN ".DB::table('common_usergroup')." t2 ON t1.groupid=t2.groupid WHERE t1.uid ='$nex_authoridx[uid]'");
$nex_bbs_date = DB::result(DB::query("SELECT dateline FROM ".DB::table('forum_thread')." WHERE tid = '$thread[tid]'"));
           
?>