<?php if (!defined('BASEPATH')) exit('No direct script
access allowed');
class Multi_database extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		}
		public function index() {
			redirect('multi_database/select');
		}
		public function select() {
			$this->load->model('Multi_database_model_db_1');
			$query1 = $this->Multi_database_model_db_1->select_1();
			$this->load->model('Multi_database_model_db_2');
			$query2 = $this->Multi_database_model_db_2->select_2();
			$data['records1'] = $query1->result();
			$data['records2'] = $query2->result();
			$data['db1'] ="stalin_codeig";
			$data['db2'] ="database2";
			$this->load->view('templates/header');
			$this->load->view('multi_db/multi_db_file', $data);
			//$this->load->view('Stud_view', $data);
			$this->load->view('templates/footer');
		}
		}