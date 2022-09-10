<?php
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


	class interactDB{

		function login($conn, $username, $password){#this block of code fetching and validation of login
		   
		   
		   $password = md5($password);

			$sql ="SELECT * FROM stud_portal_account_tbl WHERE username = '$username' AND password = '$password'";
			$result = $conn->query($sql) or die("Error: ". $conn->mysqli_error());
			$rows = $result->fetch_assoc();
				$role = $rows['role'];
				$user_id = $rows['user_id'];
			
			if($result->num_rows == 1){


				if($role == 2){
					$sql ="SELECT 
								enrolled_students.fname as firstname,
								enrolled_students.lname as lastname,
								enrolled_students.student_course as course,
								portal.username as user, portal.user_id as user_id
						FROM stud_portal_account_tbl AS portal 
								INNER JOIN enrolled_students ON portal.user_id = enrolled_students.student_id
						WHERE portal.username = '$username'";

					$result = $conn->query($sql) or die("Error: ". $conn->mysqli_error());

					$row = $result->fetch_assoc();

					$_SESSION['user'] = $row['user'];
					$_SESSION['name'] = $row['lastname'].", ".$row['firstname'];
					$_SESSION['course'] = $row['course'];
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['role'] = $role;

					#Selecting section-------------------------------------
					$getsectionStudent = "SELECT * FROM stud_section_tbl WHERE student_id = $user_id";
					$result = $conn->query($getsectionStudent) or die("Error: ".$conn.mysqli_error());

					$rows = $result->fetch_assoc();
					$studSection = $rows['section_code'];
					$_SESSION['section'] = $studSection;                  


					header('location: home.php');
				}elseif($role == 1) {
				   $sql = "SELECT * FROM stud_portal_account_tbl as portal WHERE username = '$username'";
				   
				   $result = $conn->query($sql)  or die("Error: ". $conn->mysqli_error());

				   $row = $result->fetch_assoc();

					$_SESSION['user'] = $row['username'];
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['role'] = $role;
					 #$_SESSION['role'] = 3;
				   
					 header('location: adminhome.php');
				}elseif ($role == 3) {
				   $sql = "SELECT * FROM stud_portal_account_tbl as portal WHERE username = '$username'";
				   
				   $result = $conn->query($sql)  or die("Error: ". $conn->mysqli_error());

				   $row = $result->fetch_assoc();

					$_SESSION['user'] = $row['username'];
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['role'] = $role;
				   
					header('location: faculty-home.php');
				}
			}else{
				
				$_SESSION['errmsg']="wrong password or username";
			}
		}

		function signup($conn,$user_no, $fname, $lname, $user, $pass){ #this block of code fetching and validating the users input if their credentials is already in database -> for sign-up.php
		   
			
			$sql = "SELECT * FROM enrolled_students WHERE student_id= $user_no AND fname = '$fname' AND lname ='$lname'";
			$result = $conn->query($sql) or die("Error: ". $conn -> mysqli_error());
			
			if($result->num_rows == 1){
				$sql = "SELECT * FROM stud_portal_account_tbl WHERE user_id = $user_no";
				$result = $conn->query($sql) or die("Error: " .$conn->mysqli_error());
				
				if($result->num_rows == 1){
					$_SESSION['errmsg'] ="It seems you have already an Account";
				}else{
					$sql = "SELECT * FROM stud_portal_account_tbl WHERE username = '$user'";
					$result = $conn->query($sql) or die("Error: " .$conn->mysqli_error());

					if($result->num_rows == 1){
						$_SESSION['errmsg'] ="This username is Already been taken";
					}else{
						$password = md5($pass);
						$insert = "INSERT INTO stud_portal_account_tbl(id, user_id, username, password, role)
							VALUES(0, $user_no, '$user', '$password', 2)";
					
						if ($conn->query($insert) == TRUE) {
							$sql ="SELECT
										enrolled_students.fname as firstname,
										enrolled_students.lname as lastname, 
										enrolled_students.student_course as course,
										portal.username as user
									FROM enrolled_students 
										INNER JOIN  stud_portal_account_tbl AS portal ON portal.user_id = enrolled_students.student_id
									WHERE student_id = $user_no";
   
							$result = $conn->query($sql) or die("Error: ". $conn->mysqli_error());
   
							 $row = $result->fetch_assoc();
   
							$_SESSION['user'] = $row['user'];
							$_SESSION['name'] = $row['lastname'].", ".$row['firstname'];
							$_SESSION['course'] = $row['course'];
							$_SESSION['user_id'] = $user_no;
							$_SESSION['role'] = 2;

							$getsectionStudent = "SELECT * FROM stud_section_tbl WHERE student_id = $user_no";
							$result = $conn->query($getsectionStudent) or die("Error: ".$conn.mysqli_error());

							$rows = $result->fetch_assoc();
							$studSection = $rows['section_code'];

							$_SESSION['section'] = $studSection;
   
							 header('location: home.php');

						} else {
							echo "Error: " . $insert . "<br>" . $conn->error;
						}
					}
				}
			   
			}else{
				$sql = "SELECT * FROM enrollment_data WHERE student_id = $user_no AND first_name = '$fname' AND last_name ='$lname'";
				$result = $conn->query($sql) or die("Error: ". $conn -> mysqli_error());
				
				if($result->num_rows == 1){
					$sql = "SELECT * FROM stud_portal_account_tbl WHERE user_id = $user_no";
					$result = $conn->query($sql) or die("Error: " .$conn->mysqli_error());

					if($result->num_rows == 1){
						$_SESSION['errmsg'] ="It seems you have already an Account";
					}else{
						$sql = "SELECT * FROM stud_portal_account_tbl WHERE username = '$user'";
						$result = $conn->query($sql) or die("Error: " .$conn->mysqli_error());
					
						if($result->num_rows == 1){
							$_SESSION['errmsg'] ="This username is Already been taken";
						}else{
							$password = md5($pass);
							$insert = "INSERT INTO stud_portal_account_tbl(id, user_id, username, password, role)
								VALUES(0, $user_no, '$user', '$password', 2)";
						
							if ($conn->query($insert) === TRUE) {
								$sql ="SELECT
											student.first_name as fname,
											student.last_name as lname,
											student.course as course,
											portal.username as username
										FROM enrollment_data as student 
											INNER JOIN stud_portal_account_tbl as portal on student.student_id = portal.user_id 
										WHERE student.student_id = $user_no";
   
								$result = $conn->query($sql) or die("Error: ". $conn->mysqli_error());
								$row = $result->fetch_assoc();
   
								$_SESSION['user'] = $row['username'];
								$_SESSION['name'] = $row['lname'].", ".$row['fname'];
								$_SESSION['course'] = $row['course'];
								 $_SESSION['user_id'] = $user_no;
								$_SESSION['role'] = 2;
   
								header('location: home.php');

							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
							}
						}
					}
				}else{
					$facultySignUp ="SELECT * FROM professor_portal_tbl WHERE prof_id = $user_no AND firstname = '$fname' AND lastname ='$lname'";
					$result = $conn->query($facultySignUp) or die("Error: ". $conn->mysqli_error());

					if($result->num_rows == 1){
						$sql = "SELECT * FROM stud_portal_account_tbl WHERE user_id = $user_no";
						$result = $conn->query($sql) or die("Error: " .$conn->mysqli_error());

						if($result->num_rows == 1){
							$_SESSION['errmsg'] ="It seems you have already an Account";
						}else{
							$sql = "SELECT * FROM stud_portal_account_tbl WHERE username = '$user'";
							$result = $conn->query($sql) or die("Error: " .$conn->mysqli_error());
					
							if($result->num_rows == 1){
								$_SESSION['errmsg'] ="This username is Already been taken";
							}else{
								$password = md5($pass);
								$insert = "INSERT INTO stud_portal_account_tbl(id, user_id, username, password, role)
									VALUES(0, $user_no, '$user', '$password', 3)";
						
								if ($conn->query($insert) === TRUE) {
									$sql ="SELECT
												prof.firstname as firstname,
												prof.lastname as lastname,
												faculty.faculty_name as faculty_name,
												subject.subject_code as subj 
											FROM professor_portal_tbl as prof
												INNER JOIN faculty ON prof.faculty_id = faculty.faculty_id
												INNER JOIN subject ON prof.subject_code= subject.subject_code
											WHERE prof.prof_id = $user_no";
   
									$result = $conn->query($sql) or die("Error: ". $conn->mysqli_error());
									$row = $result->fetch_assoc();

									$full_name = $row['lastname'];
									$_SESSION['user'] = $username;
									$_SESSION['user_id'] = $user_no;
									$_SESSION['role'] = 3;
									$_SESSION['fname'] = $full_name;
		
								   header('location: faculty-home.php');

								} else {
									echo "Error: " . $sql . "<br>" . $conn->error;
								}

							}
						}

					}else{
						 $_SESSION['errmsg'] ="Please check your Credentials.";
					}                   
				}
				
			}
		}

		function getSubject($conn, $stud_id){#this block of code fetching the list of an enrolled subjects /course of a students

			$getSub = "SELECT
							enrolled.subject_code as code,
							subject.subject_description as title,
							enrolled.semister as sem,
							enrolled.year_level as year
						FROM subject_enrolled as enrolled
							INNER JOIN subject ON enrolled.subject_code = subject.subject_code
						WHERE enrolled.student_id = '$stud_id'";

			$result = $conn-> query($getSub) or die("Error: " . $conn->mysqli_error());
			if ($result->num_rows > 0) {
			   while ($rows = $result->fetch_assoc()) {
				   echo '<tr>
							<td>'.$rows['code'].'</td>
							<td>'.$rows['title'].'</td>
							<td>'.$rows['sem'].'</td>
							<td>'.$rows['year'].'</td>
						</tr>';
			   }
			}
		}

		function getAnnouncementAdmin($conn){#this block of code fetching the list of announce of professors/faculty -> admin shows all posted announcement
		   

			$getAnnouncement = "SELECT
									announce.title as title,
									announce.post_id as post_id,
									announce.date_posted as date_posted,
									announce.status as status,
									announce.date_edited as date_edited,
									portal.username as owner
								FROM announcement_tbl as announce 
									INNER JOIN stud_portal_account_tbl as portal ON announce.user_id = portal.user_id
								WHERE announce.purpose ='Announcement'
								ORDER BY post_id desc";

			$result = $conn->query($getAnnouncement) or die("Error: " .$conn->mysqli_error());

			if($result->num_rows > 0){
				while($rows = $result->fetch_assoc()){
					echo '<tr>
							<td>'.$rows['title'].'</td>
							<td>
								<a href="view-post.php?post_id='.$rows['post_id'].'" target="_blank"> View content</a>                                   
							</td>
							<td>'.$rows['date_posted'].'</td>
							<td>'.$rows['status'].'</td>
							<td>'.$rows['date_edited'].'</td>
							<td>'.$rows['owner'].'</td>
							<td>
								<a href="announ-add.php?edit='.$rows['post_id'].'" class="btn btn-success btn-bloack mt-2">Edit</a>
								<a href="delete.php?del_announce='.$rows['post_id'].'" class="btn btn-warning btn-bloack mt-2">Delete</a>
							</td>
						</tr>';
				}
			}
		}

		function getAnnouncement($conn, $user_id){#this block of code fetching the list of announce of professors/faculty not admin
		   //include('assets/components/config.php');

			$getAnnouncement = "SELECT * FROM announcement_tbl
								WHERE user_id = '$user_id' AND purpose ='Announcement' order by post_id desc";

			$result = $conn->query($getAnnouncement) or die("Error: " .$conn->mysqli_error());

			if($result->num_rows > 0){
				while($rows = $result->fetch_assoc()){
					echo '<tr>
							<td>'.$rows['title'].'</td>
							<td>
								<a href="view-post.php?post_id='.$rows['post_id'].'" target="_blank"> View content</a>                                   
							</td>
							<td>'.$rows['date_posted'].'</td>
							<td>'.$rows['status'].'</td>
							<td>'.$rows['date_edited'].'</td>
							<td>
								<a href="announ-add.php?edit='.$rows['post_id'].'" class="btn btn-success mt-2">Edit</a>
								 <a href="delete.php?del_announce='.$rows['post_id'].'" class="btn btn-warning mt-2">Delete</a>
							</td>
						</tr>';
				}
			}
		}

		function getPost($conn, $post_id){#this block of code responsible in viewing post in announcement.php
		   #include('assets/components/config.php');
			$getTitle = "SELECT * FROM announcement_tbl WHERE post_id = '$post_id'";
			$result = $conn->query($getTitle) or die("Error: ". $conn->mysqli_error());

			$rows = $result->fetch_assoc();

			
			echo '<div class="card-title" style="color:#3d3d5c; font-size:22px;">
					<b>'.$rows['title'].'</b>
					<br /> <pre style="font-size:12px;">Date posted: '.$rows['date_posted'].'</pre>
				</div>
				<div class="card-text">
					<p>'.$rows['content'].'</p>
				
					';

			 $getFile = "SELECT * FROM upload_tbl where post_id = $post_id";#selecting file in database

			 $getFile_result = $conn->query($getFile) or die("Error: ".$conn->mysqli_error());

			 if ($getFile_result->num_rows > 0) {
				echo '<p>Click the link to download</p>';
				 while($rows = $getFile_result->fetch_assoc()){

					echo '
						<a download="uploads/'.$rows['file_name'].'" href="./uploads/'.$rows['file_name'].'">'.$rows['file_name'].'</a><br/>
						
					';
				 }
				 echo '</div>';
			 }else{
				 echo '</div>';
			 }

			$conn->close();
		}

		function getFeed($conn, $user_id){ #this block of code fetching and displaying the announcement in th feed of students
			

			$getFeed = "SELECT
							announce.post_id as post_id,
							announce.title as title,
							announce.status as status,
							announce.content as content,
							announce.date_posted as date_posted,
							announce.date_edited as date_edited,
							portal.username as username
						FROM announcement_tbl as announce 
							INNER JOIN stud_portal_account_tbl as portal ON announce.user_id = portal.user_id 
						WHERE
							announce.purpose='Announcement' 
							AND
							portal.username = 'Admin'
						ORDER BY post_id DESC";

			$result = $conn->query($getFeed) or die("Error: ". $conn->mysqli_error());

			if($result->num_rows > 0){
				while($rows = $result->fetch_assoc()){
					$post_id = $rows['post_id'];
				   
					echo ' <div class="card mt-4">
								<div class="card-body">
									<div class="card-title" style="color:#3d3d5c; font-size:22px;">
										<b>'.$rows['title'].'</b>';
										
									if (strcmp($rows['status'], 'Edited') == 0) {
									   echo '<br /> <pre style="font-size:11px;">'.$rows['status'].':'.$rows['date_edited']. ' by:'.$rows['username'].'</pre>
									</div>
									<div class="card-text">
										<p>'.$rows['content'].'</p>';
									}else{
										 echo '<br /> <pre style="font-size:11px;">'.$rows['status'].':'.$rows['date_posted']. ' by:'.$rows['username'].'</pre>
										 </div>
										 <div class="card-text">
										 <p>'.$rows['content'].'</p>';
									}
									

						$getFile = "SELECT * FROM upload_tbl where post_id = $post_id";#selecting file in database

						$getFile_result = $conn->query($getFile) or die("Error: ".$conn->mysqli_error());

						if ($getFile_result->num_rows > 0) {
							echo '<p>Click the link to download</p>';
							
							while($rows = $getFile_result->fetch_assoc()){
								echo '
								<a download="uploads/'.$rows['file_name'].'" href="./uploads/'.$rows['file_name'].'">'.$rows['file_name'].'</a><br/>
								';
							}
							echo '</div>';
						}else{
							echo '</div>';
						}
					echo '</div>
					</div>';
				}

			}


			$getsectionStudent = "SELECT * FROM stud_section_tbl WHERE student_id = $user_id";
			$result = $conn->query($getsectionStudent) or die("Error: ".$conn.mysqli_error());

			$rows = $result->fetch_assoc();
			$studSection = $rows['section_code'];

			$getAnnounceSec =  "SELECT
									announce.post_id as post_id,
									prof.section_code as section
								FROM announcement_tbl as announce 
									INNER JOIN professor_portal_tbl as prof ON announce.user_id = prof.prof_id";


			$result = $conn->query($getAnnounceSec) or die("Error: ". $conn->mysqli_error());
			$rows=$result->fetch_assoc();

			$postSection = $rows['section'];

		   if(strcmp ($studSection,$postSection) == 0){

				 $getFeed = "SELECT
								announce.post_id as post_id,
								announce.title as title,
								announce.status as status,
								announce.content as content,
								announce.date_posted as date_posted,
								announce.date_edited as date_edited,
								prof.firstname as firstname,
								prof.section_code as section
							FROM announcement_tbl as announce
								INNER JOIN professor_portal_tbl as prof ON announce.user_id = prof.prof_id";

				 $result = $conn->query($getFeed) or die("Error: ".$conn.mysqli_error());

				if($result->num_rows > 0){
				while($rows = $result->fetch_assoc()){
					$post_id = $rows['post_id'];
				   
					echo ' <div class="card mt-4">
								<div class="card-body">
									<div class="card-title" style="color:#3d3d5c; font-size:22px;">
										<b>'.$rows['title'].'</b>';
										
									if (strcmp($rows['status'], 'Edited') == 0) {
									   echo '<br /> <pre style="font-size:11px;">'.$rows['status'].':'.$rows['date_edited']. ' by:'.$rows['firstname'].'</pre>
									</div>
									<div class="card-text">
										<p>'.$rows['content'].'</p>';
									}else{
										 echo '<br /> <pre style="font-size:11px;">'.$rows['status'].':'.$rows['date_posted']. ' by:'.$rows['firstname'].'</pre>
										 </div>
										 <div class="card-text">
										 <p>'.$rows['content'].'</p>';
									}
									

						$getFile = "SELECT * FROM upload_tbl where post_id = $post_id";#selecting file in database

						$getFile_result = $conn->query($getFile) or die("Error: ".$conn->mysqli_error());

						if ($getFile_result->num_rows > 0) {
							echo '<p>Click the link to download</p>';
							
							while($rows = $getFile_result->fetch_assoc()){
								echo '
								<a download="uploads/'.$rows['file_name'].'" href="./uploads/'.$rows['file_name'].'">'.$rows['file_name'].'</a><br/>
								';
							}
							echo '</div>';
						}else{
							echo '</div>';
						}
					echo '</div>
					</div>';
				}

			}

			}
			$conn->close();
		}

		function getProfAssigned($conn){#this block of code displaying the list of professors and thier assigned sections
		   //include('assets/components/config.php');

			$getProfAssigned = "SELECT * FROM professor_portal_tbl as prof order by prof.prof_id desc";

			$result = $conn->query($getProfAssigned) or die("Error: " .$conn->mysqli_error());

			if($result->num_rows > 0){
				 
				while($rows = $result->fetch_assoc()){
				   
					echo '<tr>
							<td>'.$rows['prof_id'].'</td>
							<td>'.$rows['firstname'].'</td>
							<td>'.$rows['lastname'].'</td>
							<td>'.$rows['faculty_id'].'</td>
						   <td>'.$rows['subject_code'].'</td>';
						   
							if ($rows['section_code'] == '') {
							  echo '<td>To Assign</td>';
							}else{
								echo '<td>'.$rows['section_code'].'</td>';
							}
							
							echo '<td>
								<a href="assign-prof.php?edit='.$rows['prof_id'].'" class="btn btn-success  mt-2">Update</a>
								 <a href="delete.php?del_assignedProf='.$rows['prof_id'].'" class="btn btn-warning mt-2">Delete</a>
							</td>
						</tr>';
				   
				}
			}
		}

		function getProfName($conn){#this block of code fetching the list of professor's name
		   // include('assets/components/config.php');

			$getProfName = "SELECT * FROM  professor_portal_tbl WHERE section_code = ''";
			$result=$conn->query($getProfName) or die("Error: ".$conn->mysqli_error());

			if($result->num_rows > 0){
				while ($rows = $result->fetch_assoc()) {
					echo '<option value="'.$rows['prof_id'].'">'.$rows['lastname'].', '.$rows['firstname'].'</option>';
				}
			}
		}

		function getProFaculty($conn){ #this block of code fetching the list of subjects
		  // include('assets/components/config.php');

			$getProFaculty = "SELECT * FROM faculty";
			$result=$conn->query($getProFaculty) or die("Error: ".$conn->mysqli_error());

			if($result->num_rows > 0){
				while ($rows = $result->fetch_assoc()) {
					echo '<option value="'.$rows['faculty_id'].'">'.$rows['faculty_name'].'</option>';
				}
			}
		}

		 function getProfSubj($conn){ #this block of code fetching the list of subjects
		  // include('assets/components/config.php');

			$getProfSubj = "SELECT * FROM subject";
			$result=$conn->query($getProfSubj) or die("Error: ".$conn->mysqli_error());

			if($result->num_rows > 0){
				while ($rows = $result->fetch_assoc()) {
					echo '<option value="'.$rows['subject_code'].'">'.$rows['subject_code'].' '.$rows['subject_description'].'</option>';
				}
			}
		}

		function getProfSec($conn){ #this block of code fetching the list of sections/students
		   //include('assets/components/config.php');

			$getProfSec = "SELECT * FROM section_tbl";
			$result=$conn->query($getProfSec) or die("Error: ".$conn->mysqli_error());

			if($result->num_rows > 0){
				while ($rows = $result->fetch_assoc()) {
					echo '<option value="'.$rows['section_code'].'">'.$rows['section_code'].'</option>';
				}
			}
		}

		function setPrepareUpdateProf($conn, $prof_id){ # this block of code is preparing for updating professor assigned section/students

			$setPrepareUpdateProf = "SELECT * FROM  professor_portal_tbl WHERE prof_id = $prof_id";
			$result = $conn->query($setPrepareUpdateProf) or die("Error: ".$conn->query_error());

			$rows = $result->fetch_assoc();

			$_SESSION['prof_name'] = $rows['lastname'].', '.$rows['firstname'];

			$subject_code = $rows['subject_code'];

			$sec_code = $rows['section_code'];#replace this to $_SESSION['section'] if they have a section_tbl

			$setPrepareUpdateProf = "SELECT * FROM subject WHERE subject_code = '$subject_code'";
			$result = $conn->query($setPrepareUpdateProf) or die("Error: ".$conn->query_error());

			$rows = $result->fetch_assoc();

			$_SESSION['subject_code'] =$subject_code;
			$_SESSION['subj'] = $rows['subject_code'].' '.$rows['subject_description'];

			$setPrepareUpdateProf = "SELECT * FROM section_tbl WHERE section_code= '$sec_code'";
			$result = $conn->query($setPrepareUpdateProf) or die("Error: ".$conn->query_error());

			$rows = $result->fetch_assoc();

			$_SESSION['section_code'] = $sec_code;
			$_SESSION['section'] = $rows['section_code'];
		}

		function performedUpdate($conn, $prof_id, $subject_code, $section_code){ # this block of code is performing an updating professor assigned section/students
		   // include('assets/components/config.php');

			$performedUpdate = "UPDATE professor_portal_tbl
									SET subject_code = '$subject_code', 
										section_code = '$section_code' 
								WHERE prof_id = $prof_id";

			$conn->query($performedUpdate) or die("Error: ".$conn->mysqli_error());

			$_SESSION['message']= "Your post was successfully Updated.";
			$_SESSION['msg_type'] = "sucess";

			header('location: manage-prof.php');
		}

		function performedAssign($conn, $prof_id, $subject_code, $section_code){ # this block of code is performing an updating professor assigned section/students
		   // include('assets/components/config.php');

			$performedAssign = "UPDATE professor_portal_tbl 
									SET subject_code = '$subject_code',
										section_code = '$section_code'
								WHERE prof_id = $prof_id";

			$conn->query($performedAssign) or die("Error: ".$conn->mysqli_error());

			$_SESSION['message']= "Your post was successfully Assigned.";
			$_SESSION['msg_type'] = "sucess";

			header('location: manage-prof.php');
		}

		 function performedAddNew($conn, $firstname, $lastname, $faculty_id, $subject_code){ # this block of code is performing an adding new professor
		   // include('assets/components/config.php');

			$performedAddNew = "INSERT INTO  professor_portal_tbl(prof_id, firstname, lastname, faculty_id, subject_code) 
								VALUES(0,'$firstname', '$lastname', $faculty_id, '$subject_code')";

			$conn->query($performedAddNew) or die("Error: ".$conn->mysqli_error());

			$_SESSION['message']= "Your post was successfully Assigned.";
			$_SESSION['msg_type'] = "sucess";

			header('location: manage-prof.php');
		}

		function getCountProfessors($conn){
		   
			$countProf = "SELECT COUNT(prof_id) as count FROM professor_portal_tbl";
			$result = $conn->query($countProf) or die ("Errror: ".$conn->mysqli_error());
			$rows = $result->fetch_assoc();

			echo $rows['count'];
		   
		}
		
		function getCountAnnouncement($conn, $role, $user_id){
			if ($role == 1) {
				$countAnnounce = "SELECT COUNT(post_id) as count FROM announcement_tbl WHERE purpose='Announcement'";
				$result = $conn->query($countAnnounce) or die ("Errror: ".$conn->mysqli_error());
				$rows = $result->fetch_assoc();

				echo $rows['count'];
			}else{
				$countAnnounce = "SELECT COUNT(post_id) as count FROM announcement_tbl where user_id = $user_id AND purpose='Announcement'";
				$result = $conn->query($countAnnounce) or die ("Errror: ".$conn->mysqli_error());
				$rows = $result->fetch_assoc();

				echo $rows['count'];
			}          
		}

		function getCountUploaded($conn, $role, $user_id){
			 if ($role == 1) {
				$countUpload = "SELECT COUNT(up_id) as count FROM upload_tbl where purpose='Learning Material'";
				$result = $conn->query($countUpload) or die ("Errror: ".$conn->mysqli_error());
				$rows = $result->fetch_assoc();
				echo '( '. $rows['count'].' )';
			}else{
				$countUpload = "SELECT COUNT(up_id) as count FROM upload_tbl WHERE user_id = $user_id";
				$result = $conn->query($countUpload) or die ("Errror: ".$conn->mysqli_error());
				$rows = $result->fetch_assoc();
				echo '( '. $rows['count'].' )';
			}
		}

		function getCountStudent($conn, $role, $user_id){
			 if($role == 1){
				$CountStud = "SELECT COUNT(student_id) as count FROM enrolled_students";
				$result= $conn->query($CountStud) or die("Error: ".$conn->mysqli_error());
				$rows = $result->fetch_assoc();

				echo '('.$rows['count'].')';
			}elseif($role == 3){
				$CountStud = "SELECT COUNT(stud.section_code) as count
								FROM stud_section_tbl as stud
									INNER JOIN professor_portal_tbl as prof on stud.section_code = prof.section_code
								WHERE prof_id = $user_id"; 

				$result = $conn->query($CountStud) or die("Error: " .$conn->mysqli_error());
				$rows = $result->fetch_assoc();

				echo '('.$rows['count'].')';
			}
		}

		 function getStudentlist($conn, $role, $user_id){
			if($role == 1){
				 $getListStud = "SELECT
									en.student_id as student_id,
									en.lname as lastname,
									en.fname as firstname,
									en.mname as mid,
									en.student_course as course,
									sec.section_code as section,
									en.campus_area as campus,
									en.email as email,
									sec.year_level as year,
									sec.semister as sem
								FROM enrolled_students as en
									INNER JOIN stud_section_tbl as sec ON sec.student_id = en.student_id";

				$result = $conn->query($getListStud) or die("Error: " .$conn->mysqli_error());
			   
			   if ($result->num_rows) {
			   $i = 1; 
				   while($rows = $result->fetch_assoc()){
					 echo '<tr>
							<td>'.$i.'</td>
							<td>'.$rows['student_id'].'</td>
							<td>'.$rows['lastname'].'</td>
							<td>'.$rows['firstname'].'</td>
							<td>'.$rows['mid'].'</td>
							<td>'.$rows['course'].'</td>
							<td>'.$rows['section'].'</td>
							<td>'.$rows['campus'].'</td>                           
							<td>'.$rows['email'].'</td>
							<td>'.$rows['year'].'</td>                           
							 <td>'.$rows['sem'].'</td>
						</tr>';
					   $i++;
				   }
			   }

			}elseif($role == 3){
				$getListStud = "SELECT
									sec.student_id as student_id,
									en.lname as lastname,
									en.fname as firstname,
									en.mname as mid,
									en.student_course as course,
									sec.section_code as section,
									en.campus_area as campus,
									en.email as email,
									sec.year_level as year, 
									sec.semister as sem 
								FROM enrolled_students as en 
									RIGHT JOIN stud_section_tbl as sec ON sec.student_id = en.student_id 
									RIGHT JOIN professor_portal_tbl as prof ON sec.section_code = prof.section_code
								WHERE prof.prof_id = $user_id";

				$result = $conn->query($getListStud) or die("Error: " .$conn->mysqli_error());
			   
			   if ($result->num_rows) {
			   $i = 1;              
				   while($rows = $result->fetch_assoc()){
					 echo '<tr>
							<td>'.$i.'</td>
							<td>'.$rows['student_id'].'</td>
							<td>'.$rows['lastname'].'</td>
							<td>'.$rows['firstname'].'</td>
							<td>'.$rows['mid'].'</td>
						   <td>'.$rows['course'].'</td>
						   <td>'.$rows['section'].'</td>
						   <td>'.$rows['campus'].'</td>                           
						   <td>'.$rows['email'].'</td>
						   <td>'.$rows['year'].'</td>                           
						   <td>'.$rows['sem'].'</td>
						   </tr>';
					  $i++;
				   }
			   }
			}
		}

		function getUploadList($conn,$role, $user_id){
			if ($role == 1) {
				 $getUploadList = "SELECT
										upload.file_name as filename,
										upload.post_id as post_id,
										upload.purpose as purpose,
										announce.date_posted as date_posted,
										announce.status as status,
										portal.username as owner 
									FROM upload_tbl as upload 
										INNER JOIN stud_portal_account_tbl as portal ON upload.user_id = portal.user_id
										INNER JOIN announcement_tbl as announce ON upload.post_id = announce.post_id
									ORDER BY post_id desc";

				$result = $conn->query($getUploadList) or die("Error: " .$conn->mysqli_error());

				if($result->num_rows > 0){
					while($rows = $result->fetch_assoc()){
						echo '<tr>
								<td>'.$rows['filename'].'</td>
								<td>
									<a href="view-post.php?post_id='.$rows['post_id'].'" target="_blank"> View content</a>                                   
								</td>
								<td>'.$rows['date_posted'].'</td>
								<td>'.$rows['status'].'</td>
								<td>'.$rows['purpose'].'</td>
								<td>'.$rows['owner'].'</td>
								 <td>';
								if ($rows['purpose'] == 'Announcement') {
									echo '<a href="announ-add.php?edit='.$rows['post_id'].'" class="btn btn-success btn-block m-2">Edit</a>';
								}
								echo '<a href="delete.php?del_upload='.$rows['post_id'].'" class="btn btn-warning btn-block m-2">Delete</a>
								</td>
							</tr>';
					}
				}
			
			}elseif($role == 3) {
				 $getUploadList = "SELECT
										upload.file_name as filename,
										upload.post_id as post_id,
										upload.purpose as purpose,
										announce.date_posted as date_posted,
										announce.status as status,
										portal.username as owner
									FROM upload_tbl as upload 
											INNER JOIN stud_portal_account_tbl as portal ON upload.user_id = portal.user_id
											INNER JOIN announcement_tbl as announce ON upload.post_id = announce.post_id
									WHERE upload.user_id = $user_id 
									ORDER BY post_id desc ";

				$result = $conn->query($getUploadList) or die("Error: " .$conn->mysqli_error());

				if($result->num_rows > 0){
					while($rows = $result->fetch_assoc()){
						echo '<tr>
								<td>'.$rows['filename'].'</td>
								<td>
									<a href="view-post.php?post_id='.$rows['post_id'].'" target="_blank"> View content</a>                                   
								</td>
								<td>'.$rows['date_posted'].'</td>
								<td>'.$rows['status'].'</td>
								<td>'.$rows['purpose'].'</td>
								<td>'.$rows['owner'].'</td>
								<td>';
								if ($rows['purpose'] == 'Announcement') {
									echo '<a href="announ-add.php?edit='.$rows['post_id'].'" class="btn btn-success btn-block m-2">Edit</a>';
								}else{
									echo'<a href="upload-new.php?edit='.$rows['post_id'].'" class="btn btn-success btn-block m-2">Edit</a>';
								}
								echo '<a href="delete.php?del_upload='.$rows['post_id'].'" class="btn btn-warning btn-block m-2">Delete</a>
								</td>
							</tr>';
					}
				}
			}else{

				 $getsectionStudent = "SELECT * FROM stud_section_tbl WHERE student_id = $user_id";
				$result = $conn->query($getsectionStudent) or die("Error: ".$conn.mysqli_error());
				$rows = $result->fetch_assoc();
				$studSection = $rows['section_code'];

				$getUploadList = "SELECT
									upload.file_name as filename,
									upload.post_id as post_id,
									upload.purpose as purpose,
									announce.date_posted as date_posted,
									announce.status as status,
									prof.firstname as owner,
									prof.section_code as section
								FROM upload_tbl as upload 
									INNER JOIN professor_portal_tbl as prof ON upload.user_id = prof.prof_id
									INNER JOIN announcement_tbl as announce ON upload.post_id = announce.post_id 
								WHERE 
									upload.purpose = 'Learning Material' 
									AND 
									prof.section_code = '$studSection' 
									ORDER BY announce.post_id desc ";

				$result = $conn->query($getUploadList) or die("Error: " .$conn->mysqli_error());

				if($result->num_rows > 0){
					while($rows = $result->fetch_assoc()){
						echo '<tr>
								<td>'.$rows['filename'].'</td>
								<td>
									<a href="view-post.php?post_id='.$rows['post_id'].'" target="_blank"> View content</a>                                   
								</td>
								<td>'.$rows['date_posted'].'</td>
								<td>'.$rows['status'].'</td>
								<td>'.$rows['purpose'].'</td>
								<td>'.$rows['owner'].'</td>
								<td>
								<a class="btn btn-primary btn-block m-2" download="uploads/'.$rows['filename'].'" href="./uploads/'.$rows['filename'].'" title="Click to download Material">Dowload</a>
								</td>
							</tr>';
					}
				}
			}
		}

		function getGrade($conn, $user_id){
			$getGrade = "SELECT
							grad.student_id as stud_id,
							grad.subject_code as code,
							subject.subject_description as title,
							grad.grade as grade,
							grad.semister as sem,
							grad.year_level as year
						FROM grade_table as grad 
							INNER JOIN  subject ON grad.subject_code = subject.subject_code
						WHERE grad.student_id = $user_id";

			$result = $conn-> query($getGrade) or die("Error: " . $conn->mysqli_error());
			if ($result->num_rows > 0) {
			   while ($rows = $result->fetch_assoc()) {
				   echo '<tr>
							<td>'.$rows['code'].'</td>
							<td>'.$rows['title'].'</td>
							<td>'.$rows['grade'].'</td>
							<td>'.$rows['sem'].'</td>
							<td>'.$rows['year'].'</td>';


							if ($rows['grade'] >= 75.00) {
								echo' <td style="color: green";>PASSED</td>
								</tr>';
							}else{
								echo' <td style="color: red;">FAILED</td>
								</tr>';
							}                           
			   }
			}

		}

		function getSchedule($conn, $user_id, $section){

			$getSchedule ="SELECT 
							subject.subject_description as title,
							sub.subject_code as code,
							sched.timer as timer,
							sched.day as day,
							prof.firstname as firstname,
							prof.lastname as lastname
						FROM subject_enrolled as sub
							INNER JOIN subject on sub.subject_code = subject.subject_code
							INNER JOIN schedule_tbl as sched on sub.subject_code = sched.subject_code
							LEFT JOIN professor_portal_tbl as prof on sub.subject_code = prof.subject_code
						WHERE sub.student_id = $user_id AND prof.section_code='$section'";
			
			$result = $conn->query($getSchedule) or die("Error: " . $conn->mysqli_error());

			if ($result->num_rows > 0) {
				while ($rows = $result->fetch_assoc()) {
				   echo '<tr>
							<td>'.$rows['code'].'</td>
							<td>'.$rows['title'].'</td>
							<td>'.$rows['timer'].'</td>
							<td>'.$rows['day'].'</td>';

							if(empty($rows['firstname'])){
								 echo '<td>To Be Assign</td> </tr>';
							 }else{
							   echo '<td>'.$rows['lastname'].', '. $rows['firstname'].'</td></tr>';
							}
				}
			}else{
				$getSchedule ="SELECT 
								subject.subject_description as title,
								sub.subject_code as code,
								sched.timer as timer, 
								sched.day as day
							FROM subject
								INNER JOIN subject_enrolled as sub on sub.subject_code = subject.subject_code
								INNER JOIN schedule_tbl as sched on sub.subject_code = sched.subject_code 
								LEFT JOIN stud_section_tbl as stud on stud.student_id = sub.student_id
							WHERE sub.student_id ='$user_id'";

				$result = $conn->query($getSchedule) or die("Error: " . $conn->mysqli_error());

				if ($result->num_rows > 0) {
					while ($rows = $result->fetch_assoc()) {
						echo '<tr>
								<td>'.$rows['code'].'</td>
								<td>'.$rows['title'].'</td>
								<td>'.$rows['timer'].'</td>
								<td>'.$rows['day'].'</td>
								<td>To Be Assign</td> 
							</tr>';
					}
				}
			}
		}

		function getNote($conn, $section){
			$getProf ="SELECT * FROM professor_portal_tbl
						WHERE section_code = '$section'";

			$result = $conn->query($getProf) or die ("Error: ".$conn->mysqli_error());

			if ($result->num_rows > 0) {
				echo '<p style="color: red"><b>NOTE:</b> <i>The subject(s) shown in the table below is/are subject has Professor.</i></p>';
			}
		}


	}//close of class


?>