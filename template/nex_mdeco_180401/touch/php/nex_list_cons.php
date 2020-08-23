<?php

if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}


$nex_artical_attchcover = DB::result(DB::query("SELECT pic FROM ".DB::table('portal_article_title')." WHERE aid = '$article[aid]'"));
$nex_artical_attchs = DB::result(DB::query("SELECT attachment FROM ".DB::table('portal_attachment')." WHERE aid = '$article[aid]'"));
$nex_artical_txtcounts = DB::result(DB::query("SELECT content FROM ".DB::table('portal_article_content')." WHERE aid = '$article[aid]'"));
$nex_artical_countnums = preg_replace ("/\[[a-z][^\]]*\]|\[\/[a-z]+\]/i",'',preg_replace("/\[attach\]\d+\[\/attach\]/i",'',$nex_artical_txtcounts));
$nex_articalzishu = mb_strlen($nex_artical_countnums,'utf-8') / 5;
$nex_artical_clicks = DB::result(DB::query("SELECT click1+click2+click3+click4+click5+click6+click7+click8 FROM ".DB::table('portal_article_title')." WHERE aid = '$article[aid]'"));

?>