<?php

function devlog_setup() {
   add_theme_support( 'post-thumbnails' ); 
   add_theme_support( 'title-tag' );
   register_nav_menus([
'primary' => 'Primary Navigation',
   ]);
}

add_action( 'after_setup_theme', 'devlog_setup' );