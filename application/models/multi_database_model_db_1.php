<?php if ( ! defined('BASEPATH')) exit('No direct script
access allowed');
class Multi_database_model_db_1 extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function select_1() {
		$DBconn1 = $this->load->database('stalin_codeig', TRUE);
		$query1 = $DBconn1->query("SELECT * FROM `articles`");
		return $query1;
	}
}