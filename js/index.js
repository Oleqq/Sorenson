

const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + 24 + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var menu = document.querySelector(".menu"),
      toggle = document.querySelector(".menu-toggle");

  function toggleIcon() {
    toggle.classList.toggle("menu-open");
  }

  function toggleMenu() {
    menu.classList.toggle("active");
  }

  function closeMenu(event) {
    if (!menu.contains(event.target) && !toggle.contains(event.target)) {
      // Закрываем меню только если клик был вне меню и кнопки
      menu.classList.remove("active");
      toggle.classList.remove("menu-open");
    }
  }

  toggle.addEventListener("click", function (event) {
    // Проверяем, открыто ли меню
    if (menu.classList.contains("active")) {
      // Если меню открыто, закрываем его и меняем иконку на исходную
      menu.classList.remove("active");
      toggle.classList.remove("menu-open");
    } else {
      // Если меню закрыто, открываем его и меняем иконку
      toggleIcon();
      toggleMenu();
    }
    event.stopPropagation(); // Предотвращаем событие клика на документе
  }, false);

  document.addEventListener("click", closeMenu, false);
});





document.addEventListener("DOMContentLoaded", function () {
  // Get the parent container or element with class 'service-item'
  const serviceItem = document.querySelector(".service-item");

  // Get all the artist blocks
  const artistBlocks = document.querySelectorAll(".service-item__block");

  function updateServiceItemClass() {
    // Check if any block has the active class
    const anyActive = Array.from(artistBlocks).some((block) => block.classList.contains("service-item__block--active"));

    // Toggle the 'expanded' or 'not-expanded' class on the service-item
    if (anyActive) {
      serviceItem.classList.add("expanded");
      serviceItem.classList.remove("not-expanded");
    } else {
      serviceItem.classList.add("not-expanded");
      serviceItem.classList.remove("expanded");
    }
  }

  // Initial class setting based on initial state
  updateServiceItemClass();

  artistBlocks.forEach((block) => {
    block.addEventListener("click", function () {
      // Remove 'active' class from all blocks
      artistBlocks.forEach((b) => {
        b.classList.remove("service-item__block--active");

        // Find images within each block
        const firstImg = b.querySelector("h3.service-item__title > img:first-of-type");
        const secondImg = b.querySelector("h3.service-item__title > img:last-of-type");

        // Reset image visibility
        if (firstImg) firstImg.style.display = "block";
        if (secondImg) secondImg.style.display = "none";
      });

      // Add 'active' class to the clicked block
      block.classList.add("service-item__block--active");

      // Find images within the clicked block
      const firstImg = block.querySelector("h3.service-item__title > img:first-of-type");
      const secondImg = block.querySelector("h3.service-item__title > img:last-of-type");

      // Toggle image visibility
      if (firstImg) firstImg.style.display = "none";
      if (secondImg) secondImg.style.display = "block";

      // Update the parent service-item class
      updateServiceItemClass();
    });
  });

  // If you want to allow toggling off the active block (deselecting it)
  serviceItem.addEventListener("click", function (e) {
    const isBlockClick = e.target.closest(".service-item__block");
    if (!isBlockClick) {
      // Remove 'active' class from all blocks
      artistBlocks.forEach((block) => block.classList.remove("service-item__block--active"));
      // Update the parent service-item class
      updateServiceItemClass();
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Function to animate the numbers
  function animateNumbers(element, targetValue, duration) {
    let startValue = 0;
    let startTime = null;
    const originalText = element.textContent.trim(); // Save the original text content and trim it
    const nonNumeric = originalText.replace(/[0-9\s]/g, ""); // Extract non-numeric characters and remove spaces

    function step(currentTime) {
      if (!startTime) startTime = currentTime;
      const progress = currentTime - startTime;
      const value = Math.min(Math.floor((progress / duration) * targetValue), targetValue);
      element.textContent = value + nonNumeric; // Concatenate without a space
      if (value < targetValue) {
        requestAnimationFrame(step);
      }
    }

    requestAnimationFrame(step);
  }

  // Function to start the animation when the section is in view
  function handleIntersection(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const numsCards = entry.target.querySelectorAll(".nums__card--num");
        numsCards.forEach((num) => {
          const targetValue = parseInt(num.textContent.replace(/[^0-9]/g, ""), 10); // Get the number value
          animateNumbers(num, targetValue, 2000); // Animate over 2 seconds
        });
        observer.disconnect(); // Stop observing after animation is triggered
      }
    });
  }

  // Create an Intersection Observer
  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.5, // Trigger when 50% of the section is in view
  });

  // Observe the section with the class 'nums'
  const numsSection = document.querySelector(".nums");
  if (numsSection) {
    observer.observe(numsSection);
  }
});











document.addEventListener('DOMContentLoaded', () => {
  const blogCards = document.querySelectorAll('.blog-card');
  const loadMoreButton = document.querySelector('.blog-list__more');
  let visibleCards = window.innerWidth < 567 ? 3 : 9; // Начальное количество карточек

  function showCards() {
      blogCards.forEach((card, index) => {
          if (index < visibleCards) {
              card.style.display = 'block';
          } else {
              card.style.display = 'none';
          }
      });
  }

  function updateVisibleCards() {
    if (window.innerWidth < 567) {
      visibleCards = Math.min(visibleCards + 3, blogCards.length);
    } else {
      visibleCards = Math.min(visibleCards + 9, blogCards.length);
    }
    showCards();
  }

  showCards();

  loadMoreButton.addEventListener('click', () => {
    updateVisibleCards();
  });

  window.addEventListener('resize', () => {
    // Обновление видимых карточек при изменении размера экрана
    visibleCards = window.innerWidth < 567 ? Math.min(visibleCards, 3) : Math.min(visibleCards, 9);
    showCards();
  });
});



document.addEventListener('DOMContentLoaded', function() {
  // Объявляем переменные
  const whatWeDoLink = document.querySelector('#whatWeDoLink');
  const submenu = document.querySelector('.header__submenu');
  const whatWeDoLinkMobile = document.querySelector('#whatWeDoLinkMobile');
  const submenuMobile = document.querySelector('.submenu-mobile');
  const mobileBack = document.querySelector('.mobile-back');
  const burgerMenu = document.querySelector('.burger-menu'); // Добавляем ссылку на элемент с классом burger-menu
  const menu = burgerMenu ? burgerMenu.querySelector('.menu') : null; // Находим элемент .menu внутри burger-menu
  const headerSecondary = document.querySelector('.header.secondary'); // Добавляем ссылку на элемент с классом header.secondary
  let hideTimeout;

  // Функция для обновления классов на header.secondary
  function updateHeaderSecondary() {
    const submenuActive = submenu.classList.contains('active');
    const menuActive = menu && menu.classList.contains('active');

    if (submenuActive || menuActive) {
      headerSecondary.classList.add('active');
    } else {
      headerSecondary.classList.remove('active');
    }
  }

  // Обработка клика на #whatWeDoLink
  whatWeDoLink.addEventListener('click', function(e) {
    e.preventDefault();
    clearTimeout(hideTimeout);  
    submenu.classList.toggle('active');
    updateHeaderSecondary(); // Обновляем класс на header.secondary
  });

  // Обработка наведения на #whatWeDoLink
  whatWeDoLink.addEventListener('mouseover', function() {
    clearTimeout(hideTimeout);  
    submenu.classList.add('active');
    updateHeaderSecondary(); // Обновляем класс на header.secondary
  });

  // Обработка ухода мыши с #whatWeDoLink
  whatWeDoLink.addEventListener('mouseout', function() {
    hideTimeout = setTimeout(function() {
      submenu.classList.remove('active');
      updateHeaderSecondary(); // Обновляем класс на header.secondary
    }, 300);  
  });

  // Обработка наведения на submenu
  submenu.addEventListener('mouseover', function() {
    clearTimeout(hideTimeout);  
    submenu.classList.add('active');
    updateHeaderSecondary(); // Обновляем класс на header.secondary
  });

  // Обработка ухода мыши с submenu
  submenu.addEventListener('mouseout', function() {
    hideTimeout = setTimeout(function() {
      submenu.classList.remove('active');
      updateHeaderSecondary(); // Обновляем класс на header.secondary
    }, 100);  
  });

  // Обработка клика на #whatWeDoLinkMobile
  if (whatWeDoLinkMobile) {
    whatWeDoLinkMobile.addEventListener('click', function(e) {
      e.preventDefault();
      submenuMobile.classList.add('active');
      mobileBack.classList.add('active');
      if (menu) {
        menu.classList.add('submenu-open'); // Добавляем класс submenu-open
      }
      updateHeaderSecondary(); // Обновляем класс на header.secondary
    });
  }

  // Обработка клика на mobile-back
  if (mobileBack) {
    mobileBack.addEventListener('click', function() {
      submenuMobile.classList.remove('active');
      mobileBack.classList.remove('active');
      if (menu) {
        menu.classList.remove('submenu-open'); // Убираем класс submenu-open
      }
      updateHeaderSecondary(); // Обновляем класс на header.secondary
    });
  }

  // Функция для отслеживания изменений класса у menu
  function observeMenuClassChanges() {
    if (menu) {
      const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
          if (mutation.attributeName === 'class') {
            updateHeaderSecondary(); // Обновляем класс на header.secondary
          }
        });
      });

      observer.observe(menu, { attributes: true });
    }
  }

  observeMenuClassChanges(); // Запускаем наблюдение за изменениями класса у menu
});



















