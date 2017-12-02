<div class="container">
	<ol class="breadcrumb no-border-radius">
		<li><a href="<?php echo base_url('site'); ?>">Beranda</a></li>
		<li>Cek Pesanan</li>
	</ol>

	<div class="col-md-4 col-md-offset-4 box">
		<h1 class="text-center">Cari Pesanan</h1>
		<?php echo form_open('order/search_process'); ?>
		<div class="form-group">
			<input type="text" class="form-control" name="id_pesanan" placeholder="Masukkan ID Pesanan">
		</div>
		<div class="form-group">
			<button class="btn btn-block btn-primary">
				<i class="fa fa-search"></i> Cari
			</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>