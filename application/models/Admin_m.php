<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model{
    

    //show function
	public function showUni(){
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('university');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showBranch(){
		$this->db->order_by('ub.id', 'asc');
		$this->db->select('ub.id, u.university, ub.branch, ub.branchcode');
		$this->db->from('universitybranch AS ub');
		$this->db->join('university AS u', 'ub.uniid = u.id', 'inner');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showCourse(){
		$this->db->order_by('c.id', 'asc');
		$this->db->select('c.id, u.university, c.coursecode, c.course, c.courseprx');
		$this->db->from('courses AS c');// I use aliasing make joins easier
		$this->db->join('university AS u', 'c.uniid = u.id', 'INNER');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showBatch(){
		$this->db->order_by('b.id', 'asc');
		$this->db->select('b.id, u.university, c.course, b.batchno, b.startsemester');
		$this->db->from('batch AS b');// I use aliasing make joins easier
		$this->db->join('university AS u', 'b.uniid = u.id', 'Left Outer');
		$this->db->join('courses AS c', 'b.courseid = c.id', 'Left Outer');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showSubjects(){
		$this->db->order_by('s.id', 'asc');
		$this->db->select('s.id, u.university, c.course, s.subjectscode, s.subjects, s.subjectprx');
		$this->db->from('subjects AS s');// I use aliasing make joins easier
		$this->db->join('university AS u', 's.uniid = u.id', 'INNER');
		$this->db->join('courses AS c', 's.courseid = c.id', 'INNER');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	//add functions
	public function addUni(){
		$field = array(
			'university'=>$this->input->post('txtUni'),
			'unicode'=>$this->input->post('txtUniCode')
			);

		$this->db->insert('university', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function addBranch(){
		$field = array(
			'uniid'=>$this->input->post('txtUni'),
			'branch'=>$this->input->post('txtBranch'),
			'branchcode'=>$this->input->post('txtBranchCode')
			);
		$this->db->insert('universitybranch', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function addCourse(){
		$field = array(
			'uniid'=>$this->input->post('txtUni'),
			'coursecode'=>$this->input->post('txtCourseCode'),
			'course'=> $this->input->post('txtCourse'),
			'courseprx'=>$this->input->post('txtCoursePrx')
			);
		$this->db->insert('courses', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function addBatch(){
		$field = array(
			'uniid'=>$this->input->post('txtUni'),
			'courseid'=>$this->input->post('txtCourseID'),
			'batchno'=> $this->input->post('txtBatchNo'),
			'startsemester'=>$this->input->post('dtpStartDate')
			);
		$this->db->insert('batch', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function addSubject(){
		$field = array(
			'uniid'=>$this->input->post('txtUni'),
			'courseid'=>$this->input->post('txtCourseID'),
			'subjectscode'=> $this->input->post('txtSubjectCode'),
			'subjects'=> $this->input->post('txtSubject'),
			'subjectprx'=>$this->input->post('txtSubjectPrx')
			);
		$this->db->insert('subjects', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	

	//delete functions
	public function deleteuni($id){
		$this->db->where('id', $id);
		$this->db->delete('university');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deletebranch($id){
		$this->db->where('id', $id);
		$this->db->delete('universitybranch');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deletecourse($id){
		$this->db->where('id', $id);
		$this->db->delete('courses');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deletebatch($id){
		$this->db->where('id', $id);
		$this->db->delete('batch');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deletesubject($id){
		$this->db->where('id', $id);
		$this->db->delete('subjects');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	//view items
	public function viewuni($name){
		$this->db->like('university', $name);
		$query = $this->db->get('university');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function viewbranch($name){
		$this->db->like('branch', $name);
		$query = $this->db->get('universitybranch');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function viewcourse($name){
		$this->db->like('course', $name);
		$query = $this->db->get('courses');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function viewsubject($name){
		$this->db->like('subjects', $name);
		$query = $this->db->get('subjects');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	//edit function
	public function edituni(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('university');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function editbranch(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('universitybranch');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function editcourse(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('courses');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function editbatch(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('batch');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function editsubject(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('subjects');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	//update function
	public function updateuni(){
		$id = $this->input->post('txtId');
		$field = array(
		'university'=>$this->input->post('txtUniversity'),
			'unicode'=>$this->input->post('txtUniCode')
		);
		$this->db->where('id', $id);
		$this->db->update('university', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function updatebranch(){
		$id = $this->input->post('txtId');
		$field = array(
		'uniid'=>$this->input->post('txtUniversity'),
			'branch'=>$this->input->post('txtBranch'),
			'branchcode'=>$this->input->post('txtBranchCode')
		);
		$this->db->where('id', $id);
		$this->db->update('universitybranch', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function updatecourse(){
		$id = $this->input->post('txtId');
		$field = array(
		'uniid'=>$this->input->post('txtUniversity'),
			'coursecode'=>$this->input->post('txtCourseCode'),
			'course'=> $this->input->post('txtCOurse'),
			'courseprx'=>$this->input->post('txtCoursePrx')
		);
		$this->db->where('id', $id);
		$this->db->update('courses', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function updatebatch(){
		$id = $this->input->post('txtId');
		$field = array(
		'uniid'=>$this->input->post('txtUniversity'),
			'courseid'=>$this->input->post('txtCourseID'),
			'batchno'=> $this->input->post('txtBatchNo'),
			'startsemester'=>$this->input->post('dtpStartDate')
		);
		$this->db->where('id', $id);
		$this->db->update('batch', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function updatesubject(){
		$id = $this->input->post('txtId');
		$field = array(
			'uniid'=>$this->input->post('txtUniversity'),
			'courseid'=>$this->input->post('txtCourseID'),
			'subjectscode'=> $this->input->post('txtSubjectCode'),
			'subjects'=> $this->input->post('txtSubject'),
			'subjectprx'=>$this->input->post('txtSubjectPrx')
		);
		$this->db->where('id', $id);
		$this->db->update('subjects', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	
}