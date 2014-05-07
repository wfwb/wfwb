<?php

class Bookscategories_M extends CI_Model {

	public function __construct() {
	}

	public function set_bookscategories() {

		$data = array(
			'book_id'		=>	$this->input->post('book_id'),
			'category_id'	=>	$this->input->post('category_id')
		);

		return $this->db->insert('bookscategories', $data);

	}

	public function get_bookscategories() {
		
		$query = "SELECT * FROM bookscategories WHERE bc_id=".$this->input->post('bc_id');
		$q = $this->db->query($query);
		
		return $q->result_array();	

	}

}

?>