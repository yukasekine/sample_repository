const swiper = new Swiper(".swiper", {
  loop: true,
  autoplay: true, // 自動再生{
  speed: 700,
  delay: 100,
  slidesPerView: 2,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // 前後の矢印
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // スクロールバー
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
  


const mediaQuery = window.matchMedia('(max-width: 320px)')
 
function handleTabletChange(e) {
  // メディアクエリがtrueかどうかを確認
  if (e.matches) {
    // 次に、メッセージをコンソールに記録
    const swiper = new Swiper(".swiper", {
      loop: true,
      autoplay: true, // 自動再生{
      speed: 700,
      delay: 100,
      slidesPerView: 1,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      // 前後の矢印
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      // スクロールバー
      scrollbar: {
        el: ".swiper-scrollbar",
      },
    });('Media Query Matched!')
  }
}

mediaQuery.addListener(handleTabletChange)
 
handleTabletChange(mediaQuery)




$(function () {
  $(window).scroll(function () {
    $(".final-box").each(function () {
      var targetOffset = $(this).offset().top;
      var windowHeight = $(window).height();
      var scrollPosition = $(window).scrollTop() + windowHeight;
      if (scrollPosition > targetOffset) {
        $(this).addClass("is-active");
      }
    });
  });
});











