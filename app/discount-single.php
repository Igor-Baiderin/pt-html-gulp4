<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Акции для всех</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Акции и скидки на путевки</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Акции для всех</span>
        </li>
      </ul>
      <form action="" class="discount-form form">
        <h4 class="discount-form__title">Поиск акции</h4>
        <div class="form-wrapper">
          <div class="hero-form__input hero-form__input--map">
            <input name="place" type="text" placeholder="Место, куда хотите поехать" autocomplete="on" />
          </div>
          <!-- Одиночный календарь -->
          <div class="hero-form__input hero-form__input--calendar">
            <input name="arrival" id="input-single-calendar" data-start='15.10.2021' data-min="2021-10-05" type="text" placeholder="с 11.06.21 — по 18.06.21" />
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
                  <input type="number" class="people-dropdown__input people-dropdown__input--children" value="0" name="children" data-max="5" data-min="0" />
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
      </form>
    </div>
  </div>
  <div class="discount">
    <div class="container">
      <div class="discount-inner">
        <aside class="discount-aside">
          <a href="#" class="aside-banner">
            <img src="images/discount-1.png" alt="banner" class="aside-banner__img" />
          </a>
          <form action="" class="aside-form">
            <h4 class="aside-form__title">Возникли сложности?</h4>
            <p class="aside-form__text">Мы можем ваc проконсультировать по&nbsp;телефону и потом вы примете решение</p>
            <label class="input-wrap aside-form__input">
        <input name="name" type="text" placeholder="Ваше имя" data-rules="required" required />
      </label>
            <label class="input-wrap aside-form__input">
              <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" required />
            </label>
            <button type="submit" class="aside-form__button button--red">Проконсультироваться</button>
            <label class="main-form__label">
              <input class="main-form__checkbox" type="checkbox" required />
              Я ознакомился с политикой конфиденциальности
            </label>
          </form>
        </aside>
        <div class="discount-content">
          <p class="discount__text">В данном разделе вы найдете информацию обо всех текущих акциях, скидках и спецпредложениях. Планируйте свой отдых с выгодой!</p>
          <div class="discount-list">
            <div class="discount-wrapper">
              <div class="discount-item discount-item--yellow">
                <a href="#" class="discount-item__wrapper">
                  <img src="images/content/discredit-1.png" alt="" class="discount-item__img" />
                </a>
                <div class="discount-item__box">
                  <p class="discount-item__title">
                    Санаторий <br />
                    "Карагайский Бор"
                  </p>
                  <div class="discount-destination">
                    <a href="#" class="discount-destination__item">Урал</a>
                    <a href="#" class="discount-destination__item">Башкирия</a>
                    <a href="#" class="discount-destination__item">озеро Банное</a>
                  </div>
                  <p class="discount-item__text">
                    Скидка 15% <br />
                    <span class="discount-item__date">до 22.08.21</span>
                  </p>
                  <div class="discount-item__bottom">
                    <a href="#" target="_blank" class="discount-item__button">Забронировать</a>
                    <button class="discount-item__link">Подробнее ↓</button>
                  </div>
                </div>
              </div>
              <div class="tariffs-bottom tariffs-bottom--hidden">
                <div class="tariffs-bottom__title tariffs-bottom__title--main">Можно любой заголовок написать</div>
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
                <button class="tariffs-bottom__button">Свернуть детали ↑</button>
              </div>
            </div>

            <div class="discount-wrapper">
              <div class="discount-item discount-item--green">
                <a href="#" class="discount-item__wrapper">
                  <img src="images/content/discredit-2.png" alt="" class="discount-item__img" />
                </a>
                <div class="discount-item__box">
                  <p class="discount-item__title">
                    Оздоровительный комплекс <br />
                    "Уральские зори"
                  </p>
                  <div class="discount-destination">
                    <a href="#" class="discount-destination__item">Урал</a>
                    <a href="#" class="discount-destination__item">Башкирия</a>
                    <a href="#" class="discount-destination__item">озеро Банное</a>
                  </div>
                  <p class="discount-item__text">
                    от 26 300 руб <br />
                    <span class="discount-item__date">до 28.08.21</span>
                  </p>
                  <div class="discount-item__bottom">
                    <a href="#" target="_blank" class="discount-item__button">Забронировать</a>
                    <button class="discount-item__link">Подробнее ↓</button>
                  </div>
                </div>
              </div>
              <div class="tariffs-bottom tariffs-bottom--hidden">
                <div class="tariffs-bottom__title tariffs-bottom__title--main">Можно любой заголовок написать</div>
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
                <button class="tariffs-bottom__button">Свернуть детали ↑</button>
              </div>
            </div>

            <div class="discount-wrapper">
              <div class="discount-item discount-item--red">
                <a href="#" class="discount-item__wrapper">
                  <img src="images/content/discredit-3.png" alt="" class="discount-item__img" />
                </a>
                <div class="discount-item__box">
                  <p class="discount-item__title">
                    Курорт <br />
                    "Увильды"
                  </p>
                  <div class="discount-destination">
                    <a href="#" class="discount-destination__item">Урал</a>
                    <a href="#" class="discount-destination__item">Башкирия</a>
                    <a href="#" class="discount-destination__item">озеро Банное</a>
                  </div>
                  <p class="discount-item__text">
                    Скидка 15% <br />
                    <span class="discount-item__date">до 31.03.2021</span>
                  </p>
                  <div class="discount-item__bottom">
                    <a href="#" target="_blank" class="discount-item__button">Забронировать</a>
                    <button class="discount-item__link">Подробнее ↓</button>
                  </div>
                </div>
              </div>
              <div class="tariffs-bottom tariffs-bottom--hidden">
                <div class="tariffs-bottom__title tariffs-bottom__title--main">Можно любой заголовок написать</div>
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
                <button class="tariffs-bottom__button">Свернуть детали ↑</button>
              </div>
            </div>
            <div class="discount-wrapper">
              <div class="discount-item discount-item--yellow">
                <a href="#" class="discount-item__wrapper">
                  <img src="images/content/discredit-1.png" alt="" class="discount-item__img" />
                </a>
                <div class="discount-item__box">
                  <p class="discount-item__title">
                    Санаторий <br />
                    "Карагайский Бор"
                  </p>
                  <div class="discount-destination">
                    <a href="#" class="discount-destination__item">Урал</a>
                    <a href="#" class="discount-destination__item">Башкирия</a>
                    <a href="#" class="discount-destination__item">озеро Банное</a>
                  </div>
                  <p class="discount-item__text">
                    Скидка 15% <br />
                    <span class="discount-item__date">до 22.08.21</span>
                  </p>
                  <div class="discount-item__bottom">
                    <a href="#" target="_blank" class="discount-item__button">Забронировать</a>
                    <button class="discount-item__link">Подробнее ↓</button>
                  </div>
                </div>
              </div>
              <div class="tariffs-bottom tariffs-bottom--hidden">
                <div class="tariffs-bottom__title tariffs-bottom__title--main">Можно любой заголовок написать</div>
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
                <button class="tariffs-bottom__button">Свернуть детали ↑</button>
              </div>
            </div>
            <div class="discount-wrapper">
              <div class="discount-item discount-item--green">
                <a href="#" class="discount-item__wrapper">
                  <img src="images/content/discredit-2.png" alt="" class="discount-item__img" />
                </a>
                <div class="discount-item__box">
                  <p class="discount-item__title">
                    Оздоровительный комплекс <br />
                    "Уральские зори"
                  </p>
                  <div class="discount-destination">
                    <a href="#" class="discount-destination__item">Урал</a>
                    <a href="#" class="discount-destination__item">Башкирия</a>
                    <a href="#" class="discount-destination__item">озеро Банное</a>
                  </div>
                  <p class="discount-item__text">
                    от 26 300 руб <br />
                    <span class="discount-item__date">до 28.08.21</span>
                  </p>
                  <div class="discount-item__bottom">
                    <a href="#" target="_blank" class="discount-item__button">Забронировать</a>
                    <button class="discount-item__link">Подробнее ↓</button>
                  </div>
                </div>
              </div>
              <div class="tariffs-bottom tariffs-bottom--hidden">
                <div class="tariffs-bottom__title tariffs-bottom__title--main">Можно любой заголовок написать</div>
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
                <button class="tariffs-bottom__button">Свернуть детали ↑</button>
              </div>
            </div>
            <div class="discount-wrapper">
              <div class="discount-item discount-item--blue">
                <a href="#" class="discount-item__wrapper">
                  <img src="images/content/discredit-3.png" alt="" class="discount-item__img" />
                </a>
                <div class="discount-item__box">
                  <p class="discount-item__title">
                    Курорт <br />
                    "Увильды"
                  </p>
                  <div class="discount-destination">
                    <a href="#" class="discount-destination__item">Урал</a>
                    <a href="#" class="discount-destination__item">Башкирия</a>
                    <a href="#" class="discount-destination__item">озеро Банное</a>
                  </div>
                  <p class="discount-item__text">
                    Скидка 15% <br />
                    <span class="discount-item__date">до 31.03.2021</span>
                  </p>
                  <div class="discount-item__bottom">
                    <a href="#" target="_blank" class="discount-item__button">Забронировать</a>
                    <button class="discount-item__link">Подробнее ↓</button>
                  </div>
                </div>
              </div>
              <div class="tariffs-bottom tariffs-bottom--hidden">
                <div class="tariffs-bottom__title tariffs-bottom__title--main">Можно любой заголовок написать</div>
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
                <button class="tariffs-bottom__button">Свернуть детали ↑</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <a href="#" class="aside-banner aside-banner--mobile">
      <img src="images/discount-1.png" alt="banner" class="aside-banner__img" />
    </a>
    <form action="" class="aside-form aside-form--mobile">
      <h4 class="aside-form__title">Возникли сложности?</h4>
      <p class="aside-form__text">Мы можем ваc проконсультировать по&nbsp;телефону и потом вы примете решение</p>
     <label class="input-wrap aside-form__input">
        <input name="name" type="text" placeholder="Ваше имя" data-rules="required" required />
      </label>
      <label class="input-wrap aside-form__input">
        <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" required />
      </label>
      <button type="submit" class="aside-form__button button--red">Проконсультироваться</button>
      <label class="main-form__label">
        <input class="main-form__checkbox" type="checkbox" required />
        Я ознакомился с политикой конфиденциальности
      </label>
    </form>
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
</main>

<?php include("footer.html"); ?>
