<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<?php if (count($query) == 0) {; ?>
	<div class="text-center">
		<p><i>-- Tidak ada data --</i></p>
		<a class="btn btn-lg btn-primary" href="<?php echo base_url('plant/add'); ?>" target="_self">
			Tambah Tanaman <i class="fa fa-plus"></i>
		</a>
	</div>
	<?php } else { ?>
	<a class="btn btn-primary" href="<?php echo base_url('plant/add'); ?>" target="_self">
		Tambah Tanaman <i class="fa fa-plus"></i>
	</a>

	<table class="table table-striped text-center margin-top-sm">
		<tr class="bold">
			<td width="10%">Gambar</td>
			<td width="45%">Nama</td>
			<td width="15%">Harga</td>
			<td width="10%">Stok</td>
			<td width="20%">Aksi</td>
		</tr>

		<?php foreach ($query as $tanaman): ?>
		<tr>
			<td><img src="<?php echo base_url('asset/pictures/upload/plant/'.$tanaman['gambar']); ?>" width="30px" height="auto"></td>
			<td><?php echo $tanaman['nama']; ?></td>
			<td>Rp. <?php echo number_format($tanaman['harga'], '0', ',', '.'); ?></td>
			<td><?php echo $tanaman['stok']; ?></td>
			<td>
				<a class="btn btn-success" href="<?php echo base_url('plant/update/').$tanaman['slug']; ?>">
					<i class="fa fa-pencil"></i>
				</a>
				<a class="btn btn-danger" onclick="delete(<?php echo $tanaman['slug']; ?>)">
					<i class="fa fa-times"></i>
				</a>
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

<script type="text/javascript">
	$(document).ready(function() {
		function delete(slug) {
			if (confirm("Anda yakin ingin menghapus data ini?")) {
				$.ajax({
					url: "<?php echo base_url('plant/delete/')?>" + slug,
					type : "POST",
					dataType: "JSON",
					success: function(data) {
						location.reload();
					},
					error: function(jqXHR, textStatus, orrorThrown) {
						alert('Error hapus data');
					}
				});
			}
		}
	})
</script>