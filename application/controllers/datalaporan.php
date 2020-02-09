<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datalaporan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('model_datalaporan');
    }


    public function input(){

      $isi['content']   = 'tampil_upload';
      $isi['judul']   = 'Upload Data';
      $isi['sub_judul'] = 'Upload';
      $this->load->view('user/homeuser',$isi);

    }
    public function proses_input(){
      //membuat konfigurasi
      $config = [
        'upload_path' => './assets/fileupload/',
        'allowed_types' => 'pdf|doc|png|jpg',
    
      ];
      $isi['content']   = 'tampil_upload';
      $isi['judul']   = 'Upload Data';
      $isi['sub_judul'] = 'Upload';


      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          $isi['content']   = 'tampil_upload';
          $isi['judul']   = 'Upload Data';
          $isi['sub_judul'] = 'Upload';
          $isi = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('user/homeuser', $isi);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['laporan' => $file['file_name'],
           'id' => set_value('nim'),
           'nama' => set_value('nama')
         ];
          $this->model_datalaporan->input($data); //memasukan data ke database
          redirect('upload'); //mengalihkan halaman
      }
    }
    
}
