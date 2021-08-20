<?php

include("../includes/connection.php");


if(isset($_POST['signup'])){
    
    $Email=mysqli_real_escape_string($con,$_POST['email']);
    $Password=mysqli_real_escape_string($con,$_POST['make_password']);
    $H_Name=mysqli_real_escape_string($con,$_POST['hospital_name']);
    $Type_Of_H=mysqli_real_escape_string($con,$_POST['hospital_specializaton']);
    $H_Address=mysqli_real_escape_string($con,$_POST['address']);
    $Country=mysqli_real_escape_string($con,$_POST['country']);
    $State=mysqli_real_escape_string($con,$_POST['state']);
    $District=mysqli_real_escape_string($con,$_POST['district']);
    $H_Phone_No=mysqli_real_escape_string($con,$_POST['hospital_phone_no']);
    $Emergency=mysqli_real_escape_string($con,$_POST['emergency']);
    $Bed=mysqli_real_escape_string($con,$_POST['available_beds']);
    $ICU=mysqli_real_escape_string($con,$_POST['icu']);
    $Ventilator= mysqli_real_escape_string($con,$_POST['ventilator']);
    $Oxygen=mysqli_real_escape_string($con,$_POST['oxygen']);
    $Ambulance_Availability=mysqli_real_escape_string($con,$_POST['ambulance']);
    $A_Phone_No=mysqli_real_escape_string($con,$_POST['ambulance_phone_no']);
    $Male_Doctor=mysqli_real_escape_string($con,$_POST['male_doctor_availability']);
    $Female_Doctor=mysqli_real_escape_string($con,$_POST['female_doctor_availability']);
    $Status="verified";
    $Ver_Code=mt_rand();
    if(strlen($Password)<8){
        echo "<script>alert('password should be minimum 8 characters!')</script>";
        exit();
    }
    
    $check_email = "select * from hospital where email='$Email'";
    $run_email=mysqli_query($con,$check_email);
    $check=mysqli_num_rows($run_email);
    
    if($check==1){
        echo "<script>alert('This email already exist, Please Try another Email!')</script>";
        exit();
    }

    $vj ="INSERT INTO `hospital`(`email`, `pass`, `hospital_name`, `type_of_hospital`, `hospital_address`, `country`, `state`, `district`, `h_phone_no`, `emergency`, `bed`, `icu`, `ventilator`, `oxygen`, `ambulance_availability`, `amubulance_phone_no`, `male_doctor`, `female_doctor`, `image`, `reg_date`, `ver_code`, `status`) VALUES('$Email','$Password','$H_Name','$Type_Of_H','$H_Address','$Country','$State','$District','$H_Phone_No','$Emergency','$Bed','$ICU','$Ventilator','$Oxygen','$Ambulance_Availability','$A_Phone_No','$Male_Doctor','$Female_Doctor','default.jpg',NOW(),'$Ver_Code','$Status')";
    
    $query=mysqli_query($con,$vj);
    
    if($query){
        
        echo "<h3 style='color: red;'>Hi $H_Name your registration is almost complete please check your Email for final verification.</h3>";
    }
    
    else{
        echo "Registration failed, try again!"; 
    }
    
}
?>