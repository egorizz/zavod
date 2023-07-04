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

const mainPhoto = document.querySelector('.main-photo img');
const photoPreviews = Array.from(document.querySelectorAll('.photo-preview'));
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentPhoto = 0;

function showCurrentPhoto() {
  mainPhoto.src = photoPreviews[currentPhoto].src;
  photoPreviews.forEach((preview) => preview.classList.remove('active'));
  photoPreviews[currentPhoto].classList.add('active');
}

function selectPhoto(index) {
  currentPhoto = index;
  showCurrentPhoto();
}

photoPreviews.forEach((preview, index) => {
  preview.addEventListener('click', () => selectPhoto(index));
});

prevBtn.addEventListener('click', () => {
  currentPhoto = (currentPhoto === 0) ? photoPreviews.length - 1 : currentPhoto - 1;
  showCurrentPhoto();
});

nextBtn.addEventListener('click', () => {
  currentPhoto = (currentPhoto === photoPreviews.length - 1) ? 0 : currentPhoto + 1;
  showCurrentPhoto();
});

showCurrentPhoto();