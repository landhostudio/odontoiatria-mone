<article class="body__item body__item--article">
  <a rel="bookmark" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
  </a>
</article>
