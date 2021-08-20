<!DOCTYPE html>
<html>

<head>
    <title>sanjeevni.com/admin_doctor_list</title>
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
    <link rel="stylesheet" href="../style/admin_doctor_list.css">
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
    <div class="fluid-container c1">
    <div class="row">
    <div class="col-sm-12">
    <div class="col">
    <h1 class="doctorl">doctors list</h1>
   <?php 
    include("../includes/connection.php");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $user="SELECT * FROM `doctor_list` WHERE `user_id`='$id'";
        $post=mysqli_query($con,$user);
        while($row_posts=mysqli_fetch_array($post)){
        $Doctor_Name=$row_posts['doctor_name'];
        $Spe=$row_posts['specialization'];
        $Time=$row_posts['time'];
        
        
        
        echo"<div class='fluid-container vj'>
    <div class='row'>
            <div class='col-sm-4'>
                <div class='col1'>
                    <h1 class='info'>$Doctor_Name</h1>
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='col1'>
                    <h1 class='info'>$Spe</h1>
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='col1'>
                    <h1 class='info'>$Time</h1>
                </div>
            </div>
        </div>
        </div>";}}
        ?>
</div></div></div></div>
</body>

</html>
