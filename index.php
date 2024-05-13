<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
$t_product_name = "SOULMATE";
$t_product_form_name = "soulmate";
$title = "Disegno dell'anima | Guaritore dell'anima";
$description = "Disegnerò il tuo ANIMA GEMELLA con una precisione del 100%";



$PRurl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]".strtok($_SERVER["REQUEST_URI"],'?');

$productMETA = <<<EOT
    <!-- Meta Catalog Tags --> 
    <meta property="og:url" content="$PRurl" />
    <meta property="og:type" content="website" />

    <meta property="product:brand" content="Soulmate Healer">
    <meta property="product:availability" content="in stock">
    <meta property="product:condition" content="new">
    <meta property="product:price:amount" content="29">
    <meta property="product:price:currency" content="USD">
    <meta property="product:retailer_item_id" content="$t_product_form_name">


EOT;

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<?php

$lower = strtolower($t_product_name);
$sql = "SELECT * FROM review_total WHERE product = '".$t_product_name."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row['reviews'];


?>
    <!-- Header -->
    <header class="ex-6-header">
        <div class="header-content">
            <div class="container">
                <div class="row">
	
                   <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="/images/yey1.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div class="col-lg-6 col-xl-5">
						<div class="header-box" id="order" >
                        <h1 style="margin-top: 10px;">Il disegno psichico del tuo animo gemello</h1>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> reviews</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Precisione<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Garanzia di soddisfazione al 100%<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Ordina ora, ricevi entro 1 ora</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">€19</h2>  
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">€59</h2> 
						<p style="display:none;">You save <span class="saveda"><b>€270</b> (90%)</span></p>
						</div>
						
						

						<div class="form-container">
						<p style="text-align:center;margin-top: -20px;font-size: 15px;">Pronto per avere chiarezza? Inizia la tua esperienza compilando il modulo qui sotto:</p>
                        <form id="ajax-form" class="form-order" name="order_form" action="javascript:void(0)" method="post">
								<div class="form-group">
									<input type="text" class="form-control-input" id="sname" name="form_name" oninvalid="setCustomValidity('Please enter Full Name without numbers or symbols!')" title="Please enter Full Name without numbers or symbols!" pattern="[a-zA-Z][a-zA-Z\s]*" required>
									<label class="label-control" for="sname">Nome completo</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control-input" id="semail" name="form_email" required>
									<label class="label-control" for="semail">Indirizzo email</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
                                <div class="form_box">
                                    <div style="text-align:start;">La tua data di nascita</div>
                                    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/date.php'; ?>
                                </div>
									<div class="help-block with-errors"></div>
								</div>
                                <div style="text-align:start;">Priorità di consegna:</div>
                                <div class="form_box input-group form-group" style="    padding-bottom: 52px;">
                                
                                    <input id="prio1" type="radio" name="priority" value="1">
                                    <label for="prio1"><span><i style="color:#ffaf00;" class="fas fa-bolt" aria-hidden="true"></i>1 ora</span></label>
                                    
                                    <input id="prio24" type="radio" name="priority" value="24">
                                    <label for="prio24"> <span><i style="color:#c19bff;" class="fas fa-stopwatch" aria-hidden="true"></i>24 ore</span></label>
                                    
                                    <input id="prio48" type="radio" name="priority" value="48" checked="true">
                                    <label for="prio48"> <span><i  class="fas fa-clock" aria-hidden="true"></i>48 ore</span></label>
                                </div>

                            <input class="product" type="hidden" name="product" value="soulmate">
                      
                            <input class="fbproduct" type="hidden" name="fbSource" value="<?php echo $_SESSION['fbSource']; ?>">
                            <input class="fbproduct" type="hidden" name="fbCampaign" value="<?php echo $_SESSION['fbCampaign']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAdset" value="<?php echo $_SESSION['fbAdset']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAd" value="<?php echo $_SESSION['fbAd']; ?>">
                            
                            <div id="error" class="alert alert-danger" style="display: none"></div>

								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">EFFETTUTA IL TUO ORDINE<i class="fa-solid fa-arrow-right"></i></button>
								</div>
								
								<img style="width: 100%;" src="/images/payment-icons.webp">
								<p style="font-size:12px;margin-top:7px;margin-bottom: -10px;"><img style="width: 100%;max-width: 28px;padding: 3px;" src="/images/tarot-cards.png">Accetto solo un altro ordine per oggi! <i class="fa-solid fa-fire-flame-curved"></i> 4 venduti</p>
								
							</form>
                            <script>


  

  </script>
						</div>
								<br clear="all">
                    </div>  
                </div> 
				
				
	<div style="background-color:#f5f5f5;margin-right: 0px;margin-left: 0px;border-radius:0.5rem;" class="row">
         <div class="col-lg-12 col-xl-12">
            <div style="margin-top: 15px;margin-bottom:15px;" class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>PSYCHIC DRAWING OF YOUR SOULMATE</h2>
						<br> <p style="color:#d9480d;text-align:center;"><b>💕 Dear Beautiful Soul, 💕</b></p>
 <p>Are you weary of the relentless pursuit of love? Longing for a connection that speaks to your soul and a companion that’s truly destined for you?    </p> 
 <p>  I am The Soulmate Healer, and I’m here to unveil the mysteries of your heart, to guide you to a love that’s beyond imagination, a love that’s exclusively yours. </p> 
