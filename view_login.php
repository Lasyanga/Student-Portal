<?php
ob_start();
session_start();
error_reporting(E_ALL);

require_once("./app_config.php");
?>
<?php 
	if(!isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	 <title>QCU Student Portal</title>

	 <?php require_once("./includes/incl_css.php"); ?>

</head>
<body>
	<?php require_once("./includes/incl_nav.php"); ?>

	<div class="container-fluid">
			<div class="col-lg-4 mt-5" style="margin: 0 auto; float: none">
					<div class="card">
						
					<div class="card-header text-center">
						<h4>Login now</h4>
					</div>

					<?php if(isset($_SESSION['errormsg'])): ?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>
								<?php
									echo $_SESSION['errormsg'];
									unset($_SESSION['errormsg']);
								?>
							</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php	endif	?>

					<div class="body-card">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
 							<div class="form-group ">
 								<input type="text" class="form-control" id="user" placeholder="Username" name="username" required>
 							</div>
 						
						 	<div class="form-group">
							 	<input type="password" class="form-control" id="pwd" placeholder="Password" name="password" required>
 							</div>

 							<div>
 								<button type="submit" class="btn btn-primary btn-block">Login</button><br/>
 							</div>
 							<br><br>
 						</form>
						 <a href="sign-up.php" class="card-link">Create New Account</a>
 					</div>
				</div>
			</div>
	</div>


	<?php
		require_once("./includes/incl_js.php");
	?>
</body>
</html>

 
<?php
}else{
	ob_flush();
}
?>