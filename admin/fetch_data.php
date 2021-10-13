<?php
 
require_once '../db.php';

if(isset($_POST['get_option']))
{
 $state = $_POST['get_option'];
 $s="select nametodisplay from pricelistcolumns_mapping where cat='$state'";
 $q = $connection->query($s);
 while($row=mysqli_fetch_array($q))
 {
  echo "<option>".$row['nametodisplay']."</option>";
 }
 exit;
} 
?>