<?php
session_start();
include("../includes/connection.php");

if(isset($_POST['admin'])){
    $Email=mysqli_real_escape_string($con,$_POST['admin_email']);
    $Password=mysqli_real_escape_string($con,$_POST['admin_password']);
    
    $select_user="select * from admin where email='$Email' AND password='$Password' ";
    
    $query=mysqli_query($con,$select_user);
    $check=mysqli_num_rows($query);
    
    if($check==1){
        $_SESSION['email']=$Email;
        echo"<script>window.open('admin_home.php','_self')</script>";
    }
    else{
        echo"<script>alert('incorrect details,try again')</script>";
    }
}
?>