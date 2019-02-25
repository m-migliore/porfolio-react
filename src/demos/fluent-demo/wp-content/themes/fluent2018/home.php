<?php /* Template Name: Home */ ?>
<?php get_template_part('parts/header'); ?>


<div class="p-window one">
  <section>
    <div class="image" data-type="background" data-speed="4"></div>
    <div class="container text-left welcome">
      <div class="row">
        <div class="col-sm-7">

        <div class="wow fadeInLeft">
          <h1 class="fw-900">Welcome to the <br> Next Generation of Cash Management.</h1>
          <p>Fluent creates and improves investment opportunities for individuals, businesses, banks, and advisors alike. Our innovative platform will increase your interest rates and insure your cash accounts while maintaining liquidity.</p>
          <a href="<?php echo site_url(); ?>/about" class="btn btn-info">Learn More</a>
          <a href="#" class="btn btn-default">Open An Account</a>
         </div>

        </div>

        <img class="wow fadeInUp" src="<?php echo get_template_directory_uri(); ?>/img/desktop.png" alt="Fluent Desktop View">

      </div>
    </div>
  </section>
</div>

<div class="clearfix"></div>

<div class="approach  wow pad-50 text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3 class="gray">Our Approach</h3>
        <img class="approach-logo" src="<?php echo get_template_directory_uri(); ?>/img/fluent-logo-dark-blue.png" alt="Fluent">
        <p class="lead">Fluent's unique, custom approach will help you earn more money, while keeping your investments safe and secure.</p>
      </div>
    </div>
    </div>
    
    <div class="container-fluid">
    <div class="row pad-25">


    <div class="wow fadeInUp">
      <div class="col-sm-3">
        <img src="<?php echo get_template_directory_uri(); ?>/img/target.png" alt="Target">
        <h3>Goal Setting & Planning</h3>
        <p>Let us know how much you want to invest and your expectations. We will find the right solution.</p>
      </div>
      </div>

       <div class="wow fadeInUp" data-wow-delay=".5s">
      <div class="col-sm-3">
        <img src="<?php echo get_template_directory_uri(); ?>/img/piggy-bank.png" alt="Piggy Bank">
        <h3>Start Investing & Earning</h3>
        <p>Once we have your approval, we will allocate your funds to the right places for maximum return. </p>
      </div>
      </div>

       <div class="wow fadeInUp" data-wow-delay="1s">
      <div class="col-sm-3">
        <img src="<?php echo get_template_directory_uri(); ?>/img/stopwatch.png" alt="Stopwatch">
        <h3>Save Time & Earn More</h3>
        <p>Enjoy a higher return and safer investment, all while letting Fluent do the work for you.</p>
      </div>
      </div>

       <div class="wow fadeInUp" data-wow-delay="1.5s">
      <div class="col-sm-3">
        <img src="<?php echo get_template_directory_uri(); ?>/img/umbrella.png" alt="Umbrella">
        <h3>Enjoy Peace of Mind</h3>
        <p>Investing with Fluent means your cash reserves are FULLY FDIC insured and still accessible at a moments notice.</p>
            </div>
      </div>
    </div>
  </div>
</div>



<div id="baseline" class="container"></div>

<div class="about">
  <div class="container-fluid">
    <div class="row">
      <div id="about-info" class="col-sm-7 col-sm-push-5 pad-75 wow fadeInRight" data-wow-delay=".5s">
        <h2>About</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/fluent-logo-white.png" alt="Fluent" class="body-logo">
        <p>The Fluent platform keeps your money liquid, safe, and accessible.</p>
        <h2>Take a Look Around</h2>
        <p>Whether you are an individual looking for a secure investment, or a business looking for maximum coverage, Fluent can help. Our products are designed to meet and exceed your financial goals, all while keeping you in full control. Opening and managing an account with Fluent is simple and secure. Earn interest, keep your investments safe, diversify your portfolio, and more, all from one convenient platform.</p>
        <a href="#" class="btn btn-default">Open An Account</a>
      </div>
      <div id="about-bg" class="col-sm-5 col-sm-pull-7"></div>
    </div>
  </div>
