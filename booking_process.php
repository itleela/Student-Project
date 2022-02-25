<?php

require 'config.php';
session_start();

if(isset($_POST['booking']))
{
		$u_name = $_POST['u_name'];
		$u_email = $_POST['u_email'];
		$r_name = $_POST['r_name'];
		$r_address = $_POST["r_address"];
		$member = $_POST['member'];
		$book_date = $_POST['book_date'];
		$r_price = $_POST['r_price'];
		$u_phone = $_POST['u_phone'];
		
		
		
		$Insert_Booking_Sql = "INSERT INTO book_resource(R_name,R_occupants,Email,R_price,R_bookdate) VALUES ('$r_name','$member','$u_email','$r_price','$book_date')";
        $data = mysqli_query($conn, $Insert_Booking_Sql);
	
		
		header("location:index.php");
		
		



}



?>