<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="pinterest" content="nopin">
    <meta name="theme-color" content="#fbfbfb">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/manifest.json">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/safari-pinned-tab.svg" color="#7cc3af">
    <?php wp_head(); ?>
  </head>
  <body itemscope itemtype="http://schema.org/WebPage">

    <header role="banner" class="header" itemscope itemtype="http://schema.org/WPHeader">
      <div class="container">

        <h1 class="header__title" itemprop="headline">
          <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="hidden"><?php bloginfo('name'); ?></span>
            <img src="<?php bloginfo('template_url'); ?>/dist/img/logo-color.png" alt="">
          </a>
        </h1>

        <?php if (has_nav_menu('menu')): ?>
          <div class="header__toggle">
            <button type="button" class="toggle" aria-label="<?php esc_html_e('Menu', 'odontoiatria-mone'); ?>">
              <span class="hidden"><?php esc_html_e('Menu', 'odontoiatria-mone'); ?></span>
              <span class="toggle__bar" aria-hidden="true"></span>
              <span class="toggle__bar" aria-hidden="true"></span>
              <span class="toggle__bar" aria-hidden="true"></span>
            </button>
          </div>

          <nav role="navigation" class="header__navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <h2 class="hidden"><?php esc_html_e('Navigazione', 'odontoiatria-mone'); ?></h2>

            <ul class="no-list">
              <?php wp_nav_menu(array(
                'theme_location' => 'menu',
                'items_wrap' => '%3$s'
              )); ?>
            </ul>
          </nav>
        <?php endif; ?>
      </div>
    </header>
