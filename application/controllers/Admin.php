<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tanaman_model', 'tanaman');
		$this->load->model('user_model', 'user');
		$this->load->model('order_model', 'order');

		if ($this->session->userdata('login') != true) {
			redirect('site/login');
		}
	}

	public function index()
	{
		$data = array(
			'title' => 'Administrator | Ot Garden',
			'menu' => 'home',
			'page' => 'admin/index'
		);

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function plant()
	{
		$data = array(
			'title' => 'Daftar Tanaman',
			'menu' => 'plant',
			'page' => 'admin/plant'
		);

		$jumlah_data = $this->tanaman->get_all()->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'admin/plant/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

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


		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function user()
	{
		$data = array(
			'title' => 'Daftar Pengguna',
			'menu' => 'user',
			'page' => 'admin/index'
		);

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function order()
	{
		$data = array(
			'title' => 'Daftar Pesanan',
			'menu' => 'order',
			'page' => 'admin/order'
		);

		$jumlah_data = $this->order->get_all()->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'admin/order/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

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

		$data['query'] = $this->order->get_per_page($config['per_page'], $form)->result_array();


		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function confirm_order($id_pesanan)
	{
		$this->order->confirm($id_pesanan);
		redirect('admin/order');
	}
}