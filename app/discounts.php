<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Акции и скидки на путевки</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Акции и скидки на путевки</span>
        </li>
      </ul>
    </div>
  </div>
  <div itemscope itemtype="http://schema.org/Blog" class="discounts">
    <div class="container">
      <div class="discounts-inner">
        <aside class="discounts-aside">
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
        <div class="discounts-content">
          <p itemprop="description" class="discounts__text">
            Нередко, наряду с основными ценами, санатории Урала предлагают купить путевки по акциям или со скидками. Но период акций, как правило, невелик, и отследить их обычному обывателю бывает
            сложно. Для удобства поиска мы специально подобрали на одной странице акции, скидки и горящие путевки в санатории Челябинской области, санатории Башкирии. Среди них: акции для пенсионеров,
            акции "мать и дитя", акции для семей и многие другие.
          </p>
          <p itemprop="description" class="discounts__text">Туроператор «Премьер Тур» – официальный представитель санаториев Урала, предлагающий путевки по официальным ценам самих здравниц без комиссий и надбавок!</p>
          <ul class="discounts-list">
            <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="discounts-item">
              <img itemprop="image" src="images/content/discount-1.png" alt="" class="discounts-item__img" />
              <div class="discounts-item__info">
                <div class="discounts-item__box">
                  <h5 itemprop="headline" class="discounts-item__title">Акции для всех</h5>
                  <p itemprop="description" class="discounts-item__text">В данном разделе вы найдете информацию обо всех текущих акциях, скидках и спецпредложениях. Планируйте свой отдых с выгодой!</p>
                </div>
                <a href="discount-single.php" class="discounts-item__button button--red">Подробнее</a>
              </div>
            </li>
            <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="discounts-item">
              <img itemprop="image" src="images/content/discount-2.png" alt="" class="discounts-item__img" />
              <div class="discounts-item__info">
                <h5 itemprop="headline" class="discounts-item__title">Акции для пенсионеров</h5>
                <p itemprop="description" class="discounts-item__text">
                  На данной странице представлены все действующие акции для пенсионеров со значительной скидкой в самые лучшие и популярные санатории. Предъявление пенсионного удостоверения
                  обязательно.
                </p>
                <a href="discount-single.php" class="discounts-item__button button--red">Подробнее</a>
              </div>
            </li>
            <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="discounts-item">
              <img itemprop="image" src="images/content/discount-3.png" alt="" class="discounts-item__img" />
              <div class="discounts-item__info">
                <h5 itemprop="headline" class="discounts-item__title">Акции для сотрудников бюджетной сферы</h5>
                <p itemprop="description" class="discounts-item__text">
                  В данном разделе представлены акции и спецпредложения санаториев для работников бюджетной сферы ( работники медицины и образования, военнослужащие, сотрудников полиции, гос.
                  служащие,налоговые органы, пенсионный фонд и др.). Для получения скидки справка с места работы обязательна.
                </p>
                <a href="discount-single.php" class="discounts-item__button button--red">Подробнее</a>
              </div>
            </li>
            <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="discounts-item">
              <img itemprop="image" src="images/content/discount-4.png" alt="" class="discounts-item__img" />
              <div class="discounts-item__info">
                <h5 itemprop="headline" class="discounts-item__title">Акция Мать и дитя</h5>
                <p itemprop="description" class="discounts-item__text">
                  Акция «Мать и дитя» - прекрасная возможность отдохнуть взрослому с ребенком по сниженной цене и получить при этом множество приятных бонусов. Скидки действуют для детей дошкольного и
                  школьного возрастов.
                </p>
                <a href="discount-single.php" class="discounts-item__button button--red">Подробнее</a>
              </div>
            </li>
            <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="discounts-item">
              <img itemprop="image" src="images/content/discount-5.png" alt="" class="discounts-item__img" />
              <div class="discounts-item__info">
                <h5 itemprop="headline" class="discounts-item__title">Акция Семейный отдых</h5>
                <p itemprop="description" class="discounts-item__text">
                  Решили оздоровиться или просто отдохнуть всей семьей? В данном разделе мы собрали для вас текущие акции и спецпредложения от санаториев,домов отдыха и отелей по лучшим ценам.
                </p>
                <a href="discount-single.php" class="discounts-item__button button--red">Подробнее</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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
  <section class="advantages advantages--grey">
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
  <section class="reviews">
    <div class="container">
      <h2 class="reviews__title">
        Последние отзывы <br />
        клиентов об отдыхе
      </h2>
      <div class="review-wrapper">
        <div class="review">
          <div class="review-top">
            <div class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
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
              <span class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="review-top">
            <div class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
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
              <span class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="review-top">
            <div class="review__num">6.2</div>
            <div class="review-top__wrapper">
              <h5 class="review__title">Санаторий «Якты–Куль» на озере Банное, Башкирия</h5>
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
              <span class="review__date">07 июня 2021</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


<?php include("footer.html"); ?>
