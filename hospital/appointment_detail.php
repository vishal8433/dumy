<?php
include("../includes/connection.php");
if(isset($_GET['id'])){
    $post_id=$_GET['id'];
    $vj="SELECT * FROM `app` WHERE `post_id`='$post_id'";
    $run=mysqli_query($con,$vj);
    $row=mysqli_fetch_array($run);
    
    $Gmail=$row['email'];
    $Name=$row['pateint_name'];
    $D_Name=$row['doctor_name'];
    $Disease=$row['disease'];
    $Date=$row['date'];
    $Time1=$row['time1'];
    $Time2=$row['time2'];
    $Time3=$row['time3'];
    $Remark=$row['remark'];
    $R_Time=$row['req_time'];
}

if(isset($_POST['deleteappointment'])){
    $vj="DELETE FROM `app` WHERE `post_id`='$post_id'";
    $query=mysqli_query($con,$vj);
    if($query){
        echo"<script>alert('Appointment Delete successfully!')</script>";
        echo"<script>window.open('appointment.php','_self')</script>";
    }
    else{
       echo"<script>alert('some error occured!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>sanjeevni.com/profile</title>
    <link rel="icon" href="../image/logoimg.jpg">
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
    <link rel="stylesheet" href="../style/appointment_detail_style.css">
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
    <h1 class="appointmentheading">Patient data</h1>
    <div class="fluid-container">
        <div class="row">
            <div class="col1">
                <h1 class="pdetail">Patient Name : <?php echo"$Name";?></h1><hr>
                <h1 class="gmail">Pateint Email : <?php echo"$Gmail"; ?></h1><hr>
                <h1 class="pdetail">Doctor Name : <?php echo"$D_Name";?></h1><hr>
                <h1 class="pdetail">Patient Disease : <?php echo"$Disease";?></h1><hr>
                <h1 class="pdetail">Appointment Date : <?php echo"$Date";?></h1><hr>
                <h1 class="pdetail">Appointment Time1 : <?php echo"$Time1";?></h1><hr>
                <h1 class="pdetail">Appointment Time2 : <?php echo"$Time2";?></h1><hr>
                <h1 class="pdetail">Appointment Time3 : <?php echo"$Time3";?></h1><hr>
                <h1 class="pdetail">Remark : <?php echo"$Remark"; ?></h1><hr>
                <h1 class="pdetail">Request time : <?php echo"$R_Time"; ?></h1><hr>
                <form action="" method="post">
                    <button name="deleteappointment" type="submit" class="btn btn-lg btn-block delete">Delete Appointment</button>
                </form>
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