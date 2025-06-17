<?php

   $con = mysqli_connect('localhost','id21020777_india','Sam@123s','id21020777_chalo');

if (isset($_POST['sender'])) {
    $email = $_POST['email'];
    $Where = $_POST['Where_D'];
    $To = $_POST['To_D'];
    $arriving = $_POST['arriving'];
    $people = $_POST['people'];
    $depart = $_POST['depart'];


    $request = "INSERT INTO  booking_details (email, Where_D, To_D, arriving, people, depart)
                VALUES ('$email', '$Where', '$To', '$arriving', '$people', '$depart')";

    mysqli_query($con, $request);
   
    header('Location: home.html');
} else {
    echo 'Try Again';
}


?>
