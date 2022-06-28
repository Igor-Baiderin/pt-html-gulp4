<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" id="form" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="#">
            <span itemprop="name">Санатории</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="#">
            <span itemprop="name">Урал</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="#">
            <span itemprop="name">Башкирия</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="#">
            <span itemprop="name">озеро Банное</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Санаторий «Якты–Куль»</span>
        </li>
      </ul>
      <form action="" class="tour-form form" data-margin-top="0" data-sticky-for="100" data-sticky-class="sticky">
        <div class="form-wrapper">
          <div class="hero-form__input hero-form__input--object">
            <input name="place" type="text" value="Санаторий «Якты–Куль»" autocomplete="on" />
          </div>
           <!-- Одиночный календарь -->
          <div class="hero-form__input hero-form__input--calendarsingle">
            <input name="arrival" id="input-single-calendar" data-start='15.10.2021' data-min="2021-10-05" type="text" placeholder="с 11.06.21 — по 18.06.21" />
          </div>
          <!-- кол-во ночей -->
          <div class="hero-form__input hero-form__input--night">
            <input name="night" id="input-count-night" type="text" placeholder="Ночей от 7 до 7" required autocomplete="off" />
            <div class="count-night-dropdown">
              <span class="count-night-dropdown__heading">Выберите кол-во ночей:</span>
              <div class="count-night-dropdown__row">
                <div class="count-night-dropdown__from">
                  <button type="button" class="button minus">-</button>
                  <input type="text" class="count-night-dropdown__input" value="от 7" name="from" data-max="30" data-min="1" autocomplete="off" />
                  <button type="button" class="button plus">+</button>
                </div>
                —
                <div class="count-night-dropdown__to">
                  <button type="button" class="button minus">-</button>
                  <input type="text" class="count-night-dropdown__input" value="до 7" name="to" data-max="30" data-min="1" autocomplete="off" />
                  <button type="button" class="button plus">+</button>
                </div>
              </div>
              <span class="count-night-dropdown__description">Заезды с 29.07.21, от 7 до 7 ночей</span>
            </div>
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
                  <input type="number" class="people-dropdown__input people-dropdown__input--children" value="0" data-max="5" data-min="0" />
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
  <div class="object">
    <div class="container">
      <ul itemscope itemtype="http://schema.org/ItemList" class="object-rooms rooms">
        <div class="container-rooms">
          <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="rooms__item">
            <div class="rooms__item-wrapper">
              <div class="img-wrapper">
                <button class="rooms-favorite__button"></button>
                <div class="rooms__img-wrapper">
                  <img itemprop="image" class="rooms__img" src="images/content/room-1.png" alt="photo" />
                  <a href="images/content/room-3.png" class="rooms__img-link"></a>
                  <a href="images/content/room-1.png" class="rooms__img-link"></a>
                </div>
              </div>
              <div class="rooms-info">
                <div class="rooms-info__top">
                  <p itemprop="name" class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
                </div>
                <ul class="rooms-categories">
                  <li class="rooms-categories__item rooms-categories__item--bath">Ванная комната</li>
                  <li class="rooms-categories__item rooms-categories__item--tv">Телевизор</li>
                  <li class="rooms-categories__item rooms-categories__item--wifi">Wi-Fi</li>
                  <li class="rooms-categories__item rooms-categories__item--fridge">Холодильник</li>
                  <li class="rooms-categories__item rooms-categories__item--condition">Кондиционер</li>
                  <li class="rooms-categories__item rooms-categories__item--balcony">Балкон</li>
                  <li class="rooms-categories__item rooms-categories__item--kitchen">Кухонная зона</li>
                  <li class="rooms-categories__item rooms-categories__item--bed1">Односпальная кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--bed2">2 кровати</li>
                  <li class="rooms-categories__item rooms-categories__item--bed3">3 кровати</li>
                  <li class="rooms-categories__item rooms-categories__item--bed4">4 кровати</li>
                </ul>
                <div class="rooms-info__bottom">
                  <p itemprop="price" class="rooms__price">стоимость: <span>от 5900 руб</span></p>
                  <div class="rooms-info__bottom-wrapper">
                    <button class="rooms-info__button rooms__details">Показать описание</button>
                    <button class="rooms__button-primary rooms__button button--red">Выбрать тариф</button>
                    <button class="rooms__button-secondary button rooms__button rooms__button--hidden link--grey">Свернуть выбор</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tariffs tariffs--hidden">
            <div class="tariffs-item">
              <div class="tariffs-item__wrapper">
                <div class="tariffs-item__main">
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="2" ></div>
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
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="1" ></div>
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
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="2" ></div>
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
          <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="rooms__item">
            <div class="rooms__item-wrapper">
              <div class="img-wrapper">
                <button class="rooms-favorite__button"></button>
                <div class="rooms__img-wrapper">
                  <img itemprop="image" class="rooms__img" src="images/content/room-2.png" alt="photo" />
                  <a href="images/content/room-3.png" class="rooms__img-link"></a>
                  <a href="images/content/room-2.png" class="rooms__img-link"></a>
                </div>
              </div>
              <div class="rooms-info">
                <div class="rooms-info__top">
                  <p itemprop="name" class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
                </div>
                <ul class="rooms-categories">
                  <li class="rooms-categories__item rooms-categories__item--smallbed">Полутораспальная кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--bigbed">Двуспальная кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--sofa">Диван</li>
                  <li class="rooms-categories__item rooms-categories__item--chairbed">Кресло-кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--kettle">Чайник</li>
                  <li class="rooms-categories__item rooms-categories__item--dryer">Фен</li>
                  <li class="rooms-categories__item rooms-categories__item--safe">Сейф</li>
                  <li class="rooms-categories__item rooms-categories__item--room">Две комнаты</li>
                  <li class="rooms-categories__item rooms-categories__item--bathroom">Санузел</li>
                  <li class="rooms-categories__item rooms-categories__item--microwave">Микроволновка</li>
                </ul>
                <div class="rooms-info__bottom">
                  <p itemprop="price" class="rooms__price">стоимость: <span>от 5900 руб</span></p>
                  <div class="rooms-info__bottom-wrapper">
                    <button class="rooms-info__button rooms__details">Показать описание</button>
                    <button class="rooms__button-primary rooms__button button--red">Выбрать тариф</button>
                    <button class="rooms__button-secondary button rooms__button rooms__button--hidden link--grey">Свернуть выбор</button>
                  </div>
                </div>
              </div>
            </div>
           <div class="tariffs tariffs--hidden">
            <div class="tariffs-item">
              <div class="tariffs-item__wrapper">
                <div class="tariffs-item__main">
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="2" ></div>
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
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="1" ></div>
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
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="2" ></div>
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
          <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="rooms__item">
            <div class="rooms__item-wrapper">
              <div class="img-wrapper">
                <button class="rooms-favorite__button"></button>
                <div class="rooms__img-wrapper">
                  <img itemprop="image" class="rooms__img" src="images/content/room-3.png" alt="photo" />
                  <a href="images/content/room-2.png" class="rooms__img-link"></a>
                  <a href="images/content/room-3.png" class="rooms__img-link"></a>
                </div>
              </div>
              <div class="rooms-info">
                <div class="rooms-info__top">
                  <p itemprop="name" class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
                </div>
                <ul class="rooms-categories">
                  <li class="rooms-categories__item rooms-categories__item--smallbed">Полутораспальная кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--bigbed">Двуспальная кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--sofa">Диван</li>
                  <li class="rooms-categories__item rooms-categories__item--chairbed">Кресло-кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--kettle">Чайник</li>
                  <li class="rooms-categories__item rooms-categories__item--dryer">Фен</li>
                  <li class="rooms-categories__item rooms-categories__item--safe">Сейф</li>
                  <li class="rooms-categories__item rooms-categories__item--room">Две комнаты</li>
                  <li class="rooms-categories__item rooms-categories__item--bathroom">Санузел</li>
                  <li class="rooms-categories__item rooms-categories__item--microwave">Микроволновка</li>
                </ul>
                <div class="rooms-info__bottom">
                  <p itemprop="price" class="rooms__price">стоимость: <span>от 5900 руб</span></p>
                  <div class="rooms-info__bottom-wrapper">
                    <button class="rooms-info__button rooms__details">Показать описание</button>
                    <button class="rooms__button-primary rooms__button button--red">Выбрать тариф</button>
                    <button class="rooms__button-secondary button rooms__button rooms__button--hidden link--grey">Свернуть выбор</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tariffs tariffs--hidden">
            <div class="tariffs-item">
              <div class="tariffs-item__wrapper">
                <div class="tariffs-item__main">
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="2" ></div>
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
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="1" ></div>
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
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="2" ></div>
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
          <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="rooms__item">
            <div class="rooms__item-wrapper">
              <div class="img-wrapper">
                <button class="rooms-favorite__button"></button>
                <div class="rooms__img-wrapper">
                  <img itemprop="image" class="rooms__img" src="images/content/room-4.png" alt="photo" />
                  <a href="images/content/room-3.png" class="rooms__img-link"></a>
                  <a href="images/content/room-4.png" class="rooms__img-link"></a>
                </div>
              </div>
              <div class="rooms-info">
                <div class="rooms-info__top">
                  <p itemprop="name" class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
                </div>
                <ul class="rooms-categories">
                  <li class="rooms-categories__item rooms-categories__item--smallbed">Полутораспальная кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--bigbed">Двуспальная кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--sofa">Диван</li>
                  <li class="rooms-categories__item rooms-categories__item--chairbed">Кресло-кровать</li>
                  <li class="rooms-categories__item rooms-categories__item--kettle">Чайник</li>
                  <li class="rooms-categories__item rooms-categories__item--dryer">Фен</li>
                  <li class="rooms-categories__item rooms-categories__item--safe">Сейф</li>
                  <li class="rooms-categories__item rooms-categories__item--room">Две комнаты</li>
                  <li class="rooms-categories__item rooms-categories__item--bathroom">Санузел</li>
                  <li class="rooms-categories__item rooms-categories__item--microwave">Микроволновка</li>
                </ul>
                <div class="rooms-info__bottom">
                  <p itemprop="price" class="rooms__price">стоимость: <span>от 5900 руб</span></p>
                  <div class="rooms-info__bottom-wrapper">
                    <button class="rooms-info__button rooms__details">Показать описание</button>
                    <button class="rooms__button-primary rooms__button button--red">Выбрать тариф</button>
                    <button class="rooms__button-secondary button rooms__button rooms__button--hidden link--grey">Свернуть выбор</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tariffs tariffs--hidden">
            <div class="tariffs-item">
              <div class="tariffs-item__wrapper">
                <div class="tariffs-item__main">
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="2" ></div>
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
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="1" ></div>
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
                  <h4 class="tariffs-item__title">
                    Оздоровительная путевка для пенсионеров
                  </h4>
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
                      <div class="tariffs-info__children"data-child="2" ></div>
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
        </div>
      </ul>
      <div class="object-inner">
        <aside class="object-aside">
          <h3 class="object-aside__title">
            Санаторий «Якты–Куль» <br />
            на озере Банное, Башкирия
          </h3>
          <div class="object-address">
            <div class="object-address-top">
              <p class="object-address__title">Адрес объекта</p>
              <a href="#" class="object-address__link">Посмотреть на карте</a>
            </div>
            <p class="object-address__text">453629, Республика Башкортостан, Абзелиловский район, санаторий «Якты&#8209;Куль»</p>
            <button class="object-address__button">Посмотреть как добраться</button>
          </div>
          <a href="#" class="aside-banner">
            <img src="images/discount-1.png" alt="banner" class="aside-banner__img" />
          </a>
          <button class="object-aside__button link--grey">Профили лечения санатория</button>
          <ul class="object-list">
            <li class="object-list__item">
              <a href="#part1" class="object-list__link">
                <span class="object-list__num">01</span>
                <p class="object-list__title">О санатории</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part2" class="object-list__link">
                <span class="object-list__num">02</span>
                <p class="object-list__title">Инфраструктура и услуги</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part3" class="object-list__link">
                <span class="object-list__num">03</span>
                <p class="object-list__title">Лечение</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part4" class="object-list__link">
                <span class="object-list__num">04</span>
                <p class="object-list__title">Перечень процедур</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part5" class="object-list__link">
                <span class="object-list__num">05</span>
                <p class="object-list__title">Медицинский профиль санатория</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part6" class="object-list__link">
                <span class="object-list__num">06</span>
                <p class="object-list__title">Основной природный фактор здравницы</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part7" class="object-list__link">
                <span class="object-list__num">07</span>
                <p class="object-list__title">Перечень медицинских услуг</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part8" class="object-list__link">
                <span class="object-list__num">08</span>
                <p class="object-list__title">Питание</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part9" class="object-list__link">
                <span class="object-list__num">09</span>
                <p class="object-list__title">Горнолыжные центры</p>
              </a>
            </li>
            <li class="object-list__item">
              <a href="#part10" class="object-list__link">
                <span class="object-list__num">10</span>
                <p class="object-list__title">Отзывы</p>
              </a>
            </li>
          </ul>
        </aside>
        <div class="object-content">
          <div class="main-slider object-sliderbig">
            <a href="images/content/sanatorium-6.png" class="object-sliderbig__item">
              <img class="object-sliderbig__img" data-lazy="images/content/sanatorium-6.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-1.png" class="object-sliderbig__item">
              <img class="object-sliderbig__img" data-lazy="images/content/sanatorium-1.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-2.png" class="object-sliderbig__item">
              <img class="object-sliderbig__img" data-lazy="images/content/sanatorium-2.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-3.png" class="object-sliderbig__item">
              <img class="object-sliderbig__img" data-lazy="images/content/sanatorium-3.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-4.png" class="object-sliderbig__item">
              <img class="object-sliderbig__img" data-lazy="images/content/sanatorium-4.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-5.png" class="object-sliderbig__item">
              <img class="object-sliderbig__img" data-lazy="images/content/sanatorium-5.png" alt="photo" />
            </a>
          </div>
          <div class="main-slider object-slider">
            <a href="images/content/sanatorium-1.png" class="object-slider__item">
              <img data-lazy="images/content/sanatorium-1.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-2.png" class="object-slider__item">
              <img data-lazy="images/content/sanatorium-2.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-3.png" class="object-slider__item">
              <img data-lazy="images/content/sanatorium-3.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-4.png" class="object-slider__item">
              <img data-lazy="images/content/sanatorium-4.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-5.png" class="object-slider__item">
              <img data-lazy="images/content/sanatorium-5.png" alt="photo" />
            </a>
            <a href="images/content/sanatorium-6.png" class="object-slider__item">
              <img data-lazy="images/content/sanatorium-6.png" alt="photo" />
            </a>
          </div>
          <ul class="object-info">
            <li class="object-info__item">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <img src="images/icons/fire.svg" class="object-info__discount"></img>
                <h4 class="object-info__title">Акции и скидки</h4>
              </div>
              <div class="object-info__wrapper object-info__wrapper--discount">
                <ul class="object-discounts">
                  <li class="object-discounts__item">
                    <p class="object-discounts__title">Новый год 2022</p>
                    <p class="object-discounts__text">Актуально с 30 декабря 2021 по 10 января 2022</p>
                  </li>
                   <li class="object-discounts__item">
                    <p class="object-discounts__title">Новый год 2022</p>
                    <p class="object-discounts__text">Актуально с 30 декабря 2021 по 10 января 2022</p>
                  </li>
                   <li class="object-discounts__item">
                    <p class="object-discounts__title">Новый год 2022</p>
                    <p class="object-discounts__text">Актуально с 30 декабря 2021 по 10 января 2022</p>
                  </li>
                   <li class="object-discounts__item">
                    <p class="object-discounts__title">Новый год 2022</p>
                    <p class="object-discounts__text">Актуально с 30 декабря 2021 по 10 января 2022</p>
                  </li>
                </ul>
              </div>
            </li>
            <li id="part1" class="object-info__item">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">01</span>
                <h4 class="object-info__title">О санатории</h4>
              </div>
              <div class="object-info__wrapper">
                <p class="object-info__text">
                  Санаторий "Якты-Куль" расположен на берегу живописного озера Банное на юго-востоке Башкирского Зауралья в окружении смешанных лесов. Это грязевой климатический санаторий с
                  современным лечебно-оздоровительным комплексом. Расположен в Абзелиловском районе Республики Башкортостан на высоте 450 м над уровнем моря и считается низкогорным курортом.
                </p>
                <p class="object-info__text">
                  Основной природный фактор здравницы: илово-сапропелевая грязь (источником является озеро Безымянное-1,в 4-х километрах от санатория). Уникальный метод лечения - радонотерапия!
                </p>
                <p class="object-info__text">Особая специализация - решение проблем женского и мужского бесплодия. В стоимость путевки с лечением входит порядка 5-6 процедур.</p>
                <p class="object-info__text">
                  В 2-х километрах от «Якты-Куля» находится горнолыжный центр «Металлург-Магнитогорск» (Банное). В 30 км от санатория находится горнолыжный комплекс «Абзаково».
                </p>
              </div>
            </li>
            <li id="part2" class="object-info__item object-services">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">02</span>
                <h4 class="object-info__title">Инфраструктура и услуги</h4>
              </div>
              <div class="object-info__wrapper">
                <ul class="object-services__list">
                  <li class="object-services__item">Оборудованный пляж, лодочная станция (прокат инвентаря)</li>
                  <li class="object-services__item">Современный большой закрытый бассейн</li>
                  <li class="object-services__item">Сауна, баня</li>
                  <li class="object-services__item">Солярий</li>
                  <li class="object-services__item">Тренажерный- , фитнес- зал</li>
                  <li class="object-services__item">Прокат (велосипед, лыжи)</li>
                  <li class="object-services__item">Бильярд (более 10 столов)</li>
                  <li class="object-services__item">Игровые автоматы</li>
                  <li class="object-services__item">Детская игровая комната</li>
                  <li class="object-services__item">Косметический кабинет</li>
                  <li class="object-services__item">Горные лыжи, сноуборд, лыжные прогулки, катание на коньках (прокат инвентаря)</li>
                  <li class="object-services__item">Многочисленные экскурсии</li>
                  <li class="object-services__item">Магазин</li>
                  <li class="object-services__item">Автостоянка</li>
                  <li class="object-services__item">Трансфер на ГЛЦ и обратно</li>
                  <li class="object-services__item">Библиотека</li>
                  <li class="object-services__item">Парикмахерская</li>
                  <li class="object-services__item">Прачечная</li>
                  <li class="object-services__item">Аптека</li>
                  <li class="object-services__item">Кафе, банкетный зал</li>
                  <li class="object-services__item">Конференц-зал (есть все возможности проведения любых корпоративных мероприятий)</li>
                </ul>
              </div>
            </li>
            <li id="part3" class="object-info__item">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">03</span>
                <h4 class="object-info__title">Лечение</h4>
              </div>
              <div class="object-info__wrapper">
                <p class="object-info__text">
                  В 2013 году на Всероссийском форуме «Здравница-2013» в г. Сочи санаторий «Якты-Куль» был награжден двумя золотыми медалями в номинациях «Лучшие технологии климатотерапии и
                  климатопрофилактики» и «Лучшие технологии лечебно-профилактического применения лечебных грязей».
                </p>
                <div class="object-info__sliders treatment-slider">
                  <a href="images/content/object-1.png" class="object-info__slider treatment-slider__item">
                    <img src="images/content/object-1.png" alt="" class="treatment-slider__img" />
                  </a>
                  <a href="images/content/object-2.png" class="object-info__slider treatment-slider__item">
                    <img src="images/content/object-2.png" alt="" class="treatment-slider__img" />
                  </a>
                  <a href="images/content/object-1.png" class="object-info__slider treatment-slider__item">
                    <img src="images/content/object-1.png" alt="" class="treatment-slider__img" />
                  </a>
                </div>
                <ul class="object-info__list">
                  <li class="object-info__list-item">
                    <p class="object-info__list-title filter__item-drop">Программа лечения 1</p>
                    <div class="object-info__content">
                      <div class="object-info__photos">
                        <img src="images/content/profile-1.png" alt="" class="object-info__photo" />
                        <img src="images/content/profile-2.png" alt="" class="object-info__photo" />
                      </div>
                      <p class="object-info__text">
                        Программа включает лечебные и оздоровительные процедуры для общей профилактики и терапии заболеваний по профилю санатория. Курс процедур составляется с учетом основного
                        заболевания и противопоказаний.
                      </p>
                      <table class="object-info__table">
                        <tr>
                          <th>Вид процедур</th>
                          <th>Количество процедур за 10 дней</th>
                        </tr>
                        <tr>
                          <td>Прием терапевта первичный</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Прием терапевта повторный</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Диетотерапия</td>
                          <td>постоянно</td>
                        </tr>
                        <tr>
                          <td>Климатолечение</td>
                          <td>постоянно</td>
                        </tr>
                        <tr>
                          <td>Фитотерапия</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>Аппаратная физиотерапия (электрофорез, ультрофонофорез, СМТ, локальная магнитотерапия) 1 вид</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <td>ЛФК (корректирующая гимнастика для позвоночника)</td>
                          <td>6</td>
                        </tr>
                      </table>
                    </div>
                  </li>
                  <li class="object-info__list-item">
                    <p class="object-info__list-title filter__item-drop">Программа лечения 2</p>
                    <div class="object-info__content">
                      <div class="object-info__photos">
                        <img src="images/content/profile-5.png" alt="" class="object-info__photo" />
                        <img src="images/content/profile-6.png" alt="" class="object-info__photo" />
                      </div>
                      <p class="object-info__text">
                        Программа включает лечебные и оздоровительные процедуры для общей профилактики и терапии заболеваний по профилю санатория. Курс процедур составляется с учетом основного
                        заболевания и противопоказаний.
                      </p>
                      <table class="object-info__table">
                        <tr>
                          <th>Вид процедур</th>
                          <th>Количество процедур за 10 дней</th>
                        </tr>
                        <tr>
                          <td>Прием терапевта первичный</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Прием терапевта повторный</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Диетотерапия</td>
                          <td>постоянно</td>
                        </tr>
                        <tr>
                          <td>Климатолечение</td>
                          <td>постоянно</td>
                        </tr>
                        <tr>
                          <td>Фитотерапия</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>Аппаратная физиотерапия (электрофорез, ультрофонофорез, СМТ, локальная магнитотерапия) 1 вид</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <td>ЛФК (корректирующая гимнастика для позвоночника)</td>
                          <td>6</td>
                        </tr>
                      </table>
                    </div>
                  </li>
                  <li class="object-info__list-item">
                    <p class="object-info__list-title filter__item-drop">Программа лечения 3</p>
                    <div class="object-info__content">
                      <div class="object-info__photos">
                        <img src="images/content/profile-3.png" alt="" class="object-info__photo" />
                        <img src="images/content/profile-4.png" alt="" class="object-info__photo" />
                      </div>
                      <p class="object-info__text">
                        Программа включает лечебные и оздоровительные процедуры для общей профилактики и терапии заболеваний по профилю санатория. Курс процедур составляется с учетом основного
                        заболевания и противопоказаний.
                      </p>
                      <table class="object-info__table">
                        <tr>
                          <th>Вид процедур</th>
                          <th>Количество процедур за 10 дней</th>
                        </tr>
                        <tr>
                          <td>Прием терапевта первичный</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Прием терапевта повторный</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Диетотерапия</td>
                          <td>постоянно</td>
                        </tr>
                        <tr>
                          <td>Климатолечение</td>
                          <td>постоянно</td>
                        </tr>
                        <tr>
                          <td>Фитотерапия</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>Аппаратная физиотерапия (электрофорез, ультрофонофорез, СМТ, локальная магнитотерапия) 1 вид</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <td>ЛФК (корректирующая гимнастика для позвоночника)</td>
                          <td>6</td>
                        </tr>
                      </table>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li id="part4" class="object-info__item object-services">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">04</span>
                <h4 class="object-info__title">Перечень процедур, входящих в стоимость путевки, по назначению врача</h4>
              </div>
              <div class="object-info__wrapper">
                <div class="object-services__lists">
                  <ul class="object-services__list">
                    <li class="object-services__item">Прием врача</li>
                    <li class="object-services__item">Грязевые аппликации</li>
                    <li class="object-services__item">Грязевые аппликации</li>
                    <li class="object-services__item">Гальваногрязь</li>
                    <li class="object-services__item">Вагинальные тампоны</li>
                    <li class="object-services__item">Ректальные тампоны</li>
                    <li class="object-services__item">Радоновые ванны</li>
                    <li class="object-services__item">Хвойные ванны</li>
                    <li class="object-services__item">Хвойно-жемчужные ванны</li>
                    <li class="object-services__item">Морские ванны</li>
                    <li class="object-services__item">Скипидарные ванны</li>
                    <li class="object-services__item">Жемчужные ванны</li>
                    <li class="object-services__item">Йодобромные ванны</li>
                    <li class="object-services__item">Воздушно-радоновые ванны</li>
                  </ul>
                  <ul class="object-services__list">
                    <li class="object-services__item">Прием врача</li>
                    <li class="object-services__item">Грязевые аппликации</li>
                    <li class="object-services__item">Грязевые аппликации</li>
                    <li class="object-services__item">Гальваногрязь</li>
                    <li class="object-services__item">Вагинальные тампоны</li>
                    <li class="object-services__item">Ректальные тампоны</li>
                    <li class="object-services__item">Радоновые ванны</li>
                    <li class="object-services__item">Хвойные ванны</li>
                    <li class="object-services__item">Хвойно-жемчужные ванны</li>
                    <li class="object-services__item">Морские ванны</li>
                    <li class="object-services__item">Скипидарные ванны</li>
                  </ul>
                </div>
              </div>
            </li>
            <li id="part5" class="object-info__item object-services">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">05</span>
                <h4 class="object-info__title">Медицинский профиль санатория</h4>
              </div>
              <div class="object-info__wrapper">
                <ul class="object-services__list">
                  <li class="object-services__item">лечение женского и мужского бесплодия;</li>
                  <li class="object-services__item">гинекология и урология;</li>
                  <li class="object-services__item">мочеполовая система (почки и мочевыводящие пути);</li>
                  <li class="object-services__item">костно-мышечная система и соединительные ткани;</li>
                  <li class="object-services__item">нервная система;</li>
                  <li class="object-services__item">лечение органов дыхания;</li>
                  <li class="object-services__item">система кровообращения;</li>
                  <li class="object-services__item">оздоровительные программы</li>
                </ul>
              </div>
            </li>
            <li id="part6" class="object-info__item object-services">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">06</span>
                <h4 class="object-info__title">Основной природный фактор здравницы</h4>
              </div>
              <div class="object-info__wrapper">
                <ul class="object-services__list">
                  <li class="object-services__item">
                    <h4 class="object-services__item-title">Илово-сапропелевая грязь</h4>
                    <p class="object-services__item-text">
                      Источником сапропелевой грязи является озеро Безымянное-1, расположенное в 4 километрах от санатория. Сапропель богат органическими соединениями, в состав которых входит остатки
                      водной растительности и фито-зоопланктон.
                    </p>
                  </li>
                  <li class="object-services__item">
                    <h4 class="object-services__item-title">Водолечение</h4>
                    <p class="object-services__item-text">
                      важная и неотъемлемая часть комплексной терапии применяемая в санатории «Якты-Куле». К услугам отдыхающих хвойные,воздушно-углекислые ванны, морские, хвойно-жемчужные ванны,
                      кабинет гидропатии со следующими видами душей: струевой, каскадный, восходящий, циркулярный, ; подводный душ-массаж.
                    </p>
                  </li>
                  <li class="object-services__item">
                    <h4 class="object-services__item-title">Уникальный микроклимат</h4>
                    <p class="object-services__item-text">(горный воздух) побережья Якты-Куля (Банное) оказывает благотворное влияние на организм человека и приводит в порядок нервную систему.</p>
                  </li>
                </ul>
                <p class="object-info__text object-info__text--mb">Помимо естественных лечебных факторов в санатории широко используется физиотерапевтические методы лечения:</p>
                <ul class="object-services__list">
                  <li class="object-services__item object-services__item--mb">
                    магниотерапия, франклинизация,амплимпульс,микроволновая терапия, дарсонвализация, электрофорез лекарственных веществ и лечебной грязи,лазер, светолечение,
                    кварцево&#8209;ультрафиолетовое облучение, электросон, аппарат Андро-Гин.
                  </li>
                  <li class="object-services__item object-services__item--mb">
                    Сухие углекислые ванны - назначаются пациентам. страдающим сердечно-сосудистыми заболеваниями. В комплексе применяются физиотерпаевтические процедуры
                  </li>
                  <li class="object-services__item object-services__item--mb">
                    Спелеокамера - прекрасное средство для лечения аллергии,бронхолегочной системы и ряда кожных заболеваний. Спелеотерапию можно смело назвать естественным, природным, не вызывающим
                    осложнений
                  </li>
                  <li class="object-services__item object-services__item--mb">Фитобар - большой перечень лечебных трав, которые собраны в экологически чистых районах Башкирии.</li>
                  <li class="object-services__item object-services__item--mb">
                    Стоматологический кабинет - доказан эффект аппликации сапропелевой грязи, используемых санаторием, при заболеваниях десен (пародонтит и пародонтоз)
                  </li>
                </ul>
                <p class="object-info__text object-info__text--mb">
                  Неоднократно санаторий «Якты-Куль» был удостоен наградами. В 2011 году на Всероссийском Форуме «Здравница-2011», проходившем в г. Сочи, санаторий удостоен двумя медалями: золотой в
                  номинации «Лучшие технологии климатотерапии и климатопрофилактики», серебряной в номинации «Лучшая здравница по использованию природных лечебных факторов
                </p>
                <p class="object-info__text object-info__text--bold">Решение проблеем мужского и женского бесплодия - отдельный лечебный профиль санатория "Якты-Куль"</p>
                <p class="object-info__text object-info__text--mb">
                  Санаторий располагает уникальными природнымии факторами, современными физиотерапевтическими технологиями, специализирован на восстановительном лечении гинекологических и
                  урологических болезней.После курса лечения в бальнеологическом санатории Якты-Куль у женщин нормализуется менструальный цикл,исчезают боли, улучшается общее состояние здоровья,
                  повышается сексуальная активность и восстанавливается детородная функция
                </p>
                <p class="object-info__text object-info__text--bold">Диагностика заболеваний</p>
                <p class="object-info__text object-info__text--mb">
                  Диагностическое отделение состоит из клинико-биохимической лаборатории, кабинетов УЗИ и функциональной диагностики. Проводятся разнообразные виды исследования: клиническая и
                  биохимическая лабораторная диагностика, УЗИ органов брюшной полости, органов малого таза, молочной железы,ЭКГ, Реоэнцефалография, Реовазография.
                </p>
              </div>
            </li>
            <li id="part7" class="object-info__item object-services">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">07</span>
                <h4 class="object-info__title">Перечень медицинских услуг</h4>
              </div>
              <div class="object-info__wrapper">
                <ul class="object-services__list">
                  <li class="object-services__item">бальнеотерапия (радоновые, ароматические и морские ванны);</li>
                  <li class="object-services__item">грязелечение (общие, местные аппликации, грязевые тампоны, гальваногрязь);</li>
                  <li class="object-services__item">массаж (ручной, гинекологический);</li>
                  <li class="object-services__item">аппаратная физиотерапия;</li>
                  <li class="object-services__item">функциональная диагностика;</li>
                  <li class="object-services__item">клинико-диагностическая лаборатория;</li>
                  <li class="object-services__item">мониторная очистка кишечника;</li>
                  <li class="object-services__item">ингаляции;</li>
                  <li class="object-services__item">фитотерапия;</li>
                  <li class="object-services__item">лечебная физкультура;</li>
                  <li class="object-services__item">ортопедическая и терапевтическая стоматология</li>
                </ul>
              </div>
            </li>
            <li id="part8" class="object-info__item">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">08</span>
                <h4 class="object-info__title">Питание</h4>
              </div>
              <div class="object-info__wrapper">
                <p class="object-info__text">
                  Обеденный зал санатория рассчитан на 280 человек. <br />Питание 3-разовое, организовано по типу "заказного меню" (отдыхающие самостоятельно выбирают блюда из предложенных вариантов
                  на несколько дней вперёд) и по типу "шведского стола". Меню сбалансировано и состоит из мясных,рыбных блюд,птицы, круп,овощей и фруктов. Круглогодично в состав включены витаминные
                  продукты: свежие овощи и фрукты, зелень,соки.Летом отдыхающим предлагается кумыс.
                </p>
                <p class="object-info__text">
                  Помимо обеденного зала в санатории есть сеть кафе и баров,банкетный зал для проведение корпоративных мероприятий (торжеств,свадеб,юбилеев и пр.). Персонал столовой имеет высокую
                  квалификацию, постоянно совершенствуя ее на курсах специального санаторно-курортного <br />
                  питания.
                </p>
                <p class="object-info__text">Изюминкой санатория являются дни башкирской кухни!</p>
                <div class="object-info__sliders food-slider">
                  <a href="images/content/object-1.png" class="object-info__slider food-slider__item">
                    <img src="images/content/object-1.png" alt="" class="food-slider__img" />
                  </a>
                  <a href="images/content/object-2.png" class="object-info__slider food-slider__item">
                    <img src="images/content/object-2.png" alt="" class="food-slider__img" />
                  </a>
                  <a href="images/content/object-1.png" class="object-info__slider food-slider__item">
                    <img src="images/content/object-1.png" alt="" class="food-slider__img" />
                  </a>
                </div>
              </div>
            </li>
            <li id="part9" class="object-info__item object-services">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">09</span>
                <h4 class="object-info__title">Горнолыжные центры</h4>
              </div>
              <div class="object-info__wrapper">
                <p class="object-info__text object-info__text--bold">ГЛЦ «Металлург-Магнитогорск» (Банное) - расстояние 2 км от санатория "Якты-Куль" (предоставляется бесплатный трансфер)</p>
                <ol class="object-services__list">
                  <li class="object-services__element">Система искусственного заснеживания</li>
                  <li class="object-services__element">Продолжительность сезона с ноября до конца апреля!</li>
                  <li class="object-services__element">Перепад высот 450 м</li>
                  <li class="object-services__element">семь трасс различной степени сложности (для профессионалов и новичков), их общая протяженность 17000 м.</li>
                  <li class="object-services__element">8-местные подъемники гондольного типа.производительность 2800 чел/час, время в пути 5,5 минуты, скорость 6 м/сек.</li>
                  <li class="object-services__element">
                    + Подъемники бугельного типа (фирма Татрапома, Словакия), перепад высот 42 м., длинна 300 м., производительность 660 чел/час, время в пути 2 минуты, скорость 2,2 м/сек.
                  </li>
                </ol>
                <div class="object-info__sliders ski-slider">
                  <a href="images/content/ski-1.png" class="object-info__slider ski-slider__item">
                    <img src="images/content/ski-1.png" alt="" class="ski-slider__img" />
                  </a>
                  <a href="images/content/ski-2.png" class="object-info__slider ski-slider__item">
                    <img src="images/content/ski-2.png" alt="" class="ski-slider__img" />
                  </a>
                  <a href="images/content/ski-1.png" class="object-info__slider ski-slider__item">
                    <img src="images/content/ski-1.png" alt="" class="ski-slider__img" />
                  </a>
                </div>
                <p class="object-info__text object-info__text--bold">ГЛЦ «Абзаково» - расстояние 30 км от санатория "Якты-Куль" (можно доехать на маршрутном такси за дополнительную плату)</p>

                <ol class="object-services__list">
                  <li class="object-services__element">Искусственное заснеживание.</li>
                  <li class="object-services__element">Продолжительность сезона с ноября до апреля!</li>
                  <li class="object-services__element">Перепад высот до 320 м</li>
                  <li class="object-services__element">13 трасс различной степени сложности. Общей протяженностью всех трасс 18 км. Имеют FIS сертификаты для слалома и слалома - гиганта.</li>
                  <li class="object-services__element">Пять современных бугельных подъемников.</li>
                  <li class="object-services__element">10 км. подготовленных беговых лыжных трасс, биатлонное стрельбище, спортинг. С пропускной способностью 3500 чел/ час.</li>
                </ol>
                <p class="object-info__text object-info__text--mb">
                  Туроператор "Премьер Тур" - официальный представитель санатория "Якты-Куль". Поэтому Вы можете оформить путевку он-лайн на нашем сайте или в офисах нашей компании по стоимости
                  санатория. Оплата возможна любым удобным для Вас способом без комиссий.
                </p>
                <div class="object-info__sliders sport-slider">
                  <a href="images/content/ski-3.png" class="object-info__slider sport-slider__item">
                    <img src="images/content/ski-3.png" alt="" class="sport-slider__img" />
                  </a>
                  <a href="images/content/ski-4.png" class="object-info__slider sport-slider__item">
                    <img src="images/content/ski-4.png" alt="" class="sport-slider__img" />
                  </a>
                  <a href="images/content/ski-3.png" class="object-info__slider sport-slider__item">
                    <img src="images/content/ski-3.png" alt="" class="sport-slider__img" />
                  </a>
                </div>
              </div>
            </li>
            <li id="part10" class="object-info__item object-services">
              <div class="object-info__top filter__item-drop filter__item-drop--active">
                <span class="object-info__num">10</span>
                <h4 class="object-info__title">Отзывы о санатории "Якты-Куль"</h4>
              </div>

              <div class="object-reviews">
                <div class="review">
                  <div class="review-top">
                    <div class="review__num">6.2</div>
                    <div class="review-top__wrapper">
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
                      Общее впечатление- на "троечку", так как в былые годы был какой-то "лоск"санатория, сейчас-несколько неуютно и скучновато; в номерах- запах табака, до нас скорее всего отдыхающие
                      курили в номере, да и сейчас сотрудники и отдыхающие курят на территории санатория, питание- нет зелени и нет разнообразия, ребенок вообще не мог есть- не вкусно было; сервис -
                      неудовлетворительно: при небольшой численности отдыхающих очереди при оказании некоторых услуг, услуги начинают оказывать только после какой- ежедневной оперативки,которая
                      заканчивается только к 9-30;в бассейне- вода холодная и сквозники, ЛФК нет почему-то совсем, территория- молодцы! содержат и стараются, природа только и заслуживает высшей
                      похвалы. Вообщем, видно, что пандемия здорово "потрепала" санаторий-очень много сокращений, оставшиеся сотрудники не успевают обслуживать даже небольшое количество отдыхающих.
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
                      Общее впечатление- на "троечку", так как в былые годы был какой-то "лоск"санатория, сейчас-несколько неуютно и скучновато; в номерах- запах табака, до нас скорее всего отдыхающие
                      курили в номере, да и сейчас сотрудники и отдыхающие курят на территории санатория, питание- нет зелени и нет разнообразия, ребенок вообще не мог есть- не вкусно было; сервис -
                      неудовлетворительно: при небольшой численности отдыхающих очереди при оказании некоторых услуг, услуги начинают оказывать только после какой- ежедневной оперативки,которая
                      заканчивается только к 9-30;в бассейне- вода холодная и сквозники, ЛФК нет почему-то совсем, территория- молодцы! содержат и стараются, природа только и заслуживает высшей
                      похвалы. Вообщем, видно, что пандемия здорово "потрепала" санаторий-очень много сокращений, оставшиеся сотрудники не успевают обслуживать даже небольшое количество отдыхающих.
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
                    <div class="review__num review__num">8.7</div>
                    <div class="review-top__wrapper">
                      <span class="review__name">Данил Самигуллин</span>
                      <p class="review__description">Оздоровление с меленькими детьми в июне 2021 г.</p>
                    </div>
                  </div>
                  <div class="review-content">
                    <ul class="review-grade review-grade--positive">
                      <li class="review-grade__item review-grade__comfort">Комфорт - <span>9</span></li>
                      <li class="review-grade__item review-grade__staff">Персонал - <span>8</span></li>
                      <li class="review-grade__item review-grade__place">Расположение - <span>9</span></li>
                      <li class="review-grade__item review-grade__convenience">Удобства - <span>9</span></li>
                      <li class="review-grade__item review-grade__clean">Чистота - <span>7</span></li>
                      <li class="review-grade__item review-grade__price">Цена/качество - <span>8</span></li>
                    </ul>
                    <p class="review__text">
                      Общее впечатление- на "троечку", так как в былые годы был какой-то "лоск"санатория, сейчас-несколько неуютно и скучновато; в номерах- запах табака, до нас скорее всего отдыхающие
                      курили в номере, да и сейчас сотрудники и отдыхающие курят на территории санатория, питание- нет зелени и нет разнообразия, ребенок вообще не мог есть- не вкусно было; сервис -
                      неудовлетворительно: при небольшой численности отдыхающих очереди при оказании некоторых услуг, услуги начинают оказывать только после какой- ежедневной оперативки,которая
                      заканчивается только к 9-30;в бассейне- вода холодная и сквозники, ЛФК нет почему-то совсем, территория- молодцы! содержат и стараются, природа только и заслуживает высшей
                      похвалы. Вообщем, видно, что пандемия здорово "потрепала" санаторий-очень много сокращений, оставшиеся сотрудники не успевают обслуживать даже небольшое количество отдыхающих.
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
                <div class="object-reviews__bottom">
                  <button class="object-reviews__button button--red">Оставить отзыв</button>
                  <a href="#" class="object-reviews__link link-text">Посмотреть еще →</a>
                </div>
              </div>
            </li>
          </ul>
          <div class="object-address object-address--mobile">
            <div class="object-address-top">
              <p class="object-address__title">Адрес объекта</p>
              <a href="#" class="object-address__link">Посмотреть на карте</a>
            </div>
            <p class="object-address__text">453629, Республика Башкортостан, Абзелиловский район, санаторий «Якты&#8209;Куль»</p>
            <button class="object-address__button">Посмотреть как добраться</button>
          </div>
        </div>
      </div>
      <div class="modal modal-profiles">
        <div class="modal-overlay"></div>
        <div class="modal-dialog modal-profiles__dialog">
          <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
          <h3 class="modal-profiles__title">Профили лечения санатория</h3>
          <ul class="modal-profiles__list">
            <li class="modal-profiles__item">лечение женского и мужского бесплодия;</li>
            <li class="modal-profiles__item">гинекология и урология;</li>
            <li class="modal-profiles__item">мочеполовая система (почки и мочевыводящие пути);</li>
            <li class="modal-profiles__item">костно-мышечная система и соединительные ткани;</li>
            <li class="modal-profiles__item">нервная система;</li>
            <li class="modal-profiles__item">лечение органов дыхания;</li>
            <li class="modal-profiles__item">система кровообращения;</li>
            <li class="modal-profiles__item">оздоровительные программы</li>
          </ul>
        </div>
      </div>
      <div class="modal-success">
        <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
        <img src="images/icons/cloud.svg" alt="icon" class="modal-success__img" />
        <h4 class="modal-success__title">
          Ваша заявка <br />
          успешно отправлена!
        </h4>
        <p class="modal-success__text">Мы с вами свяжемся в ближайшее время</p>
      </div>
      <div class="modal modal-address">
        <div class="modal-overlay"></div>
        <div class="modal-dialog modal-address__dialog">
          <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
          <div class="modal-address__wrapper">
            <h4 class="modal-address__title">Как добраться в Санаторий «Якты–Куль»</h4>
            <h3 class="modal-address__title--small">Как добраться из Уфы</h3>
            <p class="modal-address__text">
              <span class="modal-address__text--bold">Ежедневный частный маршрут Уфа(ост. «Универмаг") - Янган-Тау:</span>
              07.30, 10.00 , 11.00,11.30, 12.00 , 13.00, 14.00 , 15.00, 16.30 ,17.00, 19.30, 20.30, 23.30 Бронирование мест по телефонам диспетчера: 8-963-89-51-064; 8-987-25-53-757. Цена билета: 320
              рублей.
            </p>
            <p class="modal-address__text">
              <span class="modal-address__text--bold">На автомобиле:</span>
              по федеральной трассе «Москва-Уфа-Челябинск» (М5): г. Уфа - г. Аша - г. Сим - поворот на с. Кропачево* - с. Малояз - д. Чулпан** - с. Янгантау. * Внимание! Не пропустите поворот на с.
              Кропачево. Поворот будет после рынка у д. Шарлаш и двух расположенных друг напротив друга АЗС «Лукойл». ** Внимание! Не пропустите поворот на Янган-Тау в деревне Чулпан. Следуйте
              указателям
            </p>
            <p class="modal-address__text">
              <span class="modal-address__text--bold">На общественном автобусе:</span>
              Уфа - Большеустьикинское - суббота, в 16.45
            </p>
            <p class="modal-address__text">
              Уфа - Екатеринбург (Северный автовокзал) - ежедневно: в 11.00, 21.20, 00.30*<br />
              Уфа - Месягутово (Северный автовокзал) - ежедневно: в 18.05, 19.05*<br />
              Уфа - Янган-Тау (Северный автовокзал) - воскресенье в 08.30*
            </p>
            <p class="modal-address__text">*Возможны изменения в расписании. Уточнять в кассе автовокзала</p>
          </div>
        </div>
      </div>
      <div class="modal modal-description">
        <div class="modal-overlay"></div>
        <div class="modal-dialog modal-description__dialog">
          <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
          <div class="modal-description__wrapper">
            <p class="modal-description__title">Какой-то заголовок</p>
            <p class="modal-description__text">Задача организации, в особенности же сложившаяся структура организации позволяет оценить значение модели развития. Товарищи! реализация намеченных плановых заданий требуют определения и уточнения новых предложений. Таким образом консультация с широким активом в значительной степени обуславливает создание направлений прогрессивного развития. Задача организации, в особенности же укрепление и развитие структуры играет важную роль в формировании дальнейших направлений развития.</p>
            <p class="modal-description__text">С другой стороны консультация с широким активом требуют определения и уточнения систем массового участия. Товарищи! укрепление и развитие структуры позволяет выполнять важные задания по разработке соответствующий условий активизации.</p>
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
            <input name="name" type="text" data-rules="required" placeholder="Ваше имя" required/>
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
  <section class="news">
    <div class="container">
      <div class="news-top">
        <h2 class="news__title">
          Самые <br />
          свежие новости
        </h2>
        <a href="#" class="news__link link--grey">Посмотреть все новости</a>
      </div>
      <div class="news-cards">
        <div class="news-card">
          <a href="images/content/news-1.png" class="news-card__wrapper">
            <img class="news-card__img" src="images/content/news-1.png" alt="photo" />
          </a>
          <div class="news-content">
            <a class="news-content__title">Турцию снова открыли, ура, друзья. Узнайте о правилах въезда</a>
            <p class="news-content__text">
              Для проведения исследований используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований
              используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований используется разработанное компанией
            </p>
            <span class="news-content__date">10.06.2021</span>
            <a href="#" class="news-content__link link-text">Читать новость →</a>
          </div>
        </div>
        <div class="news-card">
          <a href="images/content/news-2.png" class="news-card__wrapper">
            <img class="news-card__img" src="images/content/news-2.png" alt="photo" />
          </a>
          <div class="news-content">
            <a class="news-content__title">Турцию снова открыли, ура, друзья. Узнайте о правилах въезда</a>
            <p class="news-content__text">
              Для проведения исследований используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований
              используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований используется разработанное компанией
            </p>
            <span class="news-content__date">10.06.2021</span>
            <a href="#" class="news-content__link link-text">Читать новость →</a>
          </div>
        </div>
        <div class="news-card">
          <a href="images/content/news-3.png" class="news-card__wrapper">
            <img class="news-card__img" src="images/content/news-3.png" alt="photo" />
          </a>
          <div class="news-content">
            <a class="news-content__title">Турцию снова открыли, ура, друзья. Узнайте о правилах въезда</a>
            <p class="news-content__text">
              Для проведения исследований используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований
              используется разработанное компанией специализированное программное обеспечение (онлайн&#8209;платформа InMedikum.Online) Для проведения исследований используется разработанное компанией
            </p>
            <span class="news-content__date">10.06.2021</span>
            <a href="#" class="news-content__link link-text">Читать новость →</a>
          </div>
        </div>
      </div>
      <a href="#" class="news__link--mobile link--grey">Посмотреть все новости</a>
    </div>
  </section>
  <a href="#form" class="button-mobile">Выбрать номер</a>
</main>

<?php include("footer.html"); ?>
