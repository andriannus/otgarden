<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tanaman_model', 'tanaman');
		$this->load->model('user_model', 'user');
	}

	public function login()
	{
		if ($this->session->userdata('login') == true) {
			redirect('admin');
		} else {

			$data = array(
				'title' => 'Login to Administrator',
				'menu' => 'home',
				'page' => 'site/login'
			);

			$this->load->view('core/layout/userbase_app', $data);
		}
	}

	public function login_process()
	{
		$where = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$check = $this->user->check_login($where)->num_rows();

		if ($check > 0) {
			$data_session = array(
				'nama' => $username,
				'login' => true
			);

			$this->session->set_userdata($data_session);
			redirect('admin');
		} else {
			echo "Username atau Password salah!";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('site/login');
	}

	public function index()
	{
		$data = array(
			'title' => 'Ot Garden',
			'navigation' => 'core/element/navigation/default',
			'menu' => 'home',
			'page' => 'site/index'
		);

		$jumlah_data = $this->tanaman->get_all()->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'site/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;

		$config['full_tag_open'] = '<nav> <ul class="pagination">';
		$config['full_tag_close'] = '</ul> </nav>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$form = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['query'] = $this->tanaman->get_per_page($config['per_page'], $form)->result_array();

		$this->load->view('core/layout/base_app', $data);
	}

	public function search()
	{
		$search = $this->input->get('q');
		$page = $this->input->get('per_page');

		$jumlah_data = $this->tanaman->get_search($search)->num_rows();

		if (!$search) {
			$data = array(
				'title' => 'Ot Garden',
				'navigation' => 'core/element/navigation/default',
				'menu' => 'home',
				'page' => 'site/index',
				'message' => 'Mohon maaf, pencarian Anda tidak ditemukan'
			);

			$this->load->view('core/layout/base_app', $data);

		} else if ($jumlah_data < 1){
			$data = array(
				'title' => 'Ot Garden',
				'navigation' => 'core/element/navigation/default',
				'menu' => 'home',
				'page' => 'site/index',
				'message' => 'Mohon maaf, pencarian Anda tidak ditemukan'
			);

			$this->load->view('core/layout/base_app', $data);

		} else {
			$data = array(
				'title' => 'Ot Garden',
				'navigation' => 'core/element/navigation/default',
				'menu' => 'home',
				'page' => 'site/index'
			);

			$this->load->library('pagination');
			$config['page_query_string'] = TRUE;
			$config['base_url'] = base_url().'site/search?q='.$search;
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 6;

			$config['full_tag_open'] = '<nav> <ul class="pagination">';
			$config['full_tag_close'] = '</ul> </nav>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';

			$config['first_link'] = '&laquo; First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link'] = 'Last &raquo;';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$config['prev_link'] = '&laquo;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['next_link'] = '&raquo;';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			$form = $page;

			$this->pagination->initialize($config);

			$data['query'] = $this->tanaman->get_per_page_search($search, $config['per_page'], $form)->result_array();

			$this->load->view('core/layout/base_app', $data);
		}	
	}
}