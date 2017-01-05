<?php if ( ! defined('BASEPATH')) exit('No direct script
access allowed');
class Lib_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function get() {
		$query = $this->db->get('person');
		return $query;
	}
}
