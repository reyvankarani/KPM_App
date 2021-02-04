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
<body>
<?php
  if($this->session->flashdata('falsetoken')){            
  	echo '<div class="alert alert-danger" role="alert">'.$this->session->flashdata('falsetoken').'</div>';   
  }  
  header('Refresh:5; url= '. base_url().'/users/login'); 
  echo "Anda akan diarahkan dalam 5 detik...";
?>
</body>
</html>