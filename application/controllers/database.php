<?php if (!defined('BASEPATH')) exit('No direct script
access allowed');
class Database extends CI_Controller {
	function __construct() {
		parent::__construct();
		
	}
	public function index() {
		redirect('database/create');
	}
	public function create() {
		$data = array(
				'firstname' => 'Lucy',
				'lastname' => 'Welsh',
				'username' => 'lucywelsh',
				'password' => 'password',
				'created_date' => time(),
				'is_active' => 'yes'
		);
		$this->load->model('Database_model');
		if ($this->Database_model->insert_data($data) ) {
			echo 'Success';
		}
		else
		{
			echo 'Cannot insert to database';
		}
	}
	public function create_batch() {
		$data = array(
				array(
						'firstname' => 'Lucy',
						'lastname' => 'Welsh',
						'username' => 'lwelsh',
						'password' => 'password',
						'created_date' => time(),
						'is_active' => 'yes'),
				array(
						'firstname' => 'claire',
						'lastname' => 'Strickland',
						'username' => 'cstrickland',
						'password' => 'password',
						'created_date' => time(),
						'is_active' => 'yes'),
				array(
						'firstname' => 'Douglas',
						'lastname' => 'Morrisson',
						'username' => 'dmorrisson',
						'password' => 'password',
						'created_date' => time(),
						'is_active' => 'yes')
		);
		$this->load->model('Database_model');
		if ($this->Database_model->insert_batch_data($data)) {
			echo 'Success';
		}
		else
		{
			echo 'Cannot insert to database';
		}
		}
		public function select_row() {
			$id = 1;
			$this->load->model('Database_model');
			$result = $this->Database_model->select_row($id);
			echo '<pre>';
			print_r($result->result());
		}
		public function update_row() {
			$id = 1;
			$data = array(
					'firstname' => 'Jessica',
					'lastname' => 'Welsh',
					'username' => 'jesswelsh',
					'password' => 'password',
					'created_date' => time(),
					'is_active' => 'yes'
			);
			$this->load->model('Database_model');
			$result = $this->Database_model->update_row($id, $data);
			redirect('database/select_row');
		}
		public function delete_row() {
			$id = 2;
			$this->load->model('Database_model');
			$result = $this->Database_model->delete_row($id);
			redirect('database/select_row');
		}
	}
	