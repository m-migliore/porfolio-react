<?php /* Template Name: Thank You */ ?>
<?php get_template_part('parts/header'); ?>

<div class="parallax-window interior" data-parallax="scroll">
  <div class="container interior-header text-center">
    <div class="row pad-50">
      <div class="col-xs-12">
        <h1><?php the_title()?></h1>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">

    <div class="row thank-you pad-75">
            <div class="col-xs-12 text-center">
              <h1>Message Sent</h1>
              <p class="lead">
                Thank you for contacting Techwell USA. We will be in touch shortly.
              </p>
            </div>
    </div>

     <script>
            var timer = setTimeout(function() {
                window.location='/'
            }, 3000);
        </script>
    

    
  </div><!-- /.row -->
</div><!-- /.container -->


<?php get_template_part('parts/footer'); ?>
