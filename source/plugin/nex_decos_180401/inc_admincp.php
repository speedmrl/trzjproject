<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

	if($type==1){
		$titlearr=array('id',lang('plugin/nex_decos_180401', 'l016'),lang('plugin/nex_decos_180401', 'l017'), lang('plugin/nex_decos_180401', 'l018'),lang('plugin/nex_decos_180401', 'l019'),lang('plugin/nex_decos_180401', 'l024'));
		$pmod='admin';
		$modname=lang('plugin/nex_decos_180401', 'l025');
	}elseif($type==2){
		$titlearr=array('id',lang('plugin/nex_decos_180401', 'l016'),lang('plugin/nex_decos_180401', 'l017'), lang('plugin/nex_decos_180401', 'l018'),lang('plugin/nex_decos_180401', 'l019'),lang('plugin/nex_decos_180401', 'l020'),lang('plugin/nex_decos_180401', 'l021'),lang('plugin/nex_decos_180401', 'l022'),lang('plugin/nex_decos_180401', 'l023'),lang('plugin/nex_decos_180401', 'l024'));
		$pmod='admin_offer';
		$modname=lang('plugin/nex_decos_180401', 'l026');
	}
	require_once DISCUZ_ROOT.'./source/plugin/nex_decos_180401/function.php';
	require_once DISCUZ_ROOT.'./source/plugin/nex_decos_180401/deco_class.php';
	$api=new deco_class_from();
	if (submitcheck("forumset")) {
		if(is_array($_GET['delete'])) {
				C::t('#nex_decos_180401#nex_decos_log')->delete($_GET['delete']);
		}
		cpmsg(lang('plugin/nex_decos_180401', 'l027'), 'action=plugins&operation=config&identifier=nex_decos_180401&pmod='.$pmod, 'succeed');
	}
	if (submitcheck("export")) {
		dheader('location: plugin.php?id=nex_decos_180401:export&type='.$type.'&area='.durlencode($_GET['area']).'&mintime='.intval(strtotime($_GET['mintime'])).'&maxtime='.intval(strtotime($_GET['maxtime'])));
	}
	echo '<script type="text/javascript" src="static/js/calendar.js"></script>';
	showtableheader(lang('plugin/nex_decos_180401', 'l028'));
	showformheader('plugins&operation=config&do='.$pluginid.'&pmod=nex_decos_180401&pmod='.$pmod, 'testhd');
	$opt=$api->make_select();
	showtablerow('', array('width="60"', 'width="120"', 'width="60"'),
		array(
			lang('plugin/nex_decos_180401', 'l029'),
			$api->make_select('area','area','area',$_GET['area'],1),
			lang('plugin/nex_decos_180401', 'l024'),
			"<input  type=\"text\" name=\"mintime\" value=\"".$_GET['mintime']."\" onclick=\"showcalendar(event, this, false)\" /> - 
			<input  type=\"text\" name=\"maxtime\" value=\"".$_GET['maxtime']."\" onclick=\"showcalendar(event, this, false)\"/>"
		)
    );
	showsubmit('searchsubmit',lang('plugin/nex_decos_180401', 'l030'),'','<input type="submit" class="btn" id="submit_searchsubmit" name="export" style=" margin-right:10px;margin-left:10px;" value="'.lang('plugin/nex_decos_180401', 'l031').'"> '.lang('plugin/nex_decos_180401', 'l032')); 
	showformfooter();
	showtablefooter();
	$where = _getwhere($type);
    showformheader("plugins&operation=config&do=" . $plugin["pluginid"] . "&identifier=" . $plugin["identifier"] . "&pmod=admin");
	showtableheader($modname.lang('plugin/nex_decos_180401', 'l033'));
    showsubtitle($titlearr);
	
	$ppp=30;
	$tmpurl='admin.php?action=plugins&operation=config&identifier=nex_decos_180401&pmod='.$pmod;
	$page = max(1, intval($_GET['page']));
	$startlimit = ($page - 1) * $ppp;
	$allcount = C::t('#nex_decos_180401#nex_decos_log')->count_all($where);
	if($allcount){
		$query = C::t('#nex_decos_180401#nex_decos_log')->fetch_all_by_limit($startlimit,$ppp,$where);
		foreach($query as $val){
			$table = array();
			if($type==1){
				$table[0] = '<input type="checkbox" class="checkbox" name="delete[]" value="'.$val['id'].'" />'.$val['id'];
				$table[1] = $val['name'];
				$table[2] = $val['tel'];
				$table[3] = $val['area'];
				$table[4] = $val['mansionname'];
				$table[5] = dgmdate($val['time'], 'Y/m/d H:i:s');
			}elseif($type==2){
				$table[0] = '<input type="checkbox" class="checkbox" name="delete[]" value="'.$val['id'].'" />'.$val['id'];
				$table[1] = $val['name'];
				$table[2] = $val['tel'];
				$table[3] = $val['area'];
				$table[4] = $val['mansionname'];
				$table[5] = $val['decostyles'];
				$table[6] = $val['huxing'];
				$table[7] = $val['zxyusuan'];
				$table[8] = $val['mianji'];
				$table[9] = dgmdate($val['time'], 'Y/m/d H:i:s');
			}
			showtablerow('',array('class="td32"'), $table);
		}
	}
	$multipage='';
	$multipage = multi($allcount, $ppp, $page, $_G['siteurl'].$tmpurl);
	if($multipage)echo '<tr class="hover"><td colspan="9">'.$multipage.'</td></tr>';
	showsubmit('forumset', 'submit', 'del');
    showtablefooter();
    showformfooter();

