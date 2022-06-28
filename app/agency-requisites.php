<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs breadcrumbs--agency">
    <div class="container">
      <h2 class="breadcrumbs__title">Реквизиты</h2>
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
        <li class="breadcrumbs__list-item">
          <span itemprop="name">Реквизиты</span>
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
        <p class="agency-wrapper__title filter__item-drop">Реквизиты</p>
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
            <a href="clients-favorites.php" class="agency-wrapper__link">Отчет агента</a>
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
      <div class="requisites">
        <div class="requisites__item">
          <h3 class="requisites__title">Реквизиты ООО "Премьер-М"</h3>
          <ul class="requisites-list">
            <li class="requisites-list__item">ИНН 7444061375, КПП 745601001</li>
            <li class="requisites-list__item">Уральский филиал ПАО "Промсвязьбанк" г. Екатеринбург</li>
            <li class="requisites-list__item">Р\с 40702810375000515702 , К/с 30101810500000000975</li>
            <li class="requisites-list__item">БИК 046577975, ОГРН 1097444010070</li>
          </ul>
        </div>
        <div class="requisites__item">
          <h3 class="requisites__title">Способы оплаты для агентов</h3>
          <ul class="requisites-list">
            <li class="requisites-list__item">Наличный расчет в офисах: г. Екатеринбург, г. Челябинск, г. Уфа, г. Оренбург, г. Магнитогорск</li>
            <li class="requisites-list__item">Оплата безналичным расчетом на реквизиты ООО "Премьер-М”</li>
            <li class="requisites-list__item">Сбербанк онлайн</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include("footer.html"); ?>
