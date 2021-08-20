<?php
session_start();
include("../includes/connection.php");
$user = $_SESSION['email'];
$get_user="select * from blood_donor where email='$user'";
$run_user=mysqli_query($con,$get_user);
$row=mysqli_fetch_array($run_user);

$id=$row['id'];
$D_Name=$row['name'];
$Age=$row['age'];
$Password=$row['pass'];
$Address=$row['address'];
$Country=$row['country'];
$State=$row['state'];
$District=$row['district'];
$D_Phone_No=$row['phone_no'];
$Blood_Group=$row['blood_grp'];
$Image=$row['image'];
$desease=$row['any_desease'];
?>