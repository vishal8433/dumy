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
    <link rel="stylesheet" href="../style/blood_bank_profile_stylesheet.css">
</head>

<body>
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <button class="navbar-toggler navbar-toggler-right dropdown" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="../image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item item1 active"><a href="blood_bank_edit_profile.php">
                        <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Edit Account</b></button></a>
                </li>
                <li class="nav-item item2 active">
                    <a href="logout_script.php"> <button class="loginbtn btn-outline-success my-2 my-sm-0" type="submit"><b>LOG OUT</b></button></a>
                </li>
            </ul>
        </div>
    </nav>
  <?php
include("blood_bank_profile_script.php");
?>
    <div class="c1">
        <div class="fluid-container">
            <div class="row">
            <?php echo"<img class='img-fluid introimg' style='border: 5px solid #4d0000; box-shadow: 0 0 16px 7px white ;' src='../users/$Image'>"; ?>
            </div>
            <h1 class="introline"><?php echo"$B_Name"; ?></h1>
        </div>
    </div>
    <div class="c2">
        <div class="fluid-container details">
            <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">blood bank name:</p>
                    <p class="info"><?php echo"$B_Name"; ?></p>
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
                    <p class="title">Country:</p>
                    <p class="info"><?php echo"$Country"; ?></p>
                </div>
            </div>
        </div>
                    <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">State:</p>
                    <p class="info"><?php echo"$State"; ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">District:</p>
                    <p class="info"><?php echo"$District"; ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                    <pre class="title">blood bank Phone No.:</pre>
                    <p class="info"><?php echo"$B_Phone_No"; ?></p>
                </div>
            </div>
        </div>
                        <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">A+ blood group:</p>
                    <p class="info"><?php echo"$A_Positive"; ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">A- blood group:</p>
                    <p class="info"><?php echo"$A_Negative"; ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                    <p class="title">B+ blood group:</p>
                    <p class="info"><?php echo"$B_Positive"; ?></p>
                </div>
            </div>
        </div>
                        <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">B- blood group:</p>
                    <p class="info"><?php echo"$B_Negative"; ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">AB+ blood group:</p>
                    <p class="info"><?php echo"$AB_Positive"; ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                    <p class="title">AB- blood group:</p>
                    <p class="info"><?php echo"$AB_Negative"; ?></p>
                </div>
            </div>
        </div>
                        <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">O+ blood group:</p>
                    <p class="info"><?php echo"$O_Positive"; ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">O- blood group:</p>
                    <p class="info"><?php echo"$O_Negative"; ?></p>
                </div>
            </div>
            <div class="col-sm-4">
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
