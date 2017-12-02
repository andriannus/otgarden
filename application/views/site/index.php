<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="jumbotron banner">
	<div class="judul">
		<h1>Selamat Datang</h1>
		<hr>
		<h2>Selamat Berbelanja</h2>
	</div>
</div>

<div class="container">
	<?php if (isset($query)) { ?>
	<div class="row">
		<?php foreach ($query as $tanaman): ?>
		<div class="col-md-2">
			<a class="list-item" href="<?php echo base_url('plant/view/'.$tanaman['slug']); ?>">
				<div class="thumbnail">
					<img src="<?php echo base_url('asset/pictures/upload/plant/'.$tanaman['gambar']); ?>" class="img-responsive">
					<div class="caption">
						<h4><?php echo $tanaman['nama']; ?></h4>
						<p class="text-danger bold">Rp. <?php echo number_format($tanaman['harga'], 0, ',', '.'); ?>
					</div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
	</div>

	<div class="text-center">
		<?php
			echo $this->pagination->create_links();
		?>
	</div>
	<?php
		} else {
	?>
		<p><?php echo $message; ?></p>
	<?php } ?>
</div>
