 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="../../index3.html" class="brand-link">
     <img src="<?= base_url('assets/admin/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">AdminLTE 3</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?= base_url('assets/admin/dist/img/AdminLTELogo.png') ?>" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block"><?php echo $this->session->userdata('username'); ?></a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
               <i class=""></i>
             </p>
           </a>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-sitemap"></i>
             <p>
               Destinasi
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url('admin/destinasi') ?>" class="nav-link">
                 &nbsp;&nbsp;<i class="fa fa-table nav-icon"></i>
                 <p>Data Destinasi</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('admin/destinasi/tambah_destinasi') ?>" class="nav-link">
                 &nbsp;&nbsp;<i class="fa fa-plus nav-icon"></i>
                 <p>Tambah Destinasi</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('admin/kategori') ?>" class="nav-link">
                 &nbsp;&nbsp;<i class="fa fa-tags nav-icon"></i>
                 <p>Kategori Destinasi</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="<?= site_url('/admin/pengguna') ?>" class="nav-link">
             <i class="nav-icon fas fa-user"></i>
             <p>
               Pengguna
               <span class="right badge badge-danger"></span>
             </p>
           </a>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-cog"></i>
             <p>
               Pengaturan
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url('admin/slider') ?>" class="nav-link">
                 &nbsp;&nbsp;<i class="fa fa-image nav-icon"></i>
                 <p>Slider</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url('admin/tentang_admin') ?>" class="nav-link">
                 &nbsp;&nbsp;<i class="fa fa-table nav-icon"></i>
                 <p>Tentang</p>
               </a>
             </li>
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
           <h1><?= $card_title ?></h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">DataTables</li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">
           <div class="card">
             <div class="card-header">
               <h3 class="card-title"><?= $card_title; ?></h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">