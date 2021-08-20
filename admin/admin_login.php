<!DOCTYPE html>
<?php include("admin_login_script.php"); ?>
<html>

<head>
    <title>sanjeevni.com/contact_us_page</title>
    <link rel="icon" href="../image/logoimg.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--font awesome cdn-->
    <link rel="stylesheet" href="../style/admin_login.css">
</head>

<body>
    <div class="fluid-container">
       <div class="fluid-container c1">
            <div class="row">
               <div class="col-sm-12">
                   <h1 class="sanjeevni">sanjeevni.com</h1>
               </div>
            </div>
        </div>
        <div class="fluid-container c2">
            <div class="row">
                <img class="img-fluid introimg" src="../image/key.jpg">
            </div>
            <h1 class="admin_panel">admin panel</h1>
            <div class="admin-form">
            <form  action="" method="post">
                <input name="admin_email" type="email" class="form-control" placeholder="your email" autocomplete="off" required><br>
                <input name="admin_password" type="password" class="form-control" placeholder="password" required><br>
                <input name="admin" type="submit" class="submit" value="Log In">
            </form>
        </div>
        </div>
    </div>
</body>

</html>
