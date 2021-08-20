<!DOCTYPE html>
<?php
include("includes/connection.php");
if(isset($_GET['id'])){
    global $con;
    $User_Id=$_GET['id'];
    $select="SELECT * FROM `hospital` WHERE `id`='$User_Id'";
    $run=mysqli_query($con,$select);
    $row=mysqli_fetch_array($run);
    
$id=$row['id'];
$Hospital_Name=$row['hospital_name'];
$Hospital_Type=$row['type_of_hospital'];
$Address=$row['hospital_address'];
$District=$row['district'];
$Hospital_Phone_No=$row['h_phone_no'];
$Emergency=$row['emergency'];
$bed=$row['bed'];
$ICU=$row['icu'];
$Ventilator=$row['ventilator'];
$Oxygen=$row['oxygen'];
$Ambulance_Availability=$row['ambulance_availability'];
$Ambulance_Phone_No=$row['amubulance_phone_no'];
$Male_Doctor=$row['male_doctor'];
$Female_Doctor=$row['female_doctor'];
$Update=$row['reg_date'];
$Image=$row['image'];
}

if(isset($_POST['appointment'])){
    global $User_Id;
    $D_Name=mysqli_real_escape_string($con,$_POST['d_name']);
    $Email=mysqli_real_escape_string($con,$_POST['email']);
    $Name=mysqli_real_escape_string($con,$_POST['p_name']);
    $Disease=mysqli_real_escape_string($con,$_POST['disease']);
    $Date=mysqli_real_escape_string($con,$_POST['date']);
    $Time1=mysqli_real_escape_string($con,$_POST['t1']);
    $Time2=mysqli_real_escape_string($con,$_POST['t2']);
    $Time3=mysqli_real_escape_string($con,$_POST['t3']);
    $Remark=mysqli_real_escape_string($con,$_POST['remark']);
    
    $insert="INSERT INTO `app`(`user_id`, `doctor_name`, `email`, `pateint_name`,`disease`, `date`, `time1`, `time2`, `time3`,`req_time`,`remark`)VALUES('$User_Id','$D_Name','$Email','$Name','$Disease','$Date','$Time1','$Time2','$Time3',NOW(),'$Remark')";
    $query=mysqli_query($con,$insert);
    
    if($query){
        echo"<script>alert('appointment request recieved successfully.your appointment schedule send on your email as soon as possible.')</script>";
    }
    else{
        echo"<script>alert('error occoured.....')</script>";
    }
    
}
?>
<html>

<head>
    <title>sanjeevni.com/hospital_profile</title>
    <link rel="icon" href="image/logoimg.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--css file link-->
    <link rel="stylesheet" href="style/hospital_show_profile_stylesheet.css">
    <link rel="stylesheet" href="style/show_doctlist.css">
</head>

<body>
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <button class="navbar-toggler navbar-toggler-right dropdown" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
               <li class="nav-item item1 active"><a href="../index.php">
                        <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Home</b></button></a>
                </li>
                <li class="nav-item item1 active"><a href="../district_list.php">
                        <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>District Page</b></button></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="c1">
        <div class="fluid-container">
            <div class="row">
                <?php echo"<img class='img-fluid introimg' style='border: 5px solid white; box-shadow: 0 0 16px 7px rgba(0,150,255,0.91) ;' src='../users/$Image'>"; ?>
            </div>
            <h1 class="introline"><?php echo"$Hospital_Name"; ?></h1>
        </div>
    </div>
    <div class="c2">
        <div class="fluid-container details">
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <p class="title">Hospital Type:</p>
                        <p class="info"><?php echo"$Hospital_Type"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                        <p class="title">Address:</p>
                        <p class="info"><?php echo"$Address"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col3">
                        <p class="title">District:</p>
                        <p class="info"><?php echo"$District"; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <p class="title">Hospital Phone No.:</p>
                        <p class="info"><?php echo"$Hospital_Phone_No"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                        <p class="title">Emergency:</p>
                        <p class="info"><?php echo"$Emergency"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col3">
                        <p class="title">Available Bed's:</p>
                        <p class="info"><?php echo"$bed"; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <p class="title">Available ICU's:</p>
                        <p class="info"><?php echo"$ICU"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                        <pre class="title">Available Ventilator's:</pre>
                        <p class="info"><?php echo"$Ventilator"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col3">
                        <p class="title">Oxygen Availability:</p>
                        <p class="info"><?php echo"$Oxygen"; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <pre class="title">Ambulance Availability:</pre>
                        <p class="info"><?php echo"$Ambulance_Availability"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                        <pre class="title">Ambulance Phone NO.:</pre>
                        <p class="info"><?php echo"$Ambulance_Phone_No"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col3">
                        <pre class="title">Male Dr. Availability:</pre>
                        <p class="info"><?php echo"$Male_Doctor"; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <pre class="title">Female Dr. Availability:</pre>
                        <p class="info"><?php echo"$Female_Doctor"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                            <pre class="title">Last Updated On:</pre>
                            <p class="info"><?php echo"$Update"; ?></p>
                        </div>
                </div>
                <div class="col-sm-4">
                <div class="col3">
                        <div class="row">
                            <button type="button" class="appointment" data-toggle="modal" data-target="#myModal">Take Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="c3">
    <h1 class="adddoctor">doctors list</h1>
   <?php 
        $user="SELECT * FROM `doctor_list` WHERE `user_id`='$User_Id'";
        $post=mysqli_query($con,$user);
        while($row_posts=mysqli_fetch_array($post)){
        $Doctor_Name=$row_posts['doctor_name'];
        $Spe=$row_posts['specialization'];
        $Time=$row_posts['time'];
        
        
        
        echo"<div class='fluid-container vj'>
    <div class='row'>
            <div class='col-sm-4'>
                <div class='col4'>
                    <h1 class='infor'>$Doctor_Name</h1>
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='col4'>
                    <h1 class='infor'>$Spe</h1>
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='col4'>
                    <h1 class='infor'>$Time</h1>
                </div>
            </div>
        </div>
        </div>";}
        ?>
        </div>
    
    <!--Appointment modal-->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Take Appointment</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="" method="post" class="form-control">
                        <input name="d_name" class="form-control" type="text" placeholder="Enter Doctor Name">
                        <br>
                        <input name="email" class="form-control" type="email" placeholder="Your Email" ?><br>
                        <input name="p_name" class="form-control" type="text" placeholder="Your Name"><br>
                        <input name="disease" class="form-control" type="text" placeholder="List Disease"><br>
                        <input name="date" class="form-control" type="text" placeholder="Appointment Date"><br>
                        <input name="t1" class="form-control" type="text" placeholder="Enter Your 1st Priority Time Interval"><br>
                        <input name="t2" class="form-control" type="text" placeholder="Enter Your 2st Priority Time Interval"><br>
                        <input name="t3" class="form-control" type="text" placeholder="Enter Your 3st Priority Time Interval"><br>
                           <textarea name="remark" class="form-control" placeholder="Any Remark"></textarea><br>
                            <input name="appointment" type="submit" class="btn btn-danger" value="Done"><br>

                    </form>
                </div>


            </div>
        </div>
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