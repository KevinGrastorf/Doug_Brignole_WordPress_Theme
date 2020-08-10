<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DougBrignole
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title>Doug Brignole</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="Doug Brignole is a bodybuilding champion, author, personal trainer, and speaker. He is an expert on muscular development and biomechanics.">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/lightbox.min.css"  rel="stylesheet"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150238072-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-150238072-1');
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navdoug2">
        <a class="navbar-brand" href="https://dougbrignole.com/"><img class="logo-nav" src="https://dougbrignole.com/wp-content/uploads/2019/10/logo.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="https://dougbrignole.com">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Articles</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="https://dougbrignole.com/shop/">Interviews</a>
                      <a class="dropdown-item" href="http://dougbrignole.com/coming-soon/">Published Articles</a>
                    </div>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/Story/">Story</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Brig-Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://dougbrignole.com/shop/">All Products</a>
                        <a class="dropdown-item" href="http://dougbrignole.com/coming-soon/">Brig-Manix</a>
                        <a class="dropdown-item" href="http://dougbrignole.com/coming-soon/">Brig-Nutrix</a>
                        <a class="dropdown-item" href="http://dougbrignole.com/coming-soon/">Brig-Sportex</a>
                        <a class="dropdown-item" href="http://dougbrignole.com/coming-soon/">Brig-Education</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/YouTube">YouTube</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/universe/">Mr. Universe!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/photos/">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/certification/">Certification</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://dougbrignole.com/coming-soon/">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/product/seminar-fee/">Seminars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/Cart/">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://dougbrignole.com/checkout/">Checkout</a>
                </li>
                <a href="https://www.facebook.com/DougBrignole/" target="_blank"><img class="social face" src="https://dougbrignole.com/wp-content/uploads/2019/10/FB-logo.png" alt=""></a>
            <a href="https://www.instagram.com/dougbrignole/?hl=en" target="_blank"><img class="social insta" src="https://dougbrignole.com/wp-content/uploads/2019/10/IG-logo.png" alt=""></a>

            </ul>

        </div>
    </nav>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'dougbrignole'); ?></a>

        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if (is_front_page() && is_home()) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;
                $dougbrignole_description = get_bloginfo('description', 'display');
                if ($dougbrignole_description || is_customize_preview()) :
                    ?>
                    <p class="site-description"><?php echo $dougbrignole_description; /* WPCS: xss ok. */ ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'dougbrignole'); ?></button>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ));
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">
