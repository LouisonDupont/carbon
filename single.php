<?php get_header(); ?>

<div id="content" class="site-content">

<main id="primary" class="content-area" role="main">

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

</main><!-- #main -->

<aside id="secondary" class="widget-area" role="complementary">
    <div class="widget">
    <?php dynamic_sidebar('menu-sidebar-1'); ?>
    </div>
</aside><!-- #secondary -->

</div><!-- #content -->

<?php get_footer(); ?>