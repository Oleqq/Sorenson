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
  // Get all the artist blocks
  const artistBlocks = document.querySelectorAll(".service-item__block");

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
    });
  });
});
