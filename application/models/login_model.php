<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function log(){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$query = $this->db->where('username', $username)->where('password', $password)->get('users');

			if ($query->num_rows() > 0) {
				$this->session->set_userdata(array(
						'username' => $username,
						'logged_in' => TRUE
					));
				return TRUE;
			} else {
				return FALSE;
			}
		}

	public function getregda(){
			$uname = $this -> session -> userdata('username');
			$uidr = $this -> db -> get_where("users",array("username" => $uname));
			if($uidr -> num_rows() > 0){
				$uid = $uidr -> result()[0] -> user_id;
			return $this->db->query("SELECT id,child_id as user_id,amount,detail,picture,date,type FROM incoming_transactions UNION SELECT * FROM outgoing_transactions WHERE user_id = ".$uid." ORDER BY(date) DESC")->result();
		}else{
			return [];
		}
	
	}
}
