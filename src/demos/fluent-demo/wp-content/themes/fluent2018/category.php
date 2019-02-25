<?php get_template_part('parts/header'); ?>

<div class="parallax-window interior" data-parallax="scroll">
  <div class="container interior-header text-center">
    <div class="row pad-50">
      <div class="col-xs-12">
        <h1><?php single_cat_title(''); ?></h1>
      </div>
    </div>
  </div>
</div>

<div class="container pad-50">
<div class="row">

<div class="col-xs-12">
<div id="content" role="main">


<?php if(have_posts()): while(have_posts()): the_post();?>

<article role="article" id="post_<?php the_ID()?>">


<?php 
if ( has_post_thumbnail()) {
?>	


<div class="row">
<div class="col-sm-4">
<?php the_post_thumbnail(); ?>
</div>

<div class="col-sm-8">

<header>
<h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
<h5><em><time  class="text-muted" datetime="<?php the_time('d-m-Y')?>">Posted On: <?php the_time('jS F Y') ?></time></em></h5>
</header>
<br>

<?php the_excerpt(); ?>
</div>
</div>

<?php 
} else {
?>


<header>
<h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
<h5><em><time  class="text-muted" datetime="<?php the_time('m-d-Y')?>">Posted On: <?php the_time('F jS Y') ?></time></em></h5>
</header>
<br>
<div class="row">
<div class="col-xs-12">
<?php the_excerpt(); ?>
</div>
</div>

<?php 
}
?>


<br>
<hr/>


</article>


<?php endwhile; ?>
<ul class="pagination">
<li class="older"><?php next_posts_link('&laquo; Older') ?></li>
<li class="newer"><?php previous_posts_link('Newer &raquo;') ?></li>
</ul>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif;?>
</div><!-- /#content -->
</div>



</div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
