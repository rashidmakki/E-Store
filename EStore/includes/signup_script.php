<?php

require'common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email_id=mysqli_real_escape_string($con,$_POST['email_id']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password=MD5($password);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);

$regex_email="/^[_a-z 0-9-]+(\.[_a-z 0-9-]+)*@[a-z 0-9-]+(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";


if(strlen($password<6))
{
    header('location:../signup.php?password_error=enter correct password');
}


$select_query="SELECT * FROM users WHERE email_id='$email_id'";
$select_query_submit=mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_submit);
if($total_rows_fetched!=0)
 {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location:../signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email_id)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location:../signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location:../signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO users(name, email_id, password, contact, city, address)VALUES('" . $name . "','" . $email_id. "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email_id'] = $email_id;
    $_SESSION['user_id'] = $user_id;
    header('location:../home.php');
  }
   
?>