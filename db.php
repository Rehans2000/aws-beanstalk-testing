<?php
$username = "master";
$password = "Masterrds123";
$hostname = "dev-rds-a2z.cmiru3hmgmgq.eu-central-1.rds.amazonaws.com"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>
