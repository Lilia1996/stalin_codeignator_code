<?php if (!defined('BASEPATH')) exit('No direct script access
allowed');
class Zip extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('zip');
	}
	public function index() {
		redirect('zip/zipme');
	}
	public function zipme() {
		$file_name = './assets/tozip.txt';
		// Create some data for the file
		$data = 'This is a string of text which we will use to write to
the file in the variable $file_name';
		// Set the time (to be used as ZIP filename)
		$date = date("d-m-Y", time());
		// Save some data to the ZIP archive
		$this->zip->add_data($file_name, $data);
		// Create the ZIP archive on your server - make sure this path is
		// outside of your web root
		$this->zip->archive('./assets/zip/'.$date.'.zip');
		// Download the ZIP archive
		$this->zip->download($date.'.zip');
		// Clear the cached ZIP archive
		$this->zip->clear_data();
		}
		}