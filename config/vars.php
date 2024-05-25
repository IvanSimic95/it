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
$sendFBAPI = 1; #Set to 1 to send data via api

//FB Pixel and Token
$FBPixel1 = "478846387559798";

$accessToken1 = "EAAxkvwzdc3kBO3TWd9qS3EsGAjhcMIwaTr5YrTG3XgSATlq3Ii5G68f2ESi049njNzs8pFIwE849ZBQlbA5akyZArNRwafQZCuqBk7JY6DvfD";
$accessToken2 = "4DTOaopUqqsLskRN7fhWSm7nMgenRZBSfaOAhZBLTLpFZAObsn5W3Lf6P6GjM1GNxvwFZBpp0XuZA8zIZCxoXAZDZD";
//End FB Setup




$fbAccessToken1 = $accessToken1 . $accessToken2;


$s1 = "SG.pR31EiejTfiWyldp7LT9Sg.8er6aUy8n2";
$s2 = "Bjf7tD49qnhWZzA_C39Y5tyjdydTMBFG4";
$sg = $s1.$s2;


$FBPurchasePixel = "";
$FBViewContent = "";
$productMETA = "";

#error_reporting(0);
#ini_set('display_errors', 0);

//Error to show users that try to buy but they are blacklisted
$BlacklistError = "Unexpected Error";

//START Order Messages
$processingWelcome = "Stiamo elaborando il tuo *Ordine #%ORDERID%*\n\n Il tuo ordine verrà consegnato alla tua email in %PRIORITY% ore o meno.\n\n Se questo è il tuo primo ordine, il tuo nuovo account verrà creato automaticamente \n\n Per accedere automaticamente al tuo account basta <%EMAILLINK%|Clicca qui!>\n\n_Con amore!_\n*Il Guaritore Delle Anime*";


//Complete Soulmate, Twin Flame & Future Spouse Text added Before and After Order Text
$generalOrderHeader = " %FIRSTNAME%\n\n Prima di tutto, grazie mille per avermi dato l'opportunità di creare una connessione significativa con te! Mentre continuiamo, per favore mettiti comodo e senti con tutto il cuore tutto ciò che ho visto mentre ti connetti con la tua aura ed energia. Spero che condividere questo con te accenderà una luce di gioia nel tuo cuore e ti farà sapere che cose belle sono in arrivo.\n\n";
$generalOrderFooter = "\n\n Mentre disegnavo il suo ritratto psichico, è accaduto qualcosa di straordinario: ho sentito una profonda connessione con la sua energia ed è stato come se la tua storia si stesse svolgendo proprio davanti a me. Ho colto molti dettagli su di te, ma alcune cose mi preoccupano e vorrei discuterne con te personalmente. Puoi contattarmi direttamente su Facebook https://m.me/IlGuaritoreDelleAnime o su whatsapp +393773102820 \n\nCon amore,\n*Il Guaritore Delle Anime*"; 

//Complete text used when user purchased premium but no reading
$generalOrderHeaderNoReading = " %FIRSTNAME%\n\n Prima di tutto, grazie mille per avermi dato l'opportunità di creare una connessione significativa con te! Il tuo disegno è completo e spero che ti piaccia!";
#$generalOrderFooterNoReading = "\nIt was such a pleasure doing your drawing, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer* ";
$generalOrderFooterNoReading = "\n\n Mentre disegnavo il suo ritratto psichico, è accaduto qualcosa di straordinario: ho sentito una profonda connessione con la sua energia ed è stato come se la tua storia si stesse svolgendo proprio davanti a me. Ho colto molti dettagli su di te, ma alcune cose mi preoccupano e vorrei discuterne con te personalmente. Puoi contattarmi direttamente su Facebook https://m.me/IlGuaritoreDelleAnime o su whatsapp +393773102820 \n\nCon amore,\n*Il Guaritore Delle Anime*"; 

//Complete text when user purchased no reading and no premium
$generalOrderNoReading = " %FIRSTNAME%\n\n Prima di tutto, grazie mille per avermi dato l'opportunità di creare una connessione significativa con te! Il tuo disegno è completo e spero che ti piaccia! With Love,\n*Il Guaritore Delle Anime*  "; 

//Complete Future Baby Text added Before and After Order Text
$babyOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$babyOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Il Guaritore Delle Anime*";

//Complete Reading Text added Before and After Order Text
$readingOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$readingOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Il Guaritore Delle Anime*";

//Complete Past Life Text added Before and After Order Text
$pastOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$pastOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Il Guaritore Delle Anime*";


//Order Processing & Order Complete Notifications
$OrderProcessingMessage = "Lo stato del tuo ordine è ora impostato su *In elaborazione*!";

$OrderCompleteMessage = "Lo stato del tuo ordine è ora impostato su *Completo*!";
$ContinueConvoMsg = "Se vuoi chattare, rispondi semplicemente a questa conversazione!";
//END Order Messages

$monthlyEnergyHeader = "Dear %FIRSTNAME%,\n\nYour monthly Energy Reading for %MONTH% is ready!\n\n";
$monthlyEnergyFooter = "\n\nWith warmth and insight,\nSoulmate Healer";

$weeklyEnergyHeader = "Dear %FIRSTNAME%,\n\nYour Energy Reading for next week is ready!\n\n";
$weeklyEnergyFooter = "\n\nWith warmth and insight,\nSoulmate Healer";


//EMAIL TEXTS
$AbandonSubject = "The Timer's Going Off on Your Order!";
$AbandonMessage = "Sembra che tu abbia dimenticato di completare il tuo ordine... Ma non preoccuparti, l'abbiamo conservato per te! Clicca il pulsante qui sotto per completare il tuo acquisto e avvicinarti alla tua anima gemella.";


$firstAbandon = "Ciao %FIRSTNAME%,\n\nGrazie per aver richiesto il tuo proprio %PRODUCT%, sei così vicino a ottenerlo.\n\nIn caso non avessi completato il pagamento per il tuo disegno, <%LINK%|clicca qui>   NOTE: (If you did already purchase, you can disregard this)\n\nI cannot wait to show you your %PRODUCT%, it may actually surprise you!\n\nFinish Completing Your %PRODUCT% Order <%LINK%|here>\n\nBest Wishes,\n\nSoulmate Healer";
$secondAbandon = "Ciao %FIRSTNAME%,\n\nWe noticed you started a purchase of %PRODUCT%, but didn't complete it.\n\nIn case the price was an issue we are prepared to provide you with one time only special 20% discount.\n\nYou can claim it by <%LINK%|CLICKING HERE>   NOTE: (If you did already purchase, you can disregard this)\n\nI understand some people can't afford my products so sometimes I reward some with discounts!\n\nFinish Completing Your %PRODUCT% Order <%LINK%|here>\n\nBest Wishes,\n\nSoulmate Healer";

include_once $_SERVER['DOCUMENT_ROOT'].'/config/functions.php';
?>