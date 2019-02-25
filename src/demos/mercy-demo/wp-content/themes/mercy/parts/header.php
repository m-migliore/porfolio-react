<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <?php /*?>  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script><?php */?>

   

</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->    

<div class="main-nav text-center">
<div class="container">
<div class="row">
  <div class="col-xs-12">
    <a href="<?php echo site_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" class="header-logo">
    </a> 
  </div>
</div>
  
  
  <div class="row">
  
  
  <nav class="navbar navbar-default navbar-static" role="navigation">
    <div class="navbar-header">

      <a class="navbar-brand" href="#" data-toggle="collapse" data-target=".lower-navbar">Menu</a>
    </div><!-- /.navbar-header -->


    <div class="col-xs-12">
      <!-- <div class="collapse navbar-collapse lower-navbar"> --> 
      <div>   
        <ul class="nav navbar-nav">
          <li class="under-center"><a href="<?php echo site_url(); ?>">Home</a></li>
          <li class="under-center"><a href="<?php echo site_url(); ?>/about">About</a></li>
          <li class="under-center"><a href="<?php echo site_url(); ?>/menu">Menus</a></li>
          <li class="under-center"><a href="<?php echo site_url(); ?>/events">Events</a></li>
          <li class="under-center"><a href="<?php echo site_url(); ?>/community">Community</a></li>
          <li class="under-center"><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>



  </div><!-- row -->

  <div class="row">
    <div class="col-xs-12">
      <p>901 Hennepin Avenue, Minneapolis, MN 55403 | (612) 252-7000</p>
      <a href="http://www.opentable.com/single.aspx?rid=107146&restref=107146" target="_blank" class="hidden-lg"><h4>Make a Reservation</h4></a>
    </div>
  </div>
  
  
  
  </nav>

</div>
</div>
