<?php /* Template Name: Contact */ ?>
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


<div class="contact-page">
  <div class="container pad-75">
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fluent-logo-dark-blue.png" alt="Fluent" class="body-logo">
         <p class="lead">Please fill out the form, and we’ll be sure to get back to you soon! </p>
      <ul class="list-unstyled">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="Phone"> <a href="tel:16462619091">646.261.9091</a></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/mailbox.png" alt="Mailbox"> <a href="mailto:bbentii@doublerockcorp.com">bbentii@doublerockcorp.com</a></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/location.png" alt="Location"><p>PO Box 1220, Manhasset, NY 11030</p></li>
							</ul>
       
      </div>
      <div class="col-sm-6">
        <?php do_shortcode('[monkey-form id="179"]'); ?>
      </div>
    </div>
  </div>
</div>


<?php get_template_part('parts/footer'); ?>
