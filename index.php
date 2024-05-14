<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
$t_product_name = "SOULMATE";
$t_product_form_name = "soulmate";
$title = "Disegno dell'anima | Guaritore dell'anima";
$description = "Disegnerò il tuo ANIMA GEMELLA con una precisione del 100%";



$PRurl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]".strtok($_SERVER["REQUEST_URI"],'?');

$productMETA = <<<EOT
    <!-- Meta Catalog Tags --> 
    <meta property="og:url" content="$PRurl" />
    <meta property="og:type" content="website" />

    <meta property="product:brand" content="Soulmate Healer">
    <meta property="product:availability" content="in stock">
    <meta property="product:condition" content="new">
    <meta property="product:price:amount" content="29">
    <meta property="product:price:currency" content="USD">
    <meta property="product:retailer_item_id" content="$t_product_form_name">


EOT;

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
                                <img class="img-fluid" src="/images/yey1.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div class="col-lg-6 col-xl-5">
						<div class="header-box" id="order" >
                        <h1 style="margin-top: 10px;">DISEGNO PSICHICO DELLA TUA ANIMA GEMELLA</h1>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> Recensioni</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Precisione al 99%<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Garanzia Soddisfatti o rimborsati<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Ordina ora, lo ricevi entro un’ora</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">19€</h2>  
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">59€</h2> 
						<p style="display:none;">You save <span class="saveda"><b>270€</b> (90%)</span></p>
						</div>
						
						

						<div class="form-container">
						<p style="text-align:center;margin-top: -20px;font-size: 15px;"> Inizia la tua esperienza compilando il modulo qui sotto:</p>
                        <form id="ajax-form" class="form-order" name="order_form" action="javascript:void(0)" method="post">
								<div class="form-group">
									<input type="text" class="form-control-input" id="sname" name="form_name" oninvalid="setCustomValidity('Please enter Full Name without numbers or symbols!')" title="Please enter Full Name without numbers or symbols!" pattern="[a-zA-Z][a-zA-Z\s]*" required>
									<label class="label-control" for="sname">Nome completo</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control-input" id="semail" name="form_email" required>
									<label class="label-control" for="semail">Indirizzo email</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
                                <div class="form_box">
                                    <div style="text-align:start;">La tua data di nascita</div>
                                    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/date.php'; ?>
                                </div>
									<div class="help-block with-errors"></div>
								</div>
                                <div style="text-align:start;">Priorità di consegna:</div>
                                <div class="form_box input-group form-group" style="    padding-bottom: 52px;">
                                
                                    <input id="prio1" type="radio" name="priority" value="1">
                                    <label for="prio1"><span><i style="color:#ffaf00;" class="fas fa-bolt" aria-hidden="true"></i>1 ora</span></label>
                                    
                                    <input id="prio24" type="radio" name="priority" value="24">
                                    <label for="prio24"> <span><i style="color:#c19bff;" class="fas fa-stopwatch" aria-hidden="true"></i>24 ore</span></label>
                                    
                                    <input id="prio48" type="radio" name="priority" value="48" checked="true">
                                    <label for="prio48"> <span><i  class="fas fa-clock" aria-hidden="true"></i>48 ore</span></label>
                                </div>

                            <input class="product" type="hidden" name="product" value="soulmate">
                      
                            <input class="fbproduct" type="hidden" name="fbSource" value="<?php echo $_SESSION['fbSource']; ?>">
                            <input class="fbproduct" type="hidden" name="fbCampaign" value="<?php echo $_SESSION['fbCampaign']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAdset" value="<?php echo $_SESSION['fbAdset']; ?>">
                            <input class="fbproduct" type="hidden" name="fbAd" value="<?php echo $_SESSION['fbAd']; ?>">
                            
                            <div id="error" class="alert alert-danger" style="display: none"></div>

								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">EFFETTUA IL TUO ORDINE<i class="fa-solid fa-arrow-right"></i></button>
								</div>
								
								<img style="width: 100%;" src="/images/payment-icons.webp">
								<p style="font-size:12px;margin-top:7px;margin-bottom: -10px;"><img style="width: 100%;max-width: 28px;padding: 3px;" src="/images/tarot-cards.png">Accetto solo un altro ordine per oggi! <i class="fa-solid fa-fire-flame-curved"></i> 4 venduti</p>
								
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
                        <h2>DISEGNO PSICHICO DELLA TUA ANIMA GEMELLA</h2>
						<br> <p style="color:#d9480d;text-align:center;"><b>💕 Cara Anima Splendida, 💕</b></p>
 <p>Sei stanco dell'incessante ricerca dell'amore? Desideri una connessione che parli alla tua anima e un compagno veramente destinato a te?    </p> 
 <p>  Sono Il Guaritore dell'Anima Gemella, e sono qui per svelare i misteri del tuo cuore, per guidarti verso un amore che va oltre l'immaginazione, un amore esclusivamente tuo. </p> 
