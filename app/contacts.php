<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Контакты</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Контакты</span>
        </li>
      </ul>
    </div>
  </div>
  <div itemscope itemtype="http://schema.org/Organization" class="contacts">
    <div class="container">
      <div class="contacts-phones">
        <div class="contacts-phones__wrapper">
          <a itemprop="telephone" href="tel:79128055303" class="contacts-phones__number contacts-phones__number--main">+7 (912) 805-53-03</a>
          <p class="contacts-phones__text">Единый телефон бронирования</p>
        </div>
        <div class="contacts-phones__wrapper">
          <a itemprop="telephone" href="tel:79128055303" class="contacts-phones__number contacts-phones__number--second">+7 (912) 805-53-03</a>
          <p class="contacts-phones__text">Телефон бухгалтерии</p>
        </div>
      </div>
      <div class="contacts-list">
        <div class="contacts-list__item" data-coords="[56.836564, 60.607841]">
          <p itemprop="addressLocality" class="contacts-list__city">г. Екатеринбург</p>
          <p itemprop="streetAddress" class="contacts-list__address">ул. Пушкина, д. 7 Л, оф. 111</p>
          <a itemprop="email" href="mailto:ekb@premier-tur.com" class="contacts-list__mail">ekb@premier-tur.com</a>
        </div>
        <div class="contacts-list__item" data-coords="[53.402063, 58.971155]">
          <p itemprop="addressLocality" class="contacts-list__city">г. Магнитогорск</p>
          <p itemprop="streetAddress" class="contacts-list__address">ул. Суворова, дом 114</p>
          <a itemprop="email" href="mailto:mgn@premier-tur.com" class="contacts-list__mail">mgn@premier-tur.com</a>
        </div>
        <div class="contacts-list__item" data-coords="[51.768762, 55.131891]">
          <p itemprop="addressLocality" class="contacts-list__city">г. Оренбург</p>
          <p itemprop="streetAddress" class="contacts-list__address">ул. Чкалова, дом 43а, офис 11</p>
          <a itemprop="email" href="mailto:orb@premier-tur.com" class="contacts-list__mail">orb@premier-tur.com</a>
        </div>
        <div class="contacts-list__item" data-coords="[54.726418, 55.947938]">
          <p itemprop="addressLocality" class="contacts-list__city">г. Уфа</p>
          <p itemprop="streetAddress" class="contacts-list__address">ул. Ленина, д. 28, офис 206</p>
          <a itemprop="email" href="mailto:ufa@premier-tur.com" class="contacts-list__mail">ufa@premier-tur.com</a>
        </div>
        <div class="contacts-list__item" data-coords="[55.156564, 61.406219]">
          <p itemprop="addressLocality" class="contacts-list__city">г. Челябинск</p>
          <p itemprop="streetAddress" class="contacts-list__address">ул. Цвиллинга, дом 46, офис 902</p>
          <a itemprop="email" href="mailto:chel@premier-tur.com" class="contacts-list__mail">chel@premier-tur.com</a>
        </div>
        <button type="submit" class="contacts-list__item contacts-list__button">
          <p class="contacts-list__call">Заказать звонок в&nbsp;компанию</p>
          <img class="contacts-list__img" src="images/icons/plus-grey.svg" alt="icon" />
        </button>
      </div>
    </div>
    <div class="contacts-map">
      <div id="map"></div>
    </div>
  </div>
  <div class="modal">
    <div class="modal-overlay"></div>
    <div class="modal-dialog modal-contacts__dialog">
      <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
      <h4 class="modal-dialog__title">Заказать звонок</h4>
      <p class="modal-dialog__text">Оставьте контакты и мы вам перезвоним</p>
      <form action="" class="modal-form">
        <div class="modal-form__input modal-form__input--office">
          <select data-placeholder="Выберите офис*" name="office" class="select-office" required>
              <option value=""></option>
              <option value="">Офис 1</option>
              <option value="">Офис 2</option>
              <option value="">Офис 3</option>
            </select>
        </div>
        <div class="input-wrap modal-form-input modal-form__input--name">
          <input name="name" type="text" placeholder="Ваше ФИО*" data-rules="required" required/>
        </div>
        <div class="input-wrap modal-form-input modal-form__input--tel">
          <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона*" data-rules="required, tel" required/>
        </div>
        <button type="submit" class="modal-form__button button--red">Заказать звонок</button>
        <div class="main-form__label">
          <input class="main-form__checkbox" type="checkbox" required/>
          Я ознакомился с политикой конфиденциальности
        </div>
      </form>
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
  </div>
</main>

<?php include("footer.html"); ?>
