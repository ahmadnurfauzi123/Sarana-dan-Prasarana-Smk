<section class="content-header">
      <h1>
        Form
        <small>Suplier</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Suplier</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php
if ($_SESSION['user']['level'] == 'administrator'){
$form = new zea();
$form->init('edit');
$form->setHeading('Suplier');
$form->setTable('suplier');
$form->setId(@intval($_GET['id']));
$form->addInput('nama_suplier','text');
$form->setAttribute('nama_suplier','required');
$form->addInput('alamat','text');
$form->setAttribute('alamat','required');
$form->addInput('telp_suplier','text');
$form->setType('telp_suplier','number');
$form->form();
}else{
  msg('Untuk Melihat Form Suplier, Anda Harus Login Sebagai Admin Terlebih Dahulu','danger');
  }