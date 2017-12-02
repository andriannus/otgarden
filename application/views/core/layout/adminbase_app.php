<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url('asset/favicon.ico'); ?>" type="image/x-icon">
		<!-- CSS -->
		<link href="<?php echo base_url('asset/components/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('asset/components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

		<link href="<?php echo base_url('asset/css/admin.css'); ?>" rel="stylesheet">
	</head>
	<body>

		<main>
			<?php 
				if ($this->session->userdata('login') == true) {
					$this->load->view('core/element/navigation/admin'); 
				}
				?>

			<?php $this->load->view($page); ?>
		</main>

		<!-- Main Script -->
		<script src="<?php echo base_url('asset/components/jquery/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/components/bootstrap/js/bootstrap.min.js'); ?>"></script>

		<script src="<?php echo base_url('asset/components/angular/angular.min.js'); ?>"></script>
	</body>
</html>
