<?php
$t_product_name = "purification";
$t_product_form_name = "purification";
$title = "Psychic Purification | Soulmate Healer";
$description = "I will provide you with your psychic purification";

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
                            <img class="img-fluid" src="/images/purification-01.png" style="border-radius: 0.5rem;" alt="alternative">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-5">
                    <div class="header-box">
                        <h1 style="margin-top: 10px;">Psychic Purification</h1>
                        <h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
                            <span style="font-size:13px;"><?php echo $count; ?> reviews</span>
                        </h4>
                        <p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Accuracy <br />
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br />
                            <i class="fas fa-check-square" style="color: #0bd10b;"></i> Done in 5 days
                        </p>

                        <h2 class="new_prce" style="font-size: 35px;display: inline-block;">$199</h2>
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">$499</h2>
                        <p>You save <span class="saveda"><b>$300</b> (60%)</span></p>
                    </div>



                    <div id="order" class="form-container">
                        <p style="text-align:center;margin-top: -20px;font-size: 15px;">Fill in the form below to book your reading!</p>
                        <form id="ajax-form" class="form-order" name="order_form" action="javascript:void(0)" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="sname" name="form_name" required>
                                <label class="label-control" for="sname">Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="semail" name="form_email" required>
                                <label class="label-control" for="semail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <div class="form_box">
                                    <div style="text-align:start;">Your Birth Date*</div>
                                    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/date.php'; ?>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>



                            <input class="product" type="hidden" name="product" value="purification">
                            <input class="product" type="hidden" name="priority" value="72">

                            <input class="fbproduct" type="hidden" name="fbSource" value="<?php echo $_SESSION['fbSource']; ?>">
                            <input class="fbproduct" type="hidden" name="fbCampaign" value="<?php echo $_SESSION['fbCampaign']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAdset" value="<?php echo $_SESSION['fbAdset']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAd" value="<?php echo $_SESSION['fbAd']; ?>">
                            <div id="error" class="alert alert-danger" style="display: none"></div>

                            <div class="form-group">
                                <button id="submitbtn" type="submit" class="form-control-submit-button">PLACE AN ORDER <i class="fa-solid fa-arrow-right"></i></button>
                            </div>

                            <img style="width: 100%;" src="/images/payment-icons.webp">
                            <p style="font-size:12px;margin-top:7px;margin-bottom: -10px;"><img style="width: 100%;max-width: 28px;padding: 3px;" src="/images/tarot-cards.png">Only accepting 4 more readings for today! <i class="fa-solid fa-fire-flame-curved"></i> 27 Sold</p> 

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
  
<p> <b> Got questions before your purification journey? Let's chat on WhatsApp for a personal 1:1 talk. Reach out anytime: +447341811168  </b> </p>
<h2> Transform Your Essence with Elite Psychic Purification </h2>

<script>
                var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?11708';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                "enabled":true,
                "chatButtonSetting":{
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "20",
                    "ctaIconWATI":false,
                    "position":"right"
                },
                "brandSetting":{
                    "brandName":"Soulmate Healer",
                    "brandSubTitle":"undefined",
                    "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                    "welcomeText":"Hi there!\nHow can I help you?",
                    "messageText":"Hello, %0A I have a question about Purification",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":false,
                    "phoneNumber":"447341811168"
                }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            </script>
<p> <b> A Sacred Invitation to the Discerning Soul</b> </p>

<p> In the labyrinth of existence, we often encounter invisible barriers that dim our inner light and impede our destined path. These barriers, born from past traumas and unseen forces, not only obscure our vision but tether us to cycles of stagnation and despair.</p>

<p> However, an extraordinary opportunity beckons—a chance to profoundly shift the course of your journey. We offer you the Elite Psychic Purification Ritual, a privilege once reserved for a select few. This exclusive rite, performed by a distinguished 3rd Generation Healer, embodies the pinnacle of spiritual cleansing and enlightenment, passed down through an unbroken lineage of mystics and sages.
<br><p style="color:#d9480d;text-align:center;"> <b> 🌟 Unveiling Your Path with the Ultimate Psychic Purification</b></p>

<p style="color:#d9480d;text-align:center;"> Why is this ritual indispensable for you?</p>

   <p>       <b> •Unlock Your Latent Potential:</b> Awaken to the vast reservoirs of energy, ambition, and love within. Break free from the shackles limiting your aspirations, and step boldly towards your dreams.</p>

    <p>      <b> •Achieve Unparalleled Clarity:</b> Gain crystal-clear insight into life's crossroads. Make decisions aligned with your soul's calling and advance with confidence and purpose.</p>

    <p>      <b> •Harmonize Your Being:</b> Experience the tranquility of mind, body, and spirit in perfect symphony. Embrace the serenity of balanced energies and the peace of internal alignment.</p>

    <p>     <b>  •Embark on Personal Evolution:</b> Each day unfolds as a step towards self-discovery, growth, and enlightenment, transforming every moment into a milestone of your spiritual journey.</p>

    <p>      <b> •Heal Emotionally:</b> Let go of past afflictions, mend the fractures of your heart, and heal the scars of your soul. Revel in the liberation and joy that follows.</p>

    <p>      <b> •Fortify Your Inner Strength:</b> Summon the warrior within. Overcome life's trials with valor, and craft a legacy of achievement and profound affection.</p>

<p style="color:#d9480d;text-align:center;"><b>✨ Delve into the Essence of Psychic Purification</b></p>

<p style="color:#d9480d;text-align:center;">An Ancestral Legacy of Soul Cleansing</p>

<p>This ritual is not merely a practice; it is a passage to reconnecting with your highest self, guided by the ancestral wisdom of generations. By establishing a deep affinity with your aura, our healer discerns and addresses the spiritual disturbances that weigh upon you, employing a sacred amalgam of celestial and earthly energies. Enriched by the sanctity of holy water and the symbolic purity of gold bars, each element of the ritual—from the healing vibration of pink roses to the transformative power of precious metals—works in concert to transmute negative energies into a beacon of positive light.</p>
<p style="color:#d9480d;text-align:center;"><b>👉 From Renewal to Rebirth: Your Journey of Transformation</b></p>

<p>This purification is a profound commitment to your spiritual rebirth, unfolding over five days of deep, transformative work. You will emerge from this process reborn, with a soul cleansed of past burdens and a heart filled with new purpose and strength. The ritual concludes with personalized insights and guidance, lighting your path forward with clarity and inspiration.
<p style="color:#d9480d;text-align:center;"><b>🥰 Seize This Moment for Transformation</b></p>

<p>This exclusive ritual, a beacon of profound change, is now accessible for $199—a testament to its unparalleled value and the significant investment in your spiritual well-being.</p>
<p style="color:#d9480d;text-align:center;"><b>The Time to Act is Now</b> </p>

<p>For a limited period, we are opening the gates to this exclusive service, a chance that recurs but once a year. Embrace this unique opportunity; do not defer your spiritual awakening. The decision is yours—will you step into your luminous potential now, or delay your evolution?</p>
<br> <p> Over the course of five transformative days, I will dedicate myself entirely to your healing—meticulously identifying, addressing, and cleansing the spiritual blockages that have veiled your true essence. Throughout this sacred process, I will keep detailed records of my findings and the healing techniques employed to restore your spiritual harmony. Upon the completion of this profound journey, you will receive a comprehensive report, a testament to your journey of renewal, detailing the obstacles we've overcome together and the pathways we've opened for your luminous rebirth. </p>
<p style="color:#d9480d;text-align:center;">Transform your life—Invest in your Psychic Purification today and unlock the door to your brightest future. </p>
  

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


<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>