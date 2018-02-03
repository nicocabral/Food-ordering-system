<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/foods/logo.png" rel="shortcut icon">
    <title>FOOD ORDERING SYSTEM </title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">	
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->

       
<!--*********************************************START OF NAVIGATION BAR****************************************-->
<body>

<img src="images/foods/banner.jpg" class="img-responsive wow fadeInDown" width="100%;"/>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        
                        <li><a href="available.php">Availables</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                        <li>
                        <a data-toggle="modal" data-target="#loginModal" style="cursor:pointer;">Admin</a>
                       
                        </li>                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!--*********************************************START SLIDER************************************************-->

<div class="container-fluid">
    <br>
        <div class="col-md-9 wow fadeInDown">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color:#000; padding:10px;">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="images/slider/image4.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/slider/image5.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/slider/image6.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/slider/image8.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/slider/image13.jpg" alt="">
                </div>
              </div>
                              
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

<!--*********************************************Food PACKAGES************************************************-->
 
            
                <center><span style="color:#fff;">Nico Cabral</span></center>
                <div style="font-size:25px; font-family:verdana; font-weight:bold; color: #8B8B00; text-align:center;" class="wow fadeInDown">Our Service Packages</div>
                <p style="text-align:center; font-family:verdana;" class="wow fadeInDown"><br>Food Ordering System Services aim to provide excellent quality 
                service to client <br>ensuring customer satisfaction through a service with value and <br>
                personalization performed by a highly knowledgeable and experienced professional. <br>
                My concentration shall and always will be to assist the clients in achieving their <br>
                dream of a perfect food eating while maintaining my ideas and <br>integrity in the line of customer.</p>
            <hr style="border:dashed 0.01px; #000;">  
                
               
                <br><br>
            </div>

        <div class="col-md-3" >
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
            
              <div class="panel-heading" style="font-weight:bold; font-size:16px; color:#36648B;"><i class="glyphicon glyphicon-calendar"></i> <?php echo date('M d, Y');?></div>
            
            </div>
            <br><br>
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
              <div class="panel-heading" style="font-weight:bold; font-size:16px; color:#36648B;">Availables</div>
              <ul class="list-group">
               
                <li class="list-group-item">Single - <span style="color:#8B8B00; font-weight:bold;">Diet Burger w/ Drinks</span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                 <li class="list-group-item">Single & Double - <span style="color:#8B8B00; font-weight:bold;">Giant buger ala king w/ Fries</span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  <li class="list-group-item">12 Inches - <span style="color:#8B8B00; font-weight:bold;">Peperoni Pizza</span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                   <li class="list-group-item">Barkada Size - <span style="color:#8B8B00; font-weight:bold;">Peperoni Pizza Delux (Hawaian Available)</span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>

            
              </ul>
              <a href="available.php" class="btn btn-danger btn-sm pull-right"><i class="glyphicon glyphicon-eye-open"></i> View More</a>
            </div>
             <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size:16px; font-weight:bold; color: #36648B;">Our Location</div>
                </div>

                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/map.jpg" alt="">
                       
                            <div class="recent-work-inner">
                                <a class="preview" href="images/map.jpg" rel="prettyPhoto"><br><span class="btn btn-success btm-sm pull-right">Preview Map</span></a>
                            </div> 
                    </div>
                </div>  
        </div>

        
</div><!--/.container-->
<br><br>

<!--*************************************************** FOOTERS **********************************************-->
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                &copy; 2016 <a target="_blank" href="#" title="#">FoodOrderingSystem</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
 <!----loginModal----->
                   <?php include('loginModal.php');?>      
                     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>