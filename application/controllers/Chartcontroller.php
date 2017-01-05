<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

	/**
	 * @author http://roytuts.com
	 */
	class Chartcontroller extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('chartmodel');
		}

		public function index() {
			$results = $this->chartmodel->get_chart_data();
			$data['chart_data'] = $results['chart_data'];
			$data['min_year'] = $results['min_year'];
			$data['max_year'] = $results['max_year'];
			
			$data['title'] = "Charts Page";
			$data['heading'] = "Google Chart";
			$data['main'] = 'chart/chart';
			$this->load->view('ci_profess/template',$data);
			
		}

	}

	/* End of file ChartController.php */
	/* Location: ./application/controllers/ChartController.php */