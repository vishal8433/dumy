<!DOCTYPE html>
<?php
include("../includes/connection.php");
if(isset($_GET['id'])){
    $u_id=$_GET['id'];
    $vj="SELECT * FROM `blood_donor` WHERE `id`='$u_id'";
    $run=mysqli_query($con,$vj);
    $row=mysqli_fetch_array($run);
    $email=$row['email'];
    $name=$row['name'];
    $age=$row['age'];
    $address=$row['address'];
    $blood_grp=$row['blood_grp'];
    $phone_no=$row['phone_no'];
    $country=$row['country'];
    $state=$row['state'];
    $district=$row['district'];
    $any_desease=$row['any_desease'];
    $reg_date=$row['reg_date'];
    $status=$row['status'];
}
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
    <link rel="stylesheet" href="../style/admin_blood_bank_donor_profile.css">
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
                <h1 class="gmail"><i>Gmail</i> : <?php echo"$email";?></h1><hr>
                <h1 class="info"><i>donor name</i> : <?php echo"$name";?></h1><hr>
                <h1 class="info"><i>donor age</i> : <?php echo"$age";?></h1><hr>
                <h1 class="info"><i>address</i> : <?php echo"$address";?></h1><hr>
                <h1 class="info"><i>donor blood group</i> : <?php echo"$blood_grp";?></h1><hr>
                <h1 class="info"><i>donor phone no</i> : <?php echo"$phone_no";?></h1><hr>
                <h1 class="info"><i>country</i> : <?php echo"$country";?></h1><hr>
                <h1 class="info"><i>state</i> : <?php echo"$state";?></h1><hr>
                <h1 class="info"><i>district</i> : <?php echo"$district";?></h1><hr>
                <h1 class="info"><i>desease</i> : <?php echo"$any_desease";?></h1><hr>
                <h1 class="info"><i>last updated on</i> : <?php echo"$reg_date";?></h1><hr>
                <h1 class="info"><i>status</i> : <?php echo"$status";?></h1><hr>
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="col2">
                             <?php echo"<a style='color:white; text-decoration:none;' href='delete_blood_donor_script.php?id=$u_id'><button type='submit' class='btn btn-lg btn-block deletea'>Delete Account</button></a>"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
