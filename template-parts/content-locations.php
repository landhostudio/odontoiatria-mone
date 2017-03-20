<article class="locations">

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
      <h2><?php the_title(); ?></h2>
      <?php if (get_field('locations_subtitle')): ?>
        <p><?php the_field('locations_subtitle'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <?php if (have_rows('locations_items')): ?>
    <div class="body">
      <div class="container">
        <?php while (have_rows('locations_items')): the_row(); ?>
          <div class="body__item">
            <h3><?php the_sub_field('locations_items_title'); ?></h3>
            <p><?php the_sub_field('locations_items_text'); ?></p>

            <?php if (have_rows('locations_items_gallery')): ?>
              <div class="gallery gallery--inside">
                <?php while (have_rows('locations_items_gallery')): the_row(); ?>
                  <div class="gallery__item">
                    <?php
                      $image = get_sub_field('locations_items_gallery_image');
                      $size = 'large';
                      $imageLarge = wp_get_attachment_image_src($image, $size);
                    ?>
                    <a href="<?php echo $imageLarge[0]; ?>">
                      <?php echo wp_get_attachment_image(get_sub_field('locations_items_gallery_image'), 'thumbnail', false, array()); ?>
                    </a>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</article>
