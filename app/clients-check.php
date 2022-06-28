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
          <span itemprop="name">Проверить статус заказа</span>
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
  <section class="clients-check">
    <div class="container">
      <div class="clients-inner">
        <aside class="clients-aside">
          <ul class="clients-aside__list">
            <li class="clients-aside__item">
              <a href="clients-order.php" class="clients-aside__link">Мои заказы</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-favorites.php" class="clients-aside__link">Мое избранное</a>
            </li>
            <li class="clients-aside__item">
              <div class="clients-aside__title">Проверить статус заказа</div>
            </li>
            <li class="clients-aside__item">
              <a href="clients-editing.php" class="clients-aside__link">Редактировать личные данные</a>
            </li>
          </ul>
        </aside>
        <div class="clients-content">
          <div class="clients-wrapper">
            <p class="clients-wrapper__title filter__item-drop">Проверить статус заказа</p>
            <ul class="clients-aside__list">
              <li class="clients-aside__item">
                <a href="clients-order.php" class="clients-aside__link">Мои заказы</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-favorites.php" class="clients-aside__link">Мое избранное</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-editing.php" class="clients-aside__link">Редактировать личные данные</a>
              </li>
            </ul>
          </div>
          <h2 class="clients-check__title">Проверить статус заказа</h2>
          <form class="clients-check__form clients-check__form--hidden">
            <input type="text" class="clients-check__input" placeholder="Ваш номер заказа (PR*-*******)" />
            <button type="submit" class="clients-check__button button--red">Проверить статус</button>
          </form>
          <div class="status-wrapper">
            <div class="status-main">
              <div class="status-main__item">
                <div class="status-main__title">Номер заказа:</div>
                <div class="status-main__number">PRT29450-21</div>
              </div>
              <div class="status-main__item">
                <div class="status-main__title">Статус заказа:</div>
                <div class="status-main__state status-main__state--confirmed">Подтверждено</div>
                <div class="status-main__state status-main__state--hidden status-main__state--waiting">ожидает подтверждение</div>
                <div class="status-main__state status-main__state--hidden status-main__state--paid">оплачено</div>
              </div>
              <div class="status-main__item">
                <div class="status-main__title">ФИО заказчика</div>
                <div class="status-main__name">Савичева Светлана Ивановна</div>
              </div>
            </div>
            <p class="status__text">
              Санаторий "Янган–Тау". Номер (Корпус 8-13 Оздоровительный комплекс. 1-местный). 1 взрослый c 04.10.2021 по 15.10.2021 (12 дней). С питанием и лечением: Одноместное размещение.
            </p>
            <ul class="status-list">
              <li class="status-list__item">
                <h4 class="status-list__title">Санаторий:</h4>
                <p class="status-list__text">Янган-Тау</p>
              </li>
              <li class="status-list__item">
                <h4 class="status-list__title">Тип номера:</h4>
                <p class="status-list__text">Корпус 8-13 Оздоровительный комплекс. 1-местный</p>
              </li>
              <li class="status-list__item">
                <h4 class="status-list__title">Условия размещения:</h4>
                <p class="status-list__text">согласно прайсу "Проживание, питание, лечение в Оздоровительном комплексе"</p>
              </li>
              <li class="status-list__item">
                <h4 class="status-list__title">Проживание:</h4>
                <p class="status-list__text">
                  c 04 октября 2021 по 15 октября 2021 (12 дней). Расчетный час заезда в санаторий составляет 24:00, имеется возможность заехать накануне дня начала действия путевки после 20:00. В
                  этом случае ужин предусмотрен за отдельную плату. Выезд осуществляется до 24:00. в последний день, указанный в путевке.
                </p>
              </li>
              <li class="status-list__item">
                <h4 class="status-list__title">Количество человек:</h4>
                <p class="status-list__text">1 взрослый</p>
              </li>
              <li class="status-list__item">
                <h4 class="status-list__title">Дата оформления заявки:</h4>
                <p class="status-list__text">21 июня 2021, 13:05:31</p>
              </li>
            </ul>
            <div class="status-price">
              <h4 class="status-price__text">Сумма заказа:</h4>
              <span class="status-price__num">41 400 руб</span>
            </div>
            <div class="status-buttons">
              <a href="#" class="status-button button--green">Оплатить онлайн</a>
              <a href="#" class="status-button button--red">Иные способы оплаты</a>
            </div>
            <div class="clients-disabled clients-disabled--hidden">
              <div class="clients-order__box">
                <p class="clients-order__box-title">
                  Оплатить заказ можно <br />
                  только после подтверждения.
                </p>
                <div class="clients-order__box-text">Пожалуйста, ожидайте!</div>
              </div>
              <div class="status-buttons status-buttons--disabled">
                <button disabled="disabled" class="status-button button--disabled">Оплатить онлайн</button>
                <button disabled="disabled" class="status-button button--disabled">Иные способы оплаты</button>
              </div>
            </div>
            <div class="status-links">
              <a href="#" class="status-link link-text">Заявка на аннуляцию или изменение</a>
              <a href="#" class="status-link link-text">Посмотреть договор</a>
              <a href="#" class="status-link link-text status-link--hidden">Счет на оплату</a>
              <a href="#" class="status-link status-link--green">Ваучер</a>
            </div>
            <div class="status-info">
              <p class="status-info__text">
                Савичева Светлана Ивановна, выбирая способ "Оплата Online", Вы будете перенаправлены на платежный шлюз ПАО СБЕРБАНК. Соединение с платежным шлюзом и передача информации осуществляется
                в защищенном режиме с использованием протокола шифрования SSL. В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa или MasterCard
                SecureCode для проведения платежа также может потребоваться ввод специального пароля. Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой персональной
                информации обеспечивается ПАО СБЕРБАНК. Введенная информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ. Проведение платежей по
                банковским картам осуществляется в строгом соответствии с требованиями платежных систем МИР, Visa Int. и MasterCard Europe Sprl.
              </p>
              <p class="status-info__text">
                После успешной оплаты на указанную в форме оплаты электронную почту будет направлен электронный чек с информацией о заказе и данными по произведенной оплате.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
