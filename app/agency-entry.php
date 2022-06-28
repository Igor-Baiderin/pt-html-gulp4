<?php include("header.html"); ?>

<main class="main">
  <section class="agency-entry">
    <div class="container">
      <div class="agency-entry__wrapper">
        <h2 class="agency-entry__title">
          Вход <br />
          для агента
        </h2>
        <div class="breadcrumbs-entry">
          <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
              <a itemprop="item" href="index.php">
                <span itemprop="name">Главная</span>
              </a>
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
              <span itemprop="name">Вход для агента</span>
            </li>
          </ul>
        </div>
        <div class="agency-entry__form">
          <label class="input-wrap agency-entry__input"><input name="email" type="text" placeholder="Ваш e-mail*" data-rules="required, email"/></label>
          <label class="input-wrap agency-entry__input"><input name="password" type="text" placeholder="Ваш пароль*" data-rules="required, password"/ required></label>
          <button type="submit" class="agency-entry__button button--red">Войти</button>
          <div class="agency-entry__bottom">
            <a href="#" class="agency-entry__registration">Регистрация</a>
            <a href="#" class="agency-entry__password">Забыли пароль</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
