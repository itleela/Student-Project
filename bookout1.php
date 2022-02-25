<?php 
	session_start();
	require 'config.php';
	include 'header.php';
	// Get Resource id
	$id = $_GET['res_id'];
	
	

//Query 
    $Select_bookdetails_sql = "SELECT * FROM resources where  id = '$id'";
	

?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Tenant Tale</title>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js"></script>
	
	
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
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
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
                    
                    function fun(){
                    
           return confirm('Are You Sure Want to MARK AS READ ? ');

                         }
                   
			 
				 
  </script>
  <script type="text/javascript">
 function checkDate() {
   var selectedDate = document.getElementById('datepicker').value;
   var now = new Date();
   if (selectedDate < now) {
    alert("Date must be in the future");
   }
 }
</script>

  
</head>
<body class="realestate_version">

 <div class="contact_form" style="margin-top:50px;margin-left: 20px;margin-right: 20px;">
        
             <div class="contact_form" style="margin-top:50px;">
        
		<h3 style="font-size: 25px;"><i class="fa fa-envelope-o grd1 global-radius"></i>Preview Booking</h3>
            <form   method="POST" action="callback.php"> 
			 <fieldset class="row-fluid">
               <table border="1" style="padding: 50px;" class="table">
                <thead class="thead-dark">
                
                  <th scope="col">Type Of Property</th>
                  <th scope="col">Address</th>
                  <th scope="col">Book Date</th>
                  <th scope="col">No. Of Occupants</th>
                  <th scope="col">Price</th>
                  <th scope="col" colspan="2">Action</th>
                 
           
                </thead>
                <tbody>
				<?php 
                    $result = $conn->query($Select_bookdetails_sql);
                    if ($result->num_rows>0) {
                      while ($row = $result->fetch_assoc()) {
                      $r_name = $row['R_name'];   
                      $r_address = $row['R_address'];   
                      $occupants = $row['R_occupant'];   
                      $r_price = $row['R_price'];   
                     }
                    }
                  ?>
                  <tr class="center">
			
                  <td scope="row"><?php echo $r_name; ?></td>
                  <td scope="row"><?php echo $r_address ?></td>
                  <td scope="row">
				 
					<input type="date"  min = <?php echo date('Y-m-d');?> name="book_date" id="book_date" class="selectpicker form-control" /></td>
                  <td><?php echo $occupants;?></td>
                  <td><?php echo $r_price; ?>/-</td>
				  
				  <input type="hidden" name="tot_amt" value="<?php echo $r_price; ?>" id="total_amount">
                  <td  class="center"><button type="submit" name="booking" class="btn btn-light btn-radius grd1 btn-brd" id="razor-pay-now"> Book </button></td>
                  <td  class="center"><a href="service.php" class="btn btn-light btn-radius grd1 btn-brd"> Back </a></td>
                 
			
                  
                  </tr> 
                </tbody>
                </table>
             </fieldset>
			 
			 <!-- Selecct Aouthonticated user data-->
			 <?php

					$session_email = $_SESSION["email"];
	
					$Select_sql = "SELECT * FROM register WHERE email='$session_email'";
					$result = $conn->query($Select_sql);
                    if ($result->num_rows>0) {
                      while ($row = $result->fetch_assoc()) {
                      $u_name = $row['Name'];   
                      $u_email = $row['Email'];   
                      $u_phone = $row['Phone'];   
                      
                     }
                    }
					
					
			 ?>
           
               <input type="hidden" name="u_name" value="<?php echo $u_name;?>" id="customer_name">
               <input type="hidden" name="u_email" value="<?php echo $u_email;?>" id="c_email">
               <input type="hidden" name="r_name" value="<?php echo $id;?>" id="res_id">
               <input type="hidden" name="r_address" value="<?php echo $r_address ?>">
               <input type="hidden" name="r_price" value="<?php echo $r_price ?>">               
               <input type="hidden" name="member" value="<?php echo $occupants ?>" id="omember">               
               <input type="hidden" name="u_phone" value="<?php echo $u_phone ?>">               
                              
               <br>
               <!-- <button type="submit" class="btn-primary btn-block btn-lg" style="width: 40%">Book Now</button> -->       
		</form>
		
		
		<!--Post form input data-->
		<?php 

		
		?>
 </div>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>



<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
   jQuery(document).on('click', '#razor-pay-now', function (e) { 
     e.preventDefault();
     //alert("button click");
			   var total_amount = $('#total_amount').val();
			 var customer_name = $('#customer_name').val();
			 var c_email = $('#c_email').val();
			 var book_date1 = $('#book_date').val();
			    var res_id = $('#res_id').val();
			   var omember = $('#omember').val();
			   // var password = $('#password').val();
			    
				//var image = $("#ph_image").prop("files")[0];
				
				//alert(total_amount);

	var totalAmount = total_amount*100;

    var merchant_total = totalAmount;
    
    var merchant_order_id = "123";
    var currency_code_id = "INR";
     var options = {
    "key": "rzp_test_98Ozda9wzffKQ6",
    "amount": merchant_total, // 2000 paise = INR 20
    "name": "tenant tale",
    "description": "Booking & Payment confirmation from tenant tale",

    "currency" : "INR",
    "netbanking" : true,
    prefill: {
            name: customer_name,
           email: c_email,
            contact: 9898989898,

        },
    notes: {
            soolegal_order_id: merchant_order_id,
        },
    "handler": function (response){
    	  	//alert("inside ajax");
			 window.location.href = 'http://localhost/Tenant_Project/tenant/callback.php?res_id='+res_id;
			  //   window.location = res.redirectURL;
			 
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();

} );


</script>
</body>
</html>