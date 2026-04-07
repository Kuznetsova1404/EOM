<?php $steps = eom_acf_field('workflow_steps', []); ?>
<section class="section section--workflow">
  <div class="container">
    <h2><?php echo eom_section_title('workflow_title', 'НАША МОДЕЛЬ РАБОТЫ: ПРОЗРАЧНОСТЬ И КОНТРОЛЬ ДЛЯ ВАС'); ?></h2>
    <p class="section-lead"><?php echo esc_html((string) eom_acf_field('workflow_text', 'Как мы обеспечиваем результат и снимаем с вас операционные риски.')); ?></p>
    <div class="workflow-list">
      <?php foreach ($steps as $index => $step) : ?>
        <article class="workflow-item">
          <h3><?php echo esc_html(($index + 1) . '. ' . ($step['step_title'] ?? '')); ?></h3>
          <p><?php echo esc_html((string) ($step['step_text'] ?? '')); ?></p>
          <p class="workflow-benefit"><?php echo esc_html((string) ($step['step_benefit'] ?? '')); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
