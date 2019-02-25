<?php if ( is_front_page() ) {	?>

	<div class="above-foot">
		<div id="floating-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="content wow fadeInLeft">
							<h2>Get In Touch</h2>
							<div class="foot-form">
								<?php echo do_shortcode('[monkey-form id="101"]'); ?>
							</div>
						</div>
					</div>
					<div class="col-sm-6 wow fadeInRight">
						<div class="content">
							<h2>Contact Info</h2>
							<p>Contact Fluent by phone, email, or letter. You may also fill out the Get In Touch form for immediate assistance. We look forward to assisting you.</p>
							<ul class="list-unstyled">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="Phone"> <a href="tel:16462619091">646.261.9091</a></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/mailbox.png" alt="Mailbox"> <a href="mailto:bbentii@doublerockcorp.com">bbentii@doublerockcorp.com</a></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/location.png" alt="Location"><p>PO Box 1220 <span>Manhasset, NY 11030</span></p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer home-footer text-center">

<?php } else { ?>
	<div class="footer text-center">
<?php } ?>

	<div class="container">

			<div class="row">
				<div class="col-xs-12">
					<img src="<?php echo get_template_directory_uri(); ?>/img/fluent-logo-white.png" alt="Fluent" class="body-logo">
					<ul class="list-unstyled foot-nav">
	        	<li><a href="<?php echo site_url(); ?>">Home</a></li>
	        	<li><a href="<?php echo site_url(); ?>/about">About</a></li>
	      	<li><a href="<?php echo site_url(); ?>/for-individuals">Individuals</a></li>
					<li><a href="<?php echo site_url(); ?>/for-businesses">Businesses</a></li>
					<li><a href="<?php echo site_url(); ?>/for-advisors">Advisors</a></li>
					<li><a href="<?php echo site_url(); ?>/for-banks">Banks</a></li>
	        	<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
	        </ul>
				</div>
				<?php /*?><div class="col-xs-12">
					<h4>Subscribe To Our Newletter</h4>
					<form class="form-inline newsletter-form">
					  <div class="form-group">
					    <label for="exampleInputEmail2" class="sr-only">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email address">
					  </div>
					  <button type="submit" class="btn btn-default">Subscribe</button>
					</form>
				</div><?php */?>
			</div>

			<div class="foot-copy row">
			   <div class="col-sm-6 text-left">
			     <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
			   </div>

			   <div class="col-sm-6 text-right">
			     <p>Web Design &amp; Development by <span>Logic Web Media</span></p>
			   </div>
			 </div>

	</div>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>

</body>
</html>
