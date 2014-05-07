<?php

class Authors_M extends CI_Model {

	public function __construct() {
	}

	public function set_author() {

		$data = array(
			'author_name'	=>	$this->input->post('author_name'),
			'about_author'	=>	$this->input->post('about_author')
		);

		if ($this->input->post('author_id') != "") {

			$where = "author_id = " . $this->input->post('author_id');
			$q = $this->db->update_string('authors', $data, $where);

			return $this->db->query($q);

		}
		else {

			return $this->db->insert('authors', $data);

		}

	}

	public function get_author() {
		
		$query = "SELECT * FROM authors WHERE author_id=".$this->input->post('author_id');
		$q = $this->db->query($query);
		
		return $q->result_array();	

	}

	public function delete_author() {

		return $this->db->delete('authors', array('author_id' => $this->input->post('author_id')));

	}

}

?>