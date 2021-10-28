<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('blogmodel');
		$this->load->library('session');
	}

	public function index()
	{
		$data = array();
		$this->data['blogs'] = $this->blogmodel->get_all_blogs();
		//print_r($this->data['blogs']);
		$this->load->view('blogs/all_blogs',$data);
	}

	public function blogs_list()
	{
		$data = array();	
		
		$this->load->view('blogs/user_blogs',$data);
	}
	public function add_blogs()
	{
		$data = array();
		$this->load->view('blogs/add_blogs',$data);
	}
	
}
