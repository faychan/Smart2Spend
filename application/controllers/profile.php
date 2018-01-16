<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('profile_model');
		$this->load->library('session');
		$this->load->view('profile_view');
	}

	public function index(){
		$data['profiles'] = $this->profile_model->getpro();
		$this->load->view('profile_view', $data);
	}

	
}