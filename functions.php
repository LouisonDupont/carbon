<?php 

/* Prise en charge de <title> */
add_theme_support('title-tag');

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );


/* Chargement des feuilles de style et des scripts */
function carbon_enqueue_styles_and_scripts() {
     /* Chargement des feuilles de style */
     wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.0');
     /* Chargement des scripts */
     wp_enqueue_script('nav', get_stylesheet_directory_uri() . '/js/navigation.js', array(), '1.0', true);
     wp_enqueue_script('skip', get_stylesheet_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'carbon_enqueue_styles_and_scripts');

/* Création de tailles d'images personnalisées */
add_image_size('archive_thumbnail', 540, 500, true);

// Déclaration des emplacements de Menu
register_nav_menus( array(
     'menu_principal' => 'Menu principal',
     'secondary' => 'Menu secondaire', 
     'social' => 'Réseaux sociaux'
));

/* Création des sidebars */
register_sidebar( array(
    'name'  => 'text-widget',
    'id'    => 'menu-sidebar-1',
    'description' => 'Le widget texte du menu',
    'before_widget' => '<div id="%1$s" class="%2$s widget">',
    'after_widget' => '</div>',
    'before_title' => '<p class="widget-title">',
    'after_title' => '</p>',
    'before_sidebar' => '<div class="sidebar-container">',
    'after_sidebar' => '</div>'
));

register_sidebar( array(
    'name'  => 'list-widget',
    'id'    => 'menu-sidebar-2',
    'description' => 'Le widget de liste',
    'before_widget' => '<div id="%1$s" class="%2$s widget">',
    'after_widget' => '</div>',
    'before_title' => '<p class="widget-title">',
    'after_title' => '</p>',
    'before_sidebar' => '<div class="sidebar-container">',
    'after_sidebar' => '</div>'
));

register_sidebar( array(
    'name'  => 'image-widget',
    'id'    => 'menu-sidebar-3',
    'description' => 'Le widget image',
    'before_widget' => '<div id="%1$s" class="%2$s widget">',
    'after_widget' => '</div>',
    'before_title' => '<p class="widget-title">',
    'after_title' => '</p>',
    'before_sidebar' => '<div class="sidebar-container">',
    'after_sidebar' => '</div>'
));