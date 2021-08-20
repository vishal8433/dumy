<?php

include("../includes/connection.php");


if(isset($_POST['signup'])){
    
    $Email=mysqli_real_escape_string($con,$_POST['email']);
    $Password=mysqli_real_escape_string($con,$_POST['make_password']);
    $Name=mysqli_real_escape_string($con,$_POST['donor_name']);
    $Age=mysqli_real_escape_string($con,$_POST['donor_age']);
    $Address=mysqli_real_escape_string($con,$_POST['address']);
    $Phone_No=mysqli_real_escape_string($con,$_POST['donor_phone_no']);
    $Country=mysqli_real_escape_string($con,$_POST['country']);
    $State=mysqli_real_escape_string($con,$_POST['state']);
    $District=mysqli_real_escape_string($con,$_POST['district']);
    $Blood_Group=mysqli_real_escape_string($con,$_POST['blood_grp']);
    $Disease=mysqli_real_escape_string($con,$_POST['donor_disease']);
    $Status="verified";
    $Ver_Code=mt_rand();
    if(strlen($Password)<8){
        echo "<script>alert('password should be maximum 8 characters!')</script>";
        exit();
    }
    
    $check_email = "select * from blood_donor where email='$Email'";
    $run_email=mysqli_query($con,$check_email);
    $check=mysqli_num_rows($run_email);
    
    if($check==1){
        echo "<script>alert('This email already exist, Please Try another Email!')</script>";
        exit();
    }

    $vj ="INSERT INTO `blood_donor`(`email`, `pass`, `name`, `age`, `address`, `blood_grp`, `phone_no`, `country`, `state`, `district`,`any_desease`, `image`, `reg_date`, `ver_code`, `status`) VALUES ('$Email','$Password','$Name','$Age','$Address','$Blood_Group','$Phone_No','$Country','$State','$District','$Disease','b_default.png',NOW(),'$Ver_Code','$Status')";
    
    $query=mysqli_query($con,$vj);
    
    if($query){
        
        echo "<h3 style='color: white;'>Hi $Name your registration is almost complete please check your Email for final verification.</h3>";
    }
    
    else{
        echo "Registration failed, try again!"; 
    }
    
}
?>