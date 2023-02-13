<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "Azhar$137";
 $db = "hijabreadytowear";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(!$conn){
    die("error" .mysqli_connect_error());
 }


?>