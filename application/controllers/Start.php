<?php
class Start extends CI_Controller {
	var    $base;
	
var    $css;
	function __construct() {
		parent::__construct();
		
$this->base = $this->config->item('base_url');
	 
  $this->css = $this->config->item('css');      
  
	}   
	function index($data = ''){	
	       $data['title'] = "Welcome to Basic View";
			$data['heading'] = "Basic View";
			$data['main'] = 'ci_profess/account/basic_view';
			$this->load->view('ci_profess/template',$data);
        

    }
	function mail(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('message', 'Message field', 'required');
         $name= $this->input->post('name');		
		$phone= $this->input->post('phone');
		$message= $this->input->post('message');
		if ($this->form_validation->run() == FALSE){
			 $data['title'] = "Welcome to Basic View";
			$data['heading'] = "Basic View";
			$data['main'] = 'ci_profess/account/basic_view';
			$this->load->view('ci_profess/template',$data);
		}
		else{

			//Here we should place the code to send the email.
			//CI will also help us with that, we will see how in a few chapters.
            $data['name'] =  $name;
			  $data['phone'] =  $phone;
			    $data['message'] =  $message;
			 $data['title'] = "Welcome to Success Page";
			$data['heading'] = "Success Page";
			$data['msg'] = "Success";
			$data['main'] = 'ci_profess/account/success';
			$this->load->view('ci_profess/template',$data);
		}		
	}	


function hello($name="stalin")
	
{
	
	$data['menug'] = $this->menus->show_menu();
		
$data['css'] = $this->css;
	
	$data['base'] = $this->base;
	
	$data['name'] = $name;
	

	$data['mytext'] = "Hello, <b>$name</b>, now we're getting dynamic!";
	
	
	        $data['title'] = "Welcome to this site";
			$data['heading'] = "Start";
			$data['main'] = 'ci_profess/account/testview';
			$this->load->view('ci_profess/template',$data);


	}  
}