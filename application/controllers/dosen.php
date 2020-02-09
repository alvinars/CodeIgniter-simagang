<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	
	public function index()
	{	
		$this->model_security->getsecurity();
		$isi['content']		= 'dosen/tampil_datadosen';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Dosen';
		$isi['data']	= $this->db->get('dosen');
		$this->load->view('homepage',$isi);
	}

	public function input()
	{
		$this->model_security->getsecurity();
		$isi['content']		= 'dosen/form_inputdosen';
		$isi['judul']		= 'Kerja Praktek';
		$isi['sub_judul']	= 'Input';	
		$isi['nip']			= '';
		$isi['nama']		= '';
		$isi['alamat']		= '';
		$isi['telp']		= '';
		$this->load->view('homepage',$isi);
	}
	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']		= 'dosen/form_inputdosen';
		$isi['judul']		= 'Kerja Praktek';
		$isi['sub_judul']	= 'Edit';

		$key	= $this->uri->segment(3);
		$this->db->where('nip',$key);
		$query	= $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$isi['nip']			= $row->nip;
				$isi['nama']		= $row->nama;
				$isi['alamat']		= $row->alamat;
				$isi['telp']		= $row->no_telp;				
			}
		}
		else
		{
			$isi['nip']			= '';
			$isi['nama']		= '';
			$isi['alamat']		= '';
			$isi['telp']		= '';
		}

		$this->load->view('homepage',$isi);
	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_dosen');

		$key	= $this->uri->segment(3);
		$this->db->where('nip',$key);
		$query	= $this->db->get('dosen');

		if($query->num_rows()>0)
		{
			$this->model_dosen->getdelete($key);
			$this->session->set_flashdata('Berhasil','Data berhasil di update');
		}
		redirect ('dosen');
	}

	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('nip'); 
		$data['nip']	= $this->input->post('nip');
		$data['nama']	= $this->input->post('nama');
		$data['alamat']	= $this->input->post('alamat');
		$data['no_telp']	= $this->input->post('telp');
		

		$this->load->model('model_dosen');
		$query	= $this->model_dosen->getdata($key);
		
		if($query->num_rows()>0)
		{
			$this->model_dosen->getupdate($key,$data);
			$this->session->set_flashdata('Berhasil','Data berhasil di update');
		}
		else
		{
			$this->model_dosen->getinsert($data);
			$this->session->set_flashdata('Berhasil','Data berhasil di simpan');
		}
		redirect('dosen');

	}

	
}
