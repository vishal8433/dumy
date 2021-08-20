<?php
if(isset($_POST['update'])){
    $u_Hospital_Name=$_POST['u_h_name'];
    $u_Pass=$_POST['u_pass'];
    $u_Address=$_POST['u_address'];
    $u_H_Type=$_POST['u_hospital_specializaton'];
    $u_H_Phone_No=$_POST['u_hospital_phone_no'];
    $u_Emergency=$_POST['u_emergency'];
    $u_Beds=$_POST['u_available_beds'];
    $u_ICU=$_POST['u_icu'];
    $u_Ventilator=$_POST['u_ventilator'];
    $u_Oxygen=$_POST['u_oxygen'];
    $u_Ambulance_Availability=$_POST['u_ambulance'];
    $u_Ambulance_Phone_No=$_POST['u_ambulance_phone_no'];
    $u_Male_Doctor=$_POST['u_male_doctor_availability'];
    $u_Female_Doctor=$_POST['u_female_doctor_availability'];
    $u_image=$_FILES['u_image']['name'];
    $image_tmp=$_FILES['u_image']['tmp_name'];
    
    move_uploaded_file($image_tmp,"../users/$u_image");
    
    $update="UPDATE `hospital` SET `pass`='$u_Pass',`hospital_name`='$u_Hospital_Name',`type_of_hospital`='$u_H_Type',`hospital_address`='$u_Address',`h_phone_no`='$u_H_Phone_No',`emergency`='$u_Emergency',`bed`='$u_Beds',`icu`='$u_ICU',`ventilator`='$u_Ventilator',`oxygen`='$u_Oxygen',`ambulance_availability`='$u_Ambulance_Availability',`amubulance_phone_no`='$u_Ambulance_Phone_No',`male_doctor`='$u_Male_Doctor',`female_doctor`='$u_Female_Doctor',`reg_date`=NOW(),`image`='$u_image' WHERE `id`='$id' ";
    
    $run=mysqli_query($con,$update);
    
    if($run){
        echo"<script>alert('your profile updated successfully!')</script>";
        echo"<script>window.open('home.php','_self')</script>";
    }
    
}
?>