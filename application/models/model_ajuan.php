<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ajuan extends CI_model {

	public function getdata($key)
	{
		$this->db->where('nim',$key);
		$hasil = $this->db->get('ajuan');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('nim',$key);
		$this->db->update('ajuan',$data);
	}
	public function getinsert($data)
	{
		$this->db->insert('ajuan',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('nim',$key);
		$this->db->delete('ajuan');
	}

}
