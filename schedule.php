<?php
ob_start();
error_reporting(E_ALL);
session_start();
require_once('class/autoload.php');
include('assets/components/config.php');

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];
$section = $_SESSION['section'];


$getSchedule = new interactDB();

$getNote = new interactDB();


?>
<?php if (isset($_SESSION['user'])): ?>
<!Doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
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
	<div class="container mt-4">
		<div class="card">
			<div class="card-body">
				<div class="card-title" style="color:#3d3d5c; font-size:22px;">
					<b>Schedule</b>
				</div>
				<div class="card-text">
					<p>Here are your schedules</p>	
					<?php $getNote->getNote($conn, $section);?>			
				</div>

				<div style="overflow-x: auto;">
					<table class="table table-striped table-bordered mt-4 myDataTable" style="width:100%;">
						<thead>
							<tr class="text-center">
								<th>Subject Code</th>
								<th>Subject Title</th>
								<th>Time</th>
								<th>Day</th>
								<th>Professor</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$getSchedule->getSchedule($conn, $user_id, $section);

							?>
							
						</tbody>
						<tfoot>
							<tr class="text-center">
								<th>Subject Code</th>
								<th>Subject Title</th>
								<th>Time</th>
								<th>Day</th>
								<th>Professor</th>
							</tr>
						</tfoot>
					</table>

				</div>
			</div>
		</div>
	</div>
		
	<!--FOOTER -->
	<?php 
	include('assets/components/footer.php');
	include('js.php');
	?>

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
