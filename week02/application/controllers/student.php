<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {


	public function index()
	{
		$this->load->view('student_details', array('name' => 'Student Number 3', 'course' => '<b>Primary</b>Student', 'profileImage' => 'images/Thimudu.jpg'));
	}
}
