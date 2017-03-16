<article class="locations">

  <?php if (has_post_thumbnail()): ?>
    <div class="hero">
      <div class="container">
        <?php the_post_thumbnail('large'); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (get_field('locations_headings_title') && get_field('locations_headings_text')): ?>
    <div class="heading">
      <div class="container">
        <h2><?php the_field('locations_headings_title'); ?></h2>
        <p><?php the_field('locations_headings_text'); ?></p>
      </div>
    </div>
  <?php endif; ?>

  <?php if (have_rows('locations_items')): ?>
    <div class="locations_items">
      <div class="container">
        <?php while (have_rows('locations_items')): the_row(); ?>
          <div class="locations__items__item">
            <h3><?php the_sub_field('locations_items_title'); ?></h3>
            <p><?php the_sub_field('locations_items_text'); ?></p>

            <?php if (have_rows('locations_items_gallery')): ?>
              <div class="gallery">
                <?php while (have_rows('locations_items_gallery')): the_row(); ?>
                  <?php
                    $image = get_sub_field('locations_items_gallery_image');
                    $size = 'large';
                    $imageLarge = wp_get_attachment_image_src($image, $size);
                  ?>
                  <a href="<?php echo $imageLarge[0]; ?>">
                    <?php echo wp_get_attachment_image(get_sub_field('locations_items_gallery_image'), 'thumbnail', false, array()); ?>
                  </a>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</article>
