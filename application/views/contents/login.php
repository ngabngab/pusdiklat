<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
			function hideURLbar()
			{ 
				window.scrollTo(0,1); 
			} 
		</script>
		<link href="<?php echo base_url();?>assets/login/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url();?>assets/login/css/style.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url();?>assets/login/css/font-awesome.css" rel="stylesheet"> 
		<script src="<?php echo base_url();?>assets/login/js/jquery.min.js"> </script>
		<script src="<?php echo base_url();?>assets/login/js/bootstrap.min.js"> </script>
	</head>
	<body>
		<div class="login">
			<h1><a href="index.php">SIMDIKLAT </a></h1>
			<h3><?php echo validation_errors(); ?></h3>
			<div class="login-bottom">
				<h2>Login</h2>
				<?php echo form_open('verifylogin'); ?>
				<div class="col-md-12">
					<div class="login-mail">
						<input type="text" placeholder="Username" required="" id="username" name="username">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="login-mail">
						<input type="password" placeholder="Password" required="" id="password" name="password">
						<i class="fa fa-lock"></i>
					</div>
					   <a class="news-letter " href="#">
							 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
						   </a>

				
				</div>
				<div class="col-md-12 login-do">
					<label class="login-sub">
						<input type="submit" value="Login">
						</label>
				</div>
				
				<div class="clearfix"> </div>
				</form>
			</div>
		</div>

	</body>
</html>