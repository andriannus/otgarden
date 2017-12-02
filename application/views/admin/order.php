<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<?php if (count($query) == 0) {; ?>
	<div class="text-center">
		<p><i>-- Tidak ada data --</i></p>
	</div>
	<?php } else { ?>
	<table class="table table-striped text-center margin-top-sm">
		<tr class="bold">
			<td width="10%">ID Pesanan</td>
			<td width="25%">Nama Lengkap</td>
			<td width="15%">Total Biaya</td>
			<td width="25%">Tanggal Pemesanan</td>
			<td width="10%">Aksi</td>
			<td width="15%">Status</td>
		</tr>

		<?php foreach ($query as $order): ?>
		<tr>
			<td><?php echo $order['id_pesanan']; ?></td>
			<td><?php echo $order['nama_depan'] .' '. $order['nama_belakang']; ?></td>
			<td>Rp. <?php echo number_format($order['biaya'], '0', ',', '.'); ?></td>
			<td><?php echo date('d F Y, h: mA', strtotime($order['tanggal'])); ?></td>
			<td>
				<a class="btn btn-success" href="<?php echo base_url('order/view/').$order['id_pesanan']; ?>" target="_blank">
					<i class="fa fa-eye"></i> Lihat
				</a>
			</td>
			<td>
				<?php if ($order['konfirmasi'] == false) { ?>
				<a class="btn btn-danger" href="<?php echo base_url('admin/confirm_order/').$order['id_pesanan']; ?>">
					Terdaftar
				</a>
				<?php } else { ?>
				<a class="btn btn-success" href="#" disabled>
					Dikonfirmasi
				</a>
				<?php } ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<div class="text-center">
		<?php 
			}
			echo $this->pagination->create_links();
		?>
	</div>
</div>
