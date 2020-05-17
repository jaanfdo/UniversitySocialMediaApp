<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_m extends CI_Model{
    
	public function showAll(){
		$this->db->order_by('date', 'desc');
		$query = $this->db->get('gallery');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showAllLatest(){
		$this->db->order_by('date', 'desc');
		$this->db->limit(5);
		$query = $this->db->get('gallery');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function searchAll($start_date, $end_date){
        $this->db->where('date >= ',$start_date);
        $this->db->where('date <= ',$end_date);
        $this->db->order_by('date', 'desc');
		$query = $this->db->get('gallery');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function CountAll(){
        $this->db->where('date >= ', date('Y-m-d'));
        $this->db->select('count(id)');
		$query = $this->db->get('gallery');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function getID($id){
		$this->db->where('id', $id);
		$query = $this->db->get('gallery');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function add($field){
		
		$this->db->insert('gallery', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function delete(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('gallery');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}