<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Evention</title>

    <?php wp_head(); ?>
  </head>
  <body>
        
    <!-- Adds the navigation partial -->
    <!-- navigation.nunjucks -->

    <nav class="navbar scroll-nav fixed-top navbar-expand-xl navbar-light">
    <div class="container-fluid navbar-info">
        <a class="navbar-brand" href="index.html">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="default-logo" />
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-scrolled.png" class="logo-scrolled" />
        </a>
        <div class="cta-header">
            <a href="#enquire">
                <i class="far fa-envelope-open"></i>
                <span>Enquire Now </span>
            </a>
            <a href="tel:+65624180909">
                <i class="fas fa-phone-alt"></i>
            </a>
        </div>
    </div>
    </nav>