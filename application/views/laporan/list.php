<section class="content-header">
      <h1>
        <b>Cetak 
        <small>Laporan</small></b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan</li>
      </ol>
    </section>
    <br/>
    <br/>
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Pilih Data Yang Anda ingin Cetak ...!</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                   <?php
                  defined('BASEPATH') OR exit('No direct script access allowed');
                  if($_SESSION['user']['level'] =='manajement'){
                    ?>
                    <body>
                    <div class="wrap">
                      <div class="header">      
                        <h3></h3>
                        <p>Untuk Mencetak Data, Anda Bisa mengklik Data Yang anda ingin cetak dibawah ini :) </p>
                      </div>
                      <div class="menu">
                        <ul>
                          <li><a href="<?php echo site_url('laporanpdf/user');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Cetak Laporan Data User</a></li>
                          <br/>
                          <li><a href="<?php echo site_url('laporanpdf/suplier');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Cetak Laporan Data Suplier</a></li>
                          <br/>
                          <li><a href="<?php echo site_url('laporanpdf/barang');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Cetak Laporan Data Barang</a></li>
                          <br/>
                          <li><a href="<?php echo site_url('laporanpdf/barang_masuk');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Cetak Laporan Data Barang Masuk</a></li>
                          <br/>
                          <li><a href="<?php echo site_url('laporanpdf/barang_keluar');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Cetak Laporan Data Barang Keluar</a></li>
                          <br/>
                          <li><a href="<?php echo site_url('laporanpdf/peminjam');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Cetak Laporan Data Peminjam</a></li>
                          <br/>
                        </ul>
                      </div>
                    </div>
                  </body>
                      

                  <?php }else{
                    msg('Untuk Mencetak Laporan, Anda Harus Masuk Terlebih Dahulu Sebagai manajement','danger');
                  } ?>                  