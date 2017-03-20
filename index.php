<?php get_header(); ?>

<?php if (have_posts()): ?>

  <section class="index">

    <?php if (has_post_thumbnail(get_option('page_for_posts'))): ?>
      <div class="hero">
        <div class="hero__container">
          <div class="hero__image">
            <?php
              $page_for_posts = get_option('page_for_posts');
              echo get_the_post_thumbnail($page_for_posts, 'large');
            ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    
    <div class="heading">
      <div class="container">
        <?php if (is_category()): ?>
          <h2><?php single_cat_title(); ?></h2>
        <?php elseif (is_tag()): ?>
          <h2><?php single_tag_title(); ?></h2>
        <?php elseif (is_search()): ?>
          <h2><?php printf( __( 'Risultati di cerca per: %s', 'odontoiatria-mone' ), get_search_query() ); ?></h2>
        <?php else: ?>
          <h2><?php esc_html_e('News', 'odontoiatria-mone'); ?></h2>
          <?php if (get_field('news_subtitle', get_option('page_for_posts'))): ?>
            <p><?php the_field('news_subtitle', get_option('page_for_posts')); ?></p>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  
    <div class="body body--2-col">
      <div class="container">
        <?php while (have_posts()): the_post(); ?>
          <?php get_template_part('template-parts/content', 'preview'); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <?php
    the_posts_navigation( array(
      'screen_reader_text' => __('Navigazione news', 'odontoiatria-mone'),
      'prev_text' => __('Meno recenti', 'odontoiatria-mone'),
      'next_text' => __('Più recenti', 'odontoiatria-mone')
    ));
  ?>

<?php else: ?>
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

<?php get_footer(); ?>
