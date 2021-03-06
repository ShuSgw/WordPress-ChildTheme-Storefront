<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <header>
                <h1 class="header__title"><a href="<?php echo get_home_url(); ?>"><?php bloginfo(); ?></a></h1>
                <div id="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                </div>
                </div>
                <div class="nav">
                        <?php wp_nav_menu(array('container' => false, 'menu_class' => 'nav__menu')); ?>
                        <li class="nav__mobCartList"><a href=<?php echo wc_get_cart_url(); ?>>Cart</a></li><?php wc_get_cart_url(); ?></a>
                        <a href=<?php echo wc_get_cart_url(); ?>><i class="fas fa-cart-plus nav__cartBtn"></i></a>
                </div>
        </header>
        <?php if (is_front_page()): ?>
	        <?php echo do_shortcode('[metaslider id="160"]'); ?>
	<?php else: ?>
            <div id="page" class="hfeed site">
        <?php endif; ?>