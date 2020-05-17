<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_m extends CI_Model{
    
	public function showAll(){
		$this->db->order_by('date', 'asc');
		$query = $this->db->get('news');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showAllMost(){
		$this->db->order_by('date', 'desc');
		$this->db->limit(5);
		$query = $this->db->get('news');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showAllLatest(){
		$this->db->order_by('date', 'asc');
		$this->db->limit(5);
		$query = $this->db->get('news');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function add($field){
		/*$field = array(
			'name'=> $this->input->post('txtName'),
			'news'=> $this->input->post('txtNews'),
			'date'=> date('Y-m-d'),
			'time'=> date('H:i:s'),
			'owner'=> $this->input->post('txtOwner')
			);*/
		$this->db->insert('news', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('news');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function view($id){
		$this->db->where('id', $id);
		$query = $this->db->get('news');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	/*public function editEmployee(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_employees');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function updateEmployee(){
		$id = $this->input->post('txtId');
		$field = array(
		'employee_name'=>$this->input->post('txtEmployeeName'),
		'address'=>$this->input->post('txtAddress'),
		'updated_at'=>date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_employees', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}*/

	
}