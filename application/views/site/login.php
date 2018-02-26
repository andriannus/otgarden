<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="login-logo">
	<a href="#">OtGarden</a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
	<p class="login-box-msg">Login untuk masuk ke halaman Admin</p>

	<?php echo form_open('site/login_process'); ?>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Username" name="username">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="password" class="form-control" placeholder="Password" name="password">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
	</form>
</div>