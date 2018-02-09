<?php

// Question 5

$HostName = "hostname.com";
$UserName="username";
$Shibboleth = "p@$$w3rd";
$DBName = "Secondary";;

$con= mysqli_connect($HostName,$UserName,$Shibboleth,$DBName);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$qry ="SELECT TABLE_NAME FROM information_schema.tables;";
$result = mysqli_query($con,$qry) or die(mysql_error());
while($row = mysqli_fetch_array($result))
  {
  print $row['TABLE_NAME'] ."\n";
  }
mysqli_close($con);
?>
