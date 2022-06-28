<?php include("header.html"); ?>

<main class="main">
  <section class="booking">
    <div class="container">
      <h2 class="booking__title">Бронирование санатория «Якты–Куль»</h2>
      <div class="booking-container">
        <div class="booking-wrapper">
          <img href="images/content/booking.png" src="images/content/booking.png" alt="photo" class="booking__img" />
          <div class="booking-info">
            <p class="booking-info__title">Вы бронируете:</p>
            <p class="booking-info__name">Санаторий «Якты–Куль»</p>
            <p class="booking-info__room">Эконом. Корпус № 5. 1-местный номер (без&nbsp;душа)</p>
            <p class="booking-info__text">c 15.06.2021 по 22.06.2021 (7 ночей)</p>
            <p class="booking-info__price">Стоимость: <span>37 604 руб</span></p>
          </div>
          <div class="booking-conditions">
            <p class="booking-conditions__title">Условия размещения:</p>
            <ul class="booking-conditions__list">
              <li class="booking-conditions__item">2 взрослых</li>
              <li class="booking-conditions__item">3-разовое питание</li>
              <li class="booking-conditions__item">лечебное плавание</li>
              <li class="booking-conditions__item">фитнес-зал</li>
            </ul>
          </div>
        </div>
        <div class="booking-steps">
          <div class="booking-step booking-step--active">
            <span class="booking-step__num">01</span>
            <p class="booking-step__title">Заполните данные</p>
          </div>
          <div class="booking-step">
            <span class="booking-step__num">02</span>
            <p class="booking-step__title">Готово</p>
          </div>
        </div>
        <div class="booking-warning booking-warning--mobile">
          <p class="booking-warning__title">Пожалуйста, проверяйте правильность вводимых контактных данных.</p>
        </div>
        <p class="booking-information__title">Введите информацию о гостях</p>
        <div class="booking-information">
          <form class="booking-form">
            <div class="booking-form__inputs">
              <div class="booking-form__input-wrapper">
                <label class="input-wrap booking-form__input"><input name="name" type="text" placeholder="Ваше ФИО*" data-rules="required" required /></label>
              </div>
              <div class="booking-form__input-wrapper">
                <label class="input-wrap booking-form__input"><input name="date" type="text" placeholder="Дата рождения*" data-rules="required" data-type="date" required /></label>
              </div>
              <div class="booking-form__input-wrapper">
                <label class="input-wrap booking-form__input"> <input name="phone" type="tel" placeholder="Ваш номер телефона*" data-rules="required, tel"/ required> </label>
                <p class="booking-form__input-text">Для согласования с менеджером деталей заказа</p>
              </div>
              <div class="booking-form__input-wrapper">
                <label class="input-wrap booking-form__input"> <input name="email" type="email" placeholder="Ваш e-mail*" data-rules="required, email"/ required> </label>
                <p class="booking-form__input-text">Для получания информации о заказе и ваучера для заселения</p>
              </div>
            </div>

            <div class="booking-form__additional-guests"></div>

            <button type="button" class="booking-form__adding active">Хотите добавить данные остальных гостей?</button>
            <label class="input-wrap booking-form__textarea">
              <textarea name="text" placeholder="Комментарий к заказу"></textarea>
            </label>
            <label class="main-form__label">
              <input class="main-form__checkbox" type="checkbox" required />
              Принимаю условия договора публичной оферты
            </label>
            <label class="main-form__label">
              <input class="main-form__checkbox" type="checkbox" />
              Хочу получать SMS о статусе заказа
            </label>
            <button type="submit" class="booking-form__button button--red">Забронировать</button>
          </form>
          <div class="booking-warning">
            <p class="booking-warning__title">Пожалуйста, проверяйте правильность вводимых контактных данных.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
