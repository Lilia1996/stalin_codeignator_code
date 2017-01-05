<?php if (! defined('BASEPATH')) exit('No direct script
access allowed');
class Csrf extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('security');
	}
	public function index() {
		$this->load->view('csrf/csrf');
		if ($this->input->post()) {
			var_dump($this->input->post());
		}
	}
}