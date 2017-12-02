<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown-nav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('admin'); ?>">Administrator</a>
		</div>

		<div class="collapse navbar-collapse" id="dropdown-nav">
			<ul class="nav navbar-nav navbar-right">
				<?php
					if ($menu == 'home') {
				?>
				<li class="active">
					<a href="<?php echo base_url('admin/index'); ?>" target="_self">
						<i class="fa fa-home"></i> Beranda
					</a>
				</li>
				<?php
				} else {
				?>
				<li>
					<a href="<?php echo base_url('admin/index'); ?>" target="_self">
						<i class="fa fa-home"></i> Beranda
					</a>
				</li>
				<?php
				}
				?>

				<?php
				if ($menu == 'plant') {
				?>
				<li class="active">
					<a href="<?php echo base_url('admin/plant'); ?>" target="_self">
						<i class="fa fa-leaf"></i> Tanaman
					</a>
				</li>
				<?php
				} else {
				?>
				<li>
					<a href="<?php echo base_url('admin/plant'); ?>" target="_self">
						<i class="fa fa-leaf"></i> Tanaman
					</a>
				</li>
				<?php
				}
				?>

				<?php
				if ($menu == 'order') {
				?>
				<li class="active">
					<a href="<?php echo base_url('admin/order'); ?>" target="_self">
						<i class="fa fa-shopping-bag"></i> Pesanan
					</a>
				</li>
				<?php
				} else {
				?>
				<li>
					<a href="<?php echo base_url('admin/order'); ?>" target="_self">
						<i class="fa fa-shopping-bag"></i> Pesanan
					</a>
				</li>
				<?php
				}
				?>

				<?php
					if ($this->session->userdata('login') == true) {
				?>
				<li>
					<a href="<?php echo base_url('site/logout'); ?>">
						<i class="fa fa-sign-out"></i> Logout
					</a>
				</li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
</nav>
