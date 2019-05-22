<section class="content-header">
      <h1>
        List
        <small>barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('barang/edit');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Tambah Barang</a>
    <br/>
    <br/>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator') {

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
$form->setLabel('jml_barang','Jumlah_barang');
$form->addInput('sumber_dana','plaintext');
$form->setDelete(TRUE);
$form->setEdit(TRUE);
$form->form();
}else{
  msg('Untuk Melihat Data Barang, Anda Harus Login Sebagai Admin / Manajement Terlebih Dahulu','danger');
}