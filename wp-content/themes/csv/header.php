<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <nav id="site-navigation" class="main-navigation">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'main-menu',
        'menu_id'     => 'primary-menu',
      )
    );
    ?>
  </nav>