<br><p style="color:#d9480d;text-align:center;"><b> 🌟 What is a Soulmate Drawing? 🌟 </b> </p>
 <p> A Soulmate Drawing is your personal gateway to the future. It’s not just a portrait; it’s the revelation of your destined companion, combined with my psychic insights and artistic talents to bring you closer to your destined love. It's a mirror reflecting the true essence of your heart and the person who’s bound to complete you.  </p> 
 <br><p style="color:#d9480d;text-align:center;"> 🌷 Feel Seen, Feel Understood… 🌷 </b></p>
<p>  Ever feel alone in a crowd, like no one really gets you? You laugh, you talk, but inside, you're asking, “Where’s the one who really sees me? Who gets the real me?” We all want someone who knows our story, who understands our silence, who makes us feel we belong.</p> 
<p>Imagine finally meeting someone who gets your jokes, who knows your favorite songs, who can make you smile just by being there. Imagine having a buddy, a pal, someone to share your dreams and your worries with. Someone who knows you, the real you, and loves you because of it, not in spite of it.  </p> 
<p>  This isn’t just about finding love. It’s about finding your other half, your true buddy, who makes you feel whole, understood, and truly at home. It’s about feeling seen, feeling loved, for who you really are.</p> 
<p> I’m here to help you find this friend, this <b> soulmate</b>. I’ll draw them for you, and I’ll tell you how you’ll meet them. Your soulmate isn’t just someone to love; they’re your best friend, your partner in crime, your shoulder to lean on. So, are you ready to meet the one who’ll dance through life with you, laughing all the way? </p> 

 <br><p style="color:#d9480d;text-align:center;"><b> 💖 Your Journey to Self-Discovery… 💖 </b></p>
 <p> Meet not just a partner, but a soul who will guide you towards profound self-discovery and deeper understanding. This transformative encounter is your opportunity to bloom and to experience emotional and spiritual growth like never before.  </p> 
 <br><p style="color:#d9480d;text-align:center;"><b> 💖 Your Happiness, Guaranteed! 💖 </b>  </p>
 <p>  Your happiness is my mission! If your soulmate drawing doesn’t bring you the joy and clarity you hoped for, just reach out. I’ll refund every penny immediately, no questions, no hassle! It’s all about your peace of mind and heartfelt satisfaction! </p> 

 <br><p> <b>💠 Please Note: </b> This is a digital delivery product sent straight to your email. No physical items will be sent to your home, allowing for a quick and seamless experience!  </p> 
</div>  
                </div>

                <!--IMAGE ON THE RIGHT FOR PC DISPLAY -->
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image-container" style="margin-top:15px;">
                        <img class="img-fluid" src="/images/yey.jpg" alt="alternative" style="border-radius: 0.5rem;">
                    </div> 
                    <div class="image-container" style="margin-top:15px;">
                        <img class="img-fluid" src="/images/yey1.jpg" alt="alternative" style="border-radius: 0.5rem;">
                    </div> 
                    <div class="image-container" style="margin-top:15px;">
                        <img class="img-fluid" src="/images/yey3.jpg" alt="alternative" style="border-radius: 0.5rem;">
                    </div> 
                </div>

                <!--IMAGE BELLOW THE TEXT IN PHONE DISPLAY -->
                <div class="d-block d-lg-none row" style="padding-right: 15px;padding-left: 15px;">

                   
                
                    <div class="col-12" style="margin-top:15px;">
                    <div class="image-container">
                        <img class="img-fluid" src="/images/yey.jpg" alt="alternative" style="border-radius: 0.5rem;">
                    </div> 
                    </div> 
                </div>
                
                <div class="col-lg-12">
                
				<br><a style="width:100%;text-align:center;" class="btn-solid-reg" href="#order">ORDER YOUR</a>
                <br clear="all"> <br clear="all">
                <p> <b> You are fully protected by the 100% satisfaction guarantee! </b> 
				If for any reason, or no reason at all, you're not 100% satisfied with what's inside, simply send me an email and I'll refund every penny of your order cost. </p> 
				 <p> <center> <strong>  <FONT COLOR="#d9480d">  Pictures from customers:  </FONT> </strong><center>  </p> 
                 </div> 

                 <!-- CUSTOMER REVIEWS IMAGE -->
                 <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="/images/scs.jpg" alt="alternative">
                    </div> 
                </div> 

			</div>
         </div>
	</div>


<br/>	
	
	<div style="background-color:#f5f5f5;margin-right: 0px;margin-left: 0px;border-radius:0.5rem;" class="row">
         <div class="col-lg-12 col-xl-12">
            <div style="margin-top: 15px;margin-bottom:15px;" class="row">
			
			<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/review-total.php'; ?>
			
            <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/reviews.php'; ?>
			
			
            </div>
         </div>
	</div>
    <br>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/allproducts.php'; ?>

<br clear="all">			
				
            </div>  
        </div>  
    </header>  

    <script>
jQuery('input[name="priority"]').change(function(){
    if (this.value == '1') {
        jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('€39').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('€129').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$540</b> (90%)').animate({'opacity': 1}, 400);});	
    }
    if (this.value == '24') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('€29').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('€89').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$360</b> (90%)').animate({'opacity': 1}, 400);});
    }
    if (this.value == '48') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('€19').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('€59').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$270</b> (90%)').animate({'opacity': 1}, 400);});
    }
})
</script>

    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>
    <script>
  fbq('track', 'Schedule');
</script>