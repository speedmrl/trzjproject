<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
global $_G;
loadcache('plugin');
require_once DISCUZ_ROOT.'./source/plugin/nex_decos_180401/function.php';

if(!($_G['adminid']==1)){
	showmessage(lang('plugin/nex_decos_180401', 'l015'));
	exit;
}
$type=$_GET['type']?intval($_GET['type']):1;
$where = $where = _getwhere($type);
$titlearr=array('id'=>'id','name'=>lang('plugin/nex_decos_180401', 'l016'),'tel'=>lang('plugin/nex_decos_180401', 'l017'),'area'=>lang('plugin/nex_decos_180401', 'l018'),'mansionname'=>lang('plugin/nex_decos_180401', 'l019'));
if($type==2){
	$titlearr['decostyles']=lang('plugin/nex_decos_180401', 'l020');
	$titlearr['huxing']=lang('plugin/nex_decos_180401', 'l021');
	$titlearr['zxyusuan']=lang('plugin/nex_decos_180401', 'l022');
	$titlearr['mianji']=lang('plugin/nex_decos_180401', 'l023');
}
$titlearr['time']=lang('plugin/nex_decos_180401', 'l024');
foreach($titlearr as $k=>$v){
	$tarr[]=gbkutf($v);
}
$query = C::t('#nex_decos_180401#nex_decos_log')->fetch_all_by_where($where);
foreach($query as $val){
	$d = array();
	foreach($titlearr as $tk=>$tv){
		if($tk=='time'){
			$d[]=dgmdate($val['time'], 'Y/m/d H:i:s');
		}else{
			$d[]=gbkutf($val[$tk]);
		}
	}
	$expdata[]=$d;
}

exportExcel($tarr, $expdata, TIMESTAMP, './', true);


