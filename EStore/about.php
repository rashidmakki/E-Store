<?php
include 'includes/common.php';
if(isset($_SESSION['email_id'])){
    header('location:home.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<title> AboutUs | E - Store </title>
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

<?php include 'includes/header.php';
?>
<div id="content" class="container-fluid">
<div class="row">
<div class="container">

<div class="col-md-4 col-sm-12">
<div class="caption">
<h3> WHO WE ARE </h3>
<br>
<img src="img/about-img.jpg" class="img-responsive">
<br>
<p class="lead rash3 rash10">E-Store is  an american electronic commerce company with headquarters in Washington.It is the largest internet-based retailer in the United States. E-Store startes as an online blog ,but soon diversified,selling mobile phones.
E-Store also sells low-end products like USB cables and other accessories.E-Store has a separate retail websites for United States,
France , United Kindom & Ireland , Canada , Germany, Australia , Brazil  , Japan , China, India and Mexico. </p>
</div>
</div> 

<div class="col-md-4 col-sm-12">
<div class="caption">
<h3> OUR HISTORY </h3>
<br>
<h4 class="rash4"> 1998- </h4>
<p class="lead rash3 rash10"> The company was founded in 1998,spurred by what Velos called his "Initiating Framework",which is described hid efforts as an initiate to participate 
in international business boom during that time.In 1998,Velos left his employment as president of ofcol & Co. and moved to seattle .
He began to work on a business plan foe what would be eventually become E-Store.
</p>
<h4 class="rash4"> 2002- </h4>
<p class="lead rash10">
In January 2002,E-Store has received a funding of $12 million from Venture Partners and Indo-US Venture Partners. </p>
</p>
<h4 class="rash4"> 2005- </h4>
<p class="lead rash10">
In July 2008, the company raised a further $45 million from Bessemer Venture Partners,along with existing investors Venture Partners
and Indo-US Venture Partners.

</p>
</div>
</div>


<div class="col-md-4 col-sm-12">
<div class="caption">
<h3> OPPORTUNITIES </h3>
<br>

<h4><b> Available Roles </b></h4>
<ol class="number lead ">

<li>  <p class="rash3 rash10"> Jr./Sr. Web Developer [ Full Time Role + also available as a 6 months Internship] </p> </li>
<li> <p class="rash3 rash10"> Business apparentice [6 months Internship]</p></li>
<li> <p class="rash3 rash10"> Manager at backend operations [Full Time Role + also available as 6 months Internship]</p> </li>
</ul>

</div>
</div>




</div>
</div>
</div>

    
    <?php include'includes/footer.php'; ?>



</body>
</html>






