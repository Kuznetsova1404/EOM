<section class="section">
  <div class="container">
    <div class="contact-box">
      <h2><?php echo eom_section_title('form_title', 'Готовы обсудить ваше событие?'); ?></h2>
      <p class="section-lead"><?php echo esc_html((string) eom_acf_field('form_text', 'Оставьте заявку, и наш руководитель проектов свяжется с Вами в течение 2 часов.')); ?></p>
      <form class="request-form" data-request-form>
        <input type="text" name="name" placeholder="Ваше имя" required>
        <input type="text" name="contact" placeholder="Номер телефона / Email" required>
        <button class="btn" type="submit">Обсудить проект</button>
      </form>
    </div>
  </div>
</section>
