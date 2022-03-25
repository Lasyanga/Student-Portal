<?php
error_reporting(E_ALL);
ob_start();

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();

require_once('class/autoload.php');
include('assets/components/config.php');

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

$getOption = new interactDB();

$prof_id = $prof_name = $subject = $section = $subject_code ="";

if(isset($_GET['edit'])){

	$prof_id = $_GET['edit'];

	$setUpdate = new interactDB();

	$setUpdate->setPrepareUpdateProf($conn, $prof_id);

	$prof_name = $_SESSION['prof_name'];

	$subject = $_SESSION['subj'] ;
	$subject_code = $_SESSION['subject_code'];

	$section =  $_SESSION['section'];
	$section_code = $_SESSION['section_code'];

}

if (isset($_POST['update'])) {
	$prof_id = $_POST['prof_id'];
	$subject_code =$_POST['subj_id'];
	$section_code = $_POST['section_code'];

	$performedUpdate = new interactDB();

	$performedUpdate->performedUpdate($conn, $prof_id, $subject_code, $section_code);

}


if(isset($_POST['submit'])){
	$prof_id = $_POST['prof_id'];
	$subject_code =$_POST['subj_id'];
	$section_code = $_POST['section_code'];

	// if(empty($prof_id) || empty($subject_code) || empty($section_code)){
	// 	$_SESSION['message'] = "Please fill out all fields";
	// 	$_SESSION['msg_type'] = "warning";
	// }else{
		$performedAssign = new interactDB();

		$performedAssign->performedAssign($conn, $prof_id, $subject_code, $section_code);
	// }

}

?>

<?php if (isset($_SESSION['user'])): ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Student Portal | Assigning Professor</title>
	
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
							<p>Please Assign Professor to their respective student</p>
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

						<div class="row">
							<div class="col-sm-6 mr-auto">
								<div class="row">
									<div class="col-sm-4 p-1">
										<a class="btn btn-success btn-block pl-0 mt-3" href="manage-prof.php">Manage</a>
									</div>
									<div class="col-sm-4  p-1">
										<?php if(isset($_GET['edit'])): ?>
											<a class="btn btn-primary btn-block pl-0 mt-3 disabled" href="assign-prof.php">Updating</a>
											<?php else: ?>
												<a class="btn btn-primary btn-block pl-0 mt-3 disabled" href="assign-prof.php">Professor's Section</a>
											<?php endif; ?>
									</div>
									<div class="col-sm-4  p-1">
										<a class="btn btn-success btn-block pl-0 mt-3" href="manage-add-prof.php">Add New Professor</a>
									</div>
								</div>
							</div>
						</div>

						<div class="mt-4">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
								<div class="form-group">
									<label>Professor's Name:</label>
									<select class="form-control" name="prof_id" required="true" />
										<?php if(isset($_GET['edit'])): ?>
											<option value="<?= $prof_id; ?>" selected><?= $prof_name; ?></option>
											<?php else: ?>
												<option value="" selected>Select Professor's Name</option>
												<?php $getOption->getProfName($conn); ?>
											<?php endif; ?>
									</select>
								</div>

								<div class="form-group">
									<label>Professor's Course:</label>
									<select class="form-control" name="subj_id" required="true" >
										<?php if(isset($_GET['edit'])): ?>
											<option value="<?=$subject_code;?>" selected><?= $subject; ?></option>
											<?php else: ?>
												<option value="" selected>Select Course</option>												
											<?php endif; ?>
											<?php $getOption->getProfSubj($conn); ?>
									</select>
								</div>

								<div class="form-group">
									<label>Professor's Section:</label>
									<select class="form-control" name="section_code" required="true">
										<?php if(isset($_GET['edit'])): ?>
											<option value="<?=$section_code?>" selected><?= $section; ?></option>
											<?php else: ?>
												<option value="" selected>Select Section</option>
											<?php endif; ?>
										<?php $getOption->getProfSec($conn); ?>
									</select>
								</div>

								<div class="row">
									<div class="col-sm-4 ml-auto mb-2">
										<?php if (isset($_GET['edit'])):?>
											<button type="submit" name="update" class="btn btn-primary btn-block" title="Click to update">Update</button>
											<?php else: ?>
												<button type="submit" name="submit" class="btn btn-primary btn-block" title="Click to assign section">Assign Section to Professor</button>
											<?php endif;;?>
									</div>
								</div>
							</form>

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
	<?php include'js.php'; ?>
</body>
</html>


<?php else:?>

<?php header('location: index.php');
	ob_flush();
endif;
 ?>