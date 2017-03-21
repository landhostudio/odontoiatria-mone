    <footer role="contentinfo" class="footer" itemscope itemtype="http://schema.org/WPFooter">
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
          <p>&copy; <span itemprop="copyrightYear">2016 – <?php echo date('Y'); ?></span> <span itemprop="copyrightHolder"><?php bloginfo('name'); ?></span> – <?php bloginfo('description'); ?>.</p>
        </div>
      </div>
    </footer>

    <?php get_template_part('template-parts/cookies'); ?>

    <?php wp_footer(); ?>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-0000000-00', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
