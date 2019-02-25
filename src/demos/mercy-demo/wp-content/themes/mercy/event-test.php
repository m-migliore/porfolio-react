<?php /* Template Name: test */ ?>
<?php get_template_part('parts/header'); ?>


<div class="parallax-window interior" data-parallax="scroll">
  <div class="parallax-content container">
    <div class="row">
      <div class="col-xs-9 col-sm-7 col-md-6">
         <a href="<?php echo site_url(); ?>">
           <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
         </a> 
      </div>

   <a href="https://us3.eveve.com/tms/DateCovers.php?Est=Mercy" target="_blank" class="btn btn-reserve"><p>Make a <br>Reservation</p></a>


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

<div class="tartan-bar"></div>

<div id="page-content">
  <div class="events-page">
    <div class="container pad-75">

      <div class="row">
        <div class="col-xs-12 text-center">
          <h1>Enjoy Private Dining in Downtown Minneapolis</h1>
          <div class="divider"></div>
          <!-- <p>Mercy Dining Room &amp; Bar offers a variety of inspiring event and meeting facilities including private and semi-private dining for groups of all sizes. Our event space includes The Barrel Room, The Pearl Room, The Board Rooms, A.R.T Gallery, The Gallery, The Courtyard and The Rooftop Lounge &amp; Balcony.</p> -->
          <p>Mercy Dining Room &amp; Bar offers a variety of inspiring event and meeting facilities including private and semi-private dining for groups of all sizes. Our event space includes: </p> 

          <ul class="list-unstyled room-list">
            <li id="chefs-table-jump">The Chef's Table</li>
            <li id="board-room-jump">The Board Rooms</li>
            <li id="barrel-room-jump">The Barrel Rooms</li>
            <li id="pearl-room-jump">The Pearl Room</li>
            <li id="rooftop-jump">The Rooftop Lounge &amp; Balcony</li>
            <li id="art-ballroom-jump">The Art Ballroom</li>
            <li id="gallery-room-jump">The Gallery</li>
            <li id="courtyard-jump">The Courtyard</li>
          </ul>

          <p>Our experienced staff and Executive Chef Mike Rakun will assist with the logistics for any type of event. For more information please contact us through a <a href="http://mercy.tripleseat.com/party_request/2502" target="_blank">Private Dining Request</a>, or by contacting Brittany Blasier, our Sales &amp; Marketing Manager at 612-252-7002, or <a href="mailto:events@mercympls.com">events@mercympls.com</a></p>
        </div>
      </div>

    </div>

    <div class="tartan-bar"></div>


    <div class="container-fluid dining-rooms">

    <div id="chefs-table" class="row dining-room">
      <div class="col-sm-7 chef-table"></div>
      <div class="col-sm-5">
        <h3>Chef's Table</h3>
        <div class="divider"></div>
        <ul class="list-unstyled">
          <li>Up to 14 Seated</li>
          <li>Semi-Private</li>
          <li>Valet Available</li>
          <li>5-Course Tasting Menu with Optional Wine Pairings</li>
          <li>Interactive and Unique Dining Experience</li>
        </ul>
        <p>Great for birthdays &amp; anniversarys</p>
        <a href="<?php echo(types_render_field( 'chef-table-menu' )); ?>" target="_blank">View Menu</a>
      </div>
    </div>

      <div class="row"><div class="tartan-bar"></div></div>

      <div id="board-room" class="row dining-room">
        <div class="col-sm-7 col-sm-push-5 board-rooms"></div>
        <div class="col-sm-5 col-sm-pull-7">
          <h3>Board Rooms</h3>
          <div class="divider"></div>
          <ul class="list-unstyled">
            <li>2 Separate Rooms with Removable Wall</li>
            <li>1 Room 15 Seated - 2 Rooms 34 Seated</li>
            <li>1 Table Fully Private</li>
            <li>Valet Available - Private Server - Full Bar</li>
            <li>Plated Service - AV Available</li>
            <li>Executive Room</li>
          </ul>
          <p>Ideal for business meetings, rehearsal dinners, and client and team dinners.</p>
          <a href="<?php echo(types_render_field( 'priv-dining-menu' )); ?>" target="_blank">View Menu</a>
        </div>
      </div> 

      <div class="row"><div class="tartan-bar"></div></div>

      <div id="barrel-room" class="row dining-room">
        <div class="col-sm-7 barrel-room"></div>
        <div class="col-sm-5">
          <h3>Barrel Room</h3>
          <div class="divider"></div>
          <ul class="list-unstyled">
            <li>24 Seated - 40 Mostly Seated</li>
            <li>AV Available</li>
            <li>Fully Private - Private Server</li>
            <li>Full Bar - Plated Service - Passed - Buffet Apps</li>
            <li>Valet Available</li>
          </ul>
          <p>This rustic and unique decor is the perfect setting for closing dinners, company and rehearsal dinners.</p>
          <a href="<?php echo(types_render_field( 'priv-dining-menu' )); ?>" target="_blank">View Menu</a>
        </div>
      </div> 

      <div class="row"><div class="tartan-bar"></div></div>

      <div id="pearl-room" class="row dining-room">
        <div class="col-sm-7 col-sm-push-5 pearl-room"></div>
        <div class="col-sm-5 col-sm-pull-7">
          <h3>Pearl Room</h3>
          <div class="divider"></div>
          <ul class="list-unstyled">
            <li>Up to 50 Seated - 75 Mostly Standing</li>
            <li>Fully Private - Private Server</li>
            <li>Plated Service</li>
            <li>Full Bar - Passed - Buffet Apps</li>
            <li>Valet Available</li>
          </ul>
          <p>Street level upscale space is great for company events, and theatre dinners.</p>
          <a href="<?php echo(types_render_field( 'priv-events-menu' )); ?>" target="_blank">View Menu</a>
        </div>
      </div>

      <div class="row"><div class="tartan-bar"></div></div>

      <div id="rooftop" class="row dining-room">
        <div class="col-sm-7 rooftop"></div>
        <div class="col-sm-5">
          <h3>Rooftop</h3>
          <div class="divider"></div>
          <ul class="list-unstyled">
            <li>125 Seated - 175 Mostly Standing</li>
            <li>Fully Private - Private Server and Bartender</li>
            <li>Private Full Bar - Plated Service - Buffet - Passed Apps</li>
            <li>Private Restrooms - Indoor and Outdoor Space</li>
            <li>AV Available - Valet Available</li>
          </ul>
          <p>Downtown views, outdoor heaters and lights give the space the perfect ambiance. Perfect for weddings, corporate parties, dinners, and presentations.</p> 
          <a href="<?php echo(types_render_field( 'priv-events-menu' )); ?>" target="_blank">View Menu</a>
        </div>
      </div>

      <div class="row"><div class="tartan-bar"></div></div>

      <div id="art-ballroom" class="row dining-room">
        <div class="col-sm-7 col-sm-push-5 art-ballroom"></div>
        <div class="col-sm-5 col-sm-pull-7">
          <h3>Art Ballroom</h3>
          <div class="divider"></div>
          <ul class="list-unstyled">
            <li>140 Seated - 200 Mostly Standing</li>
            <li>210 Seated - 300 Mostly Seated With Gallery Space</li>
            <li>Fully Private - Valet Available</li>
            <li>Full Bar - Plated Service - Buffet - Passed Apps</li>
            <li>AV Available</li>
            <li>Removable Walls to Divide Room</li>
          </ul>
          <p>High ceilings, large pillars, modern space. Perfect for banquets, company presentations and dinners, and weddings.</p>
          <a href="<?php echo(types_render_field( 'priv-events-menu' )); ?>" target="_blank">View Menu</a>
        </div>
      </div>

      <div class="row"><div class="tartan-bar"></div></div>

      <div id="gallery-room" class="row dining-room">
        <div class="col-sm-7 gallery-room"></div>
        <div class="col-sm-5">
          <h3>Gallery</h3>
          <div class="divider"></div>
          <ul class="list-unstyled">
            <li>70 Seated - 100 Mostly Standing</li>
            <li>Removable Wall to Connect with ART Space</li>
            <li>Access to Courtyard</li>
            <li>Fully Private - Private Server Staff</li>
            <li>Full Bar - Plated Service - Buffet - Passed Apps</li>
            <li>Valet Available</li>
          </ul>
          <p>Contemporary space with white walls, large windows, and art decor. Perfect for ceremonies, grooms dinners, and networking events.</p> 
          <a href="<?php echo(types_render_field( 'priv-events-menu' )); ?>" target="_blank">View Menu</a>
        </div>
      </div>

      <div class="row"><div class="tartan-bar"></div></div>

      <div id="courtyard" class="row dining-room">
        <div class="col-sm-7 col-sm-push-5 courtyard"></div>
        <div class="col-sm-5 col-sm-pull-7">
          <h3>The Courtyard</h3>
          <div class="divider"></div>
          <ul class="list-unstyled">
            <li>100 Seated - 250 Mostly Seated</li>
            <li>Fully or Semi Private</li>
            <li>Full Bar - Plated Service - Buffet - Passed Apps</li>
            <li>Large Fire Pit</li>
            <li>Valet Available</li>
          </ul>
          <p>Beautiful outdoor ambiance with large 3 side bar. Perfect for family dinners, receptions, and company parties.</p>
          <a href="<?php echo(types_render_field( 'priv-events-menu' )); ?>" target="_blank">View Menu</a>
        </div>
      </div>
      
    </div>

    <div class="tartan-bar"></div>
  </div>
</div>



<?php get_template_part('parts/footer'); ?>
