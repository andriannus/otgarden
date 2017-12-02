<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');

		$this->load->model('order_model', 'order');
	}

	public function view($id_pesanan)
	{
		$query = $this->order->get_one($id_pesanan)->row();
		$data = array(
			'title' => 'Detail Pesanan',
			'navigation' => 'core/element/navigation/default',
			'menu' => ' ',
			'page' => 'order/view',
			'query' => $query
		);

		$this->load->view('core/layout/base_app', $data);
	}

	public function add()
	{
		$tanggal = date('Y-m-d H:i:s');
		$data = array(
			'id_pesanan' => random_string('alnum', 10),
			'barang' => $this->input->post('barang'),
			'nama_depan' => $this->input->post('nama_depan'),
			'nama_belakang' => $this->input->post('nama_belakang'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'biaya' => $this->input->post('biaya'),
			'tanggal' => $tanggal
		);

		$id_pesanan = $data['id_pesanan'];

		$this->order->insert($data);
		$this->cart->destroy();
		redirect('order/view/'.$id_pesanan);
	}

	public function search()
	{
		$data = array(
			'title' => 'Detail Pesanan',
			'navigation' => 'core/element/navigation/default',
			'menu' => 'search',
			'page' => 'order/search'
		);

		$this->load->view('core/layout/base_app', $data);
	}

	public function search_process()
	{
		$id_pesanan = $this->input->post('id_pesanan');

		$this->view($id_pesanan);
	}

	public function check($id_pesanan)
	{
		$query = $this->order->get_one($id_pesanan)->row();
		$check = $this->order->get_one($id_pesanan)->num_rows();

		if ($check > 0) {
			$data = array(
				'title' => 'Detail Pesanan',
				'navigation' => 'core/element/navigation/default',
				'menu' => 'home',
				'page' => 'order/view',
				'query' => $query
			);

			$this->load->view('core/layout/base_app', $data);
		} else {
			echo "Tidak ditemukan";
		}
	}
}