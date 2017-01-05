<?php if ( ! defined('BASEPATH')) exit('No direct script
access allowed');
class Escape_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function insert_data($data) {
		$query = "INSERT INTO `escape` (`firstname`,
`lastname`) VALUES (
".$this->db->escape($data['firstname']).",
".$this->db->escape(
				$data['lastname']).") ";
		
				
				
				
				
				if ($this->db->query($query)) {
					return true;
				} else {
					return false;
				}
		}
		}
