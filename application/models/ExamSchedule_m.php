<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExamSchedule_m extends CI_Model{
    
	public function showAll(){
		$this->db->order_by('createdate', 'desc');
		$this->db->where('date >=', date('Y-m-d'));
		$query = $this->db->get('examschedule');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function search($search, $filter){
		$this->db->order_by('createdate', 'desc');
		$this->db->like($search, $filter);
		$query = $this->db->get('examschedule');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showprevious($fromDate, $toDate){
		$this->db->order_by('createdate', 'desc');
		$this->db->where('date >=', $fromDate);
		$this->db->where('date <=', $toDate);
		$query = $this->db->get('examschedule');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function add($field){

		$this->db->insert('examschedule', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function edit(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('examschedule');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update($field, $id){
		$this->db->where('id', $id);
		$this->db->update('examschedule', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function delete(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('examschedule');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}