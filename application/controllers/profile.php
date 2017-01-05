<?php
class profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html','form'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');


		$this->load->library('upload');
		
		
	}
	
	function index()
	{
		$query = $this->db->get("stud");
		$data['records'] = $query->result();
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$data['uname'] = $details[0]->fname . " " . $details[0]->lname;
		$data['uemail'] = $details[0]->email;
		//$this->load->view('upload/file_view',array('error' => ' ' ));
		$this->load->view('templates/header');
		$this->load->view('register_and_login/profile_view', $data);
		//$this->load->view('Stud_view', $data);
		$this->load->view('templates/footer');
		
		
		
		
	}
}