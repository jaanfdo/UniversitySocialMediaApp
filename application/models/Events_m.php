<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_m extends CI_Model{
    
	public function showAll(){
		$this->db->order_by('date', 'desc');
		$query = $this->db->get('event');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showAllMost(){
		$this->db->order_by('date', 'desc');
		$this->db->limit(5);
		$query = $this->db->get('event');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showAllLatest(){
		$this->db->order_by('date', 'asc');
		$this->db->limit(5);
		$query = $this->db->get('event');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showAllTop(){
		$this->db->order_by('date', 'asc');
		$this->db->limit(2);
		$query = $this->db->get('event');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showAllUser($user){
		$this->dv->where('username', $user);
		$query = $this->db->get('event');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function add($field){
		$this->db->insert('event', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function edit($id){
		$this->db->where('id', $id);
		$query = $this->db->get('event');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update($field, $id){
		$this->db->where('id', $id);
		$this->db->update('event', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('event');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}