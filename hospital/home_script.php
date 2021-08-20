<?php
session_start();
include("../includes/connection.php");
$user = $_SESSION['email'];
$get_user="select * from hospital where email='$user'";
$run_user=mysqli_query($con,$get_user);
$row=mysqli_fetch_array($run_user);

$id=$row['id'];
$Hospital_Name=$row['hospital_name'];
$Password=$row['pass'];
$Hospital_Type=$row['type_of_hospital'];
$Address=$row['hospital_address'];
$Country=$row['country'];
$State=$row['state'];
$District=$row['district'];
$Hospital_Phone_No=$row['h_phone_no'];
$Emergency=$row['emergency'];
$bed=$row['bed'];
$ICU=$row['icu'];
$Ventilator=$row['ventilator'];
$Oxygen=$row['oxygen'];
$Ambulance_Availability=$row['ambulance_availability'];
$Ambulance_Phone_No=$row['amubulance_phone_no'];
$Male_Doctor=$row['male_doctor'];
$Female_Doctor=$row['female_doctor'];
$Image=$row['image'];
?>