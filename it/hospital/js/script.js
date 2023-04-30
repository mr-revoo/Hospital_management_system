let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

/*var swiper = new Swiper(".team-slider", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
>*/


    //slidesPerView: 1,
    //slidesPerGroup: 1,
    //spaceBetween: 5,
    //grabCursor: true,
    //watchOverflow: true,
    ////loop:true,
    ////grabCursor:true,
    ////spaceBetween:20,
    ////breakpoints: {
    ////    0: {
    ////        slidesPerView: 1,
    ////    },
    ////    768: {
    ////        slidesPerView: 2,
    ////    },
    ////    991: {
    ////        slidesPerView: 3,
    ////    },
    ////},
//});