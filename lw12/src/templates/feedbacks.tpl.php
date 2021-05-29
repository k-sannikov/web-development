<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <script src="js/form/form.js" defer></script>
    <script src="js/form/get_feedback.js" defer></script>
    <script src="js/menu.js" defer></script>
    <title>Обратная связь</title>
  </head>
  <body>
    <header class="header">
      <div class="navbar__header" id="menu">Меню</div>
      <nav class="navbar close">
        <div class="navbar__item">
          <a class="navbar__link" href="/">
            Главная
          </a>
        </div>
      </nav>
    </header>
    <main class="main-feedback">
    <section class="bottom-container">
      <form class="form" method="post" id="feedback-form">
        <label class="form__label form__label_required">Email пользователя</label>
        <input class="form__input" type="email" name="email" id="email" />

        <div class="form__button-box" >
          <button class="button" type="submit">Отправить</button>
        </div>
      </form>
      <div class="feedback-list hide" id="list">
        <p class="feedback-list__item"><b>Имя: </b><span id="item-name"></span></p>
        <p class="feedback-list__item"><b>E-mail: </b><span id="item-email"></span></p>
        <p class="feedback-list__item"><b>Страна: </b><span id="item-country"></span></p>
        <p class="feedback-list__item"><b>Пол: </b><span id="item-gender"></span></p>
        <p class="feedback-list__item"><b>Сообщение: </b><span id="item-message"></span></p>
      </div>
      </section>
    </main>
  </body>
</html>