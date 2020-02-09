<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	
	public function index()
	{
		$isi['content'] = 'guest/guestcontent';
		$isi['judul'] = 'Home';
		$isi['sub_judul'] = '';		
		$this->load->view('guest/guesthome',$isi);
	}

	public function rekap()
	{		 		
		$isi['content']		= 'guest/tampil_datarekap';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'rekap';
		$isi['data']	= $this->db->get('view_magang');
		$this->load->view('guest/guesthome',$isi);		
	}

	public function mahasiswa()
	{		 	
		
		$isi['content']		= 'guest/tampil_guestmahasiswa';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Mahasiswa';
		$isi['data']	= $this->db->get('mahasiswa');
		$this->load->view('guest/guesthome',$isi);
		//force_download('assets/lala.php',null);
	}
	public function dosen()
	{		 	
		
		$isi['content']		= 'guest/tampil_guestdosen';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Dosen';
		$isi['data']	= $this->db->get('dosen');
		$this->load->view('guest/guesthome',$isi);
		
	}
	public function perusahaan()
	{		 			
		$isi['content']		= 'guest/tampil_guestperusahaan';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Perusahaan';
		$isi['data']	= $this->db->get('perusahaan');
		$this->load->view('guest/guesthome',$isi);
		
	}


	 
}

