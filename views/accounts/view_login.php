<?php
ob_start();
session_start();
error_reporting(E_ALL);
require_once("./layouts/header.php");

$details = null;

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['event_action'] == 'login'){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = new LoginSignup($conn, "userfile");
	$details = $login->loginUser($username, $password);
}

?>
<?php 
	if(!isset($_SESSION['user'])){
?>

	<input type="hidden" name="current_login" value="<?php echo $details['current_login']; ?>" id="txt_current_login" />
	<div class="container-fluid">
		<div class="col-lg-4 mt-5" style="margin: 0 auto; float: none">
			<div class="card">
				<div class="card-header text-center">
					<h4>Login now</h4>
				</div>
				
				<?php if(isset($details['msg'])): ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>
							<?php
								echo $details['msg'];
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
							<button type="submit" class="btn btn-primary btn-block" name="event_action" value="login">Login</button><br/>
						</div>
						<br><br>
					</form>
					<a href="sign-up.php" class="card-link">Create New Account</a>
				</div>
			</div>
		</div>
	</div>

	<script>
		jQuery(function(){
			const current_login = jQuery('#txt_current_login').val();

			if(current_login == 1){
				alert("The user was currently login");
			}
		});
	</script>


	<?php
		require_once("./layouts/footer.php");
		
	}else{
		ob_flush();
	}
	?>