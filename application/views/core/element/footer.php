<div class="container">
	<div class="row">
		<div class="col-md-4">
			<p class="bold">Tetang Kami</p>
			<p>
				Otgarden.com merupakan pasar jual beli tanaman secara online. Kini, semua orang dapat membeli  tanaman melalui internet, secara online.
			</p>
		</div>
		<div class="col-md-4">
			<p class="bold">Customer Care</p>
			<p><i class="fa fa-phone-square"></i> 0812 8418 8416 (Lamhot)</p>
			<p><i class="fa fa-envelope-open-o"></i> LamhotAdmin@otgarden.com</p>
		</div>
		<div class="col-md-4">
			<p class="bold">Cek Pesanan</p>
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
</div>

<hr>
<p class="text-center">Copyright &copy; Otgarden.com</p>