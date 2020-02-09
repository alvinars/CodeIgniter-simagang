<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_perusahaan extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_perusahaan',$key);
		$hasil = $this->db->get('perusahaan');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('id_perusahaan',$key);
		$this->db->update('perusahaan',$data);
	}
	public function getinsert($data)
	{
		$this->db->insert('perusahaan',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('id_perusahaan',$key);
		$this->db->delete('perusahaan');
	}


}
