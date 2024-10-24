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
    <div class="hero-player">
      <span></span>
      <div class="hero-player-close">
        <span></span>
      </div>
      <video id="player" playsinline controls data-poster="assets/img/hero-series.jpg">
      <source
        src="assets/video/Сериал  Счастье  (Happiness). Любительский трейлер..mp4"
        type="video/mp4"
      />

      <track
        kind="captions"
        label="English captions"
        src="/path/to/captions.vtt"
        srclang="en"
        default
      />
    </video>
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
                <a href="index.php" class="header__link">Главная</a>
              </li>
              <li class="header__item">
                <a href="#" class="header__link">Фильмы</a>
              </li>
              <li class="header__item">
                <a href="series.php" class="header__link"><span>Сериалы</span></a>
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
      
      <div class="series">
        <div class="hero__item">
          <div class="hero__overlay"></div>
          <video
            id="series"
            src="assets/video/Сериал  Счастье  (Happiness). Любительский трейлер..mp4"
            loop
            poster="assets/img/hero-series.jpg"
          ></video>
          <div class="hero__content">
            <div class="details">
              <div class="details__title">Счастье</div>
              <div class="details__text detail__text__series">
              1 сезон • 2021 • Фантастика • Драма • Ужасы • Мелодрама
              </div>
              <div class="details__buttons">
                <button class="button1" id="hero-play">
                  <img src="assets/img/play.svg" alt="play" />
                  <p>Смотреть</p>
                </button>
                <button class="button2">
                  <img src="assets/img/favorite.svg" alt="play" />
                  <p>Избранное</p>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <main>
        <section class="series-block">
          <div class="series-block-about">
            <div class="series-block-about-title">О сериале</div>
            <div class="series-block-about-text">Сэ Бо заключает фиктивный брак с лучшим другом Ин Хеном, чтобы получить квартиру. Заехав в нее, пара оказывается отрезанной от остального мира из-за карантина. С каждым днем неприязнь и напряжение между соседями нарастают, ведь в доме есть зараженные.</div>
          </div>
          <div class="series-block-autors">
            <div class="series-block-autors-title">Создатели и актеры</div>
            <div class="series-block-autors-cards">
              <div class="series-block-autors-card">
                <img src="assets/img/aut1.png" alt="1">
                <div class="series-block-autors-card-text">
                  <p>Хан Хё-джу</p>
                  <p>Актёр</p>
                </div>
              </div>
              <div class="series-block-autors-card">
                <img src="assets/img/aut2.png" alt="2">
                <div class="series-block-autors-card-text">
                  <p>Пак Хён-щик</p>
                  <p>Актёр</p>
                </div>
              </div>
              <div class="series-block-autors-card">
                <img src="assets/img/aut3.png" alt="3">
                <div class="series-block-autors-card-text">
                  <p>Чо У-джин</p>
                  <p>Актёр</p>
                </div>
              </div>
              <div class="series-block-autors-card">
                <img src="assets/img/aut4.png" alt="4">
                <div class="series-block-autors-card-text">
                  <p>Ли Джун-хёк</p>
                  <p>Актёр</p>
                </div>
              </div>
              <div class="series-block-autors-card">
                <img src="assets/img/aut5.png" alt="5">
                <div class="series-block-autors-card-text">
                  <p>Пэк Хён-джин</p>
                  <p>Актёр</p>
                </div>
              </div>
              <div class="series-block-autors-card">
                <img src="assets/img/aut6.png" alt="6">
                <div class="series-block-autors-card-text">
                  <p>Пэ Хэ-сон</p>
                  <p>Актёр</p>
                </div>
              </div>
              <div class="series-block-autors-card">
                <img src="assets/img/aut7.png" alt="7">
                <div class="series-block-autors-card-text">
                  <p>Мун Е-вон</p>
                  <p>Актёр</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="content-block">
          <div class="content-block__title">
            <h3>Сезон 1</h3>
            <div>
              <p>Сезон 1</p>
              <img src="assets/img/arrow-down.svg" alt="arrow-down">
            </div>
          </div>
          <div class="content__overlay-next">
            <img
              src="assets/img/arrow-right.svg"
              alt="arrow-right"
              class="overlay-next-img1"
            />
          </div>
          <div class="content">
            <div class="content__item seria">
                <img src="assets/img/seria1.png" alt="series" class="content__item-img img-seria"/>
                <div class="content__item-block">
                  <div class="content__title title-seria">1 Серия</div>
                  <div class="content__text text-seria">И Хен беспамятно влюбляется в Сэ Бо,<br>когда та толкает его с крыши. Спустя 12 происходит</div>
                </div>
            </div>
            <div class="content__item seria">
                <img src="assets/img/seria2.png" alt="series" class="content__item-img img-seria"/>
                <div class="content__item-block">
                  <div class="content__title title-seria">2 Серия</div>
                  <div class="content__text text-seria">В приюте для бездомных происходит<br>трагедия. Сэ Бо и И Хен переезжают в новый дом</div>
                </div>
            </div>
            <div class="content__item seria">
                <img src="assets/img/seria3.png" alt="series" class="content__item-img img-seria"/>
                <div class="content__item-block">
                  <div class="content__title title-seria">3 Серия</div>
                  <div class="content__text text-seria">Опасность сближает Сэ Бо и И Хена. Им<br>предстоит разговор с родителями подъезда</div>
                </div>
            </div>
            <div class="content__item seria">
                <img src="assets/img/seria4.png" alt="series" class="content__item-img img-seria"/>
                <div class="content__item-block">
                  <div class="content__title title-seria">4 Серия</div>
                  <div class="content__text text-seria">Молодожены оказываются запертыми в<br>жилом комплексе, а вместе с ними — новые опасности</div>
                </div>
            </div>
            <div class="content__item seria">
                <img src="assets/img/seria5.png" alt="series" class="content__item-img img-seria"/>
                <div class="content__item-block">
                  <div class="content__title title-seria">5 Серия</div>
                  <div class="content__text text-seria">Жители дома не верят словам полицейских<br>о том, что снаружи много зараженных.</div>
                </div>
            </div>
            <div class="content__item seria">
                <img src="assets/img/seria3.png" alt="series" class="content__item-img img-seria"/>
                <div class="content__item-block">
                  <div class="content__title title-seria">6 Серия</div>
                  <div class="content__text text-seria">И Хен беспамятно влюбляется в Сэ Бо,<br>когда та толкает его с крыши. Спустя 12 </div>
                </div>
            </div>
          </div>
        </section>
        <section class="content-block">
          <h3>Смотрите также</h3>
          <div class="content__overlay-next">
            <img
              src="assets/img/arrow-right.svg"
              alt="arrow-right"
              class="overlay-next-img2"
            />
          </div>
          <div class="content">
          <?php
            $series = mysqli_query($connect, query: "SELECT * FROM `dorams`");
            $series = mysqli_fetch_all($series);
            foreach($series as $series){
              ?>
              <input type="hidden" name="film_id" value="<?= $series[0]?>">
              <div class="content__item">
              <img src="<?php echo $series[1]?>" alt="film" />
              <div class="content__title"><?= $series[2]?></div>
              <div class="content__rating">
                <img src="assets/img/star.svg" alt="star" />
                <p><?=$series[3] ?></p>
                <span1></span1>
                <span2></span2>
                <div><?= $series[4]?></div>
              </div>
            </div>
            <?php
            }
          ?>
          </div>
        </section>
      </main>
      <footer class="footer">
        <div class="footer__wrapper _container">
          <div class="footer__wrapper__main">
            <div class="footer__wrapper__main-title">
              Нашей платформе доверяют миллионы людей, и на ней представлены
              лучшие обновленные фильмы со всего мира.
            </div>
            <div class="footer__wrapper__main-block">
              <nav class="footer__wrapper__main-block-nav">
                <ul class="footer__wrapper__main-block-menu">
                  <li class="footer__wrapper__main-block-item">
                    <a href="index.php" class="footer__wrapper__main-block-link"
                      >Главная</a
                    >
                  </li>
                  <li class="footer__wrapper__main-block-item">/</li>
                  <li class="footer__wrapper__main-block-item">
                    <a href="#" class="footer__wrapper__main-block-link"
                      >Сериалы</a
                    >
                  </li>
                  <li class="footer__wrapper__main-block-item">/</li>
                  <li class="footer__wrapper__main-block-item">
                    <a href="#" class="footer__wrapper__main-block-link"
                      >Фильмы</a
                    >
                  </li>
                  <li class="footer__wrapper__main-block-item">/</li>
                  <li class="footer__wrapper__main-block-item">
                    <a href="#" class="footer__wrapper__main-block-link"
                      >Релизы</a
                    >
                  </li>
                </ul>
              </nav>
              <nav class="footer__wrapper__main-block-socs">
                <ul class="footer__wrapper__main-block-socs-menu">
                  <li class="footer__wrapper__main-block-socs-item">
                    <a href="#" class="footer__wrapper__main-block-socs-link">
                      <img src="assets/img/Instagram.svg" alt="Instagram" />
                    </a>
                  </li>
                  <li class="footer__wrapper__main-block-socs-item">
                    <a href="#" class="footer__wrapper__main-block-socs-link">
                      <img src="assets/img/Facebook.svg" alt="Facebook" />
                    </a>
                  </li>
                  <li class="footer__wrapper__main-block-socs-item">
                    <a href="#" class="footer__wrapper__main-block-socs-link">
                      <img src="assets/img/Twitter.svg" alt="Twitter" />
                    </a>
                  </li>
                  <li class="footer__wrapper__main-block-socs-item">
                    <a href="#" class="footer__wrapper__main-block-socs-link">
                      <img src="assets/img/Google.svg" alt="Google" />
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="footer__wrapper__inc">
            <nav class="footer__wrapper__inc-nav">
              <ul class="footer__wrapper__inc-nav-menu">
                <li class="footer__wrapper__inc-nav-item">
                  <a href="#" class="footer__wrapper__inc-nav-link"
                    >Политика конфиденциальности</a
                  >
                </li>
                <li class="footer__wrapper__inc-nav-item">
                  <a href="#" class="footer__wrapper__inc-nav-link"
                    >Срок службы</a
                  >
                </li>
                <li class="footer__wrapper__inc-nav-item">
                  <a href="#" class="footer__wrapper__inc-nav-link">Язык</a>
                </li>
                <li class="footer__wrapper__inc-nav-item">
                  <a href="faq.php" class="footer__wrapper__inc-nav-link">FAQ</a>
                </li>
              </ul>
            </nav>
            <div class="footer__wrapper__inc-date">© 2024</div>
          </div>
        </div>
      </footer>
    </div>
  </body>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
  <script src="assets/js/scripts.js"></script>
</html>
