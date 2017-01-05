<?php

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['title'] = "Welcome to CodeIg Professional Pages";
		$data['heading'] = "Welcome  Pages";
		$data['main'] = 'ci_profess/welcome_message';
		$this->load->view('ci_profess/template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */