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
		}else{
			
			include('assets/components/faculty_side_nav.php');
		}
		
	?>

	<div class="container mt-4 mb-5">
		<div class="row">
			<div class="col-lg-12" style="margin: 0 auto; float: none;">
				<div class="card">
					<div class="card-body">
						<div class="card-title" style="color:#3d3d5c; font-size:22px;">
							<b>Student List</b>
						</div>
						<div class="card-text">
							<?php if ($role == 1): ?>
								<p>The list shown below enrolled Student.</p>
							<?php else: ?>
								<p>The list shown in the table is/are Your Student in your Section.</p>
							<?php endif; ?>
							
						</div>
						<div style="overflow-x: auto;">
							<table class="table table-striped table-bordered mt-4 myDataTable" style="width:100%;">
								<thead>
									<tr class="text-center">
										<th>#</th>	
										<th>Student_id</th>										
										<th>Lastname</th>
										<th>Firstname</th>
										<th>Middlename</th>
										<th>Course</th>	
										<th>Section</th>
										<th>Campus</th>
										<th>Email</th>
										<th>Year Level</th>
										<th>Semister</th>
									</tr>
								</thead>

								<tbody>
									<?php
										$getStudentlist = new interactDB();
										$getStudentlist->getStudentlist($conn, $role, $user_id);
									?>
								</tbody>

								<tfoot>
									<tr class="text-center">
										<th>#</th>	
										<th>Student_id</th>										
										<th>Lastname</th>
										<th>Firstname</th>
										<th>Middlename</th>
										<th>Course</th>	
										<th>Section</th>
										<th>Campus</th>
										<th>Email</th>
										<th>Year Level</th>
										<th>Semister</th>
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

	<?php include 'js.php'; ?>

	<script>
		$(document).ready(function () {
			$('.myDataTable').dataTable({
				//"scrollY": "400px",
				//"scrollX": false,
				//"scrollCollapse": true,
				"pagingType": 'full_numbers'
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