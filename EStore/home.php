
<?php

 include'includes/common.php';

 
 ?>


<!DOCTYPE html>
<html>
<head>
<title> Home | E - Store </title>
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


   <?php 
         include 'includes/header.php' ;
         
         include 'includes/check-if-added.php';
   ?>
    
<div id="content" class="container-fluid">


<div class="row" id="mobile">
<div class="col-md-4 col-sm-6" >
<div class="panel panel-default">
<div class="panel-heading">
<h4>Xiaomi-Mi</h4>
</div>
<div class="panel-body">
<img src="img/mobile.jpg" alt="this is an image" class="img-responsive rash1">
<div class="caption">
<p> 4.2'Screen, Snap-dragon processor, 1GB RAM, 4GB Internal Memory, Rs 9000.</p>



  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(1)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>

</div>
</div>


<div class="col-md-4 col-sm-6" >
<div class="panel panel-default">
<div class="panel-heading">
<h4>LG</h4>
</div>
<div class="panel-body">
<img src="img/mobile1.webp" class="img-responsive rash1 ">
<div class="caption">
<p> 5.5'Screen, Snap-dragon processor, 3GB RAM, 32GB Internal Memory, Rs 10000.</p>


  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(2)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>

</div>
</div>


<div class="col-md-4 col-sm-6">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Nokia</h4>
</div>
<div class="panel-body">
<img src="img/mobile2.webp" class="img-responsive rash1 ">
<div class="caption">
<p> 6.4'Screen, Snap-dragon processor, 4GB RAM, 64GB Internal Memory, Rs 15000.</p>


  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(3)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>

</div>
</div>

<div class="col-md-4 col-sm-6" >
<div class="panel panel-default">
<div class="panel-heading">
<h4>Apple</h4>
</div>
<div class="panel-body">
<img src="img/mobile3.jpg" alt="this is an image" class="img-responsive rash1 ">
<div class="caption">
<p> 6.6Screen, Snap-dragon processor, 6GB RAM, 128GB Internal Memory, Rs 70000.</p>


  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(4)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>

</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Samsung</h4>
</div>
<div class="panel-body">
<img src="img/mobile4.jpg" class="img-responsive rash1 ">
<div class="caption">
<p> 6.6'Screen, Snap-dragon processor, 6GB RAM, 128GB Internal Memory, Rs 55000.</p>


  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(5)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>

</div>
</div>


<div class=" col-md-4 col-sm-6">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Sony</h4>
</div>
<div class="panel-body">
<img src="img/mobile5.jpg" class="img-responsive rash1 ">
<div class="caption">
<p> 6.3'Screen, Snap-dragon processor, 4GB RAM, 64GB Internal Memory, Rs 18000.</p>


  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(6)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>


</div>
</div>

</div>

</div>






<div class="col-md-4 col-sm-6" >
<div class="panel panel-default">
<div class="panel-heading">
<h4>Apple X</h4>
</div>
<div class="panel-body">
<img src="img/apple.jpg" alt="this is an image" class="img-responsive rash1 ">
<div class="caption">
<p> 6.6Screen, Snap-dragon processor, 6GB RAM, 128GB Internal Memory, Rs 70000.</p>


  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(7)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>



</div>
</div>

</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Samsung Galaxy</h4>
</div>
<div class="panel-body">
<img src="img/tab.jpg" class="img-responsive rash1 ">
<div class="caption">
<p> 6.6'Screen, Snap-dragon processor, 6GB RAM, 128GB Internal Memory, Rs 55000.</p>


  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(8)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>


</div>
</div>

</div>
</div>


<div class=" col-md-4 col-sm-6">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Sony Xperia</h4>
</div>
<div class="panel-body">
<img src="img/mobile2.jpg" class="img-responsive rash1 ">
<div class="caption">
<p> 6.3'Screen, Snap-dragon processor, 4GB RAM, 64GB Internal Memory, Rs 18000.</p>



  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(9)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>

</div>
</div>
</div>







</div>





</body>
</html>

