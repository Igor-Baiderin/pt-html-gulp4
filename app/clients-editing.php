<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs breadcrumbs--client">
    <div class="container">
      <h2 class="breadcrumbs__title">Личный кабинет</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list-item">
          <a itemprop="item" href="clients-entry.php">
            <span itemprop="name">Личный кабинет</span></a>
        </li>
        <li itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list-item">
          <span itemprop="name">Редактировать личные данные</span>
        </li>
      </ul>
      <div class="breadcrumbs-client">
        <p class="breadcrumbs-client__name">Самигуллин Данил Игоревич</p>
        <div class="breadcrumbs-client__bottom">
          <p class="breadcrumbs-client__bonus breadcrumbs-client__bonus--hidden breadcrumbs-client__bonus--nobonus">У вас нет бонусов</p>
          <p class="breadcrumbs-client__bonus">У вас 365 бонусов</p>
          <button class="breadcrumbs-client__button">Выйти</button>
        </div>
      </div>
    </div>
  </div>
  <section class="clients-editing">
    <div class="container">
      <div class="clients-inner">
        <aside class="clients-aside">
          <ul class="clients-aside__list">
            <li class="clients-aside__item">
              <a href="clients-order.php" class="clients-aside__link">Мои заказы</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-favorites.php" class="clients-aside__link">Мое избранное</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-check.php" class="clients-aside__link">Проверить статус заказа</a>
            </li>
            <li class="clients-aside__item">
              <div class="clients-aside__title">Редактировать личные данные</div>
            </li>
          </ul>
        </aside>
        <div class="clients-content">
          <div class="clients-wrapper">
            <p class="clients-wrapper__title filter__item-drop">Редактировать личные данные</p>
            <ul class="clients-aside__list">
              <li class="clients-aside__item">
                <a href="clients-order.php" class="clients-aside__link">Мои заказы</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-favorites.php" class="clients-aside__link">Мое избранное</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-check.php" class="clients-aside__link">Проверить статус заказа</a>
              </li>
            </ul>
          </div>
          <h2 class="clients-editing__title">Редактировать личные данные</h2>
          <form class="clients-editing__form clients-form">
            <h3 class="clients-form__title">Редактировать ФИО</h3>
            <div class="clients-form__inputs">
              <div class="clients-form__wrapper">
                <p class="clients-form__text">Ваша фамилия</p>
                <label class="input-wrap clients-form__input">
                  <input name="surname" type="text" value="Самигуллин" data-rules="required" required />
                </label>
              </div>
              <div class="clients-form__wrapper">
                <p class="clients-form__text">Ваше имя</p>
                <label class="input-wrap clients-form__input">
                  <input name="name" data-rules="required" type="text" value="Данил" required />
                </label>
              </div>
              <div class="clients-form__wrapper">
                <p class="clients-form__text">Ваше отчество</p>
                <label class="input-wrap clients-form__input">
                  <input name="patronymic" type="text" value="Игоревич" />
                </label>
              </div>
            </div>
            <h3 class="clients-form__title">Редактировать контакты</h3>
            <div class="clients-form__inputs">
              <div class="clients-form__wrapper">
                <p class="clients-form__text">Ваш телефон</p>
                <label class="input-wrap clients-form__input">
                  <input name="phone" type="tel" data-type="tel" value="+79821005999" data-rules="required, tel" required />
                </label>
              </div>
              <div class="clients-form__wrapper">
                <p class="clients-form__text">Ваш e-mail</p>
                <label class="input-wrap clients-form__input">
                  <input name="email" type="email" value="danilsmg@yandex.ru" data-rules="required, email" />
                </label>
              </div>
            </div>
            <h3 class="clients-form__title">Изменить пароль</h3>
            <div class="clients-form__inputs">
              <div class="clients-form__wrapper">
                <p class="clients-form__text">Введите новый пароль</p>
                <label class="input-wrap clients-form__input">
                  <input type="password" />
                </label>
              </div>
              <div class="clients-form__wrapper">
                <p class="clients-form__text">Повторите еще раз новый пароль</p>
                <label class="input-wrap clients-form__input">
                  <input type="password" />
                </label>
              </div>
            </div>
            <button type="submit" class="clients-form__button button--red">Сохранить изменения</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
