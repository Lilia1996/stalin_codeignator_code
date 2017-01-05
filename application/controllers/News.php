<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('News_model');
		$this->load->helper('url_helper');
		$this->load->library("pagination");
		$this->load->library('calendar');
		$this->load->library('cart');
		
		
		
	}
	public function testify(){
		
		echo 'Controller: ' . __CLASS__ . ',
Method: ' . __FUNCTION__;
		
	}

	public function index(){
		 
		$config = array();
		$config["base_url"] = base_url() . "news/index";
		$config["total_rows"] = $this->News_model->record_count();
		$config["per_page"] = 2;
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		 
		 
		//config for bootstrap pagination class integration
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
	
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		 
		$data["results"] = $this->News_model->fetch_news($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		//$data['news'] = $this->News_model->get_news();
	
		$data['title'] = 'News archive';
		$data['calc'] = $this->calendar->generate();
		
		
		$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
		$config["parent_tag_open"]       = '<li class="dropdown-submenu">';
		$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';
		$config["children_tag_open"]     = '<ul class="dropdown-menu">';
		$config["item_divider"]          = "<li class='divider'></li>";
		$this->multi_menu->initialize($config);
		$items =$this->menu_model->all();
		$this->multi_menu->set_items($items);
		
		
		
		
		
		
		
		$this->load->view('templates/header');
	
		$this->load->view('news/index',$data);
		$this->load->view('templates/footer');
	}
	
	public function view($slug = NULL)
	{
		$data['news_item'] = $this->News_model->get_news($slug);
	
		if (empty($data['news_item']))
		{
			show_404();
		}
	
		$data['title'] = $data['news_item']['title'];
	
		$this->load->view('templates/header');
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
		 
	}
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Create a news item';
	
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');
	
		}
		else
		{
			$this->News_model->set_news();
			$this->load->view('news/success');
		}
	}
	
	
}