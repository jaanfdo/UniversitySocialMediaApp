<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model{
    
	public function showAllEvents(){
		$this->db->order_by('createddate', 'desc');
		$this->db->limit(5);
		$query = $this->db->get('event');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showAllPhotos(){
		$this->db->order_by('date', 'desc');
		$this->db->limit(5);
		$query = $this->db->get('gallery');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

}