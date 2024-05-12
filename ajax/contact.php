<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

if(!$conn){ //CHECK DB CONNECTION FIRST
$submitStatus = "Database Error!";
$EMessage = 'Could not Connect to Database Server:'.mysqli_error($conn);
$returnData = [$submitStatus,$EMessage];
echo json_encode($returnData);
die();
}

$request = $_SERVER['REQUEST_METHOD'];

if ($request === 'POST') {

    // Clean up the input values
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
    }

//Setup all variables
$name = $_POST['name'];
$email = $_POST['email'];
if($_POST['order'] != ""){
    $order = $_POST['order'];
}else{
    $order = "none";
}
$smessage = $_POST['message'];


// --------------------------------------//
// Send the email // INSERT YOUR EMAIL HERE
$to = "info@soulmatehealer.com";
// --------------------------------------//

if($order == "none"){
    $subject = "Support Request: $name";
}else{
    $subject = "Support Request: Order #$order";
}

$message = "Name: $name 
Email: $email 
Order: $order 
Message: 
$smessage";
$headers = 'From: info@soulmatehealer.com' . "\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);

$submitStatus = "Success";
$SuccessMessage = "Your Support Request has been sent!";
$redirectPayment = "";
$returnData = [$submitStatus,$SuccessMessage,$redirectPayment];
echo json_encode($returnData);
}
?>