<?php
session_start();



		
		$u_name = $_POST['u_name'];
		$u_email = $_POST['u_email'];
		$r_name = $_POST['r_name'];
		$r_address = $_POST["r_address"];
		$occupants = $_POST["occupants"];
		$r_price = $_POST['r_price'];
		$u_phone = $_POST['u_phone'];
		$book_date = $_POST['book_date'];
		
		

$_SESSION['bookdate'] = $book_date;
$_SESSION['rname'] = $r_name;
$_SESSION['person'] = $occupants;



include 'payment/instamojo.php';
//Private API Key  / Private Auth Token

$api = new Instamojo\Instamojo('test_765fe7caa8b9496f8c4782d786a', 'test_46aa748c7bb50f8e0c09df993df', 'https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $r_name,
        "amount" => $r_price,
        "buyer_email" => $u_name,
        "buyer_phone" => $u_phone,
        "phone" => $u_phone,
        "buyer_name" => $u_name,
        "send_email" => true,
        "send_sms" => true,
        "sms_status" => "Sent",
        "email_status" => "Sent",
        "email" => $u_email,
        'allow_repeated_payments' => false,

        "redirect_url" => "http://localhost:90/tenant/payment_success1.php",
        "webhook" => "http://webhook.php"
    ));
    print_r($response);

    $pay_ulr = $response['longurl'];

    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

} catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}



?>