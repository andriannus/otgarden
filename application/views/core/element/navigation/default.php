<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown-nav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('site') ?>" style="color: green; font-weight: bold;">Ot Garden</a>
		</div>

		<div class="collapse navbar-collapse" id="dropdown-nav">
			<form class="navbar-form navbar-left" action="<?php echo base_url('site/search?'); ?>">
				<div class="input-group">
					<input type="text" class="form-control" size="93" name="q" placeholder="Cari nama tanaman disini..."
						<?php 
							if ($this->input->get('q')) {
								echo "value = ".$this->input->get('q');
							}
						?>
					>
					<span class="input-group-btn">
						<button type="submit" class="btn btn-success">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<?php
					if ($menu == 'search') {
				?>
				<li class="active">
					<a href="<?php echo base_url('order/search'); ?>">
						<i class="fa fa-check-square"></i> Cek Pesanan
					</a>
				</li>
				<?php
				} else {
				?>
				<li>
					<a href="<?php echo base_url('order/search'); ?>">
						<i class="fa fa-check-square"></i> Cek Pesanan
					</a>
				</li>
				<?php
				}
				?>

				<?php 
					if ($this->cart->total_items() < 1) {
						if ($menu == 'cart') {
				?>
						<li class="active">
							<a href="<?php echo base_url('cart'); ?>">
								<i class="fa fa-shopping-cart"></i>
							</a>
						</li>
				<?php 
						} else {

				?>
						<li>
							<a class="" href="<?php echo base_url('cart'); ?>">
								<i class="fa fa-shopping-cart"></i>
							</a>
						</li>
				<?php
						} 
					} else {
						if ($menu == 'cart') {
				?>
						<li class="active">
							<a class="" href="<?php echo base_url('cart'); ?>">
								<i class="fa fa-shopping-cart"></i>&nbsp;
								<span class="badge"><?php echo $this->cart->total_items(); ?></span>
							</a>
						</li>
				<?php 
						} else {
				?>
						<li>
							<a class="" href="<?php echo base_url('cart'); ?>">
								<i class="fa fa-shopping-cart"></i>&nbsp;
								<span class="badge"><?php echo $this->cart->total_items(); ?></span>
							</a>
						</li>
				<?php
						}
					}
				?>
			</ul>
		</div>
	</div>
</nav>
