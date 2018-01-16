<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

	public function index()
	{
		$this->load->view('reg_view');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('reg_model');
	}

	public function reg(){
			if($this->input->post('reg')){
				$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[50]');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[50]');
				$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			} if ($this->form_validation->run() == TRUE) {
				if($this->reg_model->insert()==TRUE){
					$data['notif'] = 'Pendaftaran Berhasil!';
					$this->load->view('reg_view',$data);
				}
			} else { //failed
				$data['notif'] = validation_errors();
				$this->load->view('reg_view', $data);
			}
		}


}

/* End of file reg.php */
/* Location: ./application/controllers/reg.php */