<!doctype html>
<html <?php language_attributes();?>
<head>
    <title><?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>></title>

    <meta charset="<?php bloginfo('charset'); ?>"></meta>

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    ></meta>

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
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a
                        href="https://andysaver.xyz/index.html"
                        class="nav-link"
                    >
                        Home

                        
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >Weddings & Events</a>

                    <div
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdown"
                    >
                        <a
                            class="dropdown-item"
                            href="https://andysaver.xyz/menus.html"
                        >Menus</a>

                        <a
                            class="dropdown-item"
                            href="https://andysaver.xyz/process.html"
                        >Planning Process</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >Barbeque</a>

                    <div
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdown"
                    >
                        <a
                            class="dropdown-item"
                            href="https://andysaver.xyz/smoker.html"
                        >Smoker</a>

                        <a
                            class="dropdown-item"
                            href="https://andysaver.xyz/process.html"
                        >Planning Process</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a
                        href="https://andysaver.xyz/sources.html"
                        class="nav-link"
                    >Sources & Venues</a>
                </li>

                <li class="nav-item">
                    <a
                        href="https://andysaver.xyz/testimonials.html"
                        class="nav-link"
                    >Testimonials</a>
                </li>

                <li class="nav-item active">
                    <a
                        href="index.php"
                        class="nav-link"
                    >Our Blog
                <span class="sr-only">(current)</span>
                </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a
                        href="https://andysaver.xyz/contact.html"
                        class="nav-link"
                    >Contact Us</a>
                </li>

                <li class="nav-item">
                    <a
                        href="https://www.facebook.com/TheHindquarter/"
                        class="nav-link"
                    >
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        href="https://www.instagram.com/the_hindquarter/"
                        class="nav-link"
                    >
                        <i
                            class="fa fa-instagram"
                            aria-hidden="true"
                        ></i>
                    </a>
                </li>
            </ul>
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