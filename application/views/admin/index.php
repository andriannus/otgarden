<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="content-header">
	<h1>
		Dashboard
		<small>Daftar Lengkap</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Dashboard
			</a>
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Selamat Datang Admin</h3>
				</div>
				<div class="box-body">
					<p>Apa yang ingin anda lakukan?</p>
				</div>
				<div class="box-footer">
					<a class="btn btn-default" href="<?php echo base_url('admin/plant'); ?>"><i class="fa fa-leaf"></i> Melihat Data Tanaman</a>
					&nbsp;
					<a class="btn btn-default" href="<?php echo base_url('admin/order'); ?>"><i class="fa fa-shopping-bag"></i> Melihat Data Pesanan</a>
				</div>
			</div>
		</div>
	</div>
</section>