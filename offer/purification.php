<?php
$title = "Special One-Time-Offer!";
$description = "Almost Complete...";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; 

$t_product_name = "purification";
$lower = strtolower($t_product_name);
$sql = "SELECT * FROM review_total WHERE product = '".$t_product_name."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row['reviews'];

$newDate = date('F');
  
?>
<script src="https://www.digistore24.com/service/digistore.js"></script><script>digistoreUpsell()</script>

<style>
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
	font-size: 18px;
    padding: 12px 8px;	
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
.footer-guarantee{
        display:none;
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
					
                    <progress value="100" max="100" style="--value: 100; --max: 100;margin-top:25px;margin-bottom:25px;"></progress>	
                </div>
				
				<div class="col-lg-12 col-xl-12">
				
				<p style="margin-top: 5px;margin-bottom: 15px;text-align:left;color: #000;font-size: 18px;line-height: 1.4em;" class="card-title-prod">
<span style="font-weight:700;color:#000;font-size: 22px;">🪄 Exclusive Psychic Purification: <span style="color:#f04040;font-size: 26px">Only a 3rd Generation <u>Healer Can Unlock</u></span></span>
<hr>
				</p>
				<p style="margin-top: 5px;margin-bottom: 25px;text-align:left;color: #000;font-size: 18px;line-height: 1.4em;" class="card-title-prod">
<span style="font-weight:700;color:#0c6de5;font-size: 22px;">Dear cherished soul 😇</span>
<br/><br/>
In our intricate journey of life, often unforeseen forces and past traumas shadow our radiant spirit, creating blockages that obstruct our true destiny. Such barriers can cloud our perception, hinder our potential, and anchor us in a cycle of despair.
<br/><br/>
Yet, today, you stand on the cusp of a unique revelation. An opportunity so rare, so transformative, that it can profoundly alter the trajectory of your life's voyage. I present to you the exclusive <b>Cleansing & Purification Ritual</b>. As a 3rd Generation Healer, I have been bestowed with the rare skills and knowledge to perform this sacred purification, a ritual that has been protected and passed down through generations.
				</p>
<hr>
<span style="font-weight:700;color:#f04040;font-size: 22px;">🌟 Illuminate Your Path: <span style="color:#6b3b7f;">The Ultimate Psychic Purification Ritual</span></span>
<hr>
				<p style="margin-top: 5px;margin-bottom: 25px;text-align:left;color: #000;font-size: 18px;line-height: 1.4em;" class="card-title-prod">
<span style="font-weight:700;color:#0c6de5;font-size: 22px;">Why is this purification so vital for you?</span><br/><br/>
✅ <b>Unlocking True Potential</b>: Within you lies an untouched reservoir of energy, aspirations, and love. This purification will dissolve the chains that have kept you away from realizing and achieving your dreams.<br/><br/>
✅ <b>Soulful Clarity</b>: Experience an unprecedented clarity of thought and action. Understand the crossroads of life, make choices that resonate with your soul's purpose, and move forward with unmatched confidence.<br/><br/>
✅ <b>Harmony of Mind, Body, and Soul</b>: Realign your energies. Feel the serene balance as your mental, physical, and spiritual selves come into harmonious alignment.<br/><br/>
✅ <b>Personal Evolution</b>: Embrace a transformative journey where each day becomes a step towards personal growth, understanding, and enlightenment.<br/><br/>
✅ <b>Deep Emotional Healing</b>: Release past traumas, mend broken bonds, and heal deep-seated emotional wounds. Revel in the newfound freedom and joy that emerges.<br/><br/>
✅ <b>Cultivating Inner Strength</b>: Activate the warrior spirit within you. Conquer challenges, face adversities with courage, and weave a tapestry of life filled with achievements and love.
				</p> 
<hr>
<span style="font-weight:700;color:#f04040;font-size: 22px;">✨ Delving Deep: <span style="color:#6b3b7f;">The Essence of Psychic Purification</span></span>
<hr>
				<p style="margin-top: 5px;margin-bottom: 25px;text-align:left;color: #000;font-size: 18px;line-height: 1.4em;" class="card-title-prod">
<span style="font-weight:700;color:#0c6de5;font-size: 22px;">Ancestral Art of Soul Cleansing</span>
<br/><br/>
◦ <span style="background-color:#ffe8e8;padding:2px 4px;color:#000;border-radius:4px">The Psychic Purification</span> process is a sacred, time-honored ritual, passed down through generations of skilled psychic healers. Its roots trace back to ancient cultures where shamans and spiritual leaders would invoke the cosmic energies to cleanse and purify the soul, reconnecting individuals to their true purpose.
<br/><br/>
◦ <b>To initiate the purification</b>, I first establish a profound connection with your aura, which allows me to discern any imbalances, blockages, or energy disturbances present. These are often the result of traumatic events, unresolved emotions, or negative experiences from your past that have left an indelible mark on your spiritual self.
<br/><br/>
◦ Once identified, I channel a unique blend of energies derived from the celestial realm and the natural world to methodically address each concern. Every session employs the sanctity of holy water from the Vatican, which has been used for centuries in rituals and ceremonies for its potent purifying properties. I also utilize gold bars, a symbol of purity and value, to amplify the cleansing power.
<br/><br/>
◦ These bars serve as conduits, drawing in negative energy and transmuting it into positive, radiant energy. Interspersed in the ritual are pink roses, a representation of unconditional love and harmony, which help rekindle your connection with the universe and instill a sense of peace and balance.
<br/><br/>
<span style="font-weight:700;color:#0c6de5;font-size: 22px;">👉 From Renewal to Rebirth: The Transformative Power of Purification</span>
<br/><br/>
◦ But the process isn't just about removing blockages; it's also about empowerment and transformation. As the purification unfolds over five days, you will undergo a metamorphosis, experiencing shifts in perception, heightened intuition, and a newfound clarity. The culmination of the ritual sees a rejuvenated soul, ready to embrace life's opportunities, free from past burdens and imbued with a vigor that propels you toward your destiny.
<br/><br/>
◦ This profound transformation is testament to the intricate, labor-intensive, and deeply personal nature of the Psychic Purification process, which demands nothing less than total dedication, vast knowledge, and unwavering commitment.
<br/><br/>
◦ <b>In just 5 days</b>, after the completion of this ritual, you will receive a detailed revelation and guidance, tailored exclusively for you. It will be a beacon, illuminating the path ahead, ensuring that you step into the world with a rejuvenated spirit, ready to embrace the treasures of life with open arms.
<br/><br/>
🥰 However, remember, such transformative opportunities do not knock often. This exclusive ritual, reserved for those who truly seek profound change, <span style="font-weight:700;color:#f04040;">is available to you now for $149</span>!
				</p>
<hr>
<span style="font-weight:700;color:#f04040;font-size: 22px;">🫣 Wait Another Year or Act Today?  <span style="color:#6b3b7f;">The Choice is Yours!</span></span>
<hr>
				<p style="margin-top: 5px;margin-bottom: 25px;text-align:left;color: #000;font-size: 18px;line-height: 1.4em;" class="card-title-prod">
<span style="font-weight:700;color:#0c6de5;font-size: 22px;">Your Unique Chance to Unlock Purification</span>
<br/><br>
<b>For <?php echo $newDate; ?> only</b>, I'm opening the doors to our exclusive Purification service. <em>It's a rare chance, one that won't come around again until <?php echo $newDate; ?> 2024</em>.
<br/><br/>
Seize this unique opportunity or be prepared to wait another long year. <span style="color:#f04040;">Don't live with regret — <b>ACT NOW</b></span>!
				</p>
				   
					    <div style="margin-bottom: 20px;background-color:#ecf9fe;" class="card-image">
							<div style="padding:5px;margin-bottom:0px;">
							
								<p style="font-size: 20px;line-height: 1.3;margin-top: 20px;">
The depth of our <b>Psychic Purification</b> is vast, demanding my utmost dedication and rare sacred materials. <b>Its value stands at $2000</b>, reflecting the energy and resources invested. However, understanding the need of wandering souls, <b>I've reduced this transformative service to just <u>$149</u> for a limited time</b>!
								</p>
								
				<div style="margin-bottom: -8px;margin-top: -17px;font-size: 12px;;">
					<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
					<span style="font-size:11px;font-weight:600;"><?php echo $count; ?> reviews</span>
				</div>
				<br clear="all">
				<a href="https://www.digistore24.com/answer/yes?template=light" style="text-decoration:none;color: #fff;text-transform:uppercase;" class=""><div class="blob blue">✨ YES!<br/><span style="font-size:13px;font-weight:400;">I embrace transformation and healing!</span></div></a>
								<p></p>
								<a href="https://www.digistore24.com/answer/no" style="font-size: 12px;color:blue;" href="">I'm not ready for this transformative journey yet</a>

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