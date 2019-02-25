<?php /* Template Name: Full Page */ ?>
<?php get_template_part('parts/header'); ?>


<div class="page-bg">
<div class="container">
  <div class="row">
    <div class="col-sm-8">
<h1><?php the_title()?></h1>
</div>

 <div class="col-sm-4 text-right">
 <a href="#" class="btn btn-lg btn-info">Search Jobs</a>
 </div>

  </div><!-- /.row -->
</div><!-- /.container -->
</div>


<div class="container">
  <div class="row pad-75">

    <div class="col-xs-12">
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
    
    
  </div><!-- /.row -->
</div><!-- /.container -->





<div class="clearfix"></div>


<div class="above-foot">
<div class="container">

<div class="row text-center">
<div class="col-xs-12">
<h2>Contact Looking Glass Medical Staffing</h2>
<img src="<?php echo get_template_directory_uri(); ?>/img/looking-glass-separate.png" class="lg-sep">
</div>
</div><!-- /.row -->



<div class="row">

<div class="col-sm-4">
<div class="y-box">
<i class="fa fa-phone"></i>
<p>Office: (xxx) xxx-xxxx</p>
<p>Fax: (xxx) xxx-xxxx</p>
</div>
</div>


<div class="col-sm-4">
<div class="y-box">
<i class="fa fa-envelope"></i>
<p>info@lookingglassms.com</p>
<p>jobs@lookingglassms.com</p>
</div>
</div>


<div class="col-sm-4">
<div class="y-box">
<i class="fa fa-map-marker"></i>
<p>555 Sesame St.</p>
<p>City, ST 11729</p>
</div>
</div>


</div><!-- /.row -->



</div><!-- /.container -->
</div><!-- /.above-foot -->


<div class="clearfix"></div>

<?php get_template_part('parts/footer'); ?>
