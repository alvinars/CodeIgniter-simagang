<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'maincontent';
		$isi['judul'] = 'Home';
		$isi['sub_judul'] = '';
		$this->load->view('homepage',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}
