<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajaxexample extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
		
	}
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('ajax/form-view');
		$this->load->view('templates/footer');
	}
	public function getTime()
	{
		echo time();
	}
	public function quickstart()
	{
		//echo time();
	}
	public function postview(){
		$this->load->view('templates/header');
		$this->load->view("ajax/ajax_post_view");
		$this->load->view('templates/footer');
	}
	public function user_data_submit() {
		$data = array(
				'username' => $this->input->post('name'),
				'pwd'=>$this->input->post('pwd')
		);
	
		//Either you can print value or you can send value to database
		echo json_encode($data);
	}
}