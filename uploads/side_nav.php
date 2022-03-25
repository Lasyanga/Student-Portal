
<div id="mySidebar" class="sidebar mb-5 sidenav" style="overflow-x: auto;">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	<center>
		<img src="imgs/qcu.png" alt="qcu logo" style="height: 50px; width:50px; opacity: 0.8; float: none;">
	</center>
	
	<center>
		<font style="color:	 #b3b3cc; font-size: 20px; float: none;"><b>QCU STUDENT PORTAL</b></font>
	</center>

	<center>
		<img src="imgs/accicon.png" alt="user logo" style="height: 106px; width:110px; margin-top:5px; border-radius: 100px;"><br>
		<b>
			<font style="color:	 white; font-size: 18px;"><?php echo $_SESSION['name'];?></font>
		</b>

		<br>
		<font style="color:	 #b3b3cc; font-size: 17px;"><?php echo $_SESSION['course'];?> </font><br><br>
		
			<a href="user_setting.php" class="btn btn-danger">EDIT PROFILE</a>
	</center>
	<a href="home.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fa">&#9776;&nbsp;Home </span> 
		
	</a>

	<a href="schedule.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fa">&#xf0f3;&nbsp;Schedule</span> 
	</a>

	<a href="subjects.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fa">&#xf02d;&nbsp;Subjects </span>
	</a>

	<a href="grades.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fa">&#xf279;&nbsp;Grades </span>
	</a>

	<a href="materials.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fas">&#xf019;&nbsp;Materials</span>
	</a>

	<a href="evaluation.php">
		<span style="font-size: 20px; margin-left: 10px;" class="fa">&#xf279;&nbsp;Evaluation</span>

	</a>
</div>
