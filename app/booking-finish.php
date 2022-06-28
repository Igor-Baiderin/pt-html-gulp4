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
            <p class="booking-step__title">Готово</p>
          </div>
        </div>
        <div class="booking-confirmation">
          <h2 class="booking-confirmation__title">
            Ваш заказ успешно <br />
            оформлен и&nbsp;ожидает подтверждения
          </h2>
          <p class="booking-confirmation__text">Ожидайте звонка, мы вам перезвоним</p>
          <p class="booking-confirmation__order">
            Номер Вашего заказа:
            <span class="booking-confirmation__num">PRT29151-21</span>
          </p>
          <p class="booking-confirmation__payment booking-payment filter__item-drop">Ознакомится со способами оплаты ↓</p>
          <div class="booking-payment__wrapper">
            <ul class="booking-payment__list">
              <li class="booking-payment__item">
                <p class="booking-payment__title">
                  Наличными, либо <br />
                  через терминал в офисах
                </p>
                <p class="booking-payment__text">В любом нашем офисе наличным или безналичным расчетом</p>
              </li>
              <li class="booking-payment__item">
                <p class="booking-payment__title">
                  Оплата картой <br />
                  на сайте
                </p>
                <p class="booking-payment__text">Оплата картой онлайн на нашем сайте через безопасный платеж от сбербанка</p>
              </li>
              <li class="booking-payment__item">
                <p class="booking-payment__title">
                  Банковским <br />
                  переводом
                </p>
                <p class="booking-payment__text">
                  Банковский перевод по&nbsp;номеру <br />
                  счета в банке
                </p>
              </li>
              <li class="booking-payment__item">
                <p class="booking-payment__title">
                  Оплата <br />
                  при заселении
                </p>
                <p class="booking-payment__text">Вот сюда нужен текст</p>
              </li>
            </ul>
          </div>
          <div class="booking-confirmation__buttons">
            <a href="#" class="booking-confirmation__button button--red">Проверить статус заказа</a>
            <a href="" class="booking-confirmation__button link--grey">Вернуться на главную</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
