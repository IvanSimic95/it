<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
echo "Starting abbandoned-carts.php...<br><br>";
use SendGrid\Mail\Mail;

if($runAbandoned == 1){

// 1. Check and select abanconed orders.

	$sqlpending = "SELECT * FROM `abandoned` WHERE active = '1'";
	$resultpending = $conn->query($sqlpending);
	if($resultpending->num_rows == 0) {
	   echo "No Orders with pending cart abandon email to be sent";
	}else{
        echo "Pending Orders: ".$resultpending->num_rows."<br><br>";

while($row = $resultpending->fetch_assoc()) {
			$logArray = "";
			$logArray = array();

			$id = $row["id"];
			$user = $row["user"];
			$email = $row["email"];
			$name = $row["name"];
			$orderID = $row["order_id"];
			$product = $row["product"];
			$time = $row["time"];
			$link = $row["link"];
			$first = $row["first"];
			$second = $row["second"];
			$third = $row["third"];
			$currentTime = date('d-m-Y H:i:s', time());
			//Get the time difference
			$delta = time() - strtotime($time);
			$difference = $delta / 60;
			echo "Minutes difference: ".$difference;







			//Sending First Message
			if($difference >= "60" && $first == "0"){

			
			


				$sqlupdate = "UPDATE `abandoned` SET `first`='1' WHERE id='$id'";
				if ($conn->query($sqlupdate) === TRUE) {
					echo "First Message Sent";
					$logArray[] = "<b>[".$currentTime."]</b> User: ".$user." | Order: #".$orderID." | ". $email." | ".$product." | ".$time. " | First Message Sent!";
					
								$semail = new Mail();
								$semail->setFrom("info@soulmatehealer.com", "Soulmate Healer");
								$semail->setSubject("Abandoned Order");
								$semail->addTo(
									$email,
									"Gabe",
									[
										"first_name" => $name,
										"email" => $email,
										"buy_link" => $link,
										"product" => $product
									],
									0
								);
								$semail->setTemplateId("d-34c82fc813d14f2aa72f6f69060b68f0");
								$sendgrid = new \SendGrid($sg);
								try {
									$response = $sendgrid->send($semail);
									print $response->statusCode() . "\n";
									print_r($response->headers());
									print $response->body() . "\n";
								} catch (Exception $e) {
									echo 'Caught exception: '.  $e->getMessage(). "\n";
								}
				}
				abandonLog($logArray); 
			//Sending Second Message
			}/*elseif($difference >= "1440" && $first == "1" && $second == "0"){
				$logArray[] = $user." | ".$orderID." | ". $email." | ".$product." | ".$time." | ";
				$sqlupdate = "UPDATE `abandoned` SET `second`='1' WHERE id='$id'";
				if ($conn->query($sqlupdate) === TRUE) {
					echo "sending second message";
					$logArray[] = "Sending Second Message";
					$link = $link."&voucher=cartrecover";
					$message = $secondAbandon;
					$message = str_replace("%FIRSTNAME%", $name, $message);
					$message = str_replace("%PRODUCT%", $product, $message);
					$message = str_replace("%LINK%", $link, $message);

					//SEND MESSAGE TO TALKJS
					$ch = curl_init();
					$data = [
					[
						"sender"  => "administrator",
						"text" => $message,
						"type" => "UserMessage"
					]];
					$data1 = json_encode($data);
					curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/' . $orderID . '/messages');
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
					$headers = array();
					$headers[] = 'Content-Type: application/json';
					$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					$result = curl_exec($ch);
					if (curl_errno($ch)) {
						echo 'Error:' . curl_error($ch);
					}
					curl_close($ch);

					$sqlupdate2 = "UPDATE `abandoned` SET `active`='0' WHERE id='$id'";
					if ($conn->query($sqlupdate2) === TRUE) {
					}
				}
			
					/*
					//Sending Third Message
					}elseif($difference >= "2880" && $first == "1" && $second == "1" && $third == "0"){
						
							echo "sending third message";
							$message = "This is third message trying to recover your order";

							//SEND MESSAGE TO TALKJS
							$ch = curl_init();
							$data = [
							[
								"sender"  => "administrator",
								"text" => $message,
								"type" => "UserMessage"
							]];
							$data1 = json_encode($data);
							curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/' . $orderID . '/messages');
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
							curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
							$headers = array();
							$headers[] = 'Content-Type: application/json';
							$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
							curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
							$result = curl_exec($ch);
							if (curl_errno($ch)) {
								echo 'Error:' . curl_error($ch);
							}
							curl_close($ch);
						*/

				echo "<br>";		
			}
			
		

 
			  
}

           
}else{
	echo "Run abandoned email is disabled";
}


    echo "<br><hr>"
 ?>
