<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/session.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
date_default_timezone_set('Europe/Bucharest');
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', '0');

$debounce = 0; //Debounce for email Verification
$startpixel  = 1; //Facebook pixel pageviews
$saveAbandoned = 1; //Save abandoned orders to database
$runAbandoned = 1; //Send abandoned messages
$push = 1; //Send push notifications for phone on sales

$FBPixel1 = "478846387559798"; //NEW Rodica
#$FBPixel1 = "163033846859083"; // OLD Rodica - R
$FBPixel2  = "692217912347910"; //Gabe - Facebook
$FBPixel3  = "792407324843664"; //ROI - F

$s1 = "SG.pR31EiejTfiWyldp7LT9Sg.8er6aUy8n2";
$s2 = "Bjf7tD49qnhWZzA_C39Y5tyjdydTMBFG4";
$sg = $s1.$s2;


//Data for FB Conversions API
$accessToken1 = "EAAxkvwzdc3kBOZCtyUl9uuYLLlOZC9dZBmPXI5km4IQFCS4i47ZAV2OWZAtDUyTuyOgM4wpPwmJbwYmUA6eojV82erYbSnndE9Qa";
$accessToken2 = "an2jyNX3nE3P8ZAcQh21w3exFt8UkOPw1FRHsaB7FmdZCOZAu6h2Bs9py8slHsIVfpSfLktpAb0jO3lpi34JoBa9aPIW8AZDZD";
$fbAccessToken1 = $accessToken1 . $accessToken2;
#$accessToken1 = "EAAxkvwzdc3kBOyptJvqbPM9PDyN5aD18NrHH4qV5xABNgPosmS4LNE9pXtuf3";
#$accessToken2 = "6ZBxBFTucuUyu4CNysn005Btf2hAUq8ADBmP3La5r23C0NFR5ke9ZC2bZC1LdT44X6ZBa7p5GZB8BpZBaJp2goi4KgEOdQAscMDEkgGJBxnfXhZALrsTufZAcWSgaKpzw76UgZDZD";
#$fbAccessToken1 = $accessToken1 . $accessToken2; //Rodica

$accessToken11 = "EAAJw55TSSlwBO8gbnFIRHkllZAvEZAaNXsfFVog3m4Yjg9MarZBo4V4on";
$accessToken22 = "vGMXaEuLZAIx5GmCcPrm72KHecMI7co54kJDBoaDRVYDJn8qhkJiYJpEC4Iovno59ZBMJZBeswtU2NCLNbGS2Jt69ZAyjcl2ANeh60mVfSiCvptvrZBtWC1gcEB1XgKUIsAI4LfsQZDZD";
$fbAccessToken2 = $accessToken11 . $accessToken22; //Gabe

$accessToken111 = "EAAxkvwzdc3kBOZBBGdpWyzu1N1Ll8pgVv3OcKZCgJcZA6nbY";
$accessToken222 = "eJpPKmK9gl4ZA5kQ4clP26DmvvB5xzfrTKnJZAxZBENgkZC3mSnV2sCYiXIf8ttt5asDiMTU7mvyAI52vZB6Q5Bs9aILA4ZAjZBgu7fWQkA84nXntW441EBNuYeMp6u9iEKN8k2fvGzXgtufMRXgZDZD";
$fbAccessToken3 = $accessToken111 . $accessToken222; //ROI

$sendFBAPI = 1; #Set to 1 to send data via api


$FBPurchasePixel = "";
$FBViewContent = "";
$productMETA = "";

#error_reporting(0);
#ini_set('display_errors', 0);

//Error to show users that try to buy but they are blacklisted
$BlacklistError = "Unexpected Error";

//START Order Messages
$processingWelcome = "We are now processing your *Order #%ORDERID%*\n\nYour order will be delivered to your email in %PRIORITY% hours or less.\n\nIf this is your first order your new account will be created automatically\n\nIn order to automatically login to your account just <%EMAILLINK%|Click Here!>\n\n_With Love!_\n*Soulmate Healer*";


