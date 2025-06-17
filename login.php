<?php
$email=$_POST["email"];
$password=$_POST["password"];


    $con = mysqli_connect('localhost','id21020777_india','Sam@123s','id21020777_chalo');
$sql="SELECT * FROM `login_details` WHERE email='$email' AND password='$password'";

$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($result))
{
header("Location: home.html");
}
else
{
header("Location:login.html");
}
?>