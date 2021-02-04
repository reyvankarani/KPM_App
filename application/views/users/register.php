<!DOCTYPE html>
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
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <div class="card-body p-4">
              <h1>Register</h1>
              <p class="text-muted">Create your account</p>
              <?php echo form_open('users/register');?>
              <form>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <input class="form-control" type="text" placeholder="Full Name" name="name">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <input class="form-control" type="text" placeholder="Username" name="username">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input class="form-control" type="text" placeholder="Email" name="email">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" placeholder="Password" name="password">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" placeholder="Confirm Password" name="password2">
              </div>
              <?php echo validation_errors();?>
              <button class="btn btn-block btn-success" type="submit">Create Account</button>
              </form>
              <?php echo form_close();?>
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