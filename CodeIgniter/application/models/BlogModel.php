<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class BlogModel extends CI_model{

	public function get_all_blogs(){
		$this->db->select('*');
		$this->db->from('all_blogs');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

}