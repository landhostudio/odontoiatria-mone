<article class="single">

  <?php if (has_post_thumbnail()): ?>
    <div class="hero">
      <div class="container">
        <?php the_post_thumbnail('large'); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="heading">
    <div class="container">
      <h2><?php the_title(); ?></h2>
      <?php if (get_field('post_subtitle')): ?>
        <p><?php the_field('post_subtitle'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <div class="body">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>
</article>
