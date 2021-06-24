<?php
require_once '../db.php';

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = '';
  
    // $to = $receiving_email_address;
    $date = date("d-m-Y");
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    mysqli_query($connection, "INSERT INTO contact (`date`, `name`, `email`, `subject`, `message`) VALUES ('$date', '$from_name','$from_email','$subject', '$message')");

    header('location: ../index.php');

    // $headers = 'From: websitesupport@vpautomobiles.com' . "\r\n" .
    //     'Reply-To: websitesupport@vpautomobiles.com' . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();

    // if(mail($to, $subject, $message, $headers)){
    //     die("OK");
    // }
    
?>
