<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('login_model');
	}

	public function index(){
				//var_dump($_SESSION);
//		if($this->session->userdata('logged_in') == TRUE){
			$data['users'] = $this->login_model->getregda();
			$this->load->view('laporan_view', $data);
//		}else{
//			redirect('reg');
//		}
	}

}

/* End of file laporan.php */
/* Location: ./application/controllers/laporan.php */