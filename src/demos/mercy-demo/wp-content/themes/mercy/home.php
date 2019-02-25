<?php /* Template Name: Home */ ?>
<?php get_template_part('parts/header'); ?>


<div class="parallax-window" data-parallax="scroll">
  <div class="container">
    <div class="parallax-content row">
      <div class="col-xs-9 col-sm-7 col-md-6">
         <a href="<?php echo site_url(); ?>">
           <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
         </a> 
      </div>

      <a href="http://www.opentable.com/single.aspx?rid=107146&restref=107146" target="_blank" class="btn btn-reserve"><p>Make a Reservation</p></a>

      <button id="hamburger" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div> 
  </div> 
</div>



<div class="clearfix"></div>


<div id="page-content">
  <div class="tartan-bar"></div>

  <div class="welcome pad-75">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/beer-chicken.png">
        </div>
        <div class="col-md-6">
         <div class="welcome">
           <h3>Welcome to Mercy Restaurant</h3>
           <div class="divider"></div>

           <p>For the first time in Chef Mike Rakun’s career he took the opportunity to create a restaurant that goes beyond just food. Named after owners Mike and Abby’s youngest daughter, Mercy connects Mike’s two loves: food and family. Share the food, enjoy the drinks, and leave without wanting for anything. Welcome to Mercy!</p>
         </div>
        </div>
      </div>
    </div>
  </div>


  <div class="clearfix"></div>


  <div class="atmosphere pad-75">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-md-6 col-lg-5">
          <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-logo.png">
            <h3>Unforgettable Atmosphere</h3>
            <div class="divider"></div>
            <p> Mike wanted to bring elements of the outdoors inside Mercy starting with the colorful mural and cozy booths. Mike and Abby were wildly successful in creating a welcoming and cozy lower level with The Library Bar so the couple wanted to extend that feeling to the upper level using the same classic yet comfortable style. You’ll be right at home at Mercy whether you’re meeting friends for brunch, stopping in for happy hour, or bringing a date for dinner.</p>
            <a href="http://www.opentable.com/single.aspx?rid=107146&restref=107146" target="_blank">Reserve A Table</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="clearfix"></div>


  <div class="discover pad-75">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Discover Our Menu</h3>
          <div class="divider"></div>
          <p>Mike is an avid outdoorsman who enjoys hunting and fishing and believes good food starts at the farm and in the field. His philosophy of sourcing the best ingredients and letting them speak for themselves, comes from his personal connection to food. Ultimately, Mike reveals his creativity through the menu, without restriction and without pretense.</p>
          <a href="<?php echo site_url(); ?>/menu">View the Full Menu</a>
        </div>
        <div class="col-md-6">
          <ul class="list-unstyled">
            <li class="wrap-outer animate">
              <img src="<?php echo get_template_directory_uri(); ?>/img/discover-steak.jpg">
            </li>
            <li class="wrap-outer animate two">
              <img src="<?php echo get_template_directory_uri(); ?>/img/discover_2.jpg">
            </li>
            <li class="wrap-outer animate three">
              <img src="<?php echo get_template_directory_uri(); ?>/img/discover_3.jpg">
            </li>
            <li class="wrap-outer animate four">
              <img src="<?php echo get_template_directory_uri(); ?>/img/discover_4.jpg">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="clearfix"></div>


<!-- <div id="instafeed"></div>
<script type="text/javascript" src="<?php //echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>

 <script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        userId: '509743142',
        clientId: ' 818c0db2233145e09c1d47bd0d3d1111',
        accessToken: '509743142.1677ed0.cd17962d323e4c91af7b304b8bbb37db',
        template: '<div class="instagram col-xs-6 col-sm-3"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i><a href="{{link}}" target="_blank"></a><img src="{{image}}" class="img-responsive"></div>',
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        limit: 4
    });
    feed.run();
</script>  -->




<div class="clearfix"></div>


<?php get_template_part('parts/footer'); ?>

<script type="text/javascript">
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
    if (scroll >= 250) 
    
      $(".wrap-outer").addClass("fadeInUp");
  });
</script>
