<!DOCTYPE html>
<html>

         <?php $ci = &get_instance(); ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <script src="<?= base_url('assets/admin/plugins/jquery/jquery.min.js')?>"></script>
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')?>">
<script src="<?=base_url('assets/admin/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?=base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>

  <link rel="stylesheet" href="<?=base_url('assets/admin/css/adminlte.min.css')?>">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      
      
    </ul>

    
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Login/logout') ?>">
          <b>Logout</b>
        </a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4 " >
   

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <h3><a href="<?= base_url('/') ?>" class="d-block"><?= $ci->session->userdata('nama') ?></a></h3>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <?php if($ci->session->userdata('level') == 2): ?>
          <li class="nav-item">
            <a href="<?= base_url('Myadmin/tambahdata') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Kelola Data Mahasiswa</p>
            </a>
          </li>
        <?php endif; ?>
         <?php if($ci->session->userdata('level') == 1): ?>
          <li class="nav-item">
            <a href="<?= base_url('DashboardMahasiswa/editProfile') ?>" class="nav-link">
              <i class="nav-icon  fas fa-address-card "></i>
              <p>Ubah Data Diri</p>
            </a>
          </li>
           <?php endif; ?>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
   
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <div class="card-body">
               
             