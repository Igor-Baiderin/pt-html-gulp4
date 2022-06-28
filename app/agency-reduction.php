<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs breadcrumbs--agency">
    <div class="container">
      <h2 class="breadcrumbs__title">Редактирование профиля</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="agency-account.php">
            <span itemprop="name">Личный кабинет</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Редактирование профиля</span>
        </li>
      </ul>
      <div class="breadcrumbs-agency">
        <p class="breadcrumbs-agency__name">laravel@agel-nash.ru</p>
        <div class="breadcrumbs-agency__bottom">
          <button type="submit" class="breadcrumbs-agency__reduction">Редактировать</button>
          <button type="submit" class="breadcrumbs-agency__button">Выйти</button>
        </div>
      </div>
    </div>
  </div>
  <div class="agency-account">
    <div class="container">
      <nav class="agency-nav">
        <ul class="agency-nav__list">
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Личный кабинет</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Личные заказы</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Договор с агенством</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Отчет агента</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Реквизиты</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">История заказов</a></li>
          <li class="agency-nav__item">
            <p class="agency-nav__title">Проверка бонусов</p>
          </li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Новости</a></li>
        </ul>
      </nav>
      <div class="agency-wrapper">
        <p class="agency-wrapper__title filter__item-drop">Личные заказы</p>
        <ul class="agency-wrapper__list">
          <li class="agency-wrapper__item">
            <a href="agency-account.php" class="agency-wrapper__link">Личный кабинет</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Договор с агенством</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Отчет агента</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Реквизиты</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">История заказов</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Проверка бонусов</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Новости</a>
          </li>
        </ul>
      </div>
      <a href="#" class="agency-bonus">Проверка бонусов</a>
      <form class="redaction-form">
        <h3 class="redaction-form__title">Основные параметры профиля</h3>
        <div class="redaction-form__wrapper">
          <div class="redaction-form__box">
            <p class="redaction-form__box-title">Ваш телефон</p>
            <label class="input-wrap redaction-form__input"><input type="tel" data-type="tel" name="phone" value="+79821005999" data-rules="tel"/></label>
          </div>
          <div class="redaction-form__box">
            <p class="redaction-form__box-title">Ваш e-mail</p>
            <label class="input-wrap redaction-form__input"><input type="email" name="email" value="danilsmg@yandex.ru" data-rules="email"/></label>
          </div>
        </div>
        <h3 class="redaction-form__title">Изменить пароль</h3>
        <div class="redaction-form__wrapper">
          <div class="redaction-form__box">
            <p class="redaction-form__box-title">Введите новый пароль</p>
            <input name="password" type="password" class="redaction-form__input" />
          </div>
          <div class="redaction-form__box">
            <p class="redaction-form__box-title">Повторите еще раз новый пароль</p>
            <input name="password" type="password" class="redaction-form__input" />
          </div>
        </div>
        <h3 class="redaction-form__title">Уведомления</h3>
        <label class="redaction-form__label">
          <input type="checkbox" class="redaction-form__checkbox" />
          Присылать уведомления на почту о статусах заказов
        </label>
        <label class="redaction-form__label">
          <input type="checkbox" class="redaction-form__checkbox" />
          Присылать новости проекта и туроператора "Премьер Тур"
        </label>
        <button type="submit" class="redaction-form__button button--red">Сохранить изменения</button>
      </form>
  
    </div>
  </div>
</main>

<?php include("footer.html"); ?>