// _______________________________________________________________________ swiper js _______________________________________________________________________
document.addEventListener("DOMContentLoaded", function () {
  let swiperInstance;

  function initSwiper() {
      if (window.innerWidth <= 991 && !swiperInstance) {
          swiperInstance = new Swiper('.news-index__wrapper', {
              slidesPerView: 2,
              spaceBetween: 24,
              pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
              },
              navigation: {
                  nextEl: '.news__card-button-next',
                  prevEl: '.news__card-button-prev',
              },
              on: {
                  slideChange: function () {
                      const current = swiperInstance.realIndex + 1; // Current slide index (1-based)
                      const total = swiperInstance.slides.length; // Total number of slides

                      // Update the custom pagination
                      document.querySelector('.custom-pagination-current').textContent = current.toString().padStart(2, '0');
                      document.querySelector('.custom-pagination-total').textContent = total.toString().padStart(2, '0');
                  }
              },
              breakpoints: {
                2560: {
                  slidesPerView: 3,
                },
                1920: {
                  slidesPerView: 2,
                },
                991: {
                  slidesPerView: 2,
                },
                767: {
                  slidesPerView: 2,
                },
                567: {
                  slidesPerView: 1,
                },
                0: {
                  slidesPerView: 1,
                },
              }
          });

          // Initialize pagination with the correct numbers
          const initialTotal = swiperInstance.slides.length; // Total number of slides
          document.querySelector('.custom-pagination-current').textContent = '01';
          document.querySelector('.custom-pagination-total').textContent = initialTotal.toString().padStart(2, '0');
      } else if (window.innerWidth > 991 && swiperInstance) {
          swiperInstance.destroy(true, true);
          swiperInstance = null;
      }
  }

  // Initialize swiper on page load if necessary
  initSwiper();

  // Re-initialize swiper on window resize
  window.addEventListener('resize', function () {
      initSwiper();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let swiperInstance;

  function initSwiper() {
      if (window.innerWidth <= 991 && !swiperInstance) {
          swiperInstance = new Swiper('.nums__wrapper', {
              slidesPerView: 2,
              spaceBetween: 24,
              pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
              },
              navigation: {
                  nextEl: '.nums-button-next',
                  prevEl: '.nums-button-prev',
              },
              on: {
                  slideChange: function () {
                      const current = swiperInstance.realIndex + 1; // Current slide index (1-based)
                      const total = swiperInstance.slides.length; // Total number of slides

                      // Update the custom pagination
                      document.querySelector('.nums-pagination-current').textContent = current.toString().padStart(2, '0');
                      document.querySelector('.nums-pagination-total').textContent = total.toString().padStart(2, '0');
                  }
              },
              breakpoints: {
                2560: {
                  slidesPerView: 3,
                },
                1920: {
                  slidesPerView: 2,
                },
                991: {
                  slidesPerView: 2,
                },
                767: {
                  slidesPerView: 2,
                },
                567: {
                  slidesPerView: 1,
                },
                0: {
                  slidesPerView: 1,
                },
              }
          });

          // Initialize pagination with the correct numbers
          const initialTotal = swiperInstance.slides.length; // Total number of slides
          document.querySelector('.nums-pagination-current').textContent = '01';
          document.querySelector('.nums-pagination-total').textContent = initialTotal.toString().padStart(2, '0');
      } else if (window.innerWidth > 991 && swiperInstance) {
          swiperInstance.destroy(true, true);
          swiperInstance = null;
      }
  }

  // Initialize swiper on page load if necessary
  initSwiper();

  // Re-initialize swiper on window resize
  window.addEventListener('resize', function () {
      initSwiper();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let swiperInstance;

  function initSwiper() {
      if (window.innerWidth <= 991 && !swiperInstance) {
          swiperInstance = new Swiper('.we-do__slider', {
              slidesPerView: 1,
              spaceBetween: 24,
              pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
              },
              navigation: {
                  nextEl: '.we-do__slider-button-next',
                  prevEl: '.we-do__slider-button-prev',
              },
              on: {
                  slideChange: function () {
                      const current = swiperInstance.realIndex + 1; // Current slide index (1-based)
                      const total = swiperInstance.slides.length; // Total number of slides

                      // Update the custom pagination
                      document.querySelector('.we-do__slider-pagination-current').textContent = current.toString().padStart(2, '0');
                      document.querySelector('.we-do__slider-pagination-total').textContent = total.toString().padStart(2, '0');
                  }
              },
              
          });

          // Initialize pagination with the correct numbers
          const initialTotal = swiperInstance.slides.length; // Total number of slides
          document.querySelector('.we-do__slider-pagination-current').textContent = '01';
          document.querySelector('.we-do__slider-pagination-total').textContent = initialTotal.toString().padStart(2, '0');
      } else if (window.innerWidth > 991 && swiperInstance) {
          swiperInstance.destroy(true, true);
          swiperInstance = null;
      }
  }

  // Initialize swiper on page load if necessary
  initSwiper();

  // Re-initialize swiper on window resize
  window.addEventListener('resize', function () {
      initSwiper();
  });
});


document.addEventListener("DOMContentLoaded", function () {
  let swiperInstance;

  function initSwiper() {
      if (window.innerWidth <= 991 && !swiperInstance) {
          swiperInstance = new Swiper('.recent-spotlight__wrapper', {
              slidesPerView: 1,
              spaceBetween: 24,
              pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
              },
              navigation: {
                  nextEl: '.recent-spotlight__slider-button-next',
                  prevEl: '.recent-spotlight__slider-button-prev',
              },
              breakpoints: {
                2560: {
                  slidesPerView: 3,
                },
                1920: {
                  slidesPerView: 2,
                },
                991: {
                  slidesPerView: 2,
                },
                767: {
                  slidesPerView: 2,
                },
                567: {
                  slidesPerView: 1,
                },
                0: {
                  slidesPerView: 1,
                },
              },
              on: {
                  slideChange: function () {
                      const current = swiperInstance.realIndex + 1; // Current slide index (1-based)
                      const total = swiperInstance.slides.length; // Total number of slides

                      // Update the custom pagination
                      document.querySelector('.recent-spotlight__slider-pagination-current').textContent = current.toString().padStart(2, '0');
                      document.querySelector('.recent-spotlight__slider-pagination-total').textContent = total.toString().padStart(2, '0');
                  }
              },
              
          });

          // Initialize pagination with the correct numbers
          const initialTotal = swiperInstance.slides.length; // Total number of slides
          document.querySelector('.we-do__slider-pagination-current').textContent = '01';
          document.querySelector('.we-do__slider-pagination-total').textContent = initialTotal.toString().padStart(2, '0');
      } else if (window.innerWidth > 991 && swiperInstance) {
          swiperInstance.destroy(true, true);
          swiperInstance = null;
      }
  }

  // Initialize swiper on page load if necessary
  initSwiper();

  // Re-initialize swiper on window resize
  window.addEventListener('resize', function () {
      initSwiper();
  });
});


