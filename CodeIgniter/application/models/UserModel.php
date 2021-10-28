<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class UserModel extends CI_model{

	public function add_user($user){
		$this->db->insert('blogs_users',$user);
	}

	public function email_exists($email){
		//print_r($email);
		$this->db->select('*');
		$this->db->from('blogs_users');
		$this->db->where('email',$email);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return false;
		}
		else{
			return true;
		}
	}

	public function login_user($user){
		
		$this->db->select('*');
		$this->db->from('blogs_users');
		$this->db->where('email',$user['email']);
		$this->db->where('password',$user['password']);
		//$query = $this->db->get();

		if($query = $this->db->get()){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	public function add_logtime($id){
		
		$data = array('last_login' => time());
		$this->db->where('id',$id);
		$updated_data = $this->db->update('blogs_users',$data);
		return $updated_data;
	
	}
}