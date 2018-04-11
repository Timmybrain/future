/*------------------------------------
	Theme Name: Max Law
	Start Date : 15-Fab-2017
	End Date : 
	Last change: 
	Version: 1.0
	Assigned to:
	Primary use:
---------------------------------------*/
/*	

	+ About Section
	+ Responsive Caret
	+ Expand Panel Resize
	+ Google Map
	+ Sticky Menu
	
	+ Document On Ready
		- Scrolling Navigation
		- Set Sticky Menu
		- Responsive Caret
		- Expand Panel
		- Collapse Panel
		- Search
		- Largest Post
		- Video Carousel
		- Skill Block
		- Contact Map
		- Quick Contact Form
	
	+ Window On Scroll
		- Set Sticky Menu
		
	+ Window On Resize
		- Expand Panel Resize
		
	+ Window On Load
		- Site Loader
		- Largest Post
		
*/

(function($) {

	"use strict"
	
	/* - About Section */
	function about_img() {
		var width = $(window).width();
		var about_section_height = $(".about-section").height();
		var ele_id = 0;
		if ( width >= 992 ) {
			$( ".about-img-block" ).removeAttr("style");
			$( ".about-img-block img" ).remove();
			var about_img = $(".about-img-block").attr("data-image");
			$( ".about-img-block" ).css({"background-image":"url('" + about_img + "')","height": about_section_height });
		} else {
			$( ".about-img-block" ).removeAttr("style");
			$( ".about-img-block img" ).remove();
			var about_img = $(".about-img-block").attr("data-image");
			$( ".about-img-block" ).append("<img src='"+ about_img +"' />")
		}
	}
	
	/* + Responsive Caret* */
	function menu_dropdown_open(){
		var width = $(window).width();
		if($(".ownavigation .nav li.ddl-active").length ) {
			if( width > 991 ) {
				$(".ownavigation .nav > li").removeClass("ddl-active");
				$(".ownavigation .nav li .dropdown-menu").removeAttr("style");
			}
		} else {
			$(".ownavigation .nav li .dropdown-menu").removeAttr("style");
		}
	}
	
	/* + Expand Panel Resize * */
	function panel_resize(){
		var width = $(window).width();
		if( width > 991 ) {
			if($(".header_s #slidepanel").length ) {
				$(".header_s #slidepanel").removeAttr("style");
			}
		}
	}
	
	/* + Google Map* */
	function initialize(obj) {
		var lat = $("#"+obj).attr("data-lat");
        var lng = $("#"+obj).attr("data-lng");
		var contentString = $("#"+obj).attr("data-string");
		var myLatlng = new google.maps.LatLng(lat,lng);
		var map, marker, infowindow;
		var image =  $("#"+obj).attr("data-pin");
		var zoomLevel = parseInt($("#"+obj).attr("data-zoom") ,10);		
		var styles = [{"featureType": "administrative.province","elementType": "all","stylers": [{"visibility": "off"}]},
					 {"featureType": "landscape","elementType": "all","stylers": [{"saturation": -100},{"lightness": 65},{"visibility": "on"}]},
					 {"featureType": "poi","elementType": "all","stylers": [{"saturation": -100},{"lightness": 51},{"visibility": "simplified"}]},
					 {"featureType": "road.highway","elementType": "all","stylers": [{"saturation": -100},{"visibility": "simplified"}]},
					 {"featureType": "road.arterial","elementType": "all","stylers": [{"saturation": -100},{"lightness": 30},{"visibility": "on"}]},
					 {"featureType": "road.local","elementType": "all","stylers": [{"saturation": -100},{"lightness": 40},{"visibility": "on"}]},
					 {"featureType": "transit","elementType": "all","stylers": [{"saturation": -100},{"visibility": "simplified"}]},
					 {"featureType": "transit","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},
					 {"featureType": "water","elementType": "geometry","stylers": [{"hue": "#ffff00"},{"lightness": -25},{"saturation": -97}]},
					 {"featureType": "water","elementType": "labels","stylers": [{"visibility": "on"},{"lightness": -25},{"saturation": -100}]}]
		var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});	
		
		var mapOptions = {
			zoom: zoomLevel,
			disableDefaultUI: true,
			center: myLatlng,
            scrollwheel: false,
			mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, "map_style"]
			}
		}
		
		map = new google.maps.Map(document.getElementById(obj), mapOptions);	
		
		map.mapTypes.set("map_style", styledMap);
		map.setMapTypeId("map_style");
		
		if( contentString != "" ) {
			infowindow = new google.maps.InfoWindow({
				content: contentString
			});
		}		
	    
        marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: image
		});

		google.maps.event.addListener(marker, "click", function() {
			infowindow.open(map,marker);
		});
	}
	
	/* + Sticky Menu */
	function sticky_menu() {
		var menu_scroll = $(".header_s").offset().top;
		var scroll_top = $(window).scrollTop();
		
		if ( scroll_top > menu_scroll ) {
			$(".header_s .ownavigation").addClass("navbar-fixed-top animated fadeInDown");
		} else {
			$(".header_s .ownavigation").removeClass("navbar-fixed-top animated fadeInDown"); 
		}
	}
	
	/* + Document On Ready */
	$(document).on("ready", function() {

		/* - Scrolling Navigation* */
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Set Sticky Menu* */
		if( $(".header_s").length ) {
			sticky_menu();
		}
		
		$('.navbar-nav li a[href*="#"]:not([href="#"]), .site-logo a[href*="#"]:not([href="#"])').on("click", function(e) {
	
			var $anchor = $(this);
			
			$("html, body").stop().animate({ scrollTop: $($anchor.attr("href")).offset().top - 49 }, 1500, "easeInOutExpo");
			
			e.preventDefault();
		});

		/* - Responsive Caret* */
		$(".ddl-switch").on("click", function() {
			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}
			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});
		
		/* - Expand Panel * */
		$("#slideit").on ("click", function() {
			$("#slidepanel").slideDown(1000);
			$("html").animate({ scrollTop: 0 }, 1000);
		});	

		/* - Collapse Panel * */
		$("#closeit").on("click", function() {
			$("#slidepanel").slideUp("slow");
			$("html").animate({ scrollTop: 0 }, 1000);
		});	
		
		/* Switch buttons from "Log In | Register" to "Close Panel" on click * */
		$("#toggle a").on("click", function() {
			$("#toggle a").toggle();
		});
		
		panel_resize();
		
		$('#basic').flagStrap();
		
		/* - Revolution Slider */
		if($(".slider-section").length){
			$("#home-slider1").revolution({
				sliderType:"standard",
				delay:6000,
				responsiveLevels:[1920,1025,768,480],
				gridwidth:[1920,1025,768,480],
				gridheight:[759,600,500,400],
				navigation: {
					arrows:{
						enable:true,
						style:"uranus",
						hide_onmobile:false,
						hide_onleave:true,
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:53,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:53,
							v_offset:0
						}
					}
				},
			});
			
			$("#home-slider2").revolution({
				sliderType:"standard",
				delay:6000,
				responsiveLevels:[1920,1025,768,480],
				gridwidth:[1920,1025,768,480],
				gridheight:[759,600,500,400],
				navigation: {
					arrows:{
						enable:true,
						style:"uranus",
						hide_onmobile:true,
						hide_under:600,
						hide_onleave:true,
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:53,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:53,
							v_offset:0
						}
					},
					bullets: {
						enable:true,
						style:"zeus",
						hide_onmobile:true,
						hide_under:767,
						hide_onleave:false,
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:60,
						space:17,
						tmp:''
					}
				},
			});
		}
		
		/* - About Section */
		if($(".about-section").length){
			about_img();
		}
		
		/* -- Pie Chart  */
		$(".skill-progress").each(function ()
		{		
			var $this = $(this);
			var myVal = $(this).data("value");	

			$this.appear(function()
			{
				var skill_item_count = 0;
				var skills_count = 0;

				skill_item_count = $( "[id*='skill_count-']" ).length;

				for(var i=1; i<=skill_item_count; i++)
				{
					skills_count = $( "[id*='skill_count-"+i+"']" ).attr( "data-skills_percent" );
					$("[id*='skill_count-"+i+"']").animateNumber({ number: skills_count }, 2000);
				}
			});				
		});
		
		$(".dial").each(function ()
		{
			var $this = $(this);
			var myVal = $(this).data("value");		

			$this.appear(function()
			{
				// alert(myVal);
				$this.knob({ });
				$({ value: 0 }).animate({ value: myVal },
				{
					duration: 2000,
					easing: 'swing',
					step: function ()
					{
						$this.val(Math.ceil(this.value)).trigger("change");
					}
				});
			});
		});
		
		/* - Features Carousel */
		if( $(".feature-carousel").length ) {
			if($('html[dir="rtl"]').length) {
				$(".feature-carousel").owlCarousel({
					loop: true,
					margin: 0,
					nav: true,
					dots: false,
					rtl: true,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						640:{
							items: 2
						},
						992:{
							items: 3
						}
					}
				});
			} else {
				$(".feature-carousel").owlCarousel({
					loop: true,
					margin: 0,
					nav: true,
					dots: false,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						640:{
							items: 2
						},
						992:{
							items: 3
						}
					}
				});
			}
		}
		
		/* - Team Carousel */
		if( $(".team-carousel").length ) {
			if($('html[dir="rtl"]').length) {
				$(".team-carousel").owlCarousel({
					loop: true,
					margin: 0,
					nav: false,
					dots: true,
					rtl: true,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						640:{
							items: 2
						},
						992:{
							items: 3
						}
					}
				});
			} else {
				$(".team-carousel").owlCarousel({
					loop: true,
					margin: 0,
					nav: false,
					dots: true,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						640:{
							items: 2
						},
						992:{
							items: 3
						}
					}
				});
			}
		}
		
		/* - Client Carousel */
		if( $(".client-carousel").length ) {
			if($('html[dir="rtl"]').length) {
				$(".client-carousel").owlCarousel({
					loop: true,
					margin: 37,
					nav: true,
					dots: false,
					rtl: true,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						480:{
							items: 2
						},
						640:{
							items: 3
						},
						1200:{
							items: 4
						}
					}
				});
			} else {
				$(".client-carousel").owlCarousel({
					loop: true,
					margin: 37,
					nav: true,
					dots: false,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						480:{
							items: 2
						},
						640:{
							items: 3
						},
						1200:{
							items: 4
						}
					}
				});
			}
		}
		
		if( $("#datetimepicker1").length ) {
			$('#datetimepicker1 input').datepicker({ });
		}
		
		/* - Work Carousel */
		if( $(".work-carousel").length ) {
			if($('html[dir="rtl"]').length) {
				$(".work-carousel").owlCarousel({
					loop: true,
					margin: 10,
					nav: true,
					dots: false,
					rtl: true,
					autoplay: true,
					responsive:{
						0:{
							items: 2
						},
						568:{
							items: 3
						}
					}
				});
			} else {
				$(".work-carousel").owlCarousel({
					loop: true,
					margin: 10,
					nav: true,
					dots: false,
					autoplay: true,
					responsive:{
						0:{
							items: 2
						},
						568:{
							items: 3
						}
					}
				});
			}
		}
		
		/* - Services Single Carousel */
		if( $(".service-single-carousel").length ) {
			if($('html[dir="rtl"]').length) {
				$(".service-single-carousel").owlCarousel({
					loop: true,
					margin: 31,
					nav: true,
					dots: false,
					rtl: true,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						480:{
							items: 2
						},
						640:{
							items: 1
						},
						768:{
							items: 2
						},
						992:{
							items: 3
						}
					}
				});
			} else {
				$(".service-single-carousel").owlCarousel({
					loop: true,
					margin: 31,
					nav: true,
					dots: false,
					autoplay: false,
					responsive:{
						0:{
							items: 1
						},
						480:{
							items: 2
						},
						640:{
							items: 1
						},
						768:{
							items: 2
						},
						992:{
							items: 3
						}
					}
				});
			}
		}
		
		/* - Recent Carousel */
		if( $(".rcnt-work-carousel").length ) {
			if($('html[dir="rtl"]').length) {
				$(".rcnt-work-carousel").owlCarousel({
					loop: true,
					margin: 30,
					nav: false,
					dots: false,
					rtl: true,
					autoplay: true,
					responsive:{
						0:{
							items: 2
						},
						480:{
							items: 3
						},
						640:{
							items: 2
						},
						768:{
							items: 2
						},
						992:{
							items: 3
						}
					}
				});
			} else {
				$(".rcnt-work-carousel").owlCarousel({
					loop: true,
					margin: 30,
					nav: false,
					dots: false,
					autoplay: false,
					responsive:{
						0:{
							items: 2
						},
						480:{
							items: 3
						},
						640:{
							items: 2
						},
						768:{
							items: 2
						},
						992:{
							items: 3
						}
					}
				});
			}
		}
		
		/* - Calender */
		if( $("#calendar").length ) {
			$('#calendar').fullCalendar({			
				header: {
					left: 'prev',
					right: 'next',
					center: 'title'
				},
				editable: true,
				eventLimit: false,
				contentHeight: 'auto',
			});
		}
		
		/* - Contact Map* */
		if($("#map-canvas-footer").length==1){
			initialize("map-canvas-footer");
		}
		
		if( $( "#contact-map-canvas").length == 1 ){
			initialize( "contact-map-canvas" );
		}
		
		/* - Quick Contact Form* */
		$( "#btn_submit" ).on( "click", function(event) {
		  event.preventDefault();
		  var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact.php",
				data: mydata,
				success: function(data) {
					if( data["type"] == "error" ){
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").removeClass("alert-msg-success");
						$("#alert-msg").addClass("alert-msg-failure");
						$("#alert-msg").show();
					} else {
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").addClass("alert-msg-success");
						$("#alert-msg").removeClass("alert-msg-failure");					
						$("#input_name").val("");
						$("#input_phone").val("");												
						$("#input_address").val("");										
						$("#textarea_message").val("");
						$("#alert-msg").show();				
					}			
				},
				error: function(xhr, textStatus, errorThrown) {
					alert(textStatus);
				}
			});
		});
		
	});	/* - Document On Ready /- */
	
	/* + Window On Scroll */
	$(window).on("scroll",function() {
		/* - Set Sticky Menu* */
		if( $(".header_s").length ) {
			sticky_menu();
		}
	});
	
	/* + Window On Resize */ 
	$( window ).on("resize",function() {
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Expand Panel Resize */
		panel_resize();
		menu_dropdown_open();
		
		/* - About Section */
		if($(".about-section").length){
			about_img();
		}
	});
	
	/* + Window On Load */
	$(window).on("load",function() {
		/* - Site Loader* */
		if ( !$("html").is(".ie6, .ie7, .ie8") ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css("display","none");
		}
	});

})(jQuery);

