<article class="page" itemscope="itemscope" itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">

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
      <h2 itemprop="headline"><?php the_title(); ?></h2>
      <?php if (get_field('page_subtitle')): ?>
        <p><?php the_field('page_subtitle'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <div class="body body--2-col" itemprop="description">
    <div class="container">
      <div class="body__item">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>
