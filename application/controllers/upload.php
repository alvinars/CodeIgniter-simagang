<?php 

class Upload extends CI_Controller{

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}

	public function index(){

		$this->model_security->getsecurity();
		$isi['content']		= 'tampil_upload';
		$isi['judul']		= 'Upload Data';
		$isi['sub_judul']	= 'Upload';
				
		$this->load->view('user/homeuser', $isi);		
	}

	public function aksi_upload(){

		$config['upload_path']          = './assets/fileupload';
		$config['allowed_types']        = 'doc|pdf';
		$config['max_size']             = 90000;
		$isi['content']		= 'tampil_upload';
		$isi['judul']		= 'Upload Data';
		$isi['sub_judul']	= 'Upload';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('user/homeuser', $isi);
			$this->load->view('user/homeuser', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('user/homeuser', $isi);
			$this->load->view('user/homeuser', $data);			
			
		}
	}
	
}