// $(window).scroll(function() {
//    if ($(window).scrollTop() >= 300) {
//        $('header').addClass('fixed');
//    }
//    else {
//        $('header').removeClass('fixed');
//    }
// });

// $(window).scroll(function () {
//     if ($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ {
//         $('.section-outer').addClass('scrolled');
//     } else {
//         $('.section-outer').removeClass('scrolled');
//     }
// });
function changeTab(tabIndex) {
    // Получаем все вкладки и их содержимое
    var tabs = document.getElementsByClassName('tab');
    var contentTabs = document.getElementsByClassName('content-tab');
  
    // Удаляем класс "active" у всех вкладок и их содержимого
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove('active');
      contentTabs[i].classList.remove('active');
    }
  
    // Добавляем класс "active" выбранной вкладке и ее содержимому
    tabs[tabIndex - 1].classList.add('active');
    contentTabs[tabIndex - 1].classList.add('active');
  }