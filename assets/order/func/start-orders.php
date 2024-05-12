<?php
include_once  $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';

echo "Starting start-orders.php...<br><br>";
    





// 1. Check and select paid orders.

	$sqlpending = "SELECT * FROM `orders` WHERE `order_status` = 'paid' LIMIT 20";
	$resultpending = $conn->query($sqlpending);
	if($resultpending->num_rows == 0) {
	   echo "No Orders with STATUS = PAID found in database.";
	}else{
		while($row = $resultpending->fetch_assoc()) {
			echo "Paid Orders: ".$resultpending->num_rows."<br><br>";

			$orderName = $orderID = $orderId = $orderProduct = $orderPriority = $emailLink = $message = $orderPriority = $ch = "";
			$logArray = "";
			$logArray = array();
			$partnerGender = $row["partner_gender"];
			$userID = $row['user_id'];
			$orderName = $row["user_name"];
			$customerName =  $row['first_name'];
			$orderId = $row["order_id"];
			$orderProduct = $row["order_product"];
			$orderPrice = $row["order_price"];
			$orderPriority = $row["order_priority"];
			$orderEmail = $row["order_email"];
			$fbc = $row["fbc"];
			$fbp = $row["fbp"];

			$fbSource = $row["fbSource"];
			
				$fbAccessToken = $fbAccessToken1;
				$FBPixel = $FBPixel1;
			
	
		
			$emailLink = $base_url ."/dashboard.php?check_email=" .$orderEmail;
			$message = $processingWelcome;
			$order_product_nice = $row["order_product_nice"];

	



			$message = str_replace("%ORDERID%",   $orderId, $message);
			$message = str_replace("%PRIORITY%",  $orderPriority, $message);
			$message = str_replace("%EMAILLINK%", $emailLink , $message);

			echo $orderId." | ";
			echo $orderEmail." | ";
			echo $orderProduct." | ";
			echo $orderPriority." | ";
			

			switch ($orderProduct) {
				case "husband":
				  if($partnerGender=="male"){
					$product  = "Future Spouse Drawing";
				  }else{
					$product  = "Future Spouse Drawing";
				  }
				  break;
				  case "futurespouse":
					if($partnerGender=="male"){
					  $product  = "Future Spouse Drawing";
					}else{
					  $product  = "Future Spouse Drawing";
					}
					break;
			  case "pastlife":
				  $product = "Past Life Drawing";
				  break;
			  case "baby":
				  $product = "Future Baby Drawing";
				  break;
			  case "soulmate":
				  $product = "Soulmate Drawing";
				  break;
			  case "twinflame":
					  $product = "Twin Flame Drawing";
					  break;
				case "spiritguide":
					$product = "Spirit Guide Drawing";
					break;
				case "higherself":
					$product = "Higher Self Drawing";
					break;
default:
$product = $orderProduct;
break;
			  }


			  $logArray[] = $orderId." | ". $orderEmail." | ".$product." | ".$orderPriority." | ";

		 //	Update Order Status Processing
		 if($orderProduct == "ask"){
			$sqlupdate = "UPDATE `orders` SET `order_status`='waiting' WHERE order_id='$orderId'";
		 }else{
			$sqlupdate = "UPDATE `orders` SET `order_status`='processing' WHERE order_id='$orderId'";
		 }
			if ($conn->query($sqlupdate) === TRUE) {
      		echo "Updated";


			//Check if abandoned is running
			if($runAbandoned == 1){
			  $sqlpending2 = "SELECT * FROM `abandoned` WHERE user = '$userID' AND active = '1'";
			  $resultpending2 = $conn->query($sqlpending2);
			  if($resultpending2->num_rows == 0) {
				 //No abandoned cart found
			  }else{
				$sqlupdate222 = "UPDATE `abandoned` SET `active`='0' WHERE user='$userID'";
				if ($conn->query($sqlupdate222) === TRUE) {
				}
			  }
			}

//First create TalkJS User with same ID as conversation
$ch = curl_init();
$data = [
"id" => $userID,
"name" => $customerName,
"email" => [$orderEmail],
"role" => "customer",
"photoUrl" => "https://avatars.dicebear.com/api/adventurer/".$orderEmail.".svg?skinColor=variant02",
"custom" => ["email" => $orderEmail, "lastOrder" => $orderId]
];
$data1 = json_encode($data);
curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/users/'.$orderId);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    
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
echo $result;


//Now create new conversation
$ch2 = curl_init();

$data2 = [
"subject" => "Order #".$orderId." | ".$order_product_nice,
"participants" => ["administrator", $userID],
"custom" => ["status" => "Paid"]
];

$data22 = json_encode($data2);
curl_setopt($ch2, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/'.$orderId);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, 'PUT');

curl_setopt($ch2, CURLOPT_POSTFIELDS, $data22);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);

$result2 = curl_exec($ch2);
if (curl_errno($ch2)) {
    echo 'Error:' . curl_error($ch2);
}
curl_close($ch2);
echo $result2;


if($orderProduct == "ask"){
					$logArray[] = "ask product";

					$sql_text = "SELECT * FROM ask WHERE order_id = '$orderId'";
									$sql_text_res = $conn->query($sql_text);
									if($sql_text_res->num_rows == 0) {
									} else {
										while($rowText = $sql_text_res->fetch_assoc()) {
											$UserMSG = $rowText["text"] . "\n\n";
											$logArray[] = $UserMSG ;
										}
									}


									//Now create new conversation
				$ch2 = curl_init();

				$data2 = [
				"subject" => "Order #".$orderId." | ".$order_product_nice,
				"participants" => ["administrator", $userID],
				"custom" => ["product" => "ask"]
				];

				$data22 = json_encode($data2);
				curl_setopt($ch2, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/'.$orderId);
				curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, 'PUT');

				curl_setopt($ch2, CURLOPT_POSTFIELDS, $data22);

				$headers = array();
				$headers[] = 'Content-Type: application/json';
				$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
				curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);

				$result2 = curl_exec($ch2);
				if (curl_errno($ch2)) {
					echo 'Error:' . curl_error($ch2);
				}
				curl_close($ch2);

				//Send CURL for message -> TalkJS
				$ch = curl_init();
				$data = [[
					"text" => $OrderProcessingMessage,
					"type" => "SystemMessage"
				],
				[
					"sender"  => "administrator",
					"text" => $message,
					"type" => "UserMessage"
				], 
				[
					"sender"  => $userID,
					"text" => $UserMSG,
					"type" => "UserMessage"
				]];
}else{

  //Send CURL for message -> TalkJS
  $ch = curl_init();
  $data = [[
	  "text" => $OrderProcessingMessage,
	  "type" => "SystemMessage"
  ],
  [
	  "sender"  => "administrator",
	  "text" => $message,
	  "type" => "UserMessage"
  ]];
}
  $data1 = json_encode($data);

  curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/' . $orderId . '/messages');
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

			// curl implementation
$ch = curl_init();
$data3 = [
"custom" => ["status" => "Processing"]
];
$data33 = json_encode($data);
print_r($data1);
curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/'.$orderId);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

curl_setopt($ch, CURLOPT_POSTFIELDS, $data33);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
//Change chat order status



$partnerGender = $row["partner_gender"];
$orderName = $row["user_name"];
$customerName =  $row['first_name'];
$orderId = $row["order_id"];
$orderProduct = $row["order_product"];
$orderPriority = $row["order_priority"];

$emailLink = $base_url ."/dashboard.php?check_email=" .$orderEmail;
$message = $processingWelcome;
$order_product_nice = $row["order_product_nice"];

$userSex = $row["gender"];
$Ffirst_name = $row["first_name"];
$Flast_name = $row["last_name"];
$customer_emailaddress = $row["order_email"];
$birthday = $row["birthday"];

$ip = $row["ip"];
$agent = $row["user_agent"];
$zip = $row["zip"];
$country = $row["country"];


if($userSex == "male"){
	$usersex1 = "m";
}else{
	$usersex1 = "f";
}


//Push notification for phone

if($push == 1){
	$pushTitle = "Order #".$orderId.": ".$order_product_nice." - ".$orderPriority."h";
	$pushMessage = "Order #".$orderId.": ".$order_product_nice." - ".$orderPriority."h
	Price: $".$orderPrice;
curl_setopt_array($ch = curl_init(), array(
	CURLOPT_URL => "https://api.pushover.net/1/messages.json",
	CURLOPT_POSTFIELDS => array(
	  "token" => "aayvxh42e8rfzhuxssiiwo7ko3pcej",
	  "user" => "u24izth113b2jc8jwt4g68vvzppk12",
	  "title" => $pushTitle,
	  "message" => $pushMessage,
	),
	CURLOPT_SAFE_UPLOAD => true,
	CURLOPT_RETURNTRANSFER => true,
  ));
  curl_exec($ch);
  curl_close($ch);
}


//Facebook API conversion
if($orderProduct == "soulmate" OR $orderProduct == "futurespouse" OR $orderProduct == "twinflame" OR $orderProduct == "husband"){
	if($sendFBAPI == 1){
	 $fixedBirthday = date("Ymd", strtotime($birthday));
 
 
	 if (!empty($fbc) AND empty($fbp)) {
		 $data = array( // main object
			 "data" => array( // data array
				 array(
					 
					 "event_name" => "Purchase",
					 "event_time" => time(),
					 "event_id" => $orderId,
					 "user_data" => array(
						 "fn" => hash('sha256', $Ffirst_name),
						 "ln" => hash('sha256', $Flast_name),
						 "em" => hash('sha256', $customer_emailaddress),
						 "db" => hash('sha256', $fixedBirthday),
						 "ge" => hash('sha256', $usersex1),
						 "external_id" => hash('sha256', $orderId),
						 "fbc" => $fbc,
						 "client_ip_address" => $ip,
						 "client_user_agent" => $agent,
						 "zp" => hash('sha256', $zip),
						 "country" => hash('sha256', $country),
					 ),
					 "contents" => array(
						 array(
						 "id" => $orderProduct,
						 "quantity" => 1
						 ),
					 ),
					 "custom_data" => array(
						 "currency" => "USD",
						 "value"    => $orderPrice,
					 ),
					 "action_source" => "website",
					 "event_source_url"  => "https://".$domain."/offer/color",
					
				),
			 ),
				"access_token" => $fbAccessToken,
				
			 ); 
	 }elseif(empty($fbp) AND !empty($fbc)){
		 $data = array( // main object
			 "data" => array( // data array
				 array(
					 
					 "event_name" => "Purchase",
					 "event_time" => time(),
					 "event_id" => $orderId,
					 "user_data" => array(
						 "fn" => hash('sha256', $Ffirst_name),
						 "ln" => hash('sha256', $Flast_name),
						 "em" => hash('sha256', $customer_emailaddress),
						 "db" => hash('sha256', $fixedBirthday),
						 "ge" => hash('sha256', $usersex1),
						 "external_id" => hash('sha256', $orderId),
						 "fbp" => $fbp,
						 "client_ip_address" => $ip,
						 "client_user_agent" => $agent,
						 "zp" => hash('sha256', $zip),
						 "country" => hash('sha256', $country),
					 ),
					 "contents" => array(
						 array(
						 "id" => $orderProduct,
						 "quantity" => 1
						 ),
					 ),
					 "custom_data" => array(
						 "currency" => "USD",
						 "value"    => $orderPrice,
					 ),
					 "action_source" => "website",
					 "event_source_url"  => "https://".$domain."/offer/color",
					
				),
			 ),
				"access_token" => $fbAccessToken,
				
			 ); 
 
	 }elseif(!empty($fbp) AND !empty($fbc)){
		 $data = array( // main object
			 "data" => array( // data array
				 array(
					 
					 "event_name" => "Purchase",
					 "event_time" => time(),
					 "event_id" => $orderId,
					 
					 "user_data" => array(
						 "fn" => hash('sha256', $Ffirst_name),
						 "ln" => hash('sha256', $Flast_name),
						 "em" => hash('sha256', $customer_emailaddress),
						 "db" => hash('sha256', $fixedBirthday),
						 "ge" => hash('sha256', $usersex1),
						 "external_id" => hash('sha256', $orderId),
						 "fbc" => $fbc,
						 "fbp" => $fbp,
						 "client_ip_address" => $ip,
						 "client_user_agent" => $agent,
						 "zp" => hash('sha256', $zip),
						 "country" => hash('sha256', $country),
					 ),
					 "contents" => array(
						 array(
						 "id" => $orderProduct,
						 "quantity" => 1
						 ),
					 ),
					 "custom_data" => array(
						 "currency" => "USD",
						 "value"    => $orderPrice,
					 ),
					 "action_source" => "website",
					 "event_source_url"  => "https://".$domain."/offer/color",
					 
				),
				
			 ),
				"access_token" => $fbAccessToken,
				
			 ); 
	 }else{
	 $data = array( // main object
		 "data" => array( // data array
			 array(
				 
				 "event_name" => "Purchase",
				 "event_time" => time(),
				 "event_id" => $orderId,
				 "user_data" => array(
					 "fn" => hash('sha256', $Ffirst_name),
					 "ln" => hash('sha256', $Flast_name),
					 "em" => hash('sha256', $customer_emailaddress),
					 "db" => hash('sha256', $fixedBirthday),
					 "ge" => hash('sha256', $usersex1),
					 "external_id" => hash('sha256', $orderId),
					 "client_ip_address" => $ip,
					 "client_user_agent" => $agent,
					 "zp" => hash('sha256', $zip),
					 "country" => hash('sha256', $country),
				 ),
				 "contents" => array(
					 array(
					 "id" => $orderProduct,
					 "quantity" => 1
					 ),
				 ),
				 "custom_data" => array(
					 "currency" => "USD",
					 "value"    => $orderPrice,
				 ),
				 "action_source" => "website",
				 "event_source_url"  => "https://".$domain."/offer/color",
				
			),
		 ),
			"access_token" => $fbAccessToken,
			
		 );  
		 
	 }
		 $dataString = json_encode($data);                                                                                                              
		 $ch = curl_init('https://graph.facebook.com/v11.0/'.$FBPixel.'/events');                                                                      
		 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		 curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);                                                                  
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		 curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			 'Content-Type: application/json',                                                                                
			 'Content-Length: ' . strlen($dataString))                                                                       
		 );                                                                                                                                                                       
		 $response = curl_exec($ch);
		 $logArray[] = $response;
		 echo "<br>Sent to Pixel ID: ".$FBPixel;
		 echo $response;
	 }
 }

      		} else {
			echo "Error";
			}

			startLog($logArray);
		}
	}

	echo "<br><hr>";
 ?>
