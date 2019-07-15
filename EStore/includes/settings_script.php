<?php

include 'common.php';

if(!isset($_SESSION['email_id']))
{
    header('location:../index.php');
    
}

$old_password=mysqli_real_escape_string($con,$_POST['old_password']);
$old_password=MD5($old_password);

$new_password=mysqli_real_escape_string($con,$_POST['new_password']);
$new_password=MD5($new_password);

$retype_new_password=mysqli_real_escape_string($con,$_POST['retype_new_password']);
$retype_new_password=MD5($retype_new_password);

if(strlen($new_password<6))
{
    echo "Password should have atleast 6 characters";
}

    $select_query="SELECT email_id, password FROM users WHERE email_id='" . $_SESSION['email_id'] . "'";
    $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    
$row = mysqli_fetch_array($select_query_result);
$orig_pass = $row['new_password'];

if ($new_password != $retype_new_password) {
    header('location:../settings.php?error=The two passwords don\'t match');
} else {
    if ($old_password != $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_password . "' WHERE email_id = '" . $_SESSION['email_id'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location:../settings.php?error=Password Updated');
    } else
        header('location:../settings.php?error=Wrong Old Password');
}

?>