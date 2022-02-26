<?php 
    $to = "dzikry.ma.ha@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $name . " - " . $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $from . "\r\n";

    mail($to,$subject,$message,$headers);

    header('Location: index.html');
    exit;
?>