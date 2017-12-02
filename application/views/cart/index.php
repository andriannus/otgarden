<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<ol class="breadcrumb no-border-radius">
		<li><a href="<?php echo base_url('site'); ?>">Beranda</a></li>
		<li>Cart</li>
	</ol>

	<?php if ($this->cart->total_items() < 1) { ?>
		<div class="col-md-4 col-md-offset-4 box">
			<div class="text-center">
				<i class="fa fa-shopping-basket fa-5x text-danger"></i>
				<p class="bold margin-top-sm">-- Keranjang Anda kosong --</p>
				<a class="btn btn-success btn-lg" href="<?php echo base_url('site'); ?>">Lanjutkan Belanja</a>
			</div>
		</div>
	<?php } else {?>

		<div class="row">
			<div class="col-md-8">
				<p class="bold">Isi keranjang Anda</p>
				<table class="table table-bordered text-center">
					<tr class="bold success">
						<td colspan="2">Produk</td>
						<td width="20%">Harga Produk</td>
						<td width="20%">Kuantitas</td>
					</tr>
					<?php foreach ($query as $item): ?>
					<tr>
						<td width="20%">
							<img width="50px" height="auto" src="<?php echo base_url('asset/pictures/upload/plant/'.$item['pict']); ?>">
						</td>
						<td class="text-left">
							<p><a href="<?php echo base_url('plant/view/'.$item['id']); ?>"><?php echo $item['name']; ?></a></p>
							<a class="btn btn-sm btn-danger" href="<?php echo base_url('cart/remove/'.$item['rowid']); ?>">
								<i class="fa fa-close"></i> Delete
							</a>
						</td>
						<td>
							<p>Rp. <?php echo number_format($item['price'], '0', ',', '.'); ?></p>
						</td>
						<td>
							<?php
								if ($item['qty'] > 4) {
									/* Hidden Button */
								} else {
								$rowid = $item['rowid'];
								$qty = $item['qty'] + 1;

								echo form_open('cart/update');
								echo form_hidden('rowid', $rowid);
								echo form_hidden('qty', $qty);
							?>
								<button type="submit" class="btn btn-default">+</button>
							<?php
								echo form_close();
								}
							?>
							<a class="btn btn-default disabled">
								<?php echo $item['qty']; ?>
							</a>
							<?php
								if ($item['qty'] < 2) {
									/* Hidden Button */
								} else {
								$rowid = $item['rowid'];
								$qty = $item['qty'] - 1;

								echo form_open('cart/update');
								echo form_hidden('rowid', $rowid);
								echo form_hidden('qty', $qty);
							?>
								<button type="submit" class="btn btn-default">-</button>
							<?php
								echo form_close();
								}
							?>
						</td>
					<?php endforeach; ?>
				</table>
				<a class="btn btn-success" href="<?php echo base_url('site'); ?>"><i class="fa fa-shopping-cart"></i> Lanjutkan Belanja</a>
			</div>

			<div class="col-md-4">
				<p class="bold">Rincian Pesanan</p>
				<table width="100%">
					<tr>
						<td colspan="2">Subtotal</td>
					</tr>
					<?php foreach ($query as $item): ?>
					<tr>
						<td width="40%"><?php echo $item['name']; ?></td>
						<td class="text-right" width="60%">Rp. <?php echo number_format($item['subtotal'], '0', ',', '.'); ?></td>
					</tr>
					<?php endforeach; ?>
				</table>
				<hr>
				<table width="100%">
					<tr>
						<td width="40%"><span class="bold">Total</span></td>
						<td class="text-right" width="60%">
							<span class="bold">
								Rp. <?php echo number_format($this->cart->total(), '0', ',', '.'); ?>
							</span>
						</td>
					</tr>
				</table>
				<hr>
				<a class="btn btn-block btn-lg btn-success text-uppercase" href="<?php echo base_url('cart/checkout'); ?>">Lanjutkan Pembayaran <i class="fa fa-arrow-right"></i></a>
			</div>
		</div>
	<?php } ?>

</div>