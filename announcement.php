<?php
ob_start();
error_reporting(E_ALL);
session_start();
require_once('class/autoload.php');
include('assets/components/config.php');

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

if (isset($_SESSION['user'])){
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


	<title>Student Portal | Post Announcement</title>
	
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
    
	<div class="container mt-4 mb-5">
		<div class="row">
			<div class="col-lg-11" style="margin: 0 auto; float: none;">
				<div class="card">
					<div class="card-body">
						<div class="card-title" style="color:#3d3d5c; font-size:22px;">
							<b>Manage Announcement</b>
						</div>
						<div class="card-text">
							<p>Please Manage your Announcement Responsibly</p>
						</div>

						<?php if (isset($_SESSION['message'])): ?>
							<div class="alert alert-<?=$_SESSION['msg_type'];?>  alert-dismissible fade show">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>
									<?php
									echo $_SESSION['message'];
									unset($_SESSION['message']);
									?>
								</strong>
							</div>
						<?php endif ?>

						<a class="btn btn-primary disable" href="announcement.php">Manage</a>
						<a class="btn btn-success" href="announ-add.php">Add New Post</a>

						<div style="overflow-x: auto;">
							<?php if($role == 1): ?>
								<table class="table table-striped table-bordered mt-4 myDataTable" style="width:100%;">
									<thead>
										<tr class="text-center">
											<th>Title</th>
											<th>Content</th>
											<th>Date Posted</th>
											<th>Status</th>	
											<th>Last Edited</th>
											<th>Onwer</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$getAnnouncement = new interactDB();
										$getAnnouncement->getAnnouncementAdmin($conn);
										?>
									</tbody>

									<tfoot>
										<tr class="text-center">
										<th>Title</th>
										<th>Content</th>
										<th>Date Posted</th>
										<th>Status</th>								
										<th>Last Edited</th>
										<th>Onwer</th>
										<th>Action</th>
										</tr>
									</tfoot>						

								</table>

							<?php else:?>
								<table class="table table-striped table-bordered mt-4 myDataTable">
									<thead>
										<tr class="text-center">
											<th>Title</th>
											<th>Content</th>
											<th>Date Posted</th>
											<th>Status</th>								
											<th>Last Edited</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										<?php
											$user_id = $_SESSION['user_id'];

											$getAnnouncement = new interactDB();

											$getAnnouncement->getAnnouncement($conn, $user_id);
										?>
									</tbody>

									<tfoot>
										<tr class="text-center">
											<th>Title</th>
											<th>Content</th>
											<th>Date Posted</th>
											<th>Status</th>								
											<th>Last Edited</th>
											<th>Action</th>
										</tr>
									</tfoot>
									
								</table>
							<?php endif;?>
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

	<?php include 'js.php'; ?>

	<script>
		$(document).ready(function () {
			$('.myDataTable').dataTable({
				// "scrollY": "400px",
				// "scrollCollapse": true,
				"pagingType": "full_numbers"
			});
		});
	</script>

</body>
</html>
<?php
	}else{
		header('location: index.php');
	}

	ob_flush();
?>