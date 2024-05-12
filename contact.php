<?php 
$title = "Contact Us | Soulmate Healer";
$description = "Need help with your order? send us a message!";
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
 <link rel="stylesheet" href="/css/faq.css">

    <!-- Header -->
    <header class="ex-6-header" style="min-height:80vh">
        <div class="header-content">
            <div class="container">
                <div class="row header-box">
                   <div class="col-sm-12 col-12">
					<div style="margin-top:0px;">
                   

                    <div class="row">
    <div class="col-sm-6">
        <div class="wrap-white">

            <h1  class="p-2">Frequently Asked Questions</h1>
    </div>
<link rel="stylesheet" href="/assets/css/faq.css">



<ul class="faq">
<div class="my-divider">
<li class="q"><i class="fas fa-chevron-right" aria-hidden="true"></i><span class="faq-question">Help, I can't access my order!</span></li>
<li class="a" style="display: none;">Before submitting a contact request, please make sure you first tried to login here <a href="/dashboard"> Dashboard </a> using your email address (in case the order was paid with PayPal, please use your PayPal email address)</li>
</div>
<div class="my-divider">
<li class="q"><i class="fas fa-chevron-right" aria-hidden="true"></i><span class="faq-question">What is the difference between a Soulmate and a Twin Flame?</span></li>
<li class="a">The main difference is the idea that twin flames are two halves of the whole, where soul mates are not. While twin flames are thought to be one soul split into two bodies, soul mates are simply two separate souls that are extraordinarily linked.</li>
</div>
<div class="my-divider">
<li class="q"><i class="fas fa-chevron-right" aria-hidden="true"></i><span class="faq-question">Do I end up with my soulmate or twin flame? </span></li>
<li class="a">You can end up with either your soulmate or your twin flame; it can go either way and will depend on your personal circumstances and relationship. Usually with twin flames, once the lesson is learned, you have accomplished the goal of the relationship.</li>
</div>
<div class="my-divider">
<li class="q"><i class="fas fa-chevron-right" aria-hidden="true"></i><span class="faq-question"> Will I Know My Soulmate?</span></li>
<li class="a">Many people have found that their sketch resembles someone that is currently close in their life, their current significant other / partner, or someone they admire or have feelings for.</li>
</div>
<div class="my-divider">
<li class="q"><i class="fas fa-chevron-right" aria-hidden="true"></i><span class="faq-question">How Fast Can I Get My Sketch and Reading?</span></li>
<li class="a"> Your high quality sketch and reading will be delivered to you via email within 12, 24 or 48 hours, depending which order priority you have chosen while placing your order. </li>
</div>
<div class="my-divider">
<li class="q"><i class="fas fa-chevron-right" aria-hidden="true"></i><span class="faq-question">What is Included with My Sketch?</span></li>
<li class="a"> In addition to the sketch, you will receive a complete description of characteristics and qualities of this person that will help you connect with them.</li>
</div></ul><script>
// Accordian
var action="click";
var speed="500";

$(document).ready(function() {
    // Question handler
    $('li.q').on(action, function() {
        // Get next element
		$(this).toggleClass("remove-radius");
        $(this).next().slideToggle(speed).siblings('li.a').slideUp();
		$(this).find("i").toggleClass("rotate");
    });
});
</script>

  </div>
<div class="col-sm-6">
<div class="wrap-white">


            <h1 class="p-2">Send us a Message!</h1>

			<div id="sb-tickets"></div>
 </div>
 <div class="wrap-white">
	<div class="contact_form">
    <form id="ajax-contact" data-toggle="validator" data-focus="false">
								<div class="form-group">
									<input type="text" class="form-control-input" name="name" id="sname" required>
									<label class="label-control" for="sname">Name*</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control-input" name="email" id="semail" required>
									<label class="label-control" for="semail">Email*</label>
									<div class="help-block with-errors"></div>
								</div>

                                <div class="form-group">
									<input type="text" class="form-control-input" name="order" id="order">
									<label class="label-control" for="order">Order ID</label>
									<div class="help-block with-errors"></div>
								</div>
							
                                <div class="form-group">
									<textarea class="form-control-input" id="message" name="message" ></textarea>
									<label class="label-control" for="message">Message*</label>
									<div class="help-block with-errors"></div>
								</div>

								
								<div id="showmessage" class="alert alert-success" role="alert" style="display:none;"></div>
                    
							
								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">Send a Message <i class="fa-solid fa-arrow-right"></i></button>
								</div>
								
							
							</form>
	</div>
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

    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>			