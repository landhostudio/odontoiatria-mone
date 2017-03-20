<?php if (get_field('options_cookies_text', option) || get_field('options_cookies_link', option)): ?>
  <div class="cookies">
    <div class="body">
      <div class="container">
  
        <div class="body__item">
          <p class="small"><?php the_field('options_cookies_text', option); ?></p>
        </div>
        
        <div class="body__item">
          <a href="<?php the_field('options_cookies_link', option); ?>" class="btn btn--alternative"><?php esc_html_e('Approfondisci', 'odontoiatria-mone'); ?></a>
          <button type="button" class="btn btn--alternative-active"><?php esc_html_e('Accetta', 'odontoiatria-mone'); ?></button>
        </div>

      </div>
    </div>
  </div>
<?php endif; ?>
