<?php include("header.html"); ?>

<main class="main">
  <div class="breadcrumbs">
    <div class="container">
      <h2 class="breadcrumbs__title">Заявка на регистрацию агентства</h2>
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="index.php">
            <span itemprop="name">Главная</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <a itemprop="item" href="agency.php">
            <span itemprop="name">Агентствам</span></a>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__list-item">
          <span itemprop="name">Заявка на регистрацию агентства</span>
        </li>
      </ul>
    </div>
  </div>
  <section class="application">
    <div class="container">
      <form action="" class="application-form">
        <div class="application-form__wrapper">
          <h2 class="application-form__title">Основная информация</h2>
          <div class="application-form__inputs">
            <label class="input-wrap application-form__input"><input type="text" placeholder="Контактное лицо*" minlength="2" name="name" data-rules="required" required /></label>
            <label class="input-wrap application-form__input"><input minlength="2" name="agency" type="text" placeholder="Название агентства*" data-rules="required" required /></label>
            <label class="input-wrap application-form__input"><input minlength="2" name="number" type="text" placeholder="ИНН (7731347089)" /></label>
          </div>
        </div>
        <div class="application-form__wrapper">
          <h2 class="application-form__title">Расположение</h2>
          <div class="application-form__inputs">
            <select data-placeholder="Выберите страну*" name="country" class="select-country" required>
              <option value=""></option>
              <option value="">Страна 1</option>
              <option value="">Страна 2</option>
              <option value="">Страна 3</option>
            </select>
            <label class="input-wrap application-form__input"><input type="text" placeholder="Город" name="city" data-rules="required" /></label>
            <label class="input-wrap application-form__input"><input type="text" placeholder="Адрес*" name="address" minlength="2" required data-rules="required" /></label>
          </div>
        </div>
        <div class="application-form__wrapper">
          <h2 class="application-form__title">Контакты</h2>
          <div class="application-form__inputs">
            <label class="input-wrap application-form__input"><input name="phone" type="tel" data-type="tel" placeholder="Телефон*" data-rules="required, tel" minlength="18" required /></label>
            <label class="input-wrap application-form__input"><input name="email" type="email" placeholder="E-mail*" required data-rules="required, email" /></label>
            <label class="input-wrap application-form__area">
              <textarea name="text" class="" placeholder="Дополнительная информация"></textarea>
            </label>
          </div>
          <label class="main-form__label">
            <input class="main-form__checkbox" type="checkbox" required />
            Я ознакомился с политикой конфиденциальности
          </label>
          <button type="submit" class="application-form__button button--red">Зарегистрировать агенство</button>
        </div>
      </form>
    </div>
  </section>
</main>

<?php include("footer.html"); ?>
