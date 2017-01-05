<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of DataTableController
 *
 * @author http://roytuts.com
 */
class DataTableController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('datatablemodel');
	}

	public function index() {
		$data['contacts'] = $this->datatablemodel->get_contact_list();
		$data['title'] = "Database Crud";
		$data['heading'] = "Database Crud";
		$data['main'] = 'data_table_crud/data_table_crud';
		$this->load->view('ci_profess/template',$data);
	}

	function add_contact() {
		$name = $this->input->post('contact_name');
		$address = $this->input->post('contact_address');
		$phone = $this->input->post('contact_phone');
		$this->datatablemodel->add_contact($name, $address, $phone);
		echo 'http://localhost:8080/stalin_projects/stalin_codeig_blog/Datatablecontroller/index';
	}

	function update_contact() {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$this->datatablemodel->update_contact($id, $name, $address, $phone);
		echo 'http://localhost:8080/stalin_projects/stalin_codeig_blog/Datatablecontroller/index';
	}

	function cancel_contact() {
		echo 'http://localhost:8080/stalin_projects/stalin_codeig_blog/Datatablecontroller/index';
	}

	function delete_contact() {
		$contact_id = $_POST['id'];
		$this->datatablemodel->delete_contact($contact_id);
		echo 'http://localhost:8080/stalin_projects/stalin_codeig_blog/Datatablecontroller/index';
	}

}