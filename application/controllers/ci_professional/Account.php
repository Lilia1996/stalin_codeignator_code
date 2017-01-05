<?php

class Account extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('url', 'form'));
		$this->load->model('ci_profess_model/account_model');
		
		$this->_salt = "123456789987654321";
	}
	
		

	
	function index()
	{
		if($this->account_model->logged_in() === TRUE)
		{
			$this->dashboard(TRUE);
		}
		else
		{
			
			$data['title'] = "Account Page";
			$data['heading'] = "Account Page";
			$data['main'] = 'ci_profess/account/details';
			$this->load->view('ci_profess/template',$data);
			
		}
	}
	
	function dashboard($condition = FALSE)
	{
		if($condition === TRUE OR $this->account_model->logged_in() === TRUE)
		{
			
			$data['title'] = "Dashboard";
			$data['heading'] = "Dashboard";
			$data['main'] = 'ci_profess/account/dashboard';
			$this->load->view('ci_profess/template',$data);
			
		}
		else
		{
			$data['title'] = "Account Page";
			$data['heading'] = "Account Page";
			$data['main'] = 'ci_profess/account/details';
			$this->load->view('ci_profess/template',$data);
		}
	}
	
	function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'xss_clean|required');
		$this->form_validation->set_rules('password', 'Password', 'xss_clean|required|min_length[4]|max_length[12]|sha1|callback_password_check');
	
		$this->_username = $this->input->post('username');
		$this->_password = sha1($this->_salt . $this->input->post('password'));
	
		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = "Login";
			$data['heading'] = "Login";
			$data['main'] = 'ci_profess/account/login';
			$this->load->view('ci_profess/template',$data);
		}
		else
		{	
			$this->account_model->login();
		
			$data['message'] = "You are logged in! Now go take a look at the " . anchor('ci_professional/account/dashboard', 'Dashboard');
			
			$data['title'] = "Success";
			$data['heading'] = "Success";
			$data['main'] = 'ci_profess/account/success';
			$this->load->view('ci_profess/template',$data);
			
		}
	}
	
	function register()
	{
		
		$this->form_validation->set_rules('username', 'Username', 'xss_clean|required');
		$this->form_validation->set_rules('email', 'Email Address', 'xss_clean|required|valid_email|callback_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'xss_clean|required|min_length[4]|max_length[12]');
		
		$this->form_validation->set_rules('password_conf', 'Password Confirmation', 'xss_clean|required|min_length[4]|max_length[12]|matches[password]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = "Register";
			$data['heading'] = "Register";
			$data['main'] = 'ci_profess/account/register';
			$this->load->view('ci_profess/template',$data);
			
		}
		else
		{
			$data['username'] = $this->input->post('username');
			$data['email'] = $this->input->post('email');
			$data['password'] = sha1($this->_salt . $this->input->post('password'));
			
			if($this->account_model->create($data) === TRUE)
			{
				$data['message'] = "The user account has now been created! You can login " . anchor('ci_professional/account/login', 'here') . ".";
				$data['title'] = "Success";
				$data['heading'] = "Success";
				$data['main'] = 'ci_profess/account/success';
				$this->load->view('ci_profess/template',$data);
			}
			else
			{
				$data['error'] = "There was a problem when adding your account to the database.";
				$data['title'] = "Error";
				$data['heading'] = "Error";
				$data['main'] = 'ci_profess/account/error';
				$this->load->view('ci_profess/template',$data);
				
			}
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$data['title'] = "Log out";
		$data['heading'] = "Log out";
		$data['main'] = 'ci_profess/account/logout';
		$this->load->view('ci_profess/template',$data);
		
	}
	
	function password_check()
	{
		$this->db->where('username', $this->_username);
		$query = $this->db->get('ci_profess_users');
		$result = $query->row_array();
		
		if($result['password'] == $this->_password);
		{
			return TRUE;
		}
		
		if($query->num_rows() == 0)
		{
			$this->form_validation->set_message('password_check', 'There was an error!');
			return FALSE;
		}	
	}
	
	function user_exists($user)
	{
		$query = $this->db->get_where('ci_profess_users', array('username' => $user));
		
		if($query->num_rows() > 0)
		{
			$this->form_validation->set_message('user_exists', 'The %s already exists in our database, please use a different one.');
			return FALSE;
		}
		
		$query->free_result();
		
		return TRUE;
	}
	
	function email_exists($email)
	{
		$query = $this->db->get_where('ci_profess_users', array('email' => $email));
		
		if($query->num_rows() > 0)
		{
			$this->form_validation->set_message('email_exists', 'The %s already exists in our database, please use a different one.');
			return FALSE;
		}
		
		$query->free_result();
		
		return TRUE;
	}
	
}

?>