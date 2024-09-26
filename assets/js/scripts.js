$(document).ready(function () {
  $(".hero").slick({
    arrows: false,
    dots: true,
    // variableWidth: true,
  });
});
$(document).ready(function () {
  $(".content1").slick({
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
  $(".content2").slick({
    arrows: true,
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: $(".overlay-prev-img"),
    nextArrow: $(".overlay-next-img2"),
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
  $(".content3").slick({
    arrows: true,
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: $(".overlay-prev-img"),
    nextArrow: $(".overlay-next-img3"),
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

document.querySelector(".burger").addEventListener("click", function () {
  this.classList.toggle("active");
  document.querySelector(".burger__container").classList.toggle("open");
  document.querySelector("body").classList.toggle("close");
});

const json = `[
    {
        "name": "1+1",
        "image": "assets/img/1.webp",
        "rating": "4.6",
        "category": "Фильм"
    }
]`;
const data = JSON.parse(json);

$("#content__item").jPut({
  jsonData: data,
});

$(document).ready(function () {
  var items = [
    {
      name: "1+1",
      image: "assets/img/1.webp",
      rating: "4.6",
      category: "Фильм",
    },
  ];
  jPut.items.data = items;
});
