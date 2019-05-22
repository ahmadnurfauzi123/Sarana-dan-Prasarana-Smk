<section class="content-header">
      <h1>
        Form
        <small>Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator' || $_SESSION['user']['level'] == 'manajement') {

$form = new zea();
$form->init('edit');
$form->setTable('barang');
$form->setHeading('Barang');
$form->setId(@intval($_GET['id']));
$form->addInput('nama_barang','text');
$form->setLabel('nama_barang','Nama Barang');
$form->setAttribute('nama_barang','required');
$form->addInput('spesifikasi','text');
$form->setAttribute('spesifikasi','required');
$form->addInput('lokasi','dropdown');
$form->setOptions('lokasi',['Lab 3'=>'Lab 3','Lab 4'=>'Lab 4','Ruang 12 RPL2'=>'Ruang 12 RPL2','Ruang 12 RPL1'=>'Ruang 12 RPL1']);
$form->addInput('kondisi','dropdown');
$form->setOptions('kondisi',['Baru'=>'Baru','Layak'=>'Layak','Rusak'=>'Rusak']);
$form->addInput('jml_barang','text');
$form->setType('jml_barang','number');
$form->setLabel('jml_barang','jumlah_barang');
$form->setAttribute('jml_barang','required');
$form->addInput('sumber_dana','text');
$form->setAttribute('sumber_dana','required');


$form->form();
}else{
  msg('Untuk Melihat Data Barang, Anda Harus Login Sebagai Admin / Manajement Terlebih Dahulu','danger');
}