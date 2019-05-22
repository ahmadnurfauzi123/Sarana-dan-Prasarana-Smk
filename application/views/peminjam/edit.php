<section class="content-header">
      <h1>
        Form
        <small>Pinjam Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pinjam Barang</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator' || $_SESSION['user']['level'] == 'peminjam') {

$form=new zea();
  $form->init('edit');
  $form->setTable('peminjam');
  $form->setHeading('Pinjam Barang');
  $form->setId(@intval($_GET['id']));
  $form->addInput('peminjam','text');
  $form->setValue('peminjam',$_SESSION['user']['nama']);
  $form->setAttribute('peminjam','required');
  $form->setAttribute('tgl_pinjam','required');
  $form->addInput('barang_id','dropdown');
  $form->tableOptions('barang_id','barang','id','nama_barang');
  $form->setLabel('barang_id','Nama Barang');
  $form->setAttribute('barang_id','required');
  $form->addInput('jml_barang','text');
  $form->setType('jml_barang','number');
  $form->setAttribute('jml_barang',['min'=>'0']);
  $form->setLabel('jml_barang','Jumlah Barang');
  $form->setAttribute('jml_barang','required');
  $form->addInput('tgl_kembali','text');
  $form->setType('tgl_kembali','date');
  $form->setLabel('tgl_kembali','Tgl Kembali');
   $form->addInput('kondisi','dropdown');
  $form->setOptions('kondisi',['Baru'=>'Baru','Layak'=>'Layak','Rusak'=>'Rusak']);
  $form->setAttribute('kondisi','required');
  $form->form(); 
}else{
  msg('Untuk Melihat Data Barang, Anda Harus Login Sebagai Admin / Manajement Terlebih Dahulu','danger');
}