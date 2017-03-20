    <footer role="contentinfo" class="footer">
      <div class="container">
        <div class="footer__title">
          <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="hidden"><?php bloginfo('name'); ?></span>
            <img src="<?php bloginfo('template_url'); ?>/dist/img/logo-white.png" alt="">
          </a>
        </div>

        <?php if (get_field('options_legal', options)): ?>
          <div class="footer__legal">
            <?php the_field('options_legal', options); ?>
          </div>
        <?php endif; ?>

        <div class="footer__copy">
          <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>.</p>
        </div>
      </div>
    </footer>

    <?php get_template_part('template-parts/cookies'); ?>

    <?php wp_footer(); ?>
  </body>
</html>
