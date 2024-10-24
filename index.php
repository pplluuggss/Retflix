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
      <video id="player" playsinline controls data-poster="assets/img/hero1.jpg">
      <source
        src="assets/video/BO SINN _ LXAES - Own Paradise _ EDIT - Trim.mp4"
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
      <div class=""></div>
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
      
      <div class="hero">
        <div class="hero__item">
          <div class="hero__overlay"></div>
          <video
            id="hero1"
            src="assets/video/BO SINN _ LXAES - Own Paradise _ EDIT - Trim.mp4"
            loop
            poster="assets/img/hero1.jpg"
          ></video>
          <div class="hero__content">
            <div class="details">
              <div class="details__title">Bo Sinn</div>
              <div class="details__text">
                В мрачных переулках мегаполиса скрывается коварный злодей Бо
                Синн, облачённый в своё фирменное зеленое пальто. Он лишь хочет
                справедливости в этом городе, но ему могут помешать. В погоне за
                честью, злодей Бо Синн хочет воплотить свой коварный план в
                действие. Эта напряжённая история об опасной игре ума и
                смелости, где каждый шаг может стать решающим.
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
        <div class="hero__item">
          <video
            id="hero2"
            src="assets/video/Джокер - финальный трейлер.mp4"
            loop
            poster="assets/img/hero.jpg"
          ></video>
          <div class="hero__content">
            <div class="details">
              <div class="details__title">Джокер</div>
              <div class="details__text">
                Готэм, начало 1980-х годов. Комик Артур Флек живет с больной
                матерью, которая с детства учит его «ходить с улыбкой». Пытаясь
                нести в мир хорошее и дарить людям радость, Артур сталкивается с
                человеческой жестокостью и постепенно приходит к выводу, что
                этот мир получит от него не добрую улыбку, а ухмылку злодея
                Джокера.
              </div>
              <div class="details__buttons">
                <button class="button1" >
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
        <div class="hero__item">
          <video
            id="hero3"
            src="assets/video/videoplayback_1BHuLSKF.mp4"
            loop
            poster="assets/img/Jpeg 1.jpg"
          ></video>
          <div class="hero__content">
            <div class="details">
              <div class="details__title">Джокер</div>
              <div class="details__text">
                Готэм, начало 1980-х годов. Комик Артур Флек живет с больной
                матерью, которая с детства учит его «ходить с улыбкой». Пытаясь
                нести в мир хорошее и дарить людям радость, Артур сталкивается с
                человеческой жестокостью и постепенно приходит к выводу, что
                этот мир получит от него не добрую улыбку, а ухмылку злодея
                Джокера.
              </div>
              <div class="details__buttons">
                <button class="button1">
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
        <div class="hero__item">
          <video
            id="hero4"
            src="assets/video/Джокер - финальный трейлер.mp4"
            loop
            poster="assets/img/hero.jpg"
          ></video>
          <div class="hero__content">
            <div class="details">
              <div class="details__title">Джокер</div>
              <div class="details__text">
                Готэм, начало 1980-х годов. Комик Артур Флек живет с больной
                матерью, которая с детства учит его «ходить с улыбкой». Пытаясь
                нести в мир хорошее и дарить людям радость, Артур сталкивается с
                человеческой жестокостью и постепенно приходит к выводу, что
                этот мир получит от него не добрую улыбку, а ухмылку злодея
                Джокера.
              </div>
              <div class="details__buttons">
                <button class="button1">
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
        <div class="hero__item">
          <video
            id="hero5"
            src="assets/video/Джокер - финальный трейлер.mp4"
            loop
            poster="assets/img/hero.jpg"
          ></video>
          <div class="hero__content">
            <div class="details">
              <div class="details__title">Джокер</div>
              <div class="details__text">
                Готэм, начало 1980-х годов. Комик Артур Флек живет с больной
                матерью, которая с детства учит его «ходить с улыбкой». Пытаясь
                нести в мир хорошее и дарить людям радость, Артур сталкивается с
                человеческой жестокостью и постепенно приходит к выводу, что
                этот мир получит от него не добрую улыбку, а ухмылку злодея
                Джокера.
              </div>
              <div class="details__buttons">
                <button class="button1">
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
        <section class="content-block">
          <h3>Популярные фильмы</h3>
          <div class="content__overlay-next">
            <img
              src="assets/img/arrow-right.svg"
              alt="arrow-right"
              class="overlay-next-img1"
            />
          </div>
          <div class="content">
          <?php
            $films = mysqli_query($connect, query: "SELECT * FROM `films`");
            $films = mysqli_fetch_all($films);
            foreach($films as $film){
              ?>
              <input type="hidden" name="film_id" value="<?= $film[0]?>">
              <div class="content__item">
              <img src="<?php echo $film[1]?>" alt="film" />
              <div class="content__title"><?= $film[2]?></div>
              <div class="content__rating">
                <img src="assets/img/star.svg" alt="star" />
                <p><?=$film[3] ?></p>
                <span1></span1>
                <span2></span2>
                <div><?= $film[4]?></div>
              </div>
            </div>
            <?php
            }
          ?>
          </div>
        </section>
        <section class="content-block">
          <h3>Популярные сериалы</h3>
          <div class="content__overlay-next">
            <img
              src="assets/img/arrow-right.svg"
              alt="arrow-right"
              class="overlay-next-img2"
            />
          </div>
          <div class="content">
          <?php
            $series = mysqli_query($connect, query: "SELECT * FROM `series`");
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
        <section class="subscription-wrapper _container">
          <div class="subscription">
            <div class="subscription__content">
              <div class="subscription__title">Всё лучшее в одной подписке</div>
              <img
                src="assets/img/subscription.png"
                alt="films"
                class="subscription__tel"
              />
              <div class="subscription__items">
                <div class="subscription__item">
                  <img src="assets/img/discussion_play.svg" alt="play" />
                  <div class="subscription__item__block">
                    <div class="subscription__item__block-title">
                      Смотреть что нравится
                    </div>
                    <div class="subscription__item__block-text">
                      Выбирайте на ваш вкус
                    </div>
                  </div>
                </div>
                <div class="subscription__item">
                  <img src="assets/img/discussion_play.svg" alt="play" />
                  <div class="subscription__item__block">
                    <div class="subscription__item__block-title">
                      На чём нравится
                    </div>
                    <div class="subscription__item__block-text">
                      На любом устройстве
                    </div>
                  </div>
                </div>
                <div class="subscription__item">
                  <img src="assets/img/discussion_play.svg" alt="play" />
                  <div class="subscription__item__block">
                    <div class="subscription__item__block-title">
                      Где нравится
                    </div>
                    <div class="subscription__item__block-text">
                      В транспорте, дома или на отдыхе
                    </div>
                  </div>
                </div>
                <div class="subscription__item">
                  <img src="assets/img/discussion_play.svg" alt="play" />
                  <div class="subscription__item__block">
                    <div class="subscription__item__block-title">
                      Как нравится
                    </div>
                    <div class="subscription__item__block-text">
                      Одному, с друзьями или семьей
                    </div>
                  </div>
                </div>
              </div>
              <button>Оформить</button>
            </div>
            <div class="subscription-img">
              <!-- <img src="assets/img/subscription.png" alt="films" /> -->
            </div>
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
      <div class="loader__container">
        <div class="loader">
            <span class="b1"></span>
            <span class="b2"></span>
            <span class="b3"></span>
            <span class="b4"></span>
            <span class="b5"></span>
            <span class="b6"></span>
        </div>
      </div>
    </div>
  </body>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
  <script src="assets/js/scripts.js"></script>
</html>
