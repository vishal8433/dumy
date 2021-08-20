<!DOCTYPE html>
<?php 
include("includes/connection.php");
global $con;
?>
<html>

<head>
    <title>sanjeevni.com/firozabad</title>
    <link rel="icon" href="image/logoimg.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style1.css">
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
                <li class="nav-item item1 active"><a href="district_list.php">
                        <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>District Page</b></button></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="fluid-container">
        <div class="row">
            <div class="col-sm-4">
              <div class="row">
               <div class="col1">
                <?php
                $users="SELECT * FROM `hospital` WHERE `district`='Baghpat'";
                $run_user=mysqli_query($con,$users);
                echo"</br><h3>Hospitals in<br> Baghpat</h3><hr>";
                while($row_user=mysqli_fetch_array($run_user)){
                    $user_id=$row_user['id'];
                    $h_name=$row_user['hospital_name'];
                
                echo"<a href='hospital_show_profile.php?id=$user_id' >$h_name</a><hr>";
                     }
                ?>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
              <div class="row">
               <div class="col1">
                <?php
                $users="SELECT * FROM `blood_bank` WHERE `district`='Baghpat'";
                $run_user=mysqli_query($con,$users);
                echo"</br><h3>Blood Bank in<br> Baghpat</h3><hr>";
                while($row_user=mysqli_fetch_array($run_user)){
                    $user_id=$row_user['id'];
                    $h_name=$row_user['name'];
                
                echo"<a href='blood_bank_show_profile.php?id=$user_id' >$h_name</a><hr>";
                     }
                ?>
                
                </div>
                </div>
            </div>
            <div class="col-sm-4">
              <div class="row">
               <div class="col1">
                <?php
                $users="SELECT * FROM `blood_donor` WHERE `district`='Baghpat'";
                $run_user=mysqli_query($con,$users);
                echo"</br><h3>Blood Donor in<br> Baghpat</h3><hr>";
                while($row_user=mysqli_fetch_array($run_user)){
                    $user_id=$row_user['id'];
                    $h_name=$row_user['name'];
                
                echo"<a href='blood_donor_show_profile.php?id=$user_id' >$h_name</a><hr>";
                     }
                ?>
    
            </div>
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
