<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Информация по возврату и аннуляции</h2>
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
          <span itemprop="name">Информация по возврату и аннуляции</span>
        </li>
      </ul>
    </div>
  </div>
  <section class="refund">
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
              <a href="clients-certification.php" class="clients-aside__link">Подарочный сертификат</a>
            </li>
            <li class="clients-aside__item">
              <div class="clients-aside__title">Информация по возврату</div>
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
            <div class="input-wrap aside-form__input">
              <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" required />
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
            <p class="clients-wrapper__title filter__item-drop">Информация по возврату</p>
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
                <a href="clients-certificate.php" class="clients-aside__link">Подарочный сертификат</a>
              </li>
            </ul>
          </div>
          <p class="refund__text">
            После того, как вы приобрели тур в турагентстве, оно обязано отправить денежные средства туроператору. В онлайн-турагентствах этот процесс занимает несколько секунд, т.к. после оплаты
            тура, денежные средства туроператор получает почти моментально (система автоматически зачисляет их на баланс туроператора), в обычных офлайн агентствах, турагент должен вручную отправить
            туроператору деньги, из-за чего, иногда, возникают проблемы в разницы курсах валют.
          </p>
          <p class="refund__text">
            Если что-то пошло не так при реализации тура и вы хотите вернуть деньги, то взаимодействие по возвратам осуществляется в связке: Клиент-Турагентство-Туроператор. Все обращения, которые
            турист направляет в турагентство по купленному туру, турагент перенаправляет к Туроператору. Как только Туроператор дает «добро» на возврат денежных средств, то такой возврат сначала
            приходит в Турагентство, а затем турагентство уже возвращает сумму денежных средств клиенту. Отметим здесь, что Туроператор возвращает сумму за вычетом агентского вознаграждения, поэтому
            турагентство обязано компенсировать данное вознаграждение, полученное за тур, туристу самостоятельно, если иное не прописано в договоре с туристом и турагентством.
          </p>
          <p class="refund__text">
            Клиент также имеет право обратиться напрямую к туроператору, минуя агентство, однако, сроки ответа от туроператора на подобные частные обращения могут быть длительными. В некоторых случаях
            туроператор и вовсе не общается с туристами, отправляя их в турагентство, где они купили тур, при этом, туроператор имеет право это делать только в случае, если соответствующий пункт
            прописан в агентском договоре с турагентством.
          </p>
          <a href="#" class="refund-blank">
            <img src="images/icons/document-red.svg" alt="icon" class="refund-blank__img" />
            <p class="refund-blank__text">
              Заполнить бланк <br />
              для&nbsp;возврата денежных средств
            </p>
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
        <input name="name" type="text" placeholder="Ваше имя" data-rules="required" required />
      </label>
      <label class="input-wrap aside-form__input">
        <input name="phone" type="tel" data-type="tel" placeholder="Ваш номер телефона" data-rules="tel" />
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
