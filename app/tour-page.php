<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Путевки в санатории, дома отдыха и отели</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" class="breadcrumbs__list-item">
          <span itemprop="name">Путевки в санатории, дома отдыха и отели</span>
        </li>
      </ul>
     <form action="" class="tour-form form">
        <div class="form-wrapper">
          <div class="hero-form__input hero-form__input--region">
            <input name="region" type="text"  placeholder="Выберите регионы" />
            <ul class="region-list">
              <li class="region-list__item">
                <label data-index="1" class="region-label">
                  <input type="checkbox" class="region-checkbox" />
                  Урал, Башкирия
                </label>
                <ul class="sublist">
                  <li class="region-list__item">
                    <label data-index="2" class="region-label">
                      <input type="checkbox" class="region-checkbox" />
                      Абзаково
                    </label>
                  </li>
                  <li class="region-list__item">
                    <label data-index="3" class="region-label">
                      <input type="checkbox" class="region-checkbox" />
                      Банное
                    </label>
                  </li>
                </ul>
              </li>
              <li class="region-list__item">
                <label data-index="4" class="region-label">
                  <input type="checkbox" class="region-checkbox" />
                  Урал, Курганская область
                </label>
              </li>
              <li class="region-list__item">
                <label data-index="5" class="region-label">
                  <input type="checkbox" class="region-checkbox" />
                  Урал, Пермский край
                </label>
              </li>
              <li class="region-list__item">
                <label data-index="6" class="region-label">
                  <input type="checkbox" class="region-checkbox" />
                  Урал, Свердловская область
                </label>
              </li>
              <li class="region-list__item">
                <label data-index="7" class="region-label">
                  <input type="checkbox" class="region-checkbox" />
                  Урал, Челябинская область
                </label>
              </li>
            </ul>
          </div>
          <div class="hero-form__input hero-form__input--sanatorium">
            <input namee="sanatorium" type="text" placeholder="Выберите санатории" />
            <ul class="sanatoriums-list">
              <li class="sanatoriums-list__item">
                <label data-index='1' class="sanatoriums-label">
                  <input type="checkbox" class="sanatoriums-checkbox" />
                  Санаторий "Якты-Куль"
                </label>
              </li>
              <li class="sanatoriums-list__item">
                <label data-index='2' class="sanatoriums-label">
                  <input type="checkbox" class="sanatoriums-checkbox" />
                  Санаторий "Юбилейный"
                </label>
              </li>
              <li class="sanatoriums-list__item">
                <label data-index='3' class="sanatoriums-label">
                  <input type="checkbox" class="sanatoriums-checkbox" />
                  Оздоровительный комплекс "Уральские зори"
                </label>
              </li>
              <li class="sanatoriums-list__item">
                <label data-index='4' class="sanatoriums-label">
                  <input type="checkbox" class="sanatoriums-checkbox" />
                  Курорт "Самоцвет"
                </label>
              </li>
              <li class="sanatoriums-list__item">
                <label data-index='5' class="sanatoriums-label">
                  <input type="checkbox" class="sanatoriums-checkbox" />
                  Санаторий "Жемчужина Зауралья"
                </label>
              </li>
              <li class="sanatoriums-list__item">
                <label data-index='6' class="sanatoriums-label">
                  <input type="checkbox" class="sanatoriums-checkbox" />
                  Санаторий "Васильевский"
                </label>
              </li>
              <li class="sanatoriums-list__item">
                <label data-index='7'  class="sanatoriums-label">
                  <input type="checkbox" class="sanatoriums-checkbox" />
                  Санаторий "Белый камень"
                </label>
              </li>
            </ul>
          </div>
          <!-- Одиночный календарь -->
          <!-- <div class="hero-form__input hero-form__input--calendar">
            <input id="input-single-calendar" type="text" placeholder="с 11.06.21 — по 18.06.21" />
          </div> -->
          <!-- двойной календарь -->
          <div class="hero-form__input hero-form__input--calendar">
            <input name="calendar" id="input-double-calendar" data-start="15.10.21" data-end="25.10.21" data-min="2021-10-05" type="text" placeholder="с 11.06.21 — по 18.06.21" />
          </div>
          <!-- выпадашка с кол-вом человек -->
          <div class="hero-form__input hero-form__input--people">
            <input name="people" id="input-people" type="text" placeholder="2 взрослых" required autocomplete="off" />
            <div class="people-dropdown">
              <div class="people-dropdown__row">
                <span class="people-dropdown__heading">Взрослых</span>
                <div class="people-dropdown__interactive">
                  <button type="button" class="button minus"></button>
                  <input type="number" class="people-dropdown__input" value="2" name="adult" data-max="5" data-min="1" />
                  <button type="button" class="button plus"></button>
                </div>
              </div>
              <div class="people-dropdown__row">
                <span class="people-dropdown__heading">Детей</span>
                <div class="people-dropdown__interactive">
                  <button type="button" class="button minus"></button>
                  <input name="children" type="number" class="people-dropdown__input people-dropdown__input--children" value="0" data-max="5" data-min="0" />
                  <button type="button" class="button plus"></button>
                </div>
              </div>
              <div class="people-dropdown__alert" style="display: none">
                <span>Укажите возраст детей</span>
              </div>
            </div>
          </div>
          <button class="tour-form__button button--red" type="submit">Рассчитать</button>
        </div>
        <div class="tags">
          <div class="tags-region">
            <h3 class="tags__title">Вы выбрали регионы:</h3>
            <ul class="tags-list">
              <!-- <li class="tags-list__item">
                <p class="tags-list__text">Урал, Пермский край</p>
                <img src="images/icons/close-tags.svg" alt="" class="tags-close" />
              </li>
              <li class="tags-list__item">
                <p class="tags-list__text">Урал, Челябинская область</p>
                <img src="images/icons/close-tags.svg" alt="" class="tags-close" />
              </li>
              <li class="tags-list__item">
                <p class="tags-list__text">Балашиха, Московская область</p>
                <img src="images/icons/close-tags.svg" alt="" class="tags-close" />
              </li> -->
            </ul>
          </div>
          <div class="tags-sanatoriums">
            <h3 class="tags__title">Вы выбрали санатории/отели:</h3>
            <ul class="tags-list">
              <!-- <li class="tags-list__item">
                <p class="tags-list__text">Санаторий "Якты-Куль"</p>
                <img src="images/icons/close-tags.svg" alt="" class="tags-close" />
              </li>
              <li class="tags-list__item">
                <p class="tags-list__text">Санаторий "Юбилейный"</p>
                <img src="images/icons/close-tags.svg" alt="" class="tags-close" />
              </li> -->
            </ul>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="catalog-sanatorium">
    <div class="container">
      <div class="catalog__inner">
        <aside class="catalog__inner-aside aside-filter">
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
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item catalog-item--new map-place" data-coords="[53.383309, 58.933985]" data-id="1">
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
                </div>
              </div>
              <div class="tariffs">
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="3"></div>
                          <div class="tariffs-info__children" data-child="2"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--last">
                        <img class="tariffs-tags__img" src="images/icons/tag-1.svg" alt="icon" />
                        <p>Осталось 2 номера</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box-wrap">
                        <div class="tariffs-tags tariffs-tags--mobile">
                          <div class="tariffs-tags__item tariffs-tags__item--last">
                            <img class="tariffs-tags__img" src="images/icons/tag-1.svg" alt="icon" />
                            <p>Осталось 2 номера</p>
                          </div>
                        </div>
                        <span class="tariffs-item__price tariffs-item__price--old">4 900 руб</span>
                      </div>
                      <button class="tariffs-item__button button--green">3 000 руб</button>
                    </div>
                  </div>
                </div>
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="2"></div>
                          <div class="tariffs-info__children" data-child="1"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--instock">
                        <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                        <p>В наличии</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--instock">
                              <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                              <p>В наличии</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--discount">акция</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-item__bottom">
                <p class="catalog-item__cost">номера от: <span>3 000 руб</span></p>
                <a href="#" class="catalog-item__link button--red">Посмотреть все номера</a>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item catalog-item--hit map-place" data-coords="[53.470253, 59.094660]" data-id="2">
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
                    <li class="catalog-item__category catalog-item__category--openpool">Открытый бассейн</li>
                    <li class="catalog-item__category catalog-item__category--bar">Бар</li>
                    <li class="catalog-item__category catalog-item__category--beach">Собственный пляж</li>
                  </ul>
                </div>
              </div>
              <div class="tariffs">
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="2"></div>
                          <div class="tariffs-info__children" data-child="1"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--instock">
                        <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                        <p>В наличии</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--instock">
                              <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                              <p>В наличии</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--discount">акция</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="1"></div>
                          <div class="tariffs-info__children" data-child="2"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--request">
                        <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                        <p>Под запрос</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--request">
                              <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                              <p>Осталось 2 номера</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--old">4 900 руб</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-item__bottom">
                <p class="catalog-item__cost">номера от: <span>3 000 руб</span></p>
                <a href="#" class="catalog-item__link button--red">Посмотреть все номера</a>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item catalog-item--discount map-place" data-coords="[53.459190, 59.226496]" data-id="3">
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
                    <li class="catalog-item__category catalog-item__category--matsesta">Мацеста</li>
                    <li class="catalog-item__category catalog-item__category--family">Семейный номер</li>
                    <li class="catalog-item__category catalog-item__category--hamam">Баня/Хамам</li>
                  </ul>
                </div>
              </div>
              <div class="tariffs">
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="3"></div>
                          <div class="tariffs-info__children" data-child="2"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--last">
                        <img class="tariffs-tags__img" src="images/icons/tag-1.svg" alt="icon" />
                        <p>Осталось 2 номера</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box-wrap">
                        <div class="tariffs-tags tariffs-tags--mobile">
                          <div class="tariffs-tags__item tariffs-tags__item--last">
                            <img class="tariffs-tags__img" src="images/icons/tag-1.svg" alt="icon" />
                            <p>Осталось 2 номера</p>
                          </div>
                        </div>
                        <span class="tariffs-item__price tariffs-item__price--old">4 900 руб</span>
                      </div>
                      <button class="tariffs-item__button button--green">3 000 руб</button>
                    </div>
                  </div>
                </div>
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="2"></div>
                          <div class="tariffs-info__children" data-child="1"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--instock">
                        <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                        <p>В наличии</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--instock">
                              <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                              <p>В наличии</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--discount">акция</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-item__bottom">
                <p class="catalog-item__cost">номера от: <span>3 000 руб</span></p>
                <a href="#" class="catalog-item__link button--red">Посмотреть все номера</a>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.538617, 59.154398]" data-id="4">
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
                    <li class="catalog-item__category catalog-item__category--gym">Тренажерный зал</li>
                    <li class="catalog-item__category catalog-item__category--spa">SPA-отдых</li>
                    <li class="catalog-item__category catalog-item__category--child">Детский отдых</li>
                  </ul>
                </div>
              </div>
              <div class="tariffs">
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="2"></div>
                          <div class="tariffs-info__children" data-child="1"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--instock">
                        <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                        <p>В наличии</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--instock">
                              <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                              <p>В наличии</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--discount">акция</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="1"></div>
                          <div class="tariffs-info__children" data-child="2"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--request">
                        <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                        <p>Под запрос</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--request">
                              <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                              <p>Осталось 2 номера</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--old">4 900 руб</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-item__bottom">
                <p class="catalog-item__cost">номера от: <span>3 000 руб</span></p>
                <a href="#" class="catalog-item__link button--red">Посмотреть все номера</a>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.536902, 59.009867]" data-id="5">
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
                </div>
              </div>
              <div class="tariffs">
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="2"></div>
                          <div class="tariffs-info__children" data-child="1"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--instock">
                        <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                        <p>В наличии</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--instock">
                              <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                              <p>В наличии</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--discount">акция</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="1"></div>
                          <div class="tariffs-info__children" data-child="2"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--request">
                        <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                        <p>Под запрос</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--request">
                              <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                              <p>Осталось 2 номера</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--old">4 900 руб</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.458374, 59.154063]" data-id="6">
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
                    <li class="catalog-item__category catalog-item__category--ski">Горные лыжи</li>
                    <li class="catalog-item__category catalog-item__category--poolclose">Крытый бассейн</li>
                    <li class="catalog-item__category catalog-item__category--child">Детский отдых</li>
                  </ul>
                </div>
              </div>
              <div class="tariffs">
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="2"></div>
                          <div class="tariffs-info__children" data-child="1"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--instock">
                        <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                        <p>В наличии</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--instock">
                              <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                              <p>В наличии</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--discount">акция</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="1"></div>
                          <div class="tariffs-info__children" data-child="2"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--request">
                        <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                        <p>Под запрос</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--request">
                              <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                              <p>Осталось 2 номера</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--old">4 900 руб</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-item__bottom">
                <p class="catalog-item__cost">номера от: <span>3 000 руб</span></p>
                <a href="#" class="catalog-item__link button--red">Посмотреть все номера</a>
              </div>
            </li>
            <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="catalog-item map-place" data-coords="[53.383309, 58.933985]" data-id="7">
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
                    <li class="catalog-item__category catalog-item__category--ski">Горные лыжи</li>
                    <li class="catalog-item__category catalog-item__category--poolclose">Крытый бассейн</li>
                    <li class="catalog-item__category catalog-item__category--child">Детский отдых</li>
                  </ul>
                </div>
              </div>
              <div class="tariffs">
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="2"></div>
                          <div class="tariffs-info__children" data-child="1"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--instock">
                        <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                        <p>В наличии</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--instock">
                              <img class="tariffs-tags__img" src="images/icons/tag-2.svg" alt="icon" />
                              <p>В наличии</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--discount">акция</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tariffs-item">
                  <div class="tariffs-item__wrapper">
                    <div class="tariffs-item__main">
                      <button class="tariffs-item__title tariffs-item__title--underline">2-мест.Standart, можно написать более длинное название</button>
                      <h4 class="tariffs-item__title">Оздоровительная путевка для пенсионеров</h4>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021 - 08.07.2021 <span>(7 ночей)</span></p>
                        </div>
                        <div class="tariffs-info__food">
                          <p><span>Питание:</span> шведский стол</p>
                        </div>
                        <div class="tariffs-info__wrapper">
                          <p class="tariffs-info__text">Для:</p>
                          <div class="tariffs-info__people" data-people="1"></div>
                          <div class="tariffs-info__children" data-child="2"></div>
                        </div>
                      </div>
                    </div>
                    <div class="tariffs-tags">
                      <div class="tariffs-tags__item tariffs-tags__item--request">
                        <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                        <p>Под запрос</p>
                      </div>
                    </div>
                  </div>
                  <div class="tariffs-bottom tariffs-bottom--hidden">
                    <div class="tariffs-bottom__title">Включено:</div>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Завтрак, обед и ужин</li>
                      <li class="tariffs-bottom__item">Библиотека</li>
                      <li class="tariffs-bottom__item">Детская комната с воспитателем</li>
                    </ul>
                    <ul class="tariffs-bottom__list">
                      <li class="tariffs-bottom__item">Посещение открытого бассейна</li>
                      <li class="tariffs-bottom__item">Посещение оборудованного пляжа</li>
                      <li class="tariffs-bottom__item">Пользование инфраструктурой санатория</li>
                    </ul>
                    <div class="tariffs-bottom__title">Дополнительно:</div>
                    <p class="tariffs-bottom__text">
                      Низкий сезон-заказное меню, высокий сезон-Шведский стол <br />
                      Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения
                    </p>
                    <div class="tariffs-bottom__title">Отмена:</div>
                    <p class="tariffs-bottom__text">Бесплатная отмена до 17 июня</p>
                    <p class="tariffs-bottom__text tariffs-bottom__text--red">Обязательно нужно взять паспорт</p>
                  </div>
                  <div class="tariffs-item__bottom">
                    <button class="tariffs-item__details-primary tariffs-item__details button--grey">Посмотреть детали</button>
                    <button class="tariffs-item__details-secondary tariffs-item__details tariffs-item__details--hidden button--grey">Свернуть детали</button>
                    <div class="tariffs-item__box">
                      <div class="tariffs-item__box">
                        <div class="tariffs-item__box-wrap">
                          <div class="tariffs-tags tariffs-tags--mobile">
                            <div class="tariffs-tags__item tariffs-tags__item--request">
                              <img class="tariffs-tags__img" src="images/icons/tag-3.svg" alt="icon" />
                              <p>Осталось 2 номера</p>
                            </div>
                          </div>
                          <span class="tariffs-item__price tariffs-item__price--old">4 900 руб</span>
                        </div>
                        <button class="tariffs-item__button button--green">3 000 руб</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-item__bottom">
                <p class="catalog-item__cost">номера от: <span>3 000 руб</span></p>
                <a href="#" class="catalog-item__link button--red">Посмотреть все номера</a>
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
          <div class="modal modal-room">
            <div class="modal-overlay"></div>
            <div class="modal-dialog modal-room__dialog">
              <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
              <div class="modal-room__wrapper">
                <h3 class="modal-room__title--small">Заголовок</h3>
                <p class="modal-room__text">
                  Низкий сезон-заказное меню, высокий сезон-Шведский стол Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения Низкий сезон-заказное меню, высокий
                  сезон-Шведский стол Ребенок до трех лет принимается бесплатно без предоставления места, питания и леченияНизкий сезон-заказное меню, высокий сезон-Шведский стол
                </p>
                <h3 class="modal-room__title--small">Заголовок</h3>
                <p class="modal-room__text">
                  Низкий сезон-заказное меню, высокий сезон-Шведский стол Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения Низкий сезон-заказное меню, высокий
                  сезон-Шведский стол Ребенок до трех лет принимается бесплатно без предоставления места, питания и леченияНизкий сезон-заказное меню, высокий сезон-Шведский стол Низкий сезон-заказное
                  меню, высокий сезон-Шведский стол Ребенок до трех лет принимается бесплатно без предоставления места, питания и лечения Низкий сезон-заказное меню, высокий сезон-Шведский стол
                  Ребенок до трех лет принимается бесплатно без предоставления места, питания и леченияНизкий сезон-заказное меню, высокий сезон-Шведский стол
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tour-info">
    <div class="container">
      <p class="tour-info__text">
        В России отлично развита санаторно-курортная база. Первые заведения, использующие для лечения и оздоровления природные факторы, появились еще в 1741 году, по указу первого российского
        Императора Петра. Санатории активно развивались в советский период, и сейчас по всем регионам РФ работают лечебные учреждения, помогающие людям избавиться от хронических болезней, улучшить
        состояния, достичь стойкой ремиссии, восстановиться после тяжелых травм или серьезных операций.
      </p>
      <p class="tour-info__text">
        Практически каждый человек, кто пытался отправиться на лечение или искал подходящее заведение для реабилитации своих близких, сталкивался с проблемами. Несмотря на развитие интернета, расчет
        стоимости путевки в санатории – трудозатратное занятие. Как правило, на запросы в поисковиках выходят рекламные предложения от посредников или от самых известных и дорогих курортных заведений
        Урала и Башкортостана, которые, далеко не всегда специализируются на лечении нужной болезни.
      </p>
      <p class="tour-info__text">
        Нельзя рассчитывать на полезные рекомендации врачей из своей поликлиники. Лечебные учреждения сотрудничают с ограниченным кругом санаториев, чаще всего расположенных в том же регионе, которые
        не всегда специализируются на лечении определенной болезни.
      </p>
      <p class="tour-info__text">
        Между тем, в России существует множество санаториев, имеющих давние курортные традиции и располагающие современной лечебно-диагностической базой. Многие из них, особенно расположенные в
        Башкирии, на Урале или в Сибири, обеспечивают достойный уровень лечения, но эти заведения практически не известны за пределами своего региона.
      </p>
      <h4 class="tour-info__title">Как найти подходящий санаторий</h4>
      <p class="tour-info__text">
        В нашем каталоге собраны оздоровительные учреждения России. Расчет стоимости путевки занимает у пользователей пару минут. Для этого нужно просто воспользоваться удобной формой поиска, выбрать
        необходимое направление и посмотреть результаты выдачи.
      </p>
      <p class="tour-info__text">На сайте возможно:</p>

      <ul class="tour-info__list">
        <li class="tour-info__item">найти санаторий с нужной специализацией;</li>
        <li class="tour-info__item">выбрать оздоровительное учреждение в любом регионе Урала;</li>
        <li class="tour-info__item">рассчитать стоимость лечение в нужный период времени и выбрать оптимальное предложение.</li>
      </ul>
      <p class="tour-info__text">
        Мы постарались сделать поиск санаториев оптимально удобным для наших пользователей. Можно не только быстро найти лечебное заведение, но и рассчитать стоимость пребывания и лечение на
        предполагаемое время поездки. Это позволяет выбрать самое выгодное предложение по соотношению качество и цена.
      </p>
    </div>
  </div>
</main>

<?php include("footer.html"); ?>
