<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model{

	
	public function getlogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query = $this->db->get('admin');

		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{				
				$sess = array('username' => $row->username,
							  'nama' 	 => $row->nama,
							  'privilege'=> $row->privilege);
				$this->session->set_userdata($sess);
			//redirect('home');
				if ($row->privilege=='user') {
					redirect('user');
				}
				elseif ($row->privilege=='admin') {
					redirect('home');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('INFO','Maaf username atau password salah');
			redirect(base_url());				
		}
	}	 
}



