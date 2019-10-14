<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8" />
    <title>Webpack Starter</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <link
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous"
    />
    <?php wp_head(); ?>
</head>
<body>
<div class="main-wrapper">
    <!--header-->
    <header class="header">
        <div class="header-container">
            <div class="block_row">
                <div class="block_humburger">
                    <div class="humb js-menu"><div class="humb__line"></div></div>
                </div>
                <div class="block_logo">
                    <?php the_custom_logo(); ?>
                </div>
                <?php wp_nav_menu( array(
                    'theme_location' => 'header',
                    'container'       => 'nav',
                    'container_class' => 'block_nav',
                    'menu_class'      => 'block_nav__menu',
                    'depth'           => 2
                ) ); ?>
                <div class="block_right">
                    <a class="phone" href="tel:<?php echo get_option('theme_contacttext')?>"><?php echo get_option('site_telephone')?></a
                    ><a class="phone_mob" href="tel:+17003254245"><i class="fa fa-phone" aria-hidden="true"></i></a
                    ><button class="header__btn btn">Ask a question</button>
                </div>
            </div>
        </div>
    </header>