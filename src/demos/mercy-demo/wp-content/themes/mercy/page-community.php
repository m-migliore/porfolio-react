<?php /* Template Name: Community */ ?>
<?php get_template_part('parts/header'); ?>


<div class="parallax-window interior" data-parallax="scroll">
  <div class="parallax-content container">
    <div class="row">
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
    <!-- <div class="row text-center">
      <h1><?php //the_title()?></h1>
    </div> -->
  </div> 
</div>

<div class="tartan-bar"></div>

<div id="page-content">
  <div class="community-page">
    <div class="container pad-75 text-center">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <h1>Mercy Gives</h1>
          <div class="divider"></div>
          <p class="lead">
            We believe being an active member of the community is the responsibility of any business. We also believe we can provide the most impact by giving all of our charitable resources to select causes each year. Although there are many organizations doing important work, we simply cannot give to all of them. 
          </p>
          <p class="lead"><!--This year, we are proud to support [INSERT CAUSES].--> If you would like to inquire about a charitable donation, please fill out the form below.</p>

          <form id="charity-form" class="pad-25 contact-page" method="post" action="<?php echo get_template_directory_uri(); ?>/charity-proc.php">
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
