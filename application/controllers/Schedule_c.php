
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_c extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('ClassSchedule_m', 'c');
		$this->load->model('ExamSchedule_m', 'e');
	}

	function index(){

		$this->load->view('layout/header');
		$this->load->view('StudentClassnExamSchedules');
		$this->load->view('layout/footer');

		
	}

}