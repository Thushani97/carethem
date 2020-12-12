// NAVIGATION CALLBACK
jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

function charity_fundraiser_resMenu_open() {
	window.charity_fundraiser_mobileMenu=true;
	jQuery(".side-nav").addClass('show');
}
function charity_fundraiser_resMenu_close() {
	window.charity_fundraiser_mobileMenu=false;
	jQuery(".side-nav").removeClass('show');
}

jQuery(function($){
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 100) {
	        $('.toggle-menu').addClass('sticky');
	    }
	    else {
	        $('.toggle-menu').removeClass('sticky');
	    }
	});

	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});

	$(window).load(function() {
		$(".tg-loader").delay(2000).fadeOut("slow");
	    $("#overlayer").delay(2000).fadeOut("slow");
	});
	$(window).load(function() {
		$(".preloader").delay(2000).fadeOut("slow");
	    $(".preloader .preloader-container").delay(2000).fadeOut("slow");
	});

	// back to top.
	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});

	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 200 );
		return false;
	});
});

jQuery(window).load(function() {
	window.charity_fundraiser_currentfocus=null;
	charity_fundraiser_checkfocusdElement();
	var charity_fundraiser_body = document.querySelector('body');
	charity_fundraiser_body.addEventListener('keyup', charity_fundraiser_check_tab_press);
	var charity_fundraiser_gotoHome = false;
	var charity_fundraiser_gotoClose = false;
	window.charity_fundraiser_mobileMenu=false;
	function charity_fundraiser_checkfocusdElement(){
	    if(window.charity_fundraiser_currentfocus=document.activeElement.className){
	        window.charity_fundraiser_currentfocus=document.activeElement.className;
	    }
	}
	function charity_fundraiser_check_tab_press(e) {
	    "use strict";
	    // pick passed event or global event object if passed one is empty
	    e = e || event;
	    var activeElement;

	    if(window.innerWidth < 999){
		    if (e.keyCode == 9) {
		        if(window.charity_fundraiser_mobileMenu){
				    if (!e.shiftKey) {
				        if(charity_fundraiser_gotoHome) {
				            jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
				        }
				    }
				    if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
				        charity_fundraiser_gotoHome = true;
				    } else {
				        charity_fundraiser_gotoHome = false;
				    }
		    	}
		    }
	    }
	    if (e.shiftKey && e.keyCode == 9) {
		    if(window.innerWidth < 999){
			    if(window.charity_fundraiser_currentfocus=="header-search"){
			        jQuery("button.mobiletoggle").focus();
			    }else{
				    if(window.charity_fundraiser_mobileMenu){
				        if(charity_fundraiser_gotoClose){
				        	jQuery("a.closebtn.responsive-menu").focus();
				        }
				        if(jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
				            charity_fundraiser_gotoClose = true;
				        } else {
				            charity_fundraiser_gotoClose = false;
				        }
				    }
			    }
		    }
	    }
	    charity_fundraiser_checkfocusdElement();
	}
});