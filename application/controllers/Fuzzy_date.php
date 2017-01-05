<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class Fuzzy_date extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('fuzzy_date_helper');
	}
	public function index() {
		echo describe_the_time(time() + 30);
	}
	}
	?>
}