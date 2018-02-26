<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="content-header">
	<h1>
		Tanaman
		<small>Ubah Data</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Dashboard
			</a>
		</li>
		<li class="active">Tanaman</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah Data Tanaman</h3>
				</div>

				<div class="box-body">
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
				</div>
				<div class="box-footer">
					<a class="btn btn-danger" href="<?php echo base_url('admin/plant'); ?>">Cancel</a>
					<input class="btn btn-success" type="submit" value="Submit">
				</div>
					<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>