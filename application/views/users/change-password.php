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
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/src/img/favicon.png" />
    <link href="<?php echo base_url(); ?>assets/src/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/src/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/src/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/src/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url(); ?>assets/src/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/src/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <!-- Flash Messages -->
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Change Your Password for</h1>
                <h2><?php echo $this->session->userdata('reset_email') ?></h2>
                <!-- <p class="text-muted">Enter your new password</p> -->
                <?php echo form_open('users/change_password');?>
                <form>
                <div class="form-group mb-3">
                  <div class="input-group-prepend">
                  </div>
                  <input class="form-control" type="password" placeholder="enter your new password" name="password1" id="password1" autofocus required>
                  <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>' ); ?>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group-prepend">
                  </div>
                  <input class="form-control" type="password" placeholder="repeat your new password" name="password2" id="password2" autofocus required>
                  <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>' ); ?>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Change Password</button>
                  </div>
                </form>
                <?php echo form_close();?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url(); ?>assets/src/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/src/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/src/node_modules/pace-progress/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/src/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/src/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url(); ?>assets/src/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/src/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/src/js/main.js"></script>
  </body>
</html>