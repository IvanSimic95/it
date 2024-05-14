<?php
$title = "Special One-Time-Offer!";
$description = "Almost Complete...";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; 


$t_product_name = "personal";
$lower = strtolower($t_product_name);
$sql = "SELECT * FROM review_total WHERE product = '".$t_product_name."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row['reviews'];
?>
<?php


if(isset($_GET['c'])){
  $ord = $_GET['c'];
  $order_ID = $ord;
  $sql = "SELECT * FROM `orders` WHERE `order_id` = '$ord' ORDER BY `order_id` DESC LIMIT 1";
  $result = $conn->query($sql);
  $count = $result->num_rows;
  $row = $result->fetch_assoc();
  
  //If order is found input data from BG and update status to paid
  if($result->num_rows != 0) {
  
  $_SESSION['lastorder'] = $_GET['c'];
  $_SESSION['orderFName'] = $row['first_name'];
  $_SESSION['orderLName'] = $row['last_name'];
  $_SESSION['orderBirthday'] = $row['birthday'];
  $_SESSION['orderAge'] = $row['user_age'];
  $_SESSION['orderGender'] = $row['gender'];
  $_SESSION['orderPartnerGender'] = $row['partner_gender'];
  $_SESSION['BGEmail'] = $row['order_email'];
  
  $_SESSION['fbfirepixel'] = 1;
  $_SESSION['fborderID'] = $_GET['c'];
  $_SESSION['fborderPrice'] = $row['order_price'];
  $_SESSION['fbproduct'] = $row['order_product'];

  $_SESSION['fbSource'] = $row['fbSource'];


    $FBPixel = $FBPixel1;
  
  
  }
  
  
  
  
}else{

if(isset($_SESSION['lastorder'])){
$lastOrderID = $_SESSION['lastorder'];
$sql = "SELECT * FROM `orders` WHERE `order_id` = '$lastOrderID' ORDER BY `order_id` DESC LIMIT 1";
$result = $conn->query($sql);
$count = $result->num_rows;
$row = $result->fetch_assoc();

//If order is found input data from BG and update status to paid
if($result->num_rows != 0) {


$_SESSION['lastorder'] = $_GET['c'];
$_SESSION['orderFName'] = $row['first_name'];
$_SESSION['orderLName'] = $row['last_name'];
$_SESSION['orderBirthday'] = $row['birthday'];
$_SESSION['orderAge'] = $row['user_age'];
$_SESSION['orderGender'] = $row['gender'];
$_SESSION['orderPartnerGender'] = $row['partner_gender'];
$_SESSION['BGEmail'] = $row['order_email'];

$_SESSION['fbfirepixel'] = 1;
$_SESSION['fborderID'] = $lastOrderID;
$_SESSION['fborderPrice'] = $row['order_price'];
$_SESSION['fbproduct'] = $row['order_product'];


  $FBPixel = $FBPixel1;


}
}
 
}
$FirePixel = $_SESSION['fbfirepixel'];
?>


<script src="https://www.digistore24.com/service/digistore.js"></script><script>digistoreUpsell()</script>

<style>
     .footer-guarantee{
        display:none;
    }
.btn-outline-reg {
	background-color:#fff;
	color: #ec5540;
}

.btn-outline-reg:hover {
    background-color: #ec5540;
    color: #fff;
    text-decoration: none;
}
.ex-6-header {padding-bottom: 10px;}


.ex-6-header h2 {
    font-size: 30px;
    line-height: 30px;
    color: #333;
    font-weight: 700;
}


.blob.orange {
	background: rgba(255, 121, 63, 1);
	box-shadow: 0 0 0 0 rgba(255, 121, 63, 1);
	animation: pulse-orange 2s infinite;
	
	border-radius: 0.25rem;
	height: 2rem;
	font-weight: 600;
	font-size: 17px;
    padding: 8px 8px;
	
	max-width: 350px;
    margin: auto;
	
}

