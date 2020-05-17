<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Events_m', 'e');
		$this->load->model('News_m', 'n');
		$this->load->model('Gallery_m', 'g');
	}

	function index(){

	/*if ($this->session->userdata('logged_in')) {
		$session_data = $this->session->userdata('logged_in');
		$data['user'] = $session_data['user'];
		$data['fname'] = $session_data['fname'];
		$data['lname'] = $session_data['lname'];
		$data['unicode'] = $session_data['unicode'];*/

		$data['gCount'] = $this->g->CountAll();
		$data['eMost'] = $this->e->showAllMost();
		$data['eLatest'] = $this->e->showAllLatest();
		$data['gLatest'] = $this->g->showAllLatest();
		$data['all'] = $this->n->showAll();
		$data['nMost'] = $this->n->showAllMost();
		$data['nLatest'] = $this->n->showAllLatest();
		$this->load->view('layout/header');
		$this->load->view('Home',$data);
		$this->load->view('layout/footer');

	//}else{
	//	redirect('login_c','refresh');
	//}

		
	}

	public function Schedule(){
		$this->load->view('layout/header');
		$this->load->view('StudentClassnExamSchedules');
		$this->load->view('layout/footer');
	}

	/*public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to add record');
		}
		redirect(base_url('blog/index'));
	}

	public function edit($id){
		$data['blog'] = $this->m->getBlogById($id);
		$this->load->view('layout/header');
		$this->load->view('blog/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to update record');
		}
		redirect(base_url('blog/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('blog/index'));
	}*/

}