$(document).ready(function () {
  $(".hero").slick({
    arrows: false,
    dots: true,
    // variableWidth: true,
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
// Меню-бургер
document.querySelector(".burger").addEventListener("click", function () {
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
document.querySelector("#hero-play").addEventListener("click", function () {
  this.classList.toggle("active");
  document.querySelector("#player").classList.toggle("open");
  document.querySelector(".hero-player > span").classList.toggle("open");
  document.querySelector(".hero-player-close").classList.toggle("open");
  document.querySelector("body").classList.toggle("close");
});
document
  .querySelector(".hero-player-close")
  .addEventListener("click", function () {
    this.classList.remove("open");
    document.querySelector("#player").classList.remove("open");
    document.querySelector(".hero-player > span").classList.remove("open");
    document.querySelector("body").classList.remove("close");
  });
