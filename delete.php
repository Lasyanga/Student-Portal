<?php
ob_start();
session_start();
include('assets/components/config.php');

$post_id = $prof_id = "";
if(isset($_GET['del_announce'])){
	$post_id = $_GET['del_announce'];

	#deleting the posted announcement
	$delPost ="DELETE FROM announcement_tbl WHERE post_id = $post_id";
	$conn->query($delPost) or die("Error: ".$conn.mysqli_error());

	#deleting the file name
	$delFile ="DELETE FROM upload_tbl WHERE post_id = $post_id";
	$conn->query($delFile) or die("Error: ".$conn->mysqli_error());

	$_SESSION['message']= "Your post was successfully deleted.";
	$_SESSION['msg_type'] = "success";

	header('location: announcement.php');
}

if(isset($_GET['del_assignedProf'])){
	$prof_id = $_GET['del_assignedProf'];

	#deleting assigned of the prof
	$delAssign = "DELETE FROM professor_portal_tbl WHERE prof_id = $prof_id";
	$conn->query($delAssign) or die("Error: ".$conn->query_error());

	$_SESSION['message']= "Successfully deleted.";
	$_SESSION['msg_type'] = "success";
	
	header('location: manage-prof.php');
}


if(isset($_GET['del_upload'])){
	$post_id = $_GET['del_upload'];

	#deleting the posted announcement
	$delPost ="DELETE FROM announcement_tbl WHERE post_id = $post_id";
	$conn->query($delPost) or die("Error: ".$conn.mysqli_error());

	#deleting the file name
	$delFile ="DELETE FROM upload_tbl WHERE post_id = $post_id";
	$conn->query($delFile) or die("Error: ".$conn->mysqli_error());

	$_SESSION['message']= "Your post was successfully deleted.";
	$_SESSION['msg_type'] = "success";

	header('location: upload-materials.php');
}

ob_flush();

?>