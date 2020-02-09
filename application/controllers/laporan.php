<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	
	public function index()
	{	
		$this->model_security->getsecurity();
		
		$isi['data']	= $this->db->get('upload');		
      	$isi['content']   = 'tampil_laporan';
      	$isi['judul']   = 'Upload Data';
      	$isi['sub_judul'] = 'Upload';
      	$this->load->view('homepage',$isi);
    }

}