<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>KPM APP</title>
    <!-- Icons-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/src/img/favicon.png" />
    <link href="<?php echo base_url(); ?>assets/src/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/src/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/src/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/src/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url(); ?>assets/src/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/src/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?php echo base_url(); ?>assets/src/img/brand/logo.png" width="110" height="35" alt="KPM UNISMA Logo">
        <img class="navbar-brand-minimized" src="<?php echo base_url(); ?>assets/src/img/brand/sygnet.png" width="45" height="45" alt="KPM UNISMA Logo">
      </a>
      <ul class="nav navbar-nav d-md-down-none">
        <!-- Breadcrumb-->
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <span>Halo, <?php echo $this->session->userdata('username'); ?></span>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="<?php echo base_url(); ?>assets/src/img/avatars/user.png" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Akun</strong>
            </div>
            <a class="dropdown-item" href="<?php echo base_url(); ?>users/profile">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>users/logout">
              <i class="fa fa-lock"></i> Logout</a>
            <div class="dropdown-header text-center">
              <strong>Aplikasi</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>about">
              <i class="fa fa-info"></i> Tentang</a>
          </div>
        </li>
      </ul>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">
                <i class="nav-icon icon-home"></i>Beranda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">
                <i class="nav-icon icon-logout"></i>Logout
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <?php 
            $role_id = $this->session->userdata('role_id'); 
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                          FROM `user_menu` JOIN `user_access_menu` 
                          ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                          WHERE `user_access_menu`.`role_id` = $role_id
                          ORDER BY `user_access_menu`.`menu_id` ASC
                          ";

            $menu = $this->db->query($queryMenu)->result_array();            
            ?>
            <!--LOOPING MENU -->
            <?php foreach ($menu as $m) : ?>
            <li class="nav-title">
                <?= $m['menu']; ?>
            </li>


            <!-- MENYIAPKAN SUB MENU SESUAI MENU -->
            <?php
            $menuid = $m['id'];  
            $querySubMenu = "SELECT *
                             FROM `user_sub_menu` JOIN `user_menu` 
                             ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                             WHERE `user_sub_menu`.`menu_id` = $menuid
                             ";
            $submenu = $this->db->query($querySubMenu)->result_array();
            //var_dump($submenu);
            ?> 

              <?php foreach ($submenu as $sm) : ?>

              <?php if($sm['judul'] == 'Tenaga Kependidikan'): ?>
               <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="<?php echo base_url(); ?>tendik">
                <i class="<?= $sm['icon'] ?>"></i> Tenaga Kependidikan</a>
                <ul class="nav-dropdown-items">
                <?php foreach ($unit as $submenu2):?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>tendik/<?php echo $submenu2['alias'] ?>">
                    <?php echo $submenu2['nm_unit']; ?></a>
                </li>
                <?php endforeach;?>
              </ul>
            </li>
              <?php else: ?>  
              <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url($sm['url']); ?>/">
                <i class="<?= $sm['icon'] ?>"></i><?= $sm['judul']; ?>
              </a>
              </li>

              
              <?php endif; ?>  
              <?php endforeach ?> 
              <div class="dropdown-divider"></div>

            <?php endforeach ?>   

           
        </nav> 
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Flash Messages -->
        <div class="container">
          <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
          <?php endif; ?>
          <?php if($this->session->flashdata('login_success')): ?>
            <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('login_success').'</div>'; ?>
          <?php endif; ?>
        </div>
<br>