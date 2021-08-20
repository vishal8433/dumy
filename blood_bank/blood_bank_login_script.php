<?php
session_start();
include("../includes/connection.php");

if(isset($_POST['login'])){
    $Email=mysqli_real_escape_string($con,$_POST['email']);
    $Password=mysqli_real_escape_string($con,$_POST['password']);
    
    $select_user="select * from blood_bank where email='$Email' AND pass='$Password' AND status='verified'";
    
    $query=mysqli_query($con,$select_user);
    $check=mysqli_num_rows($query);
    
    if($check==1){
        $_SESSION['email']=$Email;
        echo"<script>window.open('blood_bank_profile_page.php','_self')</script>";
    }
    else{
        echo"<script>alert('incorrect details,try again')</script>";
    }
}
?>