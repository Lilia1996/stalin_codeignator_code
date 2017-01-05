<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class Registerdob extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('dob_val_helper');
	}
	public function index() {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '<br />');
		$this->form_validation->set_rules('year', 'Year',
				'required|min_length[4]|max_length[4]|trim');
		$this->form_validation->set_rules('month', 'Month',
				'required|min_length[2]|max_length[2]|trim');
		$this->form_validation->set_rules('day', 'Day', 'required|min_length[2]|max_length[2]|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('dob/signup');
			$this->load->view('templates/footer');
		} else {
			$dob = array(
					'year' => $this->input->post('year'),
					'month' => $this->input->post('month'),
					'day' => $this->input->post('day')
			);
			$at_least = 18;
			if (are_they_old_enough($dob, $at_least = 18)) {
				$this->session->set_flashdata('category_success', 'You are old enough to view pageYou are old enough to view page');
				$this->load->view('templates/header');
				$this->load->view('dob/enter');
				$this->load->view('templates/footer');
			} else {
				$this->session->set_flashdata('category_error', 'You are NOT old enough to view page');
				$this->load->view('templates/header');
				$this->load->view('dob/noenter');
				$this->load->view('templates/footer');
			}
		}
	}
	}