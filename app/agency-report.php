<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs breadcrumbs--agency">
    <div class="container">
      <h2 class="breadcrumbs__title">Личный кабинет</h2>
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
          <span itemprop="name">Отчет агента</span>
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
          <li class="agency-nav__item">
            <p class="agency-nav__title">Отчет агента</p>
          </li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Реквизиты</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">История заказов</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Проверка бонусов</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Новости</a></li>
        </ul>
      </nav>
      <div class="agency-wrapper">
        <p class="agency-wrapper__title filter__item-drop">Отчет агента</p>
        <ul class="agency-wrapper__list">
          <li class="agency-wrapper__item">
            <a href="agency-account.php" class="agency-wrapper__link">Личный кабинет</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Личные заказы</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Договор с агенством</a>
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
      <ul class="reports">
        <li class="reports-item">
          <a href="#" download class="reports-item__link">
            <img src="images/icons/document-red.svg" alt="" class="reports-item__img" />
            <p class="reports-item__text">июль 2021</p>
          </a>
        </li>
        <li class="reports-item">
          <a href="#" download class="reports-item__link">
            <img src="images/icons/document-red.svg" alt="" class="reports-item__img" />
            <p class="reports-item__text">июнь 2021</p>
          </a>
        </li>
        <li class="reports-item">
          <a href="#" download class="reports-item__link">
            <img src="images/icons/document-red.svg" alt="" class="reports-item__img" />
            <p class="reports-item__text">май 2021</p>
          </a>
        </li>
        <li class="reports-item">
          <a href="#" download class="reports-item__link">
            <img src="images/icons/document-red.svg" alt="" class="reports-item__img" />
            <p class="reports-item__text">апрель 2021</p>
          </a>
        </li>
        <li class="reports-item">
          <a href="#" download class="reports-item__link">
            <img src="images/icons/document-red.svg" alt="" class="reports-item__img" />
            <p class="reports-item__text">март 2021</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</main>

<?php include("footer.html"); ?>
