<?php include("header.html"); ?>

<main class="main">
  <section class="clients-entry">
    <div class="container">
      <div class="clients-entry__wrapper">
        <h2 class="clients-entry__title">
          Вход <br />
          для клиента
        </h2>
        <div class="breadcrumbs-entry">
          <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
              <a itemprop="item" href="index.php">
                <span itemprop="name">Главная</span></a>
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
              <span itemprop="name">Вход для клиента</span>
            </li>
          </ul>
        </div>
        <div class="clients-entry__form">
          <label class="input-wrap clients-entry__input">
            <input name="email" type="email" placeholder="Ваш e-mail*" data-rules="required, email"/>
          </label>
          <label class="input-wrap clients-entry__input">
            <input name="password" type="password" placeholder="Ваш пароль*" data-rules="required"/>
          </label>
          <button type="submit" class="clients-entry__button button--red">Войти</button>
          <div class="clients-entry__bottom">
            <a href="#" class="clients-entry__registration">Регистрация</a>
            <a href="#" class="clients-entry__password">Забыли пароль</a>
          </div>
        </div>
        <div class="social">
          <h4 class="social__title">Войти через сервисы</h4>
          <div class="social-wrapper">
            <a href="#" class="social__link social__link--red">
              <img src="images/icons/google.svg" alt="" />
            </a>
            <a href="#" class="social__link social__link--blue">
              <img src="images/icons/vk.svg" alt="" />
            </a>
            <a href="#" class="social__link social__link--orange">
              <img src="images/icons/ok.svg" alt="" />
            </a>
            <a href="#" class="social__link social__link--darkblue">
              <img src="images/icons/mail.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
