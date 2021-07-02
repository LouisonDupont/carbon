<?php get_header(); ?>

<div id="content" class="site-content">

<main id="primary" class="content-area" role="main">

    <!-- DEUXIEME FACON D'ECRIRE LA BOUCLE POUR LA PAGE ARCHIVE AVEC LES ACCOLADES -->

    
    <?php /* Boucle WP */
    if (have_posts() ) {
        while (have_posts() ) {
            the_post();
            ?>
            <article class="post hentry">

            <header class="entry-header">
            <h2 class="entry-title"><a title="Basic text elements" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <p class="entry-meta">
                <span class="byline">Posted in <a href="<?php the_permalink(); ?>"><?php single_cat_title(); ?></a>, on <a href="#"><?php the_date(); ?></a></span>
            </p><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
            <?php the_content();?>    
            </div><!-- .entry-content -->

            </article>
            <?php
                
        }
    } ?>

    
    
    <nav class="navigation posts-navigation" role="navigation">
        <h2 class="screen-reader-text">Posts navigation</h2>
        <div class="nav-links">
             <!-- <div class="nav-previous">
                <a href="#" class="next-posts-link button" rel="prev">
                    <span data-icon="ei-arrow-left"></span>
                    <span>Older post</span>
                </a>
            </div> 
            <div class="nav-next">
                <a href="#" class="previous-posts-link button" rel="next">
                    <span>Newer post</span>
                    <span data-icon="ei-arrow-right"></span>
                </a>
            </div> -->
            <?php posts_nav_link( ' · ', 'previous page', 'next page' ); ?>
        </div>  
    </nav>

</main><!-- #main -->

<aside id="secondary" class="widget-area" role="complementary">

    <section class="widget">
    <?php dynamic_sidebar('menu-sidebar-1'); ?>   
    </section>

    <section class="widget">
    <?php dynamic_sidebar('menu-sidebar-2'); ?>   
    </section>

    <section class="widget">
    <?php dynamic_sidebar('menu-sidebar-3'); ?>       
    </section>

</aside><!-- #secondary -->

</div><!-- #content -->


<?php get_footer(); ?>