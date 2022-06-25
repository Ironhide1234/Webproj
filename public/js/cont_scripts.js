$(document).ready(function () {
  let position = 0;
  let slidesToShow = 3;
  let slidesToScroll = 2;
  if (window.matchMedia("(max-width: 768px)").matches) {
    console.log("aboba");
    slidesToShow = 1;
    slidesToScroll = 1;
  }
  const main = $(".slider_main");
  const line = $(".slider_line");
  const item = $(".slider_img");
  const itemsCount = item.length;
  const btnPrev = $(".slider_prev");
  const btnNext = $(".slider_next");
  const itemWidth = main.width() / slidesToShow;
  const movePosition = slidesToScroll * itemWidth;

  item.each(function (index, item) {
    $(item).css({
      minWidth: itemWidth,
    });
  });

  btnPrev.click(function () {
    const itemsLeft = Math.abs(position) / itemWidth;
    position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
    setPosition();
    checkBtns();
  });

  btnNext.click(function () {
    const itemsLeft = itemsCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;
    position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
    setPosition();
    checkBtns();
  });

  const setPosition = () => {
    line.css({
      transform: `translateX(${position}px)`,
    });
  };

  const checkBtns = () => {
    btnPrev.prop("disabled", position === 0);
    btnNext.prop("disabled", position <= -(itemsCount - slidesToShow) * itemWidth);
  };
  checkBtns();
});
