<section class="content-header">
      <h1>
        List
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
    <a href="<?php echo site_url('User/edit');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Tambah User</a>
    <br/>
    <br/>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator') {
  # code...

$form = new zea();
$form->init('roll');
$form->setTable('user');
$form->search();
$form->addInput('id','plaintext');
$form->setLabel('id','ID');
$form->addInput('nama','plaintext');
$form->addInput('username','plaintext');
$form->addInput('pass','plaintext');
$form->setlabel('pass','password');
$form->addInput('level','plaintext');
$form->setDelete(TRUE);
$form->setEdit(TRUE);
$form->form();
}else{
  msg('Anda Harus Masuk Sebagai Admin Terlebih Dahulu','danger');
}