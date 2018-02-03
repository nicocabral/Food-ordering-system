<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/foods/logo.png" rel="shortcut icon">
    <title>Admin | FOOD ORDERING SYSTEM</title>
    
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
<body>
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
    
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a class="dropdown-toggle wow fadeInDown" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th"></span> Service Settings<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="FBW.php"> Availables </a></li>
                              <li><a href="CCP.php"> Update Availables </a></li>
                            </ul>
                        </li>
                        <li id="reservation" class="wow fadeInDown"><a href="index.php"><span class="glyphicon glyphicon-calendar"></span> Order</a></li>
                        <li id="admin" class="active wow fadeInDown"><a href="adminacc.php"><span class="glyphicon glyphicon-user"></span> Admin Accounts</a></li>
                        <li id="logout" class="wow fadeInDown"><a id="logoutbtn" href='<?php echo "logout_process.php?logout=1"?>'><span class="glyphicon glyphicon-share"></span> Logout</a></li>                  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        <br>
     
<div class="container wow fadeInDown">
    <div class="row">
        </div>
        <div class="col-md-6" style="border: solid #CFCFCF 2px; border-radius: 10px;">
        <div class="alert alert-success" id="infomsg" style="text-align: center"></div> 
        <center><img src="images/ico/admin.png" class="img-responsive wow fadeInDown" style="height:200px;" /></center>
        <div>
            <?php
                session_start();
                include('includes/dbconn.php');
                $id = $_SESSION['proprietor_id'];
                $result = mysql_query("SELECT * FROM userinfo WHERE id='$id'");
                while ($row = mysql_fetch_array($result))
                    {
                        $name = $row['name'];
                        $address = $row['address'];
                        $phone = $row['contact'];
						$dob = $row['dob'];
						$phone = $row['contact'];
                        $username = $row['username'];
                        $password = $row['password'];
						$utype = $row['utype'];
                    }
                ?>
            
        <h3 style="text-align:center; font-weight:bold;" class="wow fadeInDown">Admin Account Information</h3>
        <hr>
            <dl class="dl-horizontal wow fadeInDown" style="text-align:left">
                <dt>Admin Name</dt><dd><?php echo @$name ?></dd>
                <dt>Address</dt><dd><?php echo @$address ?></dd>
                <dt>Phone#</dt><dd><?php echo @$phone ?></dd>
                 <dt>Birthday</dt><dd><?php 
				 $date  = new DateTime($dob);
				 echo @$date->format('M d, Y'); ?></dd>
                <dt>Username</dt><dd><?php echo @$username ?></dd>
                <dt>Password</dt><dd><?php echo '********'; ?></dd>
              
            </dl>
        <hr>
        </div>  
             <form class="form-horizontal" name="adminacc" id="adminacc" method="POST" action="adminacc_process.php" style="margin-top: 20px;">
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label wow fadeInDown">Admin Name</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="name" name="proprietor_name" value="<?php echo $name?>" placeholder="New name here." required>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Address</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="Address" name="address" value="<?php echo $address;?>"placeholder="New address here." required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Phone</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="Phone" name="phone"value="<?php echo $phone?>"  placeholder="New phone# here."required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Birthday</label>
                    <div class="col-sm-6">
                    <input type="date" class="form-control wow fadeInDown" id="date" name="date" value="<?php echo $dob?>" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Username</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="username" name="nusername" placeholder="New username here." required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="npassword" class="col-sm-4 control-label wow fadeInDown">Password</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="npassword" name="npassword" placeholder="New password here." required>
                    </div>
                </div> 
                 <div class="form-group">
                    <label for="npassword" class="col-sm-4 control-label wow fadeInDown">Type</label>
                    <div class="col-sm-6">
                   <select name="type" class="form-control wow fadeInDown">
                 
                   <option>Select</option>
                   <option></option>
                   <option value="Admin">Admin</option></select>
                    </div>
                </div>                
                
                <hr>
                <div class="form-group">
                    <input type="submit" id="submit" name="save" class="btn btn-info col-md-4 col-xs-offset-2 wow fadeInDown" value="Save" style="margin-right: 10px;">
                    <input type="submit" class="btn btn-success col-md-4 wow fadeInDown" name="update" value="Update">
                </div>
              </form>  
              </div>
        </div>
   
</div>

<script>
    $("#page").removeClass();
    $("#messages").removeClass();
    $("#admin").addClass("active");
    
    $("#infomsg").hide();
    
    $('#submit').click( function() {
          $.post( $("#adminacc").attr("action"),
                 $("#adminacc :input").serializeArray(),
                 function(info) { 
                   $("#infomsg").show();
                   $("#infomsg").empty();
                   $("#infomsg").html(info);
                 });    
        $("#adminacc").submit( function() {
           return false;    
        });
    });

</script>

<br><br><br>
<!--*************************************************** FOOTERS **********************************************-->
  
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <center>&copy; 2016 FoodOrderingSystem. All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

</script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>