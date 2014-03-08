<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_M extends CI_Model {
	
	public function add_news() {

		$data = array(
			'thumbnail_img' => $this->input->post('thumbnail_img'),
			'heading' => $this->input->post('heading'),
			'detail' => $this->input->post('detail'),
			'order' => $this->input->post('order')
		);

		return $this->db->insert('news', $data);

	}

	public function edit_news() {

		$data = array(
			'thumbnail_img' => $this->input->post('thumbnail_img'),
			'heading' => $this->input->post('heading'),
			'detail' => $this->input->post('detail'),
			'order' => $this->input->post('order')
		);

		$where = "id = " . $this->input->post('id');

		$str = $this->db->update_string('news', $data, $where);

		return $this->db->query($str);
	}

	public function delete_news() {

		$query = "DELETE FROM wfwb.news WHERE id=".$this->input->post('id');
		return $this->db->query($query);
			
	}

}