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
                <?php get_template_part('template-parts/top-bar'); ?>
                <div class="nav-bar md:flex px-6 justify-between lg:items-center border-b pb-4">
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
                    <div class="flex flex-col md:flex-row menu-bar py-15 px-8 md:py-0 md:px-0 flex-1 items-center md:justify-end">
                        <div class="site-logo md:hidden">
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
                        wp_nav_menu(
                            array(
                                'container_id'    => 'primary-menu',
                                'container_class' => 'flex mt-8 md:mt-0 df-main-menu lg:flex-1 lg:justify-end lg:space-x-4', // Updated classes
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
            <div>
                <div class="main-carousel">
                    <div><img src="http://localhost:8080/wp-content/uploads/2025/03/slide3.jpg" alt="Slide 1"></div>
                    <div><img src="http://localhost:8080/wp-content/uploads/2025/03/slide2.jpeg" alt="Slide 2"></div>
                    <div><img src="http://localhost:8080/wp-content/uploads/2025/03/slide1.jpeg" alt="Slide 3"></div>
                </div>

                <script>
                    jQuery(document).ready(function($) {
                        $('.main-carousel').slick({
                            dots: true,
                            infinite: true,
                            speed: 900,
                            slidesToShow: 1,
                            adaptiveHeight: true,
                            autoplay: true,
                            autoplaySpeed: 3000,
                            prevArrow: false,
                            nextArrow: false,
                        });
                    });
                </script>

            </div>

        </header>

        <div class="overlay">sd</div>
        <div id="content" class="site-content grow">

            <?php if (is_front_page()) { ?>
                <!-- Start introduction -->
                <div class="container mx-auto">
                    <div class="px-12 py-16 my-12 rounded-xl bg-linear-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
                        <div class="mx-auto max-w-(--breakpoint-md)">
                            <h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
                                with <a href="https://tailpress.io" class="text-primary">TailPress</a>.</h1>
                            <p class="text-gray-600 text-xl font-medium mb-10">TailPress is your go-to starting
                                point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out
                                of the box.</p>
                            <a href="https://github.com/jeffreyvr/tailpress"
                                class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-hidden transition-colors duration-200">View
                                on GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- End introduction -->
            <?php } ?>

            <?php do_action('tailpress_content_start'); ?>

            <main>