</div>



<!-- <div class="about">
  <div class="container-fluid">
    <div class="row">
     <div id="about-info" class="col-xs-12 col-sm-6 col-sm-offset-5 pad-75">

      <div class="wow fadeInRight" data-wow-delay=".5s">
        <h2>About</h2>
        <img src="<?php //echo get_template_directory_uri(); ?>/img/fluent-logo-white.png" alt="Fluent" class="body-logo">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        <h2 class="fw-400">Take a Look Around</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#" class="btn btn-default">Open An Account</a>
        </div>

      </div>
    </div>
  </div>
</div> -->

<div class="clearfix"></div>

<?php /*?><div class="testimonials text-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">

        <section class="text-slider slider wow fadeInLeft">
          <div>
            <h2>John Doe</h2>
            <h3>CEO of Some Company</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
          </div>
          <div>
            <h2>Joe Doe</h2>
            <h3>Consumer Client</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
          </div>
          <div>
            <h2>Jane Doe</h2>
            <h3>CFO of Some Company</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
          </div>
          <div>
            <h2>John Doe</h2>
            <h3>CEO of Some Company</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
          </div>
          <div>
            <h2>Joe Doe</h2>
            <h3>Consumer Client</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
          </div>
          <div>
            <h2>Jane Doe</h2>
            <h3>CFO of Some Company</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
          </div>
        </section>

        <section class="head-slider slider head-holder wow fadeInRight">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/john-doe.svg" alt="John Doe">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/joe-doe.svg" alt="Joe Doe">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/jane-doe.svg" alt="Jane Doe">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/john-doe.svg" alt="John Doe">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/joe-doe.svg" alt="Joe Doe">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/jane-doe.svg" alt="Jane Doe">
          </div>
        </section>

      </div>
    </div>
  </div>
</div><?php */?>

<div class="clearfix"></div>

<div class="faq-section pad-75">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>FAQ</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/fluent-logo-dark-blue.png" alt="Fluent" class="body-logo">
        <p>Here are some Frequently Asked Questions about how Fluent can help you</p>
      </div>
    </div>
    <div class="row pad-50">
      <div class="col-sm-6 col-sm-push-6">
        <img src="<?php echo get_template_directory_uri(); ?>/img/desktop.png" alt="Fluent Desktop View" class="wow fadeInUp">
      </div>
      <div class="col-sm-6 col-sm-pull-6">
        <div class="panel-group wow fadeInLeft" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  1. How can Fluent help individual investments?
                  <i class="fa fa-caret-up" aria-hidden="true"></i>
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <p>Fluent’s CD Marketplace makes it easy for anyone to purchase high-profit, minimal-risk CDs. On Fluent’s platform, you can secure your savings (while still keeping money in a bank) with ease. <a href="<?php echo site_url(); ?>/for-individuals/">Learn More.</a></p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  2. How will a Fluent account help my business?
                  <i class="fa fa-caret-up" aria-hidden="true"></i>
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <p>FDIC coverage stops at $250,000. Successful businesses need more. By creating an account with Fluent, your business will enjoy maximum coverage and optimal returns. <a href="<?php echo site_url(); ?>/for-businesses/">Learn More.</a></p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  3. How can Fluent help my clients?
                  <i class="fa fa-caret-up" aria-hidden="true"></i>
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <p>Clients trust you to find secure financial institutions that will store and invest their money. An accessible interface and impenetrable security system make Fluent the right choice for advisors seeking the opportunity to earn a profit – safely <a href="<?php echo site_url(); ?>/for-advisors/">Learn More.</a></p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  4. How will Fluent maximize my bank's potential?
                  <i class="fa fa-caret-up" aria-hidden="true"></i>
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <p>Fluent is the digital resource that your bank needs. Our new banking enhancement platform will give you precise control over diversified and insured funds. <a href="<?php echo site_url(); ?>/for-banks/">Learn More.</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>

<!-- <div class="p-window two">
  <section>
    <div class="image" data-type="background" data-speed="4"></div>
  </section>
</div>

<div class="clearfix"></div> -->



<?php get_template_part('parts/footer'); ?>
