<article class="professionals">

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
      <?php if (get_field('professionals_subtitle')): ?>
        <p><?php the_field('professionals_subtitle'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <?php if (have_rows('professionals_items')): ?>
    <div class="body body--2-col">
      <div class="container">
        <?php while (have_rows('professionals_items')): the_row(); ?>
          <div class="body__item">
            <h3><?php the_sub_field('professionals_item_title'); ?></h3>
            <?php the_sub_field('professionals_item_text'); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</article>
