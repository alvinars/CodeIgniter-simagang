<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dosen extends CI_model {

	public function getdata($key)
	{
		$this->db->where('nip',$key);
		$hasil = $this->db->get('dosen');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('nip',$key);
		$this->db->update('dosen',$data);
	}
	public function getinsert($data)
	{
		$this->db->insert('dosen',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('nip',$key);
		$this->db->delete('dosen');
	}

}
