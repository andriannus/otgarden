<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanaman_model extends CI_Model {

	public function get_per_page($number, $offset)
	{
		return $this->db->get('tanaman', $number, $offset);
	}

	public function get_search($query)
	{
		$this->db->like('nama', $query);
		return $this->db->get('tanaman');
	}

	public function get_per_page_search($search, $number, $offset)
	{
		$this->db->like('nama', $search);
		return $this->db->get('tanaman', $number, $offset);
	}

	public function get_all()
	{
		return $this->db->get('tanaman');
	}

	public function get_one($slug)
	{
		$this->db->where('slug', $slug);
		return $this->db->get('tanaman');
	}

	public function insert($data)
	{
		$this->db->insert('tanaman', $data);
	}

	public function update($slug, $data)
	{
		$this->db->where('slug', $slug);
		$this->db->update('tanaman', $data);
	}

	public function delete($slug)
	{
		$this->db->where('slug', $slug);
		$this->db->delete('tanaman');
	}
}