<?php

class Series_M extends CI_Model {

	public function __construct() {
	}

	public function set_series() {

		$data = array(
			'series_name'	=>	$this->input->post('series_name'),
			'series_info'	=>	$this->input->post('series_info')
		);

		if ($this->input->post('series_id') != "") {

			$where = "series_id = " . $this->input->post('series_id');
			$q = $this->db->update_string('series', $data, $where);

			return $this->db->query($q);

		}
		else {

			return $this->db->insert('series', $data);

		}


	}

	public function get_series() {

		$query = "SELECT * FROM series WHERE series_id=".$this->input->post('series_id');
		$q = $this->db->query($query);

		return $q->result_array();

	}

	public function delete_series() {

		return $this->db->delete('series', array('series_id' => $this->input->post('series_id')));

	}

}

?>