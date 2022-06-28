<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs breadcrumbs--agency">
    <div class="container">
      <h2 class="breadcrumbs__title">История заказов</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="agency-account.php">
            <span itemprop="name">Личный кабинет</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="#">
            <span itemprop="name">История заказов</span>
          </a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">PRT06637-17</span>
        </li>
      </ul>
      <div class="breadcrumbs-agency">
        <p class="breadcrumbs-agency__name">laravel@agel-nash.ru</p>
        <div class="breadcrumbs-agency__bottom">
          <button type="submit" class="breadcrumbs-agency__reduction">Редактировать</button>
          <button type="submit" class="breadcrumbs-agency__button">Выйти</button>
        </div>
      </div>
    </div>
  </div>
  <div class="agency-account">
    <div class="container">
      <nav class="agency-nav">
        <ul class="agency-nav__list">
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Личный кабинет</a></li>
          <li class="agency-nav__item">
            <p class="agency-nav__title">Личные заказы</p>
          </li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Договор с агенством</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Отчет агента</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Реквизиты</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">История заказов</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Проверка бонусов</a></li>
          <li class="agency-nav__item"><a href="#" class="agency-nav__link">Новости</a></li>
        </ul>
      </nav>
      <div class="agency-wrapper">
        <p class="agency-wrapper__title filter__item-drop">Личные заказы</p>
        <ul class="agency-wrapper__list">
          <li class="agency-wrapper__item">
            <a href="agency-account.php" class="agency-wrapper__link">Личный кабинет</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Договор с агенством</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Отчет агента</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Реквизиты</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">История заказов</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Проверка бонусов</a>
          </li>
          <li class="agency-wrapper__item">
            <a href="clients-favorites.php" class="agency-wrapper__link">Новости</a>
          </li>
        </ul>
      </div>
      <a href="#" class="agency-bonus">Проверка бонусов</a>
      <ul class="table">
        <div class="mobile-overflow">
          <li class="table-item table-item__title">
            <div class="table-order">№ заявки</div>
            <div class="table-creation">Создана</div>
            <div class="table-status">Статус</div>
            <div class="table-turist">Турист</div>
            <div class="table-object">Объект</div>
            <div class="table-arival">Заезд</div>
            <div class="table-price">Стоимость</div>
            <div class="table-paid">Оплачено</div>
          </li>
          <li class="table-item">
            <div class="table-top">
              <a href="#" class="table-order table-item__order table-item__order--green">PRT06637-17</a>
              <div class="table-creation table-item__creation">22.12.2022</div>
              <div class="table-status">Аннулировано без штрафа</div>
              <div class="table-turist">
                <p class="table-turist__name">Самигуллин Данил Игоревич</p>
                <p class="table-turist__date">01.01.1960 <span class="table-turist__date--grey">(61 год)</span></p>
                <p class="table-turist__document">123123123123 <span class="table-turist__document--grey">(паспорт)</span></p>
              </div>
              <div class="table-object table-item__object">Санаторий "Якты-Куль" Эконом. Корпус № 1, 5. Номер 2-местный однокомнатный</div>
              <div class="table-arival">26.12.2022</div>
              <div class="table-price">
                <p class="table-price__title">Стоимость</p>
                <p class="table-price__text">171 876 руб</p>
                <p class="table-price__title">К оплате:</p>
                <p class="table-price__text table-price__text--green">165 000 руб</p>
                <p class="table-price__days table-price__days--red">Заезд через 15 дн.</p>
                <p class="table-price__expired">Опл. просрочена!</p>
              </div>
              <div class="table-paid">
                <p class="table-paid__date">20.08.21</p>
                <p class="table-paid__price">70 000 руб <span class="table-paid__mark">ПЕРЕНОС P-22514-21</span></p>
                <p class="table-paid__date">20.08.21</p>
                <p class="table-paid__price">
                  70 000 руб
                  <span class="table-paid__mark">БЕЗНАЛ ПП 225</span>
                </p>
                <p class="table-paid__date">20.08.21</p>
                <p class="table-paid__price">
                  70 000 руб
                  <span class="table-paid__mark">БЕЗНАЛ ПП 225</span>
                </p>
                <div class="table-paid__debt table-paid__debt--hidden">
                  <p class="table-paid__text">Долг:</p>
                  <p class="table-paid__price table-paid__price--green">165 000 руб</p>
                </div>
              </div>
            </div>
            <div class="table-bottom">
              <div class="table-bottom__wrapper">
                <button class="table-bottom__button table-bottom__button--reduct">Редактировать заказ</button>
                <button class="table-bottom__button table-bottom__button--list">Лист бронирования</button>
                <button class="table-bottom__button table-bottom__button--transfer">Передать заказ</button>
              </div>
              <ul class="table-info">
                <li class="table-info__item"><button class="table-info__link table-info__contract">Договор</button></li>
                <li class="table-info__item">
                  <a href="#" download class="table-info__link table-info__voucher">Ваучер</a>
                </li>
                <li class="table-info__item"><a href="#" download class="table-info__link table-info__bill">Счет</a></li>
                <li class="table-info__item">
                  <button class="table-info__button table-info__button--cancel">Аннуляция</button>
                </li>
                <li class="table-info__item">
                  <button class="table-info__button">Запрос на перебронь</button>
                </li>
                <li class="table-info__item">
                  <p class="table-bottom__curator table-bottom__curator--hidden">Куратор: г. Челябинск</p>
                </li>
              </ul>
            </div>
          </li>
        </div>
      </ul>
      <div class="comments">
        <ul class="comments-user">
          <li class="comment comments-user__item">
            <div class="comment-avatar">
              <img src="images/icons/user-comment.svg" alt="" class="comment-avatar__img" />
            </div>
            <div class="comment-info user-comment__info">
              <p class="comment-info__name">Екатерина Назарова</p>
              <p class="comment-info__text">Коллеги, добрый вечер! Напишите,пожалуйста, имя второго человека ( кто едет по сертификату) мы сразу поставим на бронь. Бронь отредактирована</p>
              <p class="comment-info__date">22.07.21</p>
            </div>
          </li>
          <li class="comment comments-user__item">
            <div class="comment-avatar">
              <img src="images/icons/user-comment.svg" alt="" class="comment-avatar__img" />
            </div>
            <div class="comment-info user-comment__info">
              <p class="comment-info__name">Екатерина Назарова</p>
              <p class="comment-info__text">
                Коллеги, добрый вечер! Напишите,пожалуйста, имя второго человека ( кто едет по сертификату) мы сразу поставим на бронь. Бронь отредактирована Коллеги, добрый вечер!
                Напишите,пожалуйста, имя второго человека ( кто едет по сертификату) мы сразу поставим на бронь. Бронь отредактирована
              </p>
              <p class="comment-info__date">час назад</p>
            </div>
          </li>
        </ul>
        <ul class="comments-author">
          <li class="comment comments-author__item">
            <div class="comment-info user-comment__info">
              <p class="comment-info__name">Алина</p>
              <p class="comment-info__text">Коллеги, добрый вечер! Напишите,пожалуйста, имя второго человека ( кто едет по сертификату) мы сразу поставим на бронь. Бронь отредактирована</p>
              <p class="comment-info__date">22.07.21</p>
            </div>
            <div class="comment-avatar">
              <img src="images/icons/user-comment.svg" alt="" class="comment-avatar__img" />
            </div>
          </li>
          <li class="comment comments-author__item">
            <div class="comment-info user-comment__info">
              <p class="comment-info__name">Алина</p>
              <p class="comment-info__text">Коллеги, добрый вечер! Напишите,пожалуйста, имя второго человека ( кто едет по сертификату) мы сразу поставим на бронь. Бронь отредактирована</p>
              <p class="comment-info__date">22.07.21</p>
            </div>
            <div class="comment-avatar">
              <img src="images/icons/user-comment.svg" alt="" class="comment-avatar__img" />
            </div>
          </li>
        </ul>
        <ul class="comments-author comments-admin">
          <li class="comment comments-author__item">
            <div class="comment-info user-comment__info">
              <p class="comment-info__name comment-info__name--red">Данил Самигуллин</p>
              <p class="comment-info__text">Коллеги, добрый вечер! Напишите,пожалуйста, имя второго человека ( кто едет по сертификату) мы сразу поставим на бронь. Бронь отредактирована</p>
              <p class="comment-info__date">22.07.21</p>
              <div class="comment-attachment">
                <a href="#" class="comment-attachment__item">
                  <img src="images/icons/image.svg" alt="" class="comment-attachment__img" />
                </a>
                <a href="#" class="comment-attachment__item">
                  <img src="images/icons/document-comment.svg" alt="" class="comment-attachment__img" />
                </a>
              </div>
            </div>
            <div class="comment-avatar">
              <img src="images/icons/user-comment-red.svg" alt="" class="comment-avatar__img" />
            </div>
          </li>
        </ul>
        <form class="comments-form" method="POST" enctype="multipart/form-data">
          <div class="comments-form__title">Чат с менеджером о заказе № PRT06637-17</div>
          <textarea name="text" class="comments-form__area" placeholder="Ваше сообщение ..."></textarea>
          <div class="comments-form__bottom">
            <button type="submit" class="comments-form__button button--red">Отправить сообщение</button>
            <input type="file" data-browse="Прикрепить файл" data-placeholder="" multiple class="comments-form__attachment" />
          </div>
        </form>
      </div>
      <div class="modal modal-cancellation">
        <div class="modal-overlay"></div>
        <div class="modal-dialog modal-cancellation__dialog">
          <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
          <h4 class="modal-dialog__title">
            Заявка на аннуляцию <br />
            заказа <span class="modal-dialog__title-order">№PRT29969-21</span>
          </h4>
          <form action="" class="modal-form">
            <label class="input-wrap modal-form__textarea">
              <textarea name="text" placeholder="Пожалуйста, укажите причину"></textarea>
            </label>
            <button type="submit" class="modal-form__button button--red">Отправить</button>
          </form>
        </div>
      </div>
      <div class="modal modal-contract">
        <div class="modal-overlay"></div>
        <div class="modal-dialog modal-contract__dialog">
          <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
          <h4 class="modal-dialog__title">Формирование договора для клиента по заказу <span class="modal-dialog__title-order">№PRT29969-21</span></h4>
          <form action="" class="modal-form modal-contract">
            <div class="modal-contract__box">
              <div class="modal-contract__wrapper">
                <p class="modal-contract__text">Офис</p>
                <label class="input-wrap modal-contract-input">
                  <input name="office" type="text" value="Екатеринбург" />
                </label>
              </div>
              <div class="modal-contract__wrapper">
                <p class="modal-contract__text">Клиент</p>
                <label class="input-wrap modal-contract-input">
                  <input name="name" type="text" value="Ишимов И. И." />
                </label>
              </div>
            </div>
            <div class="modal-contract__box">
              <div class="modal-contract__wrapper">
                <p class="modal-contract__text">Телефон</p>
                <label class="input-wrap modal-contract-input">
                  <input name="tel" type="tel" data-type="tel" value="+7 982 100 59 99" data-rules="tel" />
                </label>
              </div>
              <div class="modal-contract__wrapper">
                <p class="modal-contract__text">Оплатить до</p>
                <!-- Одиночный календарь -->
                <label class="input-wrap modal-contract-input hero-form__input hero-form__input--calendarsingle">
                  <input name="date" data-type="date" type="text" placeholder="08.07.2021" />
                </label>
              </div>
            </div>
            <p class="modal-contract__text">Текст</p>
            <label class="input-wrap modal-contract__textarea">
              <textarea name="text" placeholder="УФМС России ..."></textarea>
            </label>
            <label class="modal-contract__label">
              <input type="checkbox" class="modal-contract__checkbox" />
              Убрать печать и подпись
            </label>
            <button type="submit" class="modal-contract__button button--red">Сформировать договор</button>
          </form>
        </div>
      </div>
      <div class="modal modal-changing">
        <div class="modal-overlay"></div>
        <div class="modal-dialog modal-changing__dialog">
          <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
          <h4 class="modal-dialog__title">
            Заявка на изменение <br />
            заказа <span class="modal-dialog__title-order">№PRT29969-21</span>
          </h4>
          <form action="" class="modal-form">
            <select data-placeholder="Выберите тему заявки*" name="theme" class="select-theme">
              <option value=""></option>
              <option value="">Тема 1</option>
              <option value="">Тема 2</option>
              <option value="">Тема 3</option>
            </select>
            <label class="input-wrap modal-form__textarea">
              <textarea name="text" placeholder="Ваш комментарий*" required></textarea>
            </label>
            <button type="submit" class="modal-form__button button--red">Отправить</button>
          </form>
        </div>
      </div>
      <div class="modal modal-list">
        <div class="modal-overlay"></div>
        <div class="modal-dialog modal-list__dialog">
          <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
          <h4 class="modal-dialog__title">
            Формирование листа <br />
            бронирования заказа <span class="modal-dialog__title-order">№PRT29969-21</span>
          </h4>
          <form action="" class="modal-form modal-list">
            <div class="modal-list__wrapper">
              <p class="modal-list__text">Сумма заказа</p>
              <label class="input-wrap modal-list__input">
                <input name="number" type="text" value="54400" required />
              </label>
            </div>
            <label class="input-wrap modal-list__textarea">
              <textarea name="text" placeholder="Примечание"></textarea>
            </label>
            <button type="submit" class="modal-list__button button--red">Сформировать</button>
          </form>
        </div>
      </div>
      <div class="modal modal-transfer">
        <div class="modal-overlay"></div>
        <div class="modal-dialog modal-contacts__dialog">
          <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
          <h4 class="modal-dialog__title">Передача заказа</h4>
          <form action="" class="modal-form">
            <div class="modal-form__input modal-form__input--office">
              <select data-placeholder="Выберите офис*" name="office" class="select-office" required>
                <option value=""></option>
                <option value="">Офис 1</option>
                <option value="">Офис 2</option>
                <option value="">Офис 3</option>
              </select>
            </div>
            <label class="input-wrap modal-list__textarea">
              <textarea name="text" placeholder="Примечание"></textarea>
            </label>
            <button type="submit" class="modal-form__button button--red">Отправить</button>
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
      <div class="modal-success">
        <div class="modal-overlay"></div>
        <img class="modal-close" src="images/icons/modal-close.svg" alt="" />
        <img src="images/icons/cloud.svg" alt="icon" class="modal-success__img" />
        <h4 class="modal-success__title">
          Ваша заявка <br />
          успешно отправлена!
        </h4>
        <p class="modal-success__text">В ближайшее время она будет рассмотрена, после чего с Вами свяжется наш менеджер.</p>
      </div>
    </div>
  </div>
</main>
<?php include("footer.html"); ?>
