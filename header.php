<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php wp_head(); ?>

</head>

<body <?php body_class(  ) ?>>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
          <?php
          if (has_custom_logo()) {
              echo '<a href="' . site_url() . '"><img src="' . the_custom_logo() . '" alt="" class="img-fluid"></a>';
          } else {
              echo '<h1 class="text-light"><a href="' . site_url() . '">Flattern</a></h1>';
          }
          ?>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
            'container' => ''
        )) ?>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->