<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="sidebar">

	<!-- Sidebar user panel (optional) -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="<?php echo base_url('asset/pictures/upload/gallery/logo_panasonic.jpg') ?>" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p>Administrator</p>
			<!-- Status -->
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>

	<!-- search form (Optional) -->
	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="q" class="form-control" readonly>
			<span class="input-group-btn">
				<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
			</span>
		</div>
	</form>
	<!-- /.search form -->

	<!-- Sidebar Menu -->
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MENU</li>
		<!-- Optionally, you can add icons to the links -->

		<?php
			if ($menu == 'home') {
		?>
		<li class="active">
			<a href="<?php echo base_url('admin/index'); ?>" target="_self">
				<i class="fa fa-home"></i> <span>Beranda</span>
			</a>
		</li>
		<?php
		} else {
		?>
		<li>
			<a href="<?php echo base_url('admin/index'); ?>" target="_self">
				<i class="fa fa-home"></i> <span>Beranda</span>
			</a>
		</li>
		<?php
		}
		?>

		<?php
		if ($menu == 'plant') {
		?>
		<li class="active">
			<a href="<?php echo base_url('admin/plant'); ?>" target="_self">
				<i class="fa fa-leaf"></i> <span>Tanaman</span>
			</a>
		</li>
		<?php
		} else {
		?>
		<li>
			<a href="<?php echo base_url('admin/plant'); ?>" target="_self">
				<i class="fa fa-leaf"></i> <span>Tanaman</span>
			</a>
		</li>
		<?php
		}
		?>

		<?php
		if ($menu == 'order') {
		?>
		<li class="active">
			<a href="<?php echo base_url('admin/order'); ?>" target="_self">
				<i class="fa fa-shopping-bag"></i> <span>Pesanan</span>
			</a>
		</li>
		<?php
		} else {
		?>
		<li>
			<a href="<?php echo base_url('admin/order'); ?>" target="_self">
				<i class="fa fa-shopping-bag"></i> <span>Pesanan</span>
			</a>
		</li>
		<?php
		}
		?>
	</ul>
	<!-- /.sidebar-menu -->
</section>