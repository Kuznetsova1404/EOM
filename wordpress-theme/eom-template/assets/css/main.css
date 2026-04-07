document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('[data-counter]');
  const animateCounter = (el) => {
    const source = el.textContent.trim();
    const num = parseFloat(source.replace(',', '.'));
    if (Number.isNaN(num)) return;
    const hasPlus = source.includes('+');
    const hasMld = source.includes('млрд');
    const duration = 1200;
    const start = performance.now();

    const tick = (time) => {
      const progress = Math.min((time - start) / duration, 1);
      const current = (num * progress).toFixed(num % 1 ? 1 : 0);
      el.textContent = `${current.replace('.', ',')}${hasMld ? ' млрд' : ''}${hasPlus ? '+' : ''}`;
      if (progress < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });
  counters.forEach((el) => observer.observe(el));

  const filterButtons = document.querySelectorAll('[data-year]');
  const projectCards = document.querySelectorAll('#projects-grid .card');
  filterButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
      filterButtons.forEach((item) => item.classList.remove('is-active'));
      btn.classList.add('is-active');
      const year = btn.dataset.year;
      projectCards.forEach((card) => {
        card.style.display = card.dataset.years.split(',').includes(year) ? '' : 'none';
      });
    });
  });
  if (filterButtons[0]) filterButtons[0].click();

  const lightbox = document.getElementById('eom-review-lightbox');
  const lightboxIframe = lightbox?.querySelector('iframe');
  document.querySelectorAll('.review-item[data-pdf]').forEach((item) => {
    item.addEventListener('click', () => {
      if (!lightbox || !lightboxIframe) return;
      lightbox.classList.add('is-open');
      lightbox.setAttribute('aria-hidden', 'false');
      lightboxIframe.src = item.dataset.pdf;
    });
  });
  document.querySelector('[data-close-lightbox]')?.addEventListener('click', () => {
    lightbox?.classList.remove('is-open');
    lightbox?.setAttribute('aria-hidden', 'true');
    if (lightboxIframe) lightboxIframe.src = '';
  });

  const requestForm = document.querySelector('[data-request-form]');
  const successModal = document.getElementById('eom-success-modal');
  requestForm?.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(requestForm);
    formData.append('action', 'eom_submit_form');
    formData.append('nonce', EOMTheme.nonce);

    const response = await fetch(EOMTheme.ajaxUrl, { method: 'POST', body: formData });
    const payload = await response.json();

    if (response.ok && payload.success) {
      requestForm.reset();
      successModal?.classList.add('is-open');
      successModal?.setAttribute('aria-hidden', 'false');
      return;
    }

    alert(payload?.data?.message || EOMTheme.error);
  });

  document.querySelector('[data-close-modal]')?.addEventListener('click', () => {
    successModal?.classList.remove('is-open');
    successModal?.setAttribute('aria-hidden', 'true');
  });

  document.querySelectorAll('.hero__play').forEach((btn) => {
    btn.addEventListener('click', () => {
      const url = btn.dataset.videoUrl;
      if (url) window.open(url, '_blank', 'noopener,noreferrer');
    });
  });
});
