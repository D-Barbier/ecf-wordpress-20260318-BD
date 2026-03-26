<?php

/**
 * La prise en charge des images de mise en avant (Thumbnails)
 */
function db_add_thumbnails()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'db_add_thumbnails');

/**
 *  Déclaration d'un emplacement de sidebar nommé "left-sidebar" qui affichera les catégories.
 */
function dba_widget_init(){

    register_sidebar([
        'id' => 'left-sidebar',
        'name' => 'Sidebar pour les catégories',
        'before_widget' => '<div class="left-sidebar">',
        'after_widget'  => '</div>',
    ]);
}

add_action("widgets_init", "dba_widget_init");


/**
 * Déclaration d'un emplacement de menu nommé "top-menu".
 */
function dba_menu_init()
{
    
    register_nav_menus([
        'top-menu' => 'Menu Principal',
    ]);
}

add_action('init', 'dba_menu_init');

