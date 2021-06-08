<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support("post-thumbnails");

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support("title-tag");

function locavor_remove_menu_pages()
{
  remove_menu_page("tools.php");
  remove_menu_page("edit-comments.php");
}

function locavor_register_assets()
{
  // Déclarer style.css à la racine du thème
  wp_enqueue_style("locavor", get_stylesheet_uri(), [], "1.0");

  // Déclarer un autre fichier CSS
  wp_enqueue_style(
    "locavor-main",
    get_template_directory_uri() . "/assets/styles/styles.css",
    [],
    null
  );
}

register_nav_menus([
  "main" => "Menu Principal",
  "footer-info" => "Footer info",
  "footer-legal" => "Footer legal",
]);

register_sidebar([
  "id" => "footer-widget-one",
  "name" => "Footer - Premier Widget",
  "before_widget" => '<div class="footer-brand">',
  "after_widget" => "</div>",
  "before_title" => '<h2 class="footer-brand__heading">',
  "after_title" => "</h2>",
]);
register_sidebar([
  "id" => "footer-widget-two",
  "name" => "Footer - Deuxieme Widget",
  "before_widget" => '<ul class="footer-links">',
  "after_widget" => "</ul>",
  "before_title" => '<h3 class="footer-links__heading">',
  "after_title" => "</h3>",
]);
register_sidebar([
  "id" => "footer-widget-tree",
  "name" => "Footer - Troisieme Widget",
  "before_widget" => '<ul class="footer-links">',
  "after_widget" => "</ul>",
  "before_title" => '<h3 class="footer-links__heading">',
  "after_title" => "</h3>",
]);

add_action("wp_enqueue_scripts", "locavor_register_assets");
add_action("admin_menu", "locavor_remove_menu_pages");

// WooCommerce
remove_action(
  "woocommerce_before_main_content",
  "woocommerce_output_content_wrapper",
  10
);
remove_action(
  "woocommerce_after_main_content",
  "woocommerce_output_content_wrapper_end",
  10
);

add_action("woocommerce_before_main_content", "locavor_wrapper_start", 10);
add_action("woocommerce_after_main_content", "locavor_wrapper_end", 10);

function locavor_wrapper_start()
{
  echo '<section id="main">';
}

function locavor_wrapper_end()
{
  echo "</section>";
}

function locavor_add_woocommerce_support()
{
  add_theme_support("woocommerce", [
    "thumbnail_image_width" => 150,
    "single_image_width" => 300,

    "product_grid" => [
      "default_rows" => 3,
      "min_rows" => 2,
      "max_rows" => 8,
      "default_columns" => 4,
      "min_columns" => 2,
      "max_columns" => 5,
    ],
  ]);
}

add_action("after_setup_theme", "locavor_add_woocommerce_support");

add_theme_support("wc-product-gallery-zoom");
add_theme_support("wc-product-gallery-lightbox");
add_theme_support("wc-product-gallery-slider");

add_filter("woocommerce_enqueue_styles", "__return_false");
