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
    <title>Events | J&Rcatering</title>
	
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

<img src="images/banner.png" class="img-responsive" />
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php"><img src="images/logos/logo.png" alt="logo"></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li class="active"><a href="events.php">Events</a></li>
                        <li><a href="cateringpackages.php">Service Packages</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                        <li>
                        <a data-toggle="modal" data-target=".bs-example-modal-sm" style="cursor:pointer;">Admin</a>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                <div class="modal-header">
                                <img src="images/banner2.png" class="img-responsive" />
                                </div>
                                <br>
                                    
                                <form class="form-horizontal" method="POST" action="adminlogin_process.php">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-4 control-label">Username*</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="name" name="username" placeholder="username here." onKeyPress="return isNotAlphanumeric(event)" required />
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="name" class="col-sm-4 control-label">Password*</label>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control" id="name" name="password" placeholder="password here." onKeyPress="return isNotAlphanumeric(event)" required>
                                            </div>
                                        </div> 
                                            <div class="modal-footer" style="padding-right:110px;">
                                                <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </li>                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!--*********************************************START SLIDER************************************************-->
<br>
<div class="container">
            <!--Upcoming Events-->
            <a href="" onClick="window.print();return false" class="btn btn-info pull-right hidden-print"><img src="images/ico/printer.ico" style="max-width: 24px; max-height: 24px;"> Print</a>
            <div class="col-md-12" style="background-color:#fff; border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px;">
                 <!--   Basic Table  -->
                <div class="panel panel-success" style="background-color:#fff;">
                    <div class="panel-heading anel-title text-center">
                        <b style="font-size:17px;">Upcoming Events</b>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Services</th>
                                        <th>Packages</th>
                                        <th>Address</th>
                                        <th>Date Reserved</th>
                                        <th>Date of Events</th>
                                    </tr>
                                </thead>
                                <?php
                                    include('includes/dbconn.php');
                                    $new = "new";
                                    $pending = "pending";
                                    $result = mysql_query("SELECT * FROM tbl_customer WHERE status='$pending' OR status='$new' ORDER by event_date DESC");
                                    
                                    while ($row = mysql_fetch_assoc($result)) { 
                                      
                                    ?>
                                    <tr>
                                        <td><?php echo $row['customer_id'];?></td>
                                        <td><?php echo $row['cus_name'];?></td>
                                        <td><?php echo $row['servicetype'];?></td>
                                        <td><?php echo $row['package_type'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['date_reserve'];?></td>
                                        <td><?php echo $row['event_date'];?></td>
                                    </tr>
                                                                               
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
                  <!-- End  Basic Table  -->
            </div>

            <!--Previous Events-->
            <div class="col-md-12" style="background-color:#fff; border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px;">
                 <!--   Basic Table  -->
                <div class="panel panel-danger" style="background-color:#fff;">
                    <div class="panel-heading anel-title text-center">
                        <b style="font-size:17px;">Previous Events</b>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Services</th>
                                        <th>Packages</th>
                                        <th>Address</th>
                                        <th>Date Reserved</th>
                                        <th>Date of Events</th>
                                    </tr>
                                </thead>
                                   <?php
                                    include('includes/dbconn.php');
                                    $completed = "completed";

                                    $result = mysql_query("SELECT * FROM tbl_customer WHERE status='$completed' ORDER by event_date DESC");
                                    
                                    while ($row = mysql_fetch_assoc($result)) { 
                                      
                                    ?>
                                    <tr>
                                        <td><?php echo $row['customer_id'];?></td>
                                        <td><?php echo $row['cus_name'];?></td>
                                        <td><?php echo $row['servicetype'];?></td>
                                        <td><?php echo $row['package_type'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['date_reserve'];?></td>
                                        <td><?php echo $row['event_date'];?></td>
                                    </tr>
                                                                               
                                    <?php } ?>
                    
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
                  <!-- End  Basic Table  -->

            </div>

</div><!--/.container-->
<br><br>

<!--*************************************************** FOOTERS **********************************************-->
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                &copy; 2015 <a target="_blank" href="#" title="#">J&RCateringServices</a>. All Rights Reserved.
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