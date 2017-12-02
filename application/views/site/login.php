<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div class="box">
			<h1 class="text-center margin-bottom-md">Login <span class="text-success">Ot Garden</span></h1>
			<?php echo form_open('site/login_process'); ?>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<button class="btn btn-block btn-lg btn-primary" type="submit">Submit</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>