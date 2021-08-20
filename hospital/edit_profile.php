<!DOCTYPE html>
<?php include("home_script.php"); ?>
<?php include("edit_profile_script.php"); ?>
<html>
<head>
    <title>sanjeevni.com/edit_profile</title>
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
    <link rel="stylesheet" href="../style/edit_profile_stylesheet.css">
</head>

<body>
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="../image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
    </nav>
    
    <h1 class="edit_line">edit your account</h1>
     <form action="" method="post" enctype="multipart/form-data">
             <div class="c2">
             <h1 class="detail_line">account details</h1>
        <div class="fluid-container details">
           <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">hospital name:</p>
                    <input name="u_h_name" type="text" class="form-control" value="<?php echo"$Hospital_Name"; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">password:</p>
                    <input name="u_pass" type="text" class="form-control" value="<?php echo"$Password"; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                         <p class="title">address:</p>
                         <input name="u_address" type="text" class="form-control" value="<?php echo"$Address"; ?>">
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">hospital type:</p>
                    <select name="u_hospital_specializaton" class="form-control">
                                    <option><?php echo"$Hospital_Type"; ?></option>
                                    <option>Government Hospital</option>
                                    <option>Private Hospital</option>
                                    <option>Charitable Hospital</option>
                                    <option>clinic</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">Hospital Phone No.:</p>
                    <input name="u_hospital_phone_no" type="text" class="form-control" value="<?php echo"$Hospital_Phone_No"; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                         <p class="title">emergency:</p>
                         <select name="u_emergency" class="form-control">
                                    <option><?php echo"$Emergency"; ?></option>
                                    <option>Open</option>
                                    <option>Close</option>
                                </select>
                </div>
            </div>
        </div>
                    <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">Available Beds:</p>
                    <input name="u_available_beds" type="text" class="form-control" value="<?php echo"$bed"; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">available ICU's:</p>
                    <input name="u_icu" type="text" class="form-control" value="<?php echo"$ICU"; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                    <p class="title">Available ventilator's:</p>
                    <input name="u_ventilator" type="text" class="form-control" value="<?php echo"$Ventilator"; ?>">
                </div>
            </div>
        </div>
                        <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">oxygen availabilty:</p>
                    <select name="u_oxygen" class="form-control">
                                    <option><?php echo"$Oxygen"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">ambulance availability:</p>
                    <select name="u_ambulance" class="form-control">
                                    <option><?php echo"$Ambulance_Availability"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                    <p class="title">ambulance phone no.:</p>
                    <input name="u_ambulance_phone_no" type="text" class="form-control" value="<?php echo"$Ambulance_Phone_No"; ?>">
                </div>
            </div>
        </div>
                        <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">male doctor availability:</p>
                    <select name="u_male_doctor_availability" class="form-control">
                                    <option><?php echo"$Male_Doctor"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <pre class="title">female doctor availability:</pre>
                    <select name="u_female_doctor_availability" class="form-control">
                                    <option><?php echo"$Female_Doctor"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                    <p class="title">update image:</p>
                    <input class="form-control" name="u_image" type="file">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="col2">
                <button name="update" type="submit" class="update_btn">update</button>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
    </div>
     </form>
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
