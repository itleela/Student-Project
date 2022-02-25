    <?php 
    session_start();
	include('config.php');
	$session_email=$_SESSION["email"];

    // Queries
	


	
  
?>


<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>tenant tale</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
            <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.myButton {
    box-shadow: 0px 1px 0px 0px #3e7327;
    background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
    background-color:#77b55a;
    border-radius:6px;
    border:1px solid #4b8f29;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    padding:10px 100px;
    text-decoration:none;
    text-shadow:0px -1px 0px #5b8a3c;
    float: left;
}
.myButton:hover {
    background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
    background-color:#72b352;
}
.myButton:active {
    position:relative;
    top:1px;
}

        
.book {
    box-shadow: 0px 1px 0px 0px #f0f7fa;
    background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
    background-color:#33bdef;
    border-radius:6px;
    border:1px solid #057fd0;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    padding:10px 70px;
    text-decoration:none;
    text-shadow:0px -1px 0px #5b6178;
    float: left;
}
.book:hover {
    background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
    background-color:#019ad2;
}
.book:active {
    position:relative;
    top:1px;
}


</style>
</head>
<body class="realestate_version">
<?php  
    include 'header.php';
?>	
	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
	
	<div class="about-box">
		<div class="container">
			<div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>My Booking Details</h3>
				</div><!-- end col -->
            </div><!-- end title -->
			
			<div class="row">
			
						
				<div class="col-sm-12">
					<div class="panel panel-default">
                        <div class="panel-heading">
                            My Booking Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Occupants</th>
                                            <th>Email</th>
                                            <th>Price</th>
                                            <th>Payment Id</th>
                                            
                                        </tr>
                                    </thead>
									<?php 
			$Select_sql_Tenament ="SELECT * FROM book_resource WHERE Email='$session_email'";
			$data = mysqli_query($conn, $Select_sql_Tenament);
			$result = mysqli_num_rows($data);
	
	
                    $Tenament = $conn->query($Select_sql_Tenament);
                        if ($Select_sql_Tenament) {
							$id  = 1;
                        while ($row = $Tenament->fetch_assoc()) {
							
							
							
							$name = $row['R_name'];
                            $occupants = $row['R_occupants'];
                            $Email = $row['Email'];
                            $price = $row['R_price'];
                            $Payment_id = $row['Payment_id'];
							
						
						?>
									 <tbody>
                                        <tr>
                                            <td><?php echo $id ?></td>
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $occupants; ?></td>
                                            <td><?php echo $Email; ?></td>
                                            <td><?php echo $price; ?></td>
                                            <td><?php echo $Payment_id; ?></td>
										</tr>
										
										</tbody>
										<?php   
										$id++;
										}
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
						
				</div>		
						
						
						
						
				
				</div>
						
						 
				
				
			</div>
			
		</div>
	</div>

    <script type="text/javascript">
        $('.datepicker').datepicker({ 

         startDate: new Date()

        });
    </script>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <?php 
        include'footer.php';
    ?>
</body>
</html>