<div id="instafeed"></div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>

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
</script>
<div class="clearfix"></div>
<div class="map-bar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-6 map-info">
       <div class="map-text">
         <div class="row">
           <div class="col-xs-8">
             <h3>Dine With Us</h3>
             <div class="divider"></div>
           </div>

           <div class="col-xs-4">
             <img src="<?php echo get_template_directory_uri(); ?>/img/m-logo.png">
           </div>

         </div>
         <div class="row">
           <div class="col-xs-12 col-sm-6">
             <h4>Breakfast</h4>
             <p>Every Day  <span>6:30-11:00AM</span></p>

            </div>

            <div class="col-xs-12 col-sm-6">
              <h4>Lunch</h4>
              <p>MON-FRI <span>11:00AM-3:00PM</span></p>
            </div>


            <div class="col-xs-12 col-sm-6">
              <h4>Brunch</h4>
              <p>SAT &amp; SUN <span>10:00AM-3:00PM</span></p>
            </div>

            <div class="col-xs-12 col-sm-6">
              <h4>Dinner</h4>
              <p>SUN-THUR  <span>3:00-10:00PM</span></p>
              <p>FRI &amp; SAT  <span>3:00-11:00PM</span></p>
            </div>

            <div class="col-xs-12">
              <h4>Happy Hour</h4>
              <p>Every Day <span>3:00-6:00PM</span></p>
            </div>

         </div>
         <div class="row">
           <div class="col-xs-12">
             <p>
               901 Hennepin Avenue, <br>
               Minneapolis, MN 55403
             </p>
             <p>(612) 252-7000</p>
             <a href="mailto:info@mercympls.com">INFO@MERCYMPLS.COM</a>
           </div>
         </div>
       </div>



      </div>

      <div class="col-xs-12 col-md-6 map-box">
        <div id="map"></div>
      </div>
    </div>
  </div>
</div>


<div class="clearfix"></div>

<div class="tartan-bar"></div>

<div class="signup-bar text-center pad-50">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png">
      </div>
      <div class="col-xs-12">
        <p>Join Us For Special Event Announcements<br>And Weekly Updates...</p>
      </div>
      <div class="col-xs-12">

        <form  action="//mercympls.us15.list-manage.com/subscribe/post?u=c15b1c84d0e4c0b3bf82ec64a&amp;id=8fc26a6a4e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="form-group">
            <label for="mce-EMAIL" class="sr-only">Enter Email to Sign Up For Special Announcements and Weekly Updates</label>
            <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Enter Your Email...">
          </div>
         <button type="submit" class="btn btn-default">Subscribe</button>
        </form>
      </div>


         <div class="col-xs-12 text-center soc-btm">
       <span>  <a href="https://www.facebook.com/mercympls/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.instagram.com/mercympls/" target="_blank"><i class="fa fa-instagram"></i></a></span>
         </div>


    </div>


  </div>
</div>


<div class="foot-copy pad-25 text-center">
   <div class="container">
     <div class="row">
           <div class="col-xs-12">
             <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
           </div>
           <div class="col-xs-12">
             <p><a href="http://logicwebmedia.com" target="_blank" title="Web Design Long Island">Web Design &amp; Development by <span>Logic Web Media</span></a></p>
           </div>
       </div>
   </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/new-parallax.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/animatescroll.min.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrapValidator.min.js"></script>
 <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmbox5lruTY8-30R28dt9KyAiyS72J1tc&callback=initMap">
     </script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>


<?php wp_footer(); ?>

<div id="ttdUniversalPixelTagf27f35f2169c43b6b55192f2309644da" style="display:none">
            <script src="https://js.adsrvr.org/up_loader.1.1.0.js" type="text/javascript"></script>
            <script type="text/javascript">
                (function(global) {
                    if (typeof TTDUniversalPixelApi === 'function') {
                        var universalPixelApi = new TTDUniversalPixelApi();
                        universalPixelApi.init("bjx1cy9", ["o5n069m"], "https://insight.adsrvr.org/track/up", "ttdUniversalPixelTagf27f35f2169c43b6b55192f2309644da");
                    }
                })(this);
            </script>
        </div>


</body>
</html>
