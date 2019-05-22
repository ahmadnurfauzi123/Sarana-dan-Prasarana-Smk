<section class="content-header">
      <h1>
        List
        <small>Suplier</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Suplier</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('suplier/edit');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Tambah Suplier</a>
    <br/>
    <br/>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator'){
$form = new zea();
$form->init('roll');
$form->setTable('suplier');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('nama_suplier','plaintext');
$form->addInput('alamat','plaintext');
$form->addInput('telp_suplier','plaintext');
$form->setDelete(TRUE);
$form->setEdit(TRUE);
$form->form();
}else{
  msg('Untuk Melihat Data Suplier, Anda Harus Login Sebagai Admin Terlebih Dahulu','danger');
  }