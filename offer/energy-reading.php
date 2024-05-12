<?php
$title = "Special One-Time-Offer!";
$description = "Almost Complete...";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; 

$t_product_name = "energy";
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
	
	border-radius: 0.25rem;
	height: 2rem;
	font-weight: 600;
	font-size: 17px;
    padding: 8px 8px;	
	
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
	font-size: 22px;
    padding: 16px 8px;	
	
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
if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    $text = "Dear ".$name.",";
}else{
    $text = "";
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
					
                    <progress value="75" max="100" style="--value: 75; --max: 100;margin-top:25px;margin-bottom:25px;"></progress>	
                </div>
				
				<div class="col-lg-12 col-xl-12">
				
				<p style="margin-top: 5px;margin-bottom: 25px;text-align:left;color: #000;font-size: 18px;line-height: 1.4em;" class="card-title-prod">
<span style="font-weight:700;color:#0c6de5;font-size: 22px;"><?php echo $text; ?></span>
<br/><br/>
As the morning sun filters through the blinds, a myriad of thoughts flood your mind. How many times have you stood in front of the mirror, a coffee in hand, wondering if this month will be different? The face staring back, is she the woman who dreamed big? The one who believed love wasn’t just in fairy tales? The one who felt invincible and full of zest?
<br/><br/>
<b>Every day, you don the armor of a brave face</b> - but underneath, there's a storm of emotions and questions.
<br/><br/>
There's the longing of the heart. Another lonely dinner, another date that didn’t feel quite right. The unending wonder about when you'll find the love that resonates with your soul's song.
<br/><br/>
Then, the essence of well-being. Between the juggling act of relationships, perhaps kids, or your own self-reflection - when was the last time you listened to the subtle whispers of your body? Those moments of exhaustion, the nights of restless sleep... What if you could be alerted before you hit a wall, so you could take a moment to rejuvenate?
<br/><br/>
Every fleeting thought, every silent tear, every midnight pondering - <b>I see it all</b>. Because beyond the roles you play, at your core, you're a woman craving understanding, validation, and guidance.
<br/><br/>
Here's the truth - the universe sings a song just for you. And with my Monthly Personal Psychic Reading, we’ll tune into that melody. Together, we'll navigate the maze of emotions, desires, and challenges that every new month brings.
<br/><br/>
<b>I sense your innermost fears, your deepest desires</b>. Not as an outsider, but as someone who's attuned to your very essence. My Monthly Personal Psychic Reading is not just a service, it's a journey. A journey we embark on together, as I help you chart the course of your life's path.
<br/><br/>
<span style="font-weight:700;color:#f04040;font-size: 22px;">Navigating Tomorrow: Your Guided Journey Through the Month Ahead</span>
<br/><br/>
<span style="color:#0c6de5;font-weight:700;">Picture this</span>: You’re standing at the edge of a vast, misty forest. Each tree, each path represents a day in the upcoming month. Some trails are clear, while others are obscured by fog. Wouldn’t it be empowering to have a guide, a clear map of this forest, so you can navigate through with grace and foresight?
<br/><br/>
<span style="color:#0c6de5;font-weight:700;">A Clear Vision for What’s Ahead</span>: With my Monthly Personal Psychic Reading, you won't be wandering aimlessly. Instead, you'll walk with purpose, knowing which trails to tread and which to avoid. While many might stumble through the woods, you'll gracefully dance through the days ahead.
<br/><br/>
<span style="color:#0c6de5;font-weight:700;">Your Personal Life Hack</span>: Life will always throw challenges, but with my insights, you’re equipped with strategies for each one. It’s like having a secret weapon that turns challenges into opportunities.
<br/><br/>
<span style="color:#0c6de5;font-weight:700;">Deep Insights to Boost Your Path</span>: Delving deep into the heart of the month, my readings provide you with a playbook for life's curveballs. You don’t just survive the month; you thrive.
<br/><br/>
<span style="color:#0c6de5;font-weight:700;">Mastering Decision Making</span>: Those moments of indecision, the crossroads of life? I'll provide you with the clarity to discern when it's time to forge ahead or when patience will serve you better.
<br/><br/>
<span style="color:#0c6de5;font-weight:700;">Embracing Growth and Change</span>: Life is a series of changes and evolutions. With my guidance, you’ll identify areas ripe for growth and meet change head-on, ensuring you’re not caught off guard but instead, embrace it with open arms.
<br/><br/>
End the cycle of doubt and uncertainty. With my Monthly Personal Psychic Reading, you don't just predict the future; you're equipped to shape it. This isn't just a service; it's an invitation to a life led with clarity, insight, and unmatched foresight. A future where $19,99 seems a small price for peace of mind and the promise of a month filled with purpose.




				
				</p>
				   
					    <div style="margin-bottom: 20px;background-color:#ecf9fe;" class="card-image">
							<div style="padding:5px;margin-bottom:0px;">
							
						<p style="letter-spacing: -0.25px;font-size: 22px;line-height: 1.4em;margin-top: 10px;font-weight:500;">Unlock the Secrets of Your Upcoming Month: <span style="font-weight:700;">Embrace the Power of Insight for only $19.99/month</span></p>

				<div style="margin-bottom: -8px;margin-top: -17px;font-size: 12px;;">
					<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
					<span style="font-size:11px;font-weight:600;"><?php echo $count;?> reviews</span>
				</div>
				<br clear="all">
								<div class="blob blue"><a href="https://www.digistore24.com/answer/yes?template=light" style="text-decoration:none;color: #fff;text-transform:uppercase;" class="">🌟 YES!<br/><span style="font-size:13px;font-weight:400;">I Choose Clarity and Confidence!</span></a></div>
								<p></p>
								<a href="https://www.digistore24.com/answer/no" style="font-size: 12px;color:blue;" href="">I'll remain in the shadows of uncertainty</a>
								<p style="letter-spacing: -0.25px;font-size: 13px;line-height: 1.2;margin-top: 20px;">This special offer is only here and now. <span style="font-weight:600;">If you leave this page, you'll lose out on the chance to get the discount</span>. So, <span style="color:#0c6de5;font-weight:600;text-decoration:underline;">click the magic button now</span>!</p>
								
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