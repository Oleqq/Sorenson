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
