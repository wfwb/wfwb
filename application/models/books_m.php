<?php

class Books_M extends CI_Model {

	public function __construct() {
	}

	public function set_book($data) {

		$data = array(
			'book_name'			=> $this->input->post('book_name'),
			'book_name_decor'	=> $this->input->post('book_name_decor'),
			'ISBN'				=> $this->input->post('ISBN'),
			'publish'			=> $this->input->post('publish'),
			'cover_inside'		=> $this->input->post('cover_inside'),
			'total_pages'		=> $this->input->post('total_pages'),
			'price'				=> $this->input->post('price'),
			'discount'			=> $this->input->post('discount'),
			'book_info'			=> $this->input->post('book_info'),
			'review'			=> $this->input->post('review'),
			'demo_link'			=> $data['demo_link'],
			'cover_img_front'	=> $data['cover_img_front'],
			'cover_img_back'	=> $data['cover_img_back'],
			'author_id'			=> $this->input->post('author_id'),
			'series_id' 		=> $this->input->post('series_id')	
			// 'series' => $this->input->post('series'),
			// 'author' => $this->input->post('author'),
			// 'category' => $this->input->post('category'),
			// 'series_info' => $this->input->post('series_info'),
			// 'about_author' => $this->input->post('about_author'),
		);

		//TODO(?) -> add categories

		// $this->db->insert('books', $data);

		$categories = "";
		
		$i = 0;
		foreach ($this->input->post('category_id') as $c) {
			if ($i == 0)
				$categories = $c;
			else
				$categories = $categories . " " . $c;
			$i++;
		}

		$data['category_ids'] = $categories;

		if ($this->input->post('book_id') != "") {

			$where = "book_id = " . $this->input->post('book_id');
			$q = $this->db->update_string('books', $data, $where);

			return $this->db->query($q);

		}
		else {

			// sizeof(get_books())

			return $this->db->insert('books', $data);

			// $this->db->insert('books', $data);

		}

	}

	public function get_book() {
		
		$query = "SELECT * FROM books WHERE book_id=".$this->input->post('book_id');
		$q = $this->db->query($query);

		return $q->result_array();

	}

	public function get_books() {
		
		$query = "SELECT * FROM books";
		$q = $this->db->query($query);

		return $q->result_array();

	}

	public function delete_book() {

		return $this->db->delete('books', array('book_id' => $this->input->post('book_id')));

	}

	public function get_file() {

		$this->db->select('cover_img_front, cover_img_back, demo_link');
		$query = $this->db->get_where('books', array('book_id' => $this->input->post('book_id')));

		return $query->result_array();

	}

	public function get_books_size() {

		$result = $this->get_books();

		return sizeof($result);

	}

}

?>