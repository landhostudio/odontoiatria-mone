<article class="single" itemscope itemtype="http://schema.org/CreativeWork">

  <?php if (has_post_thumbnail()): ?>
    <div class="hero">
      <div class="hero__container">
        <div class="hero__image">
          <?php the_post_thumbnail('large'); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="heading">
    <div class="container">
      <h2 itemprop="headline"><?php the_title(); ?></h2>
      <?php if (get_field('post_subtitle')): ?>
        <p><?php the_field('post_subtitle'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <div class="body body--2-col" itemprop="description">
    <div class="container">
      <div class="body__item">
        <?php the_content(); ?>
        <br>
        <a href="../" rel="bookmark" class="btn"><?php esc_html_e('Ritorna alle News', 'odontoiatria-mone'); ?></a>
      </div>
    </div>
  </div>
</article>
