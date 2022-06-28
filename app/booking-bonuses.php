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
          <div class="booking-step">
            <span class="booking-step__num">01</span>
            <p class="booking-step__title">Заполните данные</p>
          </div>
          <div class="booking-step booking-step--active">
            <span class="booking-step__num">02</span>
            <p class="booking-step__title">Бонусы</p>
          </div>
          <div class="booking-step">
            <span class="booking-step__num">03</span>
            <p class="booking-step__title">Готово</p>
          </div>
        </div>
        <div class="booking-bonus">
          <div class="booking-bonus__info">
            <p class="booking-bonus__num">У вас есть 2100 бонусов</p>
            <p class="booking-bonus__text">Хотите оплатить ими часть покупки?</p>
            <div class="booking-bonus__wrapper">
              <button type="submit" class="booking-bonus__button booking-bonus__button--green">Пересчитать и забронировать</button>
              <button type="submit" class="booking-bonus__button booking-bonus__button--grey">Нет, спасибо. Буду копить</button>
            </div>
          </div>
          <img src="images/icons/bonus-green.svg" alt="" class="booking-bonus__img" />
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
