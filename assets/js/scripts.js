$(document).ready(function () {
  $(".hero").slick({
    arrows: false,
    dots: true,
    // variableWidth: true,
  });
});
$(document).ready(function () {
  $(".series").slick({
    arrows: false,
    dots: false,
    infinite: true,
  });
});
$(document).ready(function () {
  $(".content").slick({
    arrows: true,
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: $(".overlay-prev-img"),
    nextArrow: $(".overlay-next-img1"),
    responsive: [
      {
        breakpoint: 1780,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 1470,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 1110,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
$(document).ready(function () {
  $(".forum-top__films").slick({
    arrows: true,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $(".overlay-prev-img"),
    nextArrow: $(".overlay-next-img1"),
    responsive: [
      {
        breakpoint: 1780,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 1470,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 1110,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
// Видео
$("#hero1").click(function () {
  var video = $(this).get(0);
  video.paused ? video.play() : video.pause();
});
$("#hero2").click(function () {
  var video = $(this).get(0);
  video.paused ? video.play() : video.pause();
});
$("#hero3").click(function () {
  var video = $(this).get(0);
  video.paused ? video.play() : video.pause();
});
$("#hero4").click(function () {
  var video = $(this).get(0);
  video.paused ? video.play() : video.pause();
});
$("#hero5").click(function () {
  var video = $(this).get(0);
  video.paused ? video.play() : video.pause();
});
$("#series").click(function () {
  var video = $(this).get(0);
  video.paused ? video.play() : video.pause();
});
// Меню-бургер
$(".burger").click(function () {
  this.classList.toggle("active");
  document.querySelector(".burger__container").classList.toggle("open");
  document.querySelector("body").classList.toggle("close");
});
// Загрузка
function loader() {
  document.querySelector(".loader__container").classList.add("active");
}
function fadeOut() {
  setTimeout(loader, 3000);
}
fadeOut();
// Плеер
const player = new Plyr("#player");
$("#hero-play").click(function () {
  this.classList.toggle("active");
  document.querySelector("#player").classList.toggle("open");
  document.querySelector(".hero-player > span").classList.toggle("open");
  document.querySelector(".hero-player-close").classList.toggle("open");
  document.querySelector("body").classList.toggle("close");
});
$(".hero-player-close").click(function () {
  this.classList.remove("open");
  document.querySelector("#player").classList.remove("open");
  document.querySelector(".hero-player > span").classList.remove("open");
  document.querySelector("body").classList.remove("close");
});
// Авторизация-Регистрация
$(".header__section2 .button2").click(function () {
  document.querySelector(".modal-window").classList.toggle("open");
  document.getElementsByClassName("modal-window-register")[0].style.display =
    "none";
  document.querySelector("body").classList.toggle("close");
});
$(".modal-window__close").click(function () {
  document.querySelector(".modal-window").classList.remove("open");
  document.querySelector("body").classList.remove("close");
});
$(".login").click(function () {
  document.getElementsByClassName("modal-window-login")[0].style.display =
    "none";
  document.getElementsByClassName("modal-window-register")[0].style.display =
    "block";
});
$(".register").click(function () {
  document.getElementsByClassName("modal-window-login")[0].style.display =
    "block";
  document.getElementsByClassName("modal-window-register")[0].style.display =
    "none";
});

function prov() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var button = document.getElementById("login");
  button.disabled = true;
  if (email.length != 0 && password.length != 0) {
    button.disabled = false;
    document.getElementsByClassName("buttton-login")[0].style.background =
      "#8D1E1E";
    document.getElementsByClassName("buttton-login")[0].style.color = "#fff";
  }
}
prov();
function provv() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var password_confirm = document.getElementById("password_confirm").value;
  var button = document.getElementById("register");
  button.disabled = true;
  if (
    name.length != 0 &&
    email.length != 0 &&
    password.length != 0 &&
    password_confirm.length != 0
  ) {
    button.disabled = false;
    document.getElementsByClassName("button-register")[0].style.background =
      "#8D1E1E";
    document.getElementsByClassName("button-register")[0].style.color = "#fff";
  }
}
provv();

$(".faq1").click(function () {
  document.querySelector(".faq-content1").classList.toggle("active");
});
$(".faq2").click(function () {
  document.querySelector(".faq-content2").classList.toggle("active");
});
$(".faq3").click(function () {
  document.querySelector(".faq-content3").classList.toggle("active");
});

$("#subs").click(function () {
  this.classList.toggle("active");
  document.querySelector(".profile-content-subs").classList.toggle("open");
});
$("#fav").click(function () {
  this.classList.toggle("active");
  document.querySelector(".profile-content-subs").classList.remove("open");
  document.querySelector(".profile-content-fav").classList.toggle("open");
});
