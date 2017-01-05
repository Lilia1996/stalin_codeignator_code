<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class Fileupload extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}
	function index() {
		$this->load->view('templates/header');
		$this->load->view('fileupload/upload');
		$this->load->view('templates/footer');
	}
	function upload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()) { // Upload error,display form & errors
			$data['error'] = $this->upload->display_errors();
			$this->load->view('upload/upload_form', $data);
		} else { // Success, display success message
			$data['upload_data'] = $this->upload->data();
			$data['success'] = TRUE;
			$this->load->view('templates/header');
			$this->load->view('fileupload/upload_success', $data);
			$this->load->view('templates/footer');
			}
	}
}