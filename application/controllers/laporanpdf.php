<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    function user(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEGERI 1 BANGSRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR INVENTARIS SARANA DAN PRASARANA SMK',0,1,'C');
        $pdf->Cell(190,7,'LAPORAN DATA USER',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(8,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'ID',1,0,'C');
        $pdf->Cell(40,6,'Nama',1,0);
        $pdf->Cell(50,6,'Username',1,0);
        $pdf->Cell(28,6,'Password',1,0);
        $pdf->Cell(28,6,'Level',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('user')->result();
        foreach ($mahasiswa as $row){
        $pdf->Cell(10,6,$row->id,1,0.,'C');
        $pdf->Cell(40,6,$row->nama,1,0);
        $pdf->Cell(50,6,$row->username,1,0);
        $pdf->Cell(28,6,$row->pass,1,0);
        $pdf->Cell(28,6,$row->level,1,1);
        }
        $pdf->Output();
    }
      function suplier(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEGERI 1 BANGSRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR INVENTARIS SARANA DAN PRASARANA SMK',0,1,'C');
        $pdf->Cell(190,7,'LAPORAN DATA SUPLIER',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(8,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'ID',1,0,'C');
        $pdf->Cell(40,6,'Nama Suplier',1,0);
        $pdf->Cell(70,6,'Alamat',1,0);
        $pdf->Cell(50,6,'No HP',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('suplier')->result();
        foreach ($mahasiswa as $row){
        $pdf->Cell(10,6,$row->id,1,0.,'C');
        $pdf->Cell(40,6,$row->nama_suplier,1,0);
        $pdf->Cell(70,6,$row->alamat,1,0);
        $pdf->Cell(50,6,$row->telp_suplier,1,1);
        }
        $pdf->Output();
    }

    function barang(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEGERI 1 BANGSRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR INVENTARIS SARANA DAN PRASARANA SMK',0,1,'C');
        $pdf->Cell(190,7,'LAPORAN DATA BARANG',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(8,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(5,6,'ID',1,0);
        $pdf->Cell(22,6,'Barang',1,0);
        $pdf->Cell(75,6,'Spesifikasi',1,0);
        $pdf->Cell(28,6,'lokasi',1,0);
        $pdf->Cell(22,6,'kondisi',1,0);
        $pdf->Cell(14,6,'jumlah',1,0);
        $pdf->Cell(25,6,'sumber dana',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('barang')->result();
        foreach ($mahasiswa as $row){
        $pdf->Cell(5,6,$row->id,1,0);
        $pdf->Cell(22,6,$row->nama_barang,1,0);
        $pdf->Cell(75,6,$row->spesifikasi,1,0);
        $pdf->Cell(28,6,$row->lokasi,1,0);
        $pdf->Cell(22,6,$row->kondisi,1,0);
        $pdf->Cell(14,6,$row->jml_barang,1,0);
        $pdf->Cell(25,6,$row->sumber_dana,1,1);
        }
        $pdf->Output();
    }
    function barang_masuk(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEGERI 1 BANGSRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR INVENTARIS SARANA DAN PRASARANA SMK',0,1,'C');
        $pdf->Cell(190,7,'LAPORAN Data Barang Masuk',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(8,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'ID',1,0);
        $pdf->Cell(20,6,'ID Barang',1,0);
        $pdf->Cell(40,6,'Tanggal Masuk',1,0);
        $pdf->Cell(25,6,'Jumlah',1,0);
        $pdf->Cell(22,6,'ID Suplier',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('barang_masuk')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(10,6,$row->id,1,0);
            $pdf->Cell(20,6,$row->barang_id,1,0);
            $pdf->Cell(40,6,$row->tgl_masuk,1,0);
            $pdf->Cell(25,6,$row->jml_masuk,1,0);
            $pdf->Cell(22,6,$row->suplier_id,1,1);
        }
        $pdf->Output();
    }
    function barang_keluar(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEGERI 1 BANGSRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR INVENTARIS SARANA DAN PRASARANA SMK',0,1,'C');
        $pdf->Cell(190,7,'LAPORAN Data Barang KELUAR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(8,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'ID',1,0);
        $pdf->Cell(20,6,'ID Barang',1,0);
        $pdf->Cell(40,6,'Tanggal Keluar',1,0);
        $pdf->Cell(25,6,'Jumlah',1,0);
        $pdf->Cell(35,6,'Lokasi',1,0);
        $pdf->Cell(22,6,'Penerima',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('barang_keluar')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(10,6,$row->id,1,0);
            $pdf->Cell(20,6,$row->barang_id,1,0);
            $pdf->Cell(40,6,$row->tgl_keluar,1,0);
            $pdf->Cell(25,6,$row->jml_keluar,1,0);
            $pdf->Cell(35,6,$row->lokasi,1,0);
            $pdf->Cell(22,6,$row->penerima,1,1);
        }
        $pdf->Output();
    }
    function peminjam(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEGERI 1 BANGSRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR INVENTARIS SARANA DAN PRASARANA SMK',0,1,'C');
        $pdf->Cell(190,7,'LAPORAN DATA PEMINJAM',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(8,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'ID',1,0,'C');
        $pdf->Cell(30,6,'Peminjam',1,0);
        $pdf->Cell(40,6,'Tanggal Pinjam',1,0);
        $pdf->Cell(20,6,'ID Barang',1,0);
        $pdf->Cell(30,6,'Jumlah Barang',1,0);
        $pdf->Cell(40,6,'Tanggal Kembali',1,0);
        $pdf->Cell(20,6,'Kondisi',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('peminjam')->result();
        foreach ($mahasiswa as $row){
        $pdf->Cell(10,6,$row->id,1,0.,'C');
        $pdf->Cell(30,6,$row->peminjam,1,0);
        $pdf->Cell(40,6,$row->tgl_pinjam,1,0);
        $pdf->Cell(20,6,$row->barang_id,1,0);
        $pdf->Cell(30,6,$row->jml_barang,1,0);
        $pdf->Cell(40,6,$row->tgl_kembali,1,0);
        $pdf->Cell(20,6,$row->kondisi,1,1);
        }
        $pdf->Output();
    }
}
 