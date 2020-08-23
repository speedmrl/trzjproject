<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class table_nex_decos_log extends discuz_table
{
	public function __construct() {
		$this->_table = 'nex_decos_log';
		$this->_pk = 'id';
		parent::__construct();
	}
	
	
	public function count_all($where='') {
		return DB::result_first("SELECT count(*) FROM %t %i", array($this->_table,$where));
	}
	
	public function fetch_all_by_limit($startlimit,$ppp,$where='') {
		return DB::fetch_all("SELECT * FROM %t %i order by id desc LIMIT %d,%d", array($this->_table,$where,$startlimit,$ppp));
	}
	
	
	public function fetch_all_by_where($where='') {
		return DB::fetch_all("SELECT * FROM %t %i order by id desc", array($this->_table,$where));
	}
	
	
	
	public function fetch_by_uid($uid) {
		return DB::fetch_all("SELECT * FROM %t WHERE uid=%d order by id DESC", array($this->_table,$uid));
	}
	
	
	public function count_by_all($uid=0,$state=0) {
		$where=$uid ? ' AND uid=%d' : '';
		$where.=$state ? ' AND state=1' : '';
		return DB::result_first("SELECT count(1) FROM %t WHERE id>0 ".$where, array($this->_table,$uid));
	}
	
	public function sum_by_uid($uid) {
		return DB::result_first("SELECT sum(money) FROM %t WHERE uid=%d AND state=1", array($this->_table,$uid));
	}
	
	public function fetchfirst_by_id($orderid) {
		return DB::fetch_first("SELECT * FROM %t WHERE id=%d", array($this->_table,$orderid));
	}
	
	
	public function fetch_all_by_all($uid=0,$state=0,$startlimit,$ppp) {
		$where=$uid ? ' AND uid='.intval($uid) : '';
		$where.=$state ? ' AND state=1' : '';
		return DB::fetch_all("SELECT * FROM %t WHERE id>0 ".$where." order by time desc LIMIT %d,%d", array($this->_table,$startlimit,$ppp));
	}
	
	
}

?>