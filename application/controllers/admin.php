<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('landing_view');
	}
	public function __construct()
	{
		parent::__construct();	
	}
	public function laporan(){
		$this->load->view('laporan_view');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */