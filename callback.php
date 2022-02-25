<?php 
session_start();
  include('config.php');
 $cust_id=$_SESSION["email"];
 $order_id=strtotime("now");
 $_SESSION['order_no']= $order_id;
 $res_id=$_GET['res_id'];
 



 
   $query1=" SELECT * FROM resources where  id = '$res_id'";
        
          $result2 = mysqli_query($conn,$query1);

           
        while($row=mysqli_fetch_array($result2)){
            $id= $row['id'];
            $r_name= $row['R_name'];
            $r_address= $row['R_address'];
          
			
			  $R_price= $row['R_price'];
			  $R_occupant=$row['R_occupant'];
            
           
			echo $insert_sql = "INSERT INTO book_resource(R_name,R_occupants,Email,R_price,Payment_id,R_bookdate) VALUES ('$r_name','$R_occupant','$cust_id','$R_price','$order_id','$order_id')";
	 
	 
            $result1 = mysqli_query($conn,$insert_sql);

		} 

    $s_name = 'JIGAR PATEL';
    $email = 'ADMIN@GMAIL.com';
    $mobile = '8000569940';
    $msg = 'My email message.';

    require 'phpmail/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    
    //$mail->setFrom('26it2017@gmail.com', 'Jigar Patel');
    
	$mail->addAddress($cust_id, 'Customer Name');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'payment successful';


    $mail->Body .= '<img src="http://www.shikharclasses.in/wp-content/uploads/2020/04/PAYMENT-SUCCESS.png">
	';
 
    if ($mail->send()) {

      //  echo 'Success.';
		
echo"<script>window.open('thank_you.php','_self')</script>";


    } else {

        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?>
 


 