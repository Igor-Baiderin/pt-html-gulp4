<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Клиентам</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Клиентам</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="clients">
    <div class="container">
      <ul class="clients-list">
        <li class="clients-list__item">
          <a href="clients-question.php" class="clients-list__link">
            <img class="clients-list__img" src="images/icons/clients-question.svg" alt="icon" class="clients-list__img" />
            <p class="clients-list__title">Вопросы и ответы</p>
          </a>
        </li>
        <li class="clients-list__item">
          <a href="clients-payment.php" class="clients-list__link">
            <img class="clients-list__img" src="images/icons/clients-money.svg" alt="icon" class="clients-list__img" />
            <p class="clients-list__title">Способы оплаты</p>
          </a>
        </li>
        <li class="clients-list__item">
          <a href="clients-status.php" class="clients-list__link">
            <img class="clients-list__img" src="images/icons/client-check.svg" alt="icon" class="clients-list__img" />
            <p class="clients-list__title">Проверить статус заказа</p>
          </a>
        </li>
        <li class="clients-list__item">
          <a href="clients-certificate.php" class="clients-list__link">
            <img class="clients-list__img" src="images/icons/client-present.svg" alt="icon" class="clients-list__img" />
            <p class="clients-list__title">Подарочный сертификат</p>
          </a>
        </li>
        <li class="clients-list__item">
          <a href="clients-info.php" class="clients-list__link">
            <img class="clients-list__img" src="images/icons/client-info.svg" alt="icon" />
            <p class="clients-list__title">Информация по возврата</p>
          </a>
        </li>
        <li class="clients-list__item">
          <a href="#" class="clients-list__link clients-list__link--last">
            <div class="clients-list__text">Войти в&nbsp;личный кабинет</div>
            <img src="images/icons/plus-grey.svg" alt="icon" class="clients-list__plus" />
          </a>
        </li>
      </ul>
    </div>
  </div>
  <section class="about-company about-company--mobile">
    <div class="container">
      <div class="about-company__wrapper">
        <img src="images/about-company.png" alt="about" class="about-company__img" />
        <div class="about-company__box">
          <p class="about-company__description">
            Туроператор «Премьер Тур» осуществляет свою деятельность в сфере внутреннего туризма с 1999 г. по направлениям: санаторно-курортный отдых, горнолыжные и активные туры, корпоративный
            туризм.
          </p>
          <p class="about-company__description">Мы работаем с объектами размещения по прямым договорам и являемся официальным представителем лучших санаторно-курортных объединений и здравниц.</p>
          <p class="about-company__description">
            Являемся признанными экспертами в санаторно-курортной отрасли Урала, Башкирии и Поволжья. Предлагаем нашим клиентам уникальный подбор всех предложений в известные здравницы и популярные
            курорты с гарантией лучшей цены в системе онлайн-бронирования.
          </p>

          <ul class="about-company__list">
            <li class="about-company__item">
              <span class="about-company__num">01</span>
              <p class="about-company__text">Работаем со всеми видами клиентов на протяжении 20 лет</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">02</span>
              <p class="about-company__text">Мы официальные представители лучших куррортов</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">03</span>
              <p class="about-company__text">Управление своим бронированием 24/7 в&nbsp;личном кабинете</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">04</span>
              <p class="about-company__text">Квалифицированные сотрудники в санаторно&nbsp;-&nbsp;курортной отрасли</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">05</span>
              <p class="about-company__text">Состоим в Едином реестре туроператоров&nbsp;России</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">06</span>
              <p class="about-company__text">Индивидуальный подбор туров под ваши запросы и пожелания</p>
            </li>
          </ul>
          <a href="about-company.php" class="about-company__link link-text">Подробнее о компании →</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
