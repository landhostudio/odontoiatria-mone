<article class="contact">

  <?php if (have_rows('contact_map')): ?>
    <div class="map">
      <div class="container">
        <div class="map__object">
          <div class="map__canvas">
            <?php
              while (have_rows('contact_map')): the_row();
              $location = get_sub_field('contact_map_location');
            ?>
              <div class="map__marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  <?php elseif (has_post_thumbnail()): ?>
    <div class="hero">
      <div class="container">
        <?php the_post_thumbnail('large'); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="heading">
    <div class="container">
      <h2><?php the_title(); ?></h2>
      <?php if (get_field('contact_subtitle')): ?>
        <p><?php the_field('contact_subtitle'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <?php if (have_rows('contact_summary')): ?>
    <div class="body">
      <div class="container">
        <?php while (have_rows('contact_summary')): the_row(); ?>
          <div class="body__item">
            <h3><?php the_sub_field('contact_summary_title'); ?></h3>
            <?php the_sub_field('contact_summary_text'); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</article>
