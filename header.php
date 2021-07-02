<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Exo+2:300,300i,400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="js/detection.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.css">
    <script src="https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.js"></script>
    <?php /* Fonction essentielle - Ne pas oublier */ wp_head(); ?>
</head>

<body <?php body_class('medium-content-area sidebar-right medium-body-text large-headings large-icons'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    
    <a class="skip-link screen-reader-text" href="#content">
        <span>Skip to content</span>
        <span data-icon="ei-arrow-right"></span>
    </a>

	<header id="masthead" class="site-header" role="banner">
		
        <div class="header-info">
			<h1 class="header-title">Carbon</h1>
			<p class="header-meta">A bold theme for bold bloggers</p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">

            <a href="<?php echo home_url(); ?>" class="custom-logo-link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="50px" height="50px"><rect x="0" fill="none" width="20" height="20"/><g stroke="white" fill="transparent"><path d="M14.48 11.06L7.41 3.99l1.5-1.5c.5-.56 2.3-.47 3.51.32 1.21.8 1.43 1.28 2.91 2.1 1.18.64 2.45 1.26 4.45.85zm-.71.71L6.7 4.7 4.93 6.47c-.39.39-.39 1.02 0 1.41l1.06 1.06c.39.39.39 1.03 0 1.42-.6.6-1.43 1.11-2.21 1.69-.35.26-.7.53-1.01.84C1.43 14.23.4 16.08 1.4 17.07c.99 1 2.84-.03 4.18-1.36.31-.31.58-.66.85-1.02.57-.78 1.08-1.61 1.69-2.21.39-.39 1.02-.39 1.41 0l1.06 1.06c.39.39 1.02.39 1.41 0z"/></g></svg>
            </a>
          
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span data-icon="ei-navicon"></span>
                <span>Menu</span>
            </button>
            
            <div class="menu-wrapper">
                
                <header class="menu-header">
                    <h2 class="menu-title">Menu</h2>
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span data-icon="ei-close"></span>
                        <span class="screen-reader-text">Close Menu</span>
                    </button>
                </header>

            
				<?php wp_nav_menu(array(
					'theme_location' => 'menu_principal',
					'container' => '',
					'menu_class' => 'primary-menu',
					'fallback_cb' => false
				)); ?>

                <?php wp_nav_menu(array(
					'theme_location' => 'social',
                    'container' => '',
					'menu_class' => 'social-nav',
					'fallback_cb' => false
				)); ?>

                <!-- <ul class="social-icons">
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Facebook</span>
                            <span data-icon="ei-sc-facebook"><noscript>Facebook</noscript></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Twitter</span>
                            <span data-icon="ei-sc-twitter"><noscript>Twitter</noscript></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Google Plus</span>
                            <span data-icon="ei-sc-google-plus"><noscript>Google Plus</noscript></span>
                        </a>
                    </li>
                </ul> -->

                <aside id="menu-widget-area" class="menu-widget-area">
                    
                    <section class="widget menu-widget">
                    <?php dynamic_sidebar('menu-sidebar-1'); ?>
                    </section>

                    <section class="widget menu-widget">
                    <?php dynamic_sidebar('menu-sidebar-2'); ?>
                    </section>

                    <section class="widget menu-widget">
                    <?php dynamic_sidebar('menu-sidebar-3'); ?>   
                    </section>

                </aside>

            </div>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->