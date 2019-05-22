<section class="content-header">
      <h1>
        Form
        <small>Barang Masuk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang Masuk</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php
if ($_SESSION['user']['level'] == 'administrator') {
 $form=new zea();
    $form->init('edit');
    $form->setTable('barang_masuk');
    $form->setHeading('Barang Masuk');
    $form->setId(@intval($_GET['id']));
    $form->addInput('barang_id','dropdown');
    $form->tableOptions('barang_id','barang','id','nama_barang');
    $form->setLabel('barang_id','Nama Barang');
    $form->setAttribute('barang_id','required');
    $form->addInput('jml_masuk','text');
    $form->setType('jml_masuk','number');
    $form->setAttribute('jml_masuk',['min'=>'0']);
    $form->setLabel('jml_masuk','jml_masuk');
    $form->setAttribute('jml_masuk','required');
    $form->addInput('suplier_id','dropdown');
    $form->tableOptions('suplier_id','suplier','id','nama_suplier');
    $form->setLabel('suplier_id','Nama Suplier');
    $form->setAttribute('suplier_id','required');
    $form->form(); 
  
}else{
  msg('Anda Harus Masuk Sebagai Admin Terlebih Dahulu Untuk Membuka Form Barang Masuk','danger');
}
