<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg_model extends CI_Model {

	public function insert(){
	$data = array(
		'user_id'				=> NULL,
		'username'			=> $this->input->post('username'),
		'password' 			=> md5($this->input->post('password')),
		'email' 			=> $this->input->post('email'),	
		'is_parent' 		=> $this->input->post('is_parent'),	
	);

		$this->db->insert('users', $data);

	if($this->db->affected_rows()>0){
		return TRUE;
	} else{
		return FALSE;
		}
	}

}