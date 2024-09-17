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
    nextArrow: $(".overlay-next-img"),
  });
});
$(document).ready(function () {
  var slider = $(".slider");
  slider.slick();
  slider.find(".slick-slide").css("margin", "0 6px");
  slider.slick("setPosition");
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
