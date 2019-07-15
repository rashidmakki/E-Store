
<!--Modal Starts-->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog"     aria-labelledby="myModalLabel" aria-hidden="true"> 
    
     <div class="modal-dialog">       
          <div class="modal-content">          
              <div class="modal-header">             
                  <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">    &times;    </button>    
                       <h4 class="modal-title" id="myModalLabel">   LOGIN </h4>      
			  </div>         
                 <div class="modal-body">                  
                     <h6> Don't have an account? <a href="signup.php"> Register </a> <br> <br> 
                         <form method="POST" action="includes/login_submit.php">
                           
		         <div class="form-group">
		          <input type="email" name="email_id" id="email_id" class="form-control" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  >
                     </div>
		  
		             <div class="form-group">
		              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required=true" pattern=".{6,}">
                     </div>
                           <button type="submit" class="btn btn-primary">    Login </button> 
                           <br/>
                           <br/>
                           
                           <?php echo $_GET['error']; ?>
                           
			          </form>
                       <br> 
                    <a href="#"> Forgot Password ? </a>
                  </div>
          </div><!-- /.modal-content --> 
      </div><!-- /.modal -->
</div>
<!--Modal Close-->

<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
</button>

<a href="index.php" class="navbar-brand"> E- Store </a>
</div>

<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
    
     <?php 
    if(!isset($_SESSION['email_id'])) {
        ?>
<li> <a href="signup.php"><span class="glyphicon glyphicon-user"> </span> Sign Up </a> </li>
<li> <a href="#" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in"> </span> Login </a> </li>
<li> <a href="about.php"> <span class="glyphicon glyphicon-tasks"> </span> About Us</a> </li>
<li> <a href="contact.php"> <span class="glyphicon glyphicon-phone"> </span> Contact Us </a> </li>

<?php
    }
  else {
    ?>
<li> <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"> </span> Cart 

    
     <?php 
     
  include'common.php';
  $sum=0;
 $user_id=$_SESSION['user_id'];
$cart_select_query="SELECT  users_items.user_id FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' AND status='Added to cart'";
$cart_select_query_result=mysqli_query($con,$cart_select_query)
        or die(mysqli_error($con));

if (mysqli_num_rows($cart_select_query_result) >= 1) {
                            ?>
        
        
         <?php
                                while ($row = mysqli_fetch_array($cart_select_query_result)) {
                                    
                                    
                                    $sum++;
                                    
                                }
                                    echo "<span class='badge'>" . $sum." </span>";
                                    
                                
                                
                                
                                ?>
        
        
         <?php
  } ?>



</a> </li>
<li> <a href="settings.php"> <span class="glyphicon glyphicon-user"> </span> Settings</a> </li>
<li> <a href="includes/logout.php"> <span class="glyphicon glyphicon-log-out"> </span> Logout</a> </li>

<?php
  } ?>
</ul>
</div>

</div>
</nav>



