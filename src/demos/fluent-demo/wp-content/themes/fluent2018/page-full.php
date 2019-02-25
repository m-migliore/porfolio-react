<?php /* Template Name: Full Page */ ?>
<?php get_template_part('parts/header'); ?>

<div class="interior-title">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="wow fadeInDown"><?php the_title()?></h1>
      </div>
    </div>
  </div>
</div>

<div id="content" role="main">
  <?php if(have_posts()): while(have_posts()): the_post();?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <div class="interior-content">
      <?php the_content()?>
    </div>
  </article>
  <?php endwhile; ?>
  <?php else: ?>
  <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
  <?php endif;?>
</div><!-- /#content -->




<div class="clearfix"></div>

<?php get_template_part('parts/footer'); ?>
