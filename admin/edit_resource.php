<?php 
	session_start();
	require 'config.php';

	// Get Resource id
	$id = $_GET['res_id'];
	
	

	//Query 
    $Select_resource_sql = "SELECT * FROM resources where  id = '$id'";
	
	 
               

	

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
                        <h1 class="page-head-line">Add Resources</h1>
                    </div>
                </div>
				<?php
				 $result = $conn->query($Select_resource_sql);
                    if ($result->num_rows>0) {
                      while ($row = $result->fetch_assoc()) {
						$r_name = $row['R_name'];   
						$r_address = $row['R_address']; 
						$r_img = $row['R_image']; 
						$r_price = $row['R_price'];
						$occupants = $row['R_occupant'];   
						$r_id = $row['id'];   
                         
                   
                     ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Resource Detail
                        </div>
                        <div class="panel-body">
                       <form method="POST" action="update_resource.php" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
							
							<input type="hidden" class="form-control" name="r_id" value="<?php echo $r_id ?>">
							<input type="text" class="form-control" value="<?php echo $r_name ?>" disabled>
					
                            
                          </div>
						<div class="form-group">
                            <label for="resource_address">Address</label>
                            <textarea type="text" rows="5"  id="address" name="address" class="form-control" id="address" disabled><?php echo $r_address ?></textarea>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="₹ 1,000" value="<?php echo $r_price ?>" required="TRUE"/>
                          </div>                          
                        <div class="form-group">
                            <label for="Occupants">No of Occupants</label>
                            <input type="text" class="form-control" value="<?php echo $occupants ?>" disabled>
					
                        </div>

                        <div class="form-group">
                            <label for="resource_image">Image</label>
                            <input type="file" id="image" name="fileToUpload" class="form-control" id="fileToUpload" required="TRUE"/>
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