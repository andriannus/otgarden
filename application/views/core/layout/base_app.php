<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en" ng-app="app">
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url('asset/favicon.ico'); ?>" type="image/x-icon">
		<!-- CSS -->
		<link href="<?php echo base_url('asset/components/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('asset/components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

		<link href="<?php echo base_url('asset/css/style2.css'); ?>" rel="stylesheet">
	</head>
	<body>
		<main>
			<?php $this->load->view($navigation); ?>
			
			<div id="content">	
				<?php $this->load->view($page); ?>
			</div>

			<hr>
			<div id="footer">
				<?php $this->load->view('core/element/footer'); ?>
			</div>
		</main>

		<!-- Main Script -->
		<script src="<?php echo base_url('asset/components/jquery/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/components/bootstrap/js/bootstrap.min.js'); ?>"></script>
	</body>
</html>
