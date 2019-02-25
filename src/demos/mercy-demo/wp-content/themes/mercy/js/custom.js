$(document).ready(function(){



	$('#hamburger').click(function(){
		$(this).toggleClass('open');
		$('.main-nav').toggleClass('display');
	});


	$('#chefs-table-jump').click(function() {
		$('#chefs-table').animatescroll();
	});

	$('#board-room-jump').click(function() {
		$('#board-room').animatescroll();
	});

	$('#barrel-room-jump').click(function() {
		$('#barrel-room').animatescroll();
	});

	$('#pearl-room-jump').click(function() {
		$('#pearl-room').animatescroll();
	});

	$('#rooftop-jump').click(function() {
		$('#rooftop').animatescroll();
	});

	$('#art-ballroom-jump').click(function() {
		$('#art-ballroom').animatescroll();
	});

	$('#gallery-room-jump').click(function() {
		$('#gallery-room').animatescroll();
	});

	$('#courtyard-jump').click(function() {
		$('#courtyard').animatescroll();
	});


	$(document).scroll(function() {
	  if ($(document).scrollTop() >= 500) {

	  	$('.btn-reserve').addClass('btn-stick'); 
	  	$('#hamburger').addClass('burger-stick');  
	  	
	  } else {

	   	$('.btn-reserve').removeClass('btn-stick');
	   	$('#hamburger').removeClass('burger-stick');

	    	
	  }
	});

	

	$('#contact-form').bootstrapValidator({
	    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
	    feedbackIcons: {
	        valid: 'glyphicon glyphicon-ok',
	        invalid: 'glyphicon glyphicon-remove',
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    fields: {
	        name: {
	            validators: {  
	                notEmpty: {
	                    message: 'Required'
	                }
	            }
	        },
	        email: {
	            validators: {
	                notEmpty: {
	                    message: 'Required'
	                },
	                emailAddress: {
	                    message: 'Please enter a valid Email Address'
	                }
	            }
	        }, 
	        phone: {
	              validators: {  
	                digits: {
	                      message: 'The phone number can contain digits only'
	                  },
	                  notEmpty: {
	                      message: 'Required'
	                  }
	              }
	          },
	       
	    }
	});


	$('#charity-form').bootstrapValidator({
	    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
	    feedbackIcons: {
	        valid: 'glyphicon glyphicon-ok',
	        invalid: 'glyphicon glyphicon-remove',
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    fields: {
	        name: {
	            validators: {  
	                notEmpty: {
	                    message: 'Required'
	                }
	            }
	        },
	        email: {
	            validators: {
	                notEmpty: {
	                    message: 'Required'
	                },
	                emailAddress: {
	                    message: 'Please enter a valid Email Address'
	                }
	            }
	        }, 
	        phone: {
	              validators: {  
	                digits: {
	                      message: 'The phone number can contain digits only'
	                  },
	                  notEmpty: {
	                      message: 'Required'
	                  }
	              }
	          },
	       
	    }
	});

	$('#mce-EMAIL').bootstrapValidator({
	    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
	    feedbackIcons: {
	        valid: 'glyphicon glyphicon-ok',
	        invalid: 'glyphicon glyphicon-remove',
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    fields: {
	        email: {
	            validators: {
	                notEmpty: {
	                    message: 'Required'
	                },
	                emailAddress: {
	                    message: 'Please enter a valid Email Address'
	                }
	            }
	        }, 
	       
	    }
	});



	google.maps.event.addDomListener(window, 'load', init);
	
	function init() {
	    // Basic options for a simple Google Map
	    var mapOptions = {
	        zoom: 16,
	        scrollwheel: false,
	        streetViewControl: false,
	        mapTypeControl: false,
	    
	        // The latitude and longitude to center the map (always required)

	        // real center
	        center: new google.maps.LatLng(44.976057, -93.276923),
	        //off-centered 
	        // center: new google.maps.LatLng(44.976057, -93.279923), 

	        // This is where you would paste any style found on Snazzy Maps.
	        styles: [{"featureType":"administrative","elementType":"labels","stylers":[{"saturation":"-28"},{"lightness":"-10"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#797979"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#e8e8e8"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"saturation":"-1"},{"lightness":"-12"}]},{"featureType":"landscape.natural","elementType":"labels.text","stylers":[{"lightness":"-31"}]},{"featureType":"landscape.natural","elementType":"labels.text.fill","stylers":[{"lightness":"-74"}]},{"featureType":"landscape.natural","elementType":"labels.text.stroke","stylers":[{"lightness":"65"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry","stylers":[{"lightness":"-15"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"lightness":"0"},{"color":"#d01818"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"visibility":"on"},{"color":"#c7c7c7"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#767676"}]},{"featureType":"poi.park","elementType":"labels.text.stroke","stylers":[{"color":"#ebebeb"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry","stylers":[{"saturation":"0"},{"lightness":"-9"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"lightness":"-14"}]},{"featureType":"road","elementType":"labels","stylers":[{"lightness":"-35"},{"gamma":"1"},{"weight":"1.39"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":"-19"},{"color":"#797979"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":"46"},{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#a1a1a1"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"lightness":"-13"},{"weight":"1.23"},{"invert_lightness":true},{"visibility":"off"}]},{"featureType":"road.highway.controlled_access","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#a1a1a1"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"on"},{"weight":"1"},{"lightness":"0"}]},{"featureType":"road.arterial","elementType":"labels.text.stroke","stylers":[{"color":"#efefef"},{"weight":"2.86"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#adadad"},{"visibility":"on"}]}]
	    };

	 
	    // Map Container
	    var mapElement = document.getElementById('map');

	    // Create the Google Map using our element and options defined above
	    var map = new google.maps.Map(mapElement, mapOptions);

      //var image = 'http://i.imgur.com/rzbsrIA.png'; 
      var image = 'http://www.lwmdev.com/mercy/wp-content/themes/mercy/img/map-marker.png';

	    var mercyMarker = new google.maps.Marker({
	      position: {lat: 44.976057, lng: -93.276923},
	      map: map,
	      icon: image,
	      optimized: false
	    });


	}
});