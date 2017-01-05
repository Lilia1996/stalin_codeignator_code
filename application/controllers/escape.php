<?php if (!defined('BASEPATH')) exit('No direct script
access allowed');
class Escape extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('security');
		$this->load->helper('url');
		$this->load->database();
	}
	public function index() {
		redirect('escape/display_form');
	}
	public function display_form() {
		$this->load->view('escape/escape');
		}
		public function escape_post() {
			$data = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname')
			);
			$this->load->model('Escape_model');
			if ($this->Escape_model->insert_data($data)) {
				echo 'Success';
			} else {
				echo 'Did not write to database';
			}
		}
		}
