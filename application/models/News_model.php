<?php

class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function record_count() {
		return $this->db->count_all("news");
	}
	public function fetch_news($limit, $start) {
		$this->db->limit($limit, $start);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("news");
	
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	public function get_news($slug = FALSE)
	{
		
		
		if ($slug === FALSE)
		{
			
			$query = $this->db->get('news');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('news', array('slug' => $slug));
		
		return $query->row_array();
	}
	public function set_news()
	{
		$this->load->helper('url');
	
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
		$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'text' => $this->input->post('text')
		);
	
		return $this->db->insert('news', $data);
	}
}