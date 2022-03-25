<?php
ob_start();
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();

require_once('class/autoload.php');
include('assets/components/config.php');
$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

?>

<?php if (isset($_SESSION['user'])): ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Student Portal | Manage Professor</title>

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
							<b>Manage Professor's Student</b>
						</div>
						<div class="card-text">
							<p>Here you can add new professor and assign them to their respective Students.</p>
						</div>

						<?php if (isset($_SESSION['message'])): ?>
							<div class="alert alert-<?=$_SESSION['msg_type'];?> alert-dismissible fade show">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>
									<?php
									echo $_SESSION['message']; #display message
									unset($_SESSION['message']);
									?>
								</strong>
							</div>
						<?php endif ?>

						<div class="row mb-5">
							<div class="col-sm-6 mr-auto">
								<div class="row">
									<div class="col-sm-4 p-1">
										<a class="btn btn-primary btn-block disabled pl-0 mt-3" href="manage-prof.php">Manage</a>
									</div>
									<div class="col-sm-4  p-1">
										<a class="btn btn-success btn-block pl-0 mt-3" href="assign-prof.php">Professor's Section</a>
									</div>
									<div class="col-sm-4  p-1">
										<a class="btn btn-success btn-block pl-0 mt-3" href="manage-add-prof.php">Add New Professor</a>
									</div>
								</div>
							</div>
						</div>

						<div style="overflow-x: auto;">
							<table class="table table-striped table-bordered mt-5 myDataTable">
								<thead>
									<tr class="text-center">
										<th>Id</th>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Faculty</th>
										<th>Subject</th>
										<th>Section</th>
										<th>Action</th>
									</tr>
								</thead>

								<tbody>
									<?php
									//$user_id = $_SESSION['user_id'];

									$getProfAssigned = new interactDB();

									$getProfAssigned->getProfAssigned($conn);

									?>
								</tbody>

								<tfoot>
									<tr class="text-center">
										<th>Id</th>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Faculty</th>
										<th>Subject</th>
										<th>Section</th>
										<th>Action</th>
									</tr>
								</tfoot>
								
								
							</table>
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
	<?php
		include('js.php');
	?>
	<script>
		$(document).ready(function () {
			$('.myDataTable').dataTable({
				// "scrollY": "400px",
				// "scrollCollapse": false,
				"pagingType": 'full_numbers'
			});
		});
		
	</script>
</body>
</html>
<?php else:?>

<?php header('location: index.php');
	ob_flush();
endif;
 ?>