<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public function login($email, $password){
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get('users')->row_array();
	}
	
}