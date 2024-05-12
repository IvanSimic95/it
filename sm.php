<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/config/functions.php';
if (isset($_GET['v'])) {
    $v = $_GET['v'];
} else {
    $v = 1;
}

if ($v > 3) {
    $v = 1;
}



?>
<!DOCTYPE html>
<html>

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Soulmate Healer</title>
    <meta name="title" content="Soulmate Healer" />
    <meta name="description" content="Get your soulmate Drawing" />
    <meta name="author" content="Soulmate Healer" />
    <link href="https://soulmatehealer.com/images/yey.jpg" rel="alternate" media="only screen and (max-width: 640px)" />
    <meta property="twitter:title" content="Soulmate Healer" />
    <meta property="twitter:description" content="Get your soulmate Drawing" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:image" content="https://soulmatehealer.com/images/yey.jpg" />
    <meta property="og:title" content="Soulmate Healer" />
    <meta property="og:description" content="Get your soulmate Drawing" />
    <meta property="og:image" content="https://soulmatehealer.com/images/yey.jpg" />
    <!-- CSS only -->
	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="/welcome/css/welcome/normalize.css" rel="stylesheet" type="text/css">
    <link href="/welcome/css/welcome/components.css" rel="stylesheet" type="text/css">
    <link href="/welcome/css/welcome/spellvixen.css" rel="stylesheet" type="text/css">
    <link href="/welcome/css/welcome/style.css" rel="stylesheet" type="text/css">
    <link href="/welcome/css/welcome/welcome.css" rel="stylesheet" type="text/css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/images/webclip.png" rel="apple-touch-icon">

    

<script>


$.fn.christmas = function() {
  $(this).each(function() {
    $(this).html($(this).text().split("").map(function(v, i) {
      return '<span class="christmas-' + (i % 2 == 0 ? 'blue' : 'blue') + '">' + v + '</span>';
    }).join(""));
  });
};

$(function() { 
  $('h5.christmas').christmas();
});

</script>

</head>

    <body class="body">
        <div class="header-bar wf-section">
            <div class="logo-wrapper"><img src="/welcome/images/logo.png" loading="lazy" alt=""></div>
        </div>
        <div class="body-container w-container">

            <div class="header-section">
                <h1 class="headline"><span class="bolded-headline">PSYCHIC PORTRAIT OF<br/><img style="width: 100%;max-width: 40px;" src="https://clipart-library.com/img/2059621.gif"> YOUR SOULMATE</span></h1>
                <div class="video w-embed w-script">
					
                <script src="https://fast.wistia.com/embed/medias/ozk6r3bppb.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_ozk6r3bppb seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/ozk6r3bppb/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
							
                    <form id="ajax-form" class="form-order" name="order_form" action="javascript:void(0)" method="post">
							<h2 class="headline dark-subheader inverted">Begin your journey to love's true visage!️<br>❤️ Fill in your details below ❤️</h2>
                        <div class="form-floating form-floating-icon mb-2">
                            <input style="border: 1px solid #333;" class="form-control" id="fullname" type="text" name="form_name" placeholder="First & Last Name" required="">
                            <span class="icon-inside"><i class="far fa-user"></i></span>
                            <label for="fullname">Your Full Name</label>
                        </div>

                        <div class="form-floating form-floating-icon mb-2">
                            <input style="border: 1px solid #333;" class="form-control" id="email" type="email" name="form_email" placeholder="Your Email" required="">
                            <span class="icon-inside"><i class="far fa-envelope"></i></span>
                            <label for="email">Your Email Address</label>
                        </div>
                        <hr>
                        <div class="form_box">
                            <h2 class="headline dark-subheader inverted">Your Birth Date*</h2>

                            <div class="row align-items-center">
                                <div class="col">
                                    <select style="border: 1px solid #333;" class="form-select" name="form_day" required>
                                        <option value="" disabled selected hidden>Day</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                        <option value="05">5</option>
                                        <option value="06">6</option>
                                        <option value="07">7</option>
                                        <option value="08">8</option>
                                        <option value="09">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select style="border: 1px solid #333;" class="form-select" name="form_month" required>
                                        <option value="" disabled selected hidden>Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">Septemer</option>
                                        <option value="10">October</option>
                                        <option value="11">Novemer</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select style="border: 1px solid #333;" class="form_year form-select" name="form_year" required>
                                        <option value="" disabled selected hidden>Year</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <hr>

                        <h2 class="headline dark-subheader inverted">Delivery Priority</h2>
                        <div class="form_box input-group">

                            <div class="option">
                                <input type="radio" name="priority" id="prio1" value="1">
                                <label for="prio1" aria-label="1 Hour Delivery" class="d-flex justify-content-start align-items-center">
                                    <span></span>
                                    <div class="p-0 delivery-icon"><i class="fas fa-bolt"></i></div>
                                    <div class="flex-grow-1">
                                        <div style="color:#6667ab !important;" class="fw-bold text-dark">Express <span class="delivery">Delivery</span></div>
                                        <div style="color:#c2a2d2 !important;" class="fs-sm text-muted">1 <span class="hours"> Hour</span><span class="h">H</span></div>

                                    </div>
                                    <div class="fw-bold badge bg-dark">+ $20</div>
                                </label>
                            </div>

                            <div class="option">
                                <input type="radio" name="priority" id="prio24" value="24">
                                <label for="prio24" aria-label="24 Hour Delivery" class="d-flex justify-content-start align-items-center">
                                    <span></span>
                                    <div class="p-0 delivery-icon"><i class="fas fa-running"></i></div>
                                    <div class="flex-grow-1">
                                        <div style="color:#6667ab !important;" class="fw-bold text-dark">Fast <span class="delivery">Delivery</span></div>
                                        <div style="color:#c2a2d2 !important;" class="fs-sm text-muted">18 - 24 <span class="hours">Hours</span><span class="h">H</span></div>

                                    </div>
                                    <div class="fw-bold badge bg-dark">+ $10</div>
                                </label>
                            </div>



                            <div class="option">
                                <input type="radio" name="priority" id="prio48" value="48">
                                <label for="prio48" aria-label="48 Hour Delivery" class="d-flex justify-content-start align-items-center">
                                    <span></span>
                                    <div class="p-0 delivery-icon"><i class="far fa-clock"></i></div>
                                    <div class="flex-grow-1">
                                        <div style="color:#6667ab !important;" class="fw-bold text-dark">Standard <span class="delivery">Delivery</span></div>
                                        <div style="color:#c2a2d2 !important;" class="fs-sm text-muted">36 - 48 <span class="hours">Hours</span><span class="h">H</span></div>
                                    </div>
                                    <div class="fw-bold badge bg-dark">+ $0</div>

                                </label>
                            </div>

                        </div>

                        <script>
                            $(document).ready(function() {
                                $("#prio48").prop("checked", true);
                            });

                            $("#helper-delivery-express").click(function() {
                                $("#prio1").prop("checked", true);
                                jQuery('.new_prce').animate({
                                    'opacity': 0
                                }, 200, function() {
                                    jQuery('.new_prce').html('<span class="christmas-blue">$</span><span class="christmas-blue">4</span><span class="christmas-blue">9</span>').animate({
                                        'opacity': 1
                                    }, 200);
                                });

                            });
                            

                            $("#helper-delivery-fast").click(function() {
                                $("#prio24").prop("checked", true);
                                jQuery('.new_prce').animate({
                                    'opacity': 0
                                }, 200, function() {
                                    jQuery('.new_prce').html('<span class="christmas-blue">$</span><span class="christmas-blue">3</span><span class="christmas-blue">9</span>').animate({
                                        'opacity': 1
                                    }, 200);
                                });

                            });

                            $("#helper-delivery-standard").click(function() {
                                $("#prio48").prop("checked", true);
                                jQuery('.new_prce').animate({
                                    'opacity': 0
                                }, 200, function() {
                                    jQuery('.new_prce').html('<span class="christmas-blue">$</span><span class="christmas-blue">2</span><span class="christmas-blue">9</span>').animate({
                                        'opacity': 1
                                    }, 200);
                                });

                            });


                            jQuery('input[name="priority"]').change(function() {
                                if (this.value == '1') {
                                    jQuery('.new_prce').animate({
                                        'opacity': 0
                                    }, 200, function() {
                                        jQuery('.new_prce').html('<span class="christmas-blue">$</span><span class="christmas-blue">4</span><span class="christmas-blue">9</span>').animate({
                                            'opacity': 1
                                        }, 200);
                                    });

                                }
                                if (this.value == '24') {
                                    jQuery('.new_prce').animate({
                                        'opacity': 0
                                    }, 200, function() {
                                        jQuery('.new_prce').html('<span class="christmas-blue">$</span><span class="christmas-blue">3</span><span class="christmas-blue">9</span>').animate({
                                            'opacity': 1
                                        }, 200);
                                    });

                                }
                                if (this.value == '48') {
                                    jQuery('.new_prce').animate({
                                        'opacity': 0
                                    }, 200, function() {
                                        jQuery('.new_prce').html('<span class="christmas-blue">$</span><span class="christmas-blue">2</span><span class="christmas-blue">9</span>').animate({
                                            'opacity': 1
                                        }, 200);
                                    });

                                }
                            })



                            var product_code = $('.product_code').text()
                            $('.product').val(product_code);

                            $(document).ready(function($) {

                                // hide messages 
                                $("#error").hide();
                                $("#show_message").hide();

                                // on submit...
                                $('#ajax-form').submit(function(e) {

                                    e.preventDefault();

                                    $("#error").hide();
                                    $("#submitbtn").html('<i class="fas fa-spinner fa-pulse"></i> Loading...');

                                    //First name required
                                    var name = $("input#fullname").val();
                                    if (name == "") {
                                        $("#error").fadeIn().text("First & Last Name Field required.");
                                        $("input#fname").focus();
                                        return false;
                                    }
                                    // ajax
                                    $.ajax({
                                        type: "POST",
                                        url: "/ajax/order.php",
                                        dataType: 'json',
                                        data: $(this).serialize(),
                                        success: function(data) {
                                            var SubmitStatus = data[0];
                                            var DataMSG = data[1];

                                            if (SubmitStatus == "Success") {
                                                var Redirect = data[2];
                                                $("#show_message").html(DataMSG);
                                                $("#show_message").fadeIn();
                                                $("#submitbtn").html('<i class="fas fa-spinner fa-pulse"></i> Redirecting...');

                                                setTimeout(function() {
                                                    window.location.href = Redirect;
                                                }, 2000);

                                            } else {
                                                $("#error").html(DataMSG);
                                                $("#error").fadeIn();
                                                $("#submitbtn").html("Error Occured!");
                                            }

                                        }
                                    });
                                });

                                return false;
                            });
                        </script>
                        <hr>

<style>

.christmas-blue {
color: #035ee2;
	background: -webkit-linear-gradient(transparent, transparent), url(/welcome/images/giphy.gif) repeat;
	background: -o-linear-gradient(transparent, transparent) !important;
	-webkit-background-clip: text !important;
	-webkit-text-fill-color: transparent !important;
	margin: 0;
	padding: 0;

	font-weight: 900;
	width: 100%;
	text-align: center;
	letter-spacing: 1px;
	z-index: 999999;
	-webkit-background-clip: text;
}

.christmas-gold {
	color: #D81E1E;
  
color: gold;
	background: -webkit-linear-gradient(transparent, transparent), url(/welcome/images/giphy.gif) repeat;
	background: -o-linear-gradient(transparent, transparent) !important;
	-webkit-background-clip: text !important;
	-webkit-text-fill-color: transparent !important;
	margin: 0;
	padding: 0;

	font-weight: 800;
	width: 100%;
	text-align: center;
	letter-spacing: 1px;
	z-index: 999999;
	-webkit-background-clip: text;
}



h5 {
	font-family: 'Rubik', sans-serif;
}
</style>

                        <div class="d-flex flex-row flex-wrap align-items-center position-relative fs-4 price-total">

                            <input class="product" type="hidden" name="product" value="soulmate">

                            <div id="show_message" class="alert alert-success" style="display: none">Loading..</div>
                            <div id="error" class="alert alert-danger" style="display: none"></div>
									
									<h5 style="font-size: 90px;padding-bottom:45px;padding-top:30px;" class="new_prce christmas">$29</h5>

                           
						   <div class="form_box" style="width:100%;">
							
                                <button type="submit" name="form_submit" id="submitbtn" style="font-weight:400;font-size:22px;" value="Place an order">

								Order a <b>Soulmate Drawing</b>
								
								<br>
								
								<span style="font-weight:400" class="btn-sub-text">👉 And Watch Your Life Magically Change</span>
								
								</button>
                            
							</div>
 
						</div>
						
                            <div style="font-size: 14px;" class="secure-badge">
                                🔒 <div class="secure-checkout-text">Safe &amp; Secure • 60 Money Back Guarantee</div>
                            </div>
								<p><b>
                                        <center>
                                            <p style="color:white;font-size:19px;"><b> Love it or Your Money Back! 💖</b></p>
                                    </b> </center>
                                </p>
                                <p style="color:white;font-size:19px;"><b>Not satisfied? Get a full refund within 60 days. No questions asked. Your happiness, guaranteed!</b></p>
                            <input class="fbproduct" type="hidden" name="fbSource" value="<?php echo $_SESSION['fbSource']; ?>">
                            <input class="fbproduct" type="hidden" name="fbCampaign" value="<?php echo $_SESSION['fbCampaign']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAdset" value="<?php echo $_SESSION['fbAdset']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAd" value="<?php echo $_SESSION['fbAd']; ?>">
							
                    </form>

                </div>

            </div>


        </div>
        </div>

<style>
.price-total {

    padding-left: 8px;
}
</style>

        <?php if ($v == 1) { ?>

            <div style="" class="main-body-section wf-section">
                <div class="container w-container">
                    <p class="sub-paragraph pcenter">✨ THE ART OF LOVE ✨<br/><strong>DISCOVER 🔮 YOUR SOULMATE</strong></p>
                    <p style="" class="sub-paragraph pcenter bgtitle"><strong>YOUR DESTINY ILLUSTRATED</strong></p>
                    <p class="sub-paragraph notcenter">👋 Warm greetings from the <span style="background-color:#e9c023;color:#302a4e;padding:0px 6px;font-weight:700;">Soulmate Healer.</span> In a world where true connection feels like a rarity, I offer a beacon of hope.<br/><br/>• My unique gift doesn't just anticipate the future; it paints a vivid image of your heart's deepest yearning a love 💜 that promises warmth, understanding, and unwavering commitment.</p>
                    <p style="background-color:#201b39;padding:20px;border-radius:8px;" class="sub-paragraph notcenter">
					<img style="margin-bottom: 25px;border-radius: 4px;" class="imgcontentdesk" src="https://soulmatehealer.com/images/yey3.jpg">	
					My <span style="background-color:#e9c023;color:#302a4e;padding:0px 1px;font-weight:200;"> Soulmate Portraits</span> are no mere drawings; they're a magical blend of deep psychic connection and artistic talent. I channel a synergy of empathic projection, clairsentience, and clairvoyance, enhanced by my rich knowledge in spiritual healing and psychic artistry. I hold the power to see the unseen - to discern that perfect moment when you're ready to embrace true love and the ways to dismantle any walls that stand in your way.
					<br/><br/>
					<i class="far fa-check-circle" style="color: #3ad02f;font-size: 14px;"></i> 99% Drawing Accuracy <br/>
					<i class="far fa-check-circle" style="color: #3ad02f;font-size: 14px;"></i> 100% Satisfaction guarantee <br/>
					<i class="far fa-check-circle" style="color: #3ad02f;font-size: 14px;"></i> Order now, receive within 1 hour <br/>
					
					</p>
                    <p class="sub-paragraph notcenter"><span style="background-color:#6932b1;padding:0px 6px;">Many women, just like you,</span> find themselves at life's crossroads - yearning for genuine love, a partner to share dreams with, someone to erase past hurts and promise a future filled with passion. This isn’t a mere illustration. It's a door to a future 🔮 filled with shared laughter, endless conversations, and moments where you feel seen and cherished.</p>
                    <p style="background-color:#201b39;padding:20px;border-radius:8px;" class="sub-paragraph notcenter">
					<img style="margin-bottom: 25px;border-radius: 4px;" class="imgcontentdesk" src="https://soulmatehealer.com/images/yey1.jpg">	
					• Simply entrust 👼 me with your name and date of birth, and I'll embark on a journey, delving into the universe's grand design.<br/><br/>• Within this vast expanse, I find your soul's counterpart the one person who will hold your hand through life's highs and lows, who will listen, truly listen, to every whispered hope and silent tear.<br/><br/><span style="background-color:#6932b1;padding:0px 6px;">As I sketch</span> 🖌️ every line captures a story, every shade encapsulates a promise, and every detail whispers of a love that’s waiting to be found.</p>
                    <p class="sub-paragraph notcenter">⚡ Meeting your soulmate isn't just another chapter; it's a whole new book, a fresh start. It's about waking up to mornings filled with hope, spending days wrapped in shared dreams, and nights basking in mutual affection.</p>
                    <p style="" class="sub-paragraph pcenter bgtitle"><strong>SPECIAL REVEAL</strong><br/>The Moment of Serendipity</p>
                    <p class="sub-paragraph notcenter"><span style="background-color:#e9c023;color:#302a4e;padding:0px 6px;font-weight:700;">Your soulmate</span> is more than just a partner; <span style="background-color:#6932b1;padding:0px 6px;">he's the missing puzzle piece,</span> fitting seamlessly into the recesses of your heart.<br/><br/>❤️ When you meet it will feel like coming home. The universe has a destined moment for this magical meeting, and I'll provide a glimpse into when this heart - fluttering encounter will happen.</p>
                    <p class="sub-paragraph notcenter">🌠 Over the years, from silver screens to ordinary streets, countless women have sought the revelations I provide.<<br/><br/>🧙‍♀️ It's a universal quest, this search for <span style="background-color:#6932b1;padding:0px 6px;">true love,</span> and every woman, no matter her journey, deserves her fairy - tale ending.<br/><br/>✨ By choosing this path, you're not just seeking a face. You're seeking a future, and I am honored to guide you towards it.</p>
                    <p style="" class="sub-paragraph pcenter bgtitle"><strong>YOUR PRIVACY, OUR PRIORITY</strong><br/>Exclusively Digital, Unquestionably Confidential</p>
                    <p class="sub-paragraph notcenter">💌 All revelations will be sent directly to your chosen email ensuring your personal details remain private.<br/><br/>👉 With round-the-clock access from your user portal, know that your journey towards love is both safe and sacred.</p>
                    <div class="button-wrapper">

<a href="#" id="submitbtn" style="font-weight:400;font-size:25px;text-decoration:none;" value="Place an order">ORDER NOW</b>
    <br>
        <span style="font-weight:400" class="btn-sub-text">👉 And Watch Your Life Magically Change</span>
</a>	
</div>
                </div>
            </div>
			<br>

        <?php } elseif ($v == 2) { ?>

            <div class="main-body-section wf-section">
                <div class="container w-container">
                <p class="sub-paragraph pcenter">🔮✨ <strong>THE LEGEND OF THE SOULMATE HEALER: YOUR GUIDE IN LOVE'S MAZE</strong> ✨🔮</p>
                    <p class="sub-paragraph notcenter">In a world teeming with voices claiming to have the answers, one name stands out as a beacon of authenticity, clarity, and unparalleled intuition—The Soulmate Healer. For those navigating the turbulent waters of love, his name isn't just recognized it's revered.</p>
                    <p class="sub-paragraph notcenter">Soulmate Healer's story is no ordinary one. Born into a lineage of esteemed seers, he exhibited uncanny psychic abilities from a tender age. While his peers were engrossed in childish whims, he was deciphering the cosmic tales whispered by the winds and the stars. His early years were spent under the tutelage of spiritual mentors across the globe, from the mystic valleys of Tibet to the hidden chambers of Egyptian pyramids.</p>
                    <p class="sub-paragraph notcenter">With each passing year, his skills grew, not just in strength but in precision. The world began to notice. Celebrities, royals, and influential figures discreetly sought his guidance. They found solace in his visions, reassurance in his words, and most importantly, clarity in the intricate labyrinth of their emotions. His astounding ability to sketch one's soulmate became a legend; tales whispered in elite circles about a man who could, with just a name and birthdate, reveal your heart's ultimate desire.</p>
                    <p class="sub-paragraph notcenter">But what truly sets Soulmate Healer apart isn't just his illustrious clientele or his uncanny abilities. It's his unwavering dedication to his purpose: guiding souls to their destined partner. While many in his industry chase fame or fortune, his motivations are pure, rooted in the belief that every soul, regardless of their past or present, is deserving of a love that's profound and genuine.</p>
                    <p class="sub-paragraph notcenter">Choosing Soulmate Healer isn't just opting for another psychic reading. It's choosing authenticity over pretense. It's choosing a legacy of psychic lineage over novices. It's about trusting a guide who understands that your quest isn't just for love—it's for a connection that transcends lifetimes.</p>
                    <p class="sub-paragraph notcenter">In a market filled with imitations, why settle for less? Soulmate Healer isn't just another name. He's an experience, a legend, and for many, the key to unlocking a love story written in the stars.</p>
          
                </div>
            </div>



        <?php } elseif ($v == 3) { ?>

            <div class="main-body-section wf-section">
                <div class="container w-container">
                <p class="sub-paragraph pcenter">🔮✨ <strong>THE LEGEND OF THE SOULMATE HEALER: SECRETS OF THE STARS UNVEILED</strong> ✨🔮</p>
                    <p class="sub-paragraph notcenter">In the grand tapestry of love, few threads shine as luminously as those woven by the Soulmate Healer. Draped in tales of love found and destinies fulfilled, this modern-day sage has created an aura of mystique around him, made all the more enchanting by the stories of the stars who've sought his guidance.</p>
                    <p class="sub-paragraph notcenter">Imagine a service that doesn’t just predict your soulmate but brings their essence to life on paper. This is precisely the magic of the "Soulmate Psychic Drawing." The process isn't just about art; it's a communion of the senses, intuition, and psychic mastery. The Soulmate Healer begins by harmonizing his energies with the cosmic rhythms, drawing from ancestral practices and deep-seated clairvoyance. With your name and the melodies of your birth date, he traverses the psychic realms, seeking the face and spirit of your destined love. The result is an intricate, lifelike representation of your soulmate, capturing not just their physical attributes but also their spirit, energy, and essence.</p>
                    <p class="sub-paragraph notcenter">The journey of this unparalleled service took a serendipitous turn during a star-studded evening in Beverly Hills. As the story goes, an A-list actress, her heart marred by the trials of love, approached the Soulmate Healer. Skepticism clouded her eyes, but desperation urged her on. When presented with her soulmate's drawing, she was left in awe – and later that night, fate orchestrated a meeting with the very man from the portrait. Their love story, now the stuff of whispered legends, became a testament to the power of the Soulmate Healer's craft.</p>
                    <p class="sub-paragraph notcenter">Word spread, and soon, icons from silver screens to musical stages sought the Soulmate Healer's expertise. Each star came with their own tale of love's woes, and each left with renewed hope, clutching a portrait that would change their lives. These were not mere drawings but keys to a future brimming with love and connection.</p>
                    <p class="sub-paragraph notcenter">But even amidst the accolades and whispered testimonials, the Soulmate Healer's passion remains unchanged: guiding every heart towards its destined half. It isn't just the stars that shine in his universe. Each client, each drawing, each love story unveiled is a testament to a legacy that transcends fame.</p>
                    <p class="sub-paragraph notcenter">In a world filled with fleeting moments and fleeting loves, the Soulmate Psychic Drawing offers something eternal: a glimpse into a future where love is not just felt but seen, touched, and cherished. Entrust your heart's desires to the man whom the stars trust. After all, why wander aimlessly in search of love when you can have the universe's chosen guide unveil it for you?</p>
          
                </div>
            </div>

        <?php } ?>

      
        </div>

