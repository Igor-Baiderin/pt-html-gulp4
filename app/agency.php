<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Агентствам</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Агентствам</span>
        </li>
      </ul>
    </div>
  </div>
  <section class="cooperation">
    <div class="container">
      <h2 class="cooperation__title">Как начать сотрудничество?</h2>
      <p class="cooperation__text">Уважаемые коллеги, приглашаем к сотрудничеству!</p>
      <div class="cooperation-steps">
        <div class="cooperation-step">
          <div class="cooperation-step__wrapper">
            <span class="cooperation-step__num">Шаг 1</span>
            <div class="cooperation-step__title">регистрация в системе бронирования</div>
          </div>
          <div class="cooperation-step__info">
            <p class="cooperation-step__text">Для получения логина и пароля пройдите регистрацию; после этого Вы сможете начать бронирование.</p>
            <a href="#" class="cooperation-step__link link-text">Перейти к регистрации →</a>
          </div>
        </div>
        <div class="cooperation-step">
          <div class="cooperation-step__wrapper">
            <span class="cooperation-step__num">Шаг 2</span>
            <div class="cooperation-step__title">заключение договора</div>
          </div>
          <div class="cooperation-step__info">
            <a href="#" class="cooperation-step__link cooperation-step__link--mb link-text">Скачайте и заполните «Договор с&nbsp;агентством»&nbsp;→</a>
            <p class="cooperation-step__text cooperation-step__text--mb">
              Cканы первой и последней страниц договора необходимо отправить на почту <a href="mailto:buhg@premier-tur.com." class="cooperation-step__mail">buhg@premier-tur.com.</a> Оригинал в двух
              экземплярах необходимо прислать по адресу: 455030, Челябинская область, г.Магнитогорск, ул.Суворова, д.114, оф.62
            </p>
            <p class="cooperation-step__text">Успешной работы!</p>
          </div>
        </div>
      </div>
      <a href="#" class="cooperation__button button--red">Заявка на регистрацию агентства</a>
    </div>
  </section>
  <section class="agency">
    <div class="container">
      <h2 class="agency__title">Важная информация для агентств</h2>
      <ul class="agency-info">
        <li class="agency-item">
          <h4 class="agency-item__title">Агентская комиссия</h4>
          <ul class="agency-info__list">
            <li class="agency-info__item">Чтобы узнать агентское вознаграждение, необходимо <a href="#" class="agency-info__link">зарегистрироваться</a></li>
            <li class="agency-info__item">Для зарегистрированных агентств информация доступна в личном кабинете</li>
          </ul>
        </li>
        <li class="agency-item">
          <h4 class="agency-item__title">Документы для работы (образцы)</h4>
          <div class="agency-item__boxes">
            <a href="#" class="agency-item__box">
              <img src="images/icons/document-red.svg" alt="icon" class="agency-item__img" />
              <p class="agency-item__text">Документы для работы (образцы)</p>
            </a>
            <a href="#" class="agency-item__box">
              <img src="images/icons/document-red.svg" alt="icon" class="agency-item__img" />
              <p class="agency-item__text">Отчет агента</p>
            </a>
            <a href="#" class="agency-item__box">
              <img src="images/icons/document-red.svg" alt="icon" class="agency-item__img" />
              <p class="agency-item__text">Письмо на возврат денег</p>
            </a>
            <p class="agency-item__text agency-item__text--mt">(возврат денег производится в течение 3 банковских дней с момента получения письма)</p>
          </div>
        </li>
        <li class="agency-item">
          <h4 class="agency-item__title">Способы оплаты для агентов</h4>
          <ul class="agency-info__list">
            <li class="agency-info__item">Наличный расчет в офисах: г. Екатеринбург, г. Челябинск, г. Уфа, г. Оренбург, г. Магнитогорск</li>
            <li class="agency-info__item">Оплата безналичным расчетом на реквизиты ООО "Премьер-М”</li>
            <li class="agency-info__item">Сбербанк онлайн</li>
          </ul>
        </li>
        <li class="agency-item">
          <h4 class="agency-item__title">Реквизиты ООО "Премьер-М"</h4>
          <ul class="agency-info__list">
            <li class="agency-info__item">ИНН 7444061375, КПП 745601001</li>
            <li class="agency-info__item">Уральский филиал ПАО "Промсвязьбанк" г. Екатеринбург</li>
            <li class="agency-info__item">Р\с 40702810375000515702 , К/с 30101810500000000975</li>
            <li class="agency-info__item">БИК 046577975, ОГРН 1097444010070</li>
          </ul>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
