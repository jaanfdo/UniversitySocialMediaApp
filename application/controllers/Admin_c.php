<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_c extends CI_Controller{

	
	function __construct(){
		parent:: __construct();
		$this->load->model('Admin_m', 'm');
	}

	function index(){
		/*$data['uni'] = $this->m->showUni();
		$data['branch'] = $this->m->showBranch();
		$data['course'] = $this->m->showCourse();
		$data['batch'] = $this->m->showBatch();
		$data['subject'] = $this->m->showSubjects();*/
		$this->load->view('layout/header');
		$this->load->view('AdminPanel');
		$this->load->view('layout/footer');
	}

	public function showUni(){
		$result = $this->m->showUni();
		echo json_encode($result);
	}
	public function showBranch(){
		$result = $this->m->showBranch();
		echo json_encode($result);
	}
	public function showCourse(){
		$result = $this->m->showCourse();
		echo json_encode($result);
	}
	public function showBatch(){
		$result = $this->m->showBatch();
		echo json_encode($result);
	}
	public function showSubjects(){
		$result = $this->m->showSubjects();
		echo json_encode($result);
	}

	public function addUni(){
		$result = $this->m->addUni();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function addBranch(){
		$result = $this->m->addBranch();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function addCourse(){
		$result = $this->m->addCourse();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function addBatch(){
		$result = $this->m->addBatch();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function addSubject(){
		$result = $this->m->addSubject();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function edituni($id){
		$result = $this->m->edituni($id);
		echo json_encode($result);
	}
	public function editbranch($id){
		$result = $this->m->editbranch($id);
		echo json_encode($result);
	}
	public function editcourse($id){
		$result = $this->m->editcourse($id);
		echo json_encode($result);
	}
	public function editbatch($id){
		$result = $this->m->editbatch($id);
		echo json_encode($result);
	}
	public function editsubject($id){
		$result = $this->m->editsubject($id);
		echo json_encode($result);
	}

	public function viewCourse(){
		$search=  $this->input->post('search');
		$query = $this->m->viewcourse($search);
		echo json_encode ($query);
	}

	public function viewSubject(){
		$search=  $this->input->post('search');
		$query = $this->m->viewsubject($search);
		echo json_encode ($query);
	}

	public function updateuni(){
		$result = $this->m->updateuni();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function updatebranch(){
		$result = $this->m->updatebranch();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function updatecourse(){
		$result = $this->m->updatecourse();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function updatebatch(){
		$result = $this->m->updatebatch();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function updatesubject(){
		$result = $this->m->updatesubject();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteuni($id){
		$result = $this->m->deleteuni($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function deletebranch($id){
		$result = $this->m->deletebranch($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function deletecourse($id){
		$result = $this->m->deletecourse($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function deletebatch($id){
		$result = $this->m->deletebatch($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function deletesubject($id){
		$result = $this->m->deletesubject($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}


}