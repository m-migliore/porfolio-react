<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/fav/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/fav/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/fav/safari-pinned-tab.svg" color="#3799d4">
<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:300,400" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>



</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->



<div class="main-nav">
<div class="container">


  <div class="row">


  <nav class="navbar navbar-default navbar-static" role="navigation">
      <div class="navbar-header">
        <button type="button" id="hamburger" class="navbar-toggle" data-toggle="collapse" data-target=".lower-navbar">
          <span class="sr-only">Toggle navigation</span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand" href="#" data-toggle="collapse" data-target=".lower-navbar">Menu</a>
      </div><!-- /.navbar-header -->

  <div class="logo">
<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/fluent-logo.png" alt="<?php wp_title(); ?>"></a>
</div>


<div class="col-xs-12">
  <div class="collapse navbar-collapse lower-navbar">
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url(); ?>">Home</a></li>
      <li><a href="<?php echo site_url(); ?>/about">About</a></li>
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
				<ul class="dropdown-menu">
					<i class="fa fa-caret-up fa-2x hidden-xs" aria-hidden="true"></i>
					<li><a href="<?php echo site_url(); ?>/for-individuals"><img src="<?php echo get_template_directory_uri(); ?>/img/individual.png" alt="Individual" class="hidden-xs"> For Individuals <span class="hidden-xs">FDIC | CDM</span></a></li>
					<li><a href="<?php echo site_url(); ?>/for-businesses"><img src="<?php echo get_template_directory_uri(); ?>/img/briefcase.png" alt="Briefcase" class="hidden-xs"> For Businesses <span class="hidden-xs">FDIC | MFM</span></a></li>
					<li><a href="<?php echo site_url(); ?>/for-advisors"><img src="<?php echo get_template_directory_uri(); ?>/img/handshake.png" alt="Handshake" class="hidden-xs"> For Advisors <span class="hidden-xs">ICS | CDM | MFM</span></a></li>
					<li><a href="<?php echo site_url(); ?>/for-banks"><img src="<?php echo get_template_directory_uri(); ?>/img/bank.png" alt="Bank" class="hidden-xs"> For Banks <span class="hidden-xs">DDX | ICS | CDM</span></a></li>
					<li class="hidden-xs"><a href="#">Open An Account</a></li>
				</ul>
			</li>
            <li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
		<?php /*?>	<li><a href="<?php echo site_url(); ?>/legal">Legal</a></li>
			<li><a href="<?php echo site_url(); ?>/press-media">Press/Media</a></li>
      <li><a href="<?php echo site_url(); ?>/">Login</a></li><?php */?>
      <li><a href="#" class="btn btn-default btn-clear">Open An Account</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div>
  </div><!-- row -->
</nav>
  </div>
  </div>