@keyframes pulse-orange {
	0% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(255, 121, 63, 0.7);
	}
	
	70% {
		transform: scale(1);
		box-shadow: 0 0 0 10px rgba(255, 121, 63, 0);
	}
	
	100% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(255, 121, 63, 0);
	}
}


.blob.purple {
	background: rgba(142, 68, 173, 1);
	box-shadow: 0 0 0 0 rgba(142, 68, 173, 1);
	animation: pulse-purple 2s infinite;
	text-decoration:none;
	border-radius: 0.25rem;
	height: 2rem;
	font-weight: 600;
	font-size: 18px;
    padding: 10px 10px;	
	
	max-width: 350px;
    margin: auto;
	
}

@keyframes pulse-purple {
	0% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(142, 68, 173, 0.7);
	}
	
	70% {
		transform: scale(1);
		box-shadow: 0 0 0 10px rgba(142, 68, 173, 0);
	}
	
	100% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(142, 68, 173, 0);
	}
}


.blob.blue {
	background: rgba(12, 109, 229, 1);
	box-shadow: 0 0 0 0 rgba(12, 109, 229, 1);
	animation: pulse-purple 2s infinite;
	line-height: 16px;
	border-radius: 0.25rem;
	height: 4rem;
	font-weight: 600;
	font-size: 24px;
    padding: 16px 8px;	
	text-decoration:none;
	max-width: 350px;
    margin: auto;
}

@keyframes pulse-blue {
	0% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(12, 109, 229, 0.7);
	}
	
	70% {
		transform: scale(1);
		box-shadow: 0 0 0 10px rgba(12, 109, 229, 0);
	}
	
	100% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(12, 109, 229, 0);
	}
}

@property --progress-value {
  syntax: '<integer>';
  inherits: true;
  initial-value: 0;
}

:root {
  --progress-bar-color: #cfd8dc;
  --progress-value-color: #2196f3;
  --progress-empty-color-h: 4.1;
  --progress-empty-color-s: 89.6;
  --progress-empty-color-l: 58.4;
  --progress-filled-color-h: 122.4;
  --progress-filled-color-s: 39.4;
  --progress-filled-color-l: 49.2;
}

progress[value] {
  display: block;
  position: relative;
  appearance: none;
  width: 100%;
  height: 8px;
  border: 0;
  --border-radius: 10px;
  border-radius: var(--border-radius);
  counter-reset: progress var(--progress-value);
  --progress-value-string: counter(progress) '%';
  --progress-max-decimal: calc(var(--value, 0) / var(--max, 0));
  --progress-value-decimal: calc(var(--progress-value, 0) / var(--max, 0));
  @supports selector(::-moz-progress-bar) {
    --progress-value-decimal: calc(var(--value, 0) / var(--max, 0));
  }
  --progress-value-percent: calc(var(--progress-value-decimal) * 100%);
  --progress-value-color: hsl(
    calc((var(--progress-empty-color-h) + (var(--progress-filled-color-h) - var(--progress-empty-color-h)) * var(--progress-value-decimal)) * 1deg)
    calc((var(--progress-empty-color-s) + (var(--progress-filled-color-s) - var(--progress-empty-color-s)) * var(--progress-value-decimal)) * 1%)
    calc((var(--progress-empty-color-l) + (var(--progress-filled-color-l) - var(--progress-empty-color-l)) * var(--progress-value-decimal)) * 1%)
  );
  animation: calc(3s * var(--progress-max-decimal)) linear 0.5s 1 normal both progress;
}

progress[value]::-webkit-progress-bar {
  background-color: var(--progress-bar-color);
  border-radius: var(--border-radius);
  overflow: hidden;
}

progress[value]::-webkit-progress-value {
  width: var(--progress-value-percent) !important;
  background-color: var(--progress-value-color);
  border-radius: var(--border-radius);
}

progress[value]::-moz-progress-bar {
  width: var(--progress-value-percent) !important;
  background-color: var(--progress-value-color);
  border-radius: var(--border-radius);
}

