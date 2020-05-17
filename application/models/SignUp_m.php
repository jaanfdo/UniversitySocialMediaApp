<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp_m extends CI_Model{
    
	public function addUsers($field){
		$this->db->insert('signup', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}