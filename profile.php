<?php
  session_start();
  require_once 'assets/php/config/connect.php';
  if (!$_SESSION['user']){
    header("Location: /retflix");
  }
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
              <a href="index.php" class="header__link">Главная</a>
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
            <img src="assets/img/user.svg" alt="user">
            <a href="assets/php/logout.php" style="color: #8D1E1E;">Выйти</a>
          </div>
        </div>
        <div class="header__section2">
          <button class="button1">Оформить подписку</button>
            <a href="search.php"><img src="assets/img/search.svg" alt="search" /></a>
          <img src="assets/img/user.svg" alt="user">
          <a href="assets/php/logout.php" style="color: #8D1E1E;">Выйти</a>
          <div class="burger">
            <span></span>
          </div>
        </div>
      </header>
      
      <div class="hero-prof">
          <div class="hero__overlay"></div>
          <div class="hero-prof-img"></div>
      </div>
      <main>
        <section class="profile">
          <div class="profile-assets">
            <a href="profile.php" class="profile-asset" id="subs"><span>Подписки</span></a>
            <a href="profile-fav.php" class="profile-asset" id="fav">Избранное</a>
            <a href="profile-price.php" class="profile-asset" id="price">Скидки</a>
          </div>
          <div class="profile-content">
            <div class="profile-content-subs">
              <div class="profile-content-subs-title">Тарифы подписок</div>
              <div class="profile-content-subs-cards">
                <div class="profile-content-subs-card">
                  <div class="profile-content-subs-card-title">Базовый</div>
                  <div class="profile-content-subs-card-prem">
                    <ul>
                      <li>
                        <p>Более 70 000 фильмов и сериалов</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Детский профиль и родительский контроль</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                      <li>
                        <p>Эксклюзивные фильмы и сериалы</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                      <li>
                        <p>Каталог фильмов и сериалов NETFLIX</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                      <li>
                        <p>Просмотр и загрузка без интернета</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                    </ul>
                  </div>
                  <div class="profile-content-subs-card-price">
                    <p>299 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                    <p> / в месяц</p>
                  </div>
                  <button>
                    <p>Оформить за 299 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                  </button>
                </div>
                <div class="profile-content-subs-card">
                  <div class="profile-content-subs-card-title">Стандартный</div>
                  <div class="profile-content-subs-card-prem">
                    <ul>
                      <li>
                        <p>Более 70 000 фильмов и сериалов</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Детский профиль и родительский контроль</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Эксклюзивные фильмы и сериалы</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Каталог фильмов и сериалов NETFLIX</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                      <li>
                        <p>Просмотр и загрузка без интернета</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                    </ul>
                  </div>
                  <div class="profile-content-subs-card-price">
                    <p>249 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                    <p> / в месяц</p>
                  </div>
                  <button>
                    <p>3 месяца за 749 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                  </button>
                </div>
                <div class="profile-content-subs-card">
                  <div class="profile-content-subs-card-title">Премиум</div>
                  <div class="profile-content-subs-card-prem">
                    <ul>
                      <li>
                        <p>Более 70 000 фильмов и сериалов</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Детский профиль и родительский контроль</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Эксклюзивные фильмы и сериалы</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Каталог фильмов и сериалов NETFLIX</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Просмотр и загрузка без интернета</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                    </ul>
                  </div>
                  <div class="profile-content-subs-card-price">
                    <p>216 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                    <p> / в месяц</p>
                  </div>
                  <button>
                    <p>6 месяцев за 1299 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                  </button>
                </div>
              </div>
            </div>
            
            <div class="profile-content-user">
              <div class="profile-content-user__top">
                <div class="profile-content-user__top-title">Аккаунт</div>
                <div class="profile-content-user__top-edit">
                  <img src="assets/img/edit.svg" alt="edit">
                  <p>изменить</p>
                </div>
              </div>
              <div class="profile-content-user__main">
                <div class="profile-content-user__main-account">
                  <img src="assets/img/user-big.svg" alt="user-img">
                  <div class="profile-content-user__main-account-subs">
                    <p>24</p>
                    <p>Подписчиков</p>
                  </div>
                  <div class="profile-content-user__main-account-subscr">
                  <p>4</p>
                  <p>Подписки</p>
                  </div>
                </div>
                <div class="profile-content-user__main-context">
                  <div class="profile-content-user__main-context-name">Валерий</div>
                  <div class="profile-content-user__main-context-text">Валера, зэк из Черного Дельфинчика, решил стать мастером по изготовлению фигурок из мыла. Он мастерил статуэтки в виде тюремных охранников, и однажды все охранники, увидев эти фигурки, пришли в восторг. Валера был награжден тюремным клеймом “Ракушка” и получил целый ящик мыла.</div>
                </div>
              </div>
            </div>
          </div>
          <?php
          if($_SESSION['role'] == 'admin'){
            ?>
            <div class="profile-admin-block">
          <div class="profile-admin">
              <h3>Добавить новый фильм</h3>
              <form action="assets/php/add-film.php" method="POST">
                <p>Баннер</p>
                <input type="text" name="img" placeholder="assets/img/7.png">
                <p>Название</p>
                <input type="text" name="title">
                <p>Категория</p>
                <input type="text" name="description" placeholder="Фильм">
                <button type="submit">Добавить новый фильм</button>
              </form>
            </div>
          <div class="profile-admin">
              <h3>Удалить фильм</h3>
              <form action="assets/php/delete.php" method="GET">
                <p>ID</p>
                <input type="text" name="id">
                <button type="submit">Удалить фильм</button>
              </form>
            </div>
          </div>
          <?php
          }
          
          ?>
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
