<?php

$email=$_POST["email"];


$password=$_POST["password"];

   $con = mysqli_connect('localhost','id21020777_india','Sam@123s','id21020777_chalo');


$sql="Update login_details set password='$password' where email='$email'";

if (mysqli_query($con,$sql))
{

    header("refresh:2; home.html");
}
else
{
	echo "Unable to update user password";

}


?>