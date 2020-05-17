<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model{
    


	public function login($name, $pass){

		$this->db->where('username', $name);
		$this->db->where('password',$pass);
		$query = $this->db->get('signup');
		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}

	}

	public function loginDetails($name){

		$this->db->where('username', $name);
		$query = $this->db->get('signup');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	


}