


<?php

   $con = mysqli_connect('localhost','id21020777_india','Sam@123s','id21020777_chalo');

if (isset($_POST['sende'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $Gender = $_POST['Gender'];
   
    $request = "INSERT INTO  login_details (name,email,password,dob,phone,Gender)
                VALUES ('$name', '$email', '$password', '$dob', '$phone', '$Gender')";

    mysqli_query($con, $request);
   
   
} else {
    echo 'Try Again';
}


?>



