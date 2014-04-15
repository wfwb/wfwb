<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_C extends CI_Controller {

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
		$this->load->model('home_m');
		$this->load->model('join_us_m');
		$this->load->model('news_m');
		$this->load->model('books_m');

	}

	public function index() {
		
		if (!$this->ion_auth->logged_in()) {
			$this->load->view('admin/login');
		}
		
		else {
			if ($this->ion_auth->is_admin()) {
				$this->home_page();
			}
			else {
				redirect('/', 'refresh');
			}
		}

	}

	public function home_page() {

		$this->load->library('form_validation');

		$data['create'] = 'create a new banner';

		$this->form_validation->set_rules('banner_desktop', 'banner_desktop', 'required');
		$this->form_validation->set_rules('banner_mobile', 'banner_mobile', 'required');
		$this->form_validation->set_rules('heading', 'heading');
		$this->form_validation->set_rules('detail', 'detail');
		$this->form_validation->set_rules('order', 'order');
		$this->form_validation->set_rules('text_desktop', 'text_desktop');
		$this->form_validation->set_rules('text_mobile', 'text_mobile');

		if ($this->ion_auth->is_admin()) {
			if ($this->form_validation->run() == FALSE) {
				$data['home'] = $this->db_query->get_home_db();
				$this->load->view('admin/header');
				$this->load->view('admin/home', $data);	
			}
			else {
				$this->home_m->add_banner();
				// $data['home'] = $this->db_query->get_home_db();
				// $this->load->view('admin/header');
				$this->load->view('check');	
			}
		}	
		else {
			redirect('/', 'refresh');
		}

	}

	public function home_page_edit() {
		$this->home_m->edit_banner();
		$this->load->view('check');	
	}

	public function books_page() {

		if ($this->ion_auth->is_admin()) {
			$data['books'] = $this->db_query->get_books_db();
			$this->load->view('admin/header');
			$this->load->view('admin/books', $data);	
		}	
		else {
			redirect('/', 'refresh');
		}

	}

	public function books_page_add() {
		// $this->load->helper(array('form', 'url'));

		$path = './public/img/books';
		// add to config
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '0';
		$this->upload->initialize($config);
		// $this->load->library('upload', $config);
		// upload image
		$this->upload->do_upload('cover_img_front');
		$this->upload->do_upload('cover_img_back');

		$data = array();
		$data['cover_img_front'] = "";
		$data['cover_img_back'] = "";
		$data['demo_link'] = "";

		$data['cover_img_front'] = $path."/".$_FILES['cover_img_front']['name'];
		$data['cover_img_back'] = $path."/".$_FILES['cover_img_back']['name'];

		// upload pdf
		$path2 = './public/pdf';
		$config2['upload_path'] = $path2;
		$config2['allowed_types'] = 'pdf';
		$config2['max_size']	= '0';
		// $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
		$this->upload->do_upload('demo_link');
		$data['demo_link'] = $path2."/".$_FILES['demo_link']['name'];

		$this->books_m->add_book($data);
		redirect('/admin_books_page', 'refresh');
	}

	public function books_page_edit() {
		$this->books_m->edit_book();
		redirect('/admin_books_page', 'refresh');
	}

	public function books_page_delete() {
		// get file path
		$paths = $this->books_m->get_book_file();
		// $this->load->helper("file");
		foreach ($paths['0'] as $path) {
			unlink($path);
		}

		$this->books_m->delete_book();
		redirect('/admin_books_page', 'refresh');
	}

	// NEWS

	public function news_page() {

		if ($this->ion_auth->is_admin()) {
			$data['news'] = $this->db_query->get_news_db();
			$this->load->view('admin/header');
			$this->load->view('admin/news', $data);	
		}	
		else {
			redirect('/', 'refresh');
		}
		
	}

	public function news_page_add() {
		$this->news_m->add_news();
		redirect('/admin_news_page', 'refresh');
	}

	public function news_page_edit() {
		$this->news_m->edit_news();
		redirect('/admin_news_page', 'refresh');
	}

	public function news_page_delete() {
		$this->news_m->delete_news();
		redirect('/admin_news_page', 'refresh');
	}

	// JOIN US

	public function join_us_page() {

		if ($this->ion_auth->is_admin()) {
			$data['join_us'] = $this->db_query->get_join_us_db();
			$this->load->view('admin/header');
			$this->load->view('admin/join_us', $data);	
		}	
		else {
			redirect('/', 'refresh');
		}
		
	}

	public function join_us_page_add() {

		// config picture upload
		$path = './public/img/thumbnails';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '0';
		$this->upload->initialize($config);
		$this->upload->do_upload('thumbnail_img');
		$data['thumbnail_img'] = $path."/".$_FILES['thumbnail_img']['name'];

		$this->join_us_m->add_join_us($data);
		redirect('/admin_join_us_page', 'refresh');
	}

	public function join_us_page_edit() {

		$join_us = $this->join_us_m->find_join_us();
		$data['thumbnail_img'] = $this->input->post('thumbnail');

		if (!empty($_FILES['thumbnail_img']['name'])) {

			unlink($data['thumbnail_img']);

			$path = './public/img/thumbnails';
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '0';
			$this->upload->initialize($config);
			$this->upload->do_upload('thumbnail_img');
			$data['thumbnail_img'] = $path."/".$_FILES['thumbnail_img']['name'];
		}

		$this->join_us_m->edit_join_us($data);
		redirect('/admin_join_us_page', 'refresh');
	}

	public function join_us_page_delete() {
		$this->join_us_m->delete_join_us();
		redirect('/admin_join_us_page', 'refresh');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
