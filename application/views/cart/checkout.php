<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<ol class="breadcrumb no-border-radius">
		<li><a href="<?php echo base_url('site'); ?>">Beranda</a></li>
		<li>Checkout</li>
	</ol>

	<div class="row">
		<div class="col-md-8">
			<p class="bold text-success">Informasi Tagihan</p>

			<?php 
				echo form_open('order/add');
				echo form_hidden('biaya', $this->cart->total());
			?>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Nama Depan</label>
						<input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" required pattern="[A-Za-z]">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Nama Belakang</label>
						<input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" pattern="[A-Za-z]">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>HP/Telepon</label>
						<input type="text" class="form-control" name="telepon" placeholder="Contoh: 08130000000" required pattern="[0-9]">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="Contoh: email@domain.com" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Alamat Lengkap</label>
						<textarea class="form-control" rows="5" name="alamat" placeholder="Alamat lengkap Anda. Dari nama Jalan, Blok, RT/RW, Kelurahan, Kecamatan, Kota, hingga kode pos." required></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-block btn-success">Submit Order</button>
					</div>
				</div>

				<br>
				<?php
					$array_item = array();
					foreach($this->cart->contents() as $q) { 
						$array_item[] = $q['name'].' x'.$q['qty'];
					}
					$barang = implode(",", $array_item);
					echo form_hidden('barang', $barang);
				?>
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-md-4">
			<p class="bold">Total Biaya Pembelian</p>
			<div class="well">
				<span class="text-danger bold" style="font-size: 24px;">
					Rp. <?php echo number_format($this->cart->total(), '0', ',', '.'); ?>
				</span>
			</div>

			<p class="bold">Keterangan</p>
			<ul class="list-group">
				<li class="list-group-item list-group-item-danger">Harga di atas belum termasuk ongkos kirim</li>
				<li class="list-group-item list-group-item-danger">Kami akan segera mengirimkan Total Biaya MELALUI SMS atau WA ke No. Handphone Anda setelah Anda mengirimkan detail informasi tagihan</li>
				<li class="list-group-item list-group-item-danger">Untuk mengirimkan detail informasi tagihan, isi form dan klik tombol Submit Order</li>
			</ul>
		</div>
	</div>
</div>