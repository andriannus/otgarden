<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<h1 class="text-center">Ubah data</h1>

		<?php echo form_open_multipart('plant/update_process'); ?>
			<?php echo form_hidden('slug', $query->slug); ?>
			<div class="form-group">
				<img class="thumbnail" width="100px" src="<?php echo base_url('asset/pictures/upload/plant/'.$query->gambar); ?>">
			</div>
			<div class="form-group">
				<label>Gambar Baru</label>
				<input class="form-control" type="file" name="picture">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input class="form-control" name="nama" value="<?php echo $query->nama; ?>">
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input class="form-control" name="harga" value="<?php echo $query->harga; ?>">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input class="form-control" name="stok" value="<?php echo $query->stok; ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea class="form-control" name="deskripsi"><?php echo $query->deskripsi; ?></textarea>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<input class="btn btn-block btn-success" type="submit" value="Submit">
					</div>
					<div class="col-md-6">
						<a class="btn btn-block btn-danger" href="<?php echo base_url('admin/plant'); ?>">Cancel</a>
					</div>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>