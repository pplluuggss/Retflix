<?php
  session_start();
  require_once 'assets/php/config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Подключение стилей -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- player -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <title>RETFLIX</title>
  </head>
  <body>
    <!-- Общий контейнер -->
    <div class="wrapper">
      <!-- Авторизация-Регистрация -->
      <div class="modal-window">
        <div class="modal-window__container">
          <div class="modal-window__login modal-window-login">
            <div class="modal-window__login__header">
              <div class="modal-window__login__logo">
                <img src="assets/img/logo.svg" alt="logo">
                <p>Авторизация</p>
              </div>
              <div class="modal-window__close">Закрыть</div>
            </div>
            <form action="assets/php/signin.php" method="post">
              <label for="email">Почта</label>
              <input type="email" id="email" name="email" placeholder="Почта" required onchange="prov()">
              <label for="password">Пароль</label>
              <input type="password" id="password" name="password" placeholder="Пароль" required onchange="prov()">
              <a href="#" class="reset-password">Забыл пароль</a>
              <button type="submit" id="login" name="login" class="buttton-login">Войти</button>
              <p>Нет аккаунта? <a class="login">Зарегестрироваться</a></p>
              <?php
                if (isset($_SESSION['message'])){
                  echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                  
                }
                unset($_SESSION['message']);
              ?>
            </form>
          </div>
          <div class="modal-window__login modal-window-register" >
            <div class="modal-window__login__header">
              <div class="modal-window__login__logo">
                <img src="assets/img/logo.svg" alt="logo">
                <p>Регистрация</p>
              </div>
              <div class="modal-window__close">Закрыть</div>
            </div>
            <form action="assets/php/signup.php" method="post">
              <label for="name">Имя</label>
              <input type="text" id="name" name="name" placeholder="Имя" required onchange="provv()">
              <label for="email">Почта</label>
              <input type="email" id="email" name="email" placeholder="Почта" required onchange="provv()">
              <label for="password">Пароль</label>
              <input type="password" id="password" name="password" placeholder="Пароль" required onchange="provv()">
              <label for="password">Подтверждение пароля</label>
              <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтвердите пароль" required onchange="provv()">
              <div>
                <input
                  type="checkbox"
                  class="custom-checkbox"
                  id="blank"
                  name="blank"
                  value="yes"
                  required
                />
                <label for="blank"
                  ><p>Я принимаю <a>Условия пользования </a> и <a> Политику конфиденциальности </a></p></label
                >
              </div>
              <button type="submit" id="register" name="register" class="button-register">Продолжить</button>
              <p>Есть аккаунта? <a class="register">Войти</a></p>
              <?php
                if (isset($_SESSION['message'])){
                  echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                  
                }
                unset($_SESSION['message']);
              ?>
            </form>
          </div>
          
        </div>
        <span></span>
      </div>
      <!-- Шапка -->
      <header class="header _container">
        <div class="header__section1">
          <a href="index.php" class="header__logo">
            <img src="assets/img/logo.svg" alt="logo" />
          </a>
          <nav class="header__nav">
            <ul class="header__menu">
              <li class="header__item">
                <a href="index.php" class="header__link"><span>Главная</span></a>
              </li>
              <li class="header__item">
                <a href="#" class="header__link">Фильмы</a>
              </li>
              <li class="header__item">
                <a href="#" class="header__link">Сериалы</a>
              </li>
              <li class="header__item">
                <a href="news.php" class="header__link">Новости</a>
              </li>
              <li class="header__item">
                <a href="forum.php" class="header__link">Сообщество</a>
              </li>
              <li class="header__item">
                <a href="about.php" class="header__link">О нас</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="burger__container">
          <ul class="header__menu">
            <li class="header__item">
              <a href="index.php" class="header__link"><span>Главная</span></a>
            </li>
            <li class="header__item">
              <a href="#" class="header__link">Фильмы</a>
            </li>
            <li class="header__item">
              <a href="#" class="header__link">Сериалы</a>
            </li>
            <li class="header__item">
              <a href="news.php" class="header__link">Новости</a>
            </li>
            <li class="header__item">
              <a href="forum.php" class="header__link">Сообщество</a>
            </li>
            <li class="header__item">
              <a href="about.php" class="header__link">О нас</a>
            </li>
          </ul>
          <div class="burger__content">
            <button class="button1">Оформить подписку</button>
            <a href="search.php"><img src="assets/img/search.svg" alt="search" /></a>
            <button class="button2">Войти</button>
          </div>
        </div>
        <div class="header__section2">
          <button class="button1">Оформить подписку</button>
            <a href="search.php"><img src="assets/img/search.svg" alt="search" /></a>
          <button class="button2">Войти</button>
          <div class="burger">
            <span></span>
          </div>
        </div>
      </header>
      <form action="" method="get" class="search">
        <div><div class="search__container">
            <img src="assets/img/search.svg" alt="search">
            <input type="text" name="search">
            <img src="assets/img/reset.svg" alt="reset">
        </div></div>
        <div class="search__categories">
            <div class="search__category">
                <img src="assets/img/hearts.svg" alt="hearts">
                <p>Мелодрамы</p>
            </div>
            <div class="search__category">
                <img src="assets/img/knife.svg" alt="knife">
                <p>Ужасы</p>
            </div>
            <div class="search__category">
                <img src="assets/img/map.svg" alt="map">
                <p>Приключения</p>
            </div>
            <div class="search__category">
                <img src="assets/img/triller.svg" alt="triller">
                <p>Триллеры</p>
            </div>
            <div class="search__category">
                <img src="assets/img/detectiv.svg" alt="detectiv">
                <p>Детективы</p>
            </div>
            <div class="search__category">
                <img src="assets/img/drama.svg" alt="drama">
                <p>Драмы</p>
            </div>
            <div class="search__category">
                <img src="assets/img/rocket.svg" alt="rocket">
                <p>Фантастика</p>
            </div>
            <div class="search__category">
                <img src="assets/img/comedy.svg" alt="comedy">
                <p>Комедии</p>
            </div>
        </div>
      </form>
      <main>
        <section class="content-block">
          <h3>Результат поиска</h3>
          <div class="content__overlay-next">
            <img
              src="assets/img/arrow-right.svg"
              alt="arrow-right"
              class="overlay-next-img3"
            />
          </div>
          <div class="content">
          <?php
          if (isset($_GET['search'])){
            $search = $_GET['search'];
          } else{
            $search = "";
          }
          if (!$search){
            $recommend = mysqli_query($connect, query: "SELECT * FROM `recommend`");
          } else {
            $recommend = mysqli_query($connect, query: "SELECT * FROM `recommend` WHERE `title` LIKE '%".$search."%' ");
          }
            $recommend = mysqli_fetch_all($recommend);
            foreach($recommend as $recommend){
              ?>
              <input type="hidden" name="film_id" value="<?= $recommend[0]?>">
              <div class="content__item">
              <a href="series.php"><img src="<?php echo $recommend[1]?>" alt="film" /></a>
              <div class="content__title"><?= $recommend[2]?></div>
              <div class="content__rating">
                <img src="assets/img/star.svg" alt="star" />
                <p><?=$recommend[3] ?></p>
                <span1></span1>
                <span2></span2>
                <div><?= $recommend[4]?></div>
              </div>
            </div>
            <?php
            }
          ?>
          </div>
        </section>
        <section class="content-block">
          <h3>Рекомендуем</h3>
          <div class="content__overlay-next">
            <img
              src="assets/img/arrow-right.svg"
              alt="arrow-right"
              class="overlay-next-img3"
            />
          </div>
          <div class="content">
          <?php
            $recommend = mysqli_query($connect, query: "SELECT * FROM `recommend`");
            $recommend = mysqli_fetch_all($recommend);
            foreach($recommend as $recommend){
              ?>
              <input type="hidden" name="film_id" value="<?= $recommend[0]?>">
              <div class="content__item">
              <img src="<?php echo $recommend[1]?>" alt="film" />
              <div class="content__title"><?= $recommend[2]?></div>
              <div class="content__rating">
                <img src="assets/img/star.svg" alt="star" />
                <p><?=$recommend[3] ?></p>
                <span1></span1>
                <span2></span2>
                <div><?= $recommend[4]?></div>
              </div>
            </div>
            <?php
            }
          ?>
          </div>
        </section>
      </main>
    </div>
  </body>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
  <script src="assets/js/scripts.js"></script>
</html>
