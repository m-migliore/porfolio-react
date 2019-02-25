<!-- <div class="map-bar">
  <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 map-info">
   <div class="map-text">
     <div class="row">
       <div class="col-xs-12">
         <h3>Dine With Us</h3>
         <div class="divider"></div>
       </div>
     </div>
     <div class="row">
       <div class="col-xs-6">
         <p>M-TH <br> <span>6:00-10:00PM</span></p>
         <p>F-SU <br> <span>5:30-10:00PM</span></p>
       </div>
       <div class="col-xs-6">
         <img src="<?php echo get_template_directory_uri(); ?>/img/m-logo.png">
       </div>
     </div>
     <div class="row">
       <div class="col-xs-12">
         <p>
           901 Hennepin Avenue, <br>
           Minneapolis, MN 55403
         </p>
         <p>(612) 252-7000</p>
         <a href="mailto:info@mercyrestaurant.com">INFO@MERCYRESTAURANT.COM</a>
       </div>
     </div>
   </div> 

   

  </div>
  <div id="map" class="hidden-xs"></div>
  <div id="map-small" class="visible-xs-block"></div>
</div> -->

<div class="map-bar">
  <div class="col-xs-12 map-info">
   <div class="map-text">
     <div class="row">
       <div class="col-xs-6">
         <h3>Dine With Us</h3>
         <div class="divider"></div>
       </div>

       <div class="col-xs-6">
         <img src="<?php echo get_template_directory_uri(); ?>/img/m-logo.png">
       </div>
       
     </div>
     <div class="row">
       <div class="col-xs-6">
         <h4>Breakfast</h4>
         <p>Every Day  <span>6:30-11:00AM</span></p>
        
        </div>

        <div class="col-xs-6">
          <h4>Lunch</h4>
          <p>MON-FRI <span>11:00AM-3:00PM</span></p>
        </div>


        <div class="col-xs-6">
          <h4>Brunch</h4>
          <p>SAT &amp; SUN <span>10:00AM-3:00PM</span></p>
        </div>

        <div class="col-xs-6">
          <h4>Dinner</h4>
          <p>SUN-THUR  <span>3:00-10:00PM</span></p>
          <p>FRI &amp; SAT  <span>3:00-11:00PM</span></p>
        </div>

     </div>
     <div class="row">
       <div class="col-xs-12">
         <p>
           901 Hennepin Avenue, <br>
           Minneapolis, MN 55403
         </p>
         <p>(612) 252-7000</p>
         <a href="mailto:info@mercyrestaurant.com">INFO@MERCYRESTAURANT.COM</a>
       </div>
     </div>
   </div>

   

  </div>
  <!-- <div id="map" class="hidden-xs"></div> -->
  <div id="map"></div>
  <div id="map-small" class="visible-xs-block"></div>
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
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrapValidator.min.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/small-map.js"></script>


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfF1I6pKR_Gx2cU_72aedpm8rQpne5Xcs&callback=initMap">
    </script>
<?php wp_footer(); ?>

</body>
</html>
