<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Проверить статус заказа</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="clients.php">
            <span itemprop="name">Клиентам</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Проверить статус заказа</span>
        </li>
      </ul>
    </div>
  </div>
  <section class="status">
    <div class="container">
      <div class="clients-inner">
        <aside class="clients-aside">
          <ul class="clients-aside__list">
            <li class="clients-aside__item">
              <a href="clients-question.php" class="clients-aside__link">Вопросы и ответы</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-payment.php" class="clients-aside__link">Способы оплаты</a>
            </li>
            <li class="clients-aside__item">
              <div class="clients-aside__title">Проверить статус заказа</div>
            </li>
            <li class="clients-aside__item">
              <a href="clients-certificate.php" class="clients-aside__link">Подарочный сертификат</a>
            </li>
            <li class="clients-aside__item">
              <a href="clients-info.php" class="clients-aside__link">Информация по возврату</a>
            </li>
          </ul>
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
        <div class="clients-content">
          <div class="clients-wrapper">
            <p class="clients-wrapper__title filter__item-drop">Проверить статус заказа</p>
            <ul class="clients-aside__list">
              <li class="clients-aside__item">
                <a href="clients-question.php" class="clients-aside__link">Вопросы и ответы</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-payment.php" class="clients-aside__link">Cпособы оплаты</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-certificate.php" class="clients-aside__link">Подарочный сертификат</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-info.php" class="clients-aside__link">Информация по возврату</a>
              </li>
            </ul>
          </div>
          <div class="status-entry">
            <h4 class="status-entry__title">Проверка и оплата заказа</h4>
            <form action="" class="status-entry__form">
              <label class="input-wrap status-entry__input">
                <input type="text" placeholder="Номер заказа (PR*-*******)" required />
              </label>
              <label class="input-wrap status-entry__input">
                <input type="text" placeholder="Ваша фамилия" required />
              </label>
              <button class="status-entry__button button--red" type="submit">Проверить статус</button>
            </form>
          </div>
          <div class="status-wrapper status-wrapper--hidden">
            <h2 class="status__title">Проверить статус заказа</h2>
            <div class="status-main">
              <div class="status-main__item">
                <div class="status-main__title">Номер заказа:</div>
                <div class="status-main__number">PRT29450-21</div>
              </div>
              <div class="status-main__item">
                <div class="status-main__title">Статус заказа:</div>
                <div class="status-main__state">Подтверждено</div>
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
            <div class="status-links">
              <a href="#" class="status-link link-text">Заявка на аннуляцию или изменение</a>
              <a href="#" class="status-link link-text">Посмотреть договор</a>
              <a href="#" class="status-link link-text">Счет на оплату</a>
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
</main>

<?php include("footer.html"); ?>
