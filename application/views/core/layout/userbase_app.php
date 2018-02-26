<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html ng-app="">
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/components/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/components/font-awesome/css/font-awesome.min.css'); ?>">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/main.css'); ?>">

		<link rel="stylesheet" href="<?php echo base_url('asset/css/AdminLTE.min.css'); ?>">

		<script src="<?php echo base_url('asset/components/jquery/jquery.min.js'); ?>"></script>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="hold-transition login-page">

		<div class="login-box">
			<?php $this->load->view($page); ?>
		</div>


		<script src="<?php echo base_url('asset/components/bootstrap/js/bootstrap.min.js'); ?>"></script>
	</body>
</html>