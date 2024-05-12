
    <!-- Footer -->
    <div class="footer">
        <div class="container">
              <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                   <img style="max-width:250px;" src="/images/logo.png" alt="alternative">
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
						<h4>  <br> <br> 
						</h2> 
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"> <a class="white" href="/tos">Terms & Conditions</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"> <a class="white" href="/tos/#refunds">REFUND POLICY</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>CONTACT</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body"><a class="white" href="/contact">Contact Us!</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="mailto:info@soulmatehealer.com">info@soulmatehealer.com</a> </div>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row"><p style="
    padding: 15px;
    border: 2px solid white;
    border-radius: 5px;
    margin-bottom: 25px
;">
                Disclaimer: The information contained herein should not be used as a substitute for the advice of appropriately qualified and licensed person. According to the laws in force, I must state that my services are for entertainments purposes only. I have no liability and/or responsibility for any actions and/or decisions any buyer/client chooses to take or make based on his/her consultation. You acknowledge that I am not a licensed psychologist, lawyer, or health care professional and my services do not replace the care of lawyers, psychologists, or other healthcare professionals. Tarot and numerology are in no way to be construed or substituted as psychological counseling or any other type of therapy or medical advice. I will at all times exercise my best professional efforts, skills, and care.</p></div>
         <div class="row footer-guarantee"  style="
    padding: 15px;
    border: 2px solid white;
    border-radius: 5px;
    margin-bottom: 25px
;">
<div class="col-md-3 col-sm-12 d-none d-lg-block"><img src="/images/60.png" style="max-width:200px;"></div>
<div class="col-md-9 col-sm-12">
    <h3 style="margin-bottom:40px;">100% Satisfaction Guarantee!</h3>
    <p>You are fully protected by our <b>100% Satisfaction-Guaranteee</b>. So for that reason, I'll give you 60 days money back guarantee. If for any reason, or no reason at all, you're not 100% satisfied with what's inside, simply send me an email and I'll refund every penny of your order cost.</p>
</div>
</div>
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">
        © 2024 Psychic Healer. All Rights Reserved.
      
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    <!-- Begin of Digistore24 Trusted Badge Code -->
<script type="text/javascript" src="https://www.digistore24.com/trusted-badge/27657/XndiegqX8o7IBba/salespage"></script>
<!-- End of Digistore24 Trusted Badge Code -->
    	
<style>
.img-fluid-test {
	width: 75px;
    border-radius: 50%;
}
.testimonial-bg {
text-align: left;margin-top: 15px;
}
</style>

    <script src="/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
   <script src="/js/validator.min.js"></script> <!--  Validator.js - Bootstrap plugin that validates forms -->
    <script src="/js/scripts.js?v=5"></script> <!-- Custom scripts -->


    <?php if ($startpixel == 1) { ?>
   
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

<?php 
if($_SESSION['PixelDATA'] == 1){
?>
fbq('init', '<?php echo $FBPixel; ?>', {
em: '<?php echo $_SESSION['Pixelemail']; ?>',        
fn: '<?php echo $_SESSION['Pixelfname']; ?>',    
ln: '<?php echo $_SESSION['Pixellname']; ?>',
bd: '<?php echo $_SESSION['Pixeldob']; ?>',
ge: '<?php echo $_SESSION['Pixelgender']; ?>',
external_id: '<?php echo $_SESSION['PixelID']; ?>'
});
fbq('track', 'PageView');
</script>

<?php 
}else{ 
?>
fbq('init', '<?php echo $FBPixel; ?>');
fbq('track', 'PageView');
</script>


<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $FBPixel; ?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<?php }} ?>
<?php echo $FBPurchasePixel; ?>

</body>
</html>						