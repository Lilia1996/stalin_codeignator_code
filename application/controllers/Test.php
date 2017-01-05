<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		
		$this->load->database();
		$this->load->model('Customers');
	}
	public function index()
	{
		
		$items =$this->menu_model->all();
		$this->multi_menu->set_items($items);
		
		$this->load->view('templates/header');
	}
	public function hello()
	{
		$this->load->helper('form');
		$this->load->view('test');
	}
	public function bootstrap1()
	{
		$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
		$config["parent_tag_open"]       = '<li class="dropdown-submenu">';
		$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';
		$config["children_tag_open"]     = '<ul class="dropdown-menu">';
		$config["item_divider"]          = "<li class='divider'></li>";
		$this->multi_menu->initialize($config);
		$items =$this->menu_model->all();
		$this->multi_menu->set_items($items);
		
		
		$this->load->view('templates/header');
		$this->load->view("bootstrap1");
	}
	public function testActive(){
		echo "stalin";
		 		$d = Customers::all();
		echo "<pre>";
	print_r($d );
	}
}
