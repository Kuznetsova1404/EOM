<footer class="footer">
<footer class="site-footer" id="contacts">
  <div class="container footer-grid">
    <div>
      <p>Подпишитесь на рассылку о нас</p>
      <p>mail@site.ru</p>
      <p class="footer-title">Подпишитесь на рассылку о нас</p>
      <a class="footer-chip" href="mailto:info@eomer.ru">info@eomer.ru</a>
    </div>
    <div>
      <p>Модель работы</p><p>Услуги</p><p>Опыт</p><p>Отзывы</p>
      <?php wp_nav_menu(['theme_location' => 'footer_menu', 'container' => false, 'fallback_cb' => false]); ?>
    </div>
    <div>
      <p>Наш почтовый адрес</p><p>info@eom.ru</p><p>+7 (800) 444 34 07</p>
      <p class="footer-title">Наши контакты</p>
      <p><a href="mailto:info@eomer.ru">info@eomer.ru</a></p>
      <p><a href="tel:+78004443407">+7 (800) 444 34 07</a></p>
    </div>
  </div>
</footer>
<div class="eom-modal" id="eom-success-modal" aria-hidden="true">
  <div class="eom-modal__content" role="dialog" aria-modal="true">
    <p>Заявка отправлена</p>
    <button type="button" class="btn" data-close-modal>Закрыть</button>
  </div>
</div>
<div class="eom-lightbox" id="eom-review-lightbox" aria-hidden="true">
  <button class="eom-lightbox__close" type="button" data-close-lightbox>×</button>
  <iframe title="Отзыв PDF" src=""></iframe>
</div>
<?php wp_footer(); ?>
</body>
</html>
