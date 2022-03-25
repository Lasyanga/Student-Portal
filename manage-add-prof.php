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

$firstname = $lastname = $faculty_id = $subj_id = $section_code = "";

if(isset($_POST['submit'])){
	$firstname = test_input($_POST['firstname']);
	$lastname = test_input($_POST['lastname']);
	$faculty_id = test_input($_POST['faculty_id']);
	$subj_id = test_input($_POST['subj_id']);

	if (empty($firstname) || empty($lastname) || empty($faculty_id) || empty($subj_id)) {
		$_SESSION['message'] = "Please fill out all fields";
	}else{
		$performedAdd = new interactDB();

		$performedAdd->performedAddNew($conn, $firstname, $lastname, $faculty_id, $subj_id);
	}	 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php if (isset($_SESSION['user'])): ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Student Portal | Adding New Professor</title>

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
							<p>Add New Professor</p>
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
										<a class="btn btn-success btn-block pl-0 mt-3" href="assign-prof.php">Professor's Section</a>
									</div>
									<div class="col-sm-4  p-1">
										<a class="btn btn-primary btn-block pl-0 mt-3 disabled" href="manage-add-prof.php">Add New Professor</a>
									</div>
								</div>
							</div>
						</div>

						<div class="mt-4">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
								<div class="row">
									<div class="col-lg-12">
										<div class="row">
										<div class="col-lg-6">	
										<label>Professor's First Name:</label>										
											<div class="form-group">
												<input type="text" id="txt" class="form-control" name="firstname" value="<?= $firstname; ?>" onkeyup="check();" required/>
												<span id="err_msg"></span>
											</div>
										</div>
										<div class="col-lg-6">
											<label>Professor's Last Name:</label>
											<div class="form-group">
												<input type="text" id="txt1" class="form-control" name="lastname" value="<?= $lastname; ?>" onkeyup="check2();" required/>
												<span id="err_msg1"></span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>Professor's Faculty:</label>
								<select class="form-control" name="faculty_id" required="true" >
									<option value="" selected>Select Faculty</option>												
									<?php $getOption->getProFaculty($conn); ?>
								</select>
							</div>

							<div class="form-group">
								<label>Professor's Course:</label>
								<select class="form-control" name="subj_id" required="true" >
									<option value="" selected>Select Course</option>
									<?php $getOption->getProfSubj($conn); ?>
								</select>
							</div>

								<div class="row">
									<div class="col-sm-4 ml-auto mb-2">
										<button type="submit" id="btn" name="submit" class="btn btn-primary btn-block" title="Click to add Professor" disabled="false">
											Add New Professor
										</button>
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
	<script type="text/javascript" src="assets/js/custom_script.js"></script>

	<script type="text/javascript">
		var txt = document.getElementById('txt');
		var txt1 = document.getElementById('txt1');

		var flag = false;
		var flag2 = false;
		function check(){
			if(txt.value.match(/^[' 'a-zA-Z]+$/)){
				document.getElementById('btn').disabled = false;
				document.getElementById('err_msg').innerHTML='';
			}else{
				document.getElementById('err_msg').style.color ='red';
				document.getElementById('err_msg').innerHTML='Letters Only Please';
				document.getElementById('btn').disabled = true;
				flag = true;
			}									
		}

		function check2(){
			if(txt1.value.match(/^[' 'a-zA-Z]+$/)){
				document.getElementById('btn').disabled = false;
				document.getElementById('err_msg1').innerHTML='';
			}else{
				document.getElementById('err_msg1').style.color ='red';
				document.getElementById('err_msg1').innerHTML='Letters Only Please';
				document.getElementById('btn').disabled = true;
				flag2 = true;
			}
		}

		if(flag2 == true || flag == true){
			document.getElementById('btn').disabled = true;
		}
	</script>

</body>
</html>


<?php else:?>

<?php header('location: index.php');
	ob_flush();
endif;
 ?>