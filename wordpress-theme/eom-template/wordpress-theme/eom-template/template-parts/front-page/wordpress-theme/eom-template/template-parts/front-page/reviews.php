<?php $items = eom_acf_field('reviews_items', []); ?>
<section class="section">
  <div class="container">
    <h2><?php echo eom_section_title('reviews_title', 'Отзывы и благодарственные письма'); ?></h2>
    <div class="reviews-grid">
      <?php foreach ($items as $item) :
        $preview = $item['preview']['url'] ?? '';
        $pdf = $item['pdf']['url'] ?? '';
      ?>
        <button type="button" class="review-item" data-pdf="<?php echo esc_url($pdf); ?>">
          <?php if ($preview) : ?><img src="<?php echo esc_url($preview); ?>" alt="Отзыв"><?php endif; ?>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</section>
