<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_M extends CI_Model {

	public function add_banner() {

		$data = array(
			'banner_desktop' => $this->input->post('banner_desktop'),
			'banner_mobile' => $this->input->post('banner_mobile'),
			'heading' => $this->input->post('heading'),
			'detail' => $this->input->post('detail'),
			'order' => $this->input->post('order'),
			'text_desktop' => $this->input->post('text_desktop'),
			'text_mobile' => $this->input->post('text_mobile'),
		);	

		return $this->db->insert('home', $data);

	}

	public function edit_banner() {

		$data = array(
			'banner_desktop' => $this->input->post('banner_desktop'),
			'banner_mobile' => $this->input->post('banner_mobile'),
			'heading' => $this->input->post('heading'),
			'detail' => $this->input->post('detail'),
			'order' => $this->input->post('order'),
			'text_desktop' => $this->input->post('text_desktop'),
			'text_mobile' => $this->input->post('text_mobile'),
		);

		$where = "id = " . $this->input->post('id');

		$str = $this->db->update_string('home', $data, $where);

		echo $str;

		return $this->db->query($str);

	}

}