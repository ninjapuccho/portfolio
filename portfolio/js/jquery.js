$(function () {
  $('.humberger-button, .humberger-button--sp').on('click', function () {
    toggleClass();
  });

  $('.humberger-menu__link, .humberger-menu__title').on('click', function () {
    toggleClass();
  });

  function toggleClass() {
    $('.humberger-menu__container, .humberger-line, .humberger-line--sp').toggleClass('is-active');
    $('.humberger-menu__container').fadeToggle(500);
  }

  let humbergerButton = $('#humberger-button');

  $(window).scroll(function () {
    if ($(this).scrollTop() > 750) {
      humbergerButton.addClass('display-block');
    } else {
      humbergerButton.removeClass('display-block');
    }
  });

  let scrollBtn = $('#scroll-button');
  scrollBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 750) {
      scrollBtn.fadeIn();
    } else {
      scrollBtn.fadeOut();
    }

    scrollHeight = $(document).height(); //ドキュメントの高さ 
    scrollPosition = $(window).height() + $(window).scrollTop(); //現在地 
    footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
    if (scrollHeight - scrollPosition <= footHeight) {
      $(scrollBtn).css({
        "position": "absolute"
      });
    } else {
      $(scrollBtn).css({
        "position": "fixed",
        "bottom": "1rem"
      });
    }
  });

  scrollBtn.on('click', (function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  })
  );

  $('a[href^="#"]').on('click', (function () {
    let speed = 500;　//スクロールスピード
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  })
  );

});