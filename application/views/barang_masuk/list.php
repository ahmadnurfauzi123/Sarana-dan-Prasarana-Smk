<section class="content-header">
      <h1>
        List
        <small>Barang Masuk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang Masuk</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('barang_masuk/edit');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Tambah Barang Masuk</a>
    <br/>
    <br/>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator'){
$form = new zea();
$form->init('roll');
$form->setTable('barang_masuk');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('barang_id','plaintext');
$form->setLabel('barang_id','id_barang');
$form->addInput('tgl_masuk','plaintext');
$form->addInput('jml_masuk','plaintext');
$form->addInput('suplier_id','plaintext');
$form->setLabel('suplier_id','id_suplier');
$form->form();
}else{
  msg('Anda Harus Masuk Sebagai Admin Terlebih Dahulu Untuk Membuka List Barang Masuk','danger');
}