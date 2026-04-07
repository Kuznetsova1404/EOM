<?php $logos = eom_acf_field('trust_logos', []); ?>
<section class="section">
  <div class="container">
    <h2><?php echo eom_section_title('trust_title', 'НАМ ДОВЕРЯЮТ'); ?></h2>
    <p class="section-lead"><?php echo esc_html((string) eom_acf_field('trust_text', 'Из года в год успешно работаем с крупнейшими госзаказчиками РФ...')); ?></p>
    <div class="trust-logos">
      <?php foreach ($logos as $logo) : ?>
        <img src="<?php echo esc_url((string) ($logo['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) ($logo['alt'] ?? 'Логотип партнера')); ?>">
      <?php endforeach; ?>
    </div>
  </div>
</section>
