<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassSchedule_c extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('ClassSchedule_m', 'm');
	}

	function index(){
		$this->load->view('layout/header');
		$this->load->view('ClassSchedule');
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
		'date'=>$this->input->post('dtpDate'),
		'time'=>$this->input->post('dtpTime'),
		'class_floor'=>$this->input->post('txtClassFloor'),
		'class_no'=>$this->input->post('txtClassNo'),
		'lecturer'=>$this->input->post('txtLecturer'),
		'owner'=>$this->input->post('txtOwner'),
		'createdate'=> date('y-M-d H:i:s')
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
			'date'=>$this->input->post('dtpDate'),
			'time'=>$this->input->post('dtpTime'),
			'class_floor'=>$this->input->post('txtClassFloor'),
			'class_no'=>$this->input->post('txtClassNo'),
			'lecturer'=>$this->input->post('txtLecturer'),
			'owner'=>$this->input->post('txtOwner'),
			'createdate'=> date('y-M-d H:i:s')
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
		redirect(base_url('ClassSchedule_c'));
	}

	public function edit($id){
		$data['edit'] = $this->m->edit($id);
		$this->load->view('layout/header');
		$this->load->view('ClassSchedule', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to update record');
		}
		redirect(base_url('ClassSchedule_c'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('ClassSchedule_c'));
	}

		$this->form_validation->set_rules('txtCourse', 'Course', 'trim|required');
		$this->form_validation->set_rules('txtBatchNo', 'BatchNo', 'trim|required');
		$this->form_validation->set_rules('txtSubjects', 'Subjects', 'trim|required');
		$this->form_validation->set_rules('txtLecturer', 'Lecturer', 'trim|required');
		if ($this->form_validation->run() == true) {
	*/

}