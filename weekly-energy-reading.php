<?php 
$t_product_name = "energyw";
$t_product_form_name = "energyw";
$title = "Weekly Energy Reading | Soulmate Healer";
$description = "I will provide you with your weekly energy reading";

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
                                <img class="img-fluid" src="/images/products/energy.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div class="col-lg-6 col-xl-5">
						<div class="header-box">
                        <h1 style="margin-top: 10px;">Personalised Weekly Energy Reading</h1>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> reviews</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Order now, receive within 24 hours
						</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">$8.99 <span style="font-size:50%;"></span></h2>  

						</div>
						
						

						<div id="order" class="form-container">
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
                                    <div style="text-align:start;">Your Birth Date:</div>
                                    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/date.php'; ?>
                                </div>
									<div class="help-block with-errors"></div>
								</div>
                                
                

                            <input class="product" type="hidden" name="product" value="energyw">
                            <input class="product" type="hidden" name="priority" value="6">

                            <input class="fbproduct" type="hidden" name="fbSource" value="<?php echo $_SESSION['fbSource']; ?>">
                            <input class="fbproduct" type="hidden" name="fbCampaign" value="<?php echo $_SESSION['fbCampaign']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAdset" value="<?php echo $_SESSION['fbAdset']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAd" value="<?php echo $_SESSION['fbAd']; ?>">
                            <div id="error" class="alert alert-danger" style="display: none"></div>

								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">PLACE YOUR ORDER <i class="fa-solid fa-arrow-right"></i></button>
								</div>
								
								<img style="width: 100%;" src="/images/payment-icons.webp">
								<p style="font-size:12px;margin-top:7px;margin-bottom: -10px;"><img style="width: 100%;max-width: 28px;padding: 3px;" src="/images/tarot-cards.png">Only accepting 1 more order for today! <i class="fa-solid fa-fire-flame-curved"></i> 4 Sold</p>
								
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
                        <h2>WEEKLY  PERSONAL ENERGY READING</h2>
						<p><b> <center> <FONT COLOR="#d9480d"> YOUR ESSENTIAL GUIDE TO THE WEEK AHEAD </FONT> </b> </center> </p>						
<p>Every week is a universe of opportunities, challenges, and life-altering moments waiting to unfold. Are you prepared to harness the best of them? Dive deep into your very own &quot;Weekly Energy Reading&quot; subscription and equip yourself with unparalleled psychic insights that illuminate the path of the week ahead.</p>
<p>&nbsp;</p>
<p>Crafted with precision and keen intuitive prowess, each reading provides an astoundingly accurate roadmap for the coming days. From the minute ripples of daily life to the larger waves of significant events, this subscription ensures you&apos;re not just prepared but thriving, week after week.</p>
<p>&nbsp;</p>
<p><strong>STAY AHEAD WITH PRECISE FORESIGHT: The Ultimate Edge in Life</strong></p>
<p>The <strong>Weekly Energy Reading</strong> doesn&rsquo;t merely skim the surface; it delves deep into all pivotal spheres of your life. Relationships, career junctures, personal growth opportunities, potential challenges &ndash; nothing escapes this comprehensive scan. By offering you insights about what&apos;s around the corner, you can proactively shape outcomes, rather than merely reacting to them.</p>
<p>&nbsp;</p>
<p><strong>BENEFITS: Consistent, Cohesive, and Crucial Insights</strong></p>
<p>A single reading can be enlightening, but consistent weekly guidance? That&rsquo;s transformative! By subscribing, you&apos;re giving yourself a steadfast ally in navigating life&apos;s journey. Each week, like clockwork, the universe&rsquo;s messages will land in your inbox, ensuring:</p>
<br> <p><strong>Continuity:</strong>&nbsp;Track your life&apos;s patterns and progress with unmatched clarity.</p>
<br> <p><strong>Timeliness:</strong>&nbsp;Act on insights when they matter the most.</p>
<br> <p><strong>Cost-Effectiveness:</strong>&nbsp;A subscription model ensures you get premium insights at a value unmatched by one-off readings.</p>
<p>&nbsp;</p>
<p><strong>THIS IS CURRENTLY MY MOST WANTED SERVICE: Because Life Doesn&rsquo;t Wait</strong></p>
<p>In an ever-evolving world, staying updated is not just a luxury; it&rsquo;s a necessity. The <strong>Weekly Energy Reading</strong> isn&rsquo;t just another subscription; it&rsquo;s your <strong>secret weapon</strong> to seize control, anticipate change, and always be one step ahead. With a world teeming with unpredictability, isn&rsquo;t it comforting to know there&rsquo;s something you can consistently count on?</p>
<br><p><strong>COMMITMENT TO EXCELLENCE: Authenticity and Resonance Guaranteed</strong></p>
<p>Should a reading ever fall short of resonating with your journey or the accuracy you expect, a full refund for that week stands as our unwavering pledge to quality and your satisfaction.</p>
        <br> <p> Enjoy my weekly subscription, with the flexibility to cancel whenever you wish! 😊 </p>             
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
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/bestseller.php'; ?>

<br clear="all">			
				
            </div>  
        </div>  
    </header>  

    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>