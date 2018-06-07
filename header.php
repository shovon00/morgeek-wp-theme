<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	
	<!-- ========== google-fonts ========== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">



	<?php wp_head(); ?>
</head>
<body>
	<!-- ========== start of preloader section ========== -->
	<div class="preloader">
	    <div class="spinner">
	        <span class="spinner-rotate"></span>
	    </div><!-- /.end of spinner -->
	</div><!-- /.end of preloader -->

	<!-- ========== start of header section ========== -->
	<header id="head">
		<div class="menu">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#affreview-navbar-collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img src="<?php global 
						$redux_demo; echo $redux_demo['logo']['url']; ?>" alt="logo"></a>
					</div><!-- /.end of navbar-header -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="affreview-navbar-collapse">
						<?php wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'menu_class' => 'nav navbar-nav navbar-right'

						)); ?>
						
					</div><!-- /.end of navbar-collapse -->
				</div><!-- /.end of container -->
			</nav><!-- /.end of navbar -->
		</div><!-- /.end of menu -->
	</header><!-- /#end of head section -->