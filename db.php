<?php
session_start();

error_reporting(0);
session_cache_limiter('none');
header('Cache-control: max-age='.(60*60*24*7)); //one week
header('Expires: '.gmdate(DATE_RFC1123,time()+60*60*24*365)); //one week


 $Server = "localhost";
 $Username = "root";
 $PW = "";
 $DB = "tprm";
 $connection = mysqli_connect($Server, $Username, $PW, $DB);

 if($connection == false) {
     die("Error: " . mysqli_error_connect());
 }  

 ?>