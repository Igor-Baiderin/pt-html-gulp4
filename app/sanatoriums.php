<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Путевки в санатории и дома отдыха и отели</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Санатории</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="catalog-objects catalog">
    <div class="container">
      <div class="catalog__inner">
        <aside class="catalog__inner-aside aside-filter">
          <div class="catalog-search--mobile">
            <p class="catalog-search__title">Найдите интересующий вас объект</p>
            <form class="catalog-search__form">
              <div class="input-wrap catalog-search__input">
                <input name="place" type="search" placeholder="Город, регион, куррорт или санаторий" autocomplete="on" />
              </div>
              <button type="submit" class="catalog-search__button button--red">Найти объект</button>
            </form>
          </div>
          <button class="aside-filter__button link--grey">Отфильтровать объекты</button>
          <div class="aside-filter__wrapper">
            <ul class="aside-filter__list">
              <li class="aside-filter__item-drop">
                <h4 class="aside-filter__item-title filter__item-drop filter__item-drop--active">Профили лечения</h4>
                <div class="aside-filter__content">
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Реабилитация после COVID-19 в санаториях
                    </label>
                    <p class="aside-filter__content-num">1</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Болезни костно-мышечной системы (опорно&#8209;двигательного аппарата)
                    </label>
                    <p class="aside-filter__content-num">14</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Нервная система <br />
                      (неврологические санатории)
                    </label>
                    <p class="aside-filter__content-num">22</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Сердечно-сосудистые заболевания <br />
                      (системы кровообращения)
                    </label>
                    <p class="aside-filter__content-num">88</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Желудочно-кишечный тракт (ЖКТ)
                    </label>
                    <p class="aside-filter__content-num">33</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Болезни органов дыхания
                    </label>
                    <p class="aside-filter__content-num">14</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Гинекология, Урология
                    </label>
                    <p class="aside-filter__content-num">33</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Болезни эндокринной системы
                    </label>
                    <p class="aside-filter__content-num">5</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Болезни кожи
                    </label>
                    <p class="aside-filter__content-num">99</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Нервная система (неврологические санатории)
                    </label>
                    <p class="aside-filter__content-num">103</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Глазные болезни
                    </label>
                    <p class="aside-filter__content-num">33</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Лечение и реабилитация <br />
                      профессиональных заболеваний
                    </label>
                    <p class="aside-filter__content-num">33</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Нервная система (неврологические санатории)
                    </label>
                    <p class="aside-filter__content-num">33</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Косметология
                    </label>
                    <p class="aside-filter__content-num">33</p>
                  </div>
                </div>
              </li>
              <li class="aside-filter__item-drop">
                <h4 class="aside-filter__item-title filter__item-drop filter__item-drop--active">Уровень санатория</h4>
                <div class="aside-filter__content">
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Эконом
                    </label>
                    <p class="aside-filter__content-num">9</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Стандарт
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Высокий
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                </div>
              </li>
              <li class="aside-filter__item-drop">
                <h4 class="aside-filter__item-title filter__item-drop filter__item-drop--active">Инфраструктура</h4>
                <div class="aside-filter__content">
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Путешествуй по России с кешбэком 20%
                    </label>
                    <p class="aside-filter__content-num">9</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Реабилитация после COVID-19 в санаториях
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      WiFi
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      SPA и оздоровительный отдых
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Детский отдых
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Ночной клуб
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Мангальная зона
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Конференц-услуги
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Горные лыжи
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Бассейн
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Бары с крепкой алкогольной продукцией
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Бювет и минеральная вода
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Лечебная грязь
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Собственный пляж
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Все в одном здании
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Мацеста
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Семейный номер
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Баня / Хамам
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                  <div class="aside-filter__content-box">
                    <label class="aside-filter__content-label">
                      <input class="aside-filter__checkbox" type="checkbox" />
                      Тренажерный зал
                    </label>
                    <p class="aside-filter__content-num">16</p>
                  </div>
                </div>
              </li>
            </ul>
            <button class="aside-filter__reset link--grey">Сбросить фильтры</button>
          </div>
        </aside>
        <div class="catalog__inner-wrapper">
          <div class="catalog-search">
            <p class="catalog-search__title">Найдите интересующий вас объект</p>
            <form class="catalog-search__form">
              <div class="input-wrap catalog-search__input">
                <input name="place" type="search" placeholder="Город, регион, куррорт или санаторий" autocomplete="on" />
              </div>
              <button type="submit" class="catalog-search__button button--red">Найти объект</button>
            </form>
          </div>
          <div class="catalog__inner-top">
            <p class="catalog__num">41 объект</p>
            <button class="catalog__link link-text">Показать объекты на карте →</button>
            <button class="catalog__link--hidden catalog__link link-text">Показать объекты списком →</button>
          </div>
          <div class="catalog-map--hidden catalog-map">
            <!-- Карта -->
            <div class="sanatoriums-map">
              <div class="map-modal">
                <div class="map-modal-close">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="5.85059" y1="14.0998" x2="15.043" y2="4.90739" stroke="#000" stroke-linecap="round" />
                    <line x1="5.55769" y1="4.90735" x2="14.7501" y2="14.0997" stroke="#000" stroke-linecap="round" />
                  </svg>
                </div>
                <div class="map-modal-body"></div>
              </div>
              <div id="map"></div>
            </div>
            <!-- Карта -->
            <div class="catalog-map__bottom">
              <p class="catalog-map__text">
                Круглый год санатории Урала принимают отдыхающих. Часто, чтобы получить максимальную пользу, люди совмещают отдых и лечение в санаториях Урала, ведь здесь можно поправить здоровье по
                нужному лечебному медицинскому профилю и отлично отдохнуть! Цены на санатории доступные. Постоянно в течение года проходят акции.
              </p>
              <p class="catalog-map__text">
                На этой странице представлен список наиболее востребованных санаториев Урала: Челябинской и Свердловской области, Башкирии, а так же близлежащих регионов.
              </p>
            </div>
          </div>
          <ul itemscope itemtype="http://schema.org/ItemList" class="catalog-list">
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item catalog-item--new">
              <div class="catalog-item__wrapper">
                <a href="images/content/catalog-1.png" class="catalog-item__img">
                  <img itemprop="image" src="images/content/catalog-1.png" alt="photo" />
                </a>
                <div class="catalog-item__info">
                  <div class="catalog-item__top">
                    <a itemprop="name" href="#" class="catalog-item__title">Санаторий «Якты-Куль»</a>
                    <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
                      <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
                    </a>
                  </div>
                  <div class="catalog-item__destinations">
                    <a href="#" class="catalog-item__destination">Урал</a>
                    <a href="#" class="catalog-item__destination">Башкирия</a>
                    <a href="#" class="catalog-item__destination">озеро Банное</a>
                  </div>
                  <p itemprop="description" class="catalog-item__text">
                    Санаторий «Якты-Куль» расположен в Абзелиловском районе республики Башкортостан, в живописном месте, на берегу озера Банное. Санаторий расположен на высоте 450 м над уровнем моря и
                    считается низкогорным курортом.
                  </p>
                  <ul class="catalog-item__categories">
                    <li class="catalog-item__category catalog-item__category--mineral">Бювет и минеральная вода</li>
                    <li class="catalog-item__category catalog-item__category--dirt">Лечебная грязь</li>
                    <li class="catalog-item__category catalog-item__category--building">Все в одном здании</li>
                  </ul>
                  <div class="catalog-item__buttons">
                    <button class="catalog-item__button--booking link--grey">Забронировать в 1 клик</button>
                    <button class="catalog-item__button--payment button--red">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item catalog-item--hit map-place" data-coords="[53.383309, 58.933985]" data-id="1">
              <div class="catalog-item__wrapper">
                <a href="images/content/catalog-2.png" class="catalog-item__img">
                  <img itemprop="image" src="images/content/catalog-2.png" alt="photo" />
                </a>
                <div class="catalog-item__info">
                  <div class="catalog-item__top">
                    <a itemprop="name" href="#" class="catalog-item__title">Санаторий «Якты-Куль»</a>
                    <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
                      <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
                    </a>
                  </div>
                  <div class="catalog-item__destinations">
                    <a href="#" class="catalog-item__destination">Урал</a>
                    <a href="#" class="catalog-item__destination">Башкирия</a>
                    <a href="#" class="catalog-item__destination">озеро Банное</a>
                  </div>
                  <p itemprop="description" class="catalog-item__text">
                    Санаторий «Якты-Куль» расположен в Абзелиловском районе республики Башкортостан, в живописном месте, на берегу озера Банное. Санаторий расположен на высоте 450 м над уровнем моря и
                    считается низкогорным курортом.
                  </p>
                  <ul class="catalog-item__categories">
                    <li class="catalog-item__category catalog-item__category--openpool">Открытый бассейн</li>
                    <li class="catalog-item__category catalog-item__category--bar">Бар</li>
                    <li class="catalog-item__category catalog-item__category--beach">Собственный пляж</li>
                  </ul>
                  <div class="catalog-item__buttons">
                    <button class="catalog-item__button--booking link--grey">Забронировать в 1 клик</button>
                    <button class="catalog-item__button--payment button--red">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item catalog-item--discount map-place" data-coords="[53.470253, 59.094660]" data-id="2">
              <div class="catalog-item__wrapper">
                <a href="images/content/catalog-3.png" class="catalog-item__img">
                  <img itemprop="image" src="images/content/catalog-3.png" alt="photo" />
                </a>
                <div class="catalog-item__info">
                  <div class="catalog-item__top">
                    <a itemprop="name" href="#" class="catalog-item__title">Санаторий «Якты-Куль»</a>
                    <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
                      <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
                    </a>
                  </div>
                  <div class="catalog-item__destinations">
                    <a href="#" class="catalog-item__destination">Урал</a>
                    <a href="#" class="catalog-item__destination">Башкирия</a>
                    <a href="#" class="catalog-item__destination">озеро Банное</a>
                  </div>
                  <p itemprop="description" class="catalog-item__text">
                    Санаторий «Якты-Куль» расположен в Абзелиловском районе республики Башкортостан, в живописном месте, на берегу озера Банное. Санаторий расположен на высоте 450 м над уровнем моря и
                    считается низкогорным курортом.
                  </p>
                  <ul class="catalog-item__categories">
                    <li class="catalog-item__category catalog-item__category--matsesta">Мацеста</li>
                    <li class="catalog-item__category catalog-item__category--family">Семейный номер</li>
                    <li class="catalog-item__category catalog-item__category--hamam">Баня/Хамам</li>
                  </ul>
                  <div class="catalog-item__buttons">
                    <button class="catalog-item__button--booking link--grey">Забронировать в 1 клик</button>
                    <button class="catalog-item__button--payment button--red">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.459190, 59.226496]" data-id="3">
              <div class="catalog-item__wrapper">
                <a href="images/content/catalog-4.png" class="catalog-item__img">
                  <img itemprop="image" src="images/content/catalog-4.png" alt="photo" />
                </a>
                <div class="catalog-item__info">
                  <div class="catalog-item__top">
                    <a itemprop="name" href="#" class="catalog-item__title">Санаторий «Якты-Куль»</a>
                    <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
                      <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
                    </a>
                  </div>
                  <div class="catalog-item__destinations">
                    <a href="#" class="catalog-item__destination">Урал</a>
                    <a href="#" class="catalog-item__destination">Башкирия</a>
                    <a href="#" class="catalog-item__destination">озеро Банное</a>
                  </div>
                  <p itemprop="description" class="catalog-item__text">
                    Санаторий «Якты-Куль» расположен в Абзелиловском районе республики Башкортостан, в живописном месте, на берегу озера Банное. Санаторий расположен на высоте 450 м над уровнем моря и
                    считается низкогорным курортом.
                  </p>
                  <ul class="catalog-item__categories">
                    <li class="catalog-item__category catalog-item__category--gym">Тренажерный зал</li>
                    <li class="catalog-item__category catalog-item__category--spa">SPA-отдых</li>
                    <li class="catalog-item__category catalog-item__category--child">Детский отдых</li>
                  </ul>
                  <div class="catalog-item__buttons">
                    <button class="catalog-item__button--booking link--grey">Забронировать в 1 клик</button>
                    <button class="catalog-item__button--payment button--red">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.538617, 59.154398]" data-id="4">
              <div class="catalog-item__wrapper">
                <a href="images/content/catalog-5.png" class="catalog-item__img">
                  <img itemprop="image" src="images/content/catalog-5.png" alt="photo" />
                </a>
                <div class="catalog-item__info">
                  <div class="catalog-item__top">
                    <a itemprop="name" href="#" class="catalog-item__title">Санаторий «Якты-Куль»</a>
                    <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
                      <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
                    </a>
                  </div>
                  <div class="catalog-item__destinations">
                    <a href="#" class="catalog-item__destination">Урал</a>
                    <a href="#" class="catalog-item__destination">Башкирия</a>
                    <a href="#" class="catalog-item__destination">озеро Банное</a>
                  </div>
                  <a href="images/text.txt" download class="catalog-item__document">Ссылка на документ для ознакомления, название любой длинны</a>
                  <p itemprop="description" class="catalog-item__text">
                    Санаторий «Якты-Куль» расположен в Абзелиловском районе республики Башкортостан, в живописном месте, на берегу озера Банное. Санаторий расположен на высоте 450 м над уровнем моря и
                    считается низкогорным курортом.
                  </p>
                  <ul class="catalog-item__categories">
                    <li class="catalog-item__category catalog-item__category--club">Ночной клуб</li>
                    <li class="catalog-item__category catalog-item__category--bbq">Мангальная зона</li>
                    <li class="catalog-item__category catalog-item__category--conference">Конференц-услуги</li>
                  </ul>
                  <div class="catalog-item__buttons">
                    <button class="catalog-item__button--booking link--grey">Забронировать в 1 клик</button>
                    <button class="catalog-item__button--payment button--red">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.536902, 59.009867]" data-id="5">
              <div class="catalog-item__wrapper">
                <a href="images/content/catalog-6.png" class="catalog-item__img">
                  <img itemprop="image" src="images/content/catalog-6.png" alt="photo" />
                </a>
                <div class="catalog-item__info">
                  <div class="catalog-item__top">
                    <a itemprop="name" href="#" class="catalog-item__title">Санаторий «Якты-Куль»</a>
                    <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
                      <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
                    </a>
                  </div>
                  <div class="catalog-item__destinations">
                    <a href="#" class="catalog-item__destination">Урал</a>
                    <a href="#" class="catalog-item__destination">Башкирия</a>
                    <a href="#" class="catalog-item__destination">озеро Банное</a>
                  </div>
                  <p itemprop="description" class="catalog-item__text">
                    Санаторий «Якты-Куль» расположен в Абзелиловском районе республики Башкортостан, в живописном месте, на берегу озера Банное. Санаторий расположен на высоте 450 м над уровнем моря и
                    считается низкогорным курортом.
                  </p>
                  <ul class="catalog-item__categories">
                    <li class="catalog-item__category catalog-item__category--ski">Горные лыжи</li>
                    <li class="catalog-item__category catalog-item__category--poolclose">Крытый бассейн</li>
                    <li class="catalog-item__category catalog-item__category--child">Детский отдых</li>
                  </ul>
                  <div class="catalog-item__buttons">
                    <button class="catalog-item__button--booking link--grey">Забронировать в 1 клик</button>
                    <button class="catalog-item__button--payment button--red">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.458374, 59.154063]" data-id="6">
              <div class="catalog-item__wrapper">
                <a href="images/content/catalog-7.png" class="catalog-item__img">
                  <img itemprop="image" src="images/content/catalog-7.png" alt="photo" />
                </a>
                <div class="catalog-item__info">
                  <div class="catalog-item__top">
                    <a itemprop="name" href="#" class="catalog-item__title">Санаторий «Якты-Куль»</a>
                    <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
                      <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
                    </a>
                  </div>
                  <div class="catalog-item__destinations">
                    <a href="#" class="catalog-item__destination">Урал</a>
                    <a href="#" class="catalog-item__destination">Башкирия</a>
                    <a href="#" class="catalog-item__destination">озеро Банное</a>
                  </div>
                  <p itemprop="description" class="catalog-item__text">
                    Санаторий «Якты-Куль» расположен в Абзелиловском районе республики Башкортостан, в живописном месте, на берегу озера Банное. Санаторий расположен на высоте 450 м над уровнем моря и
                    считается низкогорным курортом.
                  </p>
                  <ul class="catalog-item__categories">
                    <li class="catalog-item__category catalog-item__category--ski">Горные лыжи</li>
                    <li class="catalog-item__category catalog-item__category--poolclose">Крытый бассейн</li>
                    <li class="catalog-item__category catalog-item__category--child">Детский отдых</li>
                  </ul>
                  <div class="catalog-item__buttons">
                    <button class="catalog-item__button--booking link--grey">Забронировать в 1 клик</button>
                    <button class="catalog-item__button--payment button--red">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.383309, 58.933985]" data-id="7">
              <div class="catalog-item__wrapper">
                <a href="images/content/catalog-8.png" class="catalog-item__img">
                  <img src="images/content/catalog-8.png" alt="photo" />
                </a>
                <div class="catalog-item__info">
                  <div class="catalog-item__top">
                    <a itemprop="name" href="#" class="catalog-item__title">Санаторий «Якты-Куль»</a>
                    <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
                      <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
                    </a>
                  </div>
                  <div class="catalog-item__destinations">
                    <a href="#" class="catalog-item__destination">Урал</a>
                    <a href="#" class="catalog-item__destination">Башкирия</a>
                    <a href="#" class="catalog-item__destination">озеро Банное</a>
                  </div>
                  <p itemprop="description" class="catalog-item__text">
                    Санаторий «Якты-Куль» расположен в Абзелиловском районе республики Башкортостан, в живописном месте, на берегу озера Банное. Санаторий расположен на высоте 450 м над уровнем моря и
                    считается низкогорным курортом.
                  </p>
                  <ul class="catalog-item__categories">
                    <li class="catalog-item__category catalog-item__category--ski">Горные лыжи</li>
                    <li class="catalog-item__category catalog-item__category--poolclose">Крытый бассейн</li>
                    <li class="catalog-item__category catalog-item__category--child">Детский отдых</li>
                  </ul>
                  <div class="catalog-item__buttons">
                    <button class="catalog-item__button--booking link--grey">Забронировать в 1 клик</button>
                    <button class="catalog-item__button--payment button--red">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <button class="catalog-more link--grey">Показать еще</button>
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
  </div>
  <section class="main-form">
    <div class="container">
      <div class="main-form__wrapper">
        <div class="main-form__info">
          <h2 class="main-form__title">Затрудняетесь с выбором?</h2>
          <p class="main-form__text">Оставьте свой телефон и мы вам поможем</p>
        </div>
        <form class="main-form__box">
          <label class="input-wrap main-form__input">
            <input name="name" type="text" data-rules="required" placeholder="Ваше имя" required />
          </label>
          <label class="input-wrap main-form__input">
            <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" required />
          </label>
          <button class="main-form__button button--red" type="submit">Консультация</button>
          <label class="main-form__label">
            <input class="main-form__checkbox" type="checkbox" required />
            Я ознакомился с политикой конфиденциальности и согласен с условиями обработки персональных данных
          </label>
        </form>
      </div>
    </div>
  </section>
  <div class="sanatoriums-wrapper">
    <div class="container">
      <p class="sanatoriums__text">
        Круглый год санатории Урала принимают отдыхающих. Часто, чтобы получить максимальную пользу, люди совмещают отдых и лечение в санаториях Урала, ведь здесь можно поправить здоровье по нужному
        лечебному медицинскому профилю и отлично отдохнуть! Цены на санатории доступные. Постоянно в течение года проходят акции.
      </p>
      <p class="sanatoriums__text">На этой странице представлен список наиболее востребованных санаториев Урала: Челябинской и Свердловской области, Башкирии, а так же близлежащих регионов.</p>
    </div>
  </div>
  <section class="advantages advantages--grey">
    <div class="container">
      <h2 class="advantages__title">
        Почему у нас <br />
        <span>выгодно бронировать путевки</span>
      </h2>
      <ul class="advantages-list">
        <li class="advantages__item">
          <img class="advantages__item-img" src="images/icons/money.svg" alt="money" />
          <h5 class="advantages__item-title">Гарантия лучшей цены</h5>
          <p class="advantages__item-text">Тарифы и эксклюзивные акции поступают в нашу систему бронирования напрямую из объектов размещения</p>
        </li>
        <li class="advantages__item">
          <img class="advantages__item-img" src="images/icons/laptop.svg" alt="laptop" />
          <h5 class="advantages__item-title">Легкий подбор</h5>
          <p class="advantages__item-text">Все лучшие санатории/курорты в единой системе онлайн - бронирования</p>
        </li>
        <li class="advantages__item">
          <img class="advantages__item-img" src="images/icons/hours.svg" alt="hours" />
          <h5 class="advantages__item-title">Удобный сервис 24/7</h5>
          <p class="advantages__item-text">Бесплатная отмена бронирования, выгрузка всех документов в личном кабинете</p>
        </li>
        <li class="advantages__item">
          <img class="advantages__item-img" src="images/icons/present.svg" alt="present" />
          <h5 class="advantages__item-title">Бонусная программа</h5>
          <p class="advantages__item-text">За каждую поездку вы получаете бонусы на последующие заезды по любым направлениям</p>
        </li>
      </ul>
    </div>
  </section>
  <section class="reviews">
    <div class="container">
      <h2 class="reviews__title">
        Последние отзывы <br />
        клиентов об отдыхе
      </h2>
      <div class="review-wrapper">
        <div class="review">
          <div class="review-top">
            <div class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
              <span class="review__name">Данил Самигуллин</span>
              <p class="review__description">Оздоровление с меленькими детьми в июне 2021 г.</p>
            </div>
          </div>
          <div class="review-content">
            <ul class="review-grade">
              <li class="review-grade__item review-grade__comfort">Комфорт - <span>4</span></li>
              <li class="review-grade__item review-grade__staff">Персонал - <span>8</span></li>
              <li class="review-grade__item review-grade__place">Расположение - <span>9</span></li>
              <li class="review-grade__item review-grade__convenience">Удобства - <span>7</span></li>
              <li class="review-grade__item review-grade__clean">Чистота - <span>4</span></li>
              <li class="review-grade__item review-grade__price">Цена/качество - <span>5</span></li>
            </ul>
            <p class="review__text">
              Общее впечатление- на "троечку", так как в былые годы был какой-то "лоск"санатория, сейчас-несколько неуютно и скучновато; в номерах- запах табака, до нас скорее всего отдыхающие курили
              в номере, да и сейчас сотрудники и отдыхающие курят на территории санатория, питание- нет зелени и нет разнообразия, ребенок вообще не мог есть- не вкусно было; сервис -
              неудовлетворительно: при небольшой численности отдыхающих очереди при оказании некоторых услуг, услуги начинают оказывать только после какой- ежедневной оперативки,которая заканчивается
              только к 9-30;в бассейне- вода холодная и сквозники, ЛФК нет почему-то совсем, территория- молодцы! содержат и стараются, природа только и заслуживает высшей похвалы. Вообщем, видно, что
              пандемия здорово "потрепала" санаторий-очень много сокращений, оставшиеся сотрудники не успевают обслуживать даже небольшое количество отдыхающих.
            </p>
            <div class="review-bottom">
              <div class="review-buttons">
                <button class="review__button">Читать отзыв полностью ↓</button>
                <button class="review__button review__button--hidden">Свернуть отзыв ↑</button>
              </div>
              <span class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="review-top">
            <div class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
              <span class="review__name">Данил Самигуллин</span>
              <p class="review__description">Оздоровление с меленькими детьми в июне 2021 г.</p>
            </div>
          </div>
          <div class="review-content">
            <ul class="review-grade">
              <li class="review-grade__item review-grade__comfort">Комфорт - <span>4</span></li>
              <li class="review-grade__item review-grade__staff">Персонал - <span>8</span></li>
              <li class="review-grade__item review-grade__place">Расположение - <span>9</span></li>
              <li class="review-grade__item review-grade__convenience">Удобства - <span>7</span></li>
              <li class="review-grade__item review-grade__clean">Чистота - <span>4</span></li>
              <li class="review-grade__item review-grade__price">Цена/качество - <span>5</span></li>
            </ul>
            <p class="review__text">
              Общее впечатление- на "троечку", так как в былые годы был какой-то "лоск"санатория, сейчас-несколько неуютно и скучновато; в номерах- запах табака, до нас скорее всего отдыхающие курили
              в номере, да и сейчас сотрудники и отдыхающие курят на территории санатория, питание- нет зелени и нет разнообразия, ребенок вообще не мог есть- не вкусно было; сервис -
              неудовлетворительно: при небольшой численности отдыхающих очереди при оказании некоторых услуг, услуги начинают оказывать только после какой- ежедневной оперативки,которая заканчивается
              только к 9-30;в бассейне- вода холодная и сквозники, ЛФК нет почему-то совсем, территория- молодцы! содержат и стараются, природа только и заслуживает высшей похвалы. Вообщем, видно, что
              пандемия здорово "потрепала" санаторий-очень много сокращений, оставшиеся сотрудники не успевают обслуживать даже небольшое количество отдыхающих.
            </p>
            <div class="review-bottom">
              <div class="review-buttons">
                <button class="review__button">Читать отзыв полностью ↓</button>
                <button class="review__button review__button--hidden">Свернуть отзыв ↑</button>
              </div>
              <span class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="review-top">
            <div class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
              <span class="review__name">Данил Самигуллин</span>
              <p class="review__description">Оздоровление с меленькими детьми в июне 2021 г.</p>
            </div>
          </div>
          <div class="review-content">
            <ul class="review-grade">
              <li class="review-grade__item review-grade__comfort">Комфорт - <span>4</span></li>
              <li class="review-grade__item review-grade__staff">Персонал - <span>8</span></li>
              <li class="review-grade__item review-grade__place">Расположение - <span>9</span></li>
              <li class="review-grade__item review-grade__convenience">Удобства - <span>7</span></li>
              <li class="review-grade__item review-grade__clean">Чистота - <span>4</span></li>
              <li class="review-grade__item review-grade__price">Цена/качество - <span>5</span></li>
            </ul>
            <p class="review__text">
              Общее впечатление- на "троечку", так как в былые годы был какой-то "лоск"санатория, сейчас-несколько неуютно и скучновато; в номерах- запах табака, до нас скорее всего отдыхающие курили
              в номере, да и сейчас сотрудники и отдыхающие курят на территории санатория, питание- нет зелени и нет разнообразия, ребенок вообще не мог есть- не вкусно было; сервис -
              неудовлетворительно: при небольшой численности отдыхающих очереди при оказании некоторых услуг, услуги начинают оказывать только после какой- ежедневной оперативки,которая заканчивается
              только к 9-30;в бассейне- вода холодная и сквозники, ЛФК нет почему-то совсем, территория- молодцы! содержат и стараются, природа только и заслуживает высшей похвалы. Вообщем, видно, что
              пандемия здорово "потрепала" санаторий-очень много сокращений, оставшиеся сотрудники не успевают обслуживать даже небольшое количество отдыхающих.
            </p>
            <div class="review-bottom">
              <div class="review-buttons">
                <button class="review__button">Читать отзыв полностью ↓</button>
                <button class="review__button review__button--hidden">Свернуть отзыв ↑</button>
              </div>
              <span class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal">
    <div class="modal-overlay"></div>
    <div class="modal-dialog modal-booking__dialog">
      <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
      <h4 class="modal-dialog__title">Забронировать</h4>
      <p class="modal-dialog__name">Санаторий «Якты-Куль»</p>
      <p class="modal-dialog__text">Мы зададим несколько вопросов по&nbsp;телефону и забронируем для вас место</p>
      <form action="" class="modal-form">
        <label class="input-wrap modal-form-input">
          <input name="name" type="text" placeholder="Ваше ФИО*" class="modal-form__input--name" data-rules="required" required />
        </label>
        <label class="input-wrap modal-form-input">
          <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона*" class="modal-form__input--tel" data-rules="required, tel" required />
        </label>
        <button type="submit" class="modal-form__button button--red">Забронировать в 1 клик</button>
        <label class="main-form__label">
          <input class="main-form__checkbox" type="checkbox" required />
          Я ознакомился с политикой конфиденциальности
        </label>
      </form>
    </div>
  </div>
</main>

<?php include("footer.html"); ?>