progress[value]::after {
  display: flex;
  align-items: center;
  justify-content: center;
  --size: 35px;
  width: var(--size);
  height: 20px;
  position: absolute;
  left: var(--progress-value-percent);
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: var(--progress-value-color);
  border-radius: 10%;
  content: attr(value);
  content: var(--progress-value-string, var(--value));
  font-size: 12px;
  font-weight: 500;
  color: #fff;
}

@keyframes progress {
	from {
		--progress-value: 0;
	} to {
		--progress-value: var(--value);
	}
}
.navbar{
    display:none;
}
.ex-6-header{
padding-top:1rem;
}

.ex-6-header p {
    max-width: none;
}
.img-fluid{
    border-radius:1rem;
}
.contentinside{
		border: 2px solid orange;
    border-radius: 0.5rem;
    background-color: white;
	margin-right: 0px;
	margin-left: 0px;
	border-radius:0.5rem;
	}
    @media only screen and (max-width: 600px) {
		.ex-6-header p {
			max-width: 24rem;
    margin-right: auto;
    margin-left: auto;
}
}
</style>
<?php
if(isset($_SESSION['shortproduct'])){
    $drawingtext = $_SESSION['shortproduct'];
    $text = 'Capturing the portrait of your <span style="font-weight:600;color:#8e44ad;">'.$drawingtext.'</span> in art is only the beginning';
}else{
    $text = 'Capturing the portrait in art is only the beginning';
}

?>

 
    <!-- Header -->
    <header class="ex-6-header">
        <div class="header-content">
            <div class="container">
	
	<div class="row contentinside">
         <div class="col-lg-12 col-xl-12">
            <div style="margin-top: 15px;margin-bottom:15px;" class="row">
 
                    
					
                <div class="col-lg-12">
					<div class="row m-0 p-0 progress-phone" style="border:1px solid;border-color:#7dc443;border-radius:0.5rem;">
                        <div class="col-sm-4 col-4 m-auto" style="padding: 10px;font-weight:500;font-size: 12px;line-height: 15px;"><span style="font-weight:700;">STEP #1</span><br/>PAYMENT COMPLETE</div>
                        <div class="col-sm-4 col-4 m-auto" style="padding: 10px;background-color: #7dc443; color:white; font-weight:700;font-size: 12px;line-height: 15px;"><span style="font-weight:700;">STEP #2</span><br/>CUSTOMIZE ORDER</div>
                        <div class="col-sm-4 col-4 m-auto" style="padding: 10px;font-weight:500;font-size: 12px;line-height: 15px;"><span style="font-weight:700;">STEP #3</span><br/>ORDER COMPLETED</div>
                    </div>
					
                    <progress value="50" max="100" style="--value: 50; --max: 100;margin-top:25px;margin-bottom:25px;"></progress>	
                </div>
				
				<div class="col-lg-12 col-xl-12">
				
				<h2 style="margin-bottom: 24px;text-align:left;color:#ff0000;" class="h2-heading">One more step…</h2>
	<br><center>  <p><strong>	🚀 The Face of Your Future Awaits... <br>Uncover it Now! 🚀</strong></p> </center>
				<p style="margin-top: 5px;margin-bottom: 25px;text-align:left;color: #000;font-size: 18px;line-height: 1.4em;" class="card-title-prod">


<br> <p style="color:#FF0000";> <b>Hey Beautiful Seeker,</b> </strong></p>

<br> <p>The energy you've shared with me during your "When and Where" reading is vibrating with untold secrets and divine connection... and I, your Soulmate Healer, am simply mesmerized by the revelations awaiting you! </strong></p>

<br> <p style="color:#FF0000";> <b>**Imagine His Eyes Gazing into Yours...** </b></p>

<br> <p>Hold your breath, because what if I told you the man you’re destined to meet could be brought to life in front of your eyes? Yes, the very eyes that will gaze at you with unparalleled love, the smile that will melt your worries away... all of it, captured in a drawing that speaks the language of the stars. </strong></p>

