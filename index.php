<?php
ob_start();
error_reporting(E_ALL);
session_start();
//set_time_limit(100);
require_once("class/autoload.php");
include("assets/components/config.php");


$username = $password = $errmsg = $_SESSION['errmsg']="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = new interactDB();

	if(!empty($username) && !empty($password)){
		$login -> login($conn, $username, $password);
		
	}else{
		$errmsg ="Wrong username or password";
	}

}

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

	<?php
	require('css.php');
    ?>

</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="index.php">
			<img src="imgs/home.png" alt="qcu logo" style="width: 50px; height: 50px" />
			<span class="text-uppercase">
				qcu student portal
			</span>	
		</a>
	</nav>

	<div class="container-fluid">
		<div class="rows">
			<div class="col-lg-4 mt-5" style="margin: 0 auto; float: none">
					<div class="card">
						
					<div class="card-header text-center">
						<h4>Login now</h4>
						<span style="color:red;"><?php echo $_SESSION['errmsg']; ?></span>
					</div>

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
	</div>


	<?php
		include('js.php');
	?>
</body>
</html>

 
<?php
}else{
	ob_flush();
}
?>