
<?php
 include'includes/common.php';
 
 if(!isset($_SESSION['email_id']))
 {
     header('location:index.php');
 }
 
 $user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
 
 ?>

<!DOCTYPE html>
<html>
<head>
<title> Success | E - Store </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript">
</script>
<script src="js/bootstrap.min.js" type="text/javascript">
</script>

<link rel="stylesheet"  type="text/css" href="css/style.css">
</head>

<body style="padding-top:80px;">

<?php include 'includes/header.php'; ?>
    
<div id="content" class="container-fluid">

<div class="row text-center">
<div class="col-md-6 col-md-offset-3" >


<h4> Thank you for ordering from E-Store.The order shall be delivered to you shortly. </h4> <hr>
<p class="lead">Order some more electronic items <a href="home.php"> here. </a>




</div>
</div>
</div>



<?php include'includes/footer.php'; ?>



</body>
</html>