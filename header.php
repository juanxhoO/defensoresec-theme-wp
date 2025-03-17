<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">

        <?php do_action('tailpress_header'); ?>

        <header>
            <div class="mx-auto container">
                <div class="nav-bar md:flex px-6 justify-between lg:items-center border-b py-4">
                    <!-- Logo Section -->
                    <div class="flex justify-between items-center">
                        <div class="site-logo">
                            <?php if (has_custom_logo()) { ?>
                                <?php the_custom_logo(); ?>
                            <?php } else { ?>
                                <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                                    <?php echo get_bloginfo('name'); ?>
                                </a>

                                <p class="text-sm font-light text-gray-600">
                                    <?php echo get_bloginfo('description'); ?>
                                </p>
                            <?php } ?>
                        </div>

                        <!-- Mobile Menu Toggle -->
                        <div class="md:hidden">
                            <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                                <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                        <g id="icon-shape">
                                            <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                                id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Menu Section -->
                    <div class="flex flex-col flex-1 menu-bar py-15 px-8 md:py-0 md:px-0 flex-1 justify-start md:justify-around">
                        <div class="site-logo mx-auto md:hidden">
                            <?php if (has_custom_logo()) { ?>
                                <?php the_custom_logo(); ?>
                            <?php } else { ?>
                                <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                                    <?php echo get_bloginfo('name'); ?>
                                </a>

                                <p class="text-sm font-light text-gray-600">
                                    <?php echo get_bloginfo('description'); ?>
                                </p>
                            <?php } ?>
                        </div>
                        <div id="close-menu-toggle" class="absolute -right-14 top-4"><a href="#"><i class="fa-solid fa-2x fa-xmark"></i></a></div>
                        <?php
                        get_template_part('template-parts/top-bar');

                        wp_nav_menu(
                            array(
                                'container_id'    => 'primary-menu',
                                'container_class' => 'flex mt-8 md:mt-0 df-main-menu md:justify-end lg:space-x-4', // Updated classes
                                'menu_class'      => 'flex-col md:flex-row flex gap-4 lg:items-center', // Updated classes
                                'theme_location'  => 'primary',
                                'li_class'        => 'lg:mx-4', // Add spacing between menu items
                                'fallback_cb'     => false,
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>

            <?php

            if (is_front_page()) {
                // This is the front page
                get_template_part('template-parts/carousel');
            } ?>
        </header>

        <div class="overlay">sd</div>
        <div id="content" class="site-content grow">
            <?php do_action('tailpress_content_start'); ?>

            <main>