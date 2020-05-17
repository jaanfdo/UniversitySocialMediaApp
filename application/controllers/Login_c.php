<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_c extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Login_m', 'm');
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('layout/header2');
		$this->load->view('Login');
		$this->load->view('layout/footer2');
	}

	public function Login()
	{
		/*$this->form_validation->set_rules('txtUserName','username','required');
		$this->form_validation->set_rules('txtPass','pass','required');

		if ($this->form_validation->run()) {*/
			$name = $this->input->post('txtUserName');
			$pass = $this->input->post('txtPass');

		$result = $this->m->login($name, $pass);
		/*if($result){
			$details = $this->m->loginDetails($name);
			if ($details != false) {
				if ($details[0]->userroll == 'Admin') {
					redirect(base_url('Admin_c'));
				}
				else{
					$this->session->set_userdata('LoginDetails',array(
					'user' => $details[0]->username,
					'fname' => $details[0]->fname,
					'lname' => $details[0]->lname,
					'unicode' => $details[0]->unicode,
					'userroll' => $details[0]->userroll,
					));
				}
			}	

			$this->session->set_flashdata('success_msg', 'Login successfully');
			redirect(base_url('Home_c'));
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to Login');
			redirect(base_url('Login_c'));
		}*/

		if($result){
			$this->session->set_flashdata('success_msg', 'Login successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to Login');
		}
		redirect(base_url('Login_c'));
		//}	
	}

/*$this->session->set_userdata('user', $details->username);
					$this->session->set_userdata('fname', $details->fname);
					$this->session->set_userdata('lname', $details->lname);
					$this->session->set_userdata('unicode', $details->unicode);
					$this->session->set_userdata('userroll', $details->userroll);*/

				//$_SESSION['user'] = $name;
				/*$fname = $details->fname;
					$lname = $details->lname;
				$_SESSION['firstname'] = $fname;
				$_SESSION['lastname'] = $lname;*/

	/*public function LoginDetails()
	{
		$name = $this->input->post('txtUser');
		$pass = $this->input->post('txtPass');
		$result = $this->m->LoginDetails($name, $pass);
		//echo json_encode($result);
		if($result){
			$ses = array();
			foreach ($result as $row) {
				$ses = $arrayName = array('user' => $row->user,'fname' => $row->fname,'lname' => $row->lname,'unicode' => $row->unico, );
				$this->session->set_userdata('logged_in', $ses);
				return true;
			}
			return true;
		}
		redirect(base_url('Login_c'));
	}*/

	public function logout(){
        $this->session->unset_userdata('LoginDetails');
        $this->session->sess_destroy();
        redirect('Login_c');
    }

}