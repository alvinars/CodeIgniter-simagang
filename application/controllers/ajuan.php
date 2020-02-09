<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajuan extends CI_Controller {
	
	public function index()
	{		 	

		$this->model_security->getsecurity();
		$isi['content']		= 'user/userajuan';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Pengajuan';
		$isi['data']	= $this->db->get('mahasiswa');
		$this->load->view('user/homeuser',$isi);	
	}
	
	public function data()
	{		 	

		
		$isi['content']		= 'tampil_dataajuan';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Pengajuan';
		$isi['data']	= $this->db->get('ajuan');
		$this->load->view('homepage',$isi);	
	}

	public function input()
	{
		$this->model_security->getsecurity();
		$isi['content']		= 'mahasiswa/form_inputmahasiswa';
		$isi['judul']		= 'Kerja Praktek';
		$isi['sub_judul']	= 'Input';	
		$isi['nim']			= '';
		$isi['nama']		= '';
		$isi['alamat']		= '';
		$isi['perusahaan']	= '';
		$isi['email']		= '';
		$isi['kode_magang']	= '';
		$isi['judul']		= '';
		$isi['kode_dosen']	= '';
		$this->load->view('user/homeuser',$isi);

	}
	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('nim'); 
		$data['nim']			= $this->input->post('nim');
		$data['nama']			= $this->input->post('nama');
		$data['alamat']			= $this->input->post('alamat');
		$data['perusahaan']	= $this->input->post('perusahaan');
		$data['email']			= $this->input->post('email');
		$data['magang']		= $this->input->post('kode_magang');
		$data['judul']			= $this->input->post('judul');
		$data['dosbing']			= $this->input->post('kode_dosen');

		$this->load->model('model_ajuan');
		$query	= $this->model_ajuan->getdata($key);
		
		if($query->num_rows()>0)
		{
			$this->model_ajuan->getupdate($key,$data);
			$this->session->set_flashdata('Berhasil','Data berhasil di update');
		}
		else
		{
			$this->model_ajuan->getinsert($data);
			$this->session->set_flashdata('Berhasil','Data berhasil di simpan');
		}
		redirect('user');

	}

	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']		= 'mahasiswa/form_inputmahasiswa';
		$isi['judul']		= 'Kerja Praktek';
		$isi['sub_judul']	= 'Edit';

		$key	= $this->uri->segment(3);
		$this->db->where('nim',$key);
		$query	= $this->db->get('mahasiswa');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$isi['nim']				= $row->nim;
				$isi['nama']			= $row->nama;
				$isi['alamat']			= $row->alamat;
				$isi['perusahaan']		= $row->id_perusahaan;
				$isi['email']			= $row->email;
				$isi['kode_magang']		= $row->id_magang;
				$isi['judul']			= $row->judul;
				$isi['kode_dosen']		= $row->nip;

			}
		}
		else
		{
			$isi['nim']			= '';
			$isi['nama']		= '';
			$isi['alamat']		= '';
			$isi['perusahaan']	= '';
			$isi['email']		= '';
			$isi['kode_magang']	= '';
			$isi['judul']		= '';
			$isi['kode_dosen']	= '';
		}

		$this->load->view('homepage',$isi);
	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_mahasiswa');

		$key	= $this->uri->segment(3);
		$this->db->where('nim',$key);
		$query	= $this->db->get('mahasiswa');

		if($query->num_rows()>0)
		{
			$this->model_mahasiswa->getdelete($key);
			$this->session->set_flashdata('Berhasil','Data berhasil di update');
		}
		redirect ('mahasiswa');
	}

	
}
