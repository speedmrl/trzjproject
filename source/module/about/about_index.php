<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: portal_index.php 31313 2012-08-10 03:51:03Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$perpage = 5;
$curpage = empty ( $_GET['page'] ) ? 1 : intval ( $_GET['page'] );
$start = ($curpage-1)*$perpage;
$askcount = DB::result(DB::query("SELECT COUNT(*) FROM ".DB::table('forum_thread')." WHERE tid = '[tid]' AND authorid > 1"));
//$readlist
$readlist = array();
if ($askcount) {
        $query = DB::query("SELECT * FROM ".DB::table('forum_thread')." WHERE tid = '[tid]' AND displayorder > -1 ORDER BY tid DESC LIMIT $start,$perpage");
        while ($value = DB::fetch($query)) {
                $readlist[] = $value;
        }
}
$multi = multi($askcount, $perpage, $curpage, "portal.php");



list($navtitle, $metadescription, $metakeywords) = get_seosetting('portal');
if(!$navtitle) {
	$navtitle = $_G['setting']['navs'][1]['navname'];
	$nobbname = false;
} else {
	$nobbname = true;
}
if(!$metakeywords) {
	$metakeywords = $_G['setting']['navs'][1]['navname'];
}
if(!$metadescription) {
	$metadescription = $_G['setting']['navs'][1]['navname'];
}

if(isset($_G['makehtml'])){
	helper_makehtml::portal_index();
}

include_once template('diy:about/index');
?>