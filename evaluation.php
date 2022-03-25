<?php
error_reporting();
ob_start();
session_start();

$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

?>
 <?php if(isset($_SESSION['user'])):?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>QCU</title>
	    
    <?php require('css.php'); ?>
</head>
<body style="background-color: #404040;">
   
        
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

        <div class="container">
            <div class="row">
                <div class="col-lg-11 mt-2" style="margin: 0 auto; float: none;">
                    <div class="card" style="background-color: #bfbfbf;">
                        <div class="card-body">
                            <h4 class="card-title">Evaluation Form</h4>
                            <p class="card-text">
                                Here below is the evaluation of your teacher.
                            </p>
                            
                            <div style="overflow-x:auto;"> 
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="6" >I. CLASSROOM INSTRUCTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>A. Planning and Preparation </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left">Demonstrates knowledge of content and related pedagogy</td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a1" value="3">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a1" value="2">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a1" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="text-align: left">Demonstrates knowledge of development characteristics of age group</td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a2" value="5">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a2" value="4">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a2" value="3">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a2" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="text-align: left">Demonstrates knowledge of how students learn</td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a3" value="5">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a3" value="2">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a3" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="text-align: left">Demonstrates awareness of student skills and knowledge</td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a4" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a4" value="4">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a4" value="3">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a4" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a4" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left">Demonstrates awareness of student interests and cultural heritage</td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a5" value="5">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a5" value="4">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a5" value="3">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a5" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a5" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left">Demonstrates knowledge of resources for teaching and student resources</td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a6" value="5">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a6" value="4">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a6" value="3">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a6" value="2">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a6" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="text-align: left">Designs instructional materials and activities</td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a7" value="5">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a7" value="4">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a7" value="3">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a7" value="2">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a7" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left; padding: 10px">Designs and structures lessons</td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a8" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a8" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a8" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a8" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="a8" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>B. Teacher/Student Relationships </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">Student demonstrates respect for teacher</td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher demonstrates positive attitude and openness to students
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher demonstrates ability to personalize the instructional program for students
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b3" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher demonstrates willingness to be flexible
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b4">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b4">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="b4">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>C. Class Management </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher creates a stimulating and effective environment for learning
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher establishes and maintains a disciplined environment
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher demonstrates effective planning and organization skills
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c3" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher is effective in directing the class 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c4" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c4" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c4" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c4" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c4" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher effectively organizes the class
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c5" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c5" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c5" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c5" value="22">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c5" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Teacher has established procedures that govern the handling of routine
                                                    administrative matters 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c6" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c6" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c6" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c6" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="c6" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>D. Management of Student Behavior </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher has established procedures that govern student verbal participation during 
                                                different types of activities – whole class instruction, small group instruction, etc. 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d1" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher has established procedures that govern student movement in the classroom during different types of instructional activities  
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher frequently monitors the behavior of all students during whole-class, small group and seat work activities and during transitions between instructional activities
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d3" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher stops inappropriate behavior promptly and consistently, yet maintains the dignity of the student 
 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d4" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d4" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d4" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d4" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="d4" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> E. Instructional Time </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Materials, supplies, and equipment are ready at the start of the lessons or instructional activity
 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                    Students are on task quickly at the beginning of each lesson or instructional activity 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher maintains a high level of student time on-task  
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="e3" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>F. Instructional Presentation </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Begins lesson or instructional activity with an appropriate review of previous material   
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Introduces the lesson or instructional activity and specifies learning objectives  
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Speaks fluently and precisely 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f3" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Presents the lesson or instructional activity using concepts and language understandable to students  
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f4" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f4" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f4" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f4" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f4" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Provides relevant examples and demonstrations to illustrate concepts and skills 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f5" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f5" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f5" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f5" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f5" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Assigns tasks appropriate to student level 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f6" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f6" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f6" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f6" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f6" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Asks appropriate levels of questions  
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f7" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f7" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f7" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f7" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f7" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Conducts lessons or instructional activities at an appropriate pace 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f8" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f8" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f8" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f8" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f8" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Facilitates smooth and effective transitions between instructional activities   
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f9" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f9" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f9" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f9" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f9" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Makes assignments clear   
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f10" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f10" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f10" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f10" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f10" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Provides opportunities for the application of concepts and skills   
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f11" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f11" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f11" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f11" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f11" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Summarizes the main point(s) at the end of the lesson or instructional activities 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f12" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f12" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f12" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f12" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="f12" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>G. Instructional Monitoring of Student Performance</td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Maintains clear, firm and reasonable work standards and due dates    
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Circulates during class to check all students’ performance     
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Routinely uses oral, written or other work products to check student progress    
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="g3" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>H. Instructional Feedback </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Provides prompt feedback on assigned work    
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Affirms a correct oral response      
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Provides sustaining feedback after an incorrect response    
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="h3" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>I. Facilitating Instruction  </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Develops an instructional plan based upon school, district, and Board adopted curricular goals 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Uses diagnostic information from tests and other assessment procedures to develop and revise objectives and/or tasks       
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Develops an instructional plan that matches/aligns objective, learning strategies, assessment and student needs at the appropriate levels of difficulty     
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="i3" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <thead>
                                                <tr>
                                                    <th colspan="6" >II. INTERPERSONAL/PROFESSIONAL RESPONSIBILITIES </th>
                                                </tr>
                                            </thead>

                                            <tr>
                                                <td>A. Communicating with Families   </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher participates in school’s activities and processes for parent communication
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher provides information to parents about the instructional, behavioral, and attendance program and the student’s progress on a regular basis 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher responds to parent concerns in a professional manner     
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2a3" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>B. Maintaining Accurate Records  </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher’s system for maintaining information on student completion of assignments, student progress, behavior, and attendance is effective
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2b1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2b1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2b1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2b1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2b1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>C. Contributing to the School and the District </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher maintains professional working relationships with staff including supervisor 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher cooperates with colleagues to fulfill school required duties 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher participates in school events when assigned (e.g. Open House) 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c3" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher actively and constructively participates in and makes a contribution to school or district projects  
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c4" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c4" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c4" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c4" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2c4" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>D. Shows Professionalism </td>

                                                 <td>
                                                    Outstading <br /> 5
                                                </td>
                                               
                                                <td>
                                                    Very Satisfactory <br /> 4
                                                </td>

                                                <td>
                                                    Satisfactory <br /> 3
                                                </td>
                                                
                                                <td>
                                                    Unsatisfactory <br /> 2
                                                </td>
                                            
                                                <td>
                                                    Rare  <br /> 1
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher shows respect for students, parents, peers and administration by being punctual and prepared for class, work and meetings 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d1" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d1" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d1" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d1" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d1" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher shows respect for students, peers, parents and administration through his/her words and actions 
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d2" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d2" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d2" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d2" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d2" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher participates in activities that will enhance his/her professional skills
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d3" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d3" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d3" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d3" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d3" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher addresses and/or reports student language, bullying, harassing, hostile, prejudicial or belittling statements and/or behaviors   
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d4" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d4" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d4" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d4" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d4" value="1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left; padding: 10px">
                                                Teacher follows the policies, regulations, and procedures of the school district    
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d5" value="5">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d5" value="4">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d5" value="3">
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d5" value="2">
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="form-check-inline">
                                                        <input type="radio" class="form-check-input" name="2d5" value="1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <thead>
                                                <tr>
                                                    <th colspan="6">
                                                    Recommendations for Improvement and/or Professional Development: 
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td colspan="6">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="8" id="comment" required></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
  


        <!--Footer-->
            <?php
                include'js.php';
                if(!isset($_SESSION['role']) == 1){
                    include('assets/components/footer.php');
                }
            ?>

    <?php else:?>
        <?php header('location: index.php');?>
    <?php endif;?>
</body>
</html>