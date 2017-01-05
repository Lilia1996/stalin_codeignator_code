<?php if (! defined('BASEPATH')) exit('No direct script
access allowed');
class Call_lib extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('lib_to_call');
		$this->load->database();
	}
	public function index() {
		$result = $this->lib_to_call->get_users();
		echo '<pre>';
		print_r($result->result());
		echo '</pre>';
	}
}