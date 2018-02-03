
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/foods/logo.png" rel="shortcut icon">
    <title>FOOD ORDERING SYSTEM</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


<!--*********************************************START OF NAVIGATION BAR****************************************--> 
      
			
            	<table class="table table-responsive table-hover" style="border: 1px dashed #8c8b8b;
                border-top: 1px dashed #8c8b8b;
	">
                <?php include('includes/dbconn.php');
				$count = 0;
				$id = 0;
				$query = mysql_query("SELECT * FROM foods order by id desc") or die (mysql_error());
				if(mysql_num_rows($query)>0){
					while($row = mysql_fetch_assoc($query)){
						$id = $row['id'];
						$count++;
				?>
                	<tr style="border: 1px dashed #8c8b8b; cursor:pointer;">
                    <td  style="border: 1px dashed #8c8b8b;"><center><strong class="wow fadeInDown"><p style="margin-top:25px;">No.<?php echo $count;?></p></strong></center></td>
                    	<td style="border: 1px dashed #8c8b8b;"><center><img src="<?php echo $row['image']?>" width="120px;" class="img-responsive img-rounded wow fadeInDown"></center></td>
                        <td style="border: 1px dashed #8c8b8b;"> 
                        <dl class="dl-horizontal wow fadeInDown" style="text-align:left">
                        <dt>Name:</dt> <dd><?php echo $row['name'];?></dd>
						<dt>Size:</dt> <dd><?php echo $row['size'];?></dd>
                        <dt>Prize:</dt> <dd><?php echo $row['prize'];?></dd>
                        </dl></td>
                        <td style="border: 1px dashed #8c8b8b;"><button class="btn btn-success  wow fadeInDown" name="order" type="button" style="margin-top:25px;" data-toggle="modal" data-target="#orderModal<?php echo $id;?>"><i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart</button></td>
                    </tr>
                     <!-- Modal -->
<div class="modal fade" id="orderModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> CUSTOMER INFORMATION</h4>
      </div>
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
      <div class="modal-body">
      <p>Fields with (*) are required</p>
      <div class="row">
       <div class="col-lg-2">
    <label>Name*</label>
    </div>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
       <input type="hidden" class="form-control" id="fooddid" name="foodid"  value="<?php echo $id;?>" required>
    </div>
  </div>
  <div class="row">
  <div class="col-lg-2">
    <label>Address*</label></div>
    <div class="col-lg-10">
      <textarea class="form-control" name="address" required></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-2">
    <label>Contact*</label></div>
    <div class="col-lg-10">
      <input type="text" name="contact" class="form-control" required placeholder="Your number">
    </div>
  </div>
 
  <div class="row">
    <div class="col-lg-2">
    <label>Order Qty*</label></div>
    <div class="col-lg-10">
      <input type="number" name="qty" class="form-control" required placeholder="0">
    </div>
  </div>
  <div class="row">
  <div class="col-lg-2">
    <label>Photo*</label></div>
    <div class="col-lg-10">
      <input type="file" name="image" class="form-control" required>
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" required> Accept liscence and terms Agreement. 
        </label>
      </div>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary" name="savechanges"><i class="glyphicon glyphicon-thumbs-up"></i> Order</button>
      </div>
      </form>
    </div>
  </div>
</div>

                    <?php }}?>
                </table>
            
         
 
<?php include('includes/dbconn.php');
if(isset($_POST['savechanges'])){
		$id = $_POST['foodid'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$qty = $_POST['qty'];
		  //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];
							$sql = mysql_query("INSERT INTO foodsorder VALUES(NULL,'$name','$id','$address','$contact','$location',NULL,'new','$qty')") or die (mysql_error());
							if($sql==true){
								echo '<script>alert("Your request will be deliver after 30 mins or 1hr. Thank you!");
											 window.location.href="availableframe.php"</script>';}
											 else{
												 echo '<script>alert("Sorry unable to process your request. please try again later!");
											 window.location.href="availableframe.php"</script>';
												 }
	}	
?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

