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
          <span itemprop="name">Мое избранное</span>
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
  <section class="clients-favorites">
    <div class="container">
      <div class="clients-inner">
        <aside class="clients-aside">
          <ul class="clients-aside__list">
            <li class="clients-aside__item">
              <a href="clients-order.php" class="clients-aside__link">Мои заказы</a>
            </li>
            <li class="clients-aside__item">
              <div class="clients-aside__title">Мое избранное</div>
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
          <p class="clients-wrapper__title filter__item-drop">Мое избранное</p>
          <ul class="clients-aside__list">
            <li class="clients-aside__item">
              <a href="clients-order.php" class="clients-aside__link">Мои заказы</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-check.php" class="clients-aside__link">Проверить статус заказа</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-editing.php" class="clients-aside__link">Редактировать личные данные</a>
            </li>
          </ul>
        </div>
        <h2 class="clients-favorites__title">
          Мое избранное
        </h2>
        <ul class="rooms-wrapper rooms">
        <li class="rooms__item">
          <div class="rooms__item-wrapper">
             <div class="img-wrapper">
              <button class="rooms-favorite__button"></button>
              <div class="rooms__img-wrapper">
                <img class="rooms__img" src="images/content/favorites-1.png" alt="photo" />
                <a href="images/content/favorites-3.png" class="rooms__img-link"></a>
                <a href="images/content/favorites-1.png" class="rooms__img-link"></a>
              </div>
            </div>
          <div class="rooms-info">
            <div class="rooms-info__top">
              <div class="rooms-info__wrapper">
                <p class="rooms__name">Санаторий «Якты-Куль»</p>
                <p class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
              </div>
              <ul class="rooms-categories">
                <li class="rooms-categories__item rooms-categories__item--bath">Ванная комната</li>
                <li class="rooms-categories__item rooms-categories__item--tv">Телевизор</li>
                <li class="rooms-categories__item rooms-categories__item--wifi">Wi-Fi</li>
                <li class="rooms-categories__item rooms-categories__item--fridge">Холодильник</li>
                <li class="rooms-categories__item rooms-categories__item--condition">Кондиционер</li>
              </ul>
              <div class="rooms-box">
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
               <p class="rooms__price">стоимость<br> <span>от 59 900 руб</span></p>
              </div>
            </div>
            <div class="rooms-info__bottom">
             <button class="rooms-info__button rooms__details">Показать описание</button>
              <a href="#" class="rooms__button button--red">Доступные номера ↓</a>
            </div>
          </div>
          </div>
        </li>
        <li class="rooms__item">
          <div class="rooms__item-wrapper">
            <div class="img-wrapper">
              <button class="rooms-favorite__button"></button>
              <div class="rooms__img-wrapper">
                <img class="rooms__img" src="images/content/favorites-2.png" alt="photo" />
                <a href="images/content/favorites-3.png" class="rooms__img-link"></a>
                <a href="images/content/favorites-2.png" class="rooms__img-link"></a>
              </div>
            </div>
          <div class="rooms-info">
            <div class="rooms-info__top">
              <div class="rooms-info__wrapper">
                <p class="rooms__name">Санаторий «Якты-Куль»</p>
                <p class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
              </div>
              <ul class="rooms-categories">
              <li class="rooms-categories__item rooms-categories__item--balcony">Балкон</li>
              <li class="rooms-categories__item rooms-categories__item--kitchen">Кухонная зона</li>
              <li class="rooms-categories__item rooms-categories__item--bed1">Односпальная кровать</li>
              <li class="rooms-categories__item rooms-categories__item--bed2">2 кровати</li>
              <li class="rooms-categories__item rooms-categories__item--bed3">3 кровати</li>
              <li class="rooms-categories__item rooms-categories__item--bed4">4 кровати</li>
            </ul>
              <div class="rooms-box">
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
               <p class="rooms__price">стоимость<br> <span>от 59 900 руб</span></p>
              </div>
            </div>
            <div class="rooms-info__bottom">
             <button class="rooms-info__button rooms__details">Показать описание</button>
              <a href="#" class="rooms__button button--red">Доступные номера ↓</a>
            </div>
          </div>
          </div>
        </li>
        <li class="rooms__item">
          <div class="rooms__item-wrapper">
           <div class="img-wrapper">
              <button class="rooms-favorite__button"></button>
              <div class="rooms__img-wrapper">
                <img class="rooms__img" src="images/content/favorites-3.png" alt="photo" />
                <a href="images/content/favorites-2.png" class="rooms__img-link"></a>
                <a href="images/content/favorites-3.png" class="rooms__img-link"></a>
              </div>
            </div>
          <div class="rooms-info">
            <div class="rooms-info__top">
              <div class="rooms-info__wrapper">
                <p class="rooms__name">Санаторий «Якты-Куль»</p>
                <p class="rooms__text">Эконом. Корпус № 5. 1-местный</p>
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
              <div class="rooms-box">
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
               <p class="rooms__price">стоимость<br> <span>от 59 900 руб</span></p>
              </div>
            </div>
            <div class="rooms-info__bottom">
             <button class="rooms-info__button rooms__details">Показать описание</button>
              <a href="#" class="rooms__button button--red">Доступные номера ↓</a>
            </div>
          </div>
          </div>
        </li>
    </ul>
      </div>
    </div>
  </section>
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
