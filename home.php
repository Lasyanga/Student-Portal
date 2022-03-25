<?php
	require_once('class/autoload.php');
	include('assets/components/config.php');
	ob_start();
	error_reporting(E_ALL);
	session_start();

	$getFeed = new interactDB();
	$role = $_SESSION['role'];
	$user_id = $_SESSION['user_id'];
	$section = $_SESSION['section'];

	if(isset($_GET['logout']) == 1 ){
		session_unset();
		session_destroy();
	}


?>

<?php if (isset($_SESSION['user'])): ?>

<!Doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<link rel="icon" href="imgs/home.png">
	
	<title>QCU</title>
	<?php require('css.php'); ?>

	
</head>

<body style="background-color:  #cccccc;">
	<?php 
        include('assets/components/top_nav.php');

        if ($role==1) {
            include('assets/components/admin_side_nav.php');
        }elseif ($role == 3) {
            include('assets/components/faculty_side_nav.php');
        }else{      
            include('assets/components/side_nav.php');
        }
    ?>
    

	<br>
	<div class="container mt-4 mb-5">
		<div class="row">
			<div class="col-lg-11" style="margin: 0 auto; float: none;">

				<?php $getFeed->getFeed($conn, $user_id, $section); ?>
				
			</div>
		</div>
	</div>
<!--Footer-->
<?php
	include'js.php';
 	include('assets/components/footer.php');?>

</body>
		</html>

<?php else: ?>
	<?php

	 header('location: index.php'); 
		ob_flush();
	?>
	
<?php endif ?>

