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
    <script src="js/carousel.js" defer></script>
    <script src="js/menu.js" defer></script>
    <script src="js/form/form.js" defer></script>
    <script src="js/form/send_feedback.js" defer></script>
    <title>Jane Doe</title>
  </head>
  <body class="body">
    <header class="header">
      <div class="navbar__header" id="menu">Меню</div>
      <nav class="navbar close">
        <div class="navbar__item">
          <a class="navbar__link about-me-icon" href="#about-me">
            Обо мне
          </a>
        </div>
        <div class="navbar__item">
          <a class="navbar__link hobby-icon" href="#hobby">
            Мое хобби
          </a>
        </div>
        <div class="navbar__item">
          <a class="navbar__link video-icon" href="#favorite-movies">
            Любимые фильмы
          </a>
        </div>
        <div class="navbar__item">
          <a class="navbar__link feedback-icon" href="feedbacks.php">
            Обратная связь
          </a>
        </div>
      </nav>
    </header>
    <main class="main">
      <section class="top-container" id="about-me">
        <div class="grid">
          <div class="grid__cell-avatar">
            <img class="grid__avatar-img" src="images/woman.jpg" alt="Женщина" />
          </div>
          <div class="grid__cell-quote">
            <p class="grid__quote-text">
              Мы берем на себя много, потому что
              мало чего боимся
            </p>
            <p class="grid__quote-text_author">
              &#8212; Том Демарко. Deadline
            </p>
          </div>
          <div class="grid__cell-title">
            <h1 class="grid__title_h1">Jane Doe</h1>
          </div>
          <div class="grid__cell-lists">
            <h3 class="grid__title-list">Любимые писатели:</h3>
            <ul class="grid__list_marked">
              <li class="grid__list-item grid__list-item_marked">Айзек Азимов</li>
              <li class="grid__list-item grid__list-item_marked">Говард Лавкрафт</li>
              <li class="grid__list-item grid__list-item_marked">Дмитрий Глуховский</li>
              <li class="grid__list-item grid__list-item_marked">Чак Паланик</li>
            </ul>
            <h3 class="grid__title-list">Любимые фильмы:</h3>
            <ol class="grid__list_numbered">
              <li class="grid__list-item">Шоу Трумана</li>
              <li class="grid__list-item">Малхолланд Драйв</li>
              <li class="grid__list-item">Семь жизней</li>
              <li class="grid__list-item">Гравитация</li>
            </ol>
          </div>
          <div class="grid__cell-article">
            <p class="grid__article_text">
              В 1930-е годы прошлого века физик Джордж Гамоу из
              университета штата Колорадо начал публиковать
              мини-сериал рассказов о неком мистере Томпкинсе,
              банковском клерке средних лет. Мистер Томпкинс, как
              явствовало из этих историй, интересовался современной
              наукой.
            </p>
            <h2 class="grid__title_h2 title-medium" id="hobby">Мое хобби</h2>
            <p class="grid__article_text">
              Он регулярно посещал вечерние лекции местного профессора
              и, разумеется, всегда засыпал на самом интересном месте.
              А когда просыпался, то обнаруживал себя в каком-нибудь
              параллельном мире, где один из основных законов физики
              действовал не так, как в его мире.
            </p>
          </div>
          <div class="grid__cell-link">
            <a href="#write-me" class="grid__link">
              <span class="grid__link-text">
                <span class="grid__link-text grid__link-text_underline">Напиши мне</span> &rarr;
              </span>
            </a>
          </div>
        </div>
      </section>
      <section class="middle-container" id="favorite-movies">
        <h2 class="title-cards title-medium">Любимые фильмы</h2>

        <div class="slider">
          <div class="btn__box btn__box_left">
            <button class="slider__button  slider__button_left" id="left"></button>
          </div>
          <div class="slider__main">
            <div class="cards">

              <div class="card">
                <img class="card__image" src="images/shawshank_redemption.jpg" alt="Кадр из фильма Побег из Шоушенка">
                <h4 class="card__title">Побег из Шоушенка</h4>
                <p class="card__text">
                  Успешный банкир Энди Дюфрейн обвинен в убийстве собственной жены и ее любовника.
                  Оказавшись в тюрьме под названием Шоушенк, он сталкивается с жестокостью и беззаконием,
                  царящими по обе стороны решетки. Каждый, кто попадает в эти стены, становится их рабом до конца жизни.
                  Но Энди, вооруженный живым умом и доброй душой, отказывается мириться с приговором судьбы и начинает
                  разрабатывать невероятно дерзкий план своего освобождения.
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/anesthesia.jpg" alt="Кадр из фильма Наркоз">
                <h4 class="card__title">Наркоз</h4>
                <p class="card__text">
                  Клай Бересфорд вынужден лечь под нож. Однако в процессе операции на сердце он неожиданно приходит в себя.
                  Находясь в парализованном состоянии, будучи не в силах пошевелить ни рукой, ни ногой, он, тем не менее,
                  чувствует каждое касание скальпеля к своей плоти…
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/astral.jpg" alt="Кадр из фильма Астрал">
                <h4 class="card__title">Астрал</h4>
                <p class="card__text">
                  Джош и Рене переезжают со своими детьми в новый дом, но не успевают толком распаковать вещи, как начинаются
                  странные события. Необъяснимо перемещаются предметы, в детской звучат странные звуки… Но в настоящий ужас
                  приходят родители,  когда их десятилетний сын Далтон впадает в кому. Все усилия врачей в больнице помочь
                  мальчику безуспешны.
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/gravity.jpg" alt="Кадр из фильма Гравитация">
                <h4 class="card__title">Гравитация</h4>
                <p class="card__text">
                  Доктор Райан Стоун, блестящий специалист в области медицинского инжиниринга, отправляется в свою первую
                  космическую миссию под командованием ветерана астронавтики Мэтта Ковальски, для которого этот полет — последний
                  перед отставкой. Но во время, казалось бы, рутинной работы за бортом случается катастрофа. Шаттл уничтожен,
                  а Стоун и Ковальски остаются совершенно одни; они находятся в связке друг с другом, и все, что они могут, — 
                  это двигаться по орбите в абсолютно черном пространстве без всякой связи с Землей и какой-либо надежды на спасение.
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/truman_show.jpg" alt="Кадр из фильма Гравитация">
                <h4 class="card__title">Шоу Трумана</h4>
                <p class="card__text">
                Представьте себе, что вы вдруг начинаете понимать, что все вокруг вас — декорации, а люди — актеры,
                притворяющиеся теми, кем они вам кажутся. Весь ваш мир оказывается большим телесериалом, где вы исполняете
                главную роль, даже не подозревая об этом. Вся ваша жизнь — результат работы автора телешоу, которое вот
                уже тридцать лет смотрит вся планета, начиная с момента вашего рождения.
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/mulholland_drive.jpg" alt="Кадр из фильма Гравитация">
                <h4 class="card__title">Малхолланд Драйв</h4>
                <p class="card__text">
                  Загадочная девушка, после автомобильной аварии страдающая потерей памяти, выбирает себе имя Рита с рекламного
                  плаката к фильму с Ритой Хейворт и пытается начать новую жизнь в Голливуде. Но тайны прошлого неотступно
                  преследуют ее.
                  Кто были те двое мужчин, что сидели в одной машине с ней и погибли в аварии? Почему полиция подозревает,
                  что она была ими похищена? И случайно ли в ее жизни появляется новая подруга, начинающая актриса Бетти?
                  с другими узниками они планируют дерзкий и опасный побег. Но придумать план – это только первый шаг.
                  Шаг второй – реализация плана.
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/seven_lives.jpg" alt="Кадр из фильма Гравитация">
                <h4 class="card__title">Семь жизней</h4>
                <p class="card__text">
                  Инженер Бен отправляется в необычное путешествие. В ходе своей поездки он встречает семерых незнакомцев, включая
                  смертельно больную Эмили, которая называет себя девушкой с подбитыми крыльями. Бен неожиданно влюбляется в нее,
                  что сильно усложняет его первоначальный план. Сможет ли он разгадать послание судьбы?
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/1+1.jpg" alt="Кадр из фильма 1+1">
                <h4 class="card__title">1+1</h4>
                <p class="card__text">
                  Пострадав в результате несчастного случая, богатый аристократ Филипп нанимает в помощники человека, который
                  менее всего подходит для этой работы, – молодого жителя предместья Дрисса, только что освободившегося из
                  тюрьмы. Несмотря на то, что Филипп прикован к инвалидному креслу, Дриссу удается привнести в размеренную
                  жизнь аристократа дух приключений.
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/interstellar.jpg" alt="Кадр из фильма интерстеллар">
                <h4 class="card__title">Интерстеллар</h4>
                <p class="card__text">
                  Когда засуха, пыльные бури и вымирание растений приводят человечество к продовольственному кризису,
                  коллектив исследователей и учёных отправляется сквозь червоточину (которая предположительно соединяет
                  области пространства-времени через большое расстояние) в путешествие, чтобы превзойти прежние
                  ограничения для космических путешествий человека и найти планету с подходящими для человечества условиями.
                </p>
              </div>

              <div class="card">
                <img class="card__image" src="images/godfather.jpg" alt="Кадр из крестный отец">
                <h4 class="card__title">Крестный отец</h4>
                <p class="card__text">
                  Криминальная сага, повествующая о нью-йоркской сицилийской мафиозной семье Корлеоне. Фильм охватывает
                  период 1945-1955 годов. Глава семьи, Дон Вито Корлеоне, выдаёт замуж свою дочь. В это время со Второй
                  мировой войны возвращается его любимый сын Майкл. Майкл, герой войны, гордость семьи, не выражает
                  желания заняться жестоким семейным бизнесом. Дон Корлеоне ведёт дела по старым правилам, но наступают
                  иные времена, и появляются люди, желающие изменить сложившиеся порядки. На Дона Корлеоне совершается
                  покушение.
                </p>
              </div>

            </div>
          </div>
          <div class="btn__box btn__box_right">
            <button class="slider__button slider__button_right" id="right"></button>
          </div>
        </div>
        
        <button class="button cards-button ">Все фильмы</button>
      </section>
      <section class="bottom-container">
        <div class="form-title" id="write-me">
          <hr class="form-title__line" />
          <h2 class="form-title__text">Напиши мне</h2>
          <hr class="form-title__line" />
        </div>

        <form class="form" id="contact-form">

          <label class="form__label form__label_required">Ваше имя</label>
          <input class="form__input" type="text" name="name" id="name"/>

          <label class="form__label form__label_required">Ваш email</label>
          <input class="form__input" type="email" name="email" id="email"/>

          <label class="form__label">Откуда вы?</label>
          <select class="form__select" name="country">
            <option class="form__select-option" value="Россия">
              Россия
            </option>
            <option class="form__select-option" value="Украина">
              Украина
            </option>
            <option class="form__select-option" value="Беларусь">
              Беларусь
            </option>
          </select>

          <label class="form__label form__radio-label">Ваш пол</label>
          <div class="form__radio-box">
            <input type="radio" name="gender" id="male" value="мужской" checked />
            <label class="form__radio-box_label" for="male">Мужской</label>
            <input type="radio" name="gender" id="female" value="женский"/>
            <label class="form__radio-box_label" for="female">Женский</label>
          </div>

          <label class="form__label form__label_required">Ваше сообщение</label>
          <textarea class="form__textarea" name="message" id="message"></textarea>

          <div class="form__button-box">
            <button class="button" type="submit" id="submit">Отправить</button>
            <div class="form__info-box hide" id="notification">
              <p class="form__info-box_message">Ваше сообщение успешно отправлено</p>
            </div>
          </div>
        </form>
      </section>
    </main>
    <footer class="footer">
      <p class="footer__text">&copy; 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО «ПГТУ»</p>
    </footer>
  </body>
</html>
