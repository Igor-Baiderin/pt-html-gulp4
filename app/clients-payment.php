<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Способы оплаты</h2>
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
          <span itemprop="name">Способы оплаты</span>
        </li>
      </ul>
    </div>
  </div>
  <section class="payment">
    <div class="container">
      <div class="clients-inner">
        <aside class="clients-aside">
          <ul class="clients-aside__list">
            <li class="clients-aside__item">
              <a href="clients-question.php" class="clients-aside__link">Вопросы и ответы</a>
            </li>
            <li class="clients-aside__item">
              <div class="clients-aside__title">Способы оплаты</div>
            </li>

            <li class="clients-aside__item">
              <a href="clients-status.php" class="clients-aside__link">Проверить статус заказа</a>
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
              <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" required/>
            </label>
            <button type="submit" class="aside-form__button button--red">Проконсультироваться</button>
            <label class="main-form__label">
              <input class="main-form__checkbox" type="checkbox" required/>
              Я ознакомился с политикой конфиденциальности
            </label>
          </form>
        </aside>
        <div class="clients-content">
          <div class="clients-wrapper">
            <p class="clients-wrapper__title filter__item-drop">Способы оплаты</p>
            <ul class="clients-aside__list">
              <li class="clients-aside__item">
                <a href="clients-question.php" class="clients-aside__link">Вопросы и ответы</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-status.php" class="clients-aside__link">Проверить статус заказа</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-certificate.php" class="clients-aside__link">Подарочный сертификат</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-info.php" class="clients-aside__link">Информация по возврату</a>
              </li>
            </ul>
          </div>
          <ul class="payment-list">
            <li class="payment-list__item">
              <div class="payment-list__name filter__item-drop">
                <span class="payment-list__num">01</span>
                <p class="payment-list__title">Онлайн-оплата на сайте (КЕШБЕК 20%)</p>
              </div>
              <div class="payment-list__content">
                <p class="payment-list__text">Перейдите на страницу «Оплата заказа»</p>
                <p class="payment-list__text">Укажите номер заказа (например, PRT00001-20 – все буквы латинские) и фамилию, указанную при бронировании заказа, далее - "оплатить online".</p>
                <p class="payment-list__text">Оплата зачисляется мгновенно, ваучер будет выслан вам на почту, либо вы можете самостоятельно его скачать в кабинете заказа.</p>
                <a href="#" class="payment-list__button button--red">Оплата заказа</a>
              </div>
            </li>
            <li class="payment-list__item">
              <div class="payment-list__name filter__item-drop">
                <span class="payment-list__num">02</span>
                <p class="payment-list__title">Наличными или банковской картой в любом офисе продаж</p>
              </div>
              <div class="payment-list__content">
                <p class="payment-list__text">К оплате принимаются все виды карт.</p>
                <div class="contacts-list">
                  <div class="contacts-list__item">
                    <p class="contacts-list__city">г. Екатеринбург</p>
                    <p class="contacts-list__address">ул. Пушкина, д. 7 Л, оф. 111</p>
                    <a href="mailto:ekb@premier-tur.com" class="contacts-list__mail">ekb@premier-tur.com</a>
                  </div>
                  <div class="contacts-list__item">
                    <p class="contacts-list__city">г. Магнитогорск</p>
                    <p class="contacts-list__address">ул. Суворова, дом 114</p>
                    <a href="mailto:mgn@premier-tur.com" class="contacts-list__mail">mgn@premier-tur.com</a>
                  </div>
                  <div class="contacts-list__item">
                    <p class="contacts-list__city">г. Оренбург</p>
                    <p class="contacts-list__address">ул. Чкалова, дом 43а, офис 11</p>
                    <a href="mailto:orb@premier-tur.com" class="contacts-list__mail">orb@premier-tur.com</a>
                  </div>
                  <div class="contacts-list__item">
                    <p class="contacts-list__city">г. Уфа</p>
                    <p class="contacts-list__address">ул. Ленина, д. 28, офис 206</p>
                    <a href="mailto:ufa@premier-tur.com" class="contacts-list__mail">ufa@premier-tur.com</a>
                  </div>
                  <div class="contacts-list__item">
                    <p class="contacts-list__city">г. Челябинск</p>
                    <p class="contacts-list__address">ул. Цвиллинга, дом 46, офис 902</p>
                    <a href="mailto:chel@premier-tur.com" class="contacts-list__mail">chel@premier-tur.com</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="payment-list__item">
              <div class="payment-list__name filter__item-drop">
                <span class="payment-list__num">03</span>
                <p class="payment-list__title">По счету в банке</p>
              </div>
              <div class="payment-list__content">
                <p class="payment-list__text payment-list__text--mb">Счет на оплату заказа будет отправлен любым удобным для Вас способом.</p>
              </div>
            </li>
            <li class="payment-list__item">
              <div class="payment-list__name filter__item-drop">
                <span class="payment-list__num">04</span>
                <p class="payment-list__title">Оплата наличными при заселении в санатории по программе «Доверительный платеж»</p>
              </div>
              <div class="payment-list__content payment-list__content--mb">
                <p class="payment-list__text">Условия:</p>
                <ul class="payment-conditions">
                  <li class="payment-conditions__item">
                    Гарантированием заселения является ваучер и номер брони в системе туроператора "Премьер Тур", который будет выслан вам по электронной почте и/или смс.
                  </li>
                  <li class="payment-conditions__item">
                    В некоторых случаях обязательна предоплата в размере 1 суток проживания (либо иная предоплата, согласованная при бронировании) на счет туроператора, доплата возможна при заезде в
                    санаторий.
                  </li>
                  <li class="payment-conditions__item">При оплате путевки клиентом в санатории, бонусы на последующие заказы не начисляются.</li>
                </ul>
                <p class="payment-list__text payment-list__text--red">* Перечень санаториев с возможностью оплаты при заселении уточняйте у менеджеров туроператора "Премьер Тур".</p>
              </div>
            </li>
          </ul>
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
        <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" required/>
      </label>
      <button type="submit" class="aside-form__button button--red">Проконсультироваться</button>
      <label class="main-form__label">
        <input class="main-form__checkbox" type="checkbox" required/>
        Я ознакомился с политикой конфиденциальности
      </label>
    </form>
  </div>
</main>

<?php include("footer.html"); ?>