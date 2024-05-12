
(function($) {
    "use strict"; 
	


	
	/* Navbar Scripts */
	// jQuery to collapse the navbar on scroll
    $(window).on('scroll load', function() {
		if ($(".navbar").offset().top > 60) {
			$(".fixed-top").addClass("top-nav-collapse");
		} else {
			$(".fixed-top").removeClass("top-nav-collapse");
		}
    });

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$(document).on('click', 'a.page-scroll', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 600, 'easeInOutExpo');
			event.preventDefault();
		});
	});

    // closes the responsive menu on menu item click
    $(".navbar-nav li a").on("click", function(event) {
    if (!$(this).parent().hasClass('dropdown'))
        $(".navbar-collapse").collapse('hide');
    });


    /* Image Slider - Swiper */
    var imageSlider = new Swiper('.image-slider', {
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
		},
        loop: true,
        spaceBetween: 30,
        slidesPerView: 5,
		breakpoints: {
            // when window is <= 580px
            580: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window is <= 768px
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window is <= 992px
            992: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            // when window is <= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            },

        }
    });


    /* Text Slider - Swiper */
	var textSlider = new Swiper('.text-slider', {
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
		},
        loop: true,
        navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		}
    });


    /* Video Lightbox - Magnific Popup */
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/', 
                    id: function(url) {        
                        var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                        if ( !m || !m[1] ) return null;
                        return m[1];
                    },
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                },
                vimeo: {
                    index: 'vimeo.com/', 
                    id: function(url) {        
                        var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
                        if ( !m || !m[5] ) return null;
                        return m[5];
                    },
                    src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                }
            }
        }
    });


    /* Details Lightbox - Magnific Popup */
	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false, /* keep it false to avoid html tag shift with margin-right: 17px */
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});
    
    
    /* Move Form Fields Label When User Types */
    // for input and textarea fields
    $("input, textarea").keyup(function(){
		if ($(this).val() != '') {
			$(this).addClass('notEmpty');
		} else {
			$(this).removeClass('notEmpty');
		}
    });


		 

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


    function csubmitForm() {
        // initiate variables with form content
		var email = $("#semail").val();
		var name = $("#sname").val();
		var password = $("#spassword").val();
        var terms = $("#sterms").val();

        $("#error").hide();
        $("#submitbtn").html('<i class="fas fa-spinner fa-pulse"></i> Loading...');
        $("#submitbtn").prop('disabled', true);
        
        $.ajax({
            type:"POST",
            url: "/ajax/order.php",
            dataType: 'json',
            data: $(this).serialize(),
            success: function(data){
              var SubmitStatus = data[0];
              var DataMSG = data[1];
 
              if (SubmitStatus == "Success"){
              var Redirect = data[2];
              $("#show_message").html(DataMSG);
              $("#show_message").fadeIn();
              $("#submitbtn").html('<i class="fas fa-spinner fa-pulse"></i> Redirecting...');
              
              setTimeout(function(){
                window.location.href = Redirect;
              }, 2000);

              }else{
              $("#error").html(DataMSG);
              $("#error").fadeIn();
              $("#submitbtn").html("Error Occured!");
              }

            }
        });
	}




	/* Removes Long Focus On Buttons */
	$(".button, a, button").mouseup(function() {
		$(this).blur();
	});

    $(document).ready(function(){
$('.chat').click(function(){
    var id = $(this).attr('id').replace(/talkjs-/, '');
    $('#talkjs-container-' + id).parent().show();
    var pannels = 0
    jQuery('.chat_box').each(function(){
        if (jQuery(this).is(':visible') ) {
            jQuery(this).css('right', pannels + 'px')
            pannels = pannels + 440;
        }

    })
})

$('.chat_box .fas').click(function(){
    $(this).parent().hide();
    var pannels = 0
    jQuery('.chat_box').each(function(){
        if (jQuery(this).is(':visible') ) {
            jQuery(this).css('right', pannels + 'px')
            pannels = pannels + 440;
        }

    })
})
})

})(jQuery);