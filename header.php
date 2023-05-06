<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body <?php body_class(); ?>>
  <header>
    <nav class="top-menu-red">
      <div class="container">
        <div class="row">
          <div class="d-flex justify-content-between">
            <p><?php echo  date('l jS \of F Y h:i:s A'); ?></p>
            <?php wp_nav_menu(array('theme_location' => 'wp_defaulttheme_my_menu_red', 'depth' => 2)); ?>
          </div>
        </div>
      </div>
    </nav>
    <nav class="top-menu-white">
      <div class="container">
        <div class="d-flex justify-content-between">
          <div class="brand">
            <img class="img-fluid" width="220" style="margin-left: -12px;"
              src="<?php echo bloginfo('template_url'); ?>/assets/images/cmts_logo.png" alt="">
          </div>
          <div class="row">
            <?php wp_nav_menu(array('theme_location' => 'wp_defaulttheme_my_menu_white', 'depth' => 2)); ?>
          </div>
        </div>
      </div>
    </nav>
  </header>
