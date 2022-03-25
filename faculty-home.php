<?php
ob_start();
error_reporting(E_ALL);
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();

include('assets/components/config.php');
require_once('class/autoload.php');

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

$getCount = new interactDB();

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

?>

<?php if (isset($_SESSION['user'])): ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	
	<title>QCU</title>
	<?php require('css.php'); ?>

	<style>
		div.gallery {
			margin: 5px;
			border: 1px solid #ccc;
			float: none;
			width: 280px;
			background-color:#3d3d5c;
		}

		div.gallery:hover {
			border: 1px solid #777;
			
		}
		div.gallery img {
			width: 100%;
			height: 100%;
		}
		div.desc {
			padding: 15px;
			text-align: center;
		}
	</style>
</head>
<body style="background-color: #d9d9d9; ">

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
    

	<div class="container mt-5 p5">
		<div class="row">
			<div class="col-lg-10" style="margin: 0 auto; float:none">
				<div class="row">
					<div class="col-lg-4" style="margin: 0 auto; float: none;">
						<div class="gallery">
							<a href="announcement.php" class="text-light">
								<img src="imgs/announ.jpg" width="600px" height="400px" alt="announcement" title="Post New Announcement" />
								<div class="desc text-uppercase">
									announcement (
									<?php
									 $getCount->getCountAnnouncement($conn, $role, $user_id);
									?>
									)
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4" style="margin: 0 auto; float: none;">
						<div class="gallery">
							<a href="upload-materials.php" class="text-light">
								<img src="imgs/upload.png" width="600px" height="400px"  />
								<div class="desc text-uppercase">
									upload materials 
									<?php
										$getCount->getCountUploaded($conn, $role, $user_id);
									?>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4" style="margin: 0 auto; float: none;">
						<div class="gallery">
							<a href="view_students_list.php" class="text-light">
								<img src="imgs/Students.png" width="600px" height="400px" alt="announcement" title="Post New Announcement" />
								<div class="desc text-uppercase">

									Students
									<?php
										$getCount->getCountStudent($conn, $role, $user_id);
									?>
								</div>
							</a>
						</div>
					</div>
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
	<?php include('js.php');?>
</body>
	

</html>



<?php else:?>

<?php header('location: index.php');
	ob_flush();
endif;
 ?>