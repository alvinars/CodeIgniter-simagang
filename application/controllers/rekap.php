<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('download');
	}
	
	public function index()
	{	
		$this->model_security->getsecurity();
		$isi['content']		= 'rekap/tampil_datarekap';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Rekap Kerja Praktek';
		$isi['data']	= $this->db->get('view_magang');
		$this->load->view('homepage',$isi);
		force_download('files/lala.png',null);
	}
	public function download1()
	{	
		force_download('files/lala.png',null);
	}


}