<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_Query extends CI_Model {

	public function get_home_db() {
		$query = $this->db->query('SELECT * FROM home');
		return $query->result_array();	
	}

	public function get_news_db() {
		$query = $this->db->query('SELECT * FROM news');
		return $query->result_array();	
	}

	public function get_join_us_db() {
		$query = $this->db->query('SELECT * FROM join_us');
		return $query->result_array();
	}

	public function get_books_db() {
		$query = $this->db->query('SELECT * FROM books');
		return $query->result_array();
	}

}