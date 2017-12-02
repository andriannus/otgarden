<div class="container">
	<ol class="breadcrumb no-border-radius">
		<li><a href="<?php echo base_url('site'); ?>">Beranda</a></li>
		<li>Cek Pesanan</li>
	</ol>

	<?php if (count($query) == 0) {; ?>
	<div class="col-md-4 col-md-offset-4 box text-center">
		<i class="fa fa-search fa-5x text-danger"></i>
		<p style="font-size: 24px;">ID pesanan tidak ditemukan</p>
	</div>
	<?php } else { ?>
	<div class="jumbotron">
		<h1>Detail Pesanan</h1>
		<table class="table">
			<tr>
				<td>ID Pesanan</td>
				<td><code><?php echo $query->id_pesanan; ?></code></td>
			</tr>
			<tr>
				<td>Barang yang dipesan</td>
				<td><?php echo $query->barang; ?></td>
			</tr>
			<tr>
				<td>Total Biaya</td>
				<td>Rp. <?php echo number_format($query->biaya, '0', ',', '.'); ?></td>
			</tr>
			<tr>
				<td>Tanggal Pesanan</td>
				<td><?php echo date('d F Y, h: mA', strtotime($query->tanggal)); ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><?php echo $query->nama_depan.' '.$query->nama_belakang; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $query->email; ?></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><?php echo $query->telepon; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo $query->alamat; ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<?php if ($query->konfirmasi == true) { ?>
					<span class="label label-success">Dikonfirmasi</span>
					<?php } else { ?>
					<span class="label label-danger">Terdaftar</span>
					<?php } ?>
				</td>
			</tr>
		</table>
	</div>
	<?php } ?>
</div>