document.addEventListener("DOMContentLoaded", function () {
  let swiperInstance;

  function initSwiper() {
      if (window.innerWidth <= 991 && !swiperInstance) {
          swiperInstance = new Swiper('.portfolio__grid', {
              slidesPerView: 4, 
              slidesPerGroup: 4, 
              
              spaceBetween: 24, 
              pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
              },
              navigation: {
                  nextEl: '.portfolio__grid-button-next',
                  prevEl: '.portfolio__grid-button-prev',
              },
              on: {
                  slideChange: function () {
                      const current = swiperInstance.realIndex + 1; 
                      const total = swiperInstance.slides.length; 

                      
                      document.querySelector('.portfolio__grid-pagination-current').textContent = current.toString().padStart(2, '0');
                      document.querySelector('.portfolio__grid-pagination-total').textContent = total.toString().padStart(2, '0');
                  }
              },
          });

        
          const initialTotal = swiperInstance.slides.length; 
          document.querySelector('.portfolio__grid-pagination-current').textContent = '01';
          document.querySelector('.portfolio__grid-pagination-total').textContent = initialTotal.toString().padStart(2, '0');
      } else if (window.innerWidth > 991 && swiperInstance) {
          swiperInstance.destroy(true, true);
          swiperInstance = null;
      }
  }


  initSwiper();


  window.addEventListener('resize', function () {
      initSwiper();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let swiperInstance;

  function initSwiper() {
      if (window.innerWidth <= 767 && !swiperInstance) {
          swiperInstance = new Swiper('.blog-recent__cards', {
              slidesPerView: 1.1, 
              
              spaceBetween: 24, 
              pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
              },
              navigation: {
                  nextEl: '.blog-recent__cards-button-next',
                  prevEl: '.blog-recent__cards-button-prev',
              },
              on: {
                  slideChange: function () {
                      const current = swiperInstance.realIndex + 1; 
                      const total = swiperInstance.slides.length; 

                      
                      document.querySelector('.blog-recent__cards-pagination-current').textContent = current.toString().padStart(2, '0');
                      document.querySelector('.blog-recent__cards-pagination-total').textContent = total.toString().padStart(2, '0');
                  }
              },
          });

        
          const initialTotal = swiperInstance.slides.length; 
          document.querySelector('.blog-recent__cards-pagination-current').textContent = '01';
          document.querySelector('.blog-recent__cards-pagination-total').textContent = initialTotal.toString().padStart(2, '0');
      } else if (window.innerWidth > 767 && swiperInstance) {
          swiperInstance.destroy(true, true);
          swiperInstance = null;
      }
  }


  initSwiper();


  window.addEventListener('resize', function () {
      initSwiper();
  });
});
