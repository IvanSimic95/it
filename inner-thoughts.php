<?php
$t_product_name = "thoughts";
$t_product_form_name = "thoughts";
$title = "Revealing Their Hidden Thoughts & Deepest Feelings | Soulmate Healeer";
$description = "Have you ever found yourself gazing into the distance, wondering what a special someone truly thinks or feels about you? With my exclusive service, I aim to unveil the most concealed thoughts and intense emotions of that significant individual in your life";

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
                            <img class="img-fluid" src="/images/products/thoughts.png" style="border-radius: 0.5rem;" alt="alternative">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-5">
                    <div class="header-box" id="order">
                        <h1 style="margin-top: 10px;">Revealing Their Hidden Thoughts & Deepest Feelings</h1>
                        <h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
                            <span style="font-size:13px;"><?php echo $count; ?> reviews</span>
                        </h4>
                        <p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br />
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br />
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> Order now, receive within 6 hours
                        </p>

                        <h2 class="new_prce" style="font-size: 35px;display: inline-block;">$29</h2>
                        <h2 class="old_price" style="display:none;font-size: 25px;opacity: 0.25;text-decoration: line-through;">$299</h2>
                        <p style="display:none;">You save <span class="saveda"><b>$270</b> (90%)</span></p>
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
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="othersname" name="other_name" required>
                                <label class="label-control" for="othersname">Other Person's Name</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control-input" id="text" name="text" rows="3"></textarea>
                                <label class="label-control" for="text">Any aditional detail you may want to provide (you may leave empty)</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div style="text-align:start;">Delivery Priority:</div>
                            <div class="form_box input-group form-group" style="    padding-bottom: 52px;">

                                <input id="prio4" type="radio" name="priority" value="4">
                                <label for="prio4"><span><i style="color:#ffaf00;" class="fas fa-bolt" aria-hidden="true"></i>4h</span></label>

                                <input id="prio24" type="radio" name="priority" value="24">
                                <label for="prio24"> <span><i style="color:#c19bff;" class="fas fa-stopwatch" aria-hidden="true"></i>24h</span></label>

                                <input id="prio48" type="radio" name="priority" value="48" checked="true">
                                <label for="prio48"> <span><i class="fas fa-clock" aria-hidden="true"></i>48h</span></label>
                            </div>

                            <input class="product" type="hidden" name="product" value="thoughts">

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
                                <h2>Revealing Their Hidden Thoughts & Deepest Feelings</h2>
                                <p><b>
                                        <center>
                                            <FONT COLOR="#d9480d"> 🌟Revealing Their Hidden Thoughts & Deepest Feelings – Exclusively by the Soulmate Healer🌟</FONT>
                                    </b> </center>
                                </p>
                                <p> Have you ever found yourself gazing into the distance, wondering what a special someone truly thinks or feels about you? With my exclusive service, I aim to unveil the most concealed thoughts and intense emotions of that significant individual in your life. </p>
                                <br>
                                <p><b>
                                        <center>
                                            <FONT COLOR="#d9480d"> WHAT THIS SERVICE OFFERS: </FONT>
                                    </b> </center>
                                </p>

                                <p><strong> • A Deep Dive Into Their Mind: </strong> Uncover the thoughts they might not even be fully aware of, from the fleeting daydreams to the profound reflections about you. </p>
                                <p> <strong> • Heart's Core Revealed: </strong> Discover the emotions they might be holding back or nurturing deep within their heart, be they of affection, curiosity, apprehension, or hope. </p>
                                <p> <b> • Personalized Insights: </b> Each reading is uniquely tailored to your energy and its interplay with theirs. The narrative isn't generic; it's specific to the nuances of your relationship. </p>
                                <br>
                                <p><b>
                                        <center>
                                            <FONT COLOR="#d9480d"> The Process</FONT>
                                    </b> </center>
                                </p>
                                <p>Upon receiving the necessary details from you, I enter a meditative state, where I connect with the cosmic energy resonating between you and the person in focus. This allows me to discern and articulate their hidden thoughts and deep-seated feelings towards you. </p>

                                <br>
                                <p><b>
                                        <center>
                                            <FONT COLOR="#d9480d"> Preparation for the Revelation </FONT>
                                    </b> </center>
                                </p>
                                <p> Brace yourself for revelations that are both enlightening and potentially surprising. The universe operates in myriad ways, and the truths it holds might challenge your current perceptions. Remember, understanding someone's depth can be a mix of comforting affirmations and unexpected discoveries. </p>

                                <br>
                                <p><b>
                                        <center>
                                            <FONT COLOR="#d9480d"> The Soulmate Healer's Commitment: </FONT>
                                    </b> </center>
                                </p>
                                <p> Your journey to understanding is sacred. Trust that you're receiving insights rooted in a blend of psychic intuition and spiritual connection, ensuring both clarity and authenticity in every reading. </p>

                                <p> Embark on this transformative experience, seeking the hidden and understanding the deep
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
        if (this.value == '4') {
            jQuery('.new_prce').animate({
                'opacity': 0
            }, 200, function() {
                jQuery('.new_prce').html('$49').animate({
                    'opacity': 1
                }, 200);
            });
            jQuery('.old_price').animate({
                'opacity': 0
            }, 300, function() {
                jQuery('.old_price').html('$599').animate({
                    'opacity': 0.25
                }, 300);
            });
            jQuery('.saveda').animate({
                'opacity': 0
            }, 400, function() {
                jQuery('.saveda').html('<b>$540</b> (90%)').animate({
                    'opacity': 1
                }, 400);
            });
        }
        if (this.value == '24') {
            jQuery('.new_prce').animate({
                'opacity': 0
            }, 200, function() {
                jQuery('.new_prce').html('$35').animate({
                    'opacity': 1
                }, 200);
            });
            jQuery('.old_price').animate({
                'opacity': 0
            }, 300, function() {
                jQuery('.old_price').html('$399').animate({
                    'opacity': 0.25
                }, 300);
            });
            jQuery('.saveda').animate({
                'opacity': 0
            }, 400, function() {
                jQuery('.saveda').html('<b>$360</b> (90%)').animate({
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
                jQuery('.old_price').html('$299').animate({
                    'opacity': 0.25
                }, 300);
            });
            jQuery('.saveda').animate({
                'opacity': 0
            }, 400, function() {
                jQuery('.saveda').html('<b>$270</b> (90%)').animate({
                    'opacity': 1
                }, 400);
            });
        }
    })
</script>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>