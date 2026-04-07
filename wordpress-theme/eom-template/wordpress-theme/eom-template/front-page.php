<?php get_header(); ?>
<main>
  <section class="container">
    <div class="topbar">
      <div class="logo">Единый оператор мероприятий</div>
      <div class="top-links"><span>Партнерам</span><span>Личный кабинет</span></div>
    </div>
    <div class="hero">
      <div>
        <h1>ВАШЕ СОБЫТИЕ —<br>НАША ОТВЕТСТВЕННОСТЬ</h1>
        <p>Генеральный подрядчик для организации конгрессов, выставок, деловых событий по 44‑223 ФЗ. Полная ответственность, безупречная реализация.</p>
      </div>
    </div>
    <div class="stats">
      <div class="stat">Лет на рынке госзаказа<strong>10+</strong></div>
      <div class="stat">Закрытых контрактов<strong>650+</strong></div>
      <div class="stat">На общую сумму<strong>4,0+ млрд</strong></div>
      <div class="stat">Госконтрактов в 2025 году<strong>70+</strong></div>
    </div>
  </section>

  <section class="section container">
    <h2>НАШ ОПЫТ — ВАША УВЕРЕННОСТЬ</h2>
    <div class="cards">
      <article class="card" style="background-image:linear-gradient(rgba(5,20,50,.45),rgba(5,20,50,.45)),url('https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=900&q=80')"><span>Юридическая чистота</span></article>
      <article class="card" style="background-image:linear-gradient(rgba(5,20,50,.45),rgba(5,20,50,.45)),url('https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=900&q=80')"><span>Единая точка координации</span></article>
      <article class="card" style="background-image:linear-gradient(rgba(5,20,50,.45),rgba(5,20,50,.45)),url('https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=900&q=80')"><span>Контроль качества в срок</span></article>
    </div>
  </section>

  <section class="section container">
    <h2>ОПЫТ</h2>
    <div class="experience-years"><b>2026</b><b>2025</b><b>2024</b><b>2023</b><b>2022</b><b>2021</b><b>2020</b><b>2019</b><b>2018</b><b>2017</b></div>
    <div class="cards">
      <article class="card" style="background-image:linear-gradient(rgba(4,15,35,.52),rgba(4,15,35,.52)),url('https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=900&q=80')"><span>Форум молодежного инициативного капитала</span></article>
      <article class="card" style="background-image:linear-gradient(rgba(4,15,35,.52),rgba(4,15,35,.52)),url('https://images.unsplash.com/photo-1540317580384-e5d43867caa6?auto=format&fit=crop&w=900&q=80')"><span>Выставка "Россия"</span></article>
      <article class="card" style="background-image:linear-gradient(rgba(4,15,35,.52),rgba(4,15,35,.52)),url('https://images.unsplash.com/photo-1560439514-4e9645039924?auto=format&fit=crop&w=900&q=80')"><span>Универсиада ГТО</span></article>
    </div>
  </section>

  <section class="section container">
    <h2>С КАКИМИ ЗАДАЧАМИ МЫ РАБОТАЕМ</h2>
    <div class="cards">
      <article class="card" style="background-image:linear-gradient(rgba(4,15,35,.52),rgba(4,15,35,.52)),url('https://images.unsplash.com/photo-1470229538611-16ba8c7ffbd7?auto=format&fit=crop&w=900&q=80')"><span>Отраслевые форумы и конгрессы</span></article>
      <article class="card" style="background-image:linear-gradient(rgba(4,15,35,.52),rgba(4,15,35,.52)),url('https://images.unsplash.com/photo-1478860409698-8707f313ee8b?auto=format&fit=crop&w=900&q=80')"><span>Государственные выставки</span></article>
      <article class="card" style="background-image:linear-gradient(rgba(4,15,35,.52),rgba(4,15,35,.52)),url('https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=900&q=80')"><span>Деловые саммиты</span></article>
    </div>
    <div style="height:16px"></div>
    <div class="banner">Любая сложность и масштаб. Работаем по всей России, странам ЕАЭС, MENA</div>
  </section>

  <section class="section container">
    <h2>НАМ ДОВЕРЯЮТ</h2>
    <div class="logos">
      <?php for ($i = 1; $i <= 18; $i++) : ?>
        <div class="logo-box">Логотип <?php echo esc_html((string) $i); ?></div>
      <?php endfor; ?>
    </div>
  </section>

  <section class="section container">
    <div class="feedback">
      <h2 style="margin-top:0">ГОТОВЫ ОБСУДИТЬ ВАШЕ СОБЫТИЕ?</h2>
      <p>Оставьте заявку, и мы предложим решение в течение 24 часов для государственной или деловой повестки.</p>
      <form class="form-row">
        <input type="text" placeholder="Ваше имя">
        <input type="text" placeholder="Номер телефона">
        <input type="email" placeholder="Email">
        <button type="button">Обсудить проект</button>
      </form>
    </div>
  </section>
<main class="site-main">
  <?php
  get_template_part('template-parts/front-page/header');
  get_template_part('template-parts/front-page/hero');
  get_template_part('template-parts/front-page/stats');
  get_template_part('template-parts/front-page/confidence');
  get_template_part('template-parts/front-page/workflow');
  get_template_part('template-parts/front-page/projects');
  get_template_part('template-parts/front-page/tasks');
  get_template_part('template-parts/front-page/banner');
  get_template_part('template-parts/front-page/advantages');
  get_template_part('template-parts/front-page/trust');
  get_template_part('template-parts/front-page/reviews');
  get_template_part('template-parts/front-page/contact-form');
  get_template_part('template-parts/front-page/contractor-cta');
  ?>
</main>
<?php get_footer(); ?>
