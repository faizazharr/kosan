<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ngekos Yuk!!</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>asset_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>asset_admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #5F9EA0;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ngekos Yuk!! <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
     <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pencari') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kost</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     <!-- <li class="nav-item active">
        <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('pencari/pencarian') ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pencarian Kos</span>
        </a>
      </li>-->
	  
       <li class="nav-item active">
        <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('pencari/mailbox') ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Chat Pemilik</span>
        </a>
      </li>
	  

       <li class="nav-item active">
        <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('pencari/pemesanan') ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Riwayat Pemesanan</span>
        </a>
      </li>

      <li class="nav-item active">
        <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('pencari/pembayaran') ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Info Pembayaran</span>
        </a>
      </li>

       <!-- <li class="nav-item active">
        <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('pencari/pesan') ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pesan</span>
        </a>
      </li> -->

      <li class="nav-item active">
       <li class="nav-item">
       <a class="nav-link collapsed" href="<?php echo base_url('pencari/pesan') ?>">
         <i class="fas fa-fw fa-folder"></i>
         <span>About Us</span>
       </a>
     </li>

     <!-- <li class="nav-item active">
      <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url('pencari/pesan') ?>">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pesan</span>
      </a>
    </li> -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
