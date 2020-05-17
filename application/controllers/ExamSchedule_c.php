<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExamSchedule_c extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('ExamSchedule_m', 'm');
	}

	function index(){
		//$data['data'] = $this->m->showAll();
		$this->load->view('layout/header');
		$this->load->view('ExamSchedule');
		$this->load->view('layout/footer');
	}

	public function showAll(){
		$result = $this->m->showAll();
		echo json_encode($result);
	}

	public function search(){
		$search = $this->input->get('search');
		$filter = $this->input->get('filter');
		$result = $this->m->search($search,$filter);
		echo json_encode($result);

	}

	public function previousData(){
		$from = $this->input->get('from');
		$to = $this->input->get('to');
		$result = $this->m->showprevious($from, $to);
		echo json_encode($result);

	}

	public function add(){
		$field = array(
			'course'=>$this->input->post('txtCourse'),
			'batchno'=>$this->input->post('txtBatchNo'),
			'subjects'=>$this->input->post('txtSubject'),
			'examtype'=>$this->input->post('txtExamType'),
			'date'=>$this->input->post('dtpDate'),
			'time'=>$this->input->post('dtpTime'),
			'class_floor'=>$this->input->post('txtClassFloor'),
			'class_no'=>$this->input->post('txtClassNo'),
			'owner'=>$this->input->post('txtOwner'),
			'createdate'=>date('y-M-d')
			);
		$result = $this->m->add($field);
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function edit(){
		$result = $this->m->edit();
		echo json_encode($result);

	}

	public function update(){
		$id = $this->input->post('txtId');
		$field = array(
			'course'=>$this->input->post('txtCourse'),
			'batchno'=>$this->input->post('txtBatchNo'),
			'subjects'=>$this->input->post('txtSubject'),
			'examtype'=>$this->input->post('txtExamType'),
			'date'=>$this->input->post('dtpDate'),
			'time'=>$this->input->post('dtpTime'),
			'class_floor'=>$this->input->post('txtClassFloor'),
			'class_no'=>$this->input->post('txtClassNo'),
			'owner'=>$this->input->post('txtOwner'),
			'createdate'=>date('y-M-d')
			);

		$result = $this->m->update($field, $id);
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function delete(){
		$result = $this->m->delete();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	/*public function add(){
		$result = $this->m->add();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to add record');
		}
		redirect(base_url('ExamSchedule_c'));
	}

	public function edit($id){
		$data['edit'] = $this->m->edit($id);
		$this->load->view('layout/header');
		$this->load->view('ExamSchedule', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to update record');
		}
		redirect(base_url('ExamSchedule_c'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('ExamSchedule_c'));
	}*/

}