<section class="content-header">
      <h1>
        Form
        <small>Barang Keluar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang Keluar</li>
      </ol>
    </section>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php
if ($_SESSION['user']['level'] == 'administrator'){
 $this->zea->init('edit');
  $this->zea->setTable('barang_keluar');
  $this->zea->setHeading('Barang Keluar');
  $this->zea->setId(@intval($_GET['id']));
  $this->zea->addInput('barang_id','dropdown');
  $this->zea->tableOptions('barang_id','barang','id','nama_barang');
  $this->zea->setLabel('barang_id','Nama Barang');
  $this->zea->setAttribute('id_barang','required');
  $this->zea->addInput('jml_keluar','text');
  $this->zea->setType('jml_keluar','number');
  $this->zea->setAttribute('jml_keluar',['min'=>'0']);
  $this->zea->setLabel('jml_keluar','Jumlah Keluar');
  $this->zea->setAttribute('jml_keluar','required');
  $this->zea->addInput('lokasi','dropdown');
  $this->zea->setOptions('lokasi',['Kantor Guru'=>'Kantor Guru','Kantor Kepsek'=>'Kantor Kepsek','Ruang XII RPL 2'=>'Ruang XII RPL 2','Ruang XII RPL 1'=>'Ruang XII RPL 1']);
  $this->zea->setAttribute('lokasi','required');
  $this->zea->addInput('penerima','text');
  $this->zea->setAttribute('penerima$this->zea','required');
  $this->zea->form(); 
                      
}else{
  msg('Untuk Melihat form Barang Keluar, Anda Harus Login Sebagai Admin Terlebih Dahulu','danger');
}