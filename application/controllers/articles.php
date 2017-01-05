<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Articles extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index() {
		// Load content model
		$this->load->model('content_model');
		// Fetch stuff from database and store in specific arrays
		$left_data['main_article'] = $this->content_model->get_main_article();
		$right_data['article_list'] = $this->content_model->get_article_list();
		// Load views and pass data to them
		$this->load->view('templates/header');
		$this->load->view('articles/left', $left_data);
		$this->load->view('articles/right', $right_data);
		$this->load->view('templates/footer');
		}
		}