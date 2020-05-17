<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp_c extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('SignUp_m', 'm');
	}

	function index(){
		$this->load->view('layout/header2');
		$this->load->view('Registration');
		$this->load->view('layout/footer2');
	}

	public function submit(){
		$field = array(
			'fname'=>$this->input->post('txtFName'),
			'lname'=>$this->input->post('txtLName'),
			'email'=>$this->input->post('txtEmail'),
			'university'=>$this->input->post('txtUniversity'),
			'unicode'=>$this->input->post('txtUniCode'),
			'username'=>$this->input->post('txtUName'),
			'password'=>$this->input->post('txtPassword'),
			'confirmpassword'=>$this->input->post('txtConfirmPassword'),
			'userroll'=> 'Student'
			);
		$result = $this->m->addUsers($field);
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}