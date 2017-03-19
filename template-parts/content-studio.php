<article class="studio">

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
      <?php if (get_field('studio_subtitle')): ?>
        <p><?php the_field('studio_subtitle'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <?php if (have_rows('studio_body')): ?>
    <div class="body">
      <div class="container">
        <?php while (have_rows('studio_body')): the_row(); ?>
          <div class="body__item">
            <p><?php the_sub_field('studio_body_text'); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (have_rows('studio_gallery')): ?>
    <div class="gallery">
      <div class="container">
        <?php while (have_rows('studio_gallery')): the_row(); ?>
          <div class="gallery__item">
            <?php
              $image = get_sub_field('studio_gallery_image');
              $size = 'large';
              $imageLarge = wp_get_attachment_image_src($image, $size);
            ?>
            <a href="<?php echo $imageLarge[0]; ?>">
              <?php echo wp_get_attachment_image(get_sub_field('studio_gallery_image'), 'thumbnail', false, array()); ?>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</article>
