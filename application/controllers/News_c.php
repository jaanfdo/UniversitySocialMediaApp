<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_c extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('News_m', 'm');
	}

	function index(){
		//$data['data'] = $this->m->showAll();
		//$data['dataMost'] = $this->m->showAllMost();
		//$data['dataLatest'] = $this->m->showAllLatest();
		$this->load->view('layout/header');
		$this->load->view('News');
		$this->load->view('layout/footer');
	}

	public function add(){
		$field = array(
			'name'=> $this->input->post('txtNewsName'),
			'news'=> $this->input->post('txtNews'),
			'date'=> date('Y-m-d'),
			'time'=> date('H:i:s'),
			'owner'=> $this->input->post('txtOwner')
			);

		$result = $this->m->add($field);
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function delete($id){
		$result = $this->m->delete($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function view($id){
		//$data['blog'] = $this->m->getBlogById($id);
		$data['view']  = $this->m->view($id);
		echo json_encode($data);
	}

	/*
	public function edit(){
		$result = $this->m->edit();
		echo json_encode($result);
	}

	public function update(){
		$result = $this->m->update();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to add record');
		}
		redirect(base_url('News_c'));
	}

	public function edit($id){
		$data['editid'] = $this->m->edit($id);
		$this->load->view('layout/header');
		$this->load->view('News', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to update record');
		}
		redirect(base_url('News_c'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('News_c'));
	}*/

}