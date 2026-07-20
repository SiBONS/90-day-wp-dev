<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header-inner">
            <a href="<?php echo home_url('/'); ?>">DEV // LOG</a>
            <nav>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu',
                    'fallback_cb' => false,
                ]);
                ?>
            </nav>
        </div>
    </header>
    <main>
    