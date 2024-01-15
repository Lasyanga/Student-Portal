<?php
	require_once("../../app_config/app_config.php");

	//classes
	require_once("../../class/AccountController/LoginSignup.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>QCU Student Portal</title>
		
		<link rel="stylesheet" href="../../resources/bootstrap4/css/bootstrap.min.css" async/>
		<link rel="stylesheet" href="../../resources/DataTables-1.10.20/css/dataTables.bootstrap4.min.css"  />
		<link rel="stylesheet" href="../../resources/jquery-ui/jquery-ui.min.css" async />
		<link rel="stylesheet" href="../../resources/sweetalert2/sweetalert2.min.css"  async/>

		<!-- scripts -->
		<script src="../../resources/jquery/jquery.min.js" async></script>
		<script src="../../resources/jquery/popper.min.js" async></script>
		<script src="../../resources/jquery-ui/jquery-ui.min.js" async></script>
		<script src="../../resources/bootstrap4/js/bootstrap.js" async></script>
		<script src="../../resources/sweetalert2/sweetalert2.all.min.js" async></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top">
  <a class="navbar-brand text-white" href="../../index.php">Student Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mx-2">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a href="./views/accounts/view_login.php" class="nav-link text-white">Login</a>
      </li>
    </ul>
  </div>
</nav>