<header class="site-header">
  <div class="container site-header__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" aria-label="На главную">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <span class="site-logo__text">Единый оператор мероприятий</span>
      <?php endif; ?>
    </a>
    <a href="#contractors" class="btn btn--outline"><?php echo esc_html((string) eom_acf_field('partner_button_text', 'Партнерам')); ?></a>
  </div>
</header>
