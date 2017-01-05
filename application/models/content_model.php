<?php 
class Content_model extends CI_Model {
	function get_main_article() {
		$this->db->where('is_main', 'yes');
		return $this->db->get('diff_articles');
	}
	function get_article_list() {
		return $this->db->get('diff_articles');
	}
}


?>
