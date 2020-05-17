<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_c extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Gallery_m', 'm');
	}

	function index(){
		$data['data'] = $this->m->showAll();
		$data['gLatest'] = $this->m->showAllLatest();
		$this->load->view('layout/header');
		$this->load->view('Gallery', $data);
		$this->load->view('layout/footer');
	}

	public function add(){
		/*$config = array(
		'upload_path' => "./assets/images/Events/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' => TRUE,
		'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'max_height' => "768",
		'max_width' => "1024"
		);
$data['txtImage']['file_name']
		$data = array('txtImage' => $this->upload->data());
		if($this->upload->do_upload())
		{*/
		$field = array(
			'name'=>$this->input->post('txtNewsName'),
			'date'=>date('Y-m-d'),
			'time'=>date('H:i:s'),
			'owner'=>$this->input->post('txtOwner'),
			'file'=> $this->input->post('txtImage'),
			);

		//$this->load->library('txtImage', $config);
		$result = $this->m->add($field);
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
		/*}
		else
		{
			$error = array('error' => $this->upload->display_errors());
		}*/
	}

	public function delete(){
		$result = $this->m->delete();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function GetID($id){
		$result = $this->m->getID($id);
		echo json_encode($result);

	}

	/*
	

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