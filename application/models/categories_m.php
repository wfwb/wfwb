<?php

class Categories_M extends CI_Model {

	public function __construct() {
	}

	public function set_category() {

		$data = array(
			'category_name'	=>	$this->input->post('category_name')
		);

		if ($this->input->post('category_id') != "") {

			$where = "category_id = " . $this->input->post('category_id');
			$q = $this->db->update_string('categories', $data, $where);

			return $this->db->query($q);

		}
		else {

			return $this->db->insert('categories', $data);

		}

	}

	public function get_category() {
		
		$query = "SELECT * FROM categories WHERE category_id=".$this->input->post('category_id');
		$q = $this->db->query($query);
		
		return $q->result_array();	

	}

	public function delete_category() {

		return $this->db->delete('categories', array('category_id' => $this->input->post('category_id')));

	}

}

?>