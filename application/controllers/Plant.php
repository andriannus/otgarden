<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plant extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tanaman_model', 'tanaman');
	}

	public function add()
	{
		$data = array(
			'title' => 'Tambah tanaman | Ot Garden',
			'menu' => 'plant',
			'page' => 'plant/add'
		);

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function add_process()
	{
		$config['upload_path'] = './asset/pictures/upload/plant';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1024';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('picture')) {
			$picture = $this->upload->data();

			$data = array(
				'gambar' => $picture['file_name'],
				'slug' => $this->input->post('slug'),
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'deskripsi' => $this->input->post('deskripsi')
			);

			$this->tanaman->insert($data);
			chmod($picture[full_path], 0777);
			redirect('admin/plant');

		} else {
			echo $this->upload->display_errors();
		}
	}

	public function view($slug)
	{
		$query = $this->tanaman->get_one($slug)->row();
		$data = array(
			'title' => $query->nama.' - Ot Garden',
			'navigation' => 'core/element/navigation/default',
			'menu' => 'home',
			'page' => 'plant/view',
			'query' => $query
		);

		$this->load->view('core/layout/base_app', $data);
	}

	public function update($slug)
	{
		$data = array(
			'title' => 'Ubah tanaman | Ot Garden',
			'menu' => 'plant',
			'page' => 'plant/edit',
			'query' => $this->tanaman->get_one($slug)->row()
		);

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function update_process()
	{
		$slug = $this->input->post('slug');

		$picture_before = $this->tanaman->get_one($slug)->row();
		$path = './asset/pictures/upload/plant/'.$picture_before->gambar;

		unlink($path);

		$config['upload_path'] = './asset/pictures/upload/plant';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1024';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('picture')) {
			$picture = $this->upload->data();

			$data = array(
				'gambar' => $picture['file_name'],
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'deskripsi' => $this->input->post('deskripsi')
			);

			$this->tanaman->update($slug, $data);
			chmod($picture['full_path'], 0777);

			redirect('admin/plant');

		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'deskripsi' => $this->input->post('deskripsi')
			);

			$this->tanaman->update($slug, $data);
			redirect('admin/plant');
		}
	}

	public function delete($slug)
	{
		$picture = $this->tanaman->get_one($slug)->row();
		$path = './asset/pictures/upload/plant/'.$picture->gambar;

		if (!empty($picture->gambar)) {
			unlink($path);
		}

		$this->tanaman->delete($slug);
		echo json_encode(array('status' => true));
	}
}