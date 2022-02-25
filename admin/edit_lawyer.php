<?php 
	session_start();
	require 'config.php';

	// Get Resource id
	
               

	

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PG2ME</title>
    <link rel="icon" type="image/icon" href="assets/img/favicon.ico">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <!-- /. NAV TOP  -->
         <?php
		include('navbar.php');
		?>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Lawyer Details</h1>
                    </div>
                </div>
				<?php
				$id = $_GET['lawyer_id'];
				$Select_lawyer_sql = "SELECT * FROM lawyer where  id = '$id'";
	
					$result = $conn->query($Select_lawyer_sql);
                    if ($result->num_rows>0) {
                      while ($row = $result->fetch_assoc()) {
						$l_name = $row['l_name'];   
						$l_email = $row['l_email']; 
						$l_phone = $row['l_phone']; 
						$city = $row['city'];
						$address = $row['address'];   
						$lawyer_id = $row['id'];   
                         
                   
                     ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Lawyer Detail
                        </div>
                        <div class="panel-body">
                       <form method="POST" action="update_lawyer_proccess.php" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
							
							<input type="hidden" class="form-control" name="lawyer_id" value="<?php echo $lawyer_id ?>">
							<input type="text" class="form-control" value="<?php echo $l_name ?>" disabled>
					
                            
                          </div>
						  <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
							
							<input type="text" class="form-control" value="<?php echo $l_email ?>" disabled>
					
                            
                          </div>
						  <div class="form-group">
                            <label for="exampleInputEmail1">Mobile_No</label>
							
							<input type="text" class="form-control" name="l_phone" value="<?php echo $l_phone ?>" >
					
                            
                          </div>
						<div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" name="city" class="form-control" id="price" placeholder="₹ 1,000" value="<?php echo $city ?>" required="TRUE"/>
                          </div> 
	`					<div class="form-group">
                            <label for="resource_address">Address</label>
                            <textarea type="text" rows="5"  id="address" name="address" class="form-control" id="address" ><?php echo $address ?></textarea>
                        </div>
                          						  
                        
						<?php
						}
				}
						?>
                        <div class="btn-group">
                          <button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>  
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<footer >
        &<!-- copy; 2019 Enlighten Infosystems | By : <a href="http://www.enlighteninfosystems.com/" target="_blank">Admin Design</a> -->
    </footer>
    </div>
    
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>