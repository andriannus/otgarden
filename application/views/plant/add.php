<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<h1 class="text-center">Tambah data</h1>

		<?php echo form_open_multipart('plant/add_process'); ?>
		<div class="form-group">
			<label>Gambar</label>
			<input class="form-control" type="file" name="picture">
		</div>
		<div class="form-group">
			<label>Slug</label>
			<input class="form-control" name="slug">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input class="form-control" name="harga">
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input class="form-control" name="stok">
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
			<textarea class="form-control" name="deskripsi"></textarea>
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