<?php
 include'includes/common.php';
 
 if(!isset($_SESSION['email_id']))
 {
     header('location:index.php');
 }
 
 ?>


<!DOCTYPE html>
<html>
<head>
<title> Cart | E - Store </title>
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
<?php include'includes/header.php'; ?>

<div id="content" class="container-fluid">


<div class="row">
<div class="col-md-6 col-md-offset-3">

<table class="table table-striped ">

     <?php 
  $sum=0;
 $user_id=$_SESSION['user_id'];
$cart_select_query="SELECT  items.name AS Name,items.price AS Price,items.id FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' AND status='Added to cart'";
$cart_select_query_result=mysqli_query($con,$cart_select_query)
        or die(mysqli_error($con));

if (mysqli_num_rows($cart_select_query_result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($cart_select_query_result)) {
                                    $sum+= $row["Price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='includes/cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
    
    
</table>
</div>
</div>


</div>



<?php include 'includes/footer.php'; ?>




</body>
</html>