<br> <p style="color:#FF0000";> <b>**Your Love Tale Deserves to be Seen!** </b></p>

<br> <p>Darling, your journey deserves to be more than whispers of the universe; it deserves to be a visual anthem, sung by every stroke of my pencil, revealing the face that will one day look into yours with endless love and affection. </strong></p>

<br> <p style="color:#FF0000";> <b>**Draw Him Near, Before Destiny Does...** </b></p>

<br> <p>Your story, embedded in the cosmos, is ready to cascade down into a visual masterpiece, a drawing that holds the mirror up to your future, reflecting the face of your impending love and joy. </strong></p>

<br> <p style="color:#FF0000";> <b>**🌹 Dive into His Eyes Today! 🌹** </b></p>

<br> <p>Why wait to lock eyes with destiny? Let the image of your future love companion your present moments, let his face be the gentle reminder that love is not just on its way... it’s already here, waiting to be unveiled. </strong></p>

	   
					    <div style="margin-bottom: 20px;background-color:#f8f1fd;" class="card-image">
                        <img class="img-fluid" src="/images/products/personal.png" style="width:450px;display:none;">
							<div style="padding:5px;margin-bottom:0px;">

						<h2 style="font-size: 40px;background:none;color:#FF0000;font-weight:800;margin-top:15px;line-height:30px;">$17 <br/><span style="opacity: 0.25;font-weight:500;font-size:20px;">$34</span></h2> 
						<p style="margin-top: -10px;">50% discount applied</p>

				<div style="margin-bottom: -8px;margin-top: -17px;font-size: 12px;;">
					<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
					<span style="font-size:11px;font-weight:600;"><?php echo $count; ?> reviews</span>
				</div>
				<br clear="all">
								<a href="https://www.digistore24.com/answer/yes?template=light" style="color: #fff;" class="blob purple">🔮 Unlock His Face Now! </a>
								<p></p>
							<br>	<a href="https://www.digistore24.com/answer/no" style="font-size: 18px;color:blue;" href="">No Thanks, I'll remain in the shadows of uncertainty</a>
								<p style="letter-spacing: -0.25px;font-size: 13px;line-height: 1.2;margin-top: 20px;">This special offer is only here and now. <span style="font-weight:600;">If you leave this page, you'll lose out on the chance to get the discount</span>. So, <span style="color:#8e44ad;font-weight:600;text-decoration:underline;">click the magic button now</span>!</p>
								
								<p style="letter-spacing: -0.25px;font-size: 12px;line-height: 1.2;margin-top: 20px;">
									<span style="color: #09c100;font-weight:700;">$</span> Get a 60 day money back guarantee if you aren't satisfied.
								</p>
							</div>
						</div>
						<br> <p> Your love story is my inspiration, and I’m here, ready to breathe life into the visual echo of your future husband. </strong></p>
                </div>
            </div>
         </div>
	</div>

<br clear="all">			
				
            </div>  
        </div>  
    </header> 
    <?php
    if($FirePixel == 1){
  $orderID = $_SESSION['fborderID'];
  $orderPrice = $_SESSION['fborderPrice'];
  $product = $_SESSION['fbproduct'];

$FBPurchasePixel = <<<EOT

<script>
fbq('init', '$FBPixel');
fbq('track', 'Purchase', {
  value: $orderPrice , 
  currency: 'USD',
  content_type: 'product', 
  content_ids: '$product'
}, 
{eventID: '$orderID'});
</script>


<!-- Twitter conversion tracking event code -->
<script type="text/javascript">
  // Insert Twitter Event ID
  twq('event', 'tw-ojcyv-ojcyw', {
    value: $orderPrice, // use this to pass the value of the conversion (e.g. 5.00)
    conversion_id: '$orderID' // use this to pass a unique ID for the conversion event for deduplication (e.g. order id '1a2b3c')
  });
</script>
<!-- End Twitter conversion tracking event code -->


EOT;

$_SESSION['fbfirepixel'] = 0;
}

?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>