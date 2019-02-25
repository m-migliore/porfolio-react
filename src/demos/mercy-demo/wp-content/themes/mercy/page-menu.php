<?php /* Template Name: Menu */ ?>
<?php get_template_part('parts/header'); ?>


<div class="parallax-window interior" data-parallax="scroll">
  <div class="parallax-content container">
    <div class="row">
      <div class="col-xs-9 col-sm-7 col-md-6">
         <a href="<?php echo site_url(); ?>">
           <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
         </a>
      </div>

   <a href="http://www.opentable.com/single.aspx?rid=107146&restref=107146" target="_blank" class="btn btn-reserve"><p>Make a <br>Reservation</p></a>


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
  <div class="menu-page">
    <div class="container pad-75">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/menu-holder.jpg">
        </div>
        <div class="col-sm-6">
          <h3>2017 Menus</h3>
          <div class="divider"></div>
          <p>Our Executive Chef and his team have selected the best quality cuts from the best local producers to create a menu unlike any other in Minneapolis. Click below to view our menus.</p>
          <div class="row">
            <div class="col-sm-6">
               <ul class="list-unstyled">
                <li><a href="#" target="_blank">Breakfast</a></li>
                <li><a href="#" target="_blank">Brunch</a></li>
                <li><a href="#" target="_blank">Lunch</a></li>
              </ul>
            </div>
            <div class="col-sm-6">
               <ul class="list-unstyled">
                <li><a href="#" target="_blank">Dinner</a></li>
                <li><a href="#" target="_blank">Happy Hour</a>
                <li><a href="#" target="_blank">Dessert</a></li>

              </ul>
            </div>
          </div>


        </div>
      </div>

    </div>
  </div>
</div>



<?php get_template_part('parts/footer'); ?>
