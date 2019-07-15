<?php
require 'common.php';

$email_id=mysqli_real_escape_string($con,$_POST['email_id']);
$regex_email="/^[_a-z 0-9-]+(\.[_a-z 0-9-]+)*@[a-z 0-9-]+(\.[a-z]{2,3})$/";

$password=mysqli_real_escape_string($con,$_POST['password']);
$password=MD5($password);

$select_query="SELECT id,email_id FROM users WHERE email_id='" . $email_id . "'AND password='" . $password . "'";
$select_query_submit=mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_submit);

if($total_rows_fetched==0)
{
     $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location:includes/header.php?error=' . $error);
    
   
}

else{
    $row=mysqli_fetch_array($select_query_submit);
    $_SESSION['email_id']=$row['email_id'];
    $_SESSION['user_id']=$row['id'];
    
   
        header('location:../home.php');
  
    
}

