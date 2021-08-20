<?php
session_start();
include("../includes/connection.php");
$user = $_SESSION['email'];
$get_user="select * from blood_bank where email='$user'";
$run_user=mysqli_query($con,$get_user);
$row=mysqli_fetch_array($run_user);

$id=$row['id'];
$B_Name=$row['name'];
$Password=$row['pass'];
$Address=$row['address'];
$Country=$row['country'];
$State=$row['state'];
$District=$row['district'];
$B_Phone_No=$row['phone_no'];
$A_Positive=$row['a_positive'];
$A_Negative=$row['a_negative'];
$B_Positive=$row['b_positiveb'];
$B_Negative=$row['b_negative'];
$AB_Positive=$row['ab_positive'];
$AB_Negative=$row['ab_negative'];
$O_Positive=$row['o_positive'];
$O_Negative=$row['o_negative'];
$Image=$row['image'];
?>