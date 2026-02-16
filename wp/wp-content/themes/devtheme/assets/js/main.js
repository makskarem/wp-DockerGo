// находим кнопку menu
const button = document.querySelector(".menu-toggle");

// находим menu
const menu = document.querySelector(".nav-menu");

// проверяем что элементы существуют
if (button && menu) {

    button.addEventListener("click", function() {

        menu.classList.toggle("active");

    });

}