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
          <?php if($this->session->flashdata('tokensent')): ?>
            <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('tokensent').'</div>'; ?>
          <?php endif; ?>
          <?php if($this->session->flashdata('user_not_found')): ?>
            <?php echo '<div class="alert alert-danger" role="alert">'.$this->session->flashdata('user_not_found').'</div>'; ?>
          <?php endif; ?>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Forgot Your Password?</h1>
                <p class="text-muted">Enter your e-mail address</p>
                <?php echo form_open('users/forgotpassword');?>
                <form>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  </div>
                  <input class="form-control" type="text" placeholder="e-mail" name="email" id="email" autofocus required>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Reset Password</button>
                  </div>
                </form>
                <?php echo form_close();?>
                <div class="col-6 text-right">
                    <a href="<?php echo base_url(); ?>users/login">Back to Login</a>
                  </div>
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