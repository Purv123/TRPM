<?php
  require_once '../db.php';

    $to = "support@riskkarama.com";
    $date = date("d-m-Y");
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    mysqli_query($connection, "INSERT INTO contact (`date`, `name`, `email`, `subject`, `message`) VALUES ('$date', '$from_name','$from_email','$subject', '$message')");
    
    // More headers
    $headers .= 'From: '. $from_email . "\r\n";
    $headers .= 'Cc: contact@riskkarma.com' . "\r\n";
    $headers .= 'Reply-To: '. $from_email . "\r\n";
    
    // echo($to.$subject.$message.$headers);
    mail($to,$subject,$message,$headers);

    header('location: ../index.php');

?>
