<!DOCTYPE html>
<?php include("admin_hospital_detail_script.php");
?>
<html>

<head>
    <title>sanjeevni.com/details</title>
    <link rel="icon" href="../images/logoimg.jpg">
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
    <link rel="stylesheet" href="../style/admin_hospital_detail.css">
</head>

<body>
    <!--**********************************************nav bar*******************************************************-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <button class="navbar-toggler navbar-toggler-right dropdown" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="../image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item item1 active"><a class="navlinks" href="admin_home.php">
                    <b>Home</b></a>
                </li>
                <li class="nav-item item1 active"><a class="navlinks" href="admin_hospital.php">
                    <b>Hospital</b></a>
                </li>
                <li class="nav-item item1 active"><a class="navlinks" href="admin_blood_bank.php">
                    <b>Blood_Bank</b></a>
                </li>
                <li class="nav-item item1 active"><a class="navlinks" href="admin_blood_donor.php">
                    <b>Blood_Donor</b></a>
                </li>
                <li class="nav-item item1 active"><a class="navlinks" href="logout_script.php">
                    <b>Logout</b></a>
                </li>
            </ul>
        </div>
    </nav>
<h1 class="data">account data</h1>
    <div class="fluid-container c1">
        <div class="row">
           <div class="col-sm-12">
            <div class="col1">
                <h1 class="gmail"><i>Gmail</i> : <?php echo"$Gmail";?></h1><hr>
                <h1 class="detail"><i>hospital name</i> : <?php echo"$h_name";?></h1><hr>
                <h1 class="detail"><i>hospital type</i> : <?php echo"$type_h";?></h1><hr>
                <h1 class="detail"><i>address</i> : <?php echo"$h_address";?></h1><hr>
                <h1 class="detail"><i>country</i> : <?php echo"$c";?></h1><hr>
                <h1 class="detail"><i>state</i> : <?php echo"$s";?></h1><hr>
                <h1 class="detail"><i>district</i> : <?php echo"$d";?></h1><hr>
                <h1 class="detail"><i>Hospital phone No.</i> : <?php echo"$h_phone";?></h1><hr>
                <h1 class="detail"><i>emergency availability</i> : <?php echo"$e";?></h1><hr>
                <h1 class="detail"><i>available beds</i> : <?php echo"$bed";?></h1><hr>
                <h1 class="detail"><i>available icu</i> : <?php echo"$icu";?></h1><hr>
                <h1 class="detail"><i>available ventilator</i> : <?php echo"$v";?></h1><hr>
                <h1 class="detail"><i>oxygen availability</i> : <?php echo"$o";?></h1><hr>
                <h1 class="detail"><i>ambulance availability</i> : <?php echo"$ambulance_a";?></h1><hr>
                <h1 class="detail"><i>ambulance phone no.</i> : <?php echo"$a_p";?></h1><hr>
                <h1 class="detail"><i>male doctor availability</i> : <?php echo"$m_d";?></h1><hr>
                <h1 class="detail"><i>female doctor availability</i> : <?php echo"$f_d";?></h1><hr>
                <h1 class="detail"><i>last update on</i> : <?php echo"$update";?></h1><hr>
                <h1 class="detail"><i>status</i> : <?php echo"$status";?></h1><hr>
                    <div class="row">
                    <div class="col-sm-4">
                        <div class="col2">
                             <?php echo"<a style='color:white; text-decoration:none;' href='admin_appointment.php?id=$u_id'><button type='submit' class='btn btn-lg btn-block appointment'>Appointments</button></a>"; ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col2">
                             <?php echo"<a style='color:white; text-decoration:none;' href='admin_doctor_list.php?id=$u_id'><button name='doctorlist' type='submit' class='btn btn-lg btn-block doctorl'>Doctor List</button></a>"; ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col2">
                             <?php echo"<a style='color:white; text-decoration:none;' href='delete_hospital.php?id=$u_id'><button name='deleteaccount' type='submit' class='btn btn-lg btn-block deletea'>Delete Account</button></a>"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
