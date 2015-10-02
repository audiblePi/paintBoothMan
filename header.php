<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>	<?php wp_head(); ?>
</head>

<div class="header">
	<div class="container">
		<div class="row">
			<div class="six columns">
				<a href="<?php echo site_url(); ?>">
					<div class="logo-container">
						<h2>PBMS INC.</h2>
						<p>Paint Booth Maintenance Services, Inc.</p>
					</div>
				</a>
			</div>
			<div class="six columns">
				<div class="twelve columns button-container">
					<div class="login-panel">
						<a href="/my-account"><button>Registration</button></a>
						<a href="/my-account"><button>Customer Login</button></a>
					</div>
					<ul class="social-icons">
						<li><a href="#"><i class="icon-facebookalt"></i></a></li>
						<li><a href="#"><i class="icon-googleplus"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="twelve columns shopping-cart-menu">
					<div>
						<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
							<?php echo sprintf (_n( '(%d) Item', '(%d) Items' , WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> In Your Shopping Cart<?php #echo WC()->cart->get_cart_total(); ?>
							<img src="/wp-content/themes/paintBoothMan/assets/images/cart.png">
						</a>
						<div class="phone-number">(904) 514-8332</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="menu-container">
	<div class="container">
		<div class="menu-wrapper">
			<div class="mobile-menu-wrapper">
				<i class="icon-menu"></i>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
		</div>
		<div class="search-form">
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<div class="mobile-menu-container">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<div class="">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<body <?php body_class(); ?>>