<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../images/foods/logo.png" rel="shortcut icon">
    <title>ADMIN| FOOD ORDERING SYSTEM</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
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
                        <li class="dropdown"><a class="dropdown-toggle wow fadeInDown" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Service Settings<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="FBW.php"> Availables </a></li>
                              <li><a href="CCP.php"> Update Availables </a></li>
                            </ul>
                        </li>
                        <li id="reservation" class="active wow fadeInDown"><a href="index.php"><span class="glyphicon glyphicon-th"></span> Orders</a></li>
                        <li id="admin" class="wow fadeInDown"><a href="adminacc.php"><span class="glyphicon glyphicon-user"></span> Admin Account</a></li>
                        <li id="logout" class="wow fadeInDown"><a id="logoutbtn" href='<?php echo "logout_process.php?logout=1"?>'><span class="glyphicon glyphicon-share"></span> Logout</a></li>                  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
<br>

<div class="container">
   <form id="formFilter" name="formFilter" action="admin_reservefilter.php" method="POST" class="pull-left col-md-7 hidden-print">
        
        <div class="form-horizontal wow fadeInDown">            
                <label for="filter" class="control-label">  <i class="glyphicon glyphicon-filter"></i> VIEW RECORDS</label>
            <div class="col-md-6">  
                 
                <select name="filter" id="filter" class="form-control">
                    <option value="New">New</option>
                    <option value="pending">Pending</option>
                    <option value="rejected">Cancel</option>
                    <option value="completed">Completed</option>
                </select>
               
            </div>
        </div>
    </form>

    <a href="" onClick="window.print();return false" class="btn btn-info pull-right hidden-print wow fadeInDown"><img src="images/ico/printer.ico" style="max-width: 24px; max-height: 24px;"> Print</a>
    <a href="index.php" class="btn btn-default pull-right hidden-print wow fadeInDown" style="margin-right:10px;"><img src="images/ico/refresh.png" style="max-width: 24px; max-height: 24px;"> Refresh</a>
    <div class="col-md-12" style="border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px;">
   
        <table class="table table-hover table-condensed wow fadeInDown">
            <thead style="background-color:#282828; color:#fff;">
                <tr>
                    <th class="hidden-print" style="text-align:center;"> <span class="glyphicon glyphicon-exclamation-sign"></span> Status</th>
                    <th width="120px" style="text-align:center;"><span class="glyphicon glyphicon-user"></span> From </th>
                    <th style="text-align:center;"><span class="glyphicon glyphicon-gift"></span>  Available (Foods) </th>
                    <th style="text-align:center;"><span class="glyphicon glyphicon-tags"></span>  Address </th>
                    <th style="text-align:center;"><span class="glyphicon glyphicon-phone"></span>  Contact </th>
                    <th style="text-align:center;"><span class="glyphicon glyphicon-time"></span> Time</th>
                    
                </tr>
            </thead>
            <tbody id="tablebody">
               <?php include('includes/dbconn.php');
			   $stat = 'new';
               $total = 0;
			   $query = mysql_query("SELECT foods.id as fdid,foods.name,foods.image,foods.size,foods.prize, foodsorder.* FROM foodsorder  LEFT JOIN foods ON foodsorder.foodid = foods.id
											 WHERE foodsorder.status='$stat'  ORDER BY timestamp DESC LIMIT 0,30") or die (mysql_error());
				if(mysql_num_rows($query)>0){
					while($row = mysql_fetch_assoc($query)){
                        $total = $row['prize']*$row['qty'];?>
               <tr class="success" style="cursor:pointer;">
               		<td style="text-align:center;"><a href="#viewModal<?php echo $row['id']?>" data-toggle="modal" data-target="#viewModal<?php echo $row['id']?>" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> View</a></td>
                <td style="text-align:center;"><?php echo $row['ordername'];?></td>
                <td style="text-align:center;"><?php echo $row['name'];?></td>
                <td style="text-align:center;"><?php echo $row['address'];?></td>
                <td style="text-align:center;"><?php echo $row['contact'];?></td>
                <td style="text-align:center;"><?php echo $row['timestamp'];?></td>
               
               
               </tr>
               <!-- Modal -->
<div class="modal fade" id="viewModal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-exclamation-sign"></i> ORDER INFORMATION</h4>
      </div>
      <form method="post" action="">
      <div class="modal-body">
      <input type="hidden" name="fdid" value="<?php echo $row['id']?>">
    
        <dl class="dl-horizontal wow fadeInDown" style="text-align:left">
        	
            <dt>Food Name:</dt> <dd><?php echo $row['name'].' ';?><img src="<?php echo $row['image']?>" width="90px;" class="img-responsive img-rounded"></dd>
            <dt>Size:</dt> <dd><?php echo $row['size'];?></dd>
            <dt>Prize:</dt> <dd><?php echo 'P '.$row['prize'];?></dd>
            <dt>Qty:</dt> <dd><?php echo $row['qty'];?></dd>
            <dt>Total:</dt> <dd><?php echo 'P '.$total;?></dd>
            <hr style="border-top: 1px dashed #8c8b8b;
	border-bottom: 1px dashed #fff;">
            <dt>Delivered to:</dt> <dd><?php echo $row['ordername'].' ';?><img src="<?php echo $row['photo'];?>" width="100px;" class="img-responsive img-rounded" title="Customer Photo"></dd>
            <dt>Address:</dt> <dd><?php echo $row['address'];?></dd>
            <dt>Contact:</dt> <dd><?php echo $row['contact'];?></dd>
            <dt>Date Order:</dt> <dd><?php echo $row['timestamp'];?></dd>
            <dt>Status:</dt> <dd><?php echo $row['status'];?></dd>
        </dl>
  
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-default wow fadeInDown" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger wow fadeInDown" name="cancel"><i class="glyphicon glyphicon-ban-circle"></i> Cancel</button>
        <button type="submit" class="btn btn-success wow fadeInDown" name="deliver"><i class="glyphicon glyphicon-send"></i> Delivered</button>
      </div>
      </form>
    </div>
  </div>
</div>
               <?php }}?>
            </tbody>
        </table>
       
    </div>
</div>
 
 <!-------------------------------------------------------OPEN MODAL MESSAGE---------------------------------------------------------------->
       <?php include('includes/dbconn.php');
	   if(isset($_POST['deliver'])){
		   $id = $_POST['fdid'];
		   $sql = mysql_query("UPDATE foodsorder set status = 'Completed' WHERE id = '$id'") or die (mysql_error());
		   if($sql==true){
			   header("location:index.php");}
		   
		   }
		 else if(isset($_POST['cancel'])){
			 $id = $_POST['fdid'];
			 $sql = mysql_query("UPDATE foodsorder set status = 'rejected' WHERE id = '$id'") or die (mysql_error());
			 if($sql == true){
				 header("location:index.php");}
			 }
		   ?>
       
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

<script type="text/javascript">
    $('#filter').change(function() {
    $.post( $("#formFilter").attr("action"),
                 $("#formFilter :input").serializeArray(),
                 function(filter) { 
                    //alert (filter);
                    $("#tablebody").empty();
                    $("#tablebody").html(filter);
                 });    
        $("#formFilter").change( function() {
           return false;    
        });
    });

</script>

    
</body>
</html>