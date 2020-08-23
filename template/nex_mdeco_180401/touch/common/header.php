<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="{if $_G['setting']['mobile'][mobilecachetime] > 0}{$_G['setting']['mobile'][mobilecachetime]}{else}no-cache{/if}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="{if !empty($metakeywords)}{echo dhtmlspecialchars($metakeywords)}{/if}" />
<meta name="description" content="{if !empty($metadescription)}{echo dhtmlspecialchars($metadescription)} {/if},$_G['setting']['bbname']" />
<title><!--{if !empty($navtitle)}-->$navtitle - <!--{/if}--><!--{if empty($nobbname)}--> $_G['setting']['bbname'] - <!--{/if}--> {lang waptitle} - Powered by Discuz!</title>
<link rel="stylesheet" href="{STATICURL}image/mobile/style.css" type="text/css" media="all">
<script src="{STATICURL}js/mobile/jquery.min.js?{VERHASH}"></script>
<script language="javascript" type="text/javascript">
	function killErrors() {
		return true;
	}
	window.onerror = killErrors;
</script>
<script type="text/javascript">var STYLEID = '{STYLEID}', STATICURL = '{STATICURL}', IMGDIR = '{IMGDIR}', VERHASH = '{VERHASH}', charset = '{CHARSET}', discuz_uid = '$_G[uid]', cookiepre = '{$_G[config][cookie][cookiepre]}', cookiedomain = '{$_G[config][cookie][cookiedomain]}', cookiepath = '{$_G[config][cookie][cookiepath]}', showusercard = '{$_G[setting][showusercard]}', attackevasive = '{$_G[config][security][attackevasive]}', disallowfloat = '{$_G[setting][disallowfloat]}', creditnotice = '<!--{if $_G['setting']['creditnotice']}-->$_G['setting']['creditnames']<!--{/if}-->', defaultstyle = '$_G[style][defaultextstyle]', REPORTURL = '$_G[currenturl_encode]', SITEURL = '$_G[siteurl]', JSPATH = '$_G[setting][jspath]';</script>

<script src="{STATICURL}js/mobile/common.js?{VERHASH}" charset="{CHARSET}"></script>
<script src="template/nex_mdeco_180401/neoconex/js/jquery.SuperSlide.2.1.1.js"></script> 
<script src="template/nex_mdeco_180401/neoconex/js/TouchSlide.1.1.js"></script> 
<link rel="stylesheet" href="template/nex_mdeco_180401/neoconex/style.css" type="text/css">
<script src="template/nex_mdeco_180401/neoconex/js/nexinorder.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		$('.nexwaterfall').nex_inordered({ item: '.nexwateritems' });
	});
</script>
<script src="template/nex_mdeco_180401/neoconex/js/nexactions.min.js"></script>
 <link rel="stylesheet" type="text/css" href="template/nex_mdeco_180401/neoconex/animate.min.css">
 <script>
 var wow = new WOW({boxClass: 'nexactions',});wow.init();
 </script>
 <script src="template/nex_mdeco_180401/neoconex/js/jquery.pagnation.js"></script>
</head>
<body class="nex_bg_cl">
<!--{hook/global_header_mobile}-->
<div id="append_parent"></div><div id="ajaxwaitid"></div>

<link rel="stylesheet" type="text/css" href="template/nex_mdeco_180401/neoconex/component.css" />

<script src="template/nex_mdeco_180401/neoconex/js/main.js"></script>





