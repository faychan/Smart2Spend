<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			redirect(base_url('index.php/laporan'));
		}else{
			redirect('index.php');
		}
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('login_model');
		$this->load->library('session');
	}


	

	public function login(){
		if($this->input->post('log')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');

			if($this->form_validation->run() == TRUE){
				if($this->login_model->log() == TRUE){
					redirect(base_url('index.php/laporan'),$data);
				}else{
					$data['notif'] = 'Login gagal';
					$this->load->view('reg_view', $data);
				}
			}else{
				$data['notif'] = validation_errors();
				$this->load->view('reg_view', $data);
			}
		}
	}

	public function logout(){
		$data = array(
			'username'	=> '',
			'logged_in'	=>	FALSE
			);

		$this->session->sess_destroy();
		redirect(base_url('index.php/admin'));
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */