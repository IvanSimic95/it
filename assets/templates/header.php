<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
use Melbahja\Seo\MetaTags;
if(isset($t_product_name)){
$metatags = new MetaTags();
$metatags
        ->title($title)
        ->description($description)
        ->meta('author', 'Soulmate Healer')
        ->image('https://soulmatehealer.com/images/products/'.$t_product_form_name.'.png')
        ->mobile('https://soulmatehealer.com/images/products/'.$t_product_form_name.'.png')
        ->canonical($url);


}else{
$metatags = new MetaTags();
$metatags
          ->title($title)
          ->description($description)
          ->meta('author', 'Soulmate Healer')
          ->image('https://soulmatehealer.com/images/soulmate-05.png')
          ->mobile('https://soulmatehealer.com/images/soulmate-05.png')
          ->canonical($url);
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  

    <!-- Website Title -->
    
<?php echo $metatags; ?>
    <!-- Styles -->
<?php echo $productMETA; ?>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/fontawesome-all.css" rel="stylesheet">
    <link href="/css/swiper.css" rel="stylesheet">
	<link href="/css/magnific-popup.css" rel="stylesheet">
	<link href="/css/styles.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/review.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<?php if($debounce == 1){ ?>
  <script type="text/javascript">
DeBounce_APIKEY = 'public_WnlvZnE2TkZCSjNjeG9yUWNPODV1dz09'; // Your DeBounce Public API Key.
DeBounce_DisablePlaceholder = 'true'; // Disable converting the invalid email to placeholder or not.
DeBounce_DisableLink = 'true'; // Disable link to DeBounce website or not.
DeBounce_DisableTooltip = 'true';
DeBounce_RedBackgound = 'true'; // Convert input background to red for an invalid email or not.
</script>

<script async type="text/javascript" src="https://cdn.debounce.io/widget/DeBounce.v2.js"></script>
<?php }  ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q0FGHPWR8X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q0FGHPWR8X');
</script>
	<!-- Favicon  -->
    <link rel="icon" href="/images/favicon.png">

<!-- 100% privacy-first analytics -->
<script async defer src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
<noscript><img src="https://queue.simpleanalyticscdn.com/noscript.gif" alt="" referrerpolicy="no-referrer-when-downgrade" /></noscript>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">


            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/"><img src="/images/logo.png?v=2" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Pannello di controllo</a>
                    </li>

                </ul>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
