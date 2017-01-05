<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('array');
        $this->load->helper('dob_val_helper');
    }
   
   
}
