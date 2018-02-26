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
			'page' => 'admin/plant',
			'query' => $this->tanaman->get_all()->result_array()
		);

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
			'page' => 'admin/order',
			'query' => $this->order->get_all()->result_array()
		);

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function confirm_order($id_pesanan)
	{
		$this->order->confirm($id_pesanan);
		redirect('admin/order');
	}
}