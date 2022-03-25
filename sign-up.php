<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
ob_start();
error_reporting(E_ALL);
session_start();
require_once("class/autoload.php");
include('assets/components/config.php');


$fname = $lname = $user_no = $username = $password = $errmsg = $_SESSION['errmsg']="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_POST['username'];
    $password = $_POST['password'];
    $user_no = $_POST['user_no'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    $signup = new interactDB();
    if(!empty($username) && !empty($password)){
		$signup -> signup($conn, $user_no, $fname, $lname,$username, $password);
		
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Signup|QCU Student Portal</title>
    <?php
	require('css.php');
	?>
    <title>QCU Student Portal</title>

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
							<h4>Sign up</h4>
							<span style="color:red;"><?php echo $_SESSION['errmsg']; ?></span>
						</div>
					
						<div class="body-card">
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
 								<div class="form-group ">
 									<input type="number" class="form-control text-center" id="stud-no" placeholder="ID Number" name="user_no" value="<?php echo $user_no;?>" required>
 								</div>

                             	<div class="form-group ">
 									<input type="text" class="form-control  text-center" id="fname" placeholder="Firstname" name="fname" value="<?php echo $fname;?>" required>
 								</div>

                             	<div class="form-group ">
 									<input type="text" class="form-control  text-center" id="lname" placeholder="Lastname" name="lname" value="<?php echo $lname;?>" required>
 								</div>

                             	<div class="form-group ">
 									<input type="text" class="form-control  text-center" id="user" placeholder="Username" name="username" value="<?php echo $username;?>" required>
 								</div>
 						
						 		<div class="form-group">
							 		<input type="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control  text-center" placeholder="Password" name="password" required>
 								</div>

                            	<div class="form-group">
							 		<input type="password" class="form-control  text-center" id="confirm_password" placeholder="Confirm Password" name="repassword" required>
								 </div>
								 
								 <div id="message">
									<h6>Password must contain the following:</h6>
									<span id="letter" class="invalid">A <b>lowercase</b> letter</span><br />
									<span id="capital" class="invalid">A <b>capital (uppercase)</b> letter</span><br />
									<span id="number" class="invalid">A <b>number</b></span><br />
									<span id="length" class="invalid">Minimum <b>8 characters</b></span><br />
								</div>
								<span id="matched"></span>
								<div>
																
									<input type="submit" id="password" value="Register" class="btn btn-primary btn-block" disabled><br/>
								</div>
							</form>
							<a href="index.php" class="card-link content-block">Already have account?</a>
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
	header('location: home.php');
	ob_flush();
}
?>
<script src="assets/js/pass.js"></script>

<script type="text/javascript">
	var check = document.getElementById('confirm_password');
	
	check.onkeyup = function() {
		if (document.getElementById('psw').value ==
			document.getElementById('confirm_password').value) {
			document.getElementById('matched').style.color = 'green';
			document.getElementById('matched').innerHTML = 'Confirm Password: matched';
			document.getElementById('password').disabled = false;
		} else {
			document.getElementById('matched').style.color = 'red';
			document.getElementById('matched').innerHTML = 'Confirm Password: not matched';
			document.getElementById('password').disabled=true;
		}
	}
</script>
