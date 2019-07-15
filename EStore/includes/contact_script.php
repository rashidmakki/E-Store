

<?php

require'common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email_id=mysqli_real_escape_string($con,$_POST['email_id']);
$message=mysqli_real_escape_string($con,$_POST['message']);





    
    $query = "INSERT INTO feedback(name,email_id,message)VALUES('" . $name . "','" . $email_id. "','" . $message . "')";
    $query_result=mysqli_query($con, $query) or die(mysqli_error($con));
   
    if(isset($_SESSION['email_id'])){
        
    header('location:../home.php');
    }
   
    else{
        header('location:../contact.php');
    }
?>