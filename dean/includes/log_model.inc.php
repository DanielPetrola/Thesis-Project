<?php

/*
 made by some guy named Amirul Homenin
*/

class Log_model extends CI_Model
{
	protected $log = 'log';
	
	function __construct(){
		parent::__construct();
	}
// grabs log by id, @param $id - primary key to get record
	function get_log($id){
		$result = $this->db->get_where('log',array('id'=>$id))->row_array();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
	}
// grabs all log
	function get_all_log(){
		$this->db->order_by('id', 'desc');
		$result = $this->db->get('log')->result_array();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
	}
// grabs log limit
	function get_limit_log($limit, $start){
		$this->db->order_by('id', 'desc');
		$this->db->limit($limit, $start);
		$result = $this->db->get('log')->result_array();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
	}
// grabs log row count
	function get_count_log(){
		$result = $this->db->from("log")->count_all_results();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
	}
// adds new log
	function add_log($params){
		$this->db->insert('log',$params);
		$id = $this->db->insert_id();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $id;
	}
// updates log
	function update_log($id,$params){
		$this->db->where('id',$id);
		$status = $this->db->update('log',$params);
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $status;
	}
// deletes log
	function delete_log($id){
		$status = $this->db->delete('log',array('id'=>$id));
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $status;
	}