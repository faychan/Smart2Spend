<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	
	public function getpro(){
			$uname = $this -> session -> userdata('username');
			$uidr = $this -> db -> get_where("profiles",array("user_id" => $uname));
			if($uidr -> num_rows() > 0){
				$uid = $uidr -> result()[0] -> user_id;
			return $this->db->query("SELECT user_id, name, allowance, information, invite_code FROM profiles WHERE user_id = ".$uid."")->result();
		}else{
			return [];
		}
	
	}

}

/* End of file profile_model.php */
/* Location: ./application/models/profile_model.php */