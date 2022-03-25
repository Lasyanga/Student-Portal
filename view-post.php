<?php
ob_start();
error_reporting(E_ALL);
session_start();
require_once('class/autoload.php');
include('assets/components/config.php');

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

$post_id = "";
if (isset($_GET['post_id'])) {
	$post_id = $_GET['post_id'];

	$getPost = new interactDB();
}


if (isset($_SESSION['user'])){
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Student Portal | Post Announcement</title>
	
	<link rel="icon" href="imgs/home.png">

	<link rel="stylesheet" type="text/css" href="assets/custom_css/slide.css">
	<link rel="stylesheet" href="assets/custom_css/style.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	

	<?php require('css.php'); ?>
</head>
<body style="background-color:  #cccccc;">
	<?php 
		include('assets/components/top_nav.php');

		if ($role==1) {
			include('assets/components/admin_side_nav.php');
		}elseif($role == 3){
			
			include('assets/components/faculty_side_nav.php');
		}else{
			include 'assets/components/side_nav.php';
		}	
		
	?>

	<div class="container mt-4 mb-5">
		<div class="row">
			<div class="col-lg-11" style="margin: 0 auto; float: none;">
				<div class="card">
					<div class="card-body">
						<?php $getPost->getPost($conn, $post_id); ?>
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

	<script type="text/javascript" src="assets/js/custom_script.js"></script>
</body>
</html>
<?php
	}else{
		header('location: index.php');
	}

	ob_flush();
?>