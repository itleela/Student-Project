<?php
require 'config.php';
// Data Fetch









if (isset($_POST['register'])) {
	
$Name = $_POST['name'];
$Gender = $_POST['gender'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$Password = $_POST['pass'];
$Phone = $_POST['phone'];
$Aadhar = $_POST['aadhar_number'];

  $sql = "SELECT * FROM register WHERE email='$Email'";
  $res = mysqli_query($conn, $sql);
 
  if(mysqli_num_rows($res) > 0){
	
	echo "<script>alert('Entered Email is already exist....!'); location.href='register.php';</script>";
	
	
	}else{
    $insert_sql = "INSERT INTO register(Name,Gender,Adress_line1,Phone,Email,Password,Aadhar_card_number)VALUES('$Name','$Gender','$Address','$Phone','$Email','$Password','$Aadhar')";
	$insert = mysqli_query($conn, $insert_sql);
	echo $insert_sql;
	 header('Location:login.php');
	
  }
}


?>
