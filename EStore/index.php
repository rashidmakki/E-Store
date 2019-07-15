
<?php include'includes/common.php'; 
if(isset($_SESSION['email_id'])){
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

<?php include 'includes/header.php'; ?>

<div class="container-fluid" id="content">
<div class="row" id="mobile">
<div class="col-md-4 col-sm-6 home-feature" >
<div class="panel panel-default">
<div class="panel-heading">
<h4>Xiaomi-Mi</h4>
</div>
<div class="panel-body">
<img src="img/mobile.jpg" alt="this is an image" class="img-responsive rash1">
<div class="caption">
<p> 4.2'Screen, Snap-dragon processor, 1GB RAM, 4GB Internal Memory, Rs 9000.</p>
<button type="button" class="btn btn-primary btn-block"> Order Now </button>
</div>
</div>

</div>
</div>


<div class="col-md-4 col-sm-6 home-feature" >
<div class="panel panel-default">
<div class="panel-heading">
<h4>LG</h4>
</div>
<div class="panel-body">
<img src="img/mobile1.webp" class="img-responsive rash1">
<div class="caption">
<p> 5.5'Screen, Snap-dragon processor, 3GB RAM, 32GB Internal Memory, Rs 10000.</p>
<button type="button" class="btn btn-primary btn-block"> Order Now </button>
</div>
</div>

</div>
</div>


<div class="col-md-4 col-sm-6 home-feature">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Nokia</h4>
</div>
<div class="panel-body">
<img src="img/mobile2.webp" class="img-responsive rash1">
<div class="caption">
<p> 6.4'Screen, Snap-dragon processor, 4GB RAM, 64GB Internal Memory, Rs 15000.</p>
<button type="button" class="btn btn-primary btn-block"> Order Now </button>
</div>
</div>

</div>

</div>


<div class="col-md-4 col-sm-6 home-feature" >
<div class="panel panel-default">
<div class="panel-heading">
<h4>Apple</h4>
</div>
<div class="panel-body">
<img src="img/mobile3.jpg" alt="this is an image" class="img-responsive rash1">
<div class="caption">
<p> 6.6Screen, Snap-dragon processor, 6GB RAM, 128GB Internal Memory, Rs 70000.</p>
<button type="button" class="btn btn-primary btn-block"> Order Now </button>
</div>
</div>

</div>
</div>


<div class="col-md-4 col-sm-6 home-feature">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Samsung</h4>
</div>
<div class="panel-body">
<img src="img/mobile4.jpg" class="img-responsive rash1 ">
<div class="caption">
<p> 6.6'Screen, Snap-dragon processor, 6GB RAM, 128GB Internal Memory, Rs 55000.</p>
<button type="button" class="btn btn-primary btn-block"> Order Now </button>
</div>
</div>

</div>
</div>


<div class=" col-md-4 col-sm-6 home-feature">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Sony</h4>
</div>
<div class="panel-body">
<img src="img/mobile5.jpg" class="img-responsive rash1 ">
<div class="caption">
<p> 6.3'Screen, Snap-dragon processor, 4GB RAM, 64GB Internal Memory, Rs 18000.</p>
<button type="button" class="btn btn-primary btn-block"> Order Now </button>
</div>
</div>

</div>
</div>
</div>


<hr>
</div>


<?php include'includes/footer.php'; ?>




</body>
</html>