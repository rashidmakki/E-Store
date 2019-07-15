<?php 
 include'includes/common.php'; 
if(isset($_SESSION['email_id']))
{
    header('location:home.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Signup | E - Store </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet"  type="text/css" href="css/style.css">
</head>

<body style="padding-top:80px;">

<?php include'includes/header.php'; ?>
    
<div id="content" class="container-fluid">

<div class="container">

<div class="row">
<div class=" col-lg-6 col-md-6 ">
<img src="img/yess.jpg" class="img-responsive">
</div>


<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2">
<h1> SIGN UP </h1>
<form method="POST" action="includes/signup_script.php" >
<div class="form-group">
<input type="text" name="name" placeholder="Name" id="name" class="form-control" required="true">
</div>

<div class="form-group">
<input type="email" name="email_id" id="email_id" placeholder="Email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
<?php echo $_GET['m1']; ?>
</div>

<div class="form-group">
<input type="password" name="password" placeholder="Password" id="password" class="form-control" required="true" pattern=".{6,}">
<?php echo $_GET['m2']; ?>
</div>

<div class="form-group">
<input type="number" name="contact" id="contact" placeholder="Contact" size="10" maxlength="10" class="form-control" required="true">
</div>

<div class="form-group">
<input type="text" name="city" placeholder="City" id="city" class="form-control" required="true">
</div>

<div class="form-group">
<input type="text" name="address" placeholder="Address" id="address" class="form-control" required="true">
</div>

<button type="submit" class="btn btn-primary button12"> Submit </button> 
</form>

</div>

</div>



</div>
</div>


<?php include'includes/footer.php' ; ?>



</body>
</html>
