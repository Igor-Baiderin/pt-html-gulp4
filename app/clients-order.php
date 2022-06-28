<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs breadcrumbs--client">
    <div class="container">
      <h2 class="breadcrumbs__title">Личный кабинет</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="clients-entry.php">
            <span itemprop="name">Личный кабинет</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Мои заказы</span>
        </li>
      </ul>
      <div class="breadcrumbs-client">
        <p class="breadcrumbs-client__name">Самигуллин Данил Игоревич</p>
        <div class="breadcrumbs-client__bottom">
          <p class="breadcrumbs-client__bonus breadcrumbs-client__bonus--hidden breadcrumbs-client__bonus--nobonus">У вас нет бонусов</p>
          <p class="breadcrumbs-client__bonus">У вас 365 бонусов</p>
          <button class="breadcrumbs-client__button">Выйти</button>
        </div>
      </div>
    </div>
  </div>
  <section class="clients-order">
    <div class="container">
      <div class="clients-inner">
        <aside class="clients-aside">
          <ul class="clients-aside__list">
            <li class="clients-aside__item">
              <div class="clients-aside__title">Мои заказы</div>
            </li>
            <li class="clients-aside__item">
              <a href="clients-favorites.php" class="clients-aside__link">Мое избранное</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-check.php" class="clients-aside__link">Проверить статус заказа</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-editing.php" class="clients-aside__link">Редактировать личные данные</a>
            </li>
          </ul>
        </aside>
        <div class="clients-content">
          <div class="clients-wrapper">
            <p class="clients-wrapper__title filter__item-drop">Мои заказы</p>
            <ul class="clients-aside__list">
              <li class="clients-aside__item">
                <a href="clients-favorites.php" class="clients-aside__link">Мое избранное</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-check.php" class="clients-aside__link">Проверить статус заказа</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-editing.php" class="clients-aside__link">Редактировать личные данные</a>
              </li>
            </ul>
          </div>
          <div class="clients-order__top">
            <h2 class="clients-order__title">Мои заказы</h2>
            <a href="#" class="clients-order__check link--grey">Проверить статус моего заказа</a>
          </div>
          <div class="clients-order__box clients-noorder clients-noorder--hidden">
            <p class="clients-order__box-title">У вас нет заказов</p>
            <a href="#" class="clients-order__box-link button--red">Подобрать тур</a>
          </div>
          <div class="clients-order__list">
            <ul class="rooms-wrapper rooms">
              <li class="rooms__item rooms__item--confirmed">
                <span class="rooms__item-date">22.07.2021</span>
                <div class="rooms__item-wrapper">
                  <div class="img-wrapper rooms__img-wrapper rooms__img--confirmed">
                    <img class="rooms__img" src="images/content/room-4.png" alt="photo" />
                    <a href="images/content/room-1.png" class="rooms__img-wrapper__link"></a>
                    <a href="images/content/room-4.png" class="rooms__img-wrapper__link"></a>
                  </div>
                  <div class="rooms-info">
                    <div class="rooms-info__top">
                      <div class="rooms-info__wrapper">
                        <p class="rooms__name">Санаторий «Якты-Куль»</p>
                        <p class="rooms__text">2-мест. Standard, можно написать более длинное название</p>
                      </div>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021</p>
                          <span>четверг</span>
                        </div>
                        <div class="tariffs-info__nights">
                          <p>до 8 июля (чт)</p>
                          <span>7 ночей</span>
                        </div>
                        <div class="tariffs-info__wrap">
                          <div class="tariffs-info__wrapper">
                      <p class="tariffs-info__text">Для:</p>
                      <div class="tariffs-info__people" data-people="3"></div>
                      <div class="tariffs-info__children"data-child="2" ></div>
                    </div>
                          <p class="tariffs-info__food">Питание: <span> All inclusive</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="rooms-info__bottom">
                      <p class="rooms__price"><span>153 000 руб</span></p>
                      <button class="rooms__details">Посмотреть детали</button>
                      <button type="submit" class="rooms__button button--red">Оплатить</button>
                    </div>
                  </div>
                </div>
                <div class="rooms-info__description-wrap">
                  <div class="rooms-info__description">
                    <div class="tariffs-bottom">
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
                  </div>
                </div>
              </li>
              <li class="rooms__item rooms__item--noconfirmed">
                <span class="rooms__item-date">22.07.2021</span>
                <div class="rooms__item-wrapper">
                  <div class="img-wrapper rooms__img-wrapper rooms__img--noconfirmed">
                    <img class="rooms__img" src="images/content/room-4.png" alt="photo" />
                    <a href="images/content/room-2.png" class="rooms__img-wrapper__link"></a>
                    <a href="images/content/room-4.png" class="rooms__img-wrapper__link"></a>
                  </div>
                  <div class="rooms-info">
                    <div class="rooms-info__top">
                      <div class="rooms-info__wrapper">
                        <p class="rooms__name">Санаторий «Якты-Куль»</p>
                        <p class="rooms__text">2-мест. Standard, можно написать более длинное название</p>
                      </div>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021</p>
                          <span>четверг</span>
                        </div>
                        <div class="tariffs-info__nights">
                          <p>до 8 июля (чт)</p>
                          <span>7 ночей</span>
                        </div>
                        <div class="tariffs-info__wrap">
                          <div class="tariffs-info__wrapper">
                      <p class="tariffs-info__text">Для:</p>
                      <div class="tariffs-info__people" data-people="3"></div>
                      <div class="tariffs-info__children"data-child="2" ></div>
                    </div>
                          <p class="tariffs-info__food">Питание: <span> All inclusive</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="rooms-info__bottom">
                      <p class="rooms__price"><span>153 000 руб</span></p>
                      <button class="rooms__details">Посмотреть детали</button>
                      <button disabled="disabled" class="rooms__button rooms__button--disabled">Оплатить</button>
                    </div>
                  </div>
                </div>
                <div class="rooms-info__description-wrap">
                  <div class="rooms-info__description">
                    <div class="tariffs-bottom">
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
                  </div>
                </div>
              </li>
            </ul>
            <ul class="rooms-wrapper rooms rooms--last">
              <li class="rooms__item">
                <span class="rooms__item-date">19.05.2019</span>
                <div class="rooms__item-wrapper">
                  <div class="img-wrapper rooms__img-wrapper">
                    <img class="rooms__img" src="images/content/room-4.png" alt="photo" />
                    <a href="images/content/room-2.png" class="rooms__img-wrapper__link"></a>
                    <a href="images/content/room-4.png" class="rooms__img-wrapper__link"></a>
                  </div>
                  <div class="rooms-info">
                    <div class="rooms-info__top">
                      <div class="rooms-info__wrapper">
                        <p class="rooms__name">Санаторий «Якты-Куль»</p>
                        <p class="rooms__text">2-мест. Standard, можно написать более длинное название</p>
                      </div>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021</p>
                          <span>четверг</span>
                        </div>
                        <div class="tariffs-info__nights">
                          <p>до 8 июля (чт)</p>
                          <span>7 ночей</span>
                        </div>
                        <div class="tariffs-info__wrap">
                          <div class="tariffs-info__wrapper">
                      <p class="tariffs-info__text">Для:</p>
                      <div class="tariffs-info__people" data-people="3"></div>
                      <div class="tariffs-info__children"data-child="2" ></div>
                    </div>
                          <p class="tariffs-info__food">Питание: <span> All inclusive</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="rooms-info__bottom">
                      <p class="rooms__price"><span>153 000 руб</span></p>
                      <p class="rooms__details">Посмотреть детали</p>
                      <button type="submit" class="rooms__button button--red">Оплатить</button>
                    </div>
                  </div>
                </div>
                <div class="rooms-info__description-wrap">
                  <div class="rooms-info__description">
                    <div class="tariffs-bottom">
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
                  </div>
                </div>
              </li>
              <li class="rooms__item">
                <div class="rooms__item-wrapper">
                  <div class="img-wrapper rooms__img-wrapper">
                    <img class="rooms__img" src="images/content/room-4.png" alt="photo" />
                    <a href="images/content/room-2.png" class="rooms__img-wrapper__link"></a>
                    <a href="images/content/room-4.png" class="rooms__img-wrapper__link"></a>
                  </div>
                  <div class="rooms-info">
                    <div class="rooms-info__top">
                      <div class="rooms-info__wrapper">
                        <p class="rooms__name">Санаторий «Якты-Куль»</p>
                        <p class="rooms__text">2-мест. Standard, можно написать более длинное название</p>
                      </div>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021</p>
                          <span>четверг</span>
                        </div>
                        <div class="tariffs-info__nights">
                          <p>до 8 июля (чт)</p>
                          <span>7 ночей</span>
                        </div>
                        <div class="tariffs-info__wrap">
                          <div class="tariffs-info__wrapper">
                      <p class="tariffs-info__text">Для:</p>
                      <div class="tariffs-info__people" data-people="3"></div>
                      <div class="tariffs-info__children"data-child="2" ></div>
                    </div>
                          <p class="tariffs-info__food">Питание: <span> All inclusive</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="rooms-info__bottom">
                      <p class="rooms__price"><span>153 000 руб</span></p>
                      <p class="rooms__details">Посмотреть детали</p>
                      <button type="submit" class="rooms__button button--red">Оплатить</button>
                    </div>
                  </div>
                </div>
                <div class="rooms-info__description-wrap">
                  <div class="rooms-info__description">
                    <div class="tariffs-bottom">
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
                  </div>
                </div>
              </li>
              <li class="rooms__item">
                <div class="rooms__item-wrapper">
                  <div class="img-wrapper rooms__img-wrapper">
                    <img class="rooms__img" src="images/content/room-4.png" alt="photo" />
                    <a href="images/content/room-2.png" class="rooms__img-wrapper__link"></a>
                    <a href="images/content/room-4.png" class="rooms__img-wrapper__link"></a>
                  </div>
                  <div class="rooms-info">
                    <div class="rooms-info__top">
                      <div class="rooms-info__wrapper">
                        <p class="rooms__name">Санаторий «Якты-Куль»</p>
                        <p class="rooms__text">2-мест. Standard, можно написать более длинное название</p>
                      </div>
                      <div class="tariffs-info">
                        <div class="tariffs-info__date">
                          <p>01.07.2021</p>
                          <span>четверг</span>
                        </div>
                        <div class="tariffs-info__nights">
                          <p>до 8 июля (чт)</p>
                          <span>7 ночей</span>
                        </div>
                        <div class="tariffs-info__wrap">
                          <div class="tariffs-info__wrapper">
                      <p class="tariffs-info__text">Для:</p>
                      <div class="tariffs-info__people" data-people="3"></div>
                      <div class="tariffs-info__children"data-child="2" ></div>
                    </div>
                          <p class="tariffs-info__food">Питание: <span> All inclusive</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="rooms-info__bottom">
                      <p class="rooms__price"><span>153 000 руб</span></p>
                      <p class="rooms__details">Посмотреть детали</p>
                      <button type="submit" class="rooms__button button--red">Оплатить</button>
                    </div>
                  </div>
                </div>
                <div class="rooms-info__description-wrap">
                  <div class="rooms-info__description">
                    <div class="tariffs-bottom">
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
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
