const button = document.querySelector(".menu-toggle")

const menu = document.querySelector(".nav-menu")

if(button && menu) {
    button.addEventListener("click", function(){
        menu.classList.toggle("active")
    })
}