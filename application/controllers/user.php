<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'user/usercontent';
		$isi['judul'] = 'Home';
		$isi['sub_judul'] = '';
		$this->load->view('user/homeuser',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(''));
	}

	public function rekap()
	{		 		
		$isi['content']		= 'user/tampil_datarekap';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'rekap';
		$isi['data']	= $this->db->get('view_magang');
		$this->load->view('user/homeuser',$isi);		
	}

	public function mahasiswa()
	{		 	
		
		$isi['content']		= 'user/tampil_guestmahasiswa';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Mahasiswa';
		$isi['data']	= $this->db->get('mahasiswa');
		$this->load->view('user/homeuser',$isi);
		//force_download('assets/lala.php',null);
	}
	public function dosen()
	{		 	
		
		$isi['content']		= 'user/tampil_guestdosen';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Dosen';
		$isi['data']	= $this->db->get('dosen');
		$this->load->view('user/homeuser',$isi);
		
	}
	public function perusahaan()
	{		 			
		$isi['content']		= 'user/tampil_guestperusahaan';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Perusahaan';
		$isi['data']	= $this->db->get('perusahaan');
		$this->load->view('user/homeuser',$isi);
		
	}

	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('nim'); 
		$data['nim']			= $this->input->post('nim');
		$data['nama']			= $this->input->post('nama');
		$data['alamat']			= $this->input->post('alamat');
		$data['id_perusahaan']	= $this->input->post('perusahaan');
		$data['email']			= $this->input->post('email');
		$data['id_magang']		= $this->input->post('kode_magang');
		$data['judul']			= $this->input->post('judul');
		$data['nip']			= $this->input->post('kode_dosen');

		$this->load->model('model_mahasiswa');
		$query	= $this->model_mahasiswa->getdata($key);
		
		if($query->num_rows()>0)
		{
			$this->model_mahasiswa->getupdate($key,$data);
			$this->session->set_flashdata('Berhasil','Data berhasil di update');
		}
		else
		{
			$this->model_mahasiswa->getinsert($data);
			$this->session->set_flashdata('Berhasil','Data berhasil di simpan');
		}
		redirect('mahasiswa');

	}

}
