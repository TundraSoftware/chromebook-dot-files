<?php
function sng_setup() {

  // Enable title in header
  add_theme_support( "title-tag" );

  // Enable featured image
  add_theme_support( 'post-thumbnails' );

  // Enable custom logo
  add_theme_support( 'custom-logo' );

  // Enable custom spacing
  add_theme_support( 'custom-spacing' );

  // Custom menu areas
  register_nav_menus( array('header' => esc_html__( 'Header', 'slug-theme' )));

  // Add support for editor color palette.
  add_theme_support('editor-color-palette', array(
    array(
      'name'  => __('Primary', 'mytheme'),
      'slug'  => 'primary',
      'color' => '#cda434',
    ),
    array(
      'name'  => __('Secondary', 'mytheme'),
      'slug'  => 'secondary',
      'color' => '#a28128',
    ),
    array(
        'name'  => __('Dark', 'mytheme'),
        'slug'  => 'dark',
        'color' => '#0d0d0d',
    ),
    array(
        'name'  => __('Light', 'mytheme'),
        'slug'  => 'light',
        'color' => '#f2f2f2',
    )
  ));

  // Abilita il supporto per WooCommerce
  add_theme_support( 'woocommerce' );

  // Abilita il supporto per la woocommerce gallery
  add_theme_support( 'wc-product-gallery-slider' );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
}
add_action( 'after_setup_theme', 'sng_setup' );

// Rimuovi il pulsante "Aggiungi al carrello" dalla pagina del prodotto singolo
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

// Rimuovi il pulsante "Aggiungi al carrello" dalle pagine di archivio dei prodotti
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

/*  Enqueue css
/* ------------------------------------ */

function sng_styles() {
  wp_enqueue_style( 'sng', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'sng_styles' );


/* Filter Bar Auto widget dinamico */
/* ------------------------------ */
function register_auto_filter_bar() {
  register_sidebar( array(
      'name'          => __( 'Filter Bar Auto', 'mytheme' ),
      'id'            => 'filter_bar_auto',
      'description'   => __( 'Widget area for the filter bar for Auto categories.', 'mytheme' ),
      'before_widget' => '<div class="filter-bar-widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'register_auto_filter_bar' );

/* Filter Bar Orologi widget dinamico */
/* ---------------------------------- */
function register_orologi_filter_bar() {
  register_sidebar( array(
      'name'          => __( 'Filter Bar Orologi', 'mytheme' ),
      'id'            => 'filter_bar_orologi',
      'description'   => __( 'Widget area for the filter bar for Orologi categories.', 'mytheme' ),
      'before_widget' => '<div class="filter-bar-widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'register_orologi_filter_bar' );


/* Footer widget dinamico
/* ------------------------------------ */
function register_footer_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget', 'your-theme-text-domain' ),
        'id'            => 'footer-widget',
        'description'   => __( 'Widget area for the footer.', 'your-theme-text-domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<p class="widget-title">',
        'after_title'   => '</p>',
    ) );
}
add_action( 'widgets_init', 'register_footer_widget' );

// Funzione per Sottomenu Automatici
function custom_menu() {
  $args = array(
      'theme_location' => 'header');
  $menu = wp_nav_menu($args);
}


?>
