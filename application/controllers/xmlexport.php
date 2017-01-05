<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class XmlExport extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->dbutil();    
  }

  public function index() {
    redirect('xmlexport/xml');
  }

  public function xml() {
    $config = array ('root'    => 'root',
                     'element' => 'element', 
                     'newline' => "\n", 
                     'tab'    => "\t"
                    );

    $query = $this->db->query("SELECT * FROM products");

    echo $this->dbutil->xml_from_result($query, $config);
  }
}
