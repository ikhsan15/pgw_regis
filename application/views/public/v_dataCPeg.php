<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte3/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte3/dist/css/adminlte.min.css'); ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('login/logout');?>" class="nav-link">Keluar</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url('/assets/adminlte3/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>SICP</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('/assets/adminlte3/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Calon Pegawai
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('CalonPgw'); ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Data Calon Pegawai</p>
                </a>
              </li>
              <?php if($this->session->userdata('access') == 'Administrator'){ ?>
              <li class="nav-item">
                <a href="<?php echo base_url('user'); ?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Calon Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Calon Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php if($rNum > 0){ ?>
              <!-- DATA PGW_CALON -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Data Umum</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table  table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_calon->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>
                        <td width="20%"></td>	
                        <td width="2%"></td>	
                        <td align="left">
                          <?php if(!empty($r->pc_foto)){ ?>
                            <img src="<?php echo base_url().'foto_pgw/'.$r->pc_foto; ?>" class="img-thumbnail" width="150px" height="170px">
                          <?php } ?>
                        </td>
                      </tr>
                      <!-- <tr>
                        <td collspan="3"><?php echo $r->pc_foto ?></td>
                      </tr> -->
                      <tr>	
                        <td width="20%">Posisi yang dilamar</td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->pd_nama_divisi ?></td>
                      </tr>
                      <tr>	
                        <td>Status Lamaran</td>	
                        <td>:</td>	
                        <td><?php echo $r->pss_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Nama Lengkap</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_nama ?></td>
                      </tr>	
                      <tr>	
                        <td>No. KTP</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_no_ktp ?></td>
                      </tr>
                      <tr>	
                        <td>Tempat Tanggal Lahir</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_tmp_lahir ?>, <?php echo $r->pc_tgl_lahir ?></td>
                      </tr>
                      <tr>	
                        <td>Alamat Rumah (KTP)</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_alamat_ktp ?></td>
                      </tr>	
                      <tr>	
                        <td>Alamat Rumah (Sekarang)</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_alamat_sekarang ?></td>
                      </tr>	
                      <tr>	
                        <td>No. Telepon</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_telp ?></td>
                      </tr>	
                      <tr>	
                        <td>Email</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_email ?></td>
                      </tr>	
                      <tr>	
                        <td>Jenis Kelamin</td>	
                        <td>:</td>	
                        <td>
                          <?php if(($r->pc_gender) === 1){
                              echo 'Laki-laki';
                            }else{
                              echo 'Wanita';
                            } 
                          ?>
                        </td>
                      </tr>	
                      <tr>	
                        <td>Agama</td>	
                        <td>:</td>	
                        <td><?php echo $r->pa_nama ?></td>
                      </tr>	
                      <tr>	
                        <td>Kewarganegaraan</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_kewarganegaraan ?></td>
                      </tr>
                      <tr>	
                        <td>Anak ke</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_anak_ke ?> dari <?php echo $r->pc_anak_ke_dari ?> bersaudara</td>
                      </tr>	
                      <tr>	
                        <td>Status Perkawinan</td>	
                        <td>:</td>
                        <td><?php echo $r->psn_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Jumlah anak</td>	
                        <td>:</td>
                        <td><?php echo $r->pc_jumlah_anak ?></td>
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_CALON -->
              <!-- DATA PGW_KELUARGA -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Data Keluarga</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_keluarga->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="20%">Nama</td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->pf_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Hubungan</td>	
                        <td>:</td>	
                        <td><?php echo $r->pf_hubungan ?></td>
                      </tr>
                      <tr>	
                        <td>Tanggal Lahir</td>	
                        <td>:</td>
                        <td><?php echo $r->pf_tgl_lahir ?></td>
                      </tr>	
                      <tr>	
                        <td>Pendidikan</td>	
                        <td>:</td>
                        <td><?php echo $r->pf_pendidikan ?></td>
                      </tr>
                      <tr>	
                        <td>Pekerjaan</td>	
                        <td>:</td>
                        <td><?php echo $r->pf_kerja ?></td>
                      </tr>
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_KELUARGA -->
              <!-- DATA PGW_PENDIDIKAN -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Riwayat Pendidikan</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_pendidikan->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="20%">Nama Instansi</td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->ppend_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Alamat Instansi</td>	
                        <td>:</td>
                        <td><?php echo $r->ppend_alamat ?></td>
                      </tr>	
                      <tr>	
                        <td>Tingkat</td>	
                        <td>:</td>
                        <td><?php echo $r->ppend_tingkat ?></td>
                      </tr>
                      <tr>	
                        <td>Jurusan</td>	
                        <td>:</td>
                        <td><?php echo $r->ppend_jurusan ?></td>
                      </tr>
                      <tr>	
                        <td>Tahun Masuk</td>	
                        <td>:</td>
                        <td><?php echo $r->ppend_masuk ?></td>
                      </tr>
                      <tr>	
                        <td>Tahun Keluar</td>	
                        <td>:</td>
                        <td><?php echo $r->ppend_keluar ?></td>
                      </tr>
                      <tr>	
                        <td>Lulus / Tidak Lulus</td>	
                        <td>:</td>	
                        <td><?php echo $r->ppend_keterangan ?></td>
                      </tr>
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_PENDIDIKAN -->
              <!-- DATA PGW_KERJA -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Riwayat Pekerjaan</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_kerja->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="20%">Nama Perusahaan</td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->pk_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Alamat Perusahaan</td>	
                        <td>:</td>
                        <td><?php echo $r->pk_alamat ?></td>
                      </tr>	
                      <tr>	
                        <td>Divisi</td>	
                        <td>:</td>
                        <td><?php echo $r->pk_divisi ?></td>
                      </tr>
                      <tr>	
                        <td>Jabatan</td>	
                        <td>:</td>
                        <td><?php echo $r->pk_jabatan ?></td>
                      </tr>
                      <tr>	
                        <td>Tanggal Masuk</td>	
                        <td>:</td>
                        <td><?php echo $r->pk_masuk ?></td>
                      </tr>
                      <tr>	
                        <td>Tanggal Keluar</td>	
                        <td>:</td>
                        <td><?php echo $r->pk_keluar ?></td>
                      </tr>
                      <tr>	
                        <td>Gaji Pokok</td>	
                        <td>:</td>	
                        <td><?php echo $r->pk_gapok ?></td>
                      </tr>
                      <tr>	
                        <td>Tunjangan Lainnya</td>	
                        <td>:</td>	
                        <td><?php echo $r->pk_tunjangan_lainnya ?></td>
                      </tr>
                      <tr>	
                        <td>Tugas Kerja</td>	
                        <td>:</td>	
                        <td><?php echo $r->pk_tugas_kerja ?></td>
                      </tr>
                      <tr>	
                        <td>Alasan Pindah</td>	
                        <td>:</td>	
                        <td><?php echo $r->pk_alasan_pindah ?></td>
                      </tr>
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_KERJA -->
              <!-- DATA PGW_REFERENSI_PRO -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Referensi Profesional</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_referensi_pro->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="20%">Nama </td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->prp_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Hubungan </td>	
                        <td>:</td>
                        <td><?php echo $r->prp_hubungan ?></td>
                      </tr>	
                      <tr>	
                        <td>Posisi / Jabatan</td>	
                        <td>:</td>
                        <td><?php echo $r->prp_jabatan ?></td>
                      </tr>
                      <tr>	
                        <td>No. Telepon</td>	
                        <td>:</td>
                        <td><?php echo $r->prp_telp ?></td>
                      </tr>
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_REFERENSI_PRO -->
              <!-- DATA PGW_REFERENSI_KERABAT -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Referensi Kerabat</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_referensi_kerabat->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="20%">Nama </td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->prk_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Hubungan </td>	
                        <td>:</td>
                        <td><?php echo $r->prk_hubungan ?></td>
                      </tr>	
                      <tr>	
                        <td>Posisi / Jabatan</td>	
                        <td>:</td>
                        <td><?php echo $r->prk_jabatan ?></td>
                      </tr>
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_REFERENSI_KERABAT -->
              <!-- DATA PGW_REQUEST -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Minat</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_request->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="40%">Minimum gaji yang diharapkan </td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->ppreq_gaji_min ?></td>
                      </tr>
                      <tr>	
                        <td>Kondisi kerja/tunjangan dan fasilitas yang diharapkan </td>	
                        <td>:</td>
                        <td><?php echo $r->ppreq_fasilitas ?></td>
                      </tr>	
                      <tr>	
                        <td>Kapan bisa bergabung dengan Gema Insani?</td>	
                        <td>:</td>
                        <td><?php echo $r->ppreq_gabung ?></td>
                      </tr>
                      <tr>	
                        <td>Apakah Anda bersedia ditempatkan di luar Jakarta? </td>	
                        <td>:</td>
                        <td><?php echo $r->ppreq_penempatan ?></td>
                      </tr>
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_REQUEST -->
              <!-- DATA PGW_KURSUS -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Riwayat Kursus / Pelatihan</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_kursus->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="20%">Nama Instansi </td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->ps_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Tahun Masuk</td>	
                        <td>:</td>
                        <td><?php echo $r->ps_masuk ?></td>
                      </tr>
                      <tr>	
                        <td>Tahun Keluar </td>	
                        <td>:</td>
                        <td><?php echo $r->ps_keluar ?></td>
                      </tr>	
                      <tr>
                        <td>Lulus / Tidak Lulus </td>	
                        <td>:</td>
                        <td><?php echo $r->ps_status ?></td>
                      </tr>	
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_KURSUS -->
              <!-- DATA PGW_BAHASA -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Kemampuan Bahasa</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_bahasa->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="20%">Bahasa </td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->pb_nama ?></td>
                      </tr>
                      <tr>	
                        <td>Aktif / Pasif </td>	
                        <td>:</td>
                        <td><?php echo $r->pb_keterangan ?></td>
                      </tr>
                      <tr>	
                        <td>Tertulis </td>	
                        <td>:</td>
                        <td>
                          <?php if(($r->pb_tulis) === "1"){
                            echo "Sangat Baik";
                          }elseif(($r->pb_tulis) === "2"){
                            echo "Baik";
                          }elseif(($r->pb_tulis) === "3"){
                            echo "Cukup Baik";
                          }else{
                            echo "Kurang";
                          } ?>
                        </td>
                      </tr>	
                      <tr>
                        <td>Lisan </td>	
                        <td>:</td>
                        <td>
                          <?php if(($r->pb_lisan) === "1"){
                            echo "Sangat Baik";
                          }elseif(($r->pb_lisan) === "2"){
                            echo "Baik";
                          }elseif(($r->pb_lisan) === "3"){
                            echo "Cukup Baik";
                          }else{
                            echo "Kurang";
                          } ?>
                        </td>
                      </tr>	
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_BAHASA -->
              <!-- DATA PGW_PERTANYAAN -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Informasi Tambahan</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <?php
                      $no = 1;
                      foreach ($rec_pgw_pertanyaan->result() as $r){
                    ?>
                      <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
                      <tr>	
                        <td width="40%">Hobi/aktivitas yang dilakukan saat waktu senggang </td>	
                        <td width="2%">:</td>	
                        <td><?php echo $r->pp_hobi ?></td>
                      </tr>
                      <tr>	
                        <td>Apakah Anda buta warna? </td>	
                        <td>:</td>
                        <td><?php echo $r->pp_buta_warna ?></td>
                      </tr>
                      <tr>	
                        <td>Penyakit yang pernah menyebabkan Anda dirawat di rumah sakit. </td>	
                        <td>:</td>
                        <td><?php echo $r->pp_penyakit ?></td>
                      </tr>
                      <tr>	
                        <td>Dirawat berapa lama? </td>	
                        <td>:</td>
                        <td><?php echo $r->pp_lama_rawat ?></td>
                      </tr>
                      <tr>
                        <td>Penyakit tertentu yang masih dialami saat ini </td>	
                        <td>:</td>
                        <td><?php echo $r->pp_sakit_turunan ?></td>
                      </tr>
                      <tr>
                        <td>Apakah Anda pernah terlibat tindak kriminal yang menyebabkan Anda berurusan dengan hukum? </td>	
                        <td>:</td>
                        <td><?php echo $r->pp_kriminal ?></td>
                      </tr>	
                      <tr>
                        <td>Kapan Anda terlibat tindak kriminal tersebut? </td>	
                        <td>:</td>
                        <td><?php echo $r->pp_kriminal_waktu ?></td>
                      </tr>
                      <tr>
                        <td>Mengapa anda melakukan tindak kriminal tersebut? </td>	
                        <td>:</td>
                        <td><?php echo $r->pp_kriminal_alasan ?></td>
                      </tr>	
                      <tr>
                        <td>Organisasi sosial yang pernah Anda ikuti </td>	
                        <td>:</td>
                        <td><?php echo $r->pp_organisasi ?></td>
                      </tr>
                      
                      <tr>	
                        <td collspan="3"></td>	
                      </tr>	

                    <?php $no++; } ?>                
                  </table>
                </div>
              </div>
              <!-- DATA PGW_PERTANYAAN -->

            <?php } ?>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary shadow-none">
              <div class="card-header">
                <h3 class="card-title">List Data Calon Pegawai</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- <table id="example1" class="table table-bordered table-striped"> -->
                <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Lengkap</th>
                      <th>Posisi yang dilamar</th>
                      <th>Status Lamaran</th>
                      <th>Alamat Rumah (Sekarang)</th>
                      <th>No. WA</th>
                      <th>Jenis Kelamin</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      $no = 1;
                      foreach ($rec_pgwcalon->result() as $r){
                    ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $r->pc_nama ?></td>
                        <td><?php echo $r->pd_nama_divisi ?></td>
                        <td><?php echo $r->pss_nama ?></td>
                        <td><?php echo $r->pc_alamat_sekarang ?></td>
                        <td><?php echo $r->pc_telp ?></td>                                             
                        <td>
                          <?php if(($r->pc_gender) === "1"){
                              echo 'Laki-laki';
                            }else{
                              echo 'Wanita';
                            } 
                          ?>
                        </td>
                        <td>
                          <a href="<?php echo base_url('Home/exportPdf/?rNum='.$r->pc_id.'&pc_nama='.$r->pc_nama.'&p_lamar='.$r->pd_nama_divisi) ?>" target="blank">
                            <i class="fas fa-file-pdf"></i>
                          </a>
                          <a href="<?php echo base_url('Home/formawal/?rNum=').$r->pc_id ?>">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="<?php echo base_url('Home/hapus_pgw/?rNum=').$r->pc_id ?>">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                        
                      </tr>
                    <?php
                        $no++;
                      }
                    ?>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('/assets/adminlte3/plugins/jquery/jquery.min.js '); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('/assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js '); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables/jquery.dataTables.min.js '); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js '); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables-responsive/js/dataTables.responsive.min.js '); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js '); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables-buttons/js/dataTables.buttons.min.js '); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js '); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte3/plugins/jszip/jszip.min.js '); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte3/plugins/pdfmake/pdfmake.min.js '); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte3/plugins/pdfmake/vfs_fonts.js '); ?>"></script>
<!-- extentions -->
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables-buttons/js/buttons.html5.min.js '); ?>"></script>
<!-- print -->
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables-buttons/js/buttons.print.min.js '); ?>"></script>
<!-- column visibility -->
<script src="<?php echo base_url('/assets/adminlte3/plugins/datatables-buttons/js/buttons.colVis.min.js '); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/assets/adminlte3/dist/js/adminlte.min.js '); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/assets/adminlte3/dist/js/demo.js '); ?>"></script>
<!-- Page specific script -->

<script src="<?php echo base_url('/assets/js/v_data.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/login.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/v_user.js'); ?>"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      // "responsive": true, 
      // "lengthChange": false, 
      "autoWidth": false,
      scrollX: true,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "columnDefs": [
        {"className": "dt-head-center", "targets": "_all"},
      ],
      "dom": 'rtip',
      "ordering": false,
      "paging": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      scrollX: true,
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      // "responsive": true,
    });
  });
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#cover')
        .attr('src', e.target.result)
        .width(150)
        .height(200);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
</body>
</html>
