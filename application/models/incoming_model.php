<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Incoming_model extends CI_Model {

	public function insert(){
	if($this -> input -> post('incoming')){
		$data = array(
		'user_id'		=> $this->input->post('user_id'),
		'child_id'		=> $this->input->post('child_id'),
		'amount'		=> $this->input->post('amount'),
		'detail'		=> $this->input->post('detail'), 
		'picture'		=> $this->input->post('picture')

	);
		
		$this->db->insert('incoming_transactions', $data);

	if($this->db->affected_rows()>0){
		return TRUE;
	} else{
		return FALSE;
		}
	}else{
		$data = array(
		'user_id'		=> $this->input->post('user_id'),
		'amount'		=> $this->input->post('amount'),
		'detail'		=> $this->input->post('detail'), 
		'picture'		=> $this->input->post('picture')

	);
		
		$this->db->insert('outgoing_transactions', $data);

	if($this->db->affected_rows()>0){
		return TRUE;
	} else{
		return FALSE;
		}
	}
}
}
/* End of file incoming_model.php */
/* Location: ./application/models/incoming_model.php */