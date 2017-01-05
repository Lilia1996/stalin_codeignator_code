<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbrecords extends CI_Controller {

	public function index(){
		
		$sql = "select * from customers";
		$data['results']= $this->db->query($sql);
		$this->load->view('templates/header');
		$this->load->view('dbrecords/view',$data);
		$this->load->view('templates/footer');
	}
	
	
	
	
}