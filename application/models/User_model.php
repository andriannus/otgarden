<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function check_login($where)
	{
		return $this->db->get_where('user', $where);
	}
}