<?php
include("../includes/connection.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $vj="DELETE FROM `blood_bank` WHERE `id`='$id'";
    $query=mysqli_query($con,$vj);
    if($query){
        echo"<script>alert('Account Delete successfully!')</script>";
        echo"<script>window.open('admin_blood_bank.php','_self')</script>";
    }
    else{
       echo"<script>alert('some error occured!')</script>";
    }
}
?>