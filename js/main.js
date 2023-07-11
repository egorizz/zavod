"use strict";

window.onload = () => {
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
  window.changeTab = (tabIndex) => {
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
  
  // const mainPhoto = document.querySelector('.main-photo img');
  // const photoPreviews = Array.from(document.querySelectorAll('.photo-preview'));
  // const prevBtn = document.querySelector('.prev-btn');
  // const nextBtn = document.querySelector('.next-btn');
  
  // let currentPhoto = 0;
  
  // function showCurrentPhoto() {
  //   mainPhoto.src = photoPreviews[currentPhoto].src;
  //   photoPreviews.forEach((preview) => preview.classList.remove('active'));
  //   photoPreviews[currentPhoto].classList.add('active');
  // }
  
  // function selectPhoto(index) {
  //   currentPhoto = index;
  //   showCurrentPhoto();
  // }
  
  // photoPreviews.forEach((preview, index) => {
  //   preview.addEventListener('click', () => selectPhoto(index));
  // });
  
  // prevBtn.addEventListener('click', () => {
  //   currentPhoto = (currentPhoto === 0) ? photoPreviews.length - 1 : currentPhoto - 1;
  //   showCurrentPhoto();
  // });
  
  // nextBtn.addEventListener('click', () => {
  //   currentPhoto = (currentPhoto === photoPreviews.length - 1) ? 0 : currentPhoto + 1;
  //   showCurrentPhoto();
  // });
  
  // showCurrentPhoto();
  const slider = document.querySelector('.slider-new');
  const slides = document.querySelectorAll('.slide');
  
  if (slides.length > 0) {
    const slideWidth = slides[0].clientWidth;
    let slideIndex = 0;
  
    function slide() {
      if (slideIndex === slides.length - 1) {
        slideIndex = 0;
      } else {
        slideIndex++;
      }
      slider.style.transform = `translateX(${-slideIndex * slideWidth}px)`;
    }
  
    setInterval(slide, 2000);
  }
  
  const header = document.querySelector('.outer-header');
  
  document.querySelector('.burger').addEventListener('click', () => {
    console.log("click")
    header.classList.toggle('outer-header-active-nav')
    if (header.classList.contains('outer-header-active-nav')) {
      hidescroll();
    }
    else {
      shoScroll();
    }
  });
  
  const hidescroll = () => {
    const scrollWidth = `${getScrollbarWidth()}px`;
    document.body.style.paddingRight = scrollWidth;
    document.body.style.overflow = 'hidden';
  
    document.getElementById('section-navigation').style.paddingRight = scrollWidth;
  };
  
  const shoScroll = () => {
    document.body.style.paddingRight = '';
    document.body.style.overflow = 'visible';
  
    document.getElementById('section-navigation').style.paddingRight = '';
  };
  
  const resetNav = () => {
    header.classList.remove('outer-header-active-nav')
    shoScroll();
  }
  window.addEventListener('resize', resetNav);
  
  // Get scrollbar width
  const getScrollbarWidth = () => {
    const outer = document.createElement('div');
  
    outer.style.position = 'absolute';
    outer.style.top = '-9999px'; 
    outer.style.width = '50px'; 
    outer.style.height = '50px'; 
    outer.style.overflow = 'scroll'; 
    outer.style.visibility = 'hidden';
  
    document.body.appendChild(outer);
    const scrollBarWidth = outer.offsetWidth - outer.clientWidth; 
    document.body.removeChild(outer);
  
    return scrollBarWidth;
  };
}
