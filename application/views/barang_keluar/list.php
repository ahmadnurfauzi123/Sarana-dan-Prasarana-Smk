<section class="content-header">
      <h1>
        List
        <small>Barang Keluar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang Keluar</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('barang_keluar/edit');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Tambah Barang Keluar</a>
    <br/>
    <br/>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator'){
$form = new zea();
$form->init('roll');
$form->setTable('barang_keluar');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('barang_id','plaintext');
$form->setLabel('barang_id','id_barang');
$form->addInput('tgl_keluar','plaintext');
$form->addInput('jml_keluar','plaintext');
$form->addInput('lokasi','plaintext');
$form->addInput('penerima','plaintext');
$form->setDelete(TRUE);
$form->setEdit(TRUE);
$form->form();
}else{
  msg('Untuk Melihat Data Barang Keluar, Anda Harus Login Sebagai Admin Terlebih Dahulu','danger');
  }