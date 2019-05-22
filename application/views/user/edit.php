<section class="content-header">
      <h1>
        Form
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['user']['level'] == 'administrator') {
$form = new zea();
$form->init('edit');
$form->setHeading('User');
$form->setTable('user');
$form->setId(@intval($_GET['id']));
$form->addInput('nama','text');
$form->setAttribute('nama','required');
$form->addInput('username','text');
$form->setAttribute('username','required');
$form->addInput('pass','password');
$form->setAttribute('pass','required');
$form->setlabel('pass','Password');
$form->addInput('level','dropdown');
$form->setOptions('level',['Administrator'=>'Administrator','manajement'=>'manajement','peminjam'=>'peminjam']);

$form->form();
}else{
  msg('Anda Harus Masuk Sebagai Admin Terlebih Dahulu','danger');
}