<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Daftar Pengguna',
			'menu' => 'user',
			'page' => 'admin/index'
		);

		$this->load->view('core/layout/adminbase_app', $data);
	}
}