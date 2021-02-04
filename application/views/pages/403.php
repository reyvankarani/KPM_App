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
    <link href="<?php echo base_url();?>assets/src/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/src/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/src/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/src/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url();?>assets/src/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/src/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="clearfix">
            <h1 class="float-left display-3 mr-4">403</h1>
            <h4 class="pt-3">Ups! Maaf...</h4>
            <p class="text-muted">Anda tidak memiliki otoritas untuk akses layanan ini</p>
          </div>
          <div class="input-prepend">
              <a class="btn btn-info" href="javascript:window.history.go(-1);"><i class="fa fa-arrow-left"></i> Kembali</a>
              <a class="btn btn-info" href="<?php echo base_url();?>"><i class="fa fa-home"></i> Beranda</a>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url();?>assets/src/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/src/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/src/node_modules/pace-progress/pace.min.js"></script>
    <script src="<?php echo base_url();?>assets/src/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/src/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
</html>