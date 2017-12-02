<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

	public function insert($data)
	{
		$this->db->insert('pesanan', $data);
	}

	public function get_per_page($number, $offset)
	{
		return $this->db->get('pesanan', $number, $offset);
	}

	public function get_all()
	{
		return $this->db->get('pesanan');
	}

	public function get_one($id_pesanan)
	{
		$this->db->where('id_pesanan', $id_pesanan);
		return $this->db->get('pesanan');
	}

	public function confirm($id_pesanan)
	{
		$this->db->set('konfirmasi', 1);
		$this->db->where('id_pesanan', $id_pesanan);
		$this->db->update('pesanan');
	}
}