<section class="content-header">
      <h1>
        List
        <small>Barang Masuk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan Barang Masuk</li>
      </ol>
    </section>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'manajement'){
  ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('laporanpdf/barang_masuk');?>" class="btn btn-primary pull-left"><i class="fa fa-floppy-o"></i> Cetak Laporan Barang Masuk</a>
    <br/>
    <br/>
<?php
$form = new zea();
$form->init('roll');
$form->setTable('barang_masuk');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('barang_id','plaintext');
$form->addInput('tgl_masuk','plaintext');
$form->addInput('jml_masuk','plaintext');
$form->addInput('suplier_id','plaintext');
$form->form();
}else{
  msg('Untuk Mencetak Laporan Data Barang Masuk, Anda Harus Login Sebagai Manajement Terlebih Dahulu','danger');
}
?>