<?php if (!defined('BASEPATH')) exit('No direct script
access allowed');
class Shop extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('cart');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->model('Shop_model');
		$this->load->library('calendar');
	}
	public function index() {
		$data['calc'] = $this->calendar->generate();
		$data['query'] =$this->Shop_model->get_all_products();
		$this->load->view('templates/header');
		$this->load->view('shop/display_products', $data);
		$this->load->view('templates/footer');
	}
	public function add() {
		$data['calc'] = $this->calendar->generate();
		$product_id = $this->uri->segment(3);
		$query = $this->Shop_model->get_product_details($product_id);
		foreach($query->result() as $row) {
			$data = array(
					'id' => $row->product_id,
					'qty' => 1,
					'price' => $row->product_price,
					'name' => $row->product_name,
			);
		}
		$this->cart->insert($data);
		$this->load->view('templates/header');
		$this->load->view('shop/display_cart', $data);
		$this->load->view('templates/footer');
		
		
}
public function update_cart() {
$data = array();
$i = 0;
foreach($this->input->post() as $item) {
$data[$i]['rowid'] = $item['rowid'];
$data[$i]['qty'] = $item['qty'];
$i++;
}
$this->cart->update($data);
redirect('shop/display_cart');
}
public function display_cart() {
	$data['calc'] = $this->calendar->generate();
	$this->load->view('templates/header');
$this->load->view('shop/display_cart',$data);
$this->load->view('templates/footer');
}
public function clear_cart() {
$this->cart->destroy();
redirect('index');
}
}