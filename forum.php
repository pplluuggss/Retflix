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
                <a href="#" class="header__link">Сериалы</a>
              </li>
              <li class="header__item">
                <a href="news.php" class="header__link">Новости</a>
              </li>
              <li class="header__item">
                <a href="forum.php" class="header__link"><span>Сообщество</span></a>
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
            poster="assets/img/hero-forum.jpg"
          ></video>
          <div class="hero__content">
            <div class="details forum-details">
              <div class="details__title forum-details-title">Стань лидером мнений в кино</div>
              <div class="details__text detail__text__series forum-details-text">
              Поделитесь своими мыслями о фильме/сериале и станьте лидером мнений
              </div>
            </div>
          </div>
        </div>
      </div>
      <main>
       <section class="forum-top">
        <div class="forum-top__title">
            <img src="assets/img/fire.png" alt="fire">
            <p>Топ фильмов и сериалов</p>
        </div>
        <div class="forum-top__content">
            <div class="forum-top__films">
                <div class="forum-top__film">
                    <img src="assets/img/forum1.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Зеленая книга</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/comedy.svg" alt="img">
                                <p>Комедия</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>45 оценок</p>
                                <span></span>
                                <p>9 статей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-top__film">
                    <img src="assets/img/forum2.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Рай под ногами матерей</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/drama.svg" alt="img">
                                <p>Драма</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>12 оценок</p>
                                <span></span>
                                <p>2 статьи</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-top__film">
                    <img src="assets/img/forum3.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Одна жизнь</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/drama.svg" alt="img">
                                <p>Драма</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>20 оценок</p>
                                <span></span>
                                <p>10 статей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-top__film">
                    <img src="assets/img/forum4.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Остров проклятый</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/triller.svg" alt="img">
                                <p>Триллер</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>19 оценок</p>
                                <span></span>
                                <p>6 статей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-top__film">
                    <img src="assets/img/forum5.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Хатико</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/drama.svg" alt="img">
                                <p>Драма</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>45 оценок</p>
                                <span></span>
                                <p>9 статей</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="forum-top__content">
            <div class="forum-top__films">
                <div class="forum-top__film">
                    <img src="assets/img/forum6.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Чернобыль</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/drama.svg" alt="img">
                                <p>Драма</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>22 оценок</p>
                                <span></span>
                                <p>11 статей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-top__film">
                    <img src="assets/img/forum7.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Страна ночи</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/detectiv.svg" alt="img">
                                <p>Детектив</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>15 оценок</p>
                                <span></span>
                                <p>5 статей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-top__film">
                    <img src="assets/img/forum8.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Миллиарды</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/drama.svg" alt="img">
                                <p>Драма</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>6 оценок</p>
                                <span></span>
                                <p>1 статья</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-top__film">
                    <img src="assets/img/forum9.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Твин пикс</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/triller.svg" alt="img">
                                <p>Триллер</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>4 оценок</p>
                                <span></span>
                                <p>0 статей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-top__film">
                    <img src="assets/img/forum10.png" alt="film">
                    <div class="forum-top__film-content">
                        <div class="forum-top__film-content-top">
                            <div class="forum-top__film-content-top-title">Почему женщин убивают</div>
                            <div class="forum-top__film-content-top-category">
                                <img src="assets/img/comedy.svg" alt="img">
                                <p>Комедия</p>
                                <span></span>
                                <p>Фильм</p>
                            </div>
                        </div>
                        <div class="forum-top__film-content-bottom">
                            <img src="assets/img/star.svg" alt="star">
                            <p>4.6</p>
                            <div class="forum-top__film-content-bottom-text">
                                <p>45 оценок</p>
                                <span></span>
                                <p>9 статей</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>
       <section class="forum">
        <div class="forum__container _container">
            <div class="forum__title">
                <img src="assets/img/star.png" alt="star">
                <p>Популярные обсуждения</p>
            </div>
            <div class="forum__block">
                <form action="assets/php/comment.php" class="forum__block-top" method="post">
                    <img src="assets/img/profile.svg" alt="profile">
                    <input type="text" name="text" placeholder="Написать..." required>
                    <button type="submit">Отправить</button>
                </form>
                <div class="forum__block-comments">
                    <?php
                        $forum = mysqli_query($connect, query:"SELECT * FROM `forum`");
                        $forum = mysqli_fetch_all($forum);
                        foreach($forum as $forum){
                            ?>
                            <input type="hidden" name="forum-id" value="<?= $forum[0]?>">
                            <div class="forum__block-comment">
                            <div class="forum__block-comment-block">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 0.53125C5.452 0.53125 0.53125 5.452 0.53125 11.5C0.53125 17.548 5.452 22.4688 11.5 22.4688C17.548 22.4688 22.4688 17.548 22.4688 11.5C22.4688 5.452 17.548 0.53125 11.5 0.53125ZM11.5 2.21875C16.6359 2.21875 20.7812 6.36409 20.7812 11.5C20.7812 16.6359 16.6359 20.7812 11.5 20.7812C6.36409 20.7812 2.21875 16.6359 2.21875 11.5C2.21875 6.36409 6.36409 2.21875 11.5 2.21875ZM11.5 5.48828L10.8925 6.09578L6.09494 10.8933L7.28125 12.1075L10.6562 8.7325V17.4062H12.3438V8.7325L15.7188 12.1075L16.9051 10.8925L12.1067 6.09494L11.4992 5.48744L11.5 5.48828Z" fill="white"/>
                            </svg>
                            <p><?= $forum[1]?></p>
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 0.53125C5.452 0.53125 0.53125 5.452 0.53125 11.5C0.53125 17.548 5.452 22.4688 11.5 22.4688C17.548 22.4688 22.4688 17.548 22.4688 11.5C22.4688 5.452 17.548 0.53125 11.5 0.53125ZM11.5 2.21875C16.6359 2.21875 20.7812 6.36409 20.7812 11.5C20.7812 16.6359 16.6359 20.7812 11.5 20.7812C6.36409 20.7812 2.21875 16.6359 2.21875 11.5C2.21875 6.36409 6.36409 2.21875 11.5 2.21875ZM11.5 5.48828L10.8925 6.09578L6.09494 10.8933L7.28125 12.1075L10.6562 8.7325V17.4062H12.3438V8.7325L15.7188 12.1075L16.9051 10.8925L12.1067 6.09494L11.4992 5.48744L11.5 5.48828Z" fill="white"/>
                            </svg>
                            </div>
                            <div class="forum__block-comment-block-hero">
                                <div class="forum__block-comment-block-hero-title"><?= $forum[2]?></div>
                                <div class="forum__block-comment-block-hero-text"><?= $forum[3]?></div>
                                <div class="forum__block-comment-block-hero-bottom">
                                    <div class="forum__block-comment-block-hero-bottom-date">
                                        <p>@Retflix</p>
                                        <span></span>
                                        <p>3 часа назад</p>
                                </div>
                                <div class="forum__block-comment-block-hero-bottom-none">
                                    <div class="forum__block-comment-block-hero-bottom-none1">
                                        <img src="assets/img/forum-heart.svg" alt="heart">
                                        <p><?= $forum[4]?></p>
                                    </div>
                                    <div class="forum__block-comment-block-hero-bottom-none1">
                                        <img src="assets/img/forum-message.svg" alt="message">
                                        <p><?= $forum[5]?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="assets/img/<?php echo $forum[6] ?>" alt="img">
                        </div>
                        <?php
                        }
                    ?>
                </div>
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
    </div>
  </body>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
  <script src="assets/js/scripts.js"></script>
</html>
