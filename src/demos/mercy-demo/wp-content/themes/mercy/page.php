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
    <!-- <div class="row text-center">
      <h1><?php //the_title()?></h1>
    </div> -->
  </div> 
</div>

<div class="tartan-bar"></div>

<div id="page-content">
  <div class="container text-center">
    <div class="row">

      <div class="col-xs-12 col-sm-10 col-sm-offset-1 pad-75">
        <div id="content" role="main">
          <?php if(have_posts()): while(have_posts()): the_post();?>
          <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
            <?php the_content()?>
          </article>
          <?php endwhile; ?> 
          <?php else: ?>
          <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
          <?php endif;?>
        </div><!-- /#content -->
      </div>
      
      <!-- <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php //get_template_part('parts/sidebar'); ?>
      </div> -->
      
    </div><!-- /.row -->
  </div><!-- /.container -->
</div>



<?php get_template_part('parts/footer'); ?>
