<?php include("header.html"); ?>

<main class="main">
  <section class="hero">
    <div class="container">
      <div class="hero-wrapper">
        <h1 class="hero__title">Санатории, пансионаты и&nbsp;отели на Урале и в Башкирии</h1>
        <form action="" class="hero-form form">
          <h4 class="hero-form__title">Быстро и просто найдите тур</h4>
          <div class="form-wrapper">
            <div class="hero-form__input hero-form__input--map">
              <input name="place" type="text" placeholder="Место, куда хотите поехать" autocomplete="on" />
            </div>
            <!-- двойной календарь -->
            <div class="hero-form__input hero-form__input--calendar">
              <input name="calendar" id="input-double-calendar" data-start="15.10.21" data-end="25.10.21" type="text" placeholder="с 11.06.2021 — по 18.06.2021" />
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
            <button class="hero-form__button button--red" type="submit">Найти</button>
          </div>
        </form>
        <ul class="hero-list">
          <li class="hero-list__item">
            <img class="hero-list__img" src="images/icons/price.svg" alt="price" />
            <p class="hero-list__text">
              Низкие цены <br />
              от санаториев
            </p>
          </li>
          <li class="hero-list__item">
            <img class="hero-list__img" src="images/icons/documents.svg" alt="documents" />
            <p class="hero-list__text">
              Вы полностью <br />
              контролируете все этапы
            </p>
          </li>
          <li class="hero-list__item">
            <img class="hero-list__img" src="images/icons/man.svg" alt="man" />
            <p class="hero-list__text">
              Наши сотрудники — эксперты <br />
              в санаторно-курортной отрасли
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="advantages">
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
  <div class="banner">
    <div class="container">
      <div class="banner-sliders">
        <div class="banner-slider">
          <a href="#" class="banner-slider__wrapper">
            <img class="banner-slider__img" src="images/banner-1.png" alt="banner" />
          </a>
          <div class="banner-slider__info">
            <h2 class="banner-slider__title">Новогодние туры</h2>
            <p class="banner-slider__text">Уже совсем скоро. Успейте забронировать!</p>
            <span class="banner-slider__span">туры на 2022 г</span>
            <a href="#" class="banner-slider__link link-text">Посмотреть все туры →</a>
          </div>
        </div>
        <div class="banner-slider">
          <a href="#" class="banner-slider__wrapper banner-slider__wrapper--blue">
            <img class="banner-slider__img" src="images/banner-2.png" alt="banner" />
          </a>
          <div class="banner-slider__info">
            <h2 class="banner-slider__title">За бензин платим мы!</h2>
            <p class="banner-slider__text">Никаких топливных сборов</p>
            <span class="banner-slider__span">до 10.08.21 г</span>
            <a href="#" class="banner-slider__link link-text">Подробнее об акции →</a>
          </div>
        </div>
        <div class="banner-slider">
          <a href="#" class="banner-slider__wrapper">
            <img class="banner-slider__img" src="images/banner-1.png" alt="banner" />
          </a>
          <div class="banner-slider__info">
            <h2 class="banner-slider__title">Новогодние туры</h2>
            <p class="banner-slider__text">Уже совсем скоро. Успейте забронировать!</p>
            <span class="banner-slider__span">туры на 2022 г</span>
            <a href="#" class="banner-slider__link link-text">Посмотреть все туры →</a>
          </div>
        </div>
        <div class="banner-slider">
          <a href="#" class="banner-slider__wrapper banner-slider__wrapper--blue">
            <img class="banner-slider__img" src="images/banner-2.png" alt="banner" />
          </a>
          <div class="banner-slider__info">
            <h2 class="banner-slider__title">За бензин платим мы!</h2>
            <p class="banner-slider__text">Никаких топливных сборов</p>
            <span class="banner-slider__span">до 10.08.21 г</span>
            <a href="#" class="banner-slider__link link-text">Подробнее об акции →</a>
          </div>
        </div>
        <div class="banner-slider">
          <a href="#" class="banner-slider__wrapper">
            <img class="banner-slider__img" src="images/banner-1.png" alt="banner" />
          </a>
          <div class="banner-slider__info">
            <h2 class="banner-slider__title">Новогодние туры</h2>
            <p class="banner-slider__text">Уже совсем скоро. Успейте забронировать!</p>
            <span class="banner-slider__span">туры на 2022 г</span>
            <a href="#" class="banner-slider__link link-text">Посмотреть все туры →</a>
          </div>
        </div>
        <div class="banner-slider">
          <a href="#" class="banner-slider__wrapper banner-slider__wrapper--blue">
            <img class="banner-slider__img" src="images/banner-2.png" alt="banner" />
          </a>
          <div class="banner-slider__info">
            <h2 class="banner-slider__title">За бензин платим мы!</h2>
            <p itemprop="description" class="banner-slider__text">Никаких топливных сборов</p>
            <span class="banner-slider__span">до 10.08.21 г</span>
            <a href="#" class="banner-slider__link link-text">Подробнее об акции →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="best">
    <div class="container">
      <h2 class="best__title">Выгодные предложения</h2>
      <div class="best-cards">
        <div itemscope itemtype="http://schema.org/Product" class="best-card">
          <a href="images/content/offer-1.png" class="best-card__img">
            <img itemprop="image" src="images/content/offer-1.png" alt="" />
          </a>
          <div class="best-card__content">
            <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
              <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
            </a>
            <h4 itemprop="name" class="best-card__title">«Парус» санаторий (корп. «Эко-Парус»)</h4>
            <span class="best-card__discount">акция до 22.08.21</span>
            <p itemprop="description" class="best-card__text">Описание любое, можно длинное и тд любое, можно длинное и тд</p>
            <span itemprop="price" class="best-card__price">от 3 034 руб</span>
            <a href="#" class="best-card__link button--red">Подробнее</a>
          </div>
        </div>
        <div itemscope itemtype="http://schema.org/Product" class="best-card">
          <a href="images/content/offer-2.png" class="best-card__img">
            <img itemprop="image" src="images/content/offer-2.png" alt="" />
          </a>
          <div class="best-card__content">
            <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
              <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
            </a>
            <h4 itemprop="name" class="best-card__title">«Парус» санаторий (корп. «Эко-Парус»)</h4>
            <span class="best-card__discount">акция до 22.08.21</span>
            <p itemprop="description" class="best-card__text">Описание любое, можно длинное и тд любое, можно длинное и тд</p>
            <span itemprop="price" class="best-card__price">от 3 034 руб</span>
            <a href="#" class="best-card__link button--red">Подробнее</a>
          </div>
        </div>
        <div itemscope itemtype="http://schema.org/Product" class="best-card">
          <a href="images/content/offer-3.png" class="best-card__img">
            <img itemprop="image" src="images/content/offer-3.png" alt="" />
          </a>
          <div class="best-card__content">
            <a itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" href="#" class="rate">
              <div itemprop="ratingValue" class="rate-yo" data-rateyo-rating="2"></div>
            </a>
            <h4 itemprop="name" class="best-card__title">«Парус» санаторий (корп. «Эко-Парус»)</h4>
            <span class="best-card__discount">акция до 22.08.21</span>
            <p class="best-card__text">Описание любое, можно длинное и тд любое, можно длинное и тд</p>
            <span itemprop="price" class="best-card__price">от 3 034 руб</span>
            <a href="#" class="best-card__link button--red">Подробнее</a>
          </div>
        </div>
      </div>
      <a href="#" class="best__link link-text best__link--desktop">Подобрать индивидуальное предложение →</a>
      <a href="#" class="best__link link-text best__link--mobile">Посмотреть все туры →</a>
    </div>
  </section>
  <section class="popular">
    <div class="container">
      <h2 class="popular__title">
        Популярные <br />
        направления
      </h2>
      <div class="popular-cards">
        <a href="images/content/popular-1.png" class="popular-card">
          <img src="images/content/popular-1.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Башкирия</span>
        </a>
        <a href="images/content/popular-2.png" class="popular-card">
          <img src="images/content/popular-2.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Челябинская область</span>
        </a>
        <a href="images/content/popular-3.png" class="popular-card">
          <img src="images/content/popular-3.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Свердловская область</span>
        </a>
        <a href="images/content/popular-4.png" class="popular-card">
          <img src="images/content/popular-4.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Пермский край</span>
        </a>
        <a href="images/content/popular-5.png" class="popular-card">
          <img src="images/content/popular-5.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Татарстан</span>
        </a>
        <a href="images/content/popular-6.png" class="popular-card">
          <img src="images/content/popular-6.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Краснодарский край</span>
        </a>
        <a href="images/content/popular-7.png" class="popular-card">
          <img src="images/content/popular-7.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Красная поляна</span>
        </a>
        <a href="images/content/popular-8.png" class="popular-card">
          <img src="images/content/popular-8.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Крым</span>
        </a>
        <a href="images/content/popular-9.png" class="popular-card">
          <img src="images/content/popular-9.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Кавказские минеральные воды</span>
        </a>
        <a href="images/content/popular-10.png" class="popular-card">
          <img src="images/content/popular-10.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Калининградская область</span>
        </a>
        <a href="images/content/popular-11.png" class="popular-card">
          <img src="images/content/popular-11.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Санкт-Петербург</span>
        </a>
        <a href="images/content/popular-12.png" class="popular-card">
          <img src="images/content/popular-12.png" alt="popular" class="popular-card__img" />
          <span class="popular-card__text">Абхазия</span>
        </a>
      </div>
    </div>
  </section>
  <section class="profiles">
    <div class="container">
      <div class="profiles-top">
        <h2 class="profiles__title">
          Выберите санатории <br />
          по профилю лечения
        </h2>
        <a href="profiles.php" class="profiles__link link--grey">Узнать подробнее о профилях</a>
      </div>
      <div class="profiles-items">
        <ul class="profiles-items__wrapper">
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/covid.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Реабилитация после <br />
              COVID-19 в санаториях</a
            >
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/bone.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link">Болезни костно-мышечной системы (опорно&#8209;двигательного аппарата)</a>
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/brain.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Нервная систем <br />
              (неврологические санатории)</a
            >
          </li>
        </ul>
        <ul class="profiles-items__wrapper">
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/heart-real.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link">Сердечно-сосудистые заболевания (системы кровообращения)</a>
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/stomach.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link">Желудочно-кишечный тракт <br />(ЖКТ)</a>
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/lungs.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Болезни <br />
              органов дыхания</a
            >
          </li>
        </ul>
        <ul class="profiles-items__wrapper">
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/gender.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Гинекология, <br />
              Урология</a
            >
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/neck.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Болезни <br />
              эндокринной системы</a
            >
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/skin.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Болезни <br />
              кожи</a
            >
          </li>
        </ul>
        <ul class="profiles-items__wrapper">
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/child.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Санаторно-курортное <br />
              лечение детей (педиатрия)
            </a>
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/eye.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Глазные <br />
              болезни</a
            >
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/doctor.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link"
              >Лечение и реабилитация <br />
              профессиональных заболеваний
            </a>
          </li>
        </ul>
        <ul class="profiles-items__wrapper">
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/body.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link">Услуги по моделированию <br />и коррекции фигуры </a>
          </li>
          <li class="profiles-item">
            <a href="#" class="profiles-item__img">
              <img src="images/icons/cosmetic.svg" alt="icon" />
            </a>
            <a href="#" class="profiles-item__link">Косметология</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="reviews">
    <div class="container">
      <h2 class="reviews__title">
        Последние отзывы <br />
        клиентов об отдыхе
      </h2>
      <div class="review-wrapper">
        <div itemscope itemtype="http://schema.org/Review" class="review">
          <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="review-top">
            <div itemprop="ratingValue" class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
              <span itemprop="author" class="review__name">Данил Самигуллин</span>
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
            <p itemprop="reviewBody" class="review__text">
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
              <span itemprop="datePublished" class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
        <div itemscope itemtype="http://schema.org/Review" class="review">
          <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="review-top">
            <div itemprop="ratingValue" class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
              <span itemprop="author" class="review__name">Данил Самигуллин</span>
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
            <p itemprop="reviewBody" class="review__text">
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
              <span itemprop="datePublished" class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
        <div itemscope itemtype="http://schema.org/Review" class="review">
          <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="review-top">
            <div itemprop="ratingValue" class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
              <span itemprop="author" class="review__name">Данил Самигуллин</span>
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
            <p itemprop="reviewBody" class="review__text">
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
              <span itemprop="datePublished" class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main-form">
    <div class="container">
      <div class="main-form__wrapper">
        <div class="main-form__info">
          <h2 class="main-form__title">Затрудняетесь с выбором?</h2>
          <p class="main-form__text">Оставьте свой телефон и мы вам поможем</p>
        </div>
        <form class="main-form__box">
          <label class="input-wrap main-form__input">
            <input name="name" type="text" placeholder="Ваше имя" required />
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
  <section class="about-company">
    <div class="container">
      <div class="about-company__wrapper">
        <img src="images/about-company.png" alt="about" class="about-company__img" />
        <div class="about-company__box">
          <p class="about-company__description">
            Туроператор «Премьер Тур» осуществляет свою деятельность в сфере внутреннего туризма с 1999 г. по направлениям: санаторно-курортный отдых, горнолыжные и активные туры, корпоративный
            туризм.
          </p>
          <p class="about-company__description">Мы работаем с объектами размещения по прямым договорам и являемся официальным представителем лучших санаторно-курортных объединений и здравниц.</p>
          <p class="about-company__description">
            Являемся признанными экспертами в санаторно-курортной отрасли Урала, Башкирии и Поволжья. Предлагаем нашим клиентам уникальный подбор всех предложений в известные здравницы и популярные
            курорты с гарантией лучшей цены в системе онлайн-бронирования.
          </p>

          <ul class="about-company__list">
            <li class="about-company__item">
              <span class="about-company__num">01</span>
              <p class="about-company__text">Работаем со всеми видами клиентов на протяжении 20 лет</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">02</span>
              <p class="about-company__text">Мы официальные представители лучших куррортов</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">03</span>
              <p class="about-company__text">Управление своим бронированием 24/7 в&nbsp;личном кабинете</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">04</span>
              <p class="about-company__text">Квалифицированные сотрудники в санаторно&nbsp;-&nbsp;курортной отрасли</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">05</span>
              <p class="about-company__text">Состоим в Едином реестре туроператоров&nbsp;России</p>
            </li>
            <li class="about-company__item">
              <span class="about-company__num">06</span>
              <p class="about-company__text">Индивидуальный подбор туров под ваши запросы и пожелания</p>
            </li>
          </ul>
          <a href="about-company.php" class="about-company__link link-text">Подробнее о компании →</a>
        </div>
      </div>
    </div>
  </section>
  <section class="certificates">
    <div class="container">
      <h2 class="certificates__title">
        Наши сертификаты <br />
        и письма благодарности
      </h2>
      <div class="certificates__wrapper">
        <a class="certificates__img" href="images/certificates/certificate-1.png">
          <img src="images/certificates/certificate-1.png" alt="certificate" />
        </a>
        <a class="certificates__img" href="images/certificates/certificate-2.png">
          <img src="images/certificates/certificate-2.png" alt="certificate" />
        </a>
        <a class="certificates__img" href="images/certificates/certificate-3.png">
          <img src="images/certificates/certificate-3.png" alt="certificate" />
        </a>
        <a class="certificates__img" href="images/certificates/certificate-4.png">
          <img src="images/certificates/certificate-4.png" alt="certificate" />
        </a>
        <a class="certificates__img" href="images/certificates/certificate-5.png">
          <img src="images/certificates/certificate-5.png" alt="certificate" />
        </a>
        <a class="certificates__img" href="images/certificates/certificate-6.jpg">
          <img src="images/certificates/certificate-6.jpg" alt="certificate" />
        </a>
      </div>
    </div>
  </section>
  <section class="main-form main-form--second">
    <div class="container">
      <div class="main-form__wrapper">
        <div class="main-form__info">
          <h2 class="main-form__title">Есть вопросы или требуется консультация менеджера?</h2>
          <p class="main-form__text">Оставьте свой телефон и мы вам поможем</p>
        </div>
        <form class="main-form__box">
          <label class="input-wrap main-form__input">
            <input name="name" type="text" class="main-form__input" placeholder="Ваше имя" required />
          </label>
          <label class="input-wrap main-form__input">
            <input name="name" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" required />
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
  <section itemscope itemtype="http://schema.org/Blog" class="news">
    <div class="container">
      <div class="news-top">
        <h2 itemprop="description" class="news__title">
          Самые <br />
          свежие новости
        </h2>
        <a href="news.php" class="news__link link--grey">Посмотреть все новости</a>
      </div>
      <div class="news-cards news-slider">
        <div itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="news-card">
          <a href="images/content/news-1.png" class="news-card__wrapper">
            <img itemprop="image" class="news-card__img" src="images/content/news-1.png" alt="photo" />
          </a>
          <div class="news-content">
            <a itemprop="headline" class="news-content__title" href="news-single.php">Турцию снова открыли, ура, друзья. Узнайте о правилах въезда</a>
            <p itemprop="description" class="news-content__text">
              Для проведения исследований используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований
              используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований используется разработанное компанией
            </p>
            <span itemprop="datePublished" class="news-content__date">10.06.2021</span>
            <a href="news-single.php" class="news-content__link link-text">Читать новость →</a>
          </div>
        </div>
        <div itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="news-card">
          <a href="images/content/news-2.png" class="news-card__wrapper">
            <img itemprop="image" class="news-card__img" src="images/content/news-2.png" alt="photo" />
          </a>
          <div class="news-content">
            <a itemprop="headline" class="news-content__title" href="news-single.php">Турцию снова открыли, ура, друзья. Узнайте о правилах въезда</a>
            <p itemprop="description" class="news-content__text">
              Для проведения исследований используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований
              используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований используется разработанное компанией
            </p>
            <span itemprop="datePublished" class="news-content__date">10.06.2021</span>
            <a href="news-single.php" class="news-content__link link-text">Читать новость →</a>
          </div>
        </div>
        <div itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="news-card">
          <a href="images/content/news-3.png" class="news-card__wrapper">
            <img itemprop="image" class="news-card__img" src="images/content/news-3.png" alt="photo" />
          </a>
          <div class="news-content">
            <a itemprop="headline" class="news-content__title" href="news-single.php">Турцию снова открыли, ура, друзья. Узнайте о правилах въезда</a>
            <p itemprop="description" class="news-content__text">
              Для проведения исследований используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований
              используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований используется разработанное компанией
            </p>
            <span itemprop="datePublished" class="news-content__date">10.06.2021</span>
            <a href="news-single.php" class="news-content__link link-text">Читать новость →</a>
          </div>
        </div>
      </div>
      <a href="#" class="news__link--mobile link--grey">Посмотреть все новости</a>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
