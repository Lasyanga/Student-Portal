<?php
ob_start();
error_reporting(E_ALL);
session_start();
require_once('class/autoload.php');

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

?>
<?php if(isset($_SESSION['user'])):?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Portal | Account Setting</title>

	<?php require('css.php'); ?>
	
</head>
<body style="background-color: #d9d9d9; ">
	<?php 
		include('assets/components/top_nav.php');

		if ($role==1) {
			include('assets/components/admin_side_nav.php');
			$disabled='true';
		}elseif ($role == 3) {
			include('assets/components/faculty_side_nav.php');
			$disabled='true';
		}else{		
			include('assets/components/side_nav.php');
			$disabled='false';
		}
		
	?>
	<div class="container mt-3 mb-5 pb-5">
		<div class="row">
			<div class="col-lg-8" style="margin: 0 auto; float: none;">
				<div class="card" style="width: 100%">
					<div class="card-body">
						<div class="card-title">
							<h4>Change Email Address</h4>
						</div>
						<div class="card-text">
							Please use valid and active e-mail address.
						</div>

						<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
							<div class="form-group mt-2">
								<input type="email" placeholder="Email" class="form-control"  name="email" required disabled="<?=$disabled?>">
							</div>

							<div class="form-group mt-2 ">
								<input type="submit" class="btn btn-primary text-uppercase" name="chgemail" value="Change Email Address" disabled="<?=$disabled?>">
							</div>
						</form>
					</div>					
				</div>
				<div class="card mt-5" style="width: 100%;">
					<div class="card-body">
						<div class="card-title">
							<h4>Reset Password</h4>
						</div>
						<div class="card-text">
							Input a valid and strong password
						</div>

						<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
							<div class="form-group mt-2">
								<input type="password" class="form-control" name="pass" id="psw" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
							</div>	
							<div class="form-group mt-2">
								<input type="password" class="form-control" name="pass" id="confirm_password" placeholder="Confirm Password" required />
							</div>	
							 <div id="message">
									<h6>Password must contain the following:</h6>
									<span id="letter" class="invalid">A <b>lowercase</b> letter</span><br />
									<span id="capital" class="invalid">A <b>capital (uppercase)</b> letter</span><br />
									<span id="number" class="invalid">A <b>number</b></span><br />
									<span id="length" class="invalid">Minimum <b>8 characters</b></span><br />
								</div>
							<span id="matched"></span>
							<div class="form-group mt-2">
								<input type="submit" class="btn btn-primary text-uppercase" name="chgpass" id="password" value="reset password" disabled>
							</div>						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="jumbotron-fluid text-center text-light mt-5 mb-0 p-5" style="background-color:#3d3d5c; height: 50px;">
			<p> Copyright <?php echo date("Y"); ?> <sup>&#169;</sup></p>
		</div>
	</footer>

	<script type="text/javascript">
	var check = document.getElementById('confirm_password');
	
	check.onkeyup = function() {
		if (document.getElementById('psw').value == '') {
			document.getElementById('matched').innerHTML = '';
		}else{
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
	}

	check.onfocus = function() {
		if (document.getElementById('psw').value == '') {
			document.getElementById('matched').innerHTML = '';
		}else{
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
	}

	check.onblur = function() {
		if (document.getElementById('psw').value == '') {
			document.getElementById('matched').innerHTML = '';
		}else{
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
	}
</script>

<script src="assets/js/custom_script.js"></script>
<script src="assets/js/pass.js"></script>


</body>
</html>
<?php else:?>
<?php
	
 header('location: index.php');
ob_flush();
?>
<?php endif;?>

