<?php
	error_reporting(E_ALL);
?>

<div id="mySidebar" class="sidebar mb-5 sidenav" style="overflow: scroll-x">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	<center>
		<img src="imgs/qcu.png" style="height: 60px; width:60px; opacity: 0.8; float: none;">
	</center>
	
	<center>
		<font style="color:	 #b3b3cc; font-size: 20px; float: none;"><b>QCU STUDENT PORTAL</b></font>
	</center>

	<center>
		<img src="imgs/accicon.png" style="height: 106px; width:110px; margin-top:5px; border-radius: 100px;"><br>
		<b>
			<font style="color:	 white; font-size: 18px;"><?php echo $_SESSION['user'];?></font><br/>
		</b>

		<br>
		<font style="color:	 #b3b3cc; font-size: 17px;"><?php //echo $_SESSION['role'];?> </font><br><br>
		
			<a href="user_setting.php" class="btn btn-danger">EDIT PROFILE</a>
	</center>
	<a href="faculty-home.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fa">&#9776;&nbsp;Home </span> 
		
	</a>

	<a href="announcement.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fas fa-broadcast-tower">&nbsp;Anouncement</span> 
	</a>

	<a href="view_students_list.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fas fa-address-book">&nbsp;Students </span>
	</a>

	<a href="grades.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fas fa-chart-bar">&nbsp;Grades </span>
	</a>

	
		<a href="upload-materials.php" class="disabled">
			<span style="font-size: 20px; margin-left: 10px;" class="fas fa-upload">&nbsp;Materials</span>
		</a>
			

	<a href="evaluation.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fa">&#xf279;&nbsp;Evaluation</span>
	</a>
</div>
