<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');

class baru extends CI_Controller{
	
	
	function login(){
		// $this->load->view('header');
		$this->load->view('v_login');

	}
	public function index(){
	 	$username = $this->input->post('username');
	 	$password = $this->input->post('pass');
		$this->session->set_userdata('username', $username);

		if ($username == "admin" && $password == "123") {
			$data['username'] = $username;
			$data['pass'] = $password;
			$this->load->view('v_data', $data);
		}
		else{
			$this->load->view('v_login');
		}

	 	// $data['username'] = $username;
	 	// $data['pass'] = $password;
	 	
	 	// $this->load->view('v_data', $data);
	 	
	 }
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('baru/login','refresh');
	}
}
 ?>