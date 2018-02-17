<!doctype html>
<html lang="en">
<head>
    <title><?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>></title>

    <meta charset="<?php bloginfo('charset'); ?>"></meta>

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    ></meta>

    <link
        rel="icon"
        href="https://s3.us-east-2.amazonaws.com/hindquarter.project/favicon.png"
    ></link>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
    ></link>

    <link
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous"
    ></link>

    <link
        href="https://fonts.googleapis.com/css?family=Sancreek|Cutive|Roboto|Noto+Sans"
        rel="stylesheet"
    ></link>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>

<body>

    <div
        class="header container-fluid"
        id="header"
    >
        <div class="row">
            <div class="col-12 mr-auto">
                <h1>THE HINDQUARTER</h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
        >
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
        </div>
    </nav>

    <div class="container-fluid index-subheader">
        <div class="row">
            <div class="col-12 text-center">
                <h5></h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title"><?php bloginfo('name') ?></h1>
            <p class="lead blog-description"><?php bloginfo('description'); ?></p>
        </div>
    </div>