# EOM

Шаблон первой страницы под WordPress + HTML-превью.

## Что добавлено

- WordPress-тема: `wordpress-theme/eom-template`
- Быстрый просмотр без WordPress: `preview.html`

## Как посмотреть HTML

Откройте `preview.html` в браузере или поднимите локальный сервер:

```bash
python3 -m http.server 8080
```

Затем перейдите на `http://localhost:8080/preview.html`.

## Как подключить в WordPress

1. Скопируйте папку `wordpress-theme/eom-template` в `wp-content/themes/`.
2. В админке WordPress активируйте тему **EOM Landing Template**.
3. Назначьте страницу как главную (если требуется).
