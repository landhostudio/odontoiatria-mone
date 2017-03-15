<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="pinterest" content="nopin">
    <?php wp_head(); ?>
  </head>
  <body>

    <header role="banner" class="header">
      <div class="container">

        <div class="header__logo">
          <h1 class="header__logo__title">
            <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></span></a>
          </h1>
        </div>

        <?php if (has_nav_menu('menu')): ?>
          <div class="header__menu">
            <button type="button" class="button"><?php esc_html_e('Menu', 'odontoiatria-mone'); ?></button>
          </div>

          <nav role="navigation" class="header__navigation">
            <h2><?php esc_html_e('Navigazione', 'odontoiatria-mone'); ?></h2>

            <?php wp_nav_menu(array(
              'theme_location' => 'menu',
              'items_wrap' => '%3$s'
            )); ?>
          </nav>
        <?php endif; ?>
      </div>
    </header>
