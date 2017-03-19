<article class="services">

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
      <?php if (get_field('services_subtitle')): ?>
        <p><?php the_field('services_subtitle'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <?php if (have_rows('services_items')): ?>
    <div class="body">
      <div class="container">
        <?php while (have_rows('services_items')): the_row(); ?>
          <div class="body__item">
            <h3><?php the_sub_field('services_item_title'); ?></h3>
            <?php the_sub_field('services_item_text'); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</article>
