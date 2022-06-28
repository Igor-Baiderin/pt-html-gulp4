<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Подарочный сертификат</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="clients.php">
            <span itemprop="name">Клиентам</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Подарочный сертификат</span>
        </li>
      </ul>
    </div>
  </div>
  <section class="clients-certificate">
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
              <a href="clients-status.php" class="clients-aside__link">Проверить статус заказа</a>
            </li>
            <li class="clients-aside__item">
              <div class="clients-aside__title">Подарочный сертификат</div>
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
              <input name="name" data-rules="required" type="text" placeholder="Ваше имя" required />
            </label>
            <div class="input-wrap aside-form__input">
              <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" />
            </div>
            <button type="submit" class="aside-form__button button--red">Проконсультироваться</button>
            <label class="main-form__label">
              <input class="main-form__checkbox" type="checkbox" required />
              Я ознакомился с политикой конфиденциальности
            </label>
          </form>
        </aside>
        <div class="clients-content">
          <div class="clients-wrapper">
            <p class="clients-wrapper__title filter__item-drop">Подарочный сертификат</p>
            <ul class="clients-aside__list">
              <li class="clients-aside__item">
                <a href="clients-question.php" class="clients-aside__link">Вопросы и ответы</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-payment.php" class="clients-aside__link">Cпособы оплаты</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-status.php" class="clients-aside__link">Проверить статус заказа</a>
              </li>
              <li class="clients-aside__item">
                <a href="clients-info.php" class="clients-aside__link">Информация по возврату</a>
              </li>
            </ul>
          </div>
          <p class="clients-certificate__text">
            Если Вы хотите подарить своим близким путешествие, но не уверены в том, какие даты будут для них удобны или в какую страну их влечет больше, Вы можете подарить Подарочный сертификат.
          </p>
          <p class="clients-certificate__text">Сумма, которую Вы хотите подарить, зависит только от Вас.</p>
          <p class="clients-certificate__text">
            Счастливый обладатель сертификата может выбрать любой тур в любую страну мира и отправиться отдыхать в удобное для него время в течение года – ровно столько будет действовать Ваш подарок.
            Если владельцу сертификата будет не хватать суммы, указанной в сертификате, он может самостоятельно добавить недостающую сумму и купить именно тот тур, который ему нравится.
          </p>
          <p class="clients-certificate__text">Приобрести Подарочный сертификат, а так же оформить по нему тур можно в любом из московских офисов «Дельфина».</p>
          <p class="clients-certificate__text">
            При покупке Подарочного сертификата Вы получаете: сам сертификат в красивом конверте, договор о покупке сертификата и чек о покупке. С текстом договора можно ознакомиться здесь .
          </p>
          <a href="#" class="clients-certificate__banner">
            <img class="clients-certificate__img" src="images/banner-4.png" alt="photo" />
            <p class="clients-certificate__title">Подарочный сертификат</p>
          </a>
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
        <input name="name" data-rules="required" type="text" placeholder="Ваше имя" required />
      </label>
      <div class="input-wrap aside-form__input">
        <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" />
      </div>
      <button type="submit" class="aside-form__button button--red">Проконсультироваться</button>
      <label class="main-form__label">
        <input class="main-form__checkbox" type="checkbox" required />
        Я ознакомился с политикой конфиденциальности
      </label>
    </form>
  </div>
</main>

<?php include("footer.html"); ?>
