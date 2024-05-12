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
    line-height: 16px;
    border-radius: 0.25rem;
    height: 4rem;
    font-weight: 600;
    font-size: 18px;
    padding: 12px 8px;
    text-decoration: none;
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
				
				<h2 style="margin-bottom: 24px;text-align:left;color:#8e44ad;" class="h2-heading">Discover the Chronicles of YOUR Life... Through My Eyes</h2>
		
				<p style="margin-top: 5px;margin-bottom: 25px;text-align:left;color: #000;font-size: 18px;line-height: 1.4em;" class="card-title-prod">
<span style="font-weight:600;color:#f04040;font-size: 22px;">Let's delve deeper into the core chapters of your life.</span>
<br/><br/>
<?php echo $text; ?>. Your essence, your story, your journey - they're rich, multidimensional, and deserve intricate exploration.
<br/><br/>
I invite you to go a level deeper with a multi-layered, profoundly intimate <span style="font-weight:600">Psychic Reading - delivered</span>, of course, in my unique, tested, and trusted style that countless clients (and celebrities!) have raved about.
<br/><br/>
<i class="fas fa-brain" style="color: #f5b832;"></i> <span style="font-weight:700;color:#8e44ad;">General Insight</span>: We all have questions. "<span style="font-weight:600"><em>Why did that opportunity slip away?</em></span>" "<span style="font-weight:600"><em>What's my purpose here?</em></span>" My in-depth analysis will tap into the synchronicities of your life.
<br/><br/>
While many are content with surface-level insights, our journey together will unearth the deep-seated rhythms, patterns, and energies guiding your every step.
<br/><br/>
It's not about vague predictions, but about understanding the intricate dance of circumstances that shape your life.
<br/><br/>
<i class="fas fa-heart" style="color: #ec4141;"></i> <span style="font-weight:700;color:#8e44ad;">Love Reading</span>: Love, in all its complexities, is a force that defines us. I’ll guide you through your romantic timeline, clarifying the choices you've made, the connections you've fostered, and the potential futures awaiting you.
<br/><br/>
Whether it’s understanding a past love, strengthening a current bond, or preparing for a future relationship, my insights will provide clarity, ensuring your heart is in the right place.
<br/><br/>
<i class="fas fa-heartbeat" style="color: #3679ec;"></i> <span style="font-weight:700;color:#8e44ad;">Health Guidance</span>: Health is more than just the absence of illness; it's a symphony of mind, body, and soul. Together, we'll decode the messages your body sends, recognizing the emotional and spiritual strains that might be manifesting physically.
<br/><br/>
Discover how to nurture yourself holistically, ensuring vitality in every facet of your being.
<br/><br/>
<span style="font-weight:600;font-size: 22px;color:#8e44ad;">Right now, I’m offering you this personalized reading at an exclusive <span style="font-weight:700;color:#f04040;">50% DISCOUNT</span>!</span>
<br/><br/>
This isn’t just a service; it’s a partnership. It's my hand extended to you in your journey of discovery.
				
				</p>
				   
					    <div style="margin-bottom: 20px;background-color:#f8f1fd;" class="card-image">
                        <img class="img-fluid" src="/images/products/personal.png" style="width:450px;display:none;">
							<div style="padding:5px;margin-bottom:0px;">

						<h2 style="font-size: 40px;background:none;color:#000;font-weight:800;margin-top:15px;line-height:30px;">$23<br/></h2> 
						<p style="margin-top: -10px;">50% discount applied</p>

				<div style="margin-bottom: -8px;margin-top: -17px;font-size: 12px;;">
					<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
					<span style="font-size:11px;font-weight:600;"><?php echo $count; ?> reviews</span>
				</div>
				<br clear="all">
                <a href="https://www.digistore24.com/answer/yes?template=light" style="text-decoration:none;color: #fff;text-transform:uppercase;" class="">
                                <div class="blob purple">
                               
                                ✨ YES!<br>
                                <span style="font-size:13px;font-weight:400;">I Want My Personal Psychic Reading</span>
                                </div></a>


								<p></p>
							<br>	<a href="https://www.digistore24.com/answer/no" style="font-size: 18px;color:blue;" href="">No Thanks, I'll remain in the shadows of uncertainty</a>
								<p style="letter-spacing: -0.25px;font-size: 13px;line-height: 1.2;margin-top: 20px;">This special offer is only here and now. <span style="font-weight:600;">If you leave this page, you'll lose out on the chance to get the discount</span>. So, <span style="color:#8e44ad;font-weight:600;text-decoration:underline;">click the magic button now</span>!</p>
								
								<p style="letter-spacing: -0.25px;font-size: 12px;line-height: 1.2;margin-top: 20px;">
									<span style="color: #09c100;font-weight:700;">$</span> Get a 60 day money back guarantee if you aren't satisfied.
								</p>
							</div>
						</div>
                </div>
            </div>
         </div>
	</div>

<br clear="all">			
				
            </div>  
        </div>  
    </header> 

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>