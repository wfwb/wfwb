<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join_Us_M extends CI_Model {
	
	public function add_join_us($data) {

		$data = array(
			'thumbnail_img' => $data['thumbnail_img'],
			'heading' => $this->input->post('heading'),
			'detail' => $this->input->post('detail'),
			'order' => $this->input->post('order')
		);

		return $this->db->insert('join_us', $data);

	}

	public function edit_join_us($data) {

		$data = array(
			'thumbnail_img' => $data['thumbnail_img'],
			'heading' => $this->input->post('heading'),
			'detail' => $this->input->post('detail'),
			'order' => $this->input->post('order')
		);

		$where = "id = " . $this->input->post('id');

		$str = $this->db->update_string('join_us', $data, $where);

		return $this->db->query($str);
	}

	public function delete_join_us() {

		$query = "DELETE FROM join_us WHERE id=".$this->input->post('id');
		return $this->db->query($query);
			
	}

	public function find_join_us() {

		$query = "SELECT * FROM join_us WHERE id=".$this->input->post('id');
		$q = $this->db->query($query);
		return $q->result_array();

	}

}