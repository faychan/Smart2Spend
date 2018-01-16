<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Incoming extends CI_Controller {

	public function index()
	{
		$this->load->view('incoming_view');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('incoming_model');
	}

	public function send(){
			if($this->input->post('send')){
				$this->form_validation->set_rules('user_id', 'Username', 'trim|required');
				$this->form_validation->set_rules('child_id', 'ID Anak', 'trim|required');
				$this->form_validation->set_rules('amount', 'Jumlah', 'trim|required');
				$this->form_validation->set_rules('detail', 'Detail', 'trim|required');
				$this->form_validation->set_rules('picture', 'URL Gambar', 'trim|required');
				
				$type = 'incoming';
			} if ($this->form_validation->run() == TRUE) {
				if($this->incoming_model->insert()==TRUE){
					$data['notif'] = 'Penyetoran Berhasil!';
					$this->load->view('incoming_view',$data);
				}
			} else { //failed
				$data['notif'] = validation_errors();
				$this->load->view('incoming_view', $data);
			}
		}
}

/* End of file incoming.php */
/* Location: ./application/controllers/incoming.php */