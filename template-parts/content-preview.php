<article class="body__item body__item--article body__item--article-preview" itemscope itemtype="http://schema.org/CreativeWork">
  <a rel="bookmark" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    <p class="date"><?php the_date(); ?></p>
    <h3 itemprop="headline"><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
  </a>
</article>
