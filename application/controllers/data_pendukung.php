<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pendukung extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('download');
	}
	public function index()
	{		 	

		$this->model_security->getsecurity();
		$isi['content']		= 'data_pendukung/tampil_datapendukung';
		$isi['judul']		= 'Data Pendukung';
		$isi['sub_judul']	= 'Unduh Data';		
		$this->load->view('homepage',$isi);	
	}
	public function user()
	{		 	

		$this->model_security->getsecurity();
		$isi['content']		= 'data_pendukung/tampil_datapendukung';
		$isi['judul']		= 'Data Pendukung';
		$isi['sub_judul']	= 'Unduh Data';		
		$this->load->view('user/homeuser',$isi);	
	}
}