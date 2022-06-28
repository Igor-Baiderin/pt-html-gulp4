<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Избранное</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Избранное</span>
        </li>
      </ul>
    </div>
  </div>
  <section class="favorites">
    <div class="container">
      <p class="favorites__amount"><span>3</span> объекта вы добавили в избранное</p>
      <ul itemscope itemtype="http://schema.org/ItemList" class="rooms-wrapper rooms">
        <li itemscope itemprop="itemListElement" itemtype="http://schema.org/Product" class="rooms__item">
          <div class="rooms__item-wrapper">
            <div class="img-wrapper">
              <button class="rooms-favorite__button"></button>
                <div class="rooms__img-wrapper">
                <img itemprop="image" class="rooms__img" src="images/content/favorites-1.png" alt="photo" />
                <a href="images/content/favorites-3.png" class="rooms__img-link"></a>
                <a href="images/content/favorites-1.png" class="rooms__img-link"></a>
              </div>
            </div>
          <div class="rooms-info">
            <div class="rooms-info__top">
              <div class="rooms-info__wrapper">
                <p itemprop="name" class="rooms__name">Санаторий «Якты-Куль»</p>
                <p class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
              </div>
              <div class="rooms-info__box">
                <div class="rooms-info__date">
                  <p>01.07.2021</p>
                  <p>четверг</p>
                </div>
                <div class="rooms-info__nights">
                  <p>до 8 июля(чт)</p>
                  <p>7 ночей</p>
                </div>
                <div class="rooms-info__people">
                  <div class="rooms-info__people-wrapper">
                    <div class="rooms-info__people--adult" data-people="1"></div>
                    <div class="rooms-info__people--children" data-child="1"></div>

                  </div>
                  <div class="rooms-info__people-text">человек</div>
                </div>
              </div>
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
              <p class="rooms__price">стоимость: <span itemprop="price">от 5900 руб</span></p>
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
                <img  itemprop="image"class="rooms__img" src="images/content/favorites-2.png" alt="photo" />
                <a href="images/content/favorites-1.png" class="rooms__img-link"></a>
                <a href="images/content/favorites-2.png" class="rooms__img-link"></a>
              </div>
            </div>
          <div class="rooms-info">
            <div class="rooms-info__top">
              <div class="rooms-info__wrapper">
                <p itemprop="name" class="rooms__name">Санаторий «Якты-Куль»</p>
                <p class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
              </div>
              <div class="rooms-info__box">
                <div class="rooms-info__date">
                  <p>01.07.2021</p>
                  <p>четверг</p>
                </div>
                <div class="rooms-info__nights">
                  <p>до 8 июля(чт)</p>
                  <p>7 ночей</p>
                </div>
                <div class="rooms-info__people">
                  <div class="rooms-info__people-wrapper">
                    <div class="rooms-info__people--adult" data-people="1"></div>
                    <div class="rooms-info__people--children" data-child="1"></div>

                  </div>
                  <div class="rooms-info__people-text">человек</div>
                </div>
              </div>
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
              <p class="rooms__price">стоимость: <span itemprop="price">от 5900 руб</span></p>
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
                <img itemprop="image" class="rooms__img" src="images/content/favorites-3.png" alt="photo" />
                <a href="images/content/favorites-1.png" class="rooms__img-link"></a>
                <a href="images/content/favorites-2.png" class="rooms__img-link"></a>
                <a href="images/content/favorites-3.png" class="rooms__img-link"></a>
              </div>
          </a>
            </div>
          <div class="rooms-info">
            <div class="rooms-info__top">
              <div class="rooms-info__wrapper">
                <p itemprop="name" class="rooms__name">Санаторий «Якты-Куль»</p>
                <p class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
              </div>
              <div class="rooms-info__box">
                <div class="rooms-info__date">
                  <p>01.07.2021</p>
                  <p>четверг</p>
                </div>
                <div class="rooms-info__nights">
                  <p>до 8 июля(чт)</p>
                  <p>7 ночей</p>
                </div>
                <div class="rooms-info__people">
                  <div class="rooms-info__people-wrapper">
                    <div class="rooms-info__people--adult" data-people="1"></div>
                    <div class="rooms-info__people--children" data-child="1"></div>

                  </div>
                  <div class="rooms-info__people-text">человек</div>
                </div>
              </div>
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
              <p class="rooms__price">стоимость: <span itemprop="price">от 5900 руб</span></p>
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
    </ul>
  </section>
  <section class="main-form">
    <div class="container">
      <div class="main-form__wrapper">
        <div class="main-form__info">
          <h2 class="main-form__title">Есть вопросы или требуется консультация менеджера?</h2>
          <p class="main-form__text">Оставьте свой телефон и мы вам поможем</p>
        </div>
        <form class="main-form__box">
          <label class="input-wrap main-form__input">
            <input name="name" type="text" data-rules="required" placeholder="Ваше имя" required/>
          </label>
          <label class="input-wrap main-form__input">
            <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" required/>
          </label>
          <button class="main-form__button button--red" type="submit">Консультация</button>
          <label class="main-form__label">
            <input class="main-form__checkbox" type="checkbox" required/>
            Я ознакомился с политикой конфиденциальности и согласен с условиями обработки персональных данных
          </label>
        </form>
      </div>
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
            <p class="banner-slider__text">Никаких топливных сборов</p>
            <span class="banner-slider__span">до 10.08.21 г</span>
            <a href="#" class="banner-slider__link link-text">Подробнее об акции →</a>
          </div>
        </div>
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
</main>


<?php include("footer.html"); ?>
