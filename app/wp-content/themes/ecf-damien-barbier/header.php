<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <nav id="nav-menu">
        <?php wp_nav_menu(['theme_location' => 'top-menu']) ?>
    </nav>

    <aside>
        <?php
        dynamic_sidebar('left-sidebar');
        ?>
    </aside>
    
    <main>
        <!-- FIN HEADER -->