<hr>

        <div style="

  border-color: #8dffea #000 #000;
  background-color: #1d1d25;
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(19, 20, 53, 0.8)), to(rgba(19, 20, 53, 0.8))), url('https://i.pinimg.com/originals/17/2d/3c/172d3ca203948062edffc03aa5c412a3.gif');
  background-image: linear-gradient(180deg, rgba(19, 20, 53, 0.8), rgba(19, 20, 53, 0.8)), url('https://i.pinimg.com/originals/17/2d/3c/172d3ca203948062edffc03aa5c412a3.gif');
  background-position: center;
  background-size: auto, auto;
  background-repeat: repeat;
  
		
		" class="container w-container">
      <h1 class="headline dark-subheader">Testimonials from Verified Clients:</h1>
  
           <p style="font-size:14px;" class="sub-paragraph">2,244+ Verified 5* Reviews</p>
      <div class="columns w-row">
        <div class="w-col w-col-6">
          <div class="testimonial-wrapper">
            <div class="testimonial-bubble">
              <div class="testimonial-headline">AMAZING</div>
              <div class="testimonial-paragraph">This drawing blew me away, the features aligned with the man I’m seeing now, lips, nose, eyebrows, eyes, ears were identical to his. His ethnicity showed through the drawing, he is Blackfoot Native American and the drawing reflects that. The personality traits were spot on with his as well.</div>
              <div class="avatar-wrapper"><img src="/welcome/images/testimonial.jpg" loading="lazy" alt="" class="image">
                <div class="div-block">
                  <div class="name-wrapper">
                    <div class="testimonial-name">Jennifer D.</div>
                    <div class="testimonial-location">California, USA</div>
                  </div>
                  <div class="stars-wrapper"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"></div>
                </div>
              </div>
            </div>
            <div class="testimonial-bubble">
              <div class="testimonial-headline">Lovely experience</div>
              <div class="testimonial-paragraph">I just about cried when I opened the reading and portrait. The message was just so beautiful and the man staring back at me just looks so kind and warm. Thank you so much for providing such a special reading and sharing your gifts! I am beyond words at how special this reading is!</div>
              <div class="avatar-wrapper"><img src="/welcome/images/testimonial2.jpg" loading="lazy" alt="" class="image">
                <div class="div-block">
                  <div class="name-wrapper">
                    <div class="testimonial-name">Claire C.</div>
                    <div class="testimonial-location">Victoria, Australia</div>
                  </div>
                  <div class="stars-wrapper"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"></div>
                </div>
              </div>
            </div>
            <div class="testimonial-bubble">
              <div class="testimonial-headline">Feeling blessed since purchasing! Thank you!</div>
              <div class="testimonial-paragraph">This was a fantastic purchase. My eyes are peeled everywhere I go looking for this man. I will not rest until I find him, I wait patiently everyday to see his baby blue pearls. His brown luxurious hair lives in my dreams, and his chiseled jaw makes my mouth water. Thank you for doing this reading.</div>
              <div class="avatar-wrapper"><img src="/welcome/images/testimonial5.jpg" loading="lazy" alt="" class="image">
                <div class="div-block">
                  <div class="name-wrapper">
                    <div class="testimonial-name">Trisha L.</div>
                    <div class="testimonial-location">Texas, USA</div>
                  </div>
                  <div class="stars-wrapper"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="testimonial-bubble">
            <div class="testimonial-headline">I'm shoked</div>
            <div class="testimonial-paragraph">My drawing looks like the person I work with, am attracted to, and I’ve had a dream telling me he’s on a spiritual journey too. We’ll see fingers crossed!</div>
            <div class="avatar-wrapper"><img src="/welcome/images/testimonial6.jpg" loading="lazy" alt="" class="image">
              <div class="div-block">
                <div class="name-wrapper">
                  <div class="testimonial-name">Lindsay P.</div>
                  <div class="testimonial-location">Ontario, Canada</div>
                </div>
                <div class="stars-wrapper"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"></div>
              </div>
            </div>
          </div>
          <div class="testimonial-bubble">
            <div class="testimonial-headline">I recommend everyone Soulmate Healer's services</div>
            <div class="testimonial-paragraph">Very happy and impressed with my purchase! The drawing and description were both very accurate and detailed. The person drawn looked very similar to someone I recently met! Soulmate Healer was really nice and responded quickly. You can tell a lot of time and effort was put into this drawing.</div>
            <div class="avatar-wrapper"><img src="/welcome/images/testimonial4.jpg" loading="lazy" alt="" class="image">
              <div class="div-block">
                <div class="name-wrapper">
                  <div class="testimonial-name">Felicia S.</div>
                  <div class="testimonial-location">California, USA</div>
                </div>
                <div class="stars-wrapper"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"></div>
              </div>
            </div>
          </div>
          <div class="testimonial-bubble">
            <div class="testimonial-headline">AMAZING!</div>
            <div class="testimonial-paragraph">I went to over 20 psychics so far but Soulmate Healer is the best by far!</div>
            <div class="avatar-wrapper"><img src="/welcome/images/testimonial3.jpg" loading="lazy" alt="" class="image">
              <div class="div-block">
                <div class="name-wrapper">
                  <div class="testimonial-name">Andrew S.</div>
                  <div class="testimonial-location">London, UK</div>
                </div>
                <div class="stars-wrapper"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"><img src="/welcome/images/star.png" loading="lazy" alt="" class="star"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button-wrapper">

		<a href="#" id="submitbtn" style="font-weight:400;font-size:25px;text-decoration:none;" value="Place an order">ORDER NOW</b>
			<br>
				<span style="font-weight:400" class="btn-sub-text">👉 And Watch Your Life Magically Change</span>
		</a>	
		</div>
		
        <div style="font-size:14px;" class="secure-badge">
            🔒 <div class="secure-checkout-text inverted">Safe &amp; Secure • 365 Money Back Guarantee</div>
        </div>
      </div>
      
    </div>
        <br><br><br><br>




        <div class="container disclaimer w-container" style="background-color:transparent;box-shadow:none;">
        <div class="row footer-guarantee" style="
    padding: 15px;
    border: 2px solid white;
    border-radius: 5px;
    margin-bottom: 25px;
    background-color:white;
