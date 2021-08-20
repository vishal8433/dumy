<?php
include("../includes/connection.php");
if(isset($_GET['id'])){
    $Post_Id=$_GET['id'];
    $user="DELETE FROM `doctor_list` WHERE `post_id`='$Post_Id'";
    $query=mysqli_query($con,$user);
    if($query){
         echo"<script>alert('Doctor Information Deleted Successfully!')</script>";
        echo"<script>window.open('doctor_list.php','_self')</script>";
    }
    else{
        echo"<script>alert('something error!')</script>";
    }
}
?>