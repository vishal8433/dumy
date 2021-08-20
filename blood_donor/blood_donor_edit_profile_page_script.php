<?php
if(isset($_POST['update'])){
    $u_D_Name=$_POST['u_donor_name'];
    $u_Pass=$_POST['u_make_password'];
    $u_Address=$_POST['u_address'];
    $u_Phone_No=$_POST['u_donor_phone_no'];
    $u_Age=$_POST['u_donor_age'];
    $u_Blood_Group=$_POST['u_blood_grp'];
    $u_image=$_FILES['u_image']['name'];
    $image_tmp=$_FILES['u_image']['tmp_name'];
    
    move_uploaded_file($image_tmp,"../users/$u_image");
    
    $update="UPDATE `blood_donor` SET `pass`='$u_Pass',`name`='$u_D_Name',`age`='$u_Age',`address`='$u_Address',`blood_grp`='$u_Blood_Group',`phone_no`='$u_Phone_No',`reg_date`=NOW(),`image`='$u_image' WHERE `id`='$id' ";
    
    $run=mysqli_query($con,$update);
    
    if($run){
        echo"<script>alert('your profile update successfully!')</script>";
        echo"<script>window.open('blood_donor_profile_page.php','_self')</script>";
    }
    
}
?>