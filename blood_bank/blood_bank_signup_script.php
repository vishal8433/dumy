<?php

include("../includes/connection.php");


if(isset($_POST['signup'])){
    
    $Email=mysqli_real_escape_string($con,$_POST['email']);
    $Password=mysqli_real_escape_string($con,$_POST['make_password']);
    $B_Name=mysqli_real_escape_string($con,$_POST['b_b_name']);
    $B_Address=mysqli_real_escape_string($con,$_POST['address']);
    $B_Phone_No=mysqli_real_escape_string($con,$_POST['b_b_phone_no']);
    $Country=mysqli_real_escape_string($con,$_POST['country']);
    $State=mysqli_real_escape_string($con,$_POST['state']);
    $District=mysqli_real_escape_string($con,$_POST['district']);
    $A_Positive=mysqli_real_escape_string($con,$_POST['a_positive']);
    $A_Negative=mysqli_real_escape_string($con,$_POST['a_negative']);
    $B_Positive=mysqli_real_escape_string($con,$_POST['b_positive']);
    $B_Negative=mysqli_real_escape_string($con,$_POST['b_negative']);
    $AB_Positive=mysqli_real_escape_string($con,$_POST['ab_positive']);
    $AB_Negative=mysqli_real_escape_string($con,$_POST['ab_negative']);
    $O_Positive=mysqli_real_escape_string($con,$_POST['o_positive']);
    $O_Negative=mysqli_real_escape_string($con,$_POST['O_negative']);
    $Status="verified";
    $Ver_Code=mt_rand();
    if(strlen($Password)<8){
        echo "<script>alert('password should be maximum 8 characters!')</script>";
        exit();
    }
    
    $check_email = "select * from blood_bank where email='$Email'";
    $run_email=mysqli_query($con,$check_email);
    $check=mysqli_num_rows($run_email);
    
    if($check==1){
        echo "<script>alert('This email already exist, Please Try another Email!')</script>";
        exit();
    }

    $vj ="INSERT INTO `blood_bank`(`email`, `pass`, `name`, `address`, `phone_no`, `country`, `state`, `district`, `a_positive`, `a_negative`, `b_positiveb`, `b_negative`, `ab_positive`, `ab_negative`, `o_positive`, `o_negative`, `image`, `reg_date`, `ver_code`, `status`) VALUES ('$Email','$Password','$B_Name','$B_Address','$B_Phone_No','$Country','$State','$District','$A_Positive','$A_Negative','$B_Positive','$B_Negative','$AB_Positive','$AB_Negative','$O_Positive','$O_Negative','default.jpg',NOW(),'$Ver_Code','$Status')";
    
    $query=mysqli_query($con,$vj);
    
    if($query){
        
        echo "<h3 style='color: white;'>Hi $B_Name your registration is almost complete please check your Email for final verification.</h3>";
    }
    
    else{
        echo "Registration failed, try again!"; 
    }
    
}
?>