;">
<div class="col-md-3 col-sm-12"><img src="/images/60.png" style="max-width:200px;"></div>
<div class="col-md-9 col-sm-12">
    <h3 style="margin-bottom:40px;">100% Satisfaction Guarantee!</h3>
    <p>You are fully protected by our <b>100% Satisfaction-Guaranteee</b>. So for that reason, I'll give you 60 days money back guarantee. If for any reason, or no reason at all, you're not 100% satisfied with what's inside, simply send me an email and I'll refund every penny of your order cost.</p>
</div>
</div>
        <p style="
    padding: 15px;
    margin-bottom: 25px;
    color:white;
;">
                        Disclaimer: The information contained herein should not be used as a substitute for the advice of appropriately qualified and licensed person. According to the laws in force, I must state that my services are for entertainments purposes only. I have no liability and/or responsibility for any actions and/or decisions any buyer/client chooses to take or make based on his/her consultation. You acknowledge that I am not a licensed psychologist, lawyer, or health care professional and my services do not replace the care of lawyers, psychologists, or other healthcare professionals. Tarot and numerology are in no way to be construed or substituted as psychological counseling or any other type of therapy or medical advice. I will at all times exercise my best professional efforts, skills, and care.</p>
               
            <p class="footer__copyright" style="text-align:center;"><a href="/tos">Terms & Conditions</a> |  <a href="/tos/#refunds">Refund Policy</a>  |  <a href="/contact">Contact Us</a> </p>

            
        </div>
        </div>

        <script type="text/javascript" src="https://www.digistore24.com/trusted-badge/27657/XndiegqX8o7IBba/salespage"></script>





    </body>

</html>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '692217912347910');
fbq('track', 'PageView');
</script>
</footer>
</body>

</html>