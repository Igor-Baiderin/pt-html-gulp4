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
          <span itemprop="name">Личный кабинет </span>
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
          <li class="agency-nav__item">
            <p class="agency-nav__title">Личный кабинет</p>
          </li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Личные заказы</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Договор с агенством</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Отчет агента</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Реквизиты</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">История заказов</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Проверка бонусов</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Новости</a></li>
        </ul>
      </nav>
      <div class="agency-wrapper">
        <p class="agency-wrapper__title filter__item-drop">Личный кабинет</p>
        <ul class="agency-wrapper__list">
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
            <a href="clients-favorites.php" class="agency-wrapper__link">Проверка бонусов</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Новости</a>
          </li>
        </ul>
      </div>
      <a href="#" class="agency-bonus">Проверка бонусов</a>
      <div class="agency-commission">
        <h3 class="agency-commission__title">Ваша комиссия</h3>
        <p class="agency-commission__text">
          Уважаемые партнеры! <br />
          С размером агентского вознаграждения вы можете ознакомиться, пройдя по ссылке ниже
        </p>
        <a href="#" class="agency-commission__button link--grey">Агентское вознаграждение</a>
        <p class="agency-commission__text">
          По вопросам документации и бухгалтерии просим связываться по тел.: <a href="tel:+73519215369" class="agency-commission__link">+7 (3519) 21-53-69</a>,
          <a href="tel:+79128919012" class="agency-commission__link">+79128919012</a> или по электронной почте
          <a href="mailto:buhg@premier-tur.com" class="agency-commission__link">buhg@premier-tur.com</a>
        </p>
      </div>
      <div class="agency-news">
        <h3 class="agency-news__title">Важные новости</h3>
        <ul itemscope itemtype="http://schema.org/Blog" class="agency-news__list">
          <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="agency-news__item">
            <img itemprop="image" src="images/content/agency-news-1.png" alt="photo" class="agency-news__img" />
            <div class="agency-news__info">
              <h5 itemprop="headline" class="agency-news__text">Важно! Увеличение агентского вознаграждения в санаториях</h5>
            </div>
            <div class="agency-news__bottom">
              <p itemprop="datePublished" class="agency-news__date">10.06.2021</p>
              <a href="#" class="agency-news__button button--red">Подробнее</a>
            </div>
          </li>
          <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="agency-news__item">
            <img itemprop="image" src="images/content/agency-news-2.png" alt="photo" class="agency-news__img" />
            <div class="agency-news__info">
              <h5 itemprop="headline" class="agency-news__text">Кешбек, 3 этап : условия участия для агентств и перечень санаториев, участвующих в акции</h5>
            </div>
            <div class="agency-news__bottom">
              <p itemprop="datePublished" class="agency-news__date">10.06.2021</p>
              <a href="#" class="agency-news__button button--red">Подробнее</a>
            </div>
          </li>
          <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="agency-news__item">
            <img itemprop="image" src="images/content/agency-news-3.png" alt="photo" class="agency-news__img" />
            <div class="agency-news__info">
              <h5 itemprop="headline" class="agency-news__text">Вакансия! требуется менеджер по туризму с опытом работы в г. Магнитогорск</h5>
            </div>
            <div class="agency-news__bottom">
              <p itemprop="datePublished" class="agency-news__date">10.06.2021</p>
              <a href="#" class="agency-news__button button--red">Подробнее</a>
            </div>
          </li>
          <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="agency-news__item">
            <img itemprop="image" src="images/content/agency-news-4.png" alt="photo" class="agency-news__img" />
            <div class="agency-news__info">
              <h5 itemprop="headline" class="agency-news__text">Важно! Увеличение агентского вознаграждения в санаториях</h5>
            </div>
            <div class="agency-news__bottom">
              <p itemprop="datePublished" class="agency-news__date">10.06.2021</p>
              <a href="#" class="agency-news__button button--red">Подробнее</a>
            </div>
          </li>
          <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="agency-news__item">
            <img itemprop="image" src="images/content/agency-news-5.png" alt="photo" class="agency-news__img" />
            <div class="agency-news__info">
              <h5 itemprop="headline" class="agency-news__text">Кешбек, 3 этап : условия участия для агентств и перечень санаториев, участвующих в акции</h5>
            </div>
            <div class="agency-news__bottom">
              <p itemprop="datePublished" class="agency-news__date">10.06.2021</p>
              <a href="#" class="agency-news__button button--red">Подробнее</a>
            </div>
          </li>
          <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="agency-news__item">
            <img itemprop="image" src="images/content/agency-news-6.png" alt="photo" class="agency-news__img" />
            <div class="agency-news__info">
              <h5 itemprop="headline" class="agency-news__text">Вакансия! требуется менеджер по туризму с опытом работы в г. Магнитогорск</h5>
            </div>
            <div class="agency-news__bottom">
              <p itemprop="datePublished" class="agency-news__date">10.06.2021</p>
              <a href="#" class="agency-news__button button--red">Подробнее</a>
            </div>
          </li>
        </ul>
        <div class="pagination">
          <ul class="pagination-list">
            <li class="pagination-list__item">
              <a href="#">1</a>
            </li>
            <li class="pagination-list__item active">
              <a href="#">2</a>
            </li>
            <li class="pagination-list__item">
              <a href="#">3</a>
            </li>
            <li class="pagination-list__item">
              <a href="#">4</a>
            </li>
            <li class="pagination-list__item">
              <a href="#">5</a>
            </li>
            <li class="pagination-list__item">
              <a href="#">6</a>
            </li>
            <li class="pagination-list__item pagination-list__item--dots">
              <span>...</span>
            </li>
            <li class="pagination-list__item">
              <a href="#">38</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include("footer.html"); ?>
