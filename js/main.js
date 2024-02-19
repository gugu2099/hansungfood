
var swiper = new Swiper(".first", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
    el: ".first .swiper-pagination",
    clickable: true,
    },
    navigation: {
    nextEl: ".first .swiper-button-next",
    prevEl: ".first.swiper-button-prev",
    },
});

var swiper = new Swiper('.second', {
    slidesPerView: 6,
    loop: true,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    speed: 3500,
    direction: getDirection(),
    navigation: {
        nextEl: '.second .swiper-button-next',
        prevEl: '.second .swiper-button-prev',
    },
    on: {
        resize: function () {
        swiper.changeDirection(getDirection());
        },
    },
});

function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
}




var swiper = new Swiper(".third", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".thrid .swiper-pagination",
        clickable: true,
    },
    // navigation: {
    //     nextEl: ".third .swiper-button-next",
    //     prevEl: ".third .swiper-button-prev",
    // },
});



// var swiper = new Swiper(".third", {
//     loop: true,
//     autoplay: {
//         delay: 0,
//         disableOnInteraction: false,
//     },
//     speed: 3500,
//     pagination: {
//         el: ".swiper-pagination",
//     },
// });


// header include
window.addEventListener('load', function() {
    var allElements = document.getElementsByTagName('*');
    Array.prototype.forEach.call(allElements, function(el) {
        var includePath = el.dataset.includePath;
        if (includePath) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    el.outerHTML = this.responseText;
                }
            };
            xhttp.open('GET', includePath, true);
            xhttp.send();
        }
    });
});



// top scroll

// const scrollTop = function () {
//     const scrollBtn = document.createElement("button");
//     scrollBtn.innerHTML = "&uarr;";
//     scrollBtn.setAttribute("id", "scroll-btn");
//     document.body.appendChild(scrollBtn);
//     const scrollBtnDisplay = function () {
//     window.scrollY > window.innerHeight
//         ? scrollBtn.classList.add("show")
//         : scrollBtn.classList.remove("show");
//     };
//     window.addEventListener("scroll", scrollBtnDisplay);
//     const scrollWindow = function () {
//     if (window.scrollY != 0) {
//         setTimeout(function () {
//         window.scrollTo(0, window.scrollY - 50);
//         scrollWindow();
//         }, 10);
//     }
//     };
//     scrollBtn.addEventListener("click", scrollWindow);
// };
// scrollTop();


