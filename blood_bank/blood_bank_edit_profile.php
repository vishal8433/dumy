<!DOCTYPE html>
<?php include("blood_bank_profile_script.php"); ?>
<?php include("blood_bank_edit_profile_script.php"); ?>
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
    <link rel="stylesheet" href="../style/blood_bank_edit_profile_stylesheet.css">
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
             <h1 class="detail_line">blood bank details</h1>
        <div class="fluid-container details">
           <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">blood bank name:</p>
                    <input name="u_b_b_name" type="text" class="form-control" value="<?php echo"$B_Name"; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">password:</p>
                    <input name="u_make_password" type="text" class="form-control" value="<?php echo"$Password"; ?>">

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
                    <p class="title">blood bank Phone No.:</p>
                    <input name="u_b_b_phone_no" type="text" class="form-control" value="<?php echo"$B_Phone_No"; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">A+ blood group:</p>
                    <select name="u_a_positive" class="form-control">
                                    <option><?php echo"$A_Positive"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                         <p class="title">A- blood group:</p>
                         <select name="u_a_negative" class="form-control">
                                    <option><?php echo"$A_Negative"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
        </div>
                    <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">B+ blood group:</p>
                    <select name="u_b_positive" class="form-control">
                                    <option><?php echo"$B_Positive"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">B- blood group:</p>
                    <select name="u_b_negative" class="form-control">
                                    <option><?php echo"$B_Negative"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                    <p class="title">AB+ blood group:</p>
                    <select name="u_ab_positive" class="form-control">
                                    <option><?php echo"$AB_Positive"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
        </div>
                        <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">AB- blood group:</p>
                    <select name="u_ab_negative" class="form-control">
                                    <option><?php echo"$AB_Negative"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col2">
                    <p class="title">O+ blood group:</p>
                    <select name="u_o_positive" class="form-control">
                                    <option><?php echo"$O_Positive"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col3">
                    <p class="title">O+ blood group:</p>
                    <select name="u_O_negative" class="form-control">
                                    <option><?php echo"$O_Negative"; ?></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                </div>
            </div>
        </div>
                        <div class="row">
            <div class="col-sm-4">
                <div class="col1">
                    <p class="title">update image:</p>
                    <input class="form-control" name="u_image" type="file">
                </div>
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
