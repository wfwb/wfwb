<?php

class Bookshelves_M extends CI_Model {

	public function __construct() {
	}

	public function set_bookshelf() {

		$data = array(
			'book_id'	=>	$this->input->post('book_id'),
			'type'	=>	$this->input->post('type'),
			'order'	=>	$this->input->post('order')
		);

		return $this->db->insert('bookshelves', $data);

	}

	public function get_bookshelf() {
		
		$query = "SELECT * FROM bookshelves WHERE bookshelf_id=".$this->input->post('bookshelf_id');
		$q = $this->db->query($query);
		
		return $q->result_array();	

	}

	public function set_book($book_id, $size) {

		$data = array(
			'book_id'	=>	$book_id,
			'type'	=>	0,
			'order'	=>	$size
		);

		return $this->db->insert('bookshelves', $data);

	}

	public function get_books() {

		$query = "SELECT * FROM bookshelves JOIN books ON books.book_id = bookshelves.book_id JOIN authors ON authors.author_id = books.author_id ORDER BY bookshelves.book_order DESC";
		$q = $this->db->query($query);
		
		return $q->result_array();

	}

	public function get_new_releases() {

		$query = "SELECT * FROM bookshelves JOIN books ON books.book_id = bookshelves.book_id  JOIN authors ON authors.author_id = books.author_id WHERE type=1 ORDER BY bookshelves.new_release_order DESC";
		$q = $this->db->query($query);
		
		return $q->result_array();

	}

	//TODO refactor set_new_release(), set_common()

	public function set_new_release() {

		$query = "SELECT * FROM bookshelves WHERE book_id=".$this->input->post('book_id');
		$q = $this->db->query($query);
		$book = $q->row();

		$data = array(
			'bookshelf_id' => $book->bookshelf_id,
			'book_id' => $book->book_id,
			'type' => 1,
			'new_release_order' => sizeof($this->get_new_releases()) + 1,
		);

		$where = "book_id = " . $this->input->post('book_id');
		$q = $this->db->update_string('bookshelves', $data, $where);

		return $this->db->query($q);

	}

	public function set_common() {

		$query = "SELECT * FROM bookshelves WHERE book_id=".$this->input->post('book_id');
		$q = $this->db->query($query);
		$book = $q->row();

		$data = array(
			'bookshelf_id' => $book->bookshelf_id,
			'book_id' => $book->book_id,
			'type' => 0,
			'book_order' => $book->book_order,
		);

		$where = "book_id = " . $this->input->post('book_id');
		$q = $this->db->update_string('bookshelves', $data, $where);

		return $this->db->query($q);

	}

	public function get_latest_new_release() {

		$new_releases = $this->get_new_releases();

	}

}

?>
