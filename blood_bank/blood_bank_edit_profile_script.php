<?php
if(isset($_POST['update'])){
    $u_B_B_Name=$_POST['u_b_b_name'];
    $u_Pass=$_POST['u_make_password'];
    $u_Address=$_POST['u_address'];
    $u_Phone_No=$_POST['u_b_b_phone_no'];
    $u_A_Positive=$_POST['u_a_positive'];
    $u_A_Negative=$_POST['u_a_negative'];
    $u_B_Positive=$_POST['u_b_positive'];
    $u_B_Negative=$_POST['u_b_negative'];
    $u_AB_Positive=$_POST['u_ab_positive'];
    $u_AB_Negative=$_POST['u_ab_negative'];
    $u_O_Positive=$_POST['u_o_positive'];
    $u_O_Negative=$_POST['u_O_negative'];
    $u_image=$_FILES['u_image']['name'];
    $image_tmp=$_FILES['u_image']['tmp_name'];
    
    move_uploaded_file($image_tmp,"../users/$u_image");
    
    $update="UPDATE `blood_bank` SET `pass`='$u_Pass',`name`='$u_B_B_Name',`address`='$u_Address',`phone_no`='$u_Phone_No',`a_positive`='$u_A_Positive',`a_negative`='$u_A_Negative',`b_positiveb`='$u_B_Positive',`b_negative`='$u_B_Negative',`ab_positive`='$u_AB_Positive',`ab_negative`='$u_AB_Negative',`o_positive`='$u_O_Positive',`o_negative`='$u_O_Negative',`reg_date`=NOW(),`image`='$u_image' WHERE `id`='$id' ";
    
    $run=mysqli_query($con,$update);
    
    if($run){
        echo"<script>alert('your profile update successfully!')</script>";
        echo"<script>window.open('blood_bank_profile_page.php','_self')</script>";
    }
    
}
?>