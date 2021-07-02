<footer id="colophon" class="site-footer" >

<aside id="footer-widget-area" class="footer-widget-area" role="complementary">
    <div class="footer-widgets">
        
        <section class="widget footer-widget">
        <?php dynamic_sidebar('menu-sidebar-1'); ?>
        </section>

        <section class="widget footer-widget">
        <?php dynamic_sidebar('menu-sidebar-2'); ?>
        </section>

        <section class="widget footer-widget">
        <?php dynamic_sidebar('menu-sidebar-3'); ?>   
        </section>

    </div>
</aside>

<div class="footer-wrapper" role="contentinfo">
    
    <div class="site-info">
        <a href="https://wordpress.org">Proudly Powered by WordPress</a>
        <span class="sep"> | </span>
        Theme: Carbon by <a href="" rel="designer">Vincent Dubroeucq</a>
    </div><!-- .site-info -->

    <?php wp_nav_menu(array(
					'theme_location' => 'social',
                    'container' => '',
					'menu_class' => 'social-nav',
					'fallback_cb' => false
				)); ?>

</div><!-- .footer-wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php /* Fonction essentielle - Ne pas oublier */wp_footer(); ?>

</body>