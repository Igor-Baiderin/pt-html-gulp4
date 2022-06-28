<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Вопросы-ответы</h2>
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
          <span itemprop="name">Вопросы-ответы</span>
        </li>
      </ul>
    </div>
  </div>
  <section class="questions">
    <div class="container">
      <div class="clients-inner">
        <aside class="clients-aside">
          <ul class="clients-aside__list">
            <li class="clients-aside__item">
              <div class="clients-aside__title">Вопросы и ответы</div>
            </li>
            <li class="clients-aside__item">
              <a href="clients-payment.php" class="clients-aside__link">Способы оплаты</a>
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
            <p class="clients-wrapper__title filter__item-drop">Вопросы и ответы</p>
            <ul class="clients-aside__list">
              <li class="clients-aside__item">
                <a href="clients-payment.php" class="clients-aside__link">Способы оплаты</a>
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
          <h2 class="questions__title">Условия бронирования, оплата, документы</h2>
          <ul class="questions-list">
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Могу ли я оформить бронирование на вашем сайте, а оплатить не на сайте?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Как долго ждать подтверждение заказа после получения статуса «заказ оформлен»?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Как узнать, что мой заказ с сайта подтвержден?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Могу я внести предоплату и оплатить заказ ближе к заезду?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Какие выдаются документы в поездку после онлайн-оплаты тура на сайте?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Какие виды банковских карт принимает ваша система для оплаты с сайта?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Как обеспечивается безопасность данных моей кредитной карты?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Оплата заказа банковской картой c сайта поступает сразу?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Сколько времени у меня есть на внесение оплаты по подтвержденному заказу?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Могу ли я отменить или изменить мой заказ?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
                <a href="mailto:mgn@premier-tur.com" class="questions-list__link">mgn@premier-tur.com</a>
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Как узнать, что мой заказ был аннулирован?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Могу ли я оплатить тур частично картой и частично наличными в вашем офисе?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Если я оплатил тур с помощью карты, а в дальнейшем его аннулировал, как я получу возврат — наличными или перечислением на карту?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Если я сделал предоплату одним способом, могу ли я произвести доплату другим?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Может ли оплатить (выкупить) путевку сторонний человек (мой знакомый, родственник и т.д.)?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
          </ul>
          <h2 class="questions__title">Размещение</h2>
          <ul class="questions-list">
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Что означают уровни отелей: «эконом», «стандарт», «комфорт», «высокий»?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
            </li>
            <li class="questions-list__item">
              <p class="questions-list__title filter__item-drop">Если я беру ребенка без места и без питания, мне нужно будет что-то платить за него?</p>
              <p class="questions-list__text">
                Да, отменить заказ вы можете в любой момент. Если аннуляция заказа происходит по уважительной причине с предоставлением справок, то штрафы не взимаются. Изменение бронирования также
                возможно, для его согласования звоните по телефонам в наши офисы или пишите на почту
              </p>
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