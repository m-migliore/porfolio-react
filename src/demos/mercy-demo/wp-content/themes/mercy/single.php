<?php get_template_part('parts/header'); ?>

<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-9">
<div id="content" role="main">
<?php if(have_posts()): while(have_posts()): the_post();?>
<article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>

<?php 
if ( has_post_thumbnail()) {
?>	

<div class="row">
<div class="col-sm-4">
<?php the_post_thumbnail(); ?>
</div>


<div class="col-sm-8">
<header>
<h1 class="page-titles"><?php the_title()?></h1>
<h5><em><time  class="text-muted" datetime="<?php the_time('m-d-Y')?>">Posted On: <?php the_time('F jS Y') ?></time></em></h5>
</header>
</div>
</div>



<?php 
} else {
?>


<div class="row">
<div class="col-xs-12">
<header>
<h1 class="page-titles"><?php the_title()?></h1>
<h5><em><time  class="text-muted" datetime="<?php the_time('m-d-Y')?>">Posted On: <?php the_time('F jS Y') ?></time></em></h5>
</header>
</div>
</div>


<?php 
}
?>


<?php the_content()?>

</article>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>  
<?php endif;?>
</div><!-- /#content -->
</div>

<div class="col-xs-6 col-sm-3" id="sidebar" role="navigation">
<?php get_template_part('parts/sidebar'); ?>
</div>

</div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
