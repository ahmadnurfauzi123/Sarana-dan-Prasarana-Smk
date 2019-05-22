<section class="content-header">
      <h1>
        List
        <small>Barang Keluar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan Barang Keluar</li>
      </ol>
    </section>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'manajement'){
  ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('laporanpdf/barang_keluar');?>" class="btn btn-primary pull-left"><i class="fa fa-floppy-o"></i> Cetak Laporan Barang Keluar</a>
    <br/>
    <br/>
<?php
$form = new zea();
$form->init('roll');
$form->setTable('barang_keluar');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('barang_id','plaintext');
$form->addInput('tgl_keluar','plaintext');
$form->addInput('jml_keluar','plaintext');
$form->addInput('lokasi','plaintext');
$form->addInput('penerima','plaintext');
$form->form();
}else{
  msg('Untuk Mencetak Laporan Data Barang keluar, Anda Harus Login Sebagai Manajement Terlebih Dahulu','danger');
  }
  ?>