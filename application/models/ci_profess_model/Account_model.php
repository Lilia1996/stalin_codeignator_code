<?php

class Account_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}
	function create($data)
	{	
		if($this->db->insert('ci_profess_users', $data))
		{
			return TRUE;
		}
		
		return FALSE;
	}
	
	function login()
	{
		$data = array(
					'username' => $this->input->post('username'),
					'logged_in' => TRUE
					);
					
		$this->session->set_userdata($data);
	}
	
	function logged_in()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			return TRUE;
		}

		return FALSE;
	}
}

?>