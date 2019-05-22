<section class="content-header">
      <h1>
        List
        <small>barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan Barang</li>
      </ol>
    </section>
    <?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'manajement') {
?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('laporanpdf/barang');?>" class="btn btn-primary pull-left"><i class="fa fa-floppy-o"></i> Cetak Laporan Data Barang</a>
    <br/>
    <br/>
<?php
$form = new zea();
$form->init('roll');
$form->setTable('barang');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('nama_barang','plaintext');
$form->setLabel('nama_barang','Nama Barang');
$form->addInput('spesifikasi','plaintext');
$form->addInput('lokasi','plaintext');
$form->addInput('kondisi','plaintext');
$form->addInput('jml_barang','plaintext');
$form->addInput('sumber_dana','plaintext');
$form->form();
}else{
  msg('Untuk Mencetak Laporan Data Barang, Anda Harus Login Sebagai Manajement Terlebih Dahulu','danger');
}?>