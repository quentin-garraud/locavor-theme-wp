<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <?php wp_nav_menu( array('theme_location' => 'main') ); ?>
    <a href="<?php echo home_url("/"); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-locavor.png" alt="Logo">
    </a> 
    <?php wp_nav_menu( array('theme_location' => 'woocommerce') ) ?>
</header>
