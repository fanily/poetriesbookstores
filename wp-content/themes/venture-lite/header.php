<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-default">
		<header id="<?php if (nimbus_get_option('fp-banner-slug')=='') {echo "home";} else {echo nimbus_get_option('fp-banner-slug');} ?>" >
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<?php get_template_part( 'partials/social'); ?>
					</div>		
					<div class="col-sm-6  col-sm-pull-6">
						<h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1> <span class="tagline"><?php bloginfo('description'); ?></span>
					</div>
				</div>	
			</div>
	    </header>
	    <nav class="primary-nav">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php get_template_part( 'partials/menu'); ?>
					</div>		
				<div>
			</div>
	    </nav>