<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="container">
        <nav>
            <!-- Config Logo/Links / -->
            <?php wp_nav_menu(array('theme_location' => 'wp_defaulttheme_my_menu', 'depth' => 2)); ?>
            <!-- Config Logo/Links / -->
        </nav>