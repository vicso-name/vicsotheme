<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <div id="wrapper">
        <header id="header">
            <div class="container header__inner">

                <nav class="header__nav header__nav--left">
                    <nav class="main-nav">
                        <?php
                            wp_nav_menu([
                            'theme_location' => 'menu-1',
                            'menu_class'     => 'main-menu',
                            'container'      => false,
                            'fallback_cb'    => false,
                            ]);
                        ?>
                    </nav>
                </nav>

               <div class="header__logo">
                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');

                        if ($custom_logo_id) {
                            $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                            echo '<a href="' . esc_url(home_url('/')) . '" class="custom-logo-link" rel="home">';
                            echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '" class="svg replaced-svg">';
                            echo '</a>';
                        } else {
                            echo '<a href="' . esc_url(home_url('/')) . '" class="site-title">' . get_bloginfo('name') . '</a>';
                        }
                    ?>
                </div>

                <div class="header__right">
                    <a href="#contact" class="btn btn--outline">Contact</a>
                </div>

            </div>
        </header>
            <main>