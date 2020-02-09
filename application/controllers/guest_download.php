<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest_download extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('download');
	}
	public function index()
	{		 			
		$isi['content']		= 'guest/tampil_guestdownload';
		$isi['judul']		= 'Data Pendukung';
		$isi['sub_judul']	= 'Unduh Data';		
		$this->load->view('guest/guesthome',$isi);	
	}
}