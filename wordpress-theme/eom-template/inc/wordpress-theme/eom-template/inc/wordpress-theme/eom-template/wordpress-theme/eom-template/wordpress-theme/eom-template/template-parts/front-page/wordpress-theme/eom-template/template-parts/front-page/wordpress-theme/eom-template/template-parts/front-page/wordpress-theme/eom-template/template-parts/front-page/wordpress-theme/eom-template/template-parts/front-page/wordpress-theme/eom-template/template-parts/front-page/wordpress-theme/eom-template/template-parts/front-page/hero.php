<?php
$preview = eom_acf_field('hero_video_preview');
$video   = (string) eom_acf_field('hero_video_url');
$bg      = is_array($preview) ? (string) ($preview['url'] ?? '') : '';
?>
<section class="hero-section">
  <div class="container">
    <div class="hero" style="<?php echo $bg ? 'background-image:url(' . esc_url($bg) . ');' : ''; ?>">
      <div class="hero__overlay"></div>
      <div class="hero__content">
        <h1><?php echo eom_section_title('hero_title', 'ВАШЕ СОБЫТИЕ – НАША ОТВЕТСТВЕННОСТЬ'); ?></h1>
        <p><?php echo esc_html((string) eom_acf_field('hero_subtitle', 'Генеральный подрядчик для организации конгрессов, выставок и деловых событий по 44- и 223-ФЗ. Полная ответственность. Безупречная реализация.')); ?></p>
      </div>
      <?php if ($video) : ?>
        <button class="hero__play" type="button" data-video-url="<?php echo esc_url($video); ?>" aria-label="Смотреть видео">▶</button>
      <?php endif; ?>
    </div>
  </div>
</section>
