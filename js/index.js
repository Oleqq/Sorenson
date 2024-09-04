const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
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

  artistBlocks.forEach((block, index) => {
    block.addEventListener("click", function () {
      // Remove 'active' class from all blocks
      artistBlocks.forEach((b) => {
        b.classList.remove("service-item__block--active");

        // Find SVGs within each block
        const firstSvg = b.querySelector("h3.service-item__title > svg:first-of-type");
        const secondSvg = b.querySelector("h3.service-item__title > svg:last-of-type");

        // Reset SVG visibility
        if (firstSvg) firstSvg.style.display = "block";
        if (secondSvg) secondSvg.style.display = "none";
      });

      // Add 'active' class to the clicked block
      block.classList.add("service-item__block--active");

      // Find SVGs within the clicked block
      const firstSvg = block.querySelector("h3.service-item__title > svg:first-of-type");
      const secondSvg = block.querySelector("h3.service-item__title > svg:last-of-type");

      // Toggle SVG visibility
      if (firstSvg) firstSvg.style.display = "none";
      if (secondSvg) secondSvg.style.display = "block";

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








document.addEventListener("DOMContentLoaded", function () {
  let swiperInstance;

  function initSwiper() {
      if (window.innerWidth <= 991 && !swiperInstance) {
          swiperInstance = new Swiper('.news-index__wrapper', {
              slidesPerView: 2,
              spaceBetween: 10,
              pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
              },
              navigation: {
                  nextEl: '.news__card-button-prev',
                  prevEl: '.news__card-button-next',
              },
          });
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
  const swiper = new Swiper('.swiper-container', {
      loop: true,
      navigation: {
          nextEl: '.custom-swiper-button-next',
          prevEl: '.custom-swiper-button-prev',
      },
      on: {
          slideChange: function () {
              const current = swiper.realIndex + 1; // Current slide index
              const total = swiper.slides.length - 2; // Total number of slides
              document.querySelector('.custom-pagination-current').textContent = current.toString().padStart(2, '0');
              document.querySelector('.custom-pagination-total').textContent = total.toString().padStart(2, '0');
          }
      }
  });

  // Initialize pagination with the correct numbers
  document.querySelector('.custom-pagination-current').textContent = '01';
  document.querySelector('.custom-pagination-total').textContent = '03'; // Update this to reflect the actual total
});
