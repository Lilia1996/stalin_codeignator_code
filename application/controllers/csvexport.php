<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CsvExport extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('download');
    $this->load->dbutil();    
    $this->load->helper('url');
  }

  public function index() {
    redirect('csvexport/csv');
  }

  public function csv() {
    $query = $this->db->query("SELECT * FROM customers");
    $delimiter = ",";
    $newline = "\r\n";    

    force_download('myfile.csv', $this->dbutil->csv_from_result($query, $delimiter, $newline));
  }
}