<?php if ( ! defined('BASEPATH')) exit('No direct script
access allowed');
class Multi_database_model_db_2 extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function select_2() {
		$DBconn2 = $this->load->database('database1', TRUE);
		$query2 = $DBconn2->query("SELECT * FROM `table1`");
		return $query2;
	}
}