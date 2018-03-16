<?php
$host="localhost";
$user="root";
$password="password"
$db="sell"

$mysqli=new mysqli($host,$user,$password,$db);
if($mysqli->connect_errno){
   echo"Error ocured in connecton";
}
