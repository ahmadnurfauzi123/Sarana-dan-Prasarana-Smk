<section class="content-header">
      <h1>
        List
        <small>Pinjam Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pinjam Barang</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('peminjam/edit');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Tambah Pinjam Barang</a>
    <br/>
    <br/>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator') {
$form = new zea();
$form->init('roll');
$form->setTable('peminjam');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('peminjam','plaintext');
$form->addInput('tgl_pinjam','plaintext');
$form->addInput('barang_id','plaintext');
$form->setLabel('barang_id','id_barang');
$form->addInput('jml_barang','plaintext');
$form->addInput('tgl_kembali','plaintext');
$form->addInput('kondisi','plaintext');

$form->setDelete(TRUE);
$form->setEdit(TRUE);
$form->form();
}else{
  msg('Anda Harus Masuk Sebagai Admin / Peminjam Terlebih Dahulu Untuk Membuka form Peminjaman','danger');
}