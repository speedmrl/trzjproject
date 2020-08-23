<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class deco_class_from{
	function __construct() {
		global $_G;
		$this->setvar = $_G['cache']['plugin']['nex_decos_180401'];
		$this->plugin='nex_decos_180401';
	}
	
	public function make_select($cname='',$seid='',$sou='',$selected='',$all=0){
		$strdata=dhtmlspecialchars($this->setvar[$sou]);
		$oparr=$this->cut_str($strdata);
		$opt=$all?'<option value="0" '.$sele.'>'.lang('plugin/nex_decos_180401', 'l001').'</option>':'';
		foreach($oparr as $k=>$v){
			$sele=$selected==$v?'selected':'';
			$opt.='<option value="'.$v.'" '.$sele.'>'.$v.'</option>';
		}
		include template($this->plugin.':form');
		return $returns;
	}
	
	public function form_output($num=''){
		global $_G;
		$this->setvar['success']=dhtmlspecialchars($this->setvar['success']);
		$offercount=$this->setvar['succoffer']?intval($this->setvar['succoffer']+$this->countby_offer()):$this->countby_offer();
		$formlist=array(
			'nex_plugin_quyu'=>'area',
			'nex_cityaera'=>'area',
			'nex_decostyles'=>'style',
			'nex_huxing'=>'housetype',
			'nex_zxyusuan'=>'budget',
		);
		foreach($formlist as $key=>$val){
			$formarr[$key]=$this->make_select($key,$key,$val);
		}
		include template($this->plugin.':form');
		$return = !$num ? $return : $returna;
		return $return;
	}
	
	public function cut_str($str){
		$strs=explode("/hhf/",str_replace(array("\r\n", "\n", "\r"), '/hhf/',$str));
		return $strs;
	}
	
	public function countby_offer(){
		$allcount = C::t('#nex_decos_180401#nex_decos_log')->count_all('where type=2');
		return $allcount;
	}
}

class deco_class_api{
	function __construct() {
		global $_G;
		$this->setvar = $_G['cache']['plugin']['nex_decos_180401'];
		$this->plugin='nex_decos_180401';
	}
	public function filterget(){
		$postkey=array(
			'type','chenghu','handphone','quyu','mansionname','nameinputs','cellphones','building','mianjis','cityaera','decostyles','huxing','zxyusuan'
		);
		foreach($_GET as $k=>$v){
			if(in_array($k,$postkey)){
				$getarr[$k]=daddslashes(dhtmlspecialchars($this->utfgbk(urldecode($v))));
			}
		}
		return $getarr;
	}
	
	public function adddecoinfo(){
		$data=$this->filterget();
		if($data['type']==1){
			$checkkey=array(
				'chenghu'=>lang('plugin/nex_decos_180401', 'l002'),
				'handphone'=>lang('plugin/nex_decos_180401', 'l003'),
				'mansionname'=>lang('plugin/nex_decos_180401', 'l004'),
				'quyu'=>lang('plugin/nex_decos_180401', 'l005'),
			);
			$this->checkdata($data,$checkkey,'handphone');
			$arr=array(
				'name'=>$data['chenghu'],
				'tel'=>$data['handphone'],
				'area'=>$data['quyu'],
				'mansionname'=>$data['mansionname'],
			);
		}elseif($data['type']==2){
			$checkkey=array(
				'nameinputs'=>lang('plugin/nex_decos_180401', 'l006'),
				'cellphones'=>lang('plugin/nex_decos_180401', 'l007'),
				'building'=>lang('plugin/nex_decos_180401', 'l008'),
				'mianjis'=>lang('plugin/nex_decos_180401', 'l009'),
				'cityaera'=>lang('plugin/nex_decos_180401', 'l010'),
				'decostyles'=>lang('plugin/nex_decos_180401', 'l011'),
				'huxing'=>lang('plugin/nex_decos_180401', 'l012'),
				'zxyusuan'=>lang('plugin/nex_decos_180401', 'l013'),
			);
			$this->checkdata($data,$checkkey,'cellphones');
			$arr=array(
				'name'=>$data['nameinputs'],
				'tel'=>$data['cellphones'],
				'area'=>$data['cityaera'],
				'mansionname'=>$data['building'],
				'decostyles'=>$data['decostyles'],
				'huxing'=>$data['huxing'],
				'zxyusuan'=>$data['zxyusuan'],
				'mianji'=>$data['mianjis'],
			);
		}
		$arr['type']=$data['type'];
		$arr['state']=1;
		$arr['time']=TIMESTAMP;
		$id=C::t('#nex_decos_180401#nex_decos_log')->insert($arr);
		if($id){
			return json_encode(array('err' =>''));
		}
	}
	
	public function _showDialog($err,$dlog){
		$return=json_encode(array('err' =>$err,'msg'=>$this->gbkutf($dlog)));
		if($err){
			exit($return);
		}else{
			return $return;
		}
	}
	
	public function checkdata($data,$checkkey,$phonekey){
		global $_G;
		if(!$_G['uid'] && !$this->setvar['tourists']){
			$this->_showDialog(1,lang('plugin/nex_decos_180401', 'l034'));
		}
		foreach($checkkey as $tk=>$tv){
			if($data[$tk]==''){
				$this->_showDialog(1,$tv);
			}
			if(!$this->checkMobile($data[$phonekey])){
				$this->_showDialog(1,lang('plugin/nex_decos_180401', 'l014'));
			}
		}
	}
	
	public function checkMobile($phonenumber){ 
		if (preg_match("/^1[34578]{1}\d{9}$/",$phonenumber)) { 
        	return true; 
     	}else{ 
			return false;
		} 
	} 
	
	public function utfgbk($data){
		$data=dhtmlspecialchars($data);
		$data1 = diconv($data,'utf-8','gbk');
		$data0 = diconv($data1,'gbk','utf-8');
		if($data0 == $data){$tmpstr = $data1;}else{$tmpstr = $data;}
		if(CHARSET=='gbk'){
			return $tmpstr;
		}else{
			return $this->gbkutf($data);
		}
	}
	
	public function gbkutf($data){
		$data1 = diconv($data,'utf-8','gbk');
		$data0 = diconv($data1,'gbk','utf-8');
		if($data0 == $data){$tmpstr = $data1;}else{$tmpstr = $data;}
		return diconv($tmpstr,'gbk','utf-8');
	}
}