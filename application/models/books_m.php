<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books_m extends CI_Model {

	public function add_book() {

		$data = array(
			'book_name' => $this->input->post('book_name'),
			'book_name_decor' => $this->input->post('book_name_decor'),
			'series' => $this->input->post('series'),
			'author' => $this->input->post('author'),
			'category' => $this->input->post('category'),
			'ISBN' => $this->input->post('ISBN'),
			'publish' => $this->input->post('publish'),
			'cover_inside' => $this->input->post('cover_inside'),
			'total_pages' => $this->input->post('total_pages'),
			'price' => $this->input->post('price'),
			'discount' => $this->input->post('discount'),
			'demo_link' => $this->input->post('demo_link'),
			'book_info' => $this->input->post('book_info'),
			'series_info' => $this->input->post('series_info'),
			'about_author' => $this->input->post('about_author'),
			'review' => $this->input->post('review'),
			'cover_img_front' => $this->input->post('cover_img_front'),
			'cover_img_back' => $this->input->post('cover_img_back')
		);

		return $this->db->insert('books', $data);

	}

	public function edit_book() {

		$data = array(
			'book_name' => $this->input->post('book_name'),
			'book_name_decor' => $this->input->post('book_name_decor'),
			'series' => $this->input->post('series'),
			'author' => $this->input->post('author'),
			'category' => $this->input->post('category'),
			'ISBN' => $this->input->post('ISBN'),
			'publish' => $this->input->post('publish'),
			'cover_inside' => $this->input->post('cover_inside'),
			'total_pages' => $this->input->post('total_pages'),
			'price' => $this->input->post('price'),
			'discount' => $this->input->post('discount'),
			'demo_link' => $this->input->post('demo_link'),
			'book_info' => $this->input->post('book_info'),
			'series_info' => $this->input->post('series_info'),
			'about_author' => $this->input->post('about_author'),
			'review' => $this->input->post('review'),
			'cover_img_front' => $this->input->post('cover_img_front'),
			'cover_img_back' => $this->input->post('cover_img_back')
		);

		$where = "id = " . $this->input->post('id');

		$str = $this->db->update_string('books', $data, $where);

		return $this->db->query($str);
	}

	public function delete_book() {

		$query = "DELETE FROM books WHERE id=".$this->input->post('id');
		return $this->db->query($query);
			
	}

	public function get_books_type($type) {

		$query = "SELECT * FROM books WHERE type=".$type;
		$q = $this->db->query($query);
		return $q->result_array();
		
	}

	public function find_book() {

		$query = "SELECT * FROM books WHERE id=".$this->input->post('id');
		$q = $this->db->query($query);
		return $q->result_array();

	}

}
