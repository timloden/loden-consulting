<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); 
?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <header class="header">
            <nav class="navbar navbar-light">
                <div class="container">
                    <a class="navbar-brand fw-bold"
                        href="<?php echo site_url(); ?>"><?php if (!is_front_page()) : ?>LODEN CONSULTING
                        LLC<?php endif; ?></a>
                    <div class="d-flex">
                        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </nav>
        </header>


        <div id="content" class="site-content">

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel"></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <?php 
                        wp_nav_menu( array(
                            'menu'              => 'mobile',
                            'menu_class'        => 'nav flex-column',
                            'container_class'   => 'mobile-menu',
                        ) );
                    ?>

                    <?php if (is_user_logged_in()) : ?>
                    <ul class="nav flex-column border-top mt-3 pt-3">
                        <li class="nav-item"><a class="nav-link text-center text-dark"
                                href="<?php echo site_url(); ?>/client-area">My Account</a></li>
                        <li class="nav-item"><a class="nav-link text-center text-dark"
                                href="<?php echo site_url(); ?>/client-area">Edit Profile</a></li>
                        <li class="nav-item"><a class="nav-link text-center text-dark"
                                href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>