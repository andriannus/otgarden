<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<ol class="breadcrumb no-border-radius">
		<li><a href="<?php echo base_url('site'); ?>">Beranda</a></li>
		<li><?php echo $query->nama; ?></li>
	</ol>

	<div class="row">
		<div class="col-md-5">
			<img class="thumbnail" src="<?php echo base_url('asset/pictures/upload/plant/'.$query->gambar); ?>" width="100%">
		</div>

		<div class="col-md-7">
			<div class="panel panel-success no-border-radius">
				<div class="panel-heading">
					<h1><?php echo $query->nama; ?></h1>
				</div>
				<table class="table">
					<tr>
						<td width="20%" rowspan="3">Harga</td>
						<td>
							<span class="text-success bold">
								Rp. <?php echo number_format($query->harga, '0', ',', '.'); ?>
							</span>
						</td>
					</tr>
					<tr>
						<td>
							<?php if ($query->stok == 0) { ?>
								<span class="label label-danger">Stok Habis</span>
							<?php } else if ($query->stok > 0 && $query->stok <= 5) { ?>
								<span class="label label-warning">Stok Sedikit</span>
							<?php } else {?>
								<span class="label label-success">Stok Tersedia</span>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php
								$id = $query->slug;
								$qty = 1;
								$price = $query->harga;
								$name = $query->nama;
								$pict = $query->gambar;

								echo form_open('cart/add');
								echo form_hidden('id', $id);
								echo form_hidden('qty', $qty);
								echo form_hidden('price', $price);
								echo form_hidden('name', $name);
								echo form_hidden('pict', $pict);

								if ($query->stok == 0) {
							?>
							<button type="submit" class="btn btn-lg btn-success" disabled>
								<i class="fa fa-shopping-cart"></i>&nbsp; Masukkan ke Keranjang
							</button>
							<?php } else { ?>
							<button type="submit" class="btn btn-lg btn-success">
								<i class="fa fa-shopping-cart"></i>&nbsp; Masukkan ke Keranjang
							</button>

							<?php
								}
								echo form_close();
							?>
						</td>
					</tr>
					</table>
			</div>

			<p class="bold">Deskripsi produk</p>
			<p><?php echo $query->deskripsi;  ?></p>
		</div>
	</div>
</div>