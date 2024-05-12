<?php 
$t_product_name = "TWIN FLAME";
$t_product_form_name = "twinflame";
$title = "Twin Flame | Soulmate Healer";
$description = "I will draw your Twin Flame with 100% accuracy";

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<?php


$lower = strtolower($t_product_name);
$sql = "SELECT * FROM review_total WHERE product = '".$t_product_form_name."'";
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
                                <img class="img-fluid" src="/images/twin-flame-01.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div id="order"  class="col-lg-6 col-xl-5">
						<div class="header-box">
                        <h1 style="margin-top: 10px;">Your Twin Flame Psychic Drawing</h1>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> reviews</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Order now, receive within 6 hours
						</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">$29</h2>  
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">$299</h2> 
						<p style="">You save <span class="saveda"><b>$270</b> (90%)</span></p>
						</div>
						
						

						<div class="form-container">
						<p style="text-align:center;margin-top: -20px;font-size: 15px;">Fill in the form below to book your reading!</p>
                        <form id="ajax-form" class="form-order" name="order_form" action="javascript:void(0)" method="post">
								<div class="form-group">
									<input type="text" class="form-control-input" id="sname" name="form_name" required>
									<label class="label-control" for="sname">Full Name</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control-input" id="semail" name="form_email" required>
									<label class="label-control" for="semail">Email Address</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
                                <div class="form_box">
                                    <div style="text-align:start;">Your Birth Date</div>
                                    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/date.php'; ?>
                                </div>
									<div class="help-block with-errors"></div>
								</div>
                                <div style="text-align:start;">Delivery Priority:</div>
                                <div class="form_box input-group form-group" style="    padding-bottom: 52px;">
  
                                    <input id="prio1" type="radio" name="priority" value="1">
                                    <label for="prio1"><span><i style="color:#ffaf00;" class="fas fa-bolt" aria-hidden="true"></i>1h</span></label>
                                    
                                    <input id="prio24" type="radio" name="priority" value="24">
                                    <label for="prio24"> <span><i style="color:#c19bff;" class="fas fa-stopwatch" aria-hidden="true"></i>24h</span></label>
                                    
                                    <input id="prio48" type="radio" name="priority" value="48" checked="true">
                                    <label for="prio48"> <span><i  class="fas fa-clock" aria-hidden="true"></i>48h</span></label>
                                </div>

                            <input class="product" type="hidden" name="product" value="twinflame">

                            <input class="fbproduct" type="hidden" name="fbSource" value="<?php echo $_SESSION['fbSource']; ?>">
                            <input class="fbproduct" type="hidden" name="fbCampaign" value="<?php echo $_SESSION['fbCampaign']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAdset" value="<?php echo $_SESSION['fbAdset']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAd" value="<?php echo $_SESSION['fbAd']; ?>">
                            <div id="error" class="alert alert-danger" style="display: none"></div>

								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">PLACE AN ORDER <i class="fa-solid fa-arrow-right"></i></button>
								</div>
								
								<img style="width: 100%;" src="/images/payment-icons.webp">
								<p style="font-size:12px;margin-top:7px;margin-bottom: -10px;"><img style="width: 100%;max-width: 28px;padding: 3px;" src="/images/tarot-cards.png">Only accepting 4 more orders for today! <i class="fa-solid fa-fire-flame-curved"></i> 27 Sold</p>
								
							</form>
						</div>
								<br clear="all">
                    </div>  
                </div> 
				
				
                <div style="background-color:#f5f5f5;margin-right: 0px;margin-left: 0px;border-radius:0.5rem;" class="row">
         <div class="col-lg-12 col-xl-12">
            <div style="margin-top: 15px;margin-bottom:15px;" class="row">
                <div class="col-lg-6">
                <div class="text-container">
                        <h2>TWIN FLAME PSYCHIC DRAWING</h2>
							<p><b> <center> <FONT COLOR="#d9480d"> DISCOVER YOUR DIVINE MIRROR </FONT> </b> </center> </p>
