<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books_C extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('db_query');
		$this->load->model('books_m');
	}

	public function index() {
		$this->load->view('templates/header');
		$data = array(
				'books' => $this->db_query->get_books_db(),
				'new' => $this->books_m->get_books_type(1),
				'recommended' => $this->books_m->get_books_type(2),
				'normal' => $this->books_m->get_books_type(3)
				);
		$this->load->view('books_v', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */