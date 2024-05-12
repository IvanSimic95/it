<?php
$t_product_name = "msoulmate";
$t_product_form_name = "msoulmate";
$title = "When and Where You'll Meet Your Soulmate";
$description = "The divine timeline of destined love | Soulmate Healer";

include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; ?>
<?php

$lower = strtolower($t_product_name);
$sql = "SELECT * FROM review_total WHERE product = '" . $t_product_name . "'";
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
                            <img class="img-fluid" src="/images/products/husband.png" style="border-radius: 0.5rem;" alt="alternative">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-5">
                    <div class="header-box" id="order">
                        <h1 style="margin-top: 10px;">When and Where <br> You'll Meet Your Soulmate</h1>
                        <h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
                            <span style="font-size:13px;"><?php echo $count; ?> reviews</span>
                        </h4>
                        <p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br />
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br />
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> Order now, receive within 1 hour
                        </p>

                        <h2 class="new_prce" style="font-size: 35px;display: inline-block;">$24</h2>
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">$240</h2>
                        <p style="display:none;">You save <span class="saveda"><b>$216</b> (90%)</span></p>
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
                                    <div style="text-align:start;">Your Birth Date:</div>
                                    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/date.php'; ?>
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
                                <label for="prio48"> <span><i class="fas fa-clock" aria-hidden="true"></i>48h</span></label>
                            </div>

                            <input class="product" type="hidden" name="product" value="msoulmate">

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
                                <h2>When and Where You'll Meet Your Soulmate</h2>
                                <p><b>
                                        <center>
                                        <p style="color:#d9480d;"> THE DIVINE TIMELINE OF DESTINED LOVE </p>
                                    </b> </center>
                                </p>
                                <p> <b> I am The Soulmate Healer</b>, an adept guide on love's ethereal pathways, uniquely positioned to unveil the divine moments that lead you to your life's true romantic partner. This isn't about mere predictions; it's about illuminating the cosmic orchestration of encounters that'll change your destiny.</p>
                                <br>
                                <p>Our lives are intricately woven with threads of fate and choice. While the universe conspires in mysterious ways to bring soulmates together, our own energies and decisions play a pivotal role. I offer not just insights, but a roadmap to those destined intersections where your heart will recognize its counterpart.</p>
                                <br>
                                <p>By tapping into a blend of profound psychic insight, astrological alignment, and spiritual intuition, I seek the vibrational patterns that signal the emergence of your soulmate into your life. My skills, honed over years of spiritual practice and psychic artistry, allow me to discern the intricate details - the where, the how, and the when of this monumental encounter.</p>
                                <br>
                                <p> Provide me with your name and date of birth, and allow me to journey into the sacred dimensions where time and love entwine. I will trace the celestial patterns, the earthly cues, and the energetic wavelengths that will converge, culminating in the moment your paths cross with your future husband's. </p>
                                <br>
                                <p><b>
                                        <center>
                                        <p style="color:#d9480d;">Discover the Precise Moment Your Destinies Intertwine </p>
                                    </b> </center>
                                </p>
                                <p> Meeting your future husband isn't just a moment; it's an epochal shift, a new chapter where dreams merge with destiny. Through this product, you will be prepared, not just in heart but in spirit, to welcome this beautiful juncture of love, companionship, and shared aspirations. </p>
                                <br>
								<p><b>
                                        <center>
                                            <p style="color:#d9480d;"><b> Love it or Your Money Back! 💖</b></p>
                                    </b> </center>
                                </p>
                                <p> <b>Not satisfied? Get a full refund within 30 days. No questions asked. Your happiness, guaranteed!</b></p>

                                <p><b>
                                        <center>
                                            <p style="color:#d9480d;"> A COMMITMENT TO PRIVACY: Digital Delivery Only</p>
                                    </b> </center>
                                </p>
                                <p> Your order will be securely delivered to the email address you provide, and will also be readily accessible from the user dashboard. Rest assured, your physical address remains confidential. </p>


                                <br>
                            </div>
                        </div>

                        <!--IMAGE ON THE RIGHT FOR PC DISPLAY -->
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="image-container" style="margin-top:15px;">
                                <img class="img-fluid" src="/images/111.jpeg" alt="alternative" style="border-radius: 0.5rem;">
                            </div>
                            <div class="image-container" style="margin-top:15px;">
                                <img class="img-fluid" src="/images/12.png" alt="alternative" style="border-radius: 0.5rem;">
                            </div>
                            <div class="image-container" style="margin-top:15px;">
                                <img class="img-fluid" src="/images/6.png" alt="alternative" style="border-radius: 0.5rem;">
                            </div>
                        </div>

                        <!--IMAGE BELLOW THE TEXT IN PHONE DISPLAY -->
                        <div class="d-block d-lg-none row" style="padding-right: 15px;padding-left: 15px;">

                            <div class="col-12">
                                <div class="image-container" style="display:inline-block;width:49%;">
                                    <img class="img-fluid" src="/images/111.jpeg" alt="alternative" style="border-radius: 0.5rem;">
                                </div>
                                <div class="image-container" style="display:inline-block;width:49%;">
                                    <img class="img-fluid" src="/images/12.png" alt="alternative" style="border-radius: 0.5rem;">
                                </div>
                            </div>
                            <div class="col-12" style="margin-top:15px;">
                                <div class="image-container">
                                    <img class="img-fluid" src="/images/6.png" alt="alternative" style="border-radius: 0.5rem;">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">

                            <br><a style="width:100%;text-align:center;" class="btn-solid-reg" href="#order">ORDER YOUR</a>
                           
                        </div>

                       
                    </div>
                </div>
            </div>


            <br />

            <div style="background-color:#f5f5f5;margin-right: 0px;margin-left: 0px;border-radius:0.5rem;" class="row">
                <div class="col-lg-12 col-xl-12">
                    <div style="margin-top: 15px;margin-bottom:15px;" class="row">

                        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/review-total.php'; ?>

                        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/reviews.php'; ?>


                    </div>
                </div>
            </div>
            <br>
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/allproducts.php'; ?>

            <br clear="all">

        </div>
    </div>
</header>

<script>
    jQuery('input[name="priority"]').change(function() {
        if (this.value == '1') {
            jQuery('.new_prce').animate({
                'opacity': 0
            }, 200, function() {
                jQuery('.new_prce').html('$44').animate({
                    'opacity': 1
                }, 200);
            });
            jQuery('.old_price').animate({
                'opacity': 0
            }, 300, function() {
                jQuery('.old_price').html('$440').animate({
                    'opacity': 0.25
                }, 300);
            });
            jQuery('.saveda').animate({
                'opacity': 0
            }, 400, function() {
                jQuery('.saveda').html('<b>$396</b> (90%)').animate({
                    'opacity': 1
                }, 400);
            });
        }
        if (this.value == '24') {
            jQuery('.new_prce').animate({
                'opacity': 0
            }, 200, function() {
                jQuery('.new_prce').html('$34').animate({
                    'opacity': 1
                }, 200);
            });
            jQuery('.old_price').animate({
                'opacity': 0
            }, 300, function() {
                jQuery('.old_price').html('$340').animate({
                    'opacity': 0.25
                }, 300);
            });
            jQuery('.saveda').animate({
                'opacity': 0
            }, 400, function() {
                jQuery('.saveda').html('<b>$306</b> (90%)').animate({
                    'opacity': 1
                }, 400);
            });
        }
        if (this.value == '48') {
            jQuery('.new_prce').animate({
                'opacity': 0
            }, 200, function() {
                jQuery('.new_prce').html('$24').animate({
                    'opacity': 1
                }, 200);
            });
            jQuery('.old_price').animate({
                'opacity': 0
            }, 300, function() {
                jQuery('.old_price').html('$240').animate({
                    'opacity': 0.25
                }, 300);
            });
            jQuery('.saveda').animate({
                'opacity': 0
            }, 400, function() {
                jQuery('.saveda').html('<b>$216</b> (90%)').animate({
                    'opacity': 1
                }, 400);
            });
        }
    })
</script>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>