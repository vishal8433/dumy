<?php
include("../includes/connection.php");
include("home_script.php");
if(isset($_POST['submit'])){
    $Doctor_Name=mysqli_real_escape_string($con,$_POST['name']);
    $Doctor_Specilization=mysqli_real_escape_string($con,$_POST['spe']);
    $Doctor_Time=mysqli_real_escape_string($con,$_POST['time']);
    
    $insert="INSERT INTO `doctor_list`(`user_id`, `doctor_name`, `specialization`, `time`) VALUES ('$id','$Doctor_Name','$Doctor_Specilization','$Doctor_Time')";
    $query=mysqli_query($con,$insert);
    if($query){
        echo"<script>alert('Doctor Information Added Successfully!')</script>";
        echo"<script>window.open('doctor_list.php','_self')</script>";
    }
    else{
        echo"<script>alert('something error!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>sanjeevni.com/edit_doctor_list</title>
    <link rel="icon" href="../image/logoimg.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--css file link-->
    <link rel="stylesheet" href="../style/doctor_list_stylesheet.css">
</head>

<body>
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark ">
                            <button class="navbar-toggler navbar-toggler-right dropdown" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="../image/logoimg.jpg">
                                <h7 class="brand-name"><b>Sanjeevni</b></h7>
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav  ml-auto">
                                    <li class="nav-item item1 active"><a href="home.php">
                                            <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Back</b></button></a>
                                    </li>
                                    <li class="nav-item item2 active">
                                        <a href="logout_script.php"> <button class="loginbtn btn-outline-success my-2 my-sm-0" type="submit"><b>LOG OUT</b></button></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
    <form  action="" method="post">
    <div class="c2">
    <h1 class="adddoctor">add doctor's</h1>
    <div class="fluid-container">
    <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <input class="form-control" name="name" type="text" placeholder="Enter Doctor Name" required autocomplete="off"> 
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <input class="form-control" name="spe" type="text" placeholder="Enter Doctor Specialization" required autocomplete="off"> 
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                     <input class="form-control" name="time" type="text" placeholder="Enter Doctor Time" required autocomplete="off"> 
                </div>
            </div>
        </div>
       <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                    <input name="submit" type="submit" class="submit" value="Add">
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        </div>
        </div>
    </form>
    
    <div class="c3">
    <h1 class="adddoctor">doctors list</h1>
   <?php 
        $user="SELECT * FROM `doctor_list` WHERE `user_id`='$id'";
        $post=mysqli_query($con,$user);
        while($row_posts=mysqli_fetch_array($post)){
        $Post_id=$row_posts['post_id'];
        $Doctor_Name=$row_posts['doctor_name'];
        $Spe=$row_posts['specialization'];
        $Time=$row_posts['time'];
        
        
        
        echo"<div class='fluid-container vj'>
    <div class='row'>
            <div class='col-sm-3'>
                <div class='col4'>
                    <h1 class='info'>$Doctor_Name</h1>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class='col4'>
                    <h1 class='info'>$Spe</h1>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class='col4'>
                    <h1 class='info'>$Time</h1>
                </div>
            </div>
            <div class='col-sm-3'>
                    <div class='col5'>
                        <a href='delete_doctor.php?id=$Post_id'><button type='submit' class='delete' name='delete'>Delete</button></a>
                        </div>
            </div>
        </div>
        </div>";}
        ?>
        </div>
        
        
        <footer>
        <div class="fluid-container f1">
            <div class="container-fluid ">
                <div class="row ourservicesrow">
                    <div class="col-sm-2 ourservices">
                    </div>
                    <div class="col-sm-10 aboutmeparagraph">
                    </div>
                </div>
                <pre class="copyrightline"><i class="fa fa-copyright" aria-hidden="true"></i>copyright to sanjeevni.com<br>all rights reserved.</pre>
            </div>
        </div>
    </footer>
</body>

</html>
