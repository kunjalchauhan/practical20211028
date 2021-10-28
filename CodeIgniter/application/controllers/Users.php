<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->library('session');
	}

	public function index(){
		$this->load->view('register');
	}

	public function register(){
		$post_data = $this->input->post();

		$check_email_exist = $this->usermodel->email_exists($post_data['email']);

		if($check_email_exist){
			$this->usermodel->add_user($post_data);
			$this->session->set_flashdata('sucess_msg','Registered Sucessfully');
			redirect('/users/index');
		}
		else{
			$this->session->set_flashdata('error_msg','Try again later');
			redirect('/users/index');
		}
	}

	public function login(){
		$post_data = $this->input->post();

		$user_found = $this->usermodel->login_user($post_data);

		if($user_found){
			
			$add_login = $this->usermodel->add_logtime($user_found[0]['id']);
			if($add_login == 1){
				redirect('/blogs/blogs_list');
			}
			
		}
		else{
			redirect('/users/index');	
		}
	}
}