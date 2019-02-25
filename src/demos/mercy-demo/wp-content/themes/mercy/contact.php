<?php /* Template Name: Contact */ ?>
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
    <!-- <div class="row text-center">
      <h1><?php //the_title()?></h1>
    </div> -->
  </div> 
</div>

<div class="tartan-bar"></div>

<div id="page-content">
  <div class="contact-page">
    <div class="container pad-75 text-center">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-primary.png">
          <h3>901 Hennepin Avenue <br> Minneapolis, MN 55403</h3>
          <h3>(612) 252-7000</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <h4>Please fill out the form below and we will get back to you as soon as possible</h4>
            <form id="contact-form" class="pad-25" method="post" action="<?php echo get_template_directory_uri(); ?>/proc.php">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-default btn-lg">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_template_part('parts/footer'); ?>
