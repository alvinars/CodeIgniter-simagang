<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	
	public function index()
	{	
		$this->model_security->getsecurity();
		$isi['content']		= 'perusahaan/tampil_dataperusahaan';
		$isi['judul']		= 'Data Kerja Praktek';
		$isi['sub_judul']	= 'Perusahaan';
		$isi['data']	= $this->db->get('perusahaan');
		$this->load->view('homepage',$isi);
	}
	public function input()
	{
		$this->model_security->getsecurity();
		$isi['content']		= 'perusahaan/form_inputperusahaan';
		$isi['judul']		= 'Kerja Praktek';
		$isi['sub_judul']	= 'Input';
		$isi['nama']		= '';
		$isi['kode']		= '';
		$isi['alamat']		= '';
		$isi['email']		= '';
		$isi['telp']		= '';
		$isi['magang']		= '';
		$this->load->view('homepage',$isi);
	}

	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']		= 'perusahaan/form_inputperusahaan';
		$isi['judul']		= 'Kerja Praktek';
		$isi['sub_judul']	= 'Edit';

		$key	= $this->uri->segment(3);
		$this->db->where('id_perusahaan',$key);
		$query	= $this->db->get('perusahaan');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$isi['nama']		= $row->nama;
				$isi['kode']		= $row->id_perusahaan;
				$isi['alamat']		= $row->alamat;
				$isi['email']		= $row->alamat;
				$isi['telp']		= $row->no_telp;
				$isi['magang']		= $row->id_magang;				
			}
		}
		else
		{
				$isi['nama']		= '';
				$isi['kode']		= '';
				$isi['alamat']		= '';
				$isi['email']		= '';
				$isi['telp']		= '';
				$isi['magang']		= '';
		}

		$this->load->view('homepage',$isi);
	}

	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('kode'); 
		$data['id_perusahaan']	= $this->input->post('kode');
		$data['nama']	= $this->input->post('nama');
		$data['alamat']	= $this->input->post('alamat');
		$data['no_telp']	= $this->input->post('telp');
		$data['email']	= $this->input->post('email');
		$data['id_magang']	= $this->input->post('magang');
		

		$this->load->model('model_perusahaan');
		$query	= $this->model_perusahaan->getdata($key);
		
		if($query->num_rows()>0)
		{
			$this->model_perusahaan->getupdate($key,$data);
			$this->session->set_flashdata('Berhasil','Data berhasil di update');
		}
		else
		{
			$this->model_perusahaan->getinsert($data);
			$this->session->set_flashdata('Berhasil','Data berhasil di simpan');
		}
		redirect('perusahaan');

	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_perusahaan');

		$key	= $this->uri->segment(3);
		$this->db->where('id_perusahaan',$key);
		$query	= $this->db->get('perusahaan');

		if($query->num_rows()>0)
		{
			$this->model_perusahaan->getdelete($key);
			$this->session->set_flashdata('Berhasil','Data berhasil di update');
		}
		redirect ('perusahaan');
	}

	
}
