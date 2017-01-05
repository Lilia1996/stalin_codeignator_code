<?php if (!defined('BASEPATH')) exit('No direct script access
allowed');
class File extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('file');
	}
	public function index() {
		redirect('file/view_all_files');
	}
	public function view_all_files() {
		$data['dir'] = './assets/';
		$data['files'] = get_dir_file_info($data['dir']);
		
		$this->load->view('templates/header');
		$this->load->view('files/view_file', $data);
		$this->load->view('templates/footer');
	}
	public function read_file(){
		$data['filename'] = './assets/newfile.php';
		
		$this->load->view('templates/header');
		$this->load->view('files/file_read', $data);
		$this->load->view('templates/footer');
	}
	public function create_file(){
		$data['string'] = 'Mervin';
		if ( ! write_file('./assets/otherfile.php',$data['string']))
		{
			$data['msg'] =  'Unable to write the file';
		}
		else
		{
			$data['msg'] =  'File written!';
		}
		$this->load->view('templates/header');
		$this->load->view('files/create_file', $data);
		$this->load->view('templates/footer');
	}
}