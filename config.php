<?php

$server="localhost";
$username="root";
$password="";
$db="my_personal_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection established successfully
}

else{
  die("Falied connecting to the database due to" .mysqli_connect_error());
}

?>