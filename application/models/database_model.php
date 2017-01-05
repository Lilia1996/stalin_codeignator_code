<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Database_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function insert_data($data) {
		$this->db->insert('ch6_users', $data);
	}
	function insert_batch_data($data) {
		$this->db->insert_batch('ch6_users',$data);
		}
		function select_row($id) {
			$this->db->where('id', $id);
			$query = $this->db->get('ch6_users');
			return $query;
		}
		function update_row($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('ch6_users', $data);
		}
		function delete_row($id) {
			$this->db->where('id', $id);
			$this->db->delete('ch6_users');
		}
		
	}