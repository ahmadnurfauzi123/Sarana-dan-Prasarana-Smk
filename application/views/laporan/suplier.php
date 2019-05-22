<section class="content-header">
      <h1>
        List
        <small>Suplier</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan Suplier</li>
      </ol>
    </section>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'manajement'){
  ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('laporanpdf/suplier');?>" class="btn btn-primary pull-left"><i class="fa fa-floppy-o"></i> Cetak Laporan Data Suplier</a>
    <br/>
    <br/>
<?php
$form = new zea();
$form->init('roll');
$form->setTable('suplier');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('nama_suplier','plaintext');
$form->addInput('alamat','plaintext');
$form->addInput('telp_suplier','plaintext');
$form->form();
}else{
  msg('Untuk mencetak Data Suplier, Anda Harus Login Sebagai manajement Terlebih Dahulu','danger');
  }