<div class="flex flex-grow flex-col gap-3 max-w-full">
    <div class="min-h-[20px] flex flex-col items-start gap-3 overflow-x-auto whitespace-pre-wrap break-words">
        <div class="markdown prose w-full break-words dark:prose-invert light">
		
             <p>Unearth the most intimate and powerful connection the universe has to offer with the &quot;Twin Flame Psychic Drawing.&quot; Your twin flame isn&rsquo;t merely a love connection but an echo of your own soul, resonating through time and space. With this service, you&apos;re not just discovering a partner, but a part of yourself.</p>
          <br>   <p>The portraits I create are not mere sketches; they are a conduit to the ethereal realm. Drawing upon a blend of heightened clairvoyance, deep spiritual alignment, and unparalleled artistry, I weave the tale of two souls destined to cross paths. Your twin flame is out there, and I&apos;m here to help you visualize and connect with them.</p>
          <br>   <p>To embark on this cosmic journey, I require just your name and date of birth. From there, I delve into the universe&apos;s vast tapestry, seeking the other half of your soul. The canvas comes alive under my touch, revealing not just the features of your twin flame, but the energy, essence, and emotions they carry. More than a mere portrait, this drawing becomes a beacon, guiding you closer to your other half.</p>
           <br>  <p>The revelation of your twin flame is an experience of profound awakening. With them, you&rsquo;ll find more than love; you&rsquo;ll discover a bond that transcends lifetimes, filling your present with passion, purpose, and unparalleled understanding.</p>
           <br>  <p>Beyond the drawing, I offer insights into the dance of your souls. Understand the paths you&apos;ve walked, the lessons you&apos;re meant to learn together, and the moments when your energies will align in perfect harmony.</p>
            <br> <p>Many have turned to me, seeking to uncover the mysteries of their twin flame connection. From renowned figures to those on personal spiritual journeys, the magic of my insights has guided countless souls towards their cosmic counterpart. When you choose the &quot;Twin Flame Psychic Drawing,&quot; you&apos;re embarking on a journey of unparalleled spiritual intimacy and revelation.</p>
           <br>  <p><strong>OUR SACRED PACT: Your Trust, Honored</strong></p>
             <p>Should my visions not align with the universe&apos;s unfolding within the specified timeframe, I promise a complete refund, maintaining the sanctity of our spiritual bond.</p>
           <br>  <p><strong>PRIVACY GUARANTEED: Digital Delivery with Discretion</strong></p>
            <p>Your drawing and insights will be securely dispatched to your designated email, ensuring complete confidentiality. Your journey, while shared with the universe, remains a cherished secret between us.</p>
        </div>
    </div>
</div>

<br>
<br>
<br>			  
			  <h2>Twin Flames: What They Are</h2>
<br>
<p>A <strong>Twin Flame</strong> is a concept rooted in spiritual and metaphysical beliefs, representing a unique, deep connection between two souls. It&apos;s often described as a single soul that has split into two before entering human experiences. Here are some key points about the twin flame belief:</p>
<br> <p><strong>Soul Connection</strong>: Twin flames are often seen as two halves of the same soul. They are thought to come together across various lifetimes in different roles, seeking unity.</p>
<br> <p><strong>Intense Bond</strong>: The connection between twin flames is said to be intense and immediate. This isn&apos;t just romantic; twin flames can also be friends, family, or even adversaries in some lifetimes.</p>
<br> <p><strong>Purpose</strong>: Twin flames come together for a higher purpose, often related to spiritual growth and ascension. They challenge each other and provide mutual growth opportunities, working through karmic issues and evolving spiritually.</p>
<br> <p><strong>Challenging Relationships</strong>: Twin flame relationships can be deeply challenging and tumultuous. Their purpose is often to bring up and confront deep-seated issues, fears, and desires to help both individuals evolve.</p>
<br> <p><strong>Stages</strong>: Many believe that twin flame relationships go through stages, from yearning and recognition to struggles, and finally, union or reunion. Not all twin flame relationships reach the union stage in every lifetime.</p>
<br> <p><strong>Difference from Soulmates</strong>: While both terms denote profound connections, they&apos;re not synonymous. Soulmates are deeply harmonious and supportive connections, but a person can have multiple soulmates in a lifetime. Twin flames, on the other hand, refer to that single &quot;other half.&quot;</p>
<p>&nbsp;</p>
<p>It&apos;s essential to approach the concept of twin flames with an open mind. While many people find comfort and profound meaning in this belief, others may see it differently. Always trust your intuition and personal experiences when it comes to such spiritual concepts.</p>
<p>&nbsp;</p>

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

                    <div class="col-12">
                    <div class="image-container" style="display:inline-block;width:49%;">
                        <img class="img-fluid" src="/images/yey3.jpg" alt="alternative" style="border-radius: 0.5rem;">
                    </div> 
                    <div class="image-container" style="display:inline-block;width:49%;">
                        <img class="img-fluid" src="/images/yey1.jpg" alt="alternative" style="border-radius: 0.5rem;">
                    </div> 
                    </div> 
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
        jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$59').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$599').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$540</b> (90%)').animate({'opacity': 1}, 400);});	
    }
    if (this.value == '24') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$39').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$399').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$360</b> (90%)').animate({'opacity': 1}, 400);});
    }
    if (this.value == '48') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$29').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$299').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$270</b> (90%)').animate({'opacity': 1}, 400);});
    }
})
</script>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>