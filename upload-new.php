<?php
ob_start();
error_reporting(E_ALL);
session_start();
require_once('class/autoload.php');
include('assets/components/config.php');

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

$btnUpdate =  $title=  $content = $txt="";

if(isset($_GET['edit'])){
	$txt ="Update Materials";

	$post_id = $_GET['edit'];

	$btnUpdate = true;

	$sql = "SELECT * FROM announcement_tbl WHERE post_id = $post_id";
	$result = $conn->query($sql) or die("Error: ". $conn->mysqli_error());
	$rows = $result->fetch_assoc();

	$_SESSION['title'] = $rows['title'];
	$_SESSION['content'] = $rows['content'];
	$_SESSION['post_id'] = $rows['post_id'];

	$title = $_SESSION['title'];
	$content =$_SESSION['content'];

}else{
	$txt="Upload New Materials";
}

if(isset($_POST['update'])){
	$post_id = $_SESSION['post_id'];
	$title = test_input($_POST['title']);
	$content = test_input($_POST["content"]);
	$date_edited = date("F j, Y, g:i a");
	$user_id = test_input($_SESSION['user_id']);


	$update = "UPDATE announcement_tbl 
					SET title = '$title',
					content = '$content',
					status ='Edited',
					date_edited ='$date_edited'
			WHERE post_id = $post_id";

	if ($conn->query($update) === true) {

		$_SESSION['message'] = "Your Announcement is successfully Edited.";
		$_SESSION['msg_type'] =  "success";		
	}else{
	 	die("Error: " . $conn->mysqli_error());
	}

	$file = $_FILES['item_file']['name'];

	if (!empty($file)) {
			if(count($_FILES["item_file"]['name'])>0){//check if any file uploaded

				$sql ="SELECT * FROM announcement_tbl ORDER BY post_id desc";
				$result = $conn->query($sql) or die("Error: ".$conn->mysqli_error());
				$rows = $result-> fetch_assoc();

				$post_id = $rows['post_id'];


				for($j=0; $j < count($_FILES["item_file"]['name']); $j++){ //loop the uploaded file array
					$filen = $_FILES["item_file"]['name']["$j"]; //file name
					$path = 'uploads/'.$filen; //generate the destination path
					if(move_uploaded_file($_FILES["item_file"]['tmp_name']["$j"],$path)){//upload the file 
						
						$sql = "INSERT INTO upload_tbl(up_id, post_id, user_id, file_name) VALUES('', '$post_id', '$user_id', '$filen')";
						$conn->query($sql) or die("Error: ".$conn->mysqli_error());
						
						$_SESSION['message_file'] = "File# ".($j+1)." ($filen) uploaded successfully<br>";//Success message

						header('location: upload-materials.php');
					}
				}
			}else {
				$_SESSION['message'] = "No files found to upload"; //No file upload message
				
			}
		}else{
			unset($_SESSION['post_id']);
			header('location: upload-materials.php');
		}

}

if (isset($_POST['submit'])) {

	$title = test_input($_POST['title']);
	$content = test_input($_POST["content"]);
	$date_posted = date("F j, Y, g:i a");

	$user_id = test_input($_SESSION['user_id']);

	if(!empty($title) && !empty($content)){
		$sql = "INSERT INTO announcement_tbl(post_id, user_id, title, content, date_posted, status)
				VALUES('','$user_id', '$title', '$content', '$date_posted', 'Posted')";
		$conn->query($sql) or die("Error: ". $conn->mysqli_error());

		// $_SESSION['message'] = "Your Announcement is successfully posted.";
		// $_SESSION['msg_type'] =  "success";	
		$file = $_FILES['item_file']['name'];	

		if (!empty($file)) {
			if(count($_FILES["item_file"]['name'])>0){//check if any file uploaded

				$sql ="SELECT * FROM announcement_tbl ORDER BY post_id desc";
				$result = $conn->query($sql) or die("Error: ".$conn->mysqli_error());
				$rows = $result-> fetch_assoc();

				$post_id = $rows['post_id'];


				for($j=0; $j < count($_FILES["item_file"]['name']); $j++){ //loop the uploaded file array
					$filen = $_FILES["item_file"]['name']["$j"]; //file name
					$path = 'uploads/'.$filen; //generate the destination path
					if(move_uploaded_file($_FILES["item_file"]['tmp_name']["$j"],$path)){//upload the file 
						$sql = "INSERT INTO upload_tbl(up_id, post_id, user_id, file_name, purpose) VALUES('', '$post_id', '$user_id', '$filen', 'Learning Material')";
						$conn->query($sql) or die("Error: ".$conn->mysqli_error());
						
						$_SESSION['message_file'] = "File# ".($j+1)." ($filen) uploaded successfully<br>";//Success message

						header('location: upload-materials.php');
					}
				}
			}else {
				$_SESSION['message'] = "No files found to upload"; //No file upload message
				
			}
		}else{
			$_SESSION['message'] = "Your Announcement is successfully posted.";
				$_SESSION['msg_type'] =  "success";	
				header('location: upload-materials.php');
				
			}			
	}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

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
						<div class="card-title" style="color:#3d3d5c; font-size:22px;">
							<b><?=$txt?></b>
						</div>
						<div class="card-text">
							<p></p>
						</div>

						<?php if (isset($_SESSION['message'])): ?>
							<div class="alert alert-<?=$_SESSION['msg_type']?>  alert-dismissible fade show">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>
									<?php
									echo $_SESSION['message'];
									unset($_SESSION['message']);
									?>
								</strong>
							</div>
						<?php endif ?>

						<a class="btn btn-success" href="upload-materials.php">Manage Uploaded Materials</a>
						<?php if ($role == 3):?>
							<a class="btn btn-primary disabled" href="upload-new.php">Upload New Materials</a>
						<?php endif; ?>

						<div class="mt-4">
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									</fieldset>
									<label>Title:</label>
										<input class="form-control" type="text" name="title" value="<?php echo $title; ?>" size="10" placeholder="Please enter the title of your Announcement" required>

									<fieldset>
								</div>
								<div class="form-group">
									</fieldset>
									<label>Content:</label>
										<textarea class="form-control" rows="5" name="content" required="true"><?php echo $content;?></textarea>
									<fieldset>
								</div>
								<div class="form-group">
									</fieldset>
										<label>Attach file</label>											
											<div id="addFile"></div>
									<fieldset>
								</div>
								<div class="row">
									<div class="col-sm-4 ml-auto mb-2">
										<?php if ($btnUpdate == true):?>
											<button type="submit" name="update" class="btn btn-primary btn-block" title="Post">Update Learning Materials</button>
											<?php else: ?>
												<button type="submit" name="submit" class="btn btn-primary btn-block" title="Post">Upload Learning Materials</button>
											<?php endif;;?>
									</div>
								</div>
								
							</form>

							<div class="row">
								<div class="col-sm-4 mr-auto">
									<button  class="btn btn-secondary btn-block fas fa-file" onclick="add_more();" title="Add 1 more file">&nbsp;Add File</button>
								</div>
							</div>
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

	<script type="text/javascript">
		function  add_more() {
			var txt = "<input type=\"file\" size=\"28px\" class=\"form-control\" name=\"item_file[]\" <br />";

			document.getElementById("addFile").innerHTML += txt;
		}
	</script>

	<?php include 'js.php'; ?>
</body>
</html>
<?php
	}else{
		header('location: index.php');
	}

	ob_flush();
?>