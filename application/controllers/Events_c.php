<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_c extends CI_Controller{

	
	function __construct(){
		parent:: __construct();
		$this->load->model('Events_m', 'm');
		//$this->load->library('upload');

	}

	function index(){
		//$user = $this->session->userdata('user');
		//$data['eUser'] = $this->m->showAllUser($user);
		$data['eLatest'] = $this->m->showAllLatest();
		$data['events'] = $this->m->showAll();
		$data['eMost'] = $this->m->showAllTop();
		$this->load->view('layout/header');
		$this->load->view('Events',$data);
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

		$data = array('txtImage' => $this->upload->data());
		if($this->upload->do_upload())
		{
			echo '<img src="'.base_url(). './assets/images/Events/' .$data['file_name'];'">';*/
			$field = array(
			'eventname'=>$this->input->post('txtEventName'),
			'course'=>$this->input->post('txtCourse'),
			'batchno'=>$this->input->post('txtBatchNo'),
			'date'=>$this->input->post('dtpDate'),
			'time'=>$this->input->post('dtpTime'),
			'place'=>$this->input->post('txtPlace'),
			'address'=>$this->input->post('txtAddress'),
			'description'=>$this->input->post('txtDescription'),
			'organizer'=> $this->input->post('txtOrganizer'),
			'photo'=>  $this->input->post('txtImage'),
			'owner'=>$this->input->post('txtOwner'),
			'createddate'=>date('y-M-d H:i:s')
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
				//$data['upload_data']['file_name'];
				//$data['upload_data']['full_path'];
	}

	public function edit($id){
		$result = $this->m->edit($id);
		echo json_encode($result);
	}

	public function update(){
		$id = $this->input->post('txtId');
		$field = array(
			'eventname'=>$this->input->post('txtEventName'),
			'course'=>$this->input->post('txtCourse'),
			'batchno'=>$this->input->post('txtBatchNo'),
			'date'=>$this->input->post('dtpDate'),
			'time'=>$this->input->post('dtpTime'),
			'place'=>$this->input->post('txtPlace'),
			'address'=>$this->input->post('txtAddress'),
			'description'=>$this->input->post('txtDescription'),
			'organizer'=>$this->input->post('txtOrganizer'),
			'photo'=>  $this->input->post('txtImage'),
			'owner'=>$this->input->post('txtOwner'),
			'createddate'=>date('y-M-d H:i:s')
			);

		$result = $this->m->update($field, $id);
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function delete($id){
		/*$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('Events_c'));*/

		$result = $this->m->delete($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}


}