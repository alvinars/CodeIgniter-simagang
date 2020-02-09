<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'DATA REKAP KERJA PRAKTEK',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'TEKNIK SISTEM KOMPUTER UNDIP 2018',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(20,6,'NAMA',1,0);
        $pdf->Cell(16,6,'NIM',1,0);        
        $pdf->Cell(57,6,'JUDUL',1,0);
        $pdf->Cell(25,6,'LOKASI',1,0);
        $pdf->Cell(20,6,'TGL MULAI',1,0);
        $pdf->Cell(20,6,'TGL SELESAI',1,0);
        $pdf->Cell(33,6,'DOSBING',1,1);
        $pdf->SetFont('Arial','',7);
        $mahasiswa = $this->db->get('view_magang')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->nama,1,0);
            $pdf->Cell(16,6,$row->nim,1,0);                        
            $pdf->Cell(57,6,$row->judul,1,0);
            $pdf->Cell(25,6,$row->nama_perusahaan,1,0);
            $pdf->Cell(20,6,$row->tgl_mulai,1,0);
            $pdf->Cell(20,6,$row->tgl_selesai,1,0);
            $pdf->Cell(33,6,$row->nama_dosen,1,1);
        }
        $pdf->Output();
    }
}