<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Calon Pegawai GIP</title>

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
                Menu Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('CalonPgw'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calon Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Home/form_divisi'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posisi Terbuka</p>
                </a>
              </li>
              <?php if($this->session->userdata('access') == 'Administrator'){ ?>
              <li class="nav-item">
                <a href="<?php echo base_url('user'); ?>" class="nav-link active">
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
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary shadow-none">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data User</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php echo form_open('user/formawal/do_save/'.$user_id); ?>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Username</label>
                      <input type="text" name="u_name" class="form-control" value="<?php echo $u_name; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="email" name="u_email" class="form-control" value="<?php echo $u_email; ?>" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Password</label>
                      <div class="input-group">
                        <input type="password" name="u_pass" id="password-field" class="form-control" value="<?php echo $u_pass; ?>" required />
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" ></span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- <div class="form-group">
                    <input name="pass" id="password-field" type="password" class="form-control" placeholder="Password" required />
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" ></span>
                  </div> -->

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>User Akses</label>
                      <input type="text" name="u_akses" class="form-control" value="<?php echo $u_akses; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label>User Status</label>
                      <input type="text" name="u_status" class="form-control" value="<?php echo $u_status; ?>">
                    </div>
                  </div>
                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-block btn-outline-primary" style="width:100px;" value="Submit">
                    <input type="reset" class="btn btn-block btn-outline-warning" style="width:100px;" value="Reset" onclick="location.href='<?php echo base_url('user'); ?>'">
                  </div>

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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
                <h3 class="card-title">Data User</h3>
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
                      <th>No. </th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>User Akses</th>
                      <th>User Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      $no = 1;
                      foreach ($record->result() as $r){
                    ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $r->user_name ?></td>
                        <td><?php echo $r->user_email ?></td>
                        <!-- <td><php echo $r->user_password ?></td> -->
                        <td data-title="Password">
                          <input name="viewPass" type="password" value="<?php echo $r->user_password ?>" readonly/>
                          <button type="button" class="btn btn-default" name="dynamic">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                          </button>
                        </td>                                                  
                        <td><?php echo $r->user_akses ?></td>
                        <td><?php echo $r->user_status ?></td>
                        <td><?php echo anchor('user/formawal/do_update/'.$r->user_id, 'Edit')?></td>
                        <td><?php echo anchor('user/formawal/do_delete/'.$r->user_id, 'Delete') ?></td>
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
