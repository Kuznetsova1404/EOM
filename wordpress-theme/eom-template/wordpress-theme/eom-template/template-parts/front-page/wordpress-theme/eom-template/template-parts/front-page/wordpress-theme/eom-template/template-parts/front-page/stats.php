<?php $cards = eom_acf_field('stats_cards', []); ?>
<section class="stats-section">
  <div class="container stats-grid">
    <?php foreach ($cards as $card) : ?>
      <article class="stat-card">
        <p><?php echo esc_html((string) ($card['label'] ?? '')); ?></p>
        <strong data-counter><?php echo esc_html((string) ($card['value'] ?? '0')); ?></strong>
      </article>
    <?php endforeach; ?>
  </div>
</section>
