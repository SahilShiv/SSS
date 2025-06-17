<?php
date_default_timezone_set("Asia/Kolkata");
$name = $_GET["t1"];
$email = $_GET["t2"];
$phone = $_GET["t3"];
$course = $_GET["t4"];
$subject = "New Enquiry (Dummy Enquiry)";
$dt = date('d-m-Y');
$time = date('H:i');
$to = "shivalesahil7@gmail.com";

$body = "<table border=1><tr><th colspan=2>Enquiry</th></tr><tr><th>Date</th><td>$dt</td></tr><tr><th>Time</th><td>$time</td></tr><tr><th>Name</th><td>$name</td></tr><tr><th>Subject</th><td>$course</td></tr><tr><th>Email</th><td>$email</td></tr><tr><th>Contact no</th><td>$phone</td></tr></table>";

$headers="MIME-Version: 1.0" . "\r\n";
$headers.="Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.="From:Enquire@djportrk.com";


mail($to,$subject,$body,$headers);

header("refresh:5;home.html");
?>
