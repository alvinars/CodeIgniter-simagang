<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}

	public function getlogin()
	{
		$u = $this->input->post('form-username');
		$p = $this->input->post('form-password');
		$this->load->model('model_login');
		$this->model_login->getlogin($u,$p);
	}	 
}