<br><p style="color:#d9480d;text-align:center;"><b> 🌟 Cos'è un Disegno dell'Anima Gemella? 🌟 </b> </p>
 <p> Un Disegno dell'Anima Gemella è la tua porta personale verso il futuro. Non è solo un ritratto; è la rivelazione del compagno che il destino ti ha riservato, combinata con le mie intuizioni psichiche e i miei talenti artistici per avvicinarti a questo amore. È uno specchio che riflette la vera essenza del tuo cuore e la persona destinata a completarti. </p> 
 <br><p style="color:#d9480d;text-align:center;"> 🌷 Sentiti Visto, Sentiti Compreso... 🌷 </b></p>
<p>  Ti sei mai sentito solo in mezzo a una folla, come se nessuno ti capisse veramente? Ridi, parli, ma dentro di te ti chiedi, “Dov'è colui che mi vede davvero? Chi comprende il vero me?”. Tutti desideriamo qualcuno che conosca la nostra storia, che capisca il nostro silenzio, che ci faccia sentire parte di qualcosa.</p> 
<p>Immagina finalmente di incontrare qualcuno che comprende il tuo modo di scherzare, che conosce le tue canzoni preferite, che riesce a farti sorridere semplicemente essendo presente. Immagina di avere un amico, un compagno, qualcuno con cui condividere i tuoi sogni e le tue preoccupazioni. Qualcuno che ti conosce, il vero te, e ti ama per questo, nonostante tutto. </p> 
<p> Non si tratta solo di trovare l'amore. Si tratta di trovare la tua altra metà, il tuo vero amico, colui che ti fa sentire completo, compreso e veramente a casa. Si tratta di sentirsi visti, amati, per ciò che si è veramente.</p> 
<p> Sono qui per aiutarti a trovare questo amico, questa anima gemella. La disegnerò per te e ti dirò come la incontrerai. La tua anima gemella non è solo qualcuno da amare; è il tuo migliore amico, il tuo complice, la spalla su cui puoi appoggiarti. Quindi, sei pronto a incontrare chi danzerà nella vita con te, ridendo tutto il tempo? </p> 

 <br><p style="color:#d9480d;text-align:center;"><b> 💖 Il Tuo Viaggio verso la Scoperta di ciò che sei... 💖 </b></p>
 <p> Incontra non solo un partner, ma un'anima che ti guiderà verso una profonda scoperta di ciò che sei e una maggiore comprensione. Questo incontro trasformativo è la tua opportunità per sbocciare e vivere una crescita emotiva e spirituale come mai prima d'ora.  </p> 
 <br><p style="color:#d9480d;text-align:center;"><b> 💖 La Tua Felicità, Garantita! 💖 </b>  </p>
 <p>  La tua felicità è la mia missione! Se il disegno della tua anima gemella non ti porta la gioia e la chiarezza che speravi, basta che tu mi contatti. Rimborserò ogni centesimo immediatamente, senza domande, senza problemi! Ho a cuore la tua serenità e soddisfazione! </p> 

 <br><p> <b>💠 💠 Nota Bene: Questo è un prodotto consegnato digitalmente direttamente alla tua email. Nessun oggetto fisico verrà inviato a casa tua, il che permetterà un'esperienza rapida e fluida! </p> 
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

                   
                
                    <div class="col-12" style="margin-top:15px;">
                    <div class="image-container">
                        <img class="img-fluid" src="/images/yey.jpg" alt="alternative" style="border-radius: 0.5rem;">
                    </div> 
                    </div> 
                </div>
                
                <div class="col-lg-12">
                
				<br><a style="width:100%;text-align:center;" class="btn-solid-reg" href="#order">Ordina Ora</a>
                <br clear="all"> <br clear="all">
                <p> <b> Sei completamente protetto dalla garanzia di soddisfazione al 100%! </b> 
				Se per qualsiasi motivo, non sei completamente soddisfatto di ciò che hai ricevuto, inviami semplicemente una email e ti rimborserò ogni centesimo del costo del tuo ordine. </p> 
				 <p> <center> <strong>  <FONT COLOR="#d9480d">  Foto dei clienti:  </FONT> </strong><center>  </p> 
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
  
<br clear="all">			
				
            </div>  
        </div>  
    </header>  

    <script>
jQuery('input[name="priority"]').change(function(){
    if (this.value == '1') {
        jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('39€').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('129€').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>540€</b> (90%)').animate({'opacity': 1}, 400);});	
    }
    if (this.value == '24') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('29€').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('89€').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>360€</b> (90%)').animate({'opacity': 1}, 400);});
    }
    if (this.value == '48') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('19€').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('59€').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>270€</b> (90%)').animate({'opacity': 1}, 400);});
    }
})
</script>

    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>
    <script>
  fbq('track', 'Schedule');
</script>