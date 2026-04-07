<?php $cards = eom_acf_field('tasks_cards', []); ?>
<section class="section">
  <div class="container">
    <h2><?php echo eom_section_title('tasks_title', 'С КАКИМИ ЗАДАЧАМИ МЫ РАБОТАЕМ'); ?></h2>
    <p class="section-lead"><?php echo esc_html((string) eom_acf_field('tasks_text', 'Мы специализируемся на комплексной организации.')); ?></p>
    <div class="cards cards--3">
      <?php foreach ($cards as $card) : $image = $card['image']['url'] ?? ''; ?>
        <article class="card" style="<?php echo $image ? 'background-image:url(' . esc_url($image) . ');' : ''; ?>">
          <div class="card__overlay"></div>
          <div class="card__content">
            <h3><?php echo esc_html((string) ($card['title'] ?? '')); ?></h3>
            <?php if (!empty($card['text'])) : ?><p><?php echo esc_html((string) $card['text']); ?></p><?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
