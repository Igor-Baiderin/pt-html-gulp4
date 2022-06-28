<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs breadcrumbs--agency">
    <div class="container">
      <h2 class="breadcrumbs__title">Проверка бонусов</h2>
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
          <span itemprop="name">Проверка бонусов</span>
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
          <li class="agency-nav__item">
            <p class="agency-nav__title">Реквизиты</p>
          </li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">История заказов</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Проверка бонусов</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Новости</a></li>
        </ul>
      </nav>
      <div class="agency-wrapper">
        <p class="agency-wrapper__title filter__item-drop">Проверка бонусов</p>
        <ul class="agency-wrapper__list">
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Личный кабинет</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Личные заказы</a>
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
            <a href="clients-favorites.php" class="agency-wrapper__link">Новости</a>
          </li>
        </ul>
      </div>
      <a href="#" class="agency-bonus">Проверка бонусов</a>
      <form class="agency-bonus__form">
        <label class="input-wrap agency-bonus__wrapper agency-bonus__input agency-bonus__input--name"><input name="name" type="text" placeholder="ФИО клиента*" data-rules="required" required/></label>
        <label class="input-wrap agency-bonus__wrapper agency-bonus__wrapper--date agency-bonus__input agency-bonus__input--date"><input name="date" data-type="date" type="text" placeholder="Дата рождения*" data-rules="required"/ required></label>
        <button type="submit" class="agency-bonus__button button--red">Проверить</button>
      </form>
      <div class="bonus bonus--green">
        <div class="bonus-info">
          <p class="bonus__amount">2100 бонусов</p>
          <div class="bonus-wrapper">
            <p class="bonus-info__name">Самигуллин Данил Игоревич</p>
            <p class="bonus-info__date">23.10.1996</p>
          </div>
          <a href="#" class="bonus-info__order">№ PRT06637-17</a>
        </div>
        <img src="images/icons/bonus-green.svg" alt="icon" class="bonus-img" />
      </div>
      <div class="bonus bonus--red">
        <div class="bonus-info">
          <p class="bonus__amount">Бонусов не найдено</p>
          <div class="bonus-wrapper">
            <p class="bonus-info__name">Самигуллин Данил Игоревич</p>
            <p class="bonus-info__date">23.10.1996</p>
          </div>
          <a href="#" class="bonus-info__order">№ PRT06637-17</a>
        </div>
        <img src="images/icons/bonus-red.svg" alt="icon" class="bonus-img" />
      </div>
    </div>
  </div>
</main>

<?php include("footer.html"); ?>