//Complete Soulmate, Twin Flame & Future Spouse Text added Before and After Order Text
$generalOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$generalOrderFooter = "\n\nWhile I was drawing your psychic portrait, something amazing happened - I felt this deep connection with your energy, and it was like *your story was unfolding right before me*. I picked up on so many details about you. If you're curious and want to dive deeper into your Love life, Health, Finances, or any other area, I'm here for you. Just hit this link to get your very own detailed Psychic Reading:  https://soulmatehealer.com/readings/ \n\nWith Love,\n*Soulmate Healer* "; 

//Complete text used when user purchased premium but no reading
$generalOrderHeaderNoReading = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! Your drawing is complete and I hope you will enjoy it!";
#$generalOrderFooterNoReading = "\nIt was such a pleasure doing your drawing, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer* ";
$generalOrderFooterNoReading = "\n\nWhile I was drawing your psychic portrait, something amazing happened - I felt this deep connection with your energy, and it was like *your story was unfolding right before me*. I picked up on so many details about you. If you're curious and want to dive deeper into your Love life, Health, Finances, or any other area, I'm here for you. Just hit this link to get your very own detailed Psychic Reading:  https://soulmatehealer.com/readings/ \n\nWith Love,\n*Soulmate Healer* "; 

//Complete text when user purchased no reading and no premium
$generalOrderNoReading = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! \nIt was such a pleasure doing your drawing, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\n While I was drawing your psychic portrait, something amazing happened - I felt this deep connection with your energy, and it was like *your story was unfolding right before me*. I picked up on so many details about you. If you're curious and want to dive deeper into your Love life, Health, Finances, or any other area, I'm here for you. Just hit this link to get your very own detailed Psychic Reading:  https://soulmatehealer.com/readings/ \n\n With Love,\n*Soulmate Healer*  "; 

//Complete Future Baby Text added Before and After Order Text
$babyOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$babyOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer*";

//Complete Reading Text added Before and After Order Text
$readingOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$readingOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer*";

//Complete Past Life Text added Before and After Order Text
$pastOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$pastOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer*";


//Order Processing & Order Complete Notifications
$OrderProcessingMessage = "Your Order status is now set to *Processing*!";

$OrderCompleteMessage = "Your Order status is now set to *Complete*!";
$ContinueConvoMsg = "If you want to chat with Soulmate Healer, simply reply to this conversation!";
//END Order Messages

$monthlyEnergyHeader = "Dear %FIRSTNAME%,\n\nYour monthly Energy Reading for %MONTH% is ready!\n\n";
$monthlyEnergyFooter = "\n\nWith warmth and insight,\nSoulmate Healer";

$weeklyEnergyHeader = "Dear %FIRSTNAME%,\n\nYour Energy Reading for next week is ready!\n\n";
$weeklyEnergyFooter = "\n\nWith warmth and insight,\nSoulmate Healer";


//EMAIL TEXTS
$AbandonSubject = "The Timer's Going Off on Your Order!";
$AbandonMessage = "Look's like you forgot to finish your order... But don't worry, we kept it safe for you! Click the button below to finish your purchase & get closer to your soulmate.";


$firstAbandon = "Hi %FIRSTNAME%,\n\nThanks for requesting your very own %PRODUCT%, you are so close to getting it.\n\nIn case you haven't completed the payment for your sketch, <%LINK%|CLICK HERE>   NOTE: (If you did already purchase, you can disregard this)\n\nI cannot wait to show you your %PRODUCT%, it may actually surprise you!\n\nFinish Completing Your %PRODUCT% Order <%LINK%|here>\n\nBest Wishes,\n\nSoulmate Healer";
$secondAbandon = "Hi %FIRSTNAME%,\n\nWe noticed you started a purchase of %PRODUCT%, but didn't complete it.\n\nIn case the price was an issue we are prepared to provide you with one time only special 20% discount.\n\nYou can claim it by <%LINK%|CLICKING HERE>   NOTE: (If you did already purchase, you can disregard this)\n\nI understand some people can't afford my products so sometimes I reward some with discounts!\n\nFinish Completing Your %PRODUCT% Order <%LINK%|here>\n\nBest Wishes,\n\nSoulmate Healer";

include_once $_SERVER['DOCUMENT_ROOT'].'/config/functions.php';
?>