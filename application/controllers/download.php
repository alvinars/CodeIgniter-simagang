<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	public function index(){		
		$this->load->view('tampil_datapendukung');
	}

	public function download1(){				
		force_download('assets/files/Form_Nilai_KP.doc',NULL);
	}
	public function download2(){				
		force_download('assets/files/Form Nilai Seminar (KP-B3).doc',NULL);
	}
	public function download3(){				
		force_download('assets/files/Form Permohonan KP (KP-A1).doc',NULL);
	}
	public function download4(){				
		force_download('assets/files/Form Presensi & Nilai Lapangan (KP-A2)',NULL);
	}
	public function download5(){				
		force_download('assets/files/Form_Nilai_KP.doc',NULL);
	}
	public function download6(){				
		force_download('assets/files/Form_Nilai_KP.doc',NULL);
	}
	public function download7(){				
		force_download('assets/files/Form_Nilai_KP.doc',NULL);
	}
	public function download8(){				
		force_download('assets/files/Form_Nilai_KP.doc',NULL);
	}
		


}