<?php
include "connect.php"
session_start();

if(isset($_POST['sub'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  
  $qury1="select* from user where 'username'= '$name' 'email'='$email' 'pass'='$pass'";
  $sql=mysqli_qury($conn,$qury1);
  if(mysqli_num_rows($sql)>0){
   $warning = "you have already registered"
  }
  else{
   $qry = "INSERT INTO 'user'('user_name','iser_mail','password') VALUES('$name',$email','$password')";
   mysqli_query($conn,$qry) or die ("connection failed");
     }
     ?>
