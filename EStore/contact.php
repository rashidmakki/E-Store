<?php
 include'includes/common.php';
 
 if (isset($_SESSION['email_id'])) {
    header('location:home.php');
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title> Welcome | E - Store </title>
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
<div class=" col-sm-8 col-xs-12">
<div class="caption rash5">
<h2 class="rash7"> LIVE SUPPORT </h2>
<h4 class="rash6"> 24 hours | 7 days a week | 365 days a year Live Technical Support </h4>


<p> It is a long established fact that a reader will be distracted by the readable content of the page when looking at its layout 
The point of using lorem Ipsum is that it has more-or-less distribution of the letters.There are many variations of passages of lorem Ipsum 
available ,but the majority have suffered alteration in some form,bt injected humour,or randomised words which don't look even slightly
believable.
</p>
</div>
</div>


<div class="  col-sm-3 col-sm-offset-1 col-xs-12" >
<img src="img/contact.png" class="img-responsive">
</div>

</div>

<div class="row">
<div class="col-lg-8" >
<form action="includes/contact_script.php" method="POST">
<h2> CONTACT US </h2>

<div class="form-group">
<label id="name"> NAME </label> 
<input type="text" name="name" id="name" class="form-control">
</div>

<div class="form-group">
<label id="email"> EMAIL </label> 
<input type="email" name="email_id" id="email_id" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
</div>

<div class="form-group">
<label id="message"> MESSAGE: </label> 
<input type="textarea" name="message" id="message" class="form-control rash8">
</div>

<button type="submit" class="btn btn-primary"> Submit </button>
</form>
</div>

<div class="col-lg-4 ">
<address class=" lead rash9"> <h3> Company Information : </h3>
500 lorem lpsum Dolor Sit, <br>
22-56-2-9 Sit Amet,Lorem, <br>
USA <br>
Phone: (00) 222 666 444 <br>
Fax:   (000) 000 00 0 <br>
Email: info@mycompany.com  <br>
Follow on: Twitter , Facebook
</address>


</div>

</div>



</div>
</div>



<?php include'includes/footer.php'; ?>



</body>
</html>







