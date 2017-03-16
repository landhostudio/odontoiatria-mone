<article class="home">

  <?php if (have_rows('home_gallery')): ?>
    <div class="gallery">
      <div class="container">
        <?php while (have_rows('home_gallery')): the_row(); ?>
          <div class="gallery__item">
            <?php echo wp_get_attachment_image(get_sub_field('home_gallery_image'), 'large', false, array()); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (get_field('home_headings_title') && get_field('home_headings_text')): ?>
    <div class="heading">
      <div class="container">
        <h2><?php the_field('home_headings_title'); ?></h2>
        <p><?php the_field('home_headings_text'); ?></p>
      </div>
    </div>
  <?php endif; ?>

  <?php if (have_rows('home_summary')): ?>
    <div class="summary">
      <div class="container">
        <?php while (have_rows('home_summary')): the_row(); ?>
          <div class="summary__item">
            <h3><?php the_sub_field('home_summary_title'); ?></h3>
            <p><?php the_sub_field('home_summary_text'); ?></p>
            <a href="<?php the_sub_field('home_summary_link'); ?>">Approfondisci</a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</article>
