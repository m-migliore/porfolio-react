$(document).ready(function(){
	//Hamburger Open
	$('#hamburger').click(function(){
		$(this).toggleClass('open');
		$('.main-nav').toggleClass('open');
	});


  // WOW Init
wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       false,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();


	//Updates Values
	function updateValue(id) {
		var target = document.getElementById('baseline');
		var baseMargin = window.getComputedStyle(target)["margin-right"];
		var targetTwo = document.getElementById('about-info');
		var relHeight = window.getComputedStyle(targetTwo)["height"];

		document.getElementById("about-info").style.paddingRight = baseMargin;
		document.getElementById("about-bg").style.height = relHeight;
		//document.getElementById("floating-footer").style.marginLeft = baseMargin;


	}

	function updateAllValues() {
		updateValue("baseline");
		updateValue("about-info");
	}

	updateAllValues();
	window.addEventListener('resize', updateAllValues);



	//Parallax Start

	// makes the parallax elements
	function parallaxIt() {
	  // create variables
	  var $fwindow = $(window);
	  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

	  var $contents = [];
	  var $backgrounds = [];


	  // for each of background parallax element
	  $('[data-type="background"]').each(function() {
	    var $backgroundObj = $(this);

	    $backgroundObj.__speed = ($backgroundObj.data('speed') || 1);
	    $backgroundObj.__fgOffset = $backgroundObj.offset().top;
	    $backgrounds.push($backgroundObj);
	  });

	  // update positions
	  $fwindow.on('scroll resize', function() {
	    scrollTop = window.pageYOffset || document.documentElement.scrollTop;

	    $contents.forEach(function($contentObj) {
	      var yPos = $contentObj.__fgOffset - scrollTop / $contentObj.__speed;

	      $contentObj.css('top', yPos);
	    })

	    $backgrounds.forEach(function($backgroundObj) {
	      var yPos = -((scrollTop - $backgroundObj.__fgOffset) / $backgroundObj.__speed);

	      $backgroundObj.css({
	        backgroundPosition: '50% ' + yPos + 'px'
	      });
	    });
	  });

	  // triggers winodw scroll for refresh
	  $fwindow.trigger('scroll');
	};

	parallaxIt();





//SLick stuff

$('.text-slider').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.head-slider',
});

$('.head-slider').slick({
 slidesToShow: 3,
 slidesToScroll: 1,
 asNavFor: '.text-slider',
 dots: false,
 centerMode: true,
 focusOnSelect: true,
 responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
		{
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
  ]
});



});
