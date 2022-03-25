<?php
ob_start();
error_reporting(E_ALL);
session_start();

require_once('class/autoload.php');
include('assets/components/config.php');

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

$getGrade = new interactDB();

?>
<?php if (isset($_SESSION['user'])): ?>
	
<!Doctype html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="imgs/home.png">
	
	<title>QCU</title>
	
	<?php require('css.php'); ?>
</head>

<body style="background-color:  #cccccc;" >
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

	<div class="container">
		<div class="row">
			<div class="col-lg-11" style="margin: 0 auto; float: none;">
				<?php if ($role == 3): ?>
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								NO GRADE RIGHT NOW
							</div>
						</div>
					</div>
					<?php else: ?>

						<div class="container mt-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title" style="color:#3d3d5c; font-size:22px;">
										<b>Grades</b>
									</div>
									<div class="card-text">
										<p>Here are the list of Subjects and your Grades</p>
									</div>
									<div style="overflow-x: auto;">
										<table class="table table-striped table-bordered mt-4 myDataTable" style="width:100%;">
											<thead>
												<tr class="text-center bg-primary">
													<th>Subject Code</th>
													<th>Subject Title</th>
													<th>Grades</th>
													<th>Semister</th>
													<th>Year</th>
													<th>Remarks</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$getGrade->getGrade($conn, $user_id);
												?>
											</tbody>
											<tfoot>
												<tr class="text-center bg-primary">
													<th>Subject Code</th>
													<th>Subject Title</th>
													<th>Grades</th>
													<th>Semister</th>
													<th>Year</th>
													<th>Remarks</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
					<?php endif;?>
				</div>
			</div>
			<br><br>
		</div>
		<br><br>
	<!--FOOTER -->
	<?php 
		include'js.php';
		if($role == 2){
			include('assets/components/footer.php');
		}else
	?>
	<?php{?>
	<footer>
		<div class="jumbotron-fluid text-center text-light mt-5 mb-0 p-5" style="background-color:#3d3d5c; height: 50px;">
			<p> Copyright <?php echo date("Y"); ?> <sup>&#169;</sup></p>
		</div>
	</footer>
	<?php}?>
<script>
		$(document).ready(function () {
			$('.myDataTable').dataTable({
				// "scrollY": "400px",
				// "scrollCollapse": true,
				"pagingType": 'full_numbers'
			});
		});
	</script>
	
</body>
</html>
<?php else: ?>
	<?php header('location: index.php');
	ob_flush(); ?>
<?